<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller
{
    public $table = '';
    public $controller = 'Search';
    public $message = 'Result';
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
        $data['keyword'] = $this->input->get('q');
        
        
        $data['controller_n'] = 'Nutrients';
        $data['result_nutrients'] = $this->$model->select_like('nutrients','nkeywords',$data['keyword']);
        
        $this->load->view('Search/index',$data);
    }

}
?>
