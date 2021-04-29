<?php

session_start();

include("connection.php");
include("functions.php");


if($_SERVER['REQUEST_METHOD'] == "POST"){
   

   $email =  $_POST['email'];
   $password = $_POST['password'];

   if(!empty($email) && !empty($password)){

      
      $query = "select * from users where email = '$email' limit 1 ";
      $result = mysqli_query($con, $query);

      if($result){
        if($result && mysqli_num_rows($result) > 0){
            $user_data = mysqli_fetch_assoc($result);
            if($user_data['password'] === $password){

                $_SESSION['user_id'] = $user_data['user_id'];
                header("location: index.php");
                die;
            }
        }
      }
      echo "please enter valid information!!";
     
   }else{

      echo "please enter valid information!!";
   }
}


?>


<html>

  <head>
    <meta charset="utf-8">
    <title>dreams fly</title>
    <link rel='stylesheet' href="res.css">
    <link rel = 'stylesheet' href = 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css'>
    <meta charset="utf-8">
    <meta name="description" content="this is a flight website">
    <meta name="keyword" content="flight, airplane, air, traveling">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
</head>
<body>
    <div id="login">
        <h3 class="text-center font-weight-bold text-white mt-5 font-size-100">FLY NOW</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" method="post">
                            <h3 class="text-center font-weight-bold text-white">Login</h3>
                            <div class="form-group">
                                <label for="username" class="font-weight-bold text-white">E-mail:</label><br>
                                <input type="text" name="email" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="font-weight-bold text-white">Password:</label><br>
                                <input type="text" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="remember-me" class="font-weight-bold text-white"><span>Remember me</span><span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                                <input type="submit" name="submit" class="btn btn-info w-25" value="submit">
                            </div>
                            <div id="register-link" class="font-weight-bold text-white">
                                <a href="signp.php" class=" text-white">Register here</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>