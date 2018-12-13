<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contadmin extends CI_Controller
{
    public $table = 'controls';
    public $controller = 'Contadmin';
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

    function index()
    {  
        $model = $this->model;
        if($this->session->userdata('username') != '')  
        {
            $username = $this->session->userdata('username');
            $data['controls'] = $this->$model->select(array(),'controls',array(),'');
            $data['controller'] = $this->controller;

            $this->load->view("Admin/Controls/table",$data); 
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

            $this->load->view('Admin/Controls/form',$data);
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

            $cname = $this->input->post('cname');
            $cfeedlink = $this->input->post('cfeedlink');
            $cserlink = $this->input->post('cserlink');
            $cdesc = $this->input->post('cdesc');
            $ckeywords = $this->input->post('ckeywords');

            $config['upload_path']          = './uploads/controls/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 100;

            $this->load->library('upload', $config);        
            if ( $this->upload->do_upload('cimg'))
            {
                $img_data = $this->upload->data();
                $image_path = base_url("uploads/controls/".$img_data['raw_name'].$img_data['file_ext']);

            }

            $data = array(
                'cname'  => $cname,
                'cimg' => $image_path,
                'cfeedlink' => $cfeedlink,
                'cserlink' => $cserlink,
                'cdesc' => $cdesc,
                'ckeywords' => $ckeywords,
            );

            //        echo '<pre>';
            //        print_r($data);
            //        echo '</pre>';

            $this->$model->insert($data,'controls');
            redirect('Contadmin');
        }  
        else  
        {  
            redirect(base_url() . 'Admin/login');  
        }  

    }

    public function edit($cid)
    {
        if($this->session->userdata('username') != '')  
        {

            $model = $this->model;
            $data['action'] = "update";
            $data['controller'] = $this->controller;
            $data['row'] = $this->$model->select(array(),'controls',array('cid'=>$cid),'');
            $this->load->view('Admin/Controls/form',$data);
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

            $cid = $this->input->post('cid');
            $cname = $this->input->post('cname');
            $cfeedlink = $this->input->post('cfeedlink');
            $cserlink = $this->input->post('cserlink');
            $cdesc = $this->input->post('cdesc');
            $ckeywords = $this->input->post('ckeywords');

            $config['upload_path']          = './uploads/controls/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 100;

            $this->load->library('upload', $config);        
            if ( $this->upload->do_upload('cimg'))
            {
                $img_data = $this->upload->data();
                $image_path = base_url("uploads/controls/".$img_data['raw_name'].$img_data['file_ext']);

            }

            $data = array(
                'cid'  => $cid,
                'cname'  => $cname,
                'cimg' => $image_path,
                'cfeedlink' => $cfeedlink,
                'cserlink' => $cserlink,
                'cdesc' => $cdesc,
                'ckeywords' => $ckeywords,
            );

            $where = array('cid'=>$cid);
            $this->$model->update('controls',$data,$where);

            redirect('Contadmin');
        }  
        else  
        {  
            redirect(base_url() . 'Admin/login');  
        }  

    }

    public function delete($cid)
    {
        if($this->session->userdata('username') != '')  
        {

            $model = $this->model;
            $condition = array('cid'=>$cid);
            $this->$model->delete('controls',$condition);

            redirect('Contadmin');
        }  
        else  
        {  
            redirect(base_url() . 'Admin/login');  
        }  

    }
}
?>