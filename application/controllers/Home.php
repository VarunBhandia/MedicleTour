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
    }

    public function index()
    {
        $model = $this->model;
        $data['controller'] = $this->controller;
        $data['diseases'] = $this->$model->select(array(),'disease',array(),'');
        $data['countries'] = $this->$model->select(array(),'countries',array(),'');
        $this->load->view('Home/index',$data);
    }

}
?>
