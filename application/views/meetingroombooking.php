  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Meeting Room Available

      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>users/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Meeting Room Available</li>
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
              <h3 class="box-title">Meeting Room : <span style="color: #32CD32;"><?php echo $room->roomTitle; ?></span></h3>
            </div><br>
            
            <b><?php echo $this->session->flashdata('msg'); ?></b>
            
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="<?php echo base_url(); ?>users/reserve" method="post">
              <div class="box-body">
                <input type="hidden" class="form-control" name="username" value="<?php echo $this->session->userdata('username'); ?>">
                <input type="hidden" class="form-control" name="roomId" value="<?php echo $room->roomId; ?>">
                <input type="hidden" class="form-control" name="roomTitle" value="<?php echo $room->roomTitle; ?>">

                <div class="form-group">
                  <label for="date" class="col-sm-2 control-label">Booking Date</label>

                  <div id="calendar" class="col-sm-6">
                    <input type="hidden" class="form-control" id="bkdate" name="date">
                  </div>
                </div>


                <!-- <div class="form-group">
                  <label for="date" class="col-sm-2 control-label">Booking Date</label>

                  <div class="col-sm-8">
                    <input type="date" class="form-control" id="date" name="date"  required="">
                  </div>
                </div>  -->

                <div class="form-group">
                  <label for="slot" class="col-sm-2 control-label">Booking Slot</label>

                  <div class="col-sm-6">
                    <select class="form-control" name="slot">
                      <option value="09:00 A.M">09:00 A.M</option>
                      <option value="09:15 A.M">09:15 A.M</option>
                      <option value="09:30 A.M">09:30 A.M</option>
                      <option value="09:45 A.M">09:45 A.M</option>
                      <option value="10:00 A.M">10:00 A.M</option>
                      <option value="10:15 A.M">10:15 A.M</option>
                      <option value="10:30 A.M">10:30 A.M</option>
                      <option value="10:45 A.M">10:45 A.M</option>
                      <option value="11:00 A.M">11:00 A.M</option>
                      <option value="11:15 A.M">11:15 A.M</option>
                      <option value="11:30 A.M">11:30 A.M</option>
                      <option value="11:45 A.M">11:45 A.M</option>
                      <option value="12:00 P.M">12:00 P.M</option>
                      <option value="12:15 P.M">12:15 P.M</option>
                      <option value="12:30 P.M">12:30 P.M</option>
                      <option value="12:45 P.M">12:45 P.M</option>
                      <option value="01:00 P.M">01:00 P.M</option>
                      <option value="01:15 P.M">01:15 P.M</option>
                      <option value="01:30 P.M">01:30 P.M</option>
                      <option value="01:45 P.M">01:45 P.M</option>
                      <option value="02:00 P.M">02:00 P.M</option>
                      <option value="02:15 P.M">02:15 P.M</option>
                      <option value="02:30 P.M">02:30 P.M</option>
                      <option value="02:45 P.M">02:45 P.M</option>
                      <option value="03:00 P.M">03:00 P.M</option>
                      <option value="03:15 P.M">03:15 P.M</option>
                      <option value="03:30 P.M">03:30 P.M</option>
                      <option value="03:45 P.M">03:45 P.M</option>
                      <option value="04:00 P.M">04:00 P.M</option>
                      <option value="04:15 P.M">04:15 P.M</option>
                      <option value="04:30 P.M">04:30 P.M</option>
                      <option value="04:45 P.M">04:45 P.M</option>
                      <option value="05:00 P.M">05:00 P.M</option>
                      <option value="05:15 P.M">05:15 P.M</option>
                      <option value="05:30 P.M">05:30 P.M</option>
                      <option value="05:45 P.M">05:45 P.M</option>
                      <option value="06:00 P.M">06:00 P.M</option>
                      <option value="06:15 P.M">06:15 P.M</option>
                      <option value="06:30 P.M">06:30 P.M</option>
                      <option value="06:45 P.M">06:45 P.M</option>
                      <option value="07:00 P.M">07:00 P.M</option>
                      <option value="07:15 P.M">07:15 P.M</option>
                      <option value="07:30 P.M">07:30 P.M</option>
                      <option value="07:45 P.M">07:45 P.M</option>
                    </select>
                  </div>
                </div> 

              </div>
              <!-- /.box-body -->
              <div class="col-sm-10">
                <center>
              <div class="box-footer">
                <button type="submit" class="btn btn-success btn-lg">Reserve Now</button>
              </div></center>
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
