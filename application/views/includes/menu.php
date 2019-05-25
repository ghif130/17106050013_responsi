<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url('dashboard'); ?>"><strong><b>PERPUST</b></strong></a>
            </div>
            
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>
                        <?php echo  $this->session->userdata['full_name']; ?>
                        <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a></li>
                        <li class="divider"></li>
                        <li><a href="<?php echo base_url('login/logout') ?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                </li>                
            </ul>
            <form class="navbar-form navbar-right" role="search" method="post">
                        <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>                    
            </form>

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                        </li>                        
                        <li>
                            <a href="#"><i class="fa fa-desktop fa-fw"></i> Data<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>                                     <a href="<?php echo base_url('anggota'); ?>"><i class="fa fa-users fa-fw"></i> Anggota</a>                                </li>
                                <li>                                    <a href="<?php echo base_url('buku'); ?>"><i class="fa fa-book fa-fw"></i> Buku</a>                                </li>
                                <li>                                    <a href="<?php echo base_url('users'); ?>"><i class="glyphicon glyphicon-user"></i> Users</a>                                </li>                              
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-align-justify     fa-fw"></i> Transaksi<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>                                     <a href="<?php echo base_url('peminjaman'); ?>"><i class="fa fa-share-square fa-fw"></i> Peminjaman Buku</a>                                </li>
                                <li>                                    <a href="<?php echo base_url('pengembalian'); ?>"><i class="fa fa-check-square fa-fw"></i> Pengembalian Buku</a>                                </li>                                
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-file-text     fa-fw"></i> Laporan<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>                                     <a href="<?php echo base_url('laporan/anggota'); ?>"><i class="fa fa-users fa-fw"></i> Laporan Data Anggota</a>                            </li>
                                <li>                            <a href="<?php echo base_url('laporan/buku'); ?>"><i class="fa fa-book fa-fw"></i> Laporan Data Buku</a>                            </li>
                                <li>                                 <a href="<?php echo base_url('laporan/peminjaman'); ?>"><i class="fa fa-share-square fa-fw"></i> Laporan Data Peminjaman</a>                        </li>
                                <li>                                    <a href="<?php echo base_url('laporan/pengembalian'); ?>"><i class="fa fa-check-square fa-fw"></i> Laporan Data Pengembalian</a>                                </li>                                
                            </ul>
                        </li>                        
                        <li>
                            <a href="<?php echo base_url('login/logout') ?>"><i class="fa fa-power-off fa-fw"></i> Logout</a>
                        </li>                        
                    </ul>
                </div>
            </div>            
        </nav>