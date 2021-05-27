<?php 
 if(isset($_POST['submit'])){
		$newPassenger = new PassengersController();
		$newPassenger->addPassenger();


			$newReservation = new ReservationsController();
		$newReservation->addReservation();
		
	}

			     
?>


<div class="container bg-primary">
	<div class="row mt-4 bg-primary">
		<div class="col-md-10 mx-auto bg-primary">
			<div class="card-body">
				<div class="text-center p-5 rounded bg-primary">
					<h2 class="text-white">
						get ticket !!!!!!
					<a href="" class="btn btn-outline-white text-white">Home</a>
				</div>
			</div>
		</div>
	</div>
</div>
<br><br>
