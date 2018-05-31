
<aside class="main-sidebar">

    <section class="sidebar">

        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo base_url('assets/AdminLTE-2.0.5/dist/img/user2-160x160.jpg') ?>" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>Admin</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">
                <a href="<?php echo base_url('index.php/admin')?>">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
                
            <li class="treeview">
                <a href="<?php echo base_url('index.php/admin/datasiswa'); ?>">
                    <i class="fa fa-users"></i>
                    <span>Users</span>
                    
                </a>
                
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-database"></i>
                    <span>Setting Pendaftaran</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url('index.php/admin/prodi'); ?>"><i class="fa fa-book"></i>Jurusan</a></li>
                    <li><a href="<?php echo base_url('index.php/admin/agama'); ?>"><i class="fa fa-heart"></i> Agama</a></li>
                    <li><a href="<?php echo base_url('index.php/admin/status'); ?>"><i class="fa fa-bell"></i> Status</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="<?php echo base_url('index.php/admin/setting'); ?>">
                    <i class="fa fa-lock"></i> <span>Setting account</span>
                    
                </a>
                
        </ul>
    </section>

</aside>

<div class="content-wrapper">