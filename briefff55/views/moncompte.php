<?php 
	
		$data = new UsersController();
		$users = $data-> getOneUser();


	if(isset($_POST['submit'])){

		$update = new UsersController();
		$update->updateUser();
	}

		
	
?>
<div class="poss">
<div class="container">
	<div class="row my-4">
		<div class="col-md-8 mx-auto">
			<div class="card">
				<div class="card-header">CLIENT ACCOUNT</div>
				<div class="card-body bg-dark">
					<a href="home" class="btn btn-sm btn-secondary mr-2 mb-2">
						<i class="fas fa-home"></i>
					</a>
					 <?php foreach($users as $user):?>
					<form  method="post">
						<div class="form-group">
							<label for="fullname">fullname*</label>
							<input type="text" name="fullname" class="form-control" placeholder="fullname"
							value="<?php echo $user['fullname'];?>"
							>
						</div>
						<div class="form-group">
							<label for="phone">phone*</label>
							<input type="text" name="phone" class="form-control" placeholder="phone"
							value="<?php echo $user['phone'];?>"
							>
						</div>
						<div class="form-group">
							<label for="email">email*</label>
							<input type="text" name="email" class="form-control" placeholder="email"
							value="<?php echo $user['email'];?>"
							>
						</div>
						<div class="form-group">
							<label for="psd">password*</label>
							<input type="password" name="psd" class="form-control" placeholder="psd"
							value="<?php echo $user['psd'];?>"
							>
						</div>
						
					
					
						<div class="divbo">
							<button type="submit" class="btn btn-primary" name="submit">Valider</button>
						</div>
					</form>
						<?php endforeach;?>
				</div>
			</div>
		</div>
	</div>
</div>
</div>