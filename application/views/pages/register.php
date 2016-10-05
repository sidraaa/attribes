<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Sign up</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php echo link_tag('assets/css/bootstrap.css');?>

    </head>
    
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">ABC.com</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right">
            <li><?= anchor('login','Login');?> </li>
          </ul>
        </div>
      </div>
    </nav>
    <body>
        <div class="container">  
            <h1>Sign Up !</h1><br><br>
            <?php echo form_open_multipart('register/user_signup') ?>
           
                <label> UserName: </label>
                <?php echo form_input(['name'=>'username']); ?><br>
                <label> First Name: </label> 
                <?php echo form_input(['name'=>'firstname']); ?><br>
                <label> Last Name:</label> 
                <?php echo form_input(['name'=>'lastname']); ?><br>
                <label> Email Address: </label> 
                <input type="email" name="email"><br>
                <label> Password: </label> 
                <?php echo form_password(['name'=>'password']); ?><br>
                <label> Gender: </label> 
                <?php $data=array('name'=> 'gender', 'value'=>'Male', 'checked'=>TRUE);
                echo form_radio($data);echo "Male";
                $data2=array('name'=> 'gender', 'value'=>'Female');
                echo form_radio($data2); echo "Female";?> <br>
                <label> Date of Birth: </label>
                <input type="date" name="dateofbirth"><br><br>
                <label> Upload Image: </label>
                <?php echo form_upload(['name'=>'imageupload']); ?><br><br>
                <?php echo form_submit(['name'=>'submit','value'=>'Register','class'=>'btn btn-primary']);?>
        </div>
    
    </body>
</html>
