  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Issue Request

      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>users/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Issue</li>
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
              <h3 class="box-title">Issue Details</h3>
            </div><br>
            <center><?php echo $this->session->flashdata('msg'); ?></center>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="<?php echo base_url(); ?>users/requestsend" method="post">
              <div class="box-body">
                <input type="hidden" class="form-control" name="requestedBy" value="<?php echo $this->session->userdata('username'); ?>">

                <div class="form-group">
                  <label for="subject" class="col-sm-2 control-label">Subject</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required="">
                  </div>
                </div>
            
                <div class="form-group">
                  <label for="details" class="col-sm-2 control-label">Details</label>

                  <div class="col-sm-8">
                    <textarea class="form-control" id="detail" name="detail" rows="3" placeholder="Details ..." required=""></textarea>
                  </div>
                </div>

              </div>
              <!-- /.box-body -->
              <center>
              <div class="box-footer">
                <button type="submit" class="btn btn-info">Request</button>
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
