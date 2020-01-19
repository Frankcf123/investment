<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class UserModel extends CI_Model{

    function __construct() {
        // Call the Model constructor
        parent::__construct();

    }

    public function getUser($username)
    {
        $sql = "SELECT * FROM  user where email='" . $username . "'";
        return $this->getResultRow($sql);
    }


    public function insertUser($user){
       return $this->insertData('user',$user);
    }
}
