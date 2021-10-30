  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Contract Create

      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>users/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Contract Create</li>
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
              <h3 class="box-title">Contract Details</h3>
            </div><br>
            <center><?php echo $this->session->flashdata('msg'); ?></center>
            
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="<?php echo base_url(); ?>customer/contracts/submit" method="post" enctype="multipart/form-data">
              <div class="box-body">
                <input type="hidden" class="form-control" name="contractCreatedBy" value="<?php echo $this->session->userdata('username'); ?>">

                <div class="form-group">
                  <label for="contractFileName" class="col-sm-2 control-label">Contract File</label>

                  <div class="col-sm-8">
                    <input type="file" class="form-control" id="contractFileName" name="contractFileName" placeholder="Contract File Name" required="">
                    <span style="color:red;"><?php echo form_error('contractFileName'); ?></span>
                    <span style="color:red;"><?php echo $this->session->flashdata('contractFileMsg'); ?></span>
                  </div>                  
                </div>

                <div class="form-group">
                  <label for="contractCustomer" class="col-sm-2 control-label">Contract Customer</label>

                  <div class="col-sm-8">
                    <select name="contractCustomer" class="form-control select2" style="width: 100%;">
                      <?php foreach ($customers as $customer):?>
                        <option value="<?php echo $customer->user_id; ?>"><?php echo $customer->name; ?> <?php echo $customer->surname; ?> (<?php echo $customer->email; ?>)</option>
                      <?php endforeach; ?>
                    </select>
                    <span style="color:red;"><?php echo form_error('contractCustomer'); ?></span>
                  </div>
                </div>

                <div class="form-group">
                  <label for="contractStart" class="col-sm-2 control-label">Contract Start</label>

                  <div class="col-sm-8">
                    <input type="date" class="form-control" id="contractStart" name="contractStart" placeholder="Contract Start" required="">
                    <span style="color:red;"><?php echo form_error('contractStart'); ?></span>
                  </div>                  
                </div>

                <div class="form-group">
                  <label for="contractEnd" class="col-sm-2 control-label">Contract End</label>

                  <div class="col-sm-8">
                    <input type="date" class="form-control" id="contractEnd" name="contractEnd" placeholder="Contract End" required="">
                    <span style="color:red;"><?php echo form_error('contractEnd'); ?></span>
                  </div>
                </div>

                <div class="form-group">
                  <label for="contractRenewalDate" class="col-sm-2 control-label">Contract Renewal Date</label>

                  <div class="col-sm-8">
                    <input type="date" class="form-control" id="contractRenewalDate" name="contractRenewalDate" placeholder="Contract Renewal Date" required="">
                    <span style="color:red;"><?php echo form_error('contractRenewalDate'); ?></span>
                  </div>
                </div>

                <div class="form-group">
                  <label for="contractValue" class="col-sm-2 control-label">Contract Value</label>

                  <div class="col-sm-8">
                    <input type="number" class="form-control" id="contractValue" name="contractValue" placeholder="Contract Value" required="">
                    <span style="color:red;"><?php echo form_error('contractValue'); ?></span>
                  </div>                  
                </div>

                <div class="form-group">
                  <label for="send-welcom" class="col-sm-2 control-label">Reminder On</label>

                  <div class="col-sm-8">
                    <input type="checkbox" id="ReminderOn" name="is_reminder" value="1">                    
                  </div>                  
                </div>

              </div>
              <!-- /.box-body -->
              <center>
              <div class="box-footer">
                <button type="submit" class="btn btn-info">Create</button>
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
