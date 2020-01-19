<?php
include "BasicObject.php";
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class SchoolObject extends BasicObject{
    function __construct() {
        // Call the Model

        parent::__construct();

    }
    public $id,$university_id,$school_category_id, $name;




}
