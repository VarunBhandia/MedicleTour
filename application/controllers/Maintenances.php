<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Maintenances extends CI_Controller
{
    public $table = 'maintenances';
    public $controller = 'Maintenances';
    public $message = 'Maintenances';
    public $primary_id = "mid";
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
        $data['maintenances'] = $this->$model->select(array(),'maintenances',array(),'');
        $this->load->view('Maintenances/index',$data);
    }

    public function product()
    {
        $model = $this->model;
        $data['controller'] = $this->controller;
        $mid = $this->input->get('mid');
        $data['product'] = $this->$model->select(array(),'maintenances',array('mid'=>$mid),'');
        $this->load->view('Maintenances/product',$data);
    }

}
?>
