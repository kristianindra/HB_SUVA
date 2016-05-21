<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_main extends CI_Controller
{

    public function index(){
        redirect('home');
    }


    public function int_home(){
        $this->load->view('v_home');
    }

    public function int_contact(){
        $this->load->view('v_contact');
    }

    public function int_search(){
        $this->load->view('v_search');
    }

    public function int_search_no_found(){
        $this->load->view('v_search_no_found');
    }

    public function int_product_list(){
        $this->load->view('v_product_list');
    }

    public function int_product(){
        $this->load->view('v_product');
    }

    public function int_our_work(){
        $this->load->view('v_our_work');
    }

    public function search_cek(){
        $hs = $this->input->post('search_text');
        if ($hs=="no"){
            redirect('../search_not_found');
        } else {
            redirect('../search');
        }
    }

}

?>
