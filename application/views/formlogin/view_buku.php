<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>DATA BUKU</title>

    <link href="<?php echo base_url(); ?>template/backend/sbadmin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>template/backend/sbadmin/vendor/bootstrap/css/custom.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>template/backend/sbadmin/vendor/bootstrap/css/customlogin.css" rel="stylesheet"> 
    <link href="<?php echo base_url(); ?>template/backend/sbadmin/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>template/backend/sbadmin/dist/css/sb-admin-2.css" rel="stylesheet">
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
                <li><a href="<?php echo site_url('login');?>"><i class="glyphicon glyphicon-home"></i>  <b>HOME</b></a></li>
                <li><a href="<?php echo site_url('login/view_anggota');?>"><i class="glyphicon glyphicon-user"></i>  <b>ANGGOTA</b></a></li>
            </ul>
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
    <br /><br />

<div class="container">
    <div class="col-md-8 ">
        <h4> <?php echo $title; ?></h4><hr class="line-title"> 
        <?php 
        if($buku->num_rows() > 0) {
        ?>
        <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <td>No.</td>
                    <td>Gambar</td>
                    <td>Kode Buku</td>
                    <td>Judul Buku</td>
                    <td>Pengarang</td>
                    <td>Klasifikasi</td>
                </tr>
            </thead>
            <?php 
                $no=0; 
                foreach($buku->result() as $row): 
                $no++;
            ?>
            <tr>
                <td><?php echo $no;?></td>
                <td><?php if($row->image != "") { ?>
                    <img src="<?php echo base_url('assets/img/buku/'.$row->image);?>" width="100px" height="100px">
                <?php }else{ ?>
                    <img src="<?php echo base_url('assets/img/buku/book-default.jpg');?>" width="100px" height="100px">
                <?php } ?> 
                </td>
                <td><?php echo $row->kode_buku;?></td>
                <td><?php echo $row->judul;?></td>
                <td><?php echo $row->pengarang;?></td>
                <td><?php echo $row->klasifikasi;?></td>
            </tr>
            <?php endforeach;?>
        </table>
        <?php
        echo "$pagination";

        }else{
            echo "Maaf data belum ada";    
        }
        ?>
    </div>
</div>
</div>

    <script src="<?php echo base_url(); ?>template/backend/sbadmin/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>template/backend/sbadmin/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>template/backend/sbadmin/vendor/metisMenu/metisMenu.min.js"></script>
    <script src="<?php echo base_url(); ?>template/backend/sbadmin/dist/js/sb-admin-2.js"></script>

</body>

</html>
