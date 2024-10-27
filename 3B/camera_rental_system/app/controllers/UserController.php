<?php
class UserController extends Controller {
    public function register() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $nama = $_POST['nama'];
            $alamat = $_POST['alamat'];

            $userModel = $this->model('UserModel');
            if ($userModel->register($username, $password, $nama, $alamat, 'customer')) {
                header('Location: ' . BASEURL . '/user/login');
                exit();
            } else {
                echo "Registration failed";
            }
        } else {
            $this->view('user/register');
        }
    }

    public function login() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $userModel = $this->model('UserModel');
            $user = $userModel->getByUsername($username);

            if ($user && $password === $user['password']) {
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['role'] = $user['role'];

                echo "Role: " . $user['role'];

                if ($user['role'] == 'admin') {
                    header('Location:' . BASEURL . '/camera/admin');
                } else {
                    header('Location: ' . BASEURL . '/camera/index');
                }
                exit();
            } else {
                echo "Invalid username or password";
            }
        } else {
            $this->view('user/login');
        }
    }

    public function logout() {
        session_destroy();
        header('Location: ' . BASEURL . '/user/login');
    }
}
