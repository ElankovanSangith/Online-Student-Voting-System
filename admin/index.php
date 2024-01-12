<?php
  	session_start();
  	if(isset($_SESSION['admin'])){
    	header('location:home.php');
  	}
?>
<?php include 'includes/header.php'; ?>
<link rel="stylesheet" href="assets/css/login.css">
<body class="hold-transition login-page" style="background-color:#000000"> 
<div class="login-box" style="background-color:#303030 ;color:white ; font-size: 22px; font-family:Times">
<br>
<br>
<div class="login-logo" style="background-color:#303030 ;color:white ; font-size: 22px; font-family:Times">
<img src="assets/img/logo.gif" class="brand_logo" alt="Logo">
		<b> Student Online Voting System</b> 
 	<div class="login-box-body" style="background-color:#303030 ;color:white ; font-size: 22px; font-family:Times" >
	 <p class="login-box-msg" style="color:white ; font-size: 16px; font-family:Times  " >Sign in to start your voting session</p>


    	<form action="login.php" method="POST">
      		<div class="form-group has-feedback">
        		<input type="text" class="form-control" name="username" placeholder="Username" required>
        		<span class="glyphicon glyphicon-user form-control-feedback"></span>
      		</div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" name="password" placeholder="Password" required>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
      		<div class="row">
    			<div class="col-xs-4">
          			<button type="submit" class="btn btn-primary btn-block btn-curve"style="background-color: #68C230 ;color:black ; font-size: 14px; font-family:Times"  name="login"><i class="fa fa-sign-in"></i> Sign In</button>
        		</div>
      		</div>
    	</form>
  	</div>
</div>
  	<?php
  		if(isset($_SESSION['error'])){
  			echo "
			  	<div class='callout callout-danger text-center mt20'>
			  		<p>".$_SESSION['error']."</p> 
		  		</div>
  			";
  			unset($_SESSION['error']);
  		}
  	?>
</div>
	
<?php include 'includes/scripts.php' ?>
</body>
</html>