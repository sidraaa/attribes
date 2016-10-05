<?php
class Loginmodel extends CI_Model{
    public function valid_login($username,$password){
        $q=$this->db->where(['username'=>$username, 'password'=>$password])
                ->get('user');
        if($q->num_rows()){
            return TRUE;
        }
        else            
            return false;
    }
     
    public function get_all(){
        $q=$this->db->where(['username'=>  $this->session->username])
                ->get('user');
        if($q->num_rows()){
            return $q->result();
        }
        else            
            return false; 
    }
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

