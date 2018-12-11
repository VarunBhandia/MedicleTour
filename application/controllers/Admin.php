<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
class Admin extends CI_Controller {  

    public $table = 'users';
    public $controller = 'Admin';
    public $primary_id = "uid";
    public $model;

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model');
        $this->model = 'Model';
        date_default_timezone_set('Asia/Kolkata');
    }

    function index()  
    {  
        $this->load->view("login");  
    }  

    function login_validation()  
    {  
        $this->load->library('form_validation');  
        $this->form_validation->set_rules('username', 'Username', 'required');  
        $this->form_validation->set_rules('password', 'Password', 'required');  
        if($this->form_validation->run())  
        {  
            //true  
            $username = $this->input->post('username');  
            $password = $this->input->post('password');  
            //model function  
            $this->load->model('main_model');  
            if($this->main_model->can_login($username, $password))  
            {  
                $session_data = array(  
                    'username'     =>     $username  
                );  
                $this->session->set_userdata($session_data);  
                redirect(base_url() . 'Nutadmin');  
            }  
            else  
            {  
                $this->session->set_flashdata('error', 'Invalid Username and Password');  
                redirect(base_url() . 'Admin/login');  
            }  
        }  
        else  
        {  
            //false  
            $this->login();  
        }  
    }  

    function logout()  
    {  
        $this->session->unset_userdata('username');  
        redirect(base_url() . 'Admin/login');  
    }  
}  
