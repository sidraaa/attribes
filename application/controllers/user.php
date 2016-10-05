<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class User extends CI_Controller{
    public function profile(){
        $this->load->helper('html');
        $this->load->model('loginmodel');
       
        $arr=$this->loginmodel->get_all();
        $data=  get_object_vars($arr[0]);
        $this->load->view('pages/user',$data);
    }
    public function __construct() {
        parent::__construct();   
        if(!($this->session->username)){
            return redirect('login');
        }          
    }
    
}