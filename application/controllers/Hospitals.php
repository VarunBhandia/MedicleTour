<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hospitals extends CI_Controller
{
    public $table = 'hospitals';
    public $controller = 'Hospitals';
    public $message = 'Disease';
    public $primary_id = "hid";
    public $model;

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model');
        $this->model = 'Model';
        date_default_timezone_set('Asia/Kolkata');
    }

    public function index()
    {
        $model = $this->model;
        $data['controller'] = $this->controller;
        $data['hospitals'] = $this->$model->select(array(),'hospitals',array(),'');
        $this->load->view('Hospitals/index',$data);
    }

    public function profile($hid)
    {
        $model = $this->model;
        $data['action'] = "update";
        $data['controller'] = $this->controller;
        $data['row'] = $this->$model->select(array(),'hospitals',array('hid'=>$hid),'');
        $this->load->view('Hospitals/header',$data);
        $this->load->view('Hospitals/profile',$data);
    }


}
?>
