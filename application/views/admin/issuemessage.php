<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Issue Message
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>users/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Issue Message</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">  
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-7 connectedSortable">
     

          <!-- Chat box -->
          <div class="box box-success">
            <div class="box-header">
              <i class="fa fa-comments-o"></i>

              <h3 class="box-title">Message</h3>

             <!--  <div class="box-tools pull-right" data-toggle="tooltip" title="Status">
                <div class="btn-group" data-toggle="btn-toggle">
                  <button type="button" class="btn btn-default btn-sm active"><i class="fa fa-square text-green"></i>
                  </button>
                  <button type="button" class="btn btn-default btn-sm"><i class="fa fa-square text-red"></i></button>
                </div>
              </div> -->
            </div>
            <div class="box-body chat" id="chat-box">
              <!-- chat item -->
              <?php if(count($chats) >0){ ?>
                  <?php foreach ($chats as $chat):?>
              <div class="item">
                <img src="<?php echo base_url();?>assets/dist/img/chat.png" alt="user image" class="online">

                <p class="message">
                  <a href="#" class="name">
                    <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> <?php echo $chat->date; ?></small>
                    <?php echo $chat->senderUsername; ?>
                  </a>
                
                </p>
                <div class="attachment">
                  <h4><?php echo $chat->message; ?></h4>
                </div>
                <!-- /.attachment -->
              </div>
              <?php endforeach; ?>
                  <?php  } else {?>
                  <div class="alert alert-warning">
                      <h3>You have no Message yet.</h3>
                  </div>
                  <?php } ?>
              <!-- /.item -->
              
            </div>
            <!-- /.chat -->
            <div class="box-footer">
              <form class="form-horizontal1 <?php echo $issuemsg->status; ?>" action="<?php echo base_url(); ?>users/issuechat" method="post">
                <input type="hidden" class="form-control" name="issueID" value="<?php echo $issuemsg->issueID; ?>">
                <input type="hidden" class="form-control" name="senderUsername" value="<?php echo $issuemsg->assignTo; ?>">
              <div class="input-group">
                 <span class="input-group-addon">
                    <input type="hidden" name="issueBy" value="" />
                    <input type="checkbox" id="issueBy" name="issueBy" value="<?php echo $issuemsg->issueBy; ?>">
                </span> 
                <input class="form-control" id="message" name="message" placeholder="Type message...">

                <div class="input-group-btn">
                  <button type="submit" class="btn btn-success"><i class="fa fa-plus"></i></button>
                </div>
              </div>
            </form>

            </div>
          </div>
          <!-- /.box (chat box) -->

        

     

        </section>
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-5 connectedSortable">

          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Issue Information</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <ul class="products-list product-list-in-box">
                <li class="item">
                 
                  <div class="product-info">
                    <a href="javascript:void(0)" class="product-title">Subject</a>
                    <span class="product-description">
                          <?php echo $getissue->subject; ?>
                        </span>
                  </div>
                </li>
                <!-- /.item -->
                <li class="item">
                 
                  <div class="product-info">
                    <a href="javascript:void(0)" class="product-title">Details</a>
                    <span class="product-description">
                          <?php echo $getissue->detail; ?>
                        </span>
                  </div>
                </li>
                 <li class="item">
                 
                  <div class="product-info">
                    <a href="javascript:void(0)" class="product-title">Date Time</a>
                    <span class="product-description">
                          <?php echo $getissue->date; ?>
                        </span>
                  </div>
                </li>
                 <li class="item">
                 
                  <div class="product-info">
                    <a href="javascript:void(0)" class="product-title">Issue By</a>
                    <span class="product-description">
                          <?php echo $issuemsg->issueBy; ?>
                        </span>
                  </div>
                </li>
                <li class="item">
                 
                  <div class="product-info">
                    <a href="javascript:void(0)" class="product-title">Assign By</a>
                    <span class="product-description">
                          <?php echo $issuemsg->assignBy; ?>
                        </span>
                  </div>
                </li>
            
              </ul>
            </div>
            <!-- /.box-footer -->
          </div>

          

        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  <style type="text/css">
    .Completed {
      display: none;
    }
    .Block {
      display: none;
    }
  </style>