
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        User Profile
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>users/dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Password Change</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url();?>assets/dist/img/user2-160x160.jpg" alt="User profile picture">

              <h3 class="profile-username text-center"><?php echo $this->session->userdata('username'); ?></h3>

              <p class="text-muted text-center">
                <?php
                        $sess=$this->session->userdata('username');
                        $query=$this->db->where('username', $sess)
                                    ->get('users_info');
                        $membership=$query->row('membership_type');
                        $query1=$this->db->where('id', $membership)
                                    ->get('memberships');
                        $type=$query1->row('type');
                        echo "Membership Type : $type"; 
                      ?>
              </p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Followers</b> <a class="pull-right">1,322</a>
                </li>
                <li class="list-group-item">
                  <b>Following</b> <a class="pull-right">543</a>
                </li>
                <li class="list-group-item">
                  <b>Friends</b> <a class="pull-right">13,287</a>
                </li>
              </ul>

              <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

      
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">Password Change</a></li>
            <!--   <li><a href="#timeline" data-toggle="tab">Timeline</a></li>
              <li><a href="#settings" data-toggle="tab">Settings</a></li> -->
            </ul>
            <div class="tab-content">

              <div class="active tab-pane" id="activity">
                <form class="form-horizontal" action="<?php echo base_url();?>users/change_password" method="post">
                  <div class="form-group">
                    <center><?php echo $this->session->flashdata('msg'); ?></center>
                  </div>
                  <div class="form-group">
                    <label for="password" class="col-sm-2 control-label">Current Password</label>

                    <div class="col-sm-10">
                      <input type="password" class="form-control" id="password" name="password" placeholder="Current Password">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="new_password" class="col-sm-2 control-label">New Password</label>

                    <div class="col-sm-10">
                      <input type="password" class="form-control" name="new_password" id="new_password" placeholder="New Password">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="confirm_password" class="col-sm-2 control-label">Confirm Password</label>

                    <div class="col-sm-10">
                      <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Confirm Password">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-danger">Submit</button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  