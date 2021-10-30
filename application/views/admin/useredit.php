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
            <form class="form-horizontal" action="<?php echo base_url(); ?>users/userupdate" method="post">
              <div class="box-body">
                <input type="hidden" class="form-control" name="user_id" value="<?php echo $useredit->user_id; ?>">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Username</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="username" name="username" readonly="" value="<?php echo $useredit->username; ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="membership_type" class="col-sm-2 control-label">Membership Type</label>

                  <div class="col-sm-10">

                    <select name="membership_type" id="membership_type" class="form-control">


                          <?php
                            if($useredit->membership_type == 0)
                              echo '<option value="0" selected="selected" disabled="">Select Membership Type</option>';
                            else
                              echo '<option value="0" disabled="">Select Membership Type</option>';
                            foreach($members as $member)
                            {
                              if ($member->id == $useredit->membership_type)
                              {
                                echo '<option selected="selected" value="'.$member->id.'">'.$member->type.'</option>';
                              }
                              else{
                                echo '<option value="'.$member->id.'">'.$member->type.'</option>';
                              }

                            }
                          ?>

                    </select>
                    <?php echo form_error('membership_type'); ?>

                    <!-- <input type="text" class="form-control" id="membership_type" name="membership_type" value="<?php echo $useredit->membership_type; ?>"> -->
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Name</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" name="name" value="<?php echo $useredit->name; ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Surname</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="surname" name="surname" value="<?php echo $useredit->surname; ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Email</label>

                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" name="email" value="<?php echo $useredit->email; ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Address</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="address" name="address" value="<?php echo $useredit->address; ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">City</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="city" name="city" value="<?php echo $useredit->city; ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">State</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="state" name="state" value="<?php echo $useredit->state; ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Country</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="country" name="country" value="<?php echo $useredit->country; ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Phone No</label>

                  <div class="col-sm-10">
                    <input type="number" class="form-control" id="telno" name="telno" value="<?php echo $useredit->telno; ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Facebook</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="facebook" name="facebook" value="<?php echo $useredit->facebook; ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Twitter</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="twitter" name="twitter" value="<?php echo $useredit->twitter; ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Skype</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="skype" name="skype" value="<?php echo $useredit->skype; ?>">
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-info pull-right">Update</button>
              </div>
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
