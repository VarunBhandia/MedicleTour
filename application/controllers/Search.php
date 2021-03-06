<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller
{
    public $table = 'slabs';
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
        $dname = $this->input->get('dname');
        $dcouid = $this->input->get('couid');
        $data['row'] = $this->$model->select(array(),'diseases',array('dname'=>$dname,'dcouid'=>$dcouid),'');
        $data['hospitals'] = $this->$model->select(array(),'hospitals',array(),'');
        $data['doctors'] = $this->$model->select(array(),'doctors',array(),'');
        $data['countries'] = $this->$model->select(array(),'countries',array(),'');
        $this->load->view('Search/index',$data);
    }

}
?>
