<?php 
	
	$data = new UsersController();
		$users = $data->getAllUsers();
	
?>

<div>
<table class="table table-striped table-dark" style = "width:80%; margin-left: 150px; background-color: blue">
					  <thead>
					    <tr>
					      <th scope="col">client id</th>
					      <th scope="col">fullname</th>
					      <th scope="col">email</th>
					      <th scope="col">phone</th>
						  <th scope="col">supprimer le compte </th>
					    
					    </tr>
					  </thead>
					  <tbody>
					    <?php foreach($users as $user):?>


					    	<tr>
						     
						      <td><?php echo $user['idc'];?></td>
						     
						      <td><?php echo $user['fullname']; ?></td>
							   <td><?php echo $user['email']; ?></td>
						      <td><?php echo $user['phone'];?></td>
                             
						      
						      <td class="d-flex flex-row">
						      
						      	<form method="post" class="mr-1" action="delete">
						      		<input type="hidden" name="idc" value="<?php echo $user['idc'];?>">
						      		<button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
						      	</form>
						      </td>
						    </tr>
					   	<?php endforeach;?>
					  </tbody>
					</table>
					</div>