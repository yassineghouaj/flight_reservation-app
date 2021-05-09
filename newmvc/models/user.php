<?php

class User{

      static public function login($data){
        $username = $data['username'];
        try{
            $query = 'SELECT * FROM users WHERE username = :username';
        }



      }



}




?>