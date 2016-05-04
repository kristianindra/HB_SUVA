<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_main extends CI_Controller
{

    public function index(){
        $this->load->view('v_login');
    }

    public function login(){
        $uname = $this->input->post("uname");
        $upass = $this->input->post("upass");
        if($uname=="admin" && $upass=="admin"){
            $this->load->view('v_head');
            $this->load->view('v_dashboard');
            $this->load->view('v_foot');
        } else {
            $this->load->view('v_login_');
        }
    }

    public function logout(){
        $this->load->view('v_login_');
    }

}

?>