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
    public function dashboard()
    {
        $data['title'] = "dashboard Admin";
        $this->load->view('admin/template/header',$data);
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/dashboard');
        $this->load->view('admin/template/footer');
    }
    public function data_film()
    {
        $data['title'] = "dashboard Admin";
        $this->load->view('admin/template/header',$data);
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/data_film');
        $this->load->view('admin/template/footer');
    }
    public function tambah_film()
    {
        $data['title'] = "dashboard Admin";
        $this->load->view('admin/template/header',$data);
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/tambah_film');
        $this->load->view('admin/template/footer');
    }
}
/* End of file Admin.php and path \application\controllers\Admin.php */
