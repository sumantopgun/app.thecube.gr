  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Meeting Room Create

      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>users/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Meeting Room Create</li>
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
              <h3 class="box-title"></h3>
            </div><br>
            <center><?php echo $this->session->flashdata('msg'); ?></center>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="<?php echo base_url(); ?>users/createroom" method="post">
              <div class="box-body">
                <input type="hidden" class="form-control" name="creatoruname" value="<?php echo $this->session->userdata('username'); ?>">

                <div class="form-group">
                  <label for="roomTitle" class="col-sm-2 control-label">Room Title</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="roomTitle" name="roomTitle" placeholder="Room Title" required="">
                  </div>
                </div>
            
                <!-- <div class="form-group">
                  <label for="slot" class="col-sm-2 control-label">Time Slot</label>

                  <div class="col-sm-8">
                    <select class="form-control">
                      <option>option 1</option>
                      <option>option 2</option>
                      <option>option 3</option>
                      <option>option 4</option>
                      <option>option 5</option>
                    </select>
                  </div>
                </div> -->

              </div>
              <!-- /.box-body -->
              <center>
              <div class="box-footer">
                <button type="submit" class="btn btn-info">Create Room</button>
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
