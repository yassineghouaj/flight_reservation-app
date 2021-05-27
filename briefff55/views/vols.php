<?php 

		$data = new VolsController();
		$vols = $data->getAllVols();

if(isset($_POST['add'])){
		$newVol = new VolsController();
		$newVol->addVol();
	}
    
	
?>
	<table class="table table-striped table-dark" style = "width:80%; margin-left: 150px; background-color: blue">
					  <thead>
					    <tr>
					     
					      <th scope="col">idv</th>
					      <th scope="col">depart</th>
					      <th scope="col">destination</th>
					      <th scope="col">prix</th>
					      <th scope="col">nbplace</th>
					      <th scope="col">datedepart</th>
                          <th scope="col">update/cancel</th>
					    </tr>
					  </thead>
					  <tbody>
					    <?php foreach($vols as $vol):?>
					    	<tr>
						     
						      <td><?php echo $vol['idv'];?></td>
						      <td><?php echo $vol['depart'];?></td>
						      <td><?php echo $vol['destination'];?></td>
						      <td><?php echo $vol['prix'];?></td>
                              <td><?php echo $vol['nbplace'];?></td>
                              <td><?php echo $vol['datedepart'];?></td>
						 
						      <td class="d-flex flex-row">
                                  	<form method="post" class="mr-1" action="updateVols" >
						      		<input type="hidden" name="idv" value="<?php echo $vol['idv'];?>">
						      		<button class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></button>
						      	</form>
						      
						      	<form method="post" class="mr-1" action="delete">
						      		<input type="hidden" name="idv" value="<?php echo $vol['idv'];?>">
						      		<button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
						      	</form>
						      </td>
						    </tr>
					   	<?php endforeach;?>
					  </tbody>
					</table>
					<div style ="display: flex; justify-content: center; align-items: center">
                     <button onclick="openForm()" class="btn btn-primary" style = "background-color: blue"  >add flight</button>
				   </div>



            <div class="fp" id="myForm" >

        <div class="container">
		
	<div class="row my-4">
		<div class="col-md-8 mx-auto" style ="background-color: blue">
			<div class="card" style="background-color: blue">
				<div class="card-header">update vol  </div>
				<span class="btn cancel" onclick="closeForm()">X</span>
				<div class="card-body bg-gray">
					<a href="home" class="btn btn-sm btn-secondary mr-2 mb-2">
						<i class="fas fa-home"></i>
					</a>

	<form  method="post">
					
						<div class="form-group">
							<label for="depart">depart*</label>
							<input type="text" name="depart" class="form-control" placeholder="depart"
							value=""
							>
						</div>
						<div class="form-group">
							<label for="destination">destination*</label>
							<input type="text" name="destination" class="form-control" placeholder="destination"
							value=""
							>
						</div>
                        <div class="form-group">
							<label for="prix">prix*</label>
							<input type="text" name="prix" class="form-control" placeholder="prix"
							value=""
							>
						</div>
						<div class="form-group">
							<label for="nbplace">nbplace*</label>
							<input type="text" name="nbplace" class="form-control" placeholder="nbplace"
							value=""
							>
						</div>
                        <div class="form-group">
							<label for="datedepart">datedepart*</label>
							<input type="date" name="datedepart" class="form-control" placeholder="datedepart"
							value=""
							>
						</div>
					
					
						<div class="form-group">
							<button type="submit" class="btn btn-primary" name="add">add</button>
						</div>
					</form>
					</div>
			</div>
		</div>
	</div>
</div>
</div>

<script src="style/main.js"></script>