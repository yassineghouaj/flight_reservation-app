<?php 

    if(isset($_POST['submit'])){
    $newuser = new UsersController();
    $newuser->addUser();
    echo 'hola';
    }
?>
<body style = "background-image : url('fly2.jpg') ">
<div class = "container">
  <div class = "row my-4">
    <div class="col-md-10 mx-auto">
      <div class= 'card'>
        <div class = "card-body bg-grey">
           <a href = "<?php echo BASE_URL;?>" class="btn btn-sm btn-secondary mr-2 mb-2">
            <i class = "fas fa-home">back</i>
           </a>
           <form method = "POST">
             <div class = "form-group">
                <label for="firstname">first name</label>
                <input type ="text" name = "firstname" class = "form-control" placeholder= "firstname">
             </div>
             <div class = "form-group">
                <label for="lastname">last name</label>
                <input type ="text" name = "lastname" class = "form-control" placeholder= "lastname">
             </div>
             <div class = "form-group">
                <label for="date">date</label>
                <input type ="date" name = "dates" class = "form-control" placeholder= "date">
             </div>
             <div class = "from-group">
             <label for="way">way</label>
             <select id = 'onew' name = 'onew' class = "form-control w-25">
                <option>select Way</option>
                <option>one Way</option>
                <option>round trip</option>
            </select>
            </div>
            <br>
            <div class = "form-group">
            <label for="flyfrom">fly from</label>
            <select id = 'fcountry' name = 'fcountry' class = "form-control w-25">
               <option>flying from</option>
               <option>Morocco</option>
               <option>Brazil</option>
               <option>Usa</option>
               <option>France</option>
            </div> 
             </select>
             <br>
            <div class = "form-group">
            <label for="flyto">fly to</label>
            <select id = "tcountry" name = 'tcountry' class = "form-control w-25">
               <option>flying to</option>
               <option>Morocco</option>
               <option>Brazil</option>
               <option>Usa</option>
               <option>France</option>
            </select>
            </div>
            
           <div class=" form-group">
           <label for="seats">seats</label>
            <select id = 'seats' name = 'seats' class = "form-control w-25 ">   
                 <option>1 seat</option>
                 <option>2 seat</option>
                 <option>3 seat</option>
             </select>
         </div>
         <div class = "form-row justify-content-center">
              <button type = "submit" class = "btn btn-secondary ">add passanger</button>
            </div>
        </form>
        </div>
     </div>
   </div>
  </div>
</div>