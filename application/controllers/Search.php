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
    }

    public function index()
    {
        $model = $this->model;
        $data['controller'] = $this->controller;
        $did = $this->input->post('did');
        $data['disease_sp'] = $this->$model->select(array(),'disease',array('did'=>$did),'');
        $this->load->view('Search/index',$data);
    }

}
?>
