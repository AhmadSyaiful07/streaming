<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {

    }
    public function login()
    {
        $data['title'] = "LOGIN";
        $this->load->view('login/template/header',$data);
        $this->load->view('login/login');
        $this->load->view('login/template/footer');
    }
    public function register()
    {
        $data['title'] = "REGISTER";
        $this->load->view('login/template/header',$data);
        $this->load->view('login/register');
        $this->load->view('login/template/footer');
    }
    public function Lost_Pass()
    {
        $data['title'] = "Lost Pass";
        $this->load->view('login/template/header',$data);
        $this->load->view('login/lost_pass');
        $this->load->view('login/template/footer');
    }
}

/* End of file Admin.php and path \application\controllers\Admin.php */
