<?php 

		$data = new ReservationsController();
		$reservations = $data->getAllReservations();

if(isset($_POST['add'])){
		$newVol = new VolsController();
		$newVol->addVol();
	}
        
	
?>

	<table class="table table-striped table-dark">
					  <thead>
					    <tr>
					     
					       <th scope="col">reservation id</th>
						   <th scope="col">client </th>
					      
					      <th scope="col">depart</th>
						  <th scope="col">destination</th>
					      <th scope="col">nombre de passagers</th>
					      <th scope="col">date de vol</th>
						  <th scope="col">annuler la reservation</th>
					    </tr>
					  </thead>
					  <tbody>
					    <?php foreach($reservations as $reservation):?>
					    	<tr>
						      <td><?php echo 'GF-R', $reservation['id'];?></td>
						    <td><?php echo $reservation['fullname'];?></td>
						      <td><?php echo $reservation['depart'];?></td>
						      <td><?php echo $reservation['destination'];?></td>
                              <td><?php echo $reservation['numplace'];?></td>
                               <td><?php echo $reservation['dater'];?></td>
						 
						      <td class="d-flex flex-row">
                                 
						      
						      	<form method="post" class="mr-1" action="delete">
						      		<input type="hidden" name="id" value="<?php echo $reservation['id'];?>">
						      		<button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
						      	</form>
						      </td>
						    </tr>
					   	<?php endforeach;?>
					  </tbody>
					</table>

