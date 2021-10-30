<!DOCTYPE html>

<html>

<head>

  <meta charset="utf-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Admin | Dashboard</title>

  <!-- Tell the browser to be responsive to screen width -->

  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <!-- Bootstrap 3.3.7 -->

  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">

  <!-- Font Awesome -->

  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

  <!-- Ionicons -->

  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/Ionicons/css/ionicons.min.css">

  <!-- Theme style -->

  <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/AdminLTE.min.css">

  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/select2/dist/css/select2.min.css">

  <!-- AdminLTE Skins. Choose a skin from the css/skins

       folder instead of downloading all of them to reduce the load. -->

  <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/skins/_all-skins.min.css">

  <!-- Morris chart -->

  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/morris.js/morris.css">

  <!-- jvectormap -->

  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/jvectormap/jquery-jvectormap.css">

  <!-- Date Picker -->

  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">

  <!-- Daterange picker -->

  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/bootstrap-daterangepicker/daterangepicker.css">

  <!-- bootstrap wysihtml5 - text editor -->

  <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <script type="text/javascript" src="<?php echo base_url(); ?>assets/ckeditor/ckeditor.js"></script>

  <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/fullcalendar/dist/fullcalendar.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/fullcalendar/dist/fullcalendar.print.min.css" media="print"> -->



  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->

  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

  <!--[if lt IE 9]>

  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>

  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

  <![endif]-->



  <!-- Google Font -->

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <!-- Custom Calender -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/Calendar/css/core@4.3.1/main.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/Calendar/css/daygrid@4.3.0/main.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/Calendar/css/timegrid@4.3.0/main.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/Calendar/css/custom/custom.css">
  
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/Calendar/js/core@4.3.1/main.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/Calendar/js/interaction@4.3.0/main.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/Calendar/js/daygrid@4.3.0/main.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/Calendar/js/timegrid@4.3.0/main.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/Calendar/js/script/custom.js"></script>
  <!-- /Custom Calender -->

</head>

<body class="hold-transition skin-blue sidebar-mini">

