<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> <?php echo !empty($title) ? $title : ''; ?> </title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>dist/css/bootstrap-datepicker3.min.css"/>


    <link rel="stylesheet" href="<?php echo base_url(); ?>dist/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>dist/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>dist/css/iCheck/all.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>dist/css/select2.min.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- jQuery 3 -->
    <script src="<?php echo base_url() ?>js/jquery.min.js"></script>

    <script src="<?php echo base_url(); ?>js/jquery.validate.min.js"></script>
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <!-- Google Font -->
    <!-- <link rel="stylesheet"
           href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">-->
</head>
<!-- ADD THE CLASS layout-boxed TO GET A BOXED LAYOUT -->
<body class="hold-transition skin-blue">
<!-- Site wrapper -->
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="#" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><img src="<?php echo base_url();?>assets/images/logo.png" alt="logo" width="100%"></span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><img src="<?php echo base_url();?>assets/images/logo.png" alt="logo"
                                       width="100%"> DEM&A</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Messages: style can be found in dropdown.less-->


                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">

                            <?php if (!empty($profile['img']) && file_exists(FCPATH . '/' . $user['img'])) { ?>
                                <img src="/images/profile-pic.jpg" class="user-image" alt="User Image">
                            <?php } else { ?>
                                <img src="<?php echo base_url();?>dist/img/avatar.jpeg" class="user-image" alt="User Image">
                            <?php }
                            ?>
                            <span class="hidden-xs"><?php echo !empty($profile['name']) ? $profile['name'] : ''; ?></span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <?php if (!empty($profile['img']) && file_exists(FCPATH . '/' . $user['img'])) { ?>
                                    <img src="<?php echo base_url();?>dist/img/avatar.jpeg" class="img-circle" alt="User Image">
                                <?php } else { ?>
                                    <img src="<?php echo base_url();?>dist/img/avatar.jpeg" class="img-circle" alt="User Image">
                                <?php }
                                ?>
                                <p>
                                    <?php echo !empty($profile['name']) ? $profile['name'] : ''; ?>

                                </p>
                            </li>
                            <!-- Menu Body -->

                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <!--                                <div class="pull-left">-->
                                <!--                                    <a href="#" class="btn btn-default btn-flat">Profile</a>-->
                                <!--                                </div>-->
                                <div class="pull-right">
                                    <a href="<?php echo base_url(); ?>logout/" class="btn btn-default btn-flat">Sign
                                        out</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- Control Sidebar Toggle Button -->

                </ul>
            </div>
        </nav>
    </header>

    <!-- =============================================== -->

    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->

            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header"><h5
                            class="text-center">Administrator</h5>
                </li>

                <li>
                    <a href="<?php echo base_url(); ?>admin/dashboard/">
                        <i class="fa fa-th"></i> <span>Dashboard</span>

                    </a>
                </li>

                <li>
                    <a href="<?php echo base_url(); ?>admin/events/">
                        <i class="fa fa-hand-paper-o"></i> <span>Events</span>

                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url(); ?>admin/projects/">
                        <i class="fa fa-tasks"></i> <span>Projects</span>

                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url(); ?>admin/gallery/">
                        <i class="fa fa-image"></i> <span>Gallery</span>

                    </a>
                </li>
                <!--<li>
                    <a href="<?php /*echo base_url(); */?>admin/clients/">
                        <i class="fa fa-group"></i> <span>Clients</span>
                    </a>
                </li>
-->
                <li>
                    <a href="<?php echo base_url(); ?>admin/contacts/">
                        <i class="fa fa-pencil"></i> <span>Contacts</span>
                    </a>
                </li>

                <li>
                    <a href="<?php echo base_url(); ?>admin/upload-profile/">
                        <i class="fa fa-user"></i> <span>Upload Profile</span>
                    </a>
                </li>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

