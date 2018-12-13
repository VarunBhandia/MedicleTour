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
    }

    public function index()
    {
        $model = $this->model;
        $data['controller'] = $this->controller;
        $data['doctors'] = $this->$model->select(array(),'doctors',array(),'');
        $this->load->view('Doctors/index',$data);
    }

}
?>

