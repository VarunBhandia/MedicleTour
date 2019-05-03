<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Doctors extends CI_Controller
{
    public $table = 'doctors';
    public $controller = 'Doctors';
    public $message = 'Disease';
    public $primary_id = "docid";
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
        $data['doctors'] = $this->$model->select(array(),'doctors',array(),'');
        $this->load->view('Doctors/index',$data);
    }

    public function profile($docid)
    {
        $model = $this->model;
        $data['action'] = "update";
        $data['controller'] = $this->controller;
        $data['row'] = $this->$model->select(array(),'doctors',array('docid'=>$docid),'');
        $this->load->view('Doctors/header',$data); 
        $this->load->view('Doctors/profile',$data);
    }

}
?>

