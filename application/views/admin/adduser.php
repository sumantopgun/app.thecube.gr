  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Create User

      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>users/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Create User</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- right column -->
        <div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">User Details</h3>
            </div><br>
            <center><?php echo $this->session->flashdata('msg'); ?></center>
            
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="<?php echo base_url(); ?>users/adduser" method="post">
              <div class="box-body">

                <div class="form-group">
                  <label for="username" class="col-sm-2 control-label">Username</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="username" name="username" placeholder="Username" maxlength="25" required="">
                    <span style="color:red;"><?php echo form_error('username'); ?></span>
                  </div>                  
                </div>

                <div class="form-group">
                  <label for="name" class="col-sm-2 control-label">Name</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" maxlength="50" required="">
                    <span style="color:red;"><?php echo form_error('name'); ?></span>
                  </div>
                </div>

                <div class="form-group">
                  <label for="surname" class="col-sm-2 control-label">Surname</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="surname" name="surname" placeholder="Surname" maxlength="20" required="">
                    <span style="color:red;"><?php echo form_error('surname'); ?></span>
                  </div>
                </div>

                <div class="form-group">
                  <label for="email" class="col-sm-2 control-label">Email</label>

                  <div class="col-sm-8">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" maxlength="100" required="">
                    <span style="color:red;"><?php echo form_error('email'); ?></span>
                  </div>                  
                </div>

                <div class="form-group">
                  <label for="password" class="col-sm-2 control-label">Password</label>

                  <div class="col-sm-8">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required="">
                    <span style="color:red;"><?php echo form_error('password'); ?></span>
                  </div>                  
                </div>

                <div class="form-group">
                  <label for="password" class="col-sm-2 control-label">Confirm Password</label>

                  <div class="col-sm-8">
                    <input type="password" class="form-control" id="conf_password" name="conf_password" placeholder="Confirm Password" required="">
                    <span style="color:red;"><?php echo form_error('conf_password'); ?></span>
                  </div>                  
                </div>

              </div>
              
                <div class="form-group">
                  <label for="send-welcom" class="col-sm-2 control-label">Send Welcome Message</label>

                  <div class="col-sm-8">
                    <input type="checkbox" id="welcomeMsg" name="welcomeMsg">                    
                  </div>                  
                </div>

              </div>
              
              
              <!-- /.box-body -->
              <center>
             
              <div class="box-footer">
                <button type="submit" class="btn btn-info">Create New User</button>
              </div></center>
              <!-- /.box-footer -->
            </form>
          </div>
          <!-- /.box -->
          <!-- general form elements disabled -->
          <!-- /.box -->
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