<div class="wrapper">



  <header class="main-header">

    <!-- Logo -->

    <a href="<?php echo base_url();?>users/dashboard" class="logo">

      <!-- mini logo for sidebar mini 50x50 pixels -->

      <span class="logo-mini"><b>A</b>D</span>

      <!-- logo for regular state and mobile devices -->

      <span class="logo-lg"><b>Admin</b></span>

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

          <li class="dropdown messages-menu">

            <a href="#" class="dropdown-toggle" data-toggle="dropdown">

              <i class="fa fa-envelope-o"></i>

              <span class="label label-success">4</span>

            </a>

            <ul class="dropdown-menu">

              <li class="header">You have 4 messages</li>

              <li>

                <!-- inner menu: contains the actual data -->

                <ul class="menu">

                  <li><!-- start message -->

                    <a href="#">

                      <div class="pull-left">

                        <img src="<?php echo base_url();?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="Admin Image">

                      </div>

                      <h4>

                        Support Team

                        <small><i class="fa fa-clock-o"></i> 5 mins</small>

                      </h4>

                      <p>Why not buy a new awesome theme?</p>

                    </a>

                  </li>

                  <!-- end message -->

                  <li>

                    <a href="#">

                      <div class="pull-left">

                        <img src="<?php echo base_url();?>assets/dist/img/user3-128x128.jpg" class="img-circle" alt="Admin Image">

                      </div>

                      <h4>

                        AdminLTE Design Team

                        <small><i class="fa fa-clock-o"></i> 2 hours</small>

                      </h4>

                      <p>Why not buy a new awesome theme?</p>

                    </a>

                  </li>

                  <li>

                    <a href="#">

                      <div class="pull-left">

                        <img src="<?php echo base_url();?>assets/dist/img/user4-128x128.jpg" class="img-circle" alt="Admin Image">

                      </div>

                      <h4>

                        Developers

                        <small><i class="fa fa-clock-o"></i> Today</small>

                      </h4>

                      <p>Why not buy a new awesome theme?</p>

                    </a>

                  </li>

                  <li>

                    <a href="#">

                      <div class="pull-left">

                        <img src="<?php echo base_url();?>assets/dist/img/user3-128x128.jpg" class="img-circle" alt="Admin Image">

                      </div>

                      <h4>

                        Sales Department

                        <small><i class="fa fa-clock-o"></i> Yesterday</small>

                      </h4>

                      <p>Why not buy a new awesome theme?</p>

                    </a>

                  </li>

                  <li>

                    <a href="#">

                      <div class="pull-left">

                        <img src="<?php echo base_url();?>assets/dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">

                      </div>

                      <h4>

                        Reviewers

                        <small><i class="fa fa-clock-o"></i> 2 days</small>

                      </h4>

                      <p>Why not buy a new awesome theme?</p>

                    </a>

                  </li>

                </ul>

              </li>

              <li class="footer"><a href="#">See All Messages</a></li>

            </ul>

          </li>

          <!-- Notifications: style can be found in dropdown.less -->

          <li class="dropdown notifications-menu">

            <a href="#" class="dropdown-toggle" data-toggle="dropdown">

              <i class="fa fa-bell-o"></i>

              <span class="label label-warning">10</span>

            </a>

            <ul class="dropdown-menu">

              <li class="header">You have 10 notifications</li>

              <li>

                <!-- inner menu: contains the actual data -->

                <ul class="menu">

                  <li>

                    <a href="#">

                      <i class="fa fa-users text-aqua"></i> 5 new members joined today

                    </a>

                  </li>

                  <li>

                    <a href="#">

                      <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the

                      page and may cause design problems

                    </a>

                  </li>

                  <li>

                    <a href="#">

                      <i class="fa fa-users text-red"></i> 5 new members joined

                    </a>

                  </li>

                  <li>

                    <a href="#">

                      <i class="fa fa-shopping-cart text-green"></i> 25 sales made

                    </a>

                  </li>

                  <li>

                    <a href="#">

                      <i class="fa fa-user text-red"></i> You changed your username

                    </a>

                  </li>

                </ul>

              </li>

              <li class="footer"><a href="#">View all</a></li>

            </ul>

          </li>

          <!-- Tasks: style can be found in dropdown.less -->

          <li class="dropdown tasks-menu">

            <a href="#" class="dropdown-toggle" data-toggle="dropdown">

              <i class="fa fa-flag-o"></i>

              <span class="label label-danger">9</span>

            </a>

            <ul class="dropdown-menu">

              <li class="header">You have 9 tasks</li>

              <li>

                <!-- inner menu: contains the actual data -->

                <ul class="menu">

                  <li><!-- Task item -->

                    <a href="#">

                      <h3>

                        Design some buttons

                        <small class="pull-right">20%</small>

                      </h3>

                      <div class="progress xs">

                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"

                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">

                          <span class="sr-only">20% Complete</span>

                        </div>

                      </div>

                    </a>

                  </li>

                  <!-- end task item -->

                  <li><!-- Task item -->

                    <a href="#">

                      <h3>

                        Create a nice theme

                        <small class="pull-right">40%</small>

                      </h3>

                      <div class="progress xs">

                        <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar"

                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">

                          <span class="sr-only">40% Complete</span>

                        </div>

                      </div>

                    </a>

                  </li>

                  <!-- end task item -->

                  <li><!-- Task item -->

                    <a href="#">

                      <h3>

                        Some task I need to do

                        <small class="pull-right">60%</small>

                      </h3>

                      <div class="progress xs">

                        <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar"

                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">

                          <span class="sr-only">60% Complete</span>

                        </div>

                      </div>

                    </a>

                  </li>

                  <!-- end task item -->

                  <li><!-- Task item -->

                    <a href="#">

                      <h3>

                        Make beautiful transitions

                        <small class="pull-right">80%</small>

                      </h3>

                      <div class="progress xs">

                        <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar"

                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">

                          <span class="sr-only">80% Complete</span>

                        </div>

                      </div>

                    </a>

                  </li>

                  <!-- end task item -->

                </ul>

              </li>

              <li class="footer">

                <a href="#">View all tasks</a>

              </li>

            </ul>

          </li>

          <!-- User Account: style can be found in dropdown.less -->

          <li class="dropdown user user-menu">

            <a href="#" class="dropdown-toggle" data-toggle="dropdown">

              <!-- <img src="<?php echo base_url();?>assets/dist/img/user2-160x160.jpg" class="user-image" alt="User Image"> -->
              <img src="<?php echo base_url();?>uploads/profile/<?php echo $this->session->userdata('pic'); ?>" class="user-image" alt="User Image">

              <span class="hidden-xs"><?php echo $this->session->userdata('username'); ?></span>

            </a>

            <ul class="dropdown-menu">

              <!-- User image -->

              <li class="user-header">

                <img src="<?php echo base_url();?>uploads/profile/<?php echo $this->session->userdata('pic'); ?>" class="img-circle" alt="User Image">



                <p>

                  <?php echo $this->session->userdata('username'); ?>

                </p>

              </li>

              <!-- Menu Body -->

              <li class="user-body">
                <div class="row">
                  <div class="col-xs-12 text-center">
                    <p>
                      <a href="<?php echo base_url();?>users/passwordchange" class="btn btn-default btn-flat">Password Change</a>
                    </p>

                  </div>
                </div>

                <!-- /.row -->

              </li>

              <!-- Menu Footer-->

              <li class="user-footer">

                <div class="pull-left">

                  <a href="<?php echo base_url();?>users/profile" class="btn btn-default btn-flat">Profile</a>

                </div>

                <div class="pull-right">

                  <a href="<?php echo base_url();?>logout" class="btn btn-default btn-flat">Sign out</a>

                </div>

              </li>

            </ul>

          </li>

          <!-- Control Sidebar Toggle Button -->

          <li>

            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>

          </li>

        </ul>

      </div>

    </nav>

  </header>

  <!-- Left side column. contains the logo and sidebar -->

  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->

    <section class="sidebar">

      <!-- Sidebar user panel -->

      <div class="user-panel">

        <div class="pull-left image">

          <img src="<?php echo base_url();?>uploads/profile/<?php echo $this->session->userdata('pic'); ?>" class="img-circle" alt="User Image">

        </div>

        <div class="pull-left info">

          <p><?php echo $this->session->userdata('username'); ?></p>

          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>

        </div>

      </div>

      <!-- search form -->

      <form action="#" method="get" class="sidebar-form">

        <div class="input-group">

          <input type="text" name="q" class="form-control" placeholder="Search...">

          <span class="input-group-btn">

                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>

                </button>

              </span>

        </div>

      </form>

      <!-- /.search form -->

      <!-- sidebar menu: : style can be found in sidebar.less -->

      <ul class="sidebar-menu" data-widget="tree">

        <li class="header">MAIN NAVIGATION</li>

        <li class="<?php echo $userslistRootStatus ?? 'inactive'; ?> treeview">

          <a href="#">

            <i class="fa fa-dashboard"></i> <span>Dashboard</span>

            <span class="pull-right-container">

              <i class="fa fa-angle-left pull-right"></i>

            </span>

          </a>

          <ul class="treeview-menu">

            <li class="<?php echo $userslistStatus ?? 'inactive'; ?>"><a href="<?php echo base_url();?>users/userslist"><i class="fa fa-circle-o"></i>Users List</a></li>

            <li class="<?php echo $adduserPageStatus ?? 'inactive'; ?>"><a href="<?php echo base_url();?>users/createuser"><i class="fa fa-circle-o"></i> Create New User</a></li>

          </ul>

        </li>

        <li class="<?php echo $invitepageRootStatus ?? 'inactive'; ?> treeview">

          <a href="#">

            <i class="fa fa-files-o"></i>

            <span>Customers Menu</span>

            <span class="pull-right-container">

              <i class="fa fa-angle-left pull-right"></i>

            </span>

          </a>

          <ul class="treeview-menu">

            <li class="<?php echo $invitepageStatus ?? 'inactive'; ?>"><a href="<?php echo base_url();?>users/invite"><i class="fa fa-circle-o"></i> Invite User</a></li>

          </ul>

        </li>

        <li class="<?php echo $messagePageRootStatus ?? 'inactive'; ?> treeview">

          <a href="#">

            <i class="fa fa-pie-chart"></i>

            <span>Message Template</span>

            <span class="pull-right-container">

              <i class="fa fa-angle-left pull-right"></i>

            </span>

          </a>

          <ul class="treeview-menu">

            <li class="<?php echo $messagePageStatus ?? 'inactive'; ?>"><a href="<?php echo base_url();?>users/messagelist"><i class="fa fa-circle-o"></i> Messages</a></li>

          </ul>

        </li>

        <li class="<?php echo $issuePageRootStatus ?? 'inactive'; ?> treeview">

          <a href="#">

            <i class="fa fa-laptop"></i>

            <span>Issues</span>

            <span class="pull-right-container">

              <i class="fa fa-angle-left pull-right"></i>

            </span>

          </a>

          <ul class="treeview-menu">

            <li class="<?php echo $issuerequestPageStatus ?? 'inactive'; ?>"><a href="<?php echo base_url();?>users/issuerequest"><i class="fa fa-circle-o"></i> Issue Request</a></li>
            <li class="<?php echo $trackissuePageStatus ?? 'inactive'; ?>"><a href="<?php echo base_url();?>users/trackissues"><i class="fa fa-circle-o"></i> Track Issue</a></li>
            <li class="<?php echo $issuereceivebyadminPageStatus ?? 'inactive'; ?>"><a href="<?php echo base_url();?>users/issuereceive"><i class="fa fa-circle-o"></i> Requested</a></li>
            <li class="<?php echo $issueassignedlistPageStatus ?? 'inactive'; ?>"><a href="<?php echo base_url();?>users/issueassignedlist"><i class="fa fa-circle-o"></i> Assigned List</a></li>
            <li class="<?php echo $issueassignedbyPageStatus ?? 'inactive'; ?>"><a href="<?php echo base_url();?>users/issueassignedby"><i class="fa fa-circle-o"></i> Assigned By</a></li>

          </ul>

        </li>

        <li class="treeview <?php echo $meetingroomPageRootStatus ?? 'inactive'; ?>">

          <a href="#">

            <i class="fa fa-edit"></i> <span>Meeting Room</span>

            <span class="pull-right-container">

              <i class="fa fa-angle-left pull-right"></i>

            </span>

          </a>

          <ul class="treeview-menu">

            <li class="<?php echo $roomcreatePageStatus ?? 'inactive'; ?>"><a href="<?php echo base_url();?>users/roomcreate"><i class="fa fa-circle-o"></i> Room Create</a></li>
            <li class="<?php echo $meetingroomPageStatus ?? 'inactive'; ?>"><a href="<?php echo base_url();?>users/roomlist"><i class="fa fa-circle-o"></i> Room List</a></li>
            <li class="<?php echo $mybookingPageStatus ?? 'inactive'; ?>"><a href="<?php echo base_url();?>users/mybooking"><i class="fa fa-circle-o"></i> Room Booked</a></li>

            <li class="<?php echo $bookingRequestPageStatus ?? 'inactive'; ?>"><a href="<?php echo base_url();?>users/booking-verification"><i class="fa fa-circle-o"></i> Booking Verification Request</a></li>

          </ul>

        </li>

        <li class="treeview <?php echo $contractsPageRootStatus ?? 'inactive'; ?>">

          <a href="#">

            <i class="fa fa-table"></i> <span>Contracts</span>

            <span class="pull-right-container">

              <i class="fa fa-angle-left pull-right"></i>

            </span>

          </a>

          <ul class="treeview-menu">

            <li class="<?php echo $contractsPageStatus ?? 'inactive'; ?>"><a href="<?php echo base_url();?>customer/contracts"><i class="fa fa-circle-o"></i> Customer Contracts</a></li>

            <!-- <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i> Data tables</a></li> -->

          </ul>

        </li>

        <!--<li>

          <a href="pages/calendar.html">

            <i class="fa fa-calendar"></i> <span>Calendar</span>

            <span class="pull-right-container">

              <small class="label pull-right bg-red">3</small>

              <small class="label pull-right bg-blue">17</small>

            </span>

          </a>

        </li>

        <li>

          <a href="pages/mailbox/mailbox.html">

            <i class="fa fa-envelope"></i> <span>Mailbox</span>

            <span class="pull-right-container">

              <small class="label pull-right bg-yellow">12</small>

              <small class="label pull-right bg-green">16</small>

              <small class="label pull-right bg-red">5</small>

            </span>

          </a>

        </li>

        <li class="treeview">

          <a href="#">

            <i class="fa fa-folder"></i> <span>Examples</span>

            <span class="pull-right-container">

              <i class="fa fa-angle-left pull-right"></i>

            </span>

          </a>

          <ul class="treeview-menu">

            <li><a href="pages/examples/invoice.html"><i class="fa fa-circle-o"></i> Invoice</a></li>

            <li><a href="pages/examples/profile.html"><i class="fa fa-circle-o"></i> Profile</a></li>

            <li><a href="pages/examples/login.html"><i class="fa fa-circle-o"></i> Login</a></li>

            <li><a href="pages/examples/register.html"><i class="fa fa-circle-o"></i> Register</a></li>

            <li><a href="pages/examples/lockscreen.html"><i class="fa fa-circle-o"></i> Lockscreen</a></li>

            <li><a href="pages/examples/404.html"><i class="fa fa-circle-o"></i> 404 Error</a></li>

            <li><a href="pages/examples/500.html"><i class="fa fa-circle-o"></i> 500 Error</a></li>

            <li><a href="pages/examples/blank.html"><i class="fa fa-circle-o"></i> Blank Page</a></li>

            <li><a href="pages/examples/pace.html"><i class="fa fa-circle-o"></i> Pace Page</a></li>

          </ul>

        </li>

        <li class="treeview">

          <a href="#">

            <i class="fa fa-share"></i> <span>Multilevel</span>

            <span class="pull-right-container">

              <i class="fa fa-angle-left pull-right"></i>

            </span>

          </a>

          <ul class="treeview-menu">

            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>

            <li class="treeview">

              <a href="#"><i class="fa fa-circle-o"></i> Level One

                <span class="pull-right-container">

                  <i class="fa fa-angle-left pull-right"></i>

                </span>

              </a>

              <ul class="treeview-menu">

                <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>

                <li class="treeview">

                  <a href="#"><i class="fa fa-circle-o"></i> Level Two

                    <span class="pull-right-container">

                      <i class="fa fa-angle-left pull-right"></i>

                    </span>

                  </a>

                  <ul class="treeview-menu">

                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>

                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>

                  </ul>

                </li>

              </ul>

            </li>

            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>

          </ul>

        </li>

        <li><a href="https://adminlte.io/docs"><i class="fa fa-book"></i> <span>Documentation</span></a></li>

        <li class="header">LABELS</li>

        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>

        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>

        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
        -->

      </ul>

    </section>

    <!-- /.sidebar -->

  </aside>