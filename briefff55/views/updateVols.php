<?php   

		$data = new VolsController();
		$vols = $data->getOneVol();

    if(isset($_POST['update'])){

		$update = new VolsController();
		$update->updateVol();
	}

?>

     <div class="container">
	<div class="row my-4">
		<div class="col-md-8 mx-auto">
			<div class="card">
				<div class="card-header">update vol </div>
				<div class="card-body bg-gray">
					<a href="home" class="btn btn-sm btn-secondary mr-2 mb-2">
						<i class="fas fa-home"></i>
					</a>
					<?php foreach($vols as $vol):?>
					<form  method="post">
						<div class="form-group">
							<label for="idv">idv*</label>
							<input type="text" name="idv" class="form-control" placeholder="idv"
							value="<?php echo $vol['idv'];?>"
							>
						</div>
						<div class="form-group">
							<label for="depart">depart*</label>
							<input type="text" name="depart" class="form-control" placeholder="depart"
							value="<?php echo $vol['depart'];?>"
							>
						</div>
						<div class="form-group">
							<label for="destination">destination*</label>
							<input type="text" name="destination" class="form-control" placeholder="destination"
							value="<?php echo $vol['destination'];?>"
							>
						</div>
                        <div class="form-group">
							<label for="prix">prix*</label>
							<input type="text" name="prix" class="form-control" placeholder="prix"
							value="<?php echo $vol['prix'];?>"
							>
						</div>
						<div class="form-group">
							<label for="nbplace">nbplace*</label>
							<input type="text" name="nbplace" class="form-control" placeholder="nbplace"
							value="<?php echo $vol['nbplace'];?>"
							>
						</div>
                        <div class="form-group">
							<label for="datedepart">datedepart*</label>
							<input type="text" name="datedepart" class="form-control" placeholder="datedepart"
							value="<?php echo $vol['datedepart'];?>"
							>
						</div>
					
					
						<div class="form-group">
							<button type="submit" class="btn btn-primary" name="update">update</button>
						</div>
					</form>
						<?php endforeach;?>
				</div>
			</div>
		</div>
	</div>
</div>