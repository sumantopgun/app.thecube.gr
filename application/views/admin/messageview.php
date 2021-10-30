  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Template View

      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>users/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Message Template</a></li>
        <li class="active">Message View</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- right column -->
        <div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <!-- <div class="box-header with-border">
              <h3 class="box-title">Invitation to User</h3>
            </div> --><br>
            <center><?php echo $this->session->flashdata('msg'); ?></center>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="#" method="post">
              <div class="box-body">

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Message Name</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="messageName" readonly="" name="messageName" value="<?php echo $messageview->messageName; ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="messageText" class="col-sm-2 control-label">Message</label>

                  <div class="col-sm-8">
                    <textarea class="form-control ckeditor" id="messageText" name="messageText" rows="3" readonly=""><?php echo $messageview->messageText; ?></textarea>
                  </div>
                </div>

              </div>
              <!-- /.box-body -->
              <center>
              <div class="box-footer">
                <a href="<?php echo base_url();?>users/messagelist"><button type="button" class="btn btn-info">back</button></a>
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
