  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Booking Verification Request
    <!--     <small>advanced tables</small> -->
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>users/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Booking Verification Request</li>
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
                    <th>Email Id</th>
                    <th>Room Name</th>                
                    <th>Date</th>
                    <th>Meeting Start</th>
                    <th>Meeting End</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php $count = 1; ?>
                  <?php if($bookingRequest){ ?>
                  <?php foreach ($bookingRequest as $request):?>
                <tr>
                    <td><?php echo $count++; ?></td>
                    <td><?php echo $request->email; ?></td>
                    <td><?php echo $request->roomTitle; ?></td>
                    <td><?php echo $request->date; ?></td>
                    <td><?php echo $request->slotStart; ?></td>
                    <td><?php echo $request->slotEnd; ?></td>
                    <td>
                        <a href="<?php echo base_url();?>users/booking-verify?token=<?php echo $request->token; ?>"><button class="btn-xs btn-success">Verify</button></a>
                    </td>
                  
                  <?php endforeach; ?>
                  <?php  } else {?>
                  <div class="alert alert-warning">
                      <h3>You have no booking request yet.</h3>
                  </div>
                  <?php } ?>
                </tr>

                </tbody>
                <tfoot>
                <tr>
                    <th>SL No</th>
                    <th>Email Id</th>
                    <th>Room Name</th>                
                    <th>Date</th>
                    <th>Meeting Start</th>
                    <th>Meeting End</th>
                    <th>Action</th>
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
