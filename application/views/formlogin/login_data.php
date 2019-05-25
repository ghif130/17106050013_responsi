<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>WELCOME</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>template/backend/sbadmin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Isi CSS -->
    <link href="<?php echo base_url(); ?>template/backend/sbadmin/vendor/bootstrap/css/custom.css" rel="stylesheet">

    <!-- Custom Login CSS -->
    <link href="<?php echo base_url(); ?>template/backend/sbadmin/vendor/bootstrap/css/customlogin.css" rel="stylesheet"> 

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url(); ?>template/backend/sbadmin/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>template/backend/sbadmin/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url(); ?>template/backend/sbadmin/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div class="navbar navbar-default">
        <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo site_url('');?>"><strong>PERPUST</strong></a>
        </div>
        </div>
        <div class="container">
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="<?php echo site_url('login');?>"><i class="glyphicon glyphicon-home"></i> <b>HOME</b></a></li>
                <li><a href="<?php echo site_url('login/view_anggota');?>"><i class="glyphicon glyphicon-user"></i> <b>ANGGOTA</b></a></li>
            </ul>
            <!--<ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo site_url('login');?>"><b>LOGIN</b></a></li>                
            </ul>-->
            <div class="nav navbar-nav navbar-right">
                <form class="navbar-form navbar-right" role="search" action="<?php echo site_url('login/search_buku');?>" method="post">
                    <div class="form-group">
                        <input type="text" name="cari_buku" class="form-control" placeholder="Search Book">
                    </div>
                    <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i> Cari</button>
                </form>
            </div>
        </div>
        </div>
    </div>

    <br />
    <div class="container">
    <div class="row">
    <div class="col-md-12">      
    </div>
    </div>
    </div>       
    <br />


<div class="container">

    <div class="col-md-12 text-center">
        <h1> WELCOME</h1><hr class="line-title"> 
        <?php
    if(!empty($pesan)) {
        echo $pesan;
    }
    ?>
    <br><br>
        <div class="panel panel-default" style="color:white; background:red">
            <div class="panel-heading"  style="background:yellow">
                <span class="glyphicon glyphicon-lock" ></span> <strong>LOGIN</strong>
            </div>
            <div class="panel-body">
                <form class="form-horizontal" role="form" action="<?php echo site_url('login');?>" method="POST">
                    <?php echo $this->session->flashdata('message');?>
                    <div class="form-group">
                        <p class="col-sm-3">Username  :  </p>                        
                        <div class="col-sm-9">
                           <?php echo form_error('username'); ?>
                            <input type="text" name="username" class="form-control" id="inputEmail3" placeholder="Username" value="<?php echo set_value('username'); ?>">
                        </div>
                    </div>
                    <div class="form-group">
                    <p class="col-sm-3">Password   :  </p>
                        <div class="col-sm-9">
                            <?php echo form_error('password'); ?>
                            <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password" value="<?php echo set_value('password'); ?>">
                        </div>
                    </div>
                    <div class="form-group last">
                        <div class="col-sm-offset-3 col-sm-9">
                            <button type="submit" name="proses" class="btn btn-success btn-sm">Sign in</button>
                            <button type="reset" class="btn btn-default btn-sm">Reset</button>
                        </div>
                    </div>
                </form>
            </div>           
        </div>
    </div>
</div>
</div>
</div>
    
    <script src="<?php echo base_url(); ?>template/backend/sbadmin/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>template/backend/sbadmin/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>template/backend/sbadmin/vendor/metisMenu/metisMenu.min.js"></script>
    <script src="<?php echo base_url(); ?>template/backend/sbadmin/dist/js/sb-admin-2.js"></script>

</body>
</html>
