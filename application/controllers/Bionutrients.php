<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nutrients extends CI_Controller
{
    public $table = 'nutrients';
    public $controller = 'Nutrients';
    public $message = 'Nutrients';
    public $primary_id = "nid";
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
        $data['nutrients'] = $this->$model->select(array(),'nutrients',array(),'');
        $this->load->view('Nutrients/index',$data);
    }

}
?>
