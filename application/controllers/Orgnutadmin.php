<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Orgnutadmin extends CI_Controller
{
    public $table = 'orgnutrients';
    public $controller = 'Orgnutadmin';
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

    function index()
    {  
        $model = $this->model;
        if($this->session->userdata('username') != '')  
        {
            $username = $this->session->userdata('username');
            $data['orgnutrients'] = $this->$model->select(array(),'orgnutrients',array(),'');
            $data['controller'] = $this->controller;

            $this->load->view("Admin/Orgnutrients/table",$data); 
        }  
        else  
        {  
            redirect(base_url() . 'Admin/login');  
        }  
    } 

    public function add()
    {
        if($this->session->userdata('username') != '')  
        {
            $model = $this->model;
            $data['action'] = "insert";
            $data['controller'] = $this->controller;

            $this->load->view('Admin/Orgnutrients/form',$data);
        }  
        else  
        {  
            redirect(base_url() . 'Admin/login');  
        }  
    }

    public function insert()
    {
        if($this->session->userdata('username') != '')  
        {

            $model = $this->model;

            $onname = $this->input->post('onname');
            $onfeedlink = $this->input->post('onfeedlink');
            $onserlink = $this->input->post('onserlink');
            $ondesc = $this->input->post('ondesc');
            $onkeywords = $this->input->post('onkeywords');

            $config['upload_path']          = './uploads/orgnutrients/s';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 100;

            $this->load->library('upload', $config);        
            if ( $this->upload->do_upload('nimg'))
            {
                $img_data = $this->upload->data();
                $image_path = base_url("uploads/orgnutrients/".$img_data['raw_name'].$img_data['file_ext']);

            }

            $data = array(
                'onname'  => $onname,
                'onimg' => $image_path,
                'onfeedlink' => $onfeedlink,
                'onserlink' => $onserlink,
                'ondesc' => $ondesc,
                'onkeywords' => $onkeywords,
            );

            $this->$model->insert($data,'orgnutrients');
            redirect('Orgnutadmin');
        }  
        else  
        {  
            redirect(base_url() . 'Admin/login');  
        }  

    }

    public function edit($onid)
    {
        if($this->session->userdata('username') != '')  
        {

            $model = $this->model;
            $data['action'] = "update";
            $data['controller'] = $this->controller;
            $data['row'] = $this->$model->select(array(),'orgnutrients',array('onid'=>$onid),'');
            $this->load->view('Admin/Orgnutrients/form',$data);
        }
        else  
        {  
            redirect(base_url() . 'Admin/login');  
        }  
    }
    public function update()
    {
        if($this->session->userdata('username') != '')  
        {

            $model = $this->model;

            $onid = $this->input->post('onid');
            $onname = $this->input->post('onname');
            $onfeedlink = $this->input->post('onfeedlink');
            $onserlink = $this->input->post('onserlink');
            $ondesc = $this->input->post('ondesc');
            $onkeywords = $this->input->post('onkeywords');

            $config['upload_path']          = './uploads/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 100;

            $this->load->library('upload', $config);        
            if ( $this->upload->do_upload('nimg'))
            {
                $img_data = $this->upload->data();
                $image_path = base_url("uploads/orgnutrients/".$img_data['raw_name'].$img_data['file_ext']);

            }

            $data = array(
                'onid'  => $onid,
                'onname'  => $onname,
                'onimg' => $image_path,
                'onfeedlink' => $onfeedlink,
                'onserlink' => $onserlink,
                'ondesc' => $ondesc,
                'onkeywords' => $onkeywords,
            );

            $where = array('onid'=>$onid);
            $this->$model->update('orgnutrients',$data,$where);

            redirect('Orgnutadmin');
        }  
        else  
        {  
            redirect(base_url() . 'Admin/login');  
        }  

    }

    public function delete($onid)
    {
        if($this->session->userdata('username') != '')  
        {

            $model = $this->model;
            $condition = array('onid'=>$onid);
            $this->$model->delete('orgnutrients',$condition);

            redirect('Orgnutadmin');
        }  
        else  
        {  
            redirect(base_url() . 'Admin/login');  
        }  

    }
}
?>