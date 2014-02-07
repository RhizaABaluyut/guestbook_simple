<?php
	include 'functions.php';
	if(!empty($_POST)){
		$username = $_POST['username'];
		$password = $_POST['pass'];
		$check = loginAuthenticator($username, $password);
		
	}
?>
<html>
<title>Laverdad Guests</title>

<head>
	<link type = "text/css" rel = "stylesheet" href = "css/bootstrap.css" >
  <link type = "text/css" rel = "stylesheet" href = "style.css" >
</head>
<body background = "14.jpg">
      <div class="navbar navbar-fixed-top">
        <div class="navbar-inner primary">
          <div class="container">
            <h1><a href="loginpage.php" class="brand brand-bootbus text-success"><font face = "Georgia" size = "6" color = "cyan">Laverdad Guests</font></a></h1>
            <!-- Below button used for responsive navigation -->
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- Start: Primary navigation -->
            <div class="nav-collapse collapse">        
              <ul class="nav pull-right">
                
                <li><a href="loginpage.php" class="active-link"><font face = "Georgia" size = "2" color = "blue">Sign in</font></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
        
 <center>
  <br>
   <br>
    <br>
     <br>
   <div class="content">
      <div class="container">
       <br>
       <br>
     </br>
        </div>
        <div class="row">
          <div class="span4 offset4 well">
            <h4 class="widget-header"><i class="icon-lock"></i><font face = "cooperplate gothic light" size = "5" color ="blue"> Signin to Laverdad Guests</font></h4>
            <div class="widget-body">
              <br>
              <br>
              <div class="center-align">
                
                <form class="form-horizontal form-signin-signup well" method = 'POST' action = "<?php echo $_SERVER['PHP_SELF'];?>">
                  <br>
                  <br>
                  <input type="text" name="username" placeholder="Username" autofocus class="span3">
                  <br>
                  <br>
                  <input type="password" name="pass" placeholder="Password" class="span3">
                  <br>
                  <br>
                  <div class="remember-me">
                    <div class="pull-left">
                      <label class="checkbox">
                        <br>
                        <br>
                        <input type="checkbox"> Remember me
                      </label>
                    </div>
                    <div class="pull-right">
                      <br>
                      <br>
                      <a href="#">Forgot password?</a>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <br>
                  <br>
                  <input type="submit" value="Signin" class="btn btn-primary btn-large">
                </form>
                <h4><i class="icon-question-sign"></i><font face = "cooperplate gothic light" size = "5"> Don't have an account?</font></h4>
                <br>
                <a href="SignUp.php" class="btn btn-large bottom-space btn-success">Signup</a>
              </div></br>
            </div>
          </div>
        </div>
      </div>
    </div>



	
