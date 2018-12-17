<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
class Admin extends CI_Controller {  

    public $table = 'users';
    public $controller = 'Admin';
    public $primary_id = "uid";
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
        $this->load->view("login");  
    }  

    function login_validation()  
    {  
        $this->load->library('form_validation');  
        $this->form_validation->set_rules('username', 'Username', 'required');  
        $this->form_validation->set_rules('password', 'Password', 'required');  
        if($this->form_validation->run())  
        {  
            //true  
            $username = $this->input->post('username');  
            $password = $this->input->post('password');  
            //model function  
            $this->load->model('main_model');  
            if($this->main_model->can_login($username, $password))  
            {  
                $session_data = array(  
                    'username'     =>     $username  
                );  
                $this->session->set_userdata($session_data);  
                redirect(base_url() . 'Admin/doctor');  
            }  
            else  
            {  
                $this->session->set_flashdata('error', 'Invalid Username and Password');  
                redirect(base_url() . 'Admin/login');  
            }  
        }  
        else  
        {  
            //false  
            $this->login();  
        }  
    }  

    function doctor()
    {  
        $model = $this->model;
        if($this->session->userdata('username') != '')  
        {
            $username = $this->session->userdata('username');
            $data['doctors'] = $this->$model->select(array(),'doctors',array(),'');

            $this->load->view("Admin/doctor",$data); 
        }  
        else  
        {  
            redirect(base_url() . 'Admin/login');  
        }  
    } 

    public function addDoctor()
    {
        $model = $this->model;
        $data['action'] = "insert";
        $data['controller'] = $this->controller;
        $this->load->view('Admin/formDoctor',$data);
    }

    public function insertDoctor()
    {
        $model = $this->model;

        $docname = $this->input->post('docname');
        $docspec = $this->input->post('docspec');
        $docdesig = $this->input->post('docdesig');
        $dochosp = $this->input->post('dochosp');
        $doccou = $this->input->post('doccou');
        $docsd = $this->input->post('docsd');
        $docld = $this->input->post('docld');
        $docurl = $this->input->post('docurl');
        $docmetatitle = $this->input->post('docmetatitle');
        $docmetadesc = $this->input->post('docmetadesc');        
        
        $config['upload_path']          = './uploads/doctors/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 100;

        $this->load->library('upload', $config);        
        if ( $this->upload->do_upload('docimg'))
        {
            $img_data = $this->upload->data();
            $image_path = base_url("uploads/doctors/".$img_data['raw_name'].$img_data['file_ext']);

        }

        $data = array(
            'docname'  => $docname,
            'docimg'  => $image_path,
            'docspec'  => $docspec,
            'docdesig'  => $docdesig,
            'dochosp'  => $dochosp,
            'doccou'  => $doccou,
            'docsd'  => $docsd,
            'docld'  => $docld,
            'docurl'  => $docurl,
            'docmetatitle'  => $docmetatitle,
            'docmetadesc'  => $docmetadesc,
        );
        $this->$model->insert($data,'doctors');
        redirect('Admin/doctor');
    }

    public function editDoctor($docid)
    {
        $docid = $this->uri->segment(3);
        $model = $this->model;
        $data['action'] = "update";
        $data['controller'] = $this->controller;
        $data['row'] = $this->$model->select(array(),'doctors',array('docid'=>$docid),'');
        $this->load->view('Admin/formDoctor',$data);
    }

    public function updateDoctor()
    {
        $model = $this->model;

        $docid = $this->input->post('docid');
        $docname = $this->input->post('docname');
        $docspec = $this->input->post('docspec');
        $docdesig = $this->input->post('docdesig');
        $dochosp = $this->input->post('dochosp');
        $doccou = $this->input->post('doccou');
        $docsd = $this->input->post('docsd');
        $docld = $this->input->post('docld');
        $docurl = $this->input->post('docurl');
        $docmetatitle = $this->input->post('docmetatitle');
        $docmetadesc = $this->input->post('docmetadesc');

        $data = array(
            'docid'  => $docid,
            'docname'  => $docname,
            'docspec'  => $docspec,
            'docdesig'  => $docdesig,
            'dochosp'  => $dochosp,
            'doccou'  => $doccou,
            'docsd'  => $docsd,
            'docld'  => $docld,
            'docurl'  => $docurl,
            'docmetatitle'  => $docmetatitle,
            'docmetadesc'  => $docmetadesc,
        );

        $where = array('docid'=>$docid);
        $this->$model->update('doctors',$data,$where);

        redirect('Admin/doctor');
    }

    public function deleteDoctor($docid)
    {
        $model = $this->model;
        $condition = array('docid'=>$docid);
        $this->$model->delete('doctors',$condition);

        redirect('Admin/doctor');
    }

    function hospital()
    {  
        $model = $this->model;
        if($this->session->userdata('username') != '')  
        {
            $username = $this->session->userdata('username');
            $data['hospitals'] = $this->$model->select(array(),'hospitals',array(),'');

            $this->load->view("Admin/hospital",$data); 
        }  
        else  
        {  
            redirect(base_url() . 'Admin/login');  
        }  
    } 

    public function addHospital()
    {
        $model = $this->model;
        $data['action'] = "insert";
        $data['controller'] = $this->controller;
        $this->load->view('Admin/formHospital',$data);
    }

    public function insertHospital()
    {
        $model = $this->model;

        $hname = $this->input->post('hname');
        $hospspec = $this->input->post('hospspec');
        $hospcou = $this->input->post('hospcou');
        $hospsd = $this->input->post('hospsd');
        $hospld = $this->input->post('hospld');
        $hospurl = $this->input->post('hospurl');
        $hospmetatitle = $this->input->post('hospmetatitle');
        $hospmetadesc = $this->input->post('hospmetadesc');        
        
        $config['upload_path']          = './uploads/hospitals/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 100;

        $this->load->library('upload', $config);        
        if ( $this->upload->do_upload('hospimg'))
        {
            $img_data = $this->upload->data();
            $image_path = base_url("uploads/hospitals/".$img_data['raw_name'].$img_data['file_ext']);

        }
        $data = array(
            'hname'  => $hname,
            'hospimg'  => $image_path,
            'hospspec'  => $hospspec,
            'hospcou'  => $hospcou,
            'hospsd'  => $hospsd,
            'hospld'  => $hospld,
            'hospurl'  => $hospurl,
            'hospmetatitle'  => $hospmetatitle,
            'hospmetadesc'  => $hospmetadesc,
        );
        $this->$model->insert($data,'hospitals');
        redirect('Admin/hospital');
    }

    public function editHospital($hid)
    {
        $hid = $this->uri->segment(3);
        $model = $this->model;
        $data['action'] = "update";
        $data['controller'] = $this->controller;
        $data['row'] = $this->$model->select(array(),'hospitals',array('hid'=>$hid),'');
        $this->load->view('Admin/formHospital',$data);
    }

    public function updateHospital()
    {
        $model = $this->model;

        $hid = $this->input->post('hid');
        $hname = $this->input->post('hname');
        $hospspec = $this->input->post('hospspec');
        $hospcou = $this->input->post('hospcou');
        $hospsd = $this->input->post('hospsd');
        $hospld = $this->input->post('hospld');
        $hospurl = $this->input->post('hospurl');
        $hospmetatitle = $this->input->post('hospmetatitle');
        $hospmetadesc = $this->input->post('hospmetadesc');        
        
        $config['upload_path']          = './uploads/hospitals/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 100;

        $this->load->library('upload', $config);        
        if ( $this->upload->do_upload('hospimg'))
        {
            $img_data = $this->upload->data();
            $image_path = base_url("uploads/hospitals/".$img_data['raw_name'].$img_data['file_ext']);

        }

        $data = array(
            'hid'  => $hid,
            'hname'  => $hname,
            'hospimg'  => $image_path,
            'hospspec'  => $hospspec,
            'hospcou'  => $hospcou,
            'hospsd'  => $hospsd,
            'hospld'  => $hospld,
            'hospurl'  => $hospurl,
            'hospmetatitle'  => $hospmetatitle,
            'hospmetadesc'  => $hospmetadesc,
        );

        $where = array('hid'=>$hid);
        $this->$model->update('hospitals',$data,$where);

        redirect('Admin/hospital');
    }

    public function deleteHospital($hid)
    {
        $model = $this->model;
        $condition = array('hid'=>$hid);
        $this->$model->delete('hospitals',$condition);

        redirect('Admin/hospital');
    }

    function disease()
    {  
        $model = $this->model;
        if($this->session->userdata('username') != '')  
        {
            $username = $this->session->userdata('username');
            $data['diseases'] = $this->$model->select(array(),'diseases',array(),'');

            $this->load->view("Admin/disease",$data); 
        }  
        else  
        {  
            redirect(base_url() . 'Admin/login');  
        }  
    } 

    public function addDisease()
    {
        $model = $this->model;
        $data['action'] = "insert";
        $data['controller'] = $this->controller;
        $this->load->view('Admin/formDisease',$data);
    }

    public function insertDisease()
    {
        $model = $this->model;

        $dname = $this->input->post('dname');
        $dlink = $this->input->post('dlink');

        $data = array(
            'dname'  => $dname,
            'dlink'  => $dlink,
        );
        $this->$model->insert($data,'diseases');
        redirect('Admin/disease');
    }

    public function editDisease($did)
    {
        $did = $this->uri->segment(3);
        $model = $this->model;
        $data['action'] = "update";
        $data['controller'] = $this->controller;
        $data['row'] = $this->$model->select(array(),'diseases',array('did'=>$did),'');
        $this->load->view('Admin/formDisease',$data);
    }

    public function updateDisease()
    {
        $model = $this->model;

        $did = $this->input->post('did');
        $dname = $this->input->post('dname');
        $dlink = $this->input->post('dlink');

        $data = array(
            'did'  => $did,
            'dname'  => $dname,
            'dlink'  => $dlink,
        );

        $where = array('did'=>$did);
        $this->$model->update('diseases',$data,$where);

        redirect('Admin/disease');
    }

    public function deleteDisease($did)
    {
        $model = $this->model;
        $condition = array('did'=>$did);
        $this->$model->delete('diseases',$condition);

        redirect('Admin/disease');
    }


    function logout()  
    {  
        $this->session->unset_userdata('username');  
        redirect(base_url() . 'Admin/login');  
    }  
}  
