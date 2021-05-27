<?php 
	

if(isset($_POST['idv'])){
		$exitEmploye = new VolsController();
		$exitEmploye->deleteVol();
	}

else if(isset($_POST['id'])){
		$exitEmploye = new ReservationsController();
		$exitEmploye->deleteReservation();
	}
	else if(isset($_POST['idc'])){
		$exitEmploye = new UsersController();
		$exitEmploye->deleteUser();
	}

?>