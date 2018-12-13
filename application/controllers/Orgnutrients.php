<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Orgnutrients extends CI_Controller
{
    public $table = 'orgnutrients';
    public $controller = 'Orgnutrients';
    public $message = 'Orgnutrients';
    public $primary_id = "onid";
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
        $data['orgnutrients'] = $this->$model->select(array(),'orgnutrients',array(),'');
        $this->load->view('Orgnutrients/index',$data);
    }

    public function product()
    {
        $model = $this->model;
        $data['controller'] = $this->controller;
        $onid = $this->input->get('onid');
        $data['product'] = $this->$model->select(array(),'orgnutrients',array('onid'=>$onid),'');
        $this->load->view('Orgnutrients/product',$data);
    }

}
?>
