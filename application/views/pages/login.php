<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
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
            <li><?= anchor('register','Signup');?> </li>
          </ul>
        </div>
      </div>
    </nav>
    <body>
        <div class="container">
            <div class="row">
                <h1>Login</h1> <br>
            </div>
            <div class="row jumbotron">
                <div class="col-md-2">
                    
                </div>
                <div class="col-md-8">              
                    <?php echo form_open('login/user_login'); ?>
                    <label> UserName: </label>
                    <?php echo form_input(['name'=>'username']);?> <br>
                    <label> Password: </label>
                    <?php echo form_password(['name'=>'password']);?>
                    <br><br>
                    <?php echo form_submit(['name'=>'submit','value'=>'Login','class'=>'btn btn-primary']);?>
                </div>
                <div class="col-md-2">       
                </div>       
            </div>
        </div>
       
       
        
    </body>
</html>
