<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Registermodel extends CI_Model{

    public function register($data){
        $userexist=$this->db->where('username',$data['username'])
                            ->get('user');
        print_r($userexist->result());
        if($userexist->num_rows()){
               return FALSE;
        }       
        else{
                $q= $this->db->insert('user',$data);
                return TRUE;
        }
    }

}