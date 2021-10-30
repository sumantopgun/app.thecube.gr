  <!-- Content Wrapper. Contains page content -->

  <div class="content-wrapper">

    <!-- Content Header (Page header) -->

    <section class="content-header">

      <h1>

        Users List

    <!--     <small>advanced tables</small> -->

      </h1>

      <ol class="breadcrumb">

        <li><a href="<?php echo base_url();?>users/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>

        <li class="active">Users List</li>

      </ol>

    </section>



    <!-- Main content -->

    <section class="content">

      <div class="row">

        <div class="col-xs-12">



          <div class="box">

        <!--     <div class="box-header">

              <h3 class="box-title">Data Table With Full Features</h3>

            </div> -->

            <!-- /.box-header -->

            <div class="box-body">

              <table id="example1" class="table table-bordered table-striped">

                <center><b><?php echo $this->session->flashdata('msg'); ?></b></center>

                <thead>

                <tr>

                  <th>SL No</th>

                  <th>Username</th>

                  <th>Name</th>

                  <th>Memb Type</th>

                  <th>Email</th>

                  <th>Address</th>

                  <th>City</th>

                  <th>State</th>

                  <th>Country</th>

                  <th>Phone No</th>

                  <th>User Type</th>

                  <!-- <th>Facebook</th>

                  <th>Twitter</th>

                  <th>Skype</th>

                  <th>Action</th> -->

                </tr>

                </thead>

                <tbody>

                  <?php $count = 1; ?>

                  <?php if(count($users) >0){ ?>

                  <?php foreach ($users as $user):?>

                <tr>

                  <td><?php echo $count++; ?></td>

                  <td><?php echo $user->username; ?></td>

                  <td><?php echo $user->name .' '. $user->surname; ?></td>

                  <?php

                      if($user->membership_type == 0)

                        echo '<td>Not Set</td>';

                      foreach($members as $member)

                      {

                        if ($member->id == $user->membership_type)

                        {

                          echo '<td>'.$member->type.'</td>';

                        }

                      }

                    ?>

                  <td><?php echo $user->email; ?></td>

                  <td><?php echo $user->address; ?></td>

                  <td><?php echo $user->city; ?></td>

                  <td><?php echo $user->state; ?></td>

                  <td><?php echo $user->country; ?></td> 

                  <td><?php echo $user->telno; ?></td>

                  <td><?php echo $user->usertype; ?></td>

                  <!-- <td><?php echo $user->facebook; ?></td>

                  <td><?php echo $user->twitter; ?></td>

                  <td><?php echo $user->skype; ?></td> -->

                  <td>



                     <a href="<?php echo base_url();?>users/userview/?id=<?php echo $user->user_id; ?>"><button class="btn-xs">View</button></a>

                     <a href="<?php echo base_url();?>users/useredit/?id=<?php echo $user->user_id; ?>"><button class="btn-xs">Edit</button></a>

                    <!--  <a href="<?php echo base_url();?>users/userstatus?user_id=<?php echo $user->user_id; ?>&sval=<?php echo $user->status; ?>"><button type="button" class="btn btn-primary btn-xs">Delete</button></a> -->



                    <a href="javascript:void(0);" onclick="delete_user(<?php echo $user->user_id;?>);"><button type="button" class="btn btn-primary btn-xs">Delete</button></a> 



                    <?php 

                      $usertype = $user->usertype;

                      if ($usertype=='user') { ?>

                        <a href="<?php echo base_url();?>users/permission/?id=<?php echo $user->user_id; ?>"><button type="button" class="btn btn-primary btn-xs">Make Admin</button></a> 

                     <?php } else{

                      // echo "";

                     }

                    ?>                 

        

                  </td>

                  <?php endforeach; ?>

                  <?php  } else {?>

                  <div class="alert alert-warning">

                      <h3>You have no Users yet.</h3>

                  </div>

                  <?php } ?>

                </tr>



                </tbody>

                <tfoot>

                <tr>

                  <th>SL No</th>

                  <th>Username</th>

                  <th>Name</th>

                  <th>Memb Type</th>

                  <th>Email</th>

                  <th>Address</th>

                  <th>City</th>

                  <th>State</th>

                  <th>Country</th>

                  <th>Phone No</th>

                  <th>User Type</th>

                </tr>

                </tfoot>

              </table>

            </div>

            <!-- /.box-body -->

          </div>

          <!-- /.box -->

        </div>

        <!-- /.col -->

      </div>

      <!-- /.row -->

    </section>

    <!-- /.content -->

  </div>

  <!-- /.content-wrapper -->

  <script type="text/javascript">

    var url="<?php echo base_url();?>";

    function delete_user(user_id){

       var r=confirm("Are you sure you want to delete")

        if (r==true)

          window.location = url+"users/userstatus?user_id=<?php echo $user->user_id; ?>&sval=<?php echo $user->status; ?>";

        else

          return false;

        } 

</script>

