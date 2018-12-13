<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mainadmin extends CI_Controller
{
    public $table = 'maintenances';
    public $controller = 'Mainadmin';
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

    function index()
    {  
        $model = $this->model;
        if($this->session->userdata('username') != '')  
        {
            $username = $this->session->userdata('username');
            $data['maintenances'] = $this->$model->select(array(),'maintenances',array(),'');
            $data['controller'] = $this->controller;

            $this->load->view("Admin/Maintenances/table",$data); 
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

            $this->load->view('Admin/Maintenances/form',$data);
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

            $mname = $this->input->post('mname');
            $mfeedlink = $this->input->post('mfeedlink');
            $mserlink = $this->input->post('mserlink');
            $mdesc = $this->input->post('mdesc');
            $mkeywords = $this->input->post('mkeywords');

            $config['upload_path']          = './uploads/maintenances/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 100;

            $this->load->library('upload', $config);        
            if ( $this->upload->do_upload('mimg'))
            {
                $img_data = $this->upload->data();
                $image_path = base_url("uploads/maintenances/".$img_data['raw_name'].$img_data['file_ext']);

            }

            $data = array(
                'mname'  => $mname,
                'mimg' => $image_path,
                'mfeedlink' => $mfeedlink,
                'mserlink' => $mserlink,
                'mdesc' => $mdesc,
                'mkeywords' => $mkeywords,
            );

            //        echo '<pre>';
            //        print_r($data);
            //        echo '</pre>';

            $this->$model->insert($data,'maintenances');
            redirect('Mainadmin');
        }  
        else  
        {  
            redirect(base_url() . 'Admin/login');  
        }  

    }

    public function edit($mid)
    {
        if($this->session->userdata('username') != '')  
        {

            $model = $this->model;
            $data['action'] = "update";
            $data['controller'] = $this->controller;
            $data['row'] = $this->$model->select(array(),'maintenances',array('mid'=>$mid),'');
            $this->load->view('Admin/Maintenances/form',$data);
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

            $mid = $this->input->post('mid');
            $mname = $this->input->post('mname');
            $mfeedlink = $this->input->post('mfeedlink');
            $mserlink = $this->input->post('mserlink');
            $mdesc = $this->input->post('mdesc');
            $mkeywords = $this->input->post('mkeywords');

            $config['upload_path']          = './uploads/maintenances/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 100;

            $this->load->library('upload', $config);        
            if ( $this->upload->do_upload('mimg'))
            {
                $img_data = $this->upload->data();
                $image_path = base_url("uploads/maintenances/".$img_data['raw_name'].$img_data['file_ext']);

            }

            $data = array(
                'mid'  => $mid,
                'mname'  => $mname,
                'mimg' => $image_path,
                'mfeedlink' => $mfeedlink,
                'mserlink' => $mserlink,
                'mdesc' => $mdesc,
                'mkeywords' => $mkeywords,
            );

            $where = array('mid'=>$mid);
            $this->$model->update('maintenances',$data,$where);

            redirect('Mainadmin');
        }  
        else  
        {  
            redirect(base_url() . 'Admin/login');  
        }  

    }

    public function delete($mid)
    {
        if($this->session->userdata('username') != '')  
        {

            $model = $this->model;
            $condition = array('mid'=>$mid);
            $this->$model->delete('maintenances',$condition);

            redirect('Mainadmin');
        }  
        else  
        {  
            redirect(base_url() . 'Admin/login');  
        }  

    }
}
?>