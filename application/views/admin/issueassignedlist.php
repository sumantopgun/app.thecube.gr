  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Assigned List
    <!--     <small>advanced tables</small> -->
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>users/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Assigned List</li>
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
                  <th>Assign By</th>
                  <th>Details</th>
                  <th>Status</th>
                  <th>Reassign</th>
                  <th>Message</th>
                </tr>
                </thead>
                <tbody>
                  <?php $count = 1; ?>
                  <?php if(count($Assigneds) >0){ ?>
                  <?php foreach ($Assigneds as $Assigned):?>
                <tr>
                  <td><?php echo $count++; ?></td>
                  <td><?php echo $Assigned->issueBy; ?></td>
                  <td><?php echo $Assigned->assignBy; ?></td>
                  <td>
                    <a href="<?php echo base_url();?>users/issueview?issueid=<?php echo $Assigned->issueID; ?>"><button class="btn-xs">View</button></a>              
                  </td>
                  <td>
                   <?php  

                      $status = $Assigned->status;
                      if ($status!= 'Completed' && $status!= 'Block') { ?>
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#status<?php echo $Assigned->id; ?>"><?php echo $Assigned->status; ?></button>

                        <?php } else{
                          echo "$status";
                        }
                    ?> 
                  </td>

                  <td>
                    <?php 
                      $status = $Assigned->status;
                      if ($status=='Block') { ?>
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#reassign<?php echo $Assigned->id; ?>">Reassign</button>
                      <?php }else{ 
                        echo "";
                      }
                    ?>                      
                  </td>

                  <td>
                    <?php  

                      $status = $Assigned->status;
                      if ($status!= 'Completed') { ?>
                        <a href="<?php echo base_url();?>users/issuemsg?issueid=<?php echo $Assigned->issueID; ?>"><i class="fa fa-fw fa-commenting"></i></a>

                        <?php } else{ ?>
                          <a href="<?php echo base_url();?>users/issuemsg?issueid=<?php echo $Assigned->issueID; ?>"><i class="fa fa-fw fa-commenting"></i></a>
                       <?php }
                    ?>
                    
                  </td> 

                  <div class="modal fade" id="status<?php echo $Assigned->id; ?>">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <form class="form-horizontal1" action="<?php echo base_url(); ?>users/issuestatusupdate" method="post"> 
                        <input type="hidden" class="form-control" name="issueID" value="<?php echo $Assigned->issueID; ?>"> 
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title">Issue Status</h4>
                        </div>
                        <div class="modal-body">
                          <div class="form-group">
                          <label>Status</label>
                          <select class="form-control select2" name="status" style="width: 100%;">
                            <option selected="selected"><?php echo $Assigned->status; ?></option>
                            <option value="Processing">Processing</option>
                            <option value="Waiting">Waiting</option>
                            <option value="Block">Block</option>
                            <option value="Completed">Completed</option>
                          </select>
                        </div>
                        </div><br>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                      </form>
                      </div>
                      <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                  </div>
                  <!-- /.modal -->

                  <!-- Reassign -->
                  <div class="modal fade" id="reassign<?php echo $Assigned->id; ?>">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <form class="form-horizontal1" action="<?php echo base_url(); ?>users/issuereassigned" method="post">  
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title">Reassign Admin</h4>
                        </div>
                        <div class="modal-body">
                          
                          <input type="hidden" class="form-control" name="issueID" value="<?php echo $Assigned->issueID; ?>">
                          
                          <input type="hidden" class="form-control" name="assignBy" value="<?php echo $this->session->userdata('username'); ?>">
                          <div class="form-group">
                          <select class="form-control select2" name="assignTo" id="assignTo" style="width: 100%;">
                            <option value="none" selected="" disabled="">Select Admin</option>
                              <?php
                                                  foreach($reassigns as $reassign)
                                                  {
                                                   echo '<option value="'.$reassign->username.'">'.$reassign->username.'</option>';
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
                      <h3>You have no Issue Assigned yet.</h3>
                  </div>
                  <?php } ?>
                </tr>

                </tbody>
                <tfoot>
                <tr>
                  <th>SL No</th>
                  <th>Issue By</th>
                  <th>Assign By</th>
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
