<?php
    class Teman extends Controller {
        public function index(){
            $data['judul'] = 'Daftar Teman';
            $data['tmn'] = $this->model('Teman_model')->getALLtmn();
            $this->view('templates/header', $data);
            $this->view('teman/index', $data);
            $this->view('templates/footer');
        }

        public function tambah()
        {
            // Periksa file upload
            if (isset($_FILES['foto']) && $_FILES['foto']['error'] == UPLOAD_ERR_OK) {
                $namaFile = $_FILES['foto']['name'];
                $tmpName = $_FILES['foto']['tmp_name'];
                $uploadDir = __DIR__ . '/../../public/img/';

                // Pindahkan file 
                if (move_uploaded_file($tmpName, $uploadDir . $namaFile)) {
                    // Simpan ke database
                    $data = [
                        'nama' => $_POST['nama'],
                        'umur' => $_POST['umur'],
                        'jenis_kelamin' => $_POST['jenis_kelamin'],
                        'email' => $_POST['email'],
                        'foto' => $namaFile
                    ];

                    // Panggil model untuk menyimpan data
                    if ($this->model('Teman_model')->tambahTeman($data)) {
                        header('Location: ' . BASEURL . '/teman');
                        exit;
                    } else {
                        echo "Gagal menyimpan data ke database.";
                    }
                } else {
                    echo "Gagal mengupload file.";
                }
            } else {
                echo "Tidak ada file yang diupload atau terjadi kesalahan saat upload.";
            }
        }
    }
?>
