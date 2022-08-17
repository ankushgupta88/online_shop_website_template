<?php include('head.php');?>
<!doctype html>
<head>

  <style>#login_form input {
    width: 100%;
    margin: 10px 0;
}</style>
</head>

<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>Admin</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form action="<?php echo SITE_URL?>submit/login-submit.php" id="login_form" method="post">
	  <div class="row">
        <div class="col-md-12">
          <input type="text" name="email" id="email" class="formtt" placeholder="Email">
        </div>
        <div class="col-md-12">
          <input type="password" name="password" id="password" class="formtt" placeholder="Password">       
        </div>

        <button type="submit" class="loginbtn submit-disable" name="submit">Login</button>
	  <div class="login_form_responce"></div>
	  </div>
      </form>

    
      <!-- /.social-auth-links -->

    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
	<script src="<?php echo SITE_URL;?>js/custom-ajax.js"></script>
</body>
</html>