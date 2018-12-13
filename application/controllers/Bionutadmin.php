<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bionutadmin extends CI_Controller
{
    public $table = 'bionutrients';
    public $controller = 'Bionutadmin';
    public $message = 'Bionutadmin';
    public $primary_id = "bnid";
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
            $data['bionutrients'] = $this->$model->select(array(),'bionutrients',array(),'');
            $data['controller'] = $this->controller;

            $this->load->view("Admin/Bionutrients/table",$data); 
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

            $this->load->view('Admin/Bionutrients/form',$data);
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

            $bnname = $this->input->post('bnname');
            $bnfeedlink = $this->input->post('bnfeedlink');
            $bnserlink = $this->input->post('bnserlink');
            $bndesc = $this->input->post('bndesc');
            $bnkeywords = $this->input->post('bnkeywords');

            $config['upload_path']          = './uploads/bionutrients/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 100;

            $this->load->library('upload', $config);        
            if ( $this->upload->do_upload('bnimg'))
            {
                $img_data = $this->upload->data();
                $image_path = base_url("uploads/bionutrients/".$img_data['raw_name'].$img_data['file_ext']);

            }

            $data = array(
                'bnname'  => $bnname,
                'bnimg' => $image_path,
                'bnfeedlink' => $bnfeedlink,
                'bnserlink' => $bnserlink,
                'bndesc' => $bndesc,
                'bnkeywords' => $bnkeywords,
            );

            $this->$model->insert($data,'bionutrients');
            redirect('Bionutadmin');
        }  
        else  
        {  
            redirect(base_url() . 'Admin/login');  
        }  

    }

    public function edit($bnid)
    {
        if($this->session->userdata('username') != '')  
        {

            $model = $this->model;
            $data['action'] = "update";
            $data['controller'] = $this->controller;
            $data['row'] = $this->$model->select(array(),'bionutrients',array('bnid'=>$bnid),'');
            $this->load->view('Admin/Bionutrients/form',$data);
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

            $bnid = $this->input->post('bnid');
            $bnname = $this->input->post('bnname');
            $bnfeedlink = $this->input->post('bnfeedlink');
            $bnserlink = $this->input->post('bnserlink');
            $bndesc = $this->input->post('bndesc');
            $bnkeywords = $this->input->post('bnkeywords');

            $config['upload_path']          = './uploads/bionutrients/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 100;

            $this->load->library('upload', $config);        
            if ( $this->upload->do_upload('bnimg'))
            {
                $img_data = $this->upload->data();
                $image_path = base_url("uploads/bionutrients/".$img_data['raw_name'].$img_data['file_ext']);

            }

            $data = array(
                'bnid'  => $bnid,
                'bnname'  => $bnname,
                'bnimg' => $image_path,
                'bnfeedlink' => $bnfeedlink,
                'bnserlink' => $bnserlink,
                'bndesc' => $bndesc,
                'bnkeywords' => $bnkeywords,
            );

            $where = array('bnid'=>$bnid);
            $this->$model->update('bionutrients',$data,$where);

            redirect('Bionutadmin');
        }  
        else  
        {  
            redirect(base_url() . 'Admin/login');  
        }  

    }

    public function delete($bnid)
    {
        if($this->session->userdata('username') != '')  
        {

            $model = $this->model;
            $condition = array('bnid'=>$bnid);
            $this->$model->delete('bionutrients',$condition);

            redirect('Bionutadmin');
        }  
        else  
        {  
            redirect(base_url() . 'Admin/login');  
        }  

    }
}
?>