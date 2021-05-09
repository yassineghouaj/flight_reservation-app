<?php

include_once 'models/Users.php';


class UsersController{


    public function getALLUsers(){
        $users = User::getALL();
        return $users;
    }

    public function getOneUser(){
        if(isset($_POST['id'])){
            $data = array(
                'id' => $_POST['id']
            );
        }    $user = User::update($data);
             return $user;
    }



    public function addUser(){
        if(isset($_POST['submit'])){
            $data = array(
                'passanger_first_name'=>$_POST['firstname'],
                'passanger_last_name'=>$_POST['lastname'],
                'passanger_birthdate'=>$_POST['dates'],
                'ways'=>$_POST['onew'],
                'fly_from'=>$_POST['fcountry'],
                'fly_to'=>$_POST['tcountry'],
                'seats'=>$_POST['seats']  

            );
            $result = User::add($data);
            if($result === "ok"){
                header('location:'.BASE_URL);

            }else{
                echo $result;
            }
        }
    }
}