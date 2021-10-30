  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Meeting Room List
    <!--     <small>advanced tables</small> -->
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>users/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Meeting Room List</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">

          <div class="box">
        <!--     <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div> -->
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <center><b><?php echo $this->session->flashdata('msg'); ?></b></center>
                <thead>
                <tr>
                  <th>SL No</th>
                  <th>Creator</th>
                  <th>Room Name</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php $count = 1; ?>
                  <?php if(count($roomlist) >0){ ?>
                  <?php foreach ($roomlist as $room):?>
                <tr>
                  <td><?php echo $count++; ?></td>
                  <td><?php echo $room->creatoruname; ?></td>
                  <td><?php echo $room->roomTitle; ?></td>
                  <td>
                    <a href="<?php echo base_url();?>users/roombook?id=<?php echo $room->roomId; ?>"><button class="btn-xs btn-success">Book</button></a>

                    <a class="<?php echo $show.'show'; ?>" href="<?php echo base_url();?>users/roomedit?id=<?php echo $room->roomId; ?>"><button class="btn-xs btn-info">Edit</button></a>
                    <!-- <a class="<?php echo $show.'show'; ?>" href="<?php echo base_url();?>users/roomdelete?id=<?php echo $room->roomId; ?>"><button class="btn-xs btn-danger">Delete</button></a> -->
                    <a class="<?php echo $show.'show'; ?>" href="javascript:void(0);" onclick="delete_room(<?php echo $room->roomId;?>);"><button type="button" class="btn-xs btn-danger">Delete</button></a>  
                  </td>
                  
                  <?php endforeach; ?>
                  <?php  } else {?>
                  <div class="alert alert-warning">
                      <h3>You have no booking room yet.</h3>
                  </div>
                  <?php } ?>
                </tr>

                </tbody>
                <tfoot>
                <tr>
                  <th>SL No</th>
                  <th>Creator</th>
                  <th>Room Name</th>
                  <th>Action</th>
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
    a.usershow {
    display: none;
    }
    a.guestshow {
    display: none;
    }
  </style>

  <script type="text/javascript">
    var url="<?php echo base_url();?>";
    function delete_room(roomId){
       var r=confirm("Are you sure you want to delete")
        if (r==true)
          window.location = url+"users/roomdelete?roomId=<?php echo $room->roomId; ?>&sval=<?php echo $room->status; ?>";
        else
          return false;
        } 
  </script>
