  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Issue Information
    <!--     <small>advanced tables</small> -->
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>users/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Issue Information</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">

          <div class="box">
            <div class="box-footer">
              </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example11" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Subject</th>
                  <th>Details</th>
                  <th>Date Time</th>
                  
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td><?php echo $getissue->subject; ?></td>
                  <td><?php echo $getissue->detail; ?></td>
                  <td><?php echo $getissue->date; ?></td> 
                  
                </tr>

                </tbody>
                <tfoot>
                <tr>
                  <th>Subject</th>
                  <th>Details</th>
                  <th>Date Time</th>
                  
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


  <style type="text/css">
    
    i.fa.fa-fw.fa-commenting {
    font-size: 30px;
}
  </style>
