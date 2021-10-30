  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Meeting Room Not Available

      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>users/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Meeting Room Not Available</li>
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
              <h3 class="box-title">Meeting Room : <span style="color: #ffffff;"><?php echo $roomTitle; ?></span></h3>
            </div><br>
            <center><?php echo $this->session->flashdata('msg'); ?></center>
            <!-- /.box-header -->
            <!-- form start -->
          <!--   <form class="form-horizontal" action="<?php echo base_url(); ?>users/reservedone" method="post"> -->
              <div class="box-body">
                <center><h2>Room Busy</h2>
                  
                  <button type="button" class="btn btn-info" data-toggle="modal" data-target="#bookschedule">See Schedule</button>                 
                </center>
                
            

              </div>
              <!-- /.box-body -->
              <center>
              <div class="box-footer">
                <a href="<?php echo base_url();?>users/roombook?id=<?php echo $roomId; ?>"><button type="button" class="btn btn-info">Make Reservation</button></a>
              </div></center>
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


  <!-- Modal -->

      <div class="modal modal-success fade" id="bookschedule">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <center><h4 class="modal-title">Schedule List</h4></center>
              </div>
              <div class="modal-body">


                <div class="box-body">
                <table id="example11" class="table table-bordered table-striped">                  
                  <thead>
                  <tr>
                    <th>SL No</th>
                    <th>Slot Time</th>                   
                  </tr>
                  </thead>
                  <tbody>
                    <?php $count = 1; ?>
                    <?php if(count($schedules) >0){ ?>
                    <?php foreach ($schedules as $schedule):?>
                  <tr>
                    <td><?php echo $count++; ?></td>
                    <td><?php echo $schedule->slotStart . ' <button type="button" class="btn btn-primary btn-xs">Booked</button>'; ?></td>                    
                    
                    
                    <?php endforeach; ?>
                    <?php  } else {?>
                    <div class="alert alert-warning">
                        <h3>All Slot are Available</h3>
                    </div>
                    <?php } ?>
                  </tr>

                  </tbody>
                  <tfoot>
                  <tr>
                    <th>SL No</th>
                    <th>Slot Time</th>
                  </tr>
                  
                  </tfoot>
                </table>
                <center>
                  <h3> *Other slot are Available* </h3>
                </center>
                
              </div>


              </div>
             
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Close</button>                
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

        <style type="text/css">
          .box.box-info {
            background: #bf2a2a85;
          }
          .box-footer {
              background: #d3878a;
          }
          table#example11 {
              text-align: center;
          }
          th {
              text-align: center;
          }
          td {
              color: black;
          }
        </style>
