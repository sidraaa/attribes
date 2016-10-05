<?php

class Login extends CI_Controller{
    
    public function index(){
        $this->load->helper('html');
        $this->load->helper('form');
        if($this->session->username){
            return redirect('user/profile');
        }
        else
        $this->load->view('pages/login'); 
    }
   
    
    public function user_login(){
          $this->load->model('loginmodel');
          $this->load->helper('html');
          $this->load->helper('form');
     
        $username= $this->input->post('username');
        $password=$this->input->post('password');
      
        if($this->loginmodel->valid_login($username,$password)){
            
            $this->session->set_userdata('username',$username);
            return redirect('user/profile');
        }
        else
            echo "<div class='alert alert-danger'>".'Incorrect username or password'."</div>";
            $this->load->view('pages/login');
    }
    
    
    public function logout(){
//        $this->session->unset_userdata('username');
        unset($_SESSION['username']);
        session_destroy();
        return redirect('login');
    }
    

}
?>
