<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bionutrients extends CI_Controller
{
    public $table = 'bionutrients';
    public $controller = 'Bionutrients';
    public $message = 'Bionutrients';
    public $primary_id = "bnid";
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
        $data['bionutrients'] = $this->$model->select(array(),'bionutrients',array(),'');
        $this->load->view('Bionutrients/index',$data);
    }

    public function product()
    {
        $model = $this->model;
        $data['controller'] = $this->controller;
        $bnid = $this->input->get('bnid');
        $data['product'] = $this->$model->select(array(),'bionutrients',array('bnid'=>$bnid),'');
        $this->load->view('Bionutrients/product',$data);
    }

}
?>
