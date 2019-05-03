<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{
    public $table = 'disease';
    public $controller = 'Concrete_calculator';
    public $message = 'Calculators';
    public $primary_id = "id";
    public $model;

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model');
        $this->model = 'Model';
        date_default_timezone_set('Asia/Kolkata');
        $this->load->view('Include/enquiry');
    }

    public function index()
    {
        $model = $this->model;
        $data['controller'] = $this->controller;
        $data['diseases'] = $this->$model->select(array('DISTINCT(dname)'),'diseases',array(),'');
        $data['countries'] = $this->$model->select(array(),'countries',array(),'');
        $this->load->view('Home/index',$data);
    }

    public function about()
    {
        $model = $this->model;
        $data['controller'] = $this->controller;
        $data['diseases'] = $this->$model->select(array(),'diseases',array(),'');
        $data['countries'] = $this->$model->select(array(),'countries',array(),'');
        $this->load->view('Home/about');
    }

    public function contact()
    {
        $model = $this->model;
        $data['controller'] = $this->controller;
        $data['diseases'] = $this->$model->select(array(),'diseases',array(),'');
        $data['countries'] = $this->$model->select(array(),'countries',array(),'');
        $this->load->view('Home/contact');
    }

    public function insertEnquiry()
    {
            $model = $this->model;

            $username = $this->input->post('username');
            $number = $this->input->post('number');
            $email = $this->input->post('email');
            $country = $this->input->post('country');
            $state = $this->input->post('state');
            $desc = $this->input->post('desc');

            $data = array(
                'username'  => $username,
                'number'  => $number,
                'email'  => $email,
                'country'  => $country,
                'state'  => $state,
                'desc_enquiry'  => $desc,
            );
            $this->$model->insert($data,'enquiry');
            redirect('Home/Index');
    }

}
?>
