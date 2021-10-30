  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Issue List 
    <!--     <small>advanced tables</small> -->
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>users/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Issue List</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">

          <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <center><b><?php echo $this->session->flashdata('msg'); ?></b></center>
                <thead>
                <tr>
                  <th>SL No</th>
                  <th>Issue Subject</th>
                  <th>Status</th>
                  <th>Reassigned</th>
                </tr>
                </thead>
                <tbody>
                  <?php $count = 1; ?>
                  <?php if(count($issuelists) >0){ ?>
                  <?php foreach ($issuelists as $issuelist):?>
                <tr>
                  <td><?php echo $count++; ?></td>
                  <td><?php echo $issuelist->subject; ?></td>
                  
                  <td>
                    <?php  

                      $status = $issuelist->status;
                      if ($status=='Submit') { ?>
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#assign<?php echo $issuelist->issueID; ?>">Assign</button>

                        <?php } else{
                          echo "$status";
                        }
                    ?>                        
        
                  </td>
                  <td>
                    <?php 
                      $status = $issuelist->status;
                      if ($status=='Block') { ?>
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#reassign<?php echo $issuelist->issueID; ?>">Reassign</button>
                      <?php }else{ 
                        echo "";
                      }
                    ?>                      
                  </td>

                  <!-- modal -->
                  <div class="modal fade" id="assign<?php echo $issuelist->issueID; ?>">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <form class="form-horizontal1" action="<?php echo base_url(); ?>users/issueassigned" method="post">  
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title">Assign Admin</h4>
                        </div>
                        <div class="modal-body">
                          
                          <input type="hidden" class="form-control" name="issueID" value="<?php echo $issuelist->issueID; ?>">
                          <input type="hidden" class="form-control" name="issueBy" value="<?php echo $issuelist->requestedBy; ?>">
                          <input type="hidden" class="form-control" name="assignBy" value="<?php echo $this->session->userdata('username'); ?>">
                          <div class="form-group">
                          <select class="form-control select2" name="assignTo" id="assignTo" style="width: 100%;">
                            <option value="none" selected="" disabled="">Select Admin</option>
                              <?php
                                                  foreach($assigns as $assign)
                                                  {
                                                   echo '<option value="'.$assign->username.'">'.$assign->username.'</option>';
                                                  }
                                                  ?>

                          </select>
                        </div>
                    
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Assign</button>
                        </div>
                      </form>
                      </div>
                      <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                  </div>
                  <!-- /.modal -->

                  <!-- Reassign -->
                  <div class="modal fade" id="reassign<?php echo $issuelist->issueID; ?>">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <form class="form-horizontal1" action="<?php echo base_url(); ?>users/issuereassigned" method="post">  
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title">Reassign Admin</h4>
                        </div>
                        <div class="modal-body">
                          
                          <input type="hidden" class="form-control" name="issueID" value="<?php echo $issuelist->issueID; ?>">
                          
                          <input type="hidden" class="form-control" name="assignBy" value="<?php echo $this->session->userdata('username'); ?>">
                          <div class="form-group">
                          <select class="form-control select2" name="assignTo" id="assignTo" style="width: 100%;">
                            <option value="none" selected="" disabled="">Select Admin</option>
                              <?php
                                                  foreach($assigns as $assign)
                                                  {
                                                   echo '<option value="'.$assign->username.'">'.$assign->username.'</option>';
                                                  }
                                                  ?>

                          </select>
                        </div>
                    
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Reassign</button>
                        </div>
                      </form>
                      </div>
                      <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                  </div>
                  <!-- /.Reassign -->

                  <?php endforeach; ?>
                  <?php  } else {?>
                  <div class="alert alert-warning">
                      <h3>You have no Issue yet.</h3>
                  </div>
                  <?php } ?>
                </tr>

                </tbody>
                <tfoot>
                <tr>
                  <th>SL No</th>
                  <th>Issue Subject</th>
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
  
