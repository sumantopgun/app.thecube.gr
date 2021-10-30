  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Assigned By List
    <!--     <small>advanced tables</small> -->
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>users/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Assigned By List</li>
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
              <table id="example1" class="table table-bordered table-striped">
                <center><b><?php echo $this->session->flashdata('msg'); ?></b></center>
                <thead>
                <tr>
                  <th>SL No</th>
                  <th>Issue By</th>
                  <th>Assign To</th>
                  <th>Status</th>
                  <th>Message</th>
                </tr>
                </thead>
                <tbody>
                  <?php $count = 1; ?>
                  <?php if(count($assignedbylists) >0){ ?>
                  <?php foreach ($assignedbylists as $assignedbylist):?>
                <tr>
                  <td><?php echo $count++; ?></td>
                  <td><?php echo $assignedbylist->issueBy; ?></td>
                  <td><?php echo $assignedbylist->assignTo; ?></td>
                  <td><button type="button" class="btn btn-default" data-toggle="modal"><?php echo $assignedbylist->status; ?></button></td> 
                  <td>
                    <?php  

                      $status = $assignedbylist->status;
                      if ($status!= 'Completed') { ?>
                        <a href="<?php echo base_url();?>users/issuemsgby?issueid=<?php echo $assignedbylist->issueID; ?>"><i class="fa fa-fw fa-commenting"></i></a>

                        <?php } else{ ?>
                          <a href="<?php echo base_url();?>users/issuemsgby?issueid=<?php echo $assignedbylist->issueID; ?>"><i class="fa fa-fw fa-commenting"></i></a> 
                      <?php  }
                    ?>
                    
                  </td> 
                  <?php endforeach; ?>
                  <?php  } else {?>
                  <div class="alert alert-warning">
                      <h3>You have no Issue Assigned By yet.</h3>
                  </div>
                  <?php } ?>
                </tr>

                </tbody>
                <tfoot>
                <tr>
                  <th>SL No</th>
                  <th>Issue By</th>
                  <th>Details</th>
                  <th>Status</th>
                  <th>Message</th>
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
