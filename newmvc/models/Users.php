<?php

//include 'database/DB.php';

class User{
    
    static public function getALL(){

        $stmt = DB::connect()->prepare("SELECT * FROM passangers ");
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close();
        $stmt->null;
    }
     
    static public function update($data){
        $id = $data['id'];
    try{
        $query = 'SELECT * FROM passangers WHERE id = :id';
        $stmt = DB::connect()->prepare($query);
        $stmt->execute(array(":id" => $id));
        $user = $stmt->fetch(PDO::FETCH_OBJ);
        return $user;

    }catch(PDOException $ex){
        echo 'errour' . $ex->getMessage();

    }
    }


    static public function add($data){
       


        $stmt = DB::connect()->prepare('INSERT INTO passangers(passanger_first_name, passanger_last_name, passanger_birthdate,  ways, fly_from,  fly_to, seats)VALUES (:firstname, :lastname, :dates, :onew, :fcountry, :tcountry, :seats)');
        $stmt->bindParam(':passanger_first_name', $data['firstname']);
        $stmt->bindParam(':passanger_last_name',  $data['lastname']);
        $stmt->bindParam(':passanger_birthdate',  $data['dates']);
        $stmt->bindParam(':ways',  $data['onew']);
        $stmt->bindParam(':fly_from', $data['fcountry']);
        $stmt->bindParam(':fly_to', $data['tcountry']);
        $stmt->bindParam(':seats', $data['seats']);

        if($stmt->execute()){
            return 'ok';
        }else{
            return 'error';
        }
        $stmt->close();
        $stmt-> null;
    }


}