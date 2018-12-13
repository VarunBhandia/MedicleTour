<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supplements extends CI_Controller
{
    public $table = 'supplements';
    public $controller = 'Supplements';
    public $message = 'Supplements';
    public $primary_id = "sid";
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
        $data['supplements'] = $this->$model->select(array(),'supplements',array(),'');
        $this->load->view('Supplements/index',$data);
    }

    public function product()
    {
        $model = $this->model;
        $data['controller'] = $this->controller;
        $sid = $this->input->get('sid');
        $data['product'] = $this->$model->select(array(),'supplements',array('sid'=>$sid),'');
        $this->load->view('Supplements/product',$data);
    }

}
?>
