<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Registration Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="#"><b>Admin</b>LTE</a>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">Register a new User</p>
    <p class="login-box-msg"><?php echo $this->session->flashdata('msg'); ?></p>

    <form action="<?php echo base_url();?>users/registration" method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="username" placeholder="Username" required="">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
        <?php echo form_error('username'); ?>
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="name" placeholder="Name" required="">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        <?php echo form_error('name'); ?>
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="surname" placeholder="Surname" required="">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        <?php echo form_error('surname'); ?>
      </div>
      <div class="form-group has-feedback">
        <input type="email" class="form-control" name="email" placeholder="Email" required="">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        <?php echo form_error('email'); ?>
      </div>
      <div class="form-group has-feedback">
        <textarea class="form-control" rows="3" name="address" placeholder="Address" required=""></textarea>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        <?php echo form_error('address'); ?>
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="city" placeholder="City" required="">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        <?php echo form_error('city'); ?>
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="state" placeholder="State" required="">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        <?php echo form_error('state'); ?>
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="country" placeholder="Country" required="">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        <?php echo form_error('country'); ?>
      </div>
      <div class="form-group has-feedback">
        <input type="number" class="form-control" name="telno" placeholder="Telephone No" required="">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        <?php echo form_error('telno'); ?>
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="facebook" placeholder="Facebook" required="">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        <?php echo form_error('facebook'); ?>
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="twitter" placeholder="Twitter" required="">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        <?php echo form_error('twitter'); ?>
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="skype" placeholder="Skype" required="">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        <?php echo form_error('skype'); ?>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="password" placeholder="Password" required="">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        <?php echo form_error('password'); ?>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="rpassword" placeholder="Retype password" required="">
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
        <?php echo form_error('rpassword'); ?>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> I agree to the <a href="#">terms</a>
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign up using
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign up using
        Google+</a>
    </div>

    <a href="<?php echo base_url();?>users/login" class="text-center">I already have a membership</a>
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->

<!-- jQuery 3 -->
<script src="<?php echo base_url();?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url();?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?php echo base_url();?>assets/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>
