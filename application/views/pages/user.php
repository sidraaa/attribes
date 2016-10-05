<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
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
        <li><?= anchor('login/logout','Logout');?></li>
      </ul>
    </div>
  </div>
</nav>
  
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Welcome <?= $username; ?></h2>
                </div>
                <div class="col-md-6">
                   
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <img src="<?= $profileimage ?>" style="width:290px;height:228px;">
                </div>
                <div class="col-md-8">
                    
                </div>
                
            </div>
            
        </div>

    </body>
</hrml>
