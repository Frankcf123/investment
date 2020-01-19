<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends MY_CONTROLLER {

	public function __construct()
	{
		parent::__construct();

	}

	public function index()
	{
		$this->loadViewWithNav('search.phtml');

	}




}
