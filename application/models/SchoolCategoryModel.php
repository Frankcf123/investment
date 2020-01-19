<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class SchoolCategoryModel extends CI_Model{

    function __construct() {
        // Call the Model constructor
        parent::__construct();

    }

    public function getSchoolCategorys(){
        $sql="SELECT * FROM  school_category";
//        return $this->getResultArrayObject($sql,"SchoolCategoryObject");
        return $this->getResultArray($sql);
    }


}
