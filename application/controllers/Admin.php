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
                redirect(base_url() . 'Admin/doctor');  
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

    function doctor()
    {  
        $model = $this->model;
        if($this->session->userdata('username') != '')  
        {
            $username = $this->session->userdata('username');
            $data['doctors'] = $this->$model->select(array(),'doctors',array(),'');

            $this->load->view("Admin/doctor",$data); 
        }  
        else  
        {  
            redirect(base_url() . 'Admin/login');  
        }  
    } 

    public function addDoctor()
    {
        $model = $this->model;
        $data['action'] = "insert";
        $data['controller'] = $this->controller;
        $this->load->view('Admin/formDoctor',$data);
    }

    public function insertDoctor()
    {
        $model = $this->model;

        $docname = $this->input->post('docname');
        $data = array(
            'docname'  => $docname,
        );
        $this->$model->insert($data,'doctors');
        redirect('Admin/doctor');
    }

    public function editDoctor($docid)
    {
        $docid = $this->uri->segment(3);
        $model = $this->model;
        $data['action'] = "update";
        $data['controller'] = $this->controller;
        $data['row'] = $this->$model->select(array(),'doctors',array('docid'=>$docid),'');
        $this->load->view('Admin/formDoctor',$data);
    }

    public function updateDoctor()
    {
        $model = $this->model;

        $docid = $this->input->post('docid');
        $docname = $this->input->post('docname');

        $data = array(
            'docid'  => $docid,
            'docname'  => $docname,
        );

        $where = array('docid'=>$docid);
        $this->$model->update('doctors',$data,$where);

        redirect('Admin/doctor');
    }

    public function deleteDoctor($docid)
    {
        $model = $this->model;
        $condition = array('docid'=>$docid);
        $this->$model->delete('doctors',$condition);

        redirect('Admin/doctor');
    }


    function logout()  
    {  
        $this->session->unset_userdata('username');  
        redirect(base_url() . 'Admin/login');  
    }  
}  
