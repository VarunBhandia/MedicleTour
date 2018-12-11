<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nutadmin extends CI_Controller
{
    public $table = 'nutrients';
    public $controller = 'Nutadmin';
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

    function index()
    {  
        $model = $this->model;
        if($this->session->userdata('username') != '')  
        {
            $username = $this->session->userdata('username');
            $data['nutrients'] = $this->$model->select(array(),'nutrients',array(),'');
            $data['controller'] = $this->controller;

            $this->load->view("Admin/Nutrients/table",$data); 
        }  
        else  
        {  
            redirect(base_url() . 'Admin/login');  
        }  
    } 

    public function add()
    {
        $model = $this->model;
        $data['action'] = "insert";
        $data['controller'] = $this->controller;

        $this->load->view('Admin/Nutrients/form',$data);
    }

    public function insert()
    {
        $model = $this->model;

        $nname = $this->input->post('nname');
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 100;
        
        $this->load->library('upload', $config);        
        if ( $this->upload->do_upload('nimg'))
        {
            $img_data = $this->upload->data();
            $image_path = base_url("uploads/".$img_data['raw_name'].$img_data['file_ext']);
            
        }
        
        $data = array(
            'nname'  => $nname,
            'nimg' => $image_path,
        );

//        echo '<pre>';
//        print_r($data);
//        echo '</pre>';
        
        $this->$model->insert($data,'nutrients');
        redirect('Nutadmin');
    }

    public function edit($nid)
    {
        $model = $this->model;
        $data['action'] = "update";
        $data['controller'] = $this->controller;
        $data['row'] = $this->$model->select(array(),'nutrients',array('nid'=>$nid),'');
        $this->load->view('Admin/Nutrients/form',$data);
    }

    public function update()
    {
        $model = $this->model;

        $nid = $this->input->post('nid');
        $nname = $this->input->post('nname');

        $data = array(
            'nid'  => $nid,
            'nname'  => $nname,
        );
        $where = array('nid'=>$nid);
        $this->$model->update('nutrients',$data,$where);

        redirect('Nutadmin');
    }

    public function delete($nid)
    {
        $model = $this->model;
        $condition = array('nid'=>$nid);
        $this->$model->delete('nutrients',$condition);

        redirect('Nutadmin');
    }
}
?>