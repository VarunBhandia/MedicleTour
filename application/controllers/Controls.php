<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controls extends CI_Controller
{
    public $table = 'controls';
    public $controller = 'Controls';
    public $message = 'Controls';
    public $primary_id = "cid";
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
        $data['controls'] = $this->$model->select(array(),'controls',array(),'');
        $this->load->view('Controls/index',$data);
    }

    public function product()
    {
        $model = $this->model;
        $data['controller'] = $this->controller;
        $cid = $this->input->get('cid');
        $data['product'] = $this->$model->select(array(),'controls',array('cid'=>$cid),'');
        $this->load->view('Controls/product',$data);
    }

}
?>
