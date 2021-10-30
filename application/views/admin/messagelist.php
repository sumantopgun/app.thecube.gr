  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Message List
    <!--     <small>advanced tables</small> -->
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>users/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Message List</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">

          <div class="box">
            <div class="box-footer">
                <a href="<?php echo base_url();?>users/message"><button type="submit" class="btn btn-info pull-right">Create Message</button></a>
              </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <center><b><?php echo $this->session->flashdata('msg'); ?></b></center>
                <thead>
                <tr>
                  <th>SL No</th>
                  <th>Message Name</th>
                  <!-- <th>Message Text</th> -->
                </tr>
                </thead>
                <tbody>
                  <?php $count = 1; ?>
                  <?php if(count($messages) >0){ ?>
                  <?php foreach ($messages as $message):?>
                <tr>
                  <td><?php echo $count++; ?></td>
                  <td><?php echo $message->messageName; ?></td>
                  <!-- <td><?php echo $message->messageText; ?></td> -->
                  <td>

                     <a href="<?php echo base_url();?>users/messageview?id=<?php echo $message->messageID; ?>"><button class="btn-xs">View</button></a>
                     <a href="<?php echo base_url();?>users/messageedit?id=<?php echo $message->messageID; ?>"><button class="btn-xs">Edit</button></a>
                     <a href="javascript:void(0);" onclick="delete_msg(<?php echo $message->messageID;?>);"><button type="button" class="btn btn-primary btn-xs">Delete</button></a>              
        
                  </td>
                  <?php endforeach; ?>
                  <?php  } else {?>
                  <div class="alert alert-warning">
                      <h3>You have no messages yet.</h3>
                  </div>
                  <?php } ?>
                </tr>

                </tbody>
                <tfoot>
                <tr>
                  <th>SL No</th>
                  <th>Message Name</th>
                 <!--  <th>Message Text</th> -->
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
 <script type="text/javascript">
    var url="<?php echo base_url();?>";
    function delete_msg(messageID){
       var r=confirm("Are you sure you want to delete")
        if (r==true)
          window.location = url+"users/messagedelete?messageID=<?php echo $message->messageID; ?>";
        else
          return false;
        } 
</script>
