<?php
include "BasicObject.php";
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class SchoolCategoryObject extends BasicObject{
    function __construct() {
        // Call the Model constructor
        parent::__construct();

    }
    public $id,$name,$short_description, $long_description;
    //option variables
    public $school_name;
    public function getSchoolList(){
        $sql="SELECT * FROM  school WHERE school_category = 1";
        return $this->getResultArrayObject($sql,"SchoolCategoryObject",true);

    }


}
