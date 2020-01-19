<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class BasicObject extends  CI_Model{

    function __construct() {
        // Call the Model constructor

        parent::__construct();

    }

    public function __setValue($name, $value)
    {
        if ($name === 'last_login')
        {
            $this->last_login = DateTime::createFromFormat('U', $value);
        }
    }

    public function __getValue($name)
    {
        if (isset($this->$name))
        {
            return $this->$name;
        }
    }

}
