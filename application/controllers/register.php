<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Register extends CI_Controller{
    public function index(){
              $this->load->helper('html');
              $this->load->helper('form');
              
              if($this->session->username){
                    return redirect('user/profile');
                }
              else
                $this->load->view('pages/register');
    }
    
    
    public function user_signup(){
         $this->load->helper('html');
         $this->load->helper('form');
              
        $this->load->model('registermodel');
        
        $config= [
            'upload_path'=>'./assets/uploads',
            'allowed_types'=>'jpg|jpeg|png|gif'
        ];
        $this->load->library('upload',$config);
        if(  !$this->upload->do_upload('imageupload')){
            $this->upload->display_errors();
        }
        
        $data=$this->upload->data();
        $image_path=  base_url("assets/uploads/".$data['raw_name'].$data['file_ext']);      
        
        $data=array(
            'username'=>$this->input->post('username'),
            'firstname'=>$this->input->post('firstname'),
            'lastname'=>$this->input->post('lastname'),
            'email'=>$this->input->post('email'),
            'password'=>$this->input->post('password'),
            'gender'=>$this->input->post('gender'),
            'dateofbirth'=>$this->input->post('dateofbirth'),
            'profileimage'=>$image_path
        );

        if($this->registermodel->register($data)){
            
            $this->session->set_userdata('username',$data['username']);
            return redirect('user/profile');
        }
        else
            echo "<div class='alert alert-danger'>".'User already exists'."</div>";
            $this->load->view('pages/register');

    }
}