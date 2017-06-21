<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Assets extends CI_Controller {

    /**
     * CodeIgniter Application Controller Constructor - Constructors are
     * useful if you need to set some default values, or run a default
     * process when your class is instantiated. Constructors can’t return
     * a value, but they can do some default work.
     *
     */
    function __construct()
    {
		$this->load->helper('uri');
    }
    
    function index() {
	//	echo $this->uri->slash_segment(3, 'leading');
    }

}










