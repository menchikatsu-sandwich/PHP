<?php 
class Home extends Controller {
    public function index(){
        $data['judul'] = 'Home';
        $data['nama'] = $this->model('User_model')->getUser();
        $this->view('templates/header2', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
}
?>