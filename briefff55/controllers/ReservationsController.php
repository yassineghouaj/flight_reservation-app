<?php 

class ReservationsController{


public function getAllReservations(){
		$reservations = Reservation::getAll();
		return $reservations;
	}


	
	public function addReservation(){
		if(isset($_POST["submit"])){
           
            $np=$_POST["np"];
            $data = array(
                "idc" =>  $_SESSION["idc"] ,
				"idv" => $_POST["idp"],
				"numplace" => $_POST["np"],
				"dater" => $_POST["dater"],
			
				
			
			);
			$result = Reservation::add($data);
			
if(isset($_POST["idvr"])){
           
            $np=$_POST["np"];
            $data = array(
                "idc" =>  $_SESSION["idc"] ,
				"idv" => $_POST["idvr"],
				"numplace" => $_POST["np"],
				"dater" => $_POST["dater"],
			
				
			
			);
			$result = Reservation::add($data);
			
		}



		}
	}


	public function getUserReservations(){
		$data = array(
				'idc' => $_SESSION['idc']
			);
		$reservation = Reservation::getByUser($data);
		return $reservation;
	}
	public function deleteReservation(){
		if(isset($_POST['id'])){
			$data['id'] = $_POST['id'];
			$result = Reservation::delete($data);
			if($result === 'ok'){
				Session::set('success','Reservation Supprimé');
				Redirect::to('reservations');
			}else{
				echo $result;
			}
		}
	}


}



?>