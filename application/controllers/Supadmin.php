<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supadmin extends CI_Controller
{
    public $table = 'supplements';
    public $controller = 'Supadmin';
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

    function index()
    {  
        $model = $this->model;
        if($this->session->userdata('username') != '')  
        {
            $username = $this->session->userdata('username');
            $data['supplements'] = $this->$model->select(array(),'supplements',array(),'');
            $data['controller'] = $this->controller;

            $this->load->view("Admin/Supplements/table",$data); 
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

            $this->load->view('Admin/Supplements/form',$data);
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

            $sname = $this->input->post('sname');
            $sfeedlink = $this->input->post('sfeedlink');
            $sserlink = $this->input->post('sserlink');
            $sdesc = $this->input->post('sdesc');
            $skeywords = $this->input->post('skeywords');

            $config['upload_path']          = './uploads/supplements/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 100;

            $this->load->library('upload', $config);        
            if ( $this->upload->do_upload('simg'))
            {
                $img_data = $this->upload->data();
                $image_path = base_url("uploads/supplements/".$img_data['raw_name'].$img_data['file_ext']);

            }

            $data = array(
                'sname'  => $sname,
                'simg' => $image_path,
                'sfeedlink' => $sfeedlink,
                'sserlink' => $sserlink,
                'sdesc' => $sdesc,
                'skeywords' => $skeywords,
            );

            //        echo '<pre>';
            //        print_r($data);
            //        echo '</pre>';

            $this->$model->insert($data,'supplements');
            redirect('Supadmin');
        }  
        else  
        {  
            redirect(base_url() . 'Admin/login');  
        }  

    }

    public function edit($sid)
    {
        if($this->session->userdata('username') != '')  
        {

            $model = $this->model;
            $data['action'] = "update";
            $data['controller'] = $this->controller;
            $data['row'] = $this->$model->select(array(),'supplements',array('sid'=>$sid),'');
            $this->load->view('Admin/Supplements/form',$data);
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

            $sid = $this->input->post('sid');
            $sname = $this->input->post('sname');
            $sfeedlink = $this->input->post('sfeedlink');
            $sserlink = $this->input->post('sserlink');
            $sdesc = $this->input->post('sdesc');
            $skeywords = $this->input->post('skeywords');

            $config['upload_path']          = './uploads/supplements/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 100;

            $this->load->library('upload', $config);        
            if ( $this->upload->do_upload('simg'))
            {
                $img_data = $this->upload->data();
                $image_path = base_url("uploads/supplements/".$img_data['raw_name'].$img_data['file_ext']);

            }

            $data = array(
                'sid'  => $sid,
                'sname'  => $sname,
                'simg' => $image_path,
                'sfeedlink' => $sfeedlink,
                'sserlink' => $sserlink,
                'sdesc' => $sdesc,
                'skeywords' => $skeywords,
            );

            $where = array('sid'=>$sid);
            $this->$model->update('supplements',$data,$where);

            redirect('Supadmin');
        }  
        else  
        {  
            redirect(base_url() . 'Admin/login');  
        }  

    }

    public function delete($sid)
    {
        if($this->session->userdata('username') != '')  
        {

            $model = $this->model;
            $condition = array('sid'=>$sid);
            $this->$model->delete('supplements',$condition);

            redirect('Supadmin');
        }  
        else  
        {  
            redirect(base_url() . 'Admin/login');  
        }  

    }
}
?>