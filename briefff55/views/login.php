<?php 
	if(isset($_POST['submit'])){
		$loginUser = new UsersController();
		$loginUser->auth();
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Dreams FLY</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css">
<link rel="stylesheet" href="style/style.css">	
</head>
<body >
<p style = "text-align : center; color: blue; font-size: 50px; font-weight: bold">Welcom to Dreams FLY</P>
<h3 style = "text-align : center; color: blue; font-size: 20px; font-weight: bold">“Jobs fill your pockets, adventures fill your soul.”</h3>
<div class="pos">
<div class="login-box" style="background-color: blue">
  <h2>Login</h2>
  <?php include('./views/includes/alerts.php');?>
  <form method="post">
    <div class="user-box">
      <input type="text" name="email" required="">
      <label>email</label>
    </div>
    <div class="user-box">
      <input type="password" name="psd" required="">
      <label>Password</label>
    </div>
		<div class="sho">
				Customer <input type='radio' name='user_type' value='Customer' checked/> 
        Administrator <input type='radio' name='user_type' value='Administrator'/>

		</div>
   <div class="cen">
     <button name="submit" class="btn btn-outline-light">Connexion</button>
	 	<a style = "color: white" href="register" class="btn btn-link">Inscription</a>
   </div>
  </form>
  
				
				
</div>
</div>