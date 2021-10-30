  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Contract List
    <!--     <small>advanced tables</small> -->
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>users/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Contract List</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">

          <div class="box">
            <div class="box-footer">
                <a href="<?php echo base_url();?>customer/contracts/create"><button type="submit" class="btn btn-info pull-right">Create Contract</button></a>
              </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <center><b><?php echo $this->session->flashdata('msg'); ?></b></center>
                <thead>
                <tr>
                  <th>SL No</th>
                  <th>Contract Customer Name</th>
                  <th>Contract Start</th>
                  <th>Contract End</th>
                  <th>Contract Renewal Date</th>
                  <th>Contract Value</th>
                  <th>Contract File</th>
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                  <?php $count = 1; ?>
                  <?php  if (count($contracts) > 0) { ?>
                  <?php foreach ($contracts as $contract):?>
                <tr>
                  <td><?php echo $count++; ?></td>
                  
                  <td><?php echo $contract->name; ?> <?php echo $contract->surname; ?></td>
                  <td><?php echo $contract->contractStart; ?></td>
                  <td><?php echo $contract->contractEnd; ?></td>
                  <td><?php echo $contract->contractRenewalDate; ?></td>
                  <td><?php echo $contract->contractValue; ?></td>
                  <td>
                  <a href="<?php echo base_url().'uploads/contractFile/'.$contract->contractFileName ;?>" download>
                    <i style="width: 100%;height: 27px;" class="fa fa-fw fa-download"></i>
                  </a></td>
                  <td><a href="<?php echo base_url();?>customer/contract/edit?id=<?php echo $contract->contract_id; ?>"><button class="btn-xs">Edit</button></a></td>
                 
                  <?php endforeach; ?>
                  <?php  } else {?>
                  <div class="alert alert-warning">
                      <h3>You have no contracts yet.</h3>
                  </div>
                  <?php } ?>
                </tr>

                </tbody>
                <tfoot>
                <tr>
                  <th>SL No</th>
                  <th>Contract Customer Name</th>
                  <th>Contract Start</th>
                  <th>Contract End</th>
                  <th>Contract Renewal Date</th>
                  <th>Contract Value</th>
                  <th>Contract File</th>
                  <th>Actions</th>
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

