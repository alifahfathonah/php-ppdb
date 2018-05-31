</head>
<body class="skin-blue">
    <div class="wrapper">

        <header class="main-header">
            <a href="#" class="logo"><b>Admin</b>LTE</a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->
                        
                        <!-- Notifications: style can be found in dropdown.less -->
                        
                        <!-- Tasks: style can be found in dropdown.less -->
                        <li class="dropdown tasks-menu">
                            
                            
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="<?php echo site_url('admin/logout') ?>" onclick="return confirm('apakah anda Yakin Ingin Keluar')" title="Log Out" class="dropdown-toggle">
                                <img src="<?php echo base_url('assets/AdminLTE-2.0.5/dist/img/user2-160x160.jpg') ?>" class="user-image" alt="User Image"/>
                                <span class="hidden-xs" >Log out</span>
                            </a>
                            
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <!-- =============================================== -->