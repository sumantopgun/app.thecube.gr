  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Check In

      </h1>
      
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- right column -->
        <div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
            </div><br>
            
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="<?php echo base_url(); ?>users/checkin" method="post">
              <div class="box-body">
                <input type="hidden" class="form-control" name="username" value="<?php echo $username; ?>">
                <input type="hidden" class="form-control" name="roomId" value="<?php echo $roomId; ?>">
                <input type="hidden" class="form-control" name="date" value="<?php echo $date; ?>">

                <div class="form-group">
                  <label for="slotStart" class="col-sm-2 control-label">Meeting Start</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" readonly="" id="slotStart" name="slotStart" value="<?php echo $slot; ?>" required="">
                  </div>
                </div>
                <div class="form-group">
                  <label for="slotEnd" class="col-sm-2 control-label">Meeting End</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" readonly="" id="slotEnd" name="slotEnd" value="<?php echo $slotEnd; ?>" required="">
                  </div>
                </div>
                <div class="form-group">
                  <label for="email" class="col-sm-2 control-label">Organiser Email</label>

                  <div class="col-sm-8">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Organiser Email" required="">
                  </div>
                </div>
            

              </div>
              <!-- /.box-body -->
              <center>
              <div class="box-footer">
                <button type="submit" class="btn btn-info">Reserve</button>
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

  <style type="text/css">
    .box-footer {
      background: green;
    }
    .box.box-info {
      background: green;
    }
  </style>
