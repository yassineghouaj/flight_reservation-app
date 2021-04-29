<?php
   
   session_start();

   include("connection.php");
   include("functions.php");


   if($_SERVER['REQUEST_METHOD'] == "POST"){
      
 
      $firstname = $_POST['fname'];
      $lastname = $_POST['lname'];
      $password = $_POST['password'];
      $email =  $_POST['email'];
      $phone = $_POST['phone'];

      if(!empty($firstname) && !empty($lastname) && !empty($password) && !empty($email) && !empty($phone)){

         $user_id = random_num(10);
         $query = "insert into users (user_id, firstname, lastname, password, email, phone) values('$user_id', '$firstname', '$lastname', '$password', '$email', '$phone')";
         mysqli_query($con, $query);

           header("location: login.php");
           die;
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
    <div class = "container">
      <div class= 'row'>

          <div class = "col-lg-3"></div>
            <div class = "col-lg-6">
               <div id = "ui">
               <img src = "newlogo.svg" class = "text-center mt-5  img-fluid" alt="Responsive image">
               <h1 class="text-center font-weight-bold text-white mt-5 font-size-100 ">Welcom to DreamFLY</h1>
                  <form class = 'form' method="post" >
                    <div class = "row">
                       <div class = "col-lg-6">
                          <label class = "font-weight-bold text-white">First name</label>
                          <input type = "text" name = "fname" class = "form-control" placeholder = "enter your firstname">
                       </div>
                       
                       <div class = "col-lg-6">
                          <label class = "font-weight-bold text-white">last name</label>
                          <input type = "text" name = "lname" class = "form-control" placeholder = "enter your lastname">
                       </div>
                     </div>


                     <div class = "row">
                       <div class = "col-lg-6">
                          <label class = "font-weight-bold text-white">enter password</label>
                          <input type = "password" name = "password" class = "form-control" placeholder = "enter your password">
                       </div>
                    </div>
                    
                     <label class = "font-weight-bold text-white">E-mail</label>
                     <input type = "email" name = "email" class = "form-control" placeholder = "enter your email">

                       <br>


                     
                     <label class = "font-weight-bold text-white">phone</label>
                     <input type = "tel" name = "phone" class = "form-control" placeholder = "enter your phone number">
                     <br><br>
                     <button type = "submit" class = "btn btn-primary btn-block">go now</button>
                  </form>

        </div>
        <div class = "col-lg-3"></div>
   
  
  </body>
  
</html>