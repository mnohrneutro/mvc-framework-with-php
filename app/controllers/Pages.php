<?php
class Pages extends Controller{
    public function __construct()
    {
       $this->userModel = $this->model('User');
    }

    public function index(){
        $users=$this->userModel->getUsers();
        $data = [
            'title' => 'mvc page',
            'users' => $users
        ];
        return $this->view('pages/index',$data);
    }

    public function about(){
        return $this->view('pages/about');
    }
}