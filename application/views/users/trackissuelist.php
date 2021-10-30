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
                  <th>Message</th>
                </tr>
                </thead>
                <tbody>
                  <?php $count = 1; ?>
                  <?php if(count($tracks) >0){ ?>
                  <?php foreach ($tracks as $track):?>
                <tr>
                  <td><?php echo $count++; ?></td>
                  <td><?php echo $track->subject; ?></td>
                  <td><button class="btn-xs"><?php echo $track->status; ?></button></td> 
                    <td>                     
                     <a href="<?php echo base_url();?>users/issueusermsg?issueid=<?php echo $track->issueID; ?>"><i class="fa fa-fw fa-commenting"></i></a>      
        
                  </td> 
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