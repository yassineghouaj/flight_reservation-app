<?php

  session_start();

  include("connection.php");
  include("functions.php");

  $user_data = check_login($con);



  if($_SERVER['REQUEST_METHOD'] == "POST"){
      
     $pfirstname = $_POST['pfirstname'];       
     $plastname = $_POST['plastname'];
     $birthdate = $_POST['birthdate'];
     $ways =  $_POST['onew'];
     $flyfrom = $_POST['fcountry'];
     $flyto = $_POST['tcountry'];
     $seats = $_POST['seats'];



   if(!empty($pfirstname) && !empty($plastname) && !empty($birthdate) && !empty($ways) && !empty($flyfrom) && !empty($flyto) && !empty($seats)){

       $user_id = random_num(10);
       $query = "insert into passangers (user_id,  passanger_first_name,  passanger_last_name,  passanger_birthdate,  ways,  fly_from, fly_to, seats) values('$user_id', '$pfirstname', '$plastname', '$birthdate', '$ways', '$flyfrom', '$flyto', '$seats')";
       mysqli_query($con, $query);

       header("location: dashboard.php");
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

      <img src = "newlogo.svg" style = "width : 200px; margin-top: 30px"  alt="Responsive image">
      <h1 class = 'font-weight-bold text-center text-secondary mt-5'>RESERV NOW<h1>
         <br>
        <form id = "1form"  class = "form-group" method = 'POST'>
           <div class = "form-group d-flex justify-content-around">
             <input class = "form-control w-25" type = "text" name = 'pfirstname' placeholder = "enter your name">
             <input class = "form-control w-25"type = "text"  name = 'plastname' placeholder = "enter your lastname">
             <input  class = "form-control w-25"type = "date"  name = "birthdate" placeholder = "enter your birthdate">
             <br>
            </div>

            <div class = "form-group d-flex justify-content-around">
             <select id = 'onew' name = 'onew' class = "form-control w-25">
                <option>select Way</option>
                <option>one Way</option>
                <option>round trip</option>
            </select>
            <select id = 'fcountry' name = 'fcountry' class = "form-control w-25">
               <option>flying from</option>
               <option>Morocco</option>
               <option>Brazil</option>
               <option>Usa</option>
               <option>France</option>
               

            <select>
            <select id = "tcountry" name = 'tcountry' class = "form-control w-25">
               <option>flying to</option>
               <option>Morocco</option>
               <option>Brazil</option>
               <option>Usa</option>
               <option>France</option>
            <select> 
          </div>

            <br>

       <div class=" form-row justify-content-center">
            <select id = 'seats' name = 'seats' class = "form-control w-25 "> 
                 <option>1 seat</option>
                 <option>2 seat</option>
                 <option>3 seat</option>
             </select>
         </div>
         <br>
         <div class = 'form-row justify-content-center'>
              <input class = "w-25 btn btn-primary btn-block" type = "button" name = "Reserv Now" value = "Reserv Now" onclick = "reserv()">
          </div>
            <br>
            <div class = "form-row justify-content-center">
              <button type = "submit" class = "btn btn-secondary "></button>
            </div>
       </form>

       <br>
       <br>
       <hr>

       <form id = "2form"  class = "form-group">
           <div class = "form-group d-flex justify-content-around">
             <input class = "form-control w-25" type = "text" name = 'firstname' placeholder = "enter your name">
             <input class = "form-control w-25"type = "text"  name = 'lastname' placeholder = "enter your lastname">
             <input  class = "form-control w-25"type = "date"  name = "birthday" placeholder = "enter your birthdate">
             <br>
            </div>

            <div class = "form-group d-flex justify-content-around">
             <select id = 'onew' class = "form-control w-25">
                <option>select Way</option>
                <option>one Way</option>
                <option>round trip</option>
            </select>
            <select id = 'fcountry' class = "form-control w-25">
               <option>flying from</option>
               <option>Morocco</option>
               <option>Brazil</option>
               <option>Usa</option>
               <option>France</option>
               

            <select>
            <select id = "tcountry" class = "form-control w-25">
               <option>flying to</option>
               <option>Morocco</option>
               <option>Brazil</option>
               <option>Usa</option>
               <option>France</option>
            <select> 
          </div>

            <br>

       <div class=" form-row justify-content-center">
            <select id = 'seats' class = "form-control w-25 "> 
                 <option>1 seat</option>
                 <option>2 seat</option>
                 <option>3 seat</option>
             </select>
              <input class = "w-25 btn btn-primary btn-block" type = "button" name = "Reserv Now" value = "Reserv Now" onclick = "reserv()">
       </div>
       </form>
       <br>
       <br>
       <hr>

       <form id = "3form"  class = "form-group">
           <div class = "form-group d-flex justify-content-around">
             <input class = "form-control w-25" type = "text" name = 'firstname' placeholder = "enter your name">
             <input class = "form-control w-25"type = "text"  name = 'lastname' placeholder = "enter your lastname">
             <input  class = "form-control w-25"type = "date"  name = "birthday" placeholder = "enter your birthdate">
             <br>
            </div>

            <div class = "form-group d-flex justify-content-around">
             <select id = 'onew' class = "form-control w-25">
                <option>select Way</option>
                <option>one Way</option>
                <option>round trip</option>
            </select>
            <select id = 'fcountry' class = "form-control w-25">
               <option>flying from</option>
               <option>Morocco</option>
               <option>Brazil</option>
               <option>Usa</option>
               <option>France</option>
               

            <select>
            <select id = "tcountry" class = "form-control w-25">
               <option>flying to</option>
               <option>Morocco</option>
               <option>Brazil</option>
               <option>Usa</option>
               <option>France</option>
            <select> 
          </div>

            <br>

       <div class=" form-row justify-content-center">
            <select id = 'seats' class = "form-control w-25 "> 
                 <option>1 seat</option>
                 <option>2 seat</option>
                 <option>3 seat</option>
             </select>
              <input class = "w-25 btn btn-primary btn-block" type = "button" name = "Reserv Now" value = "Reserv Now" onclick = "reserv()">
       </div>
       </form>

       



       <br><br>
       <a href = 'logout.php'>logout</a>
       <script src = "reserv.js"></script>
       <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  </body>
  
</html>
