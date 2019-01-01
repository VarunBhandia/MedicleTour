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

    function login()  
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
            $this->login();  
        }  
    }  

    function doctor()
    {  
        if($this->session->userdata('username') != '')  
        {
            $model = $this->model;
            $username = $this->session->userdata('username');
            $data['doctors'] = $this->$model->select(array(),'doctors',array(),'');

            $this->load->view("Admin/doctor",$data); 
        }  
        else  
        {  
            $this->session->set_flashdata('error', 'Invalid Username and Password');  
            redirect(base_url() . 'Admin/login');  
        }  
    } 

    public function addDoctor()
    {
        if($this->session->userdata('username') != '')  
        {
            $model = $this->model;
            $data['action'] = "insert";
            $data['controller'] = $this->controller;
            $this->load->view('Admin/formDoctor',$data);
        }
        else  
        {  
            $this->session->set_flashdata('error', 'Invalid Username and Password');  
            redirect(base_url() . 'Admin/login');  
        }  
    }
    public function insertDoctor()
    {
        if($this->session->userdata('username') != '')  
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
            $config['max_size']             = 20480;

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
        else  
        {  
            $this->session->set_flashdata('error', 'Invalid Username and Password');  
            redirect(base_url() . 'Admin/login');  
        }  
    }
    public function editDoctor($docid)
    {
        if($this->session->userdata('username') != '')  
        {

            $docid = $this->uri->segment(3);
            $model = $this->model;
            $data['action'] = "update";
            $data['controller'] = $this->controller;
            $data['row'] = $this->$model->select(array(),'doctors',array('docid'=>$docid),'');
            $this->load->view('Admin/formDoctor',$data);
        }
        else  
        {  
            $this->session->set_flashdata('error', 'Invalid Username and Password');  
            redirect(base_url() . 'Admin/login');  
        }  
    }
    public function updateDoctor()
    {
        if($this->session->userdata('username') != '')  
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

            $config['upload_path']          = './uploads/doctors/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 20480;

            $this->load->library('upload', $config);        
            if ( $this->upload->do_upload('docimg'))
            {
                $img_data = $this->upload->data();
                $image_path = base_url("uploads/doctors/".$img_data['raw_name'].$img_data['file_ext']);

            }

            $data = array(
                'docid'  => $docid,
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

            $where = array('docid'=>$docid);
            $this->$model->update('doctors',$data,$where);

            redirect('Admin/doctor');
        }
        else  
        {  
            $this->session->set_flashdata('error', 'Invalid Username and Password');  
            redirect(base_url() . 'Admin/login');  
        }  
    }
    public function deleteDoctor($docid)
    {
        if($this->session->userdata('username') != '')  
        {

            $model = $this->model;
            $condition = array('docid'=>$docid);
            $this->$model->delete('doctors',$condition);

            redirect('Admin/doctor');
        }
        else  
        {  
            $this->session->set_flashdata('error', 'Invalid Username and Password');  
            redirect(base_url() . 'Admin/login');  
        }  
    }

    public function hospital()
    {
        if($this->session->userdata('username') != '')  
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
    }
    public function addHospital()
    {
        if($this->session->userdata('username') != '')  
        {

            $model = $this->model;
            $data['action'] = "insert";
            $data['controller'] = $this->controller;
            $this->load->view('Admin/formHospital',$data);
        }
        else  
        {  
            $this->session->set_flashdata('error', 'Invalid Username and Password');  
            redirect(base_url() . 'Admin/login');  
        }  
    }

    public function insertHospital()
    {
        if($this->session->userdata('username') != '')  
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
            $config['max_size']             = 20480;

            $this->load->library('upload', $config);        
            if ( $this->upload->do_upload('hospimg'))
            {
                $img_data = $this->upload->data();
                $image_path = base_url("uploads/hospitals/".$img_data['raw_name'].$img_data['file_ext']);

            }

            echo '<pre>';
            print_r($this->upload->display_errors());
            echo '</pre>';
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
        else  
        {  
            $this->session->set_flashdata('error', 'Invalid Username and Password');  
            redirect(base_url() . 'Admin/login');  
        }  
    }

    public function editHospital($hid)
    {        if($this->session->userdata('username') != '')  
    {

        $hid = $this->uri->segment(3);
        $model = $this->model;
        $data['action'] = "update";
        $data['controller'] = $this->controller;
        $data['row'] = $this->$model->select(array(),'hospitals',array('hid'=>$hid),'');
        $this->load->view('Admin/formHospital',$data);
    }
     else  
     {  
         $this->session->set_flashdata('error', 'Invalid Username and Password');  
         redirect(base_url() . 'Admin/login');  
     }  
    }

    public function updateHospital()
    {        if($this->session->userdata('username') != '')  
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
        $config['max_size']             = 20480;

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
     else  
     {  
         $this->session->set_flashdata('error', 'Invalid Username and Password');  
         redirect(base_url() . 'Admin/login');  
     }  
    }

    public function deleteHospital($hid)
    {        if($this->session->userdata('username') != '')  
    {

        $model = $this->model;
        $condition = array('hid'=>$hid);
        $this->$model->delete('hospitals',$condition);

        redirect('Admin/hospital');
    }
     else  
     {  
         $this->session->set_flashdata('error', 'Invalid Username and Password');  
         redirect(base_url() . 'Admin/login');  
     }  
    }

    public function disease()
    {        
        if($this->session->userdata('username') != '')  
        {


            $model = $this->model;
            $username = $this->session->userdata('username');
            $data['diseases'] = $this->$model->select(array(),'diseases',array(),'');

            $this->load->view("Admin/disease",$data); 
        }  
        else  
        {  
            $this->session->set_flashdata('error', 'Invalid Username and Password');  
            redirect(base_url() . 'Admin/login');  
        }  

    }
    public function addDisease()
    {        if($this->session->userdata('username') != '')  
    {

        $model = $this->model;
        $data['action'] = "insert";
        $data['controller'] = $this->controller;
        $data['countries'] = $this->$model->select(array(),'countries',array(),'');
        $data['doctors'] = $this->$model->select(array(),'doctors',array(),'');
        $data['hosps'] = $this->$model->select(array(),'hospitals',array(),'');
        $this->load->view('Admin/formDisease',$data);
    }
     else  
     {  
         $this->session->set_flashdata('error', 'Invalid Username and Password');  
         redirect(base_url() . 'Admin/login');  
     }  
    }

    public function insertDisease()
    {        if($this->session->userdata('username') != '')  
    {

        $model = $this->model;

        $dname = $this->input->post('dname');
        $dlink = $this->input->post('dlink');
        $dcouid = $this->input->post('dcouid');
        $disdesc = $this->input->post('disdesc');
        $doctors = count($this->input->post('doctors')) > 0 ? implode(",",$this->input->post('doctors')) : $this->input->post('doctors');;
        $hosps = count($this->input->post('hosps')) > 0 ? implode(",",$this->input->post('hosps')) : $this->input->post('hosps');;

        $data = array(
            'dname'  => $dname,
            'dlink'  => $dlink,
            'dcouid'  => $dcouid,
            'doctors'  => $doctors,
            'hosps'  => $hosps,
            'disdesc'  => $disdesc,
        );
        $this->$model->insert($data,'diseases');
        redirect('Admin/disease');
    }
     else  
     {  
         $this->session->set_flashdata('error', 'Invalid Username and Password');  
         redirect(base_url() . 'Admin/login');  
     }  
    }

    public function editDisease($did)
    {        if($this->session->userdata('username') != '')  
    {

        $did = $this->uri->segment(3);
        $model = $this->model;
        $data['action'] = "update";
        $data['controller'] = $this->controller;
        $data['countries'] = $this->$model->select(array(),'countries',array(),'');
        $data['doctors'] = $this->$model->select(array(),'doctors',array(),'');
        $data['hosps'] = $this->$model->select(array(),'hospitals',array(),'');
        $data['row'] = $this->$model->select(array(),'diseases',array('did'=>$did),'');
        $this->load->view('Admin/formDisease',$data);
    }
     else  
     {  
         $this->session->set_flashdata('error', 'Invalid Username and Password');  
         redirect(base_url() . 'Admin/login');  
     }  
    }

    public function updateDisease()
    {        if($this->session->userdata('username') != '')  
    {

        $model = $this->model;

        $did = $this->input->post('did');
        $dname = $this->input->post('dname');
        $dlink = $this->input->post('dlink');
        $dcouid = $this->input->post('dcouid');
        $disdesc = $this->input->post('disdesc');
        $doctors = count($this->input->post('doctors')) > 0 ? implode(",",$this->input->post('doctors')) : $this->input->post('doctors');;

        $data = array(
            'did'  => $did,
            'dname'  => $dname,
            'dlink'  => $dlink,
            'dcouid'  => $dcouid,
            'doctors'  => $doctors,
            'hosps'  => $hosps,
            'disdesc'  => $disdesc,
        );

        $where = array('did'=>$did);
        $this->$model->update('diseases',$data,$where);

        redirect('Admin/disease');
    }
     else  
     {  
         $this->session->set_flashdata('error', 'Invalid Username and Password');  
         redirect(base_url() . 'Admin/login');  
     }  
    }

    public function deleteDisease($did)
    {        if($this->session->userdata('username') != '')  
    {

        $model = $this->model;
        $condition = array('did'=>$did);
        $this->$model->delete('diseases',$condition);

        redirect('Admin/disease');
    }
     else  
     {  
         $this->session->set_flashdata('error', 'Invalid Username and Password');  
         redirect(base_url() . 'Admin/login');  
     }  
    }


    function logout()  
    {  
        $this->session->unset_userdata('username');  
        redirect(base_url() . 'Admin/login');  
    }  
}  
