<?php
class CameraController extends Controller {
    public function index() {
        $cameraModel = $this->model('CameraModel');
        $cameras = $cameraModel->getAllCameras();
        $this->view('dashboard/customer', ['cameras' => $cameras]);
    }

    public function admin(){
        $this->view('dashboard/admin');
    }

    public function add() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = $_POST['name'];
            $details = $_POST['details'];
            $stock = $_POST['stock'];

            $cameraModel = $this->model('CameraModel');
            if ($cameraModel->addCamera($name, $details, $stock)) {
                header('Location: ' . BASEURL . '/camera/index');
                exit();
            } else {
                echo "Failed to add camera";
            }
        } else {
            $this->view('camera/add');
        }
    }

    public function delete($id) {
        $cameraModel = $this->model('CameraModel');
        if ($cameraModel->deleteCamera($id)) {
            header('Location: ' . BASEURL . '/camera/index');
        } else {
            echo "Failed to delete camera";
        }
    }
}
