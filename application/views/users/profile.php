
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        User Profile
      </h1>
      <center><h4><?php echo $this->session->flashdata('msg'); ?></h4></center>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>users/dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">User profile</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url().'uploads/profile/'.$profile->pic ;?>" alt="User profile picture">
              <center><button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#chageuserpic">Change</button></center>

              <h3 class="profile-username text-center"><?php echo $this->session->userdata('username'); ?></h3>

              <p class="text-muted text-center">
                <?php
                
                        $membership=$profile->membership_type;
                        $query1=$this->db->where('id', $membership)
                                    ->get('memberships');
                        $type=$query1->row('type');
                        echo "Membership Type : $type"; 
                      ?>
              </p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <a href="https://www.facebook.com/<?php echo $profile->facebook; ?>" target="_blank"><b>Facebook</b> <span class="pull-right"><i class="fa fa-fw fa-facebook-square"></i></span></a>
                </li>
                <li class="list-group-item">
                  <a href="https://twitter.com/<?php echo $profile->twitter; ?>" target="_blank"><b>Twitter</b> <span class="pull-right"><i class="fa fa-fw fa-twitter"></i></span></a>
                </li>
                <li class="list-group-item">
                  <a href="https://web.skype.com/<?php echo $profile->skype; ?>" target="_blank"><b>Skype</b> <span class="pull-right"><i class="fa fa-fw fa-skype"></i></span></a>
                </li>
              </ul>

              <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- About Me Box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">About Me</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <strong><i class="fa fa-book margin-r-5"></i> Short Bio</strong>

              <p class="text-muted">
                <?php echo $profile->bio; ?>
              </p>

              <hr>

              <strong><i class="fa fa-map-marker margin-r-5"></i> Address</strong>

              <p class="text-muted"><?php echo $profile->address; ?></p>

              <hr>

              <strong><i class="fa  fa-phone margin-r-5"></i> Phone No</strong>
              <p class="text-muted"><?php echo $profile->telno; ?></p>

              <hr>

              <strong><i class="fa fa-file-text-o margin-r-5"></i> Registration DateTime</strong>

              <p><?php echo $profile->registration_time; ?></p>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#information" data-toggle="tab">Information</a></li>
              <li><a href="#edit" data-toggle="tab">Update</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="information">
                <!-- Post -->
                <div class="post">
                  <div class="user-block">
                    <img class="img-circle img-bordered-sm" src="<?php echo base_url().'uploads/profile/'.$profile->pic ;?>" alt="user image">
                        <span class="username">
                          <a href="#"><?php echo $profile->name; ?> <?php echo $profile->surname; ?></a>
                          <!-- <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a> -->
                        </span>
                    <!-- <span class="description">Shared publicly - 7:30 PM today</span> -->
                  </div>
                  <!-- /.user-block -->
                  <p>
                    Lorem ipsum represents a long-held tradition for designers,
                    typographers and the like. Some people hate it and argue for
                    its demise, but others ignore the hate as they create awesome
                    tools to help create filler text for everyone from bacon lovers
                    to Charlie Sheen fans.
                  </p>
                  <ul class="list-inline">
                    <li><a href="#" class="link-black text-sm"><i class="fa fa-share margin-r-5"></i> Share</a></li>
                    <li><a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i> Like</a>
                    </li>
                    <li class="pull-right">
                      <a href="#" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i> Comments
                        (5)</a></li>
                  </ul>

                  <input class="form-control input-sm" type="text" placeholder="Type a comment">
                </div>
                <!-- /.post -->

                <!-- Post -->
                <div class="post clearfix">
                  <div class="user-block">
                    <img class="img-circle img-bordered-sm" src="<?php echo base_url();?>assets/dist/img/user7-128x128.jpg" alt="User Image">
                        <span class="username">
                          <a href="#">Sarah Ross</a>
                          <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                        </span>
                    <span class="description">Sent you a message - 3 days ago</span>
                  </div>
                  <!-- /.user-block -->
                  <p>
                    Lorem ipsum represents a long-held tradition for designers,
                    typographers and the like. Some people hate it and argue for
                    its demise, but others ignore the hate as they create awesome
                    tools to help create filler text for everyone from bacon lovers
                    to Charlie Sheen fans.
                  </p>

                  <form class="form-horizontal">
                    <div class="form-group margin-bottom-none">
                      <div class="col-sm-9">
                        <input class="form-control input-sm" placeholder="Response">
                      </div>
                      <div class="col-sm-3">
                        <button type="submit" class="btn btn-danger pull-right btn-block btn-sm">Send</button>
                      </div>
                    </div>
                  </form>
                </div>
                <!-- /.post -->

                <!-- Post -->
                <div class="post">
                  <div class="user-block">
                    <img class="img-circle img-bordered-sm" src="<?php echo base_url();?>assets/dist/img/user6-128x128.jpg" alt="User Image">
                        <span class="username">
                          <a href="#">Adam Jones</a>
                          <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                        </span>
                    <span class="description">Posted 5 photos - 5 days ago</span>
                  </div>
                  <!-- /.user-block -->
                  <div class="row margin-bottom">
                    <div class="col-sm-6">
                      <img class="img-responsive" src="<?php echo base_url();?>assets/dist/img/photo1.png" alt="Photo">
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-6">
                      <div class="row">
                        <div class="col-sm-6">
                          <img class="img-responsive" src="<?php echo base_url();?>assets/dist/img/photo2.png" alt="Photo">
                          <br>
                          <img class="img-responsive" src="<?php echo base_url();?>assets/dist/img/photo3.jpg" alt="Photo">
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-6">
                          <img class="img-responsive" src="<?php echo base_url();?>assets/dist/img/photo4.jpg" alt="Photo">
                          <br>
                          <img class="img-responsive" src="<?php echo base_url();?>assets/dist/img/photo1.png" alt="Photo">
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->
                    </div>
                    <!-- /.col -->
                  </div>
                  <!-- /.row -->

                  <ul class="list-inline">
                    <li><a href="#" class="link-black text-sm"><i class="fa fa-share margin-r-5"></i> Share</a></li>
                    <li><a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i> Like</a>
                    </li>
                    <li class="pull-right">
                      <a href="#" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i> Comments
                        (5)</a></li>
                  </ul>

                  <input class="form-control input-sm" type="text" placeholder="Type a comment">
                </div>
                <!-- /.post -->
              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="edit">
                <form class="form-horizontal" action="<?php echo base_url(); ?>users/updateprofile" method="post">
                  <input type="hidden" class="form-control" id="user_id" name="user_id" value="<?php echo $profile->user_id; ?>">
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Name</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="name" name="name" value="<?php echo $profile->name; ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Surname</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="surname" name="surname" value="<?php echo $profile->surname; ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="email" name="email" value="<?php echo $profile->email; ?>">
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-2 control-label">Bio</label>

                    <div class="col-sm-10">
                      <textarea class="form-control" id="bio" name="bio"><?php echo $profile->bio; ?></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-danger">Update</button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Modal -->
  <div class="modal fade" id="chageuserpic" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Change Picture</h4>
        </div>
        <div class="modal-body">
          <form class="form-horizontal1" action="<?php echo base_url(); ?>users/picupdate" method="post" enctype="multipart/form-data">
            <input type="hidden" class="form-control" name="user_id" value="<?php echo $profile->user_id; ?>">
          <div class="form-group">
                  
                  <input type="file" id="pic" name="pic">

                 <!--  <p class="help-block">Example block-level help text here.</p> -->
                </div>
                <center>
              <div class="box-footer">
                <button type="submit" class="btn btn-info">Change</button>
              </div></center>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>