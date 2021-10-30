  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        User Details
       
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">General Elements</li>
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
              <h3 class="box-title">User Informations</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <!-- <form class="form-horizontal" action="<?php echo base_url(); ?>users/userupdate" method="post"> -->
              <div class="box-body">
                <input type="hidden" class="form-control" name="user_id" value="<?php echo $userview->user_id; ?>">  
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Username</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="username" name="username" readonly="" value="<?php echo $userview->username; ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="membership_type" class="col-sm-2 control-label">Membership Type</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="membership_type" readonly="" name="membership_type" value="<?php $type= $userview->membership_type;
                      $query=$this->db->where('id', $type) 
                                      ->get('memberships');
                      $typename=$query->row('type');
                      echo "$typename"; ?>
                    ">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Name</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" readonly="" name="name" value="<?php echo $userview->name; ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Surname</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="surname" readonly="" name="surname" value="<?php echo $userview->surname; ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Email</label>

                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" readonly="" name="email" value="<?php echo $userview->email; ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Address</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="address" readonly="" name="address" value="<?php echo $userview->address; ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">City</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="city" readonly="" name="city" value="<?php echo $userview->city; ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">State</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="state" readonly="" name="state" value="<?php echo $userview->state; ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Country</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="country" readonly="" name="country" value="<?php echo $userview->country; ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Phone No</label>

                  <div class="col-sm-10">
                    <input type="number" class="form-control" id="telno" readonly="" name="telno" value="<?php echo $userview->telno; ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Facebook</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="facebook" readonly="" name="facebook" value="<?php echo $userview->facebook; ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Twitter</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="twitter" readonly="" name="twitter" value="<?php echo $userview->twitter; ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Skype</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="skype" readonly="" name="skype" value="<?php echo $userview->skype; ?>">
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
            <!--   <div class="box-footer">
                <button type="submit" class="btn btn-info pull-right">Update</button>
              </div> -->
              <!-- /.box-footer -->
            <!-- </form> -->
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
 