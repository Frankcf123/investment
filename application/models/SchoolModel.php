<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class SchoolModel extends CI_Model{

    function __construct() {
        // Call the Model constructor
        parent::__construct();

    }

    public function getSchoolsNameByCategory($id){
        $sql="SELECT name FROM  school where school_category=".$id;
        return $this->getResultArray($sql);
    }
}
