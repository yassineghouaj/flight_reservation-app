<?php 

//include 'controllers/UsersController.php';
    $data = new UsersController();
    $user = $data->getALLUsers();
   

?>
<body style = "background-image : url('fly2.jpg') ">

<div class = "container" style = "margin-top:100px">
    <div class = "row">
      <div class = "col-md-8-auto">
       <div class = "card">
        <div class = "card-body bg-light">
        <a href ="<?php echo BASE_URL;?>add">
           <i class="btn btn-primary mr-2px mb-2">add</i>
        </a>
        <table class="table table-dark">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">passanger_first_name</th>
            <th scope="col">passanger_last_name</th>
            <th scope="col">date</th>
            <th scope="col">ways</th>
            <th scope="col">fly_from</th>
            <th scope="col">fly_to</th>
            <th scope="col">seats</th>
          </tr>
        </thead>
        <tbody>
            <?php foreach ($user as $users):?>
               <tr>
                 <td><?php echo $users['user_id'];?></td>
                 <td><?php echo $users['passanger_first_name'];?></td>
                 <td><?php echo $users['passanger_last_name'];?></td>
                 <td><?php echo $users['passanger_birthdate'];?></td>
                 <td><?php echo $users['ways'];?></td>
                 <td><?php echo $users['fly_from'];?></td>
                 <td><?php echo $users['fly_to'];?></td>
                 <td><?php echo $users['seats'];?></td>
                 <td class = "d-flex flex-row">
                    <form method = "post" class = "mr-1" action="update">
                        <input type="hidden" name="id" value="<?php echo $users['id'];?>">
                        <button class = "btn btn-sm btn-warning"><i class = "fa fa-edit"></i>update</button>
                    </form>
                    <br>
                    <form method = "post" class = "mr-1" action="delete">
                        <input type="hidden" name="id" value="<?php echo $users['id'];?>">
                        <button class = "btn btn-sm btn-danger"><i class = "fa fa-trash"></i>delete</button>
                    </form>
                 </td>
              </tr>
              <?php endforeach;?>
        </tbody>
    </table>
    </div>
   </div>
  </div>
  </div>
  