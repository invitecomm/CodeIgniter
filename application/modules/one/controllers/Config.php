<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/* vim: set expandtab tabstop=4 shiftwidth=4 encoding=utf-8: */

/**
 * ----------------------------------------------------------------------
 * Third-Party SubModule for Codeigniter w/ HMVC
 * ----------------------------------------------------------------------
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2014 - 2017, British Columbia Institute of Technology
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 * ----------------------------------------------------------------------
 */

/**
 * CodeIgniter Controller Class - The Controller serves as an intermediary 
 * between the Model, the View, and any other resources needed to process 
 * the HTTP request and generate a web page.
 *
 * @version 1.0
 * @author Brian LaVallee <brian.lavallee@invite-comm.jp>
 */
class Config extends CI_Controller {

    /**
     * CodeIgniter Application Controller Constructor - Constructors are 
     * useful if you need to set some default values, or run a default 
     * process when your class is instantiated. Constructors can’t return
     * a value, but they can do some default work.
     *
     */
    function __construct()
    {
        parent::__construct();
        		
        // Model
		//$this->load->model('example_model', 'example');
		//$this->load->helper('language');
		//$this->load->add_package_path(APPPATH.'my_app', FALSE);
		//$this->load->add_package_path(APPPATH.'aaaaaa', FALSE);
		$this->config->load();
		$this->load->library('unit_test');

		$this->load->helpers(array('test_alpha','test_bravo'));
		//$this->load->helper('test_bravo');
		$this->load->helper('test_charlie');
		$this->load->helper('subdir/test_echo');
		$this->load->helper('subdir/test_delta');
		$this->lang->load('date');


	}

	/**
	 * Index Page for this controller.
	 *
     * @access  public
     * @return  string CodeIgniter output to CI_Controller
     */
	public function index()
	{


		$this->config->load('test_one');
		$this->config->load('test_two');
		$this->config->load('test_three');
		//$this->config->load('test_xxx',FALSE,TRUE);

		//echo $this->config->item('alpha') . "<br />";
		//echo ENVIRONMENT;
		
		
		echo '<h3>Config File Test ('. ucfirst(ENVIRONMENT) . ')</h3><br />';
		//$this->lang->line('date_year');
		//function_exists
		//echo $this->config->item('charlie');

		$this->unit->run(
			$this->config->item('alpha'), 
			'application', 
			'Environment', 
			'No Environment'
		);

		$this->unit->run(
			$this->config->item('environment'), 
			ENVIRONMENT, 
			'Environment', 
			'Standard Current Environment'
		);

		$this->unit->run(
			$this->config->item('charlie'), 
			'mod::application',
			'Environment', 
			'Module No Environment'
		);

		$this->unit->run(
			$this->config->item('echo'), 
			'mod::' . ENVIRONMENT,
			'Environment', 
			'Module Current Environment'
		);

	if (ENVIRONMENT == 'development') {
		$this->unit->run(
			$this->config->item('bravo'), 
			'development', 
			'Environment', 
			'Standard Development Environment'
		);

		$this->unit->run(
			$this->config->item('echo'), 
			'mod::development', 
			'Environment', 
			'Module Development Environment'
		);


	} elseif (ENVIRONMENT == 'testing') {

		$this->unit->run(
			$this->config->item('bravo'), 
			'testing', 
			'Environment', 
			'Standard Testing Environment'
		);	

		$this->unit->run(
			$this->config->item('echo'), 
			'mod::testing', 
			'Environment', 
			'Module Testing Environment'
		);	
		
	} elseif (ENVIRONMENT == 'production') {
		
		$this->unit->run(
			$this->config->item('bravo'), 
			'production', 
			'Environment', 
			'Standard Production Environment'
		);
		
		$this->unit->run(
			$this->config->item('echo'), 
			'mod::production', 
			'Environment', 
			'Module Production Environment'
		);
				
	}					
		//echo $this->lang->line('lang_linedd_not_set');



//$this->unit->run(charlie_one(), 'application', 'C1');
		//echo CI::$APP->router->fetch_module();
		//print_r(Modules::$locations);
		echo $this->unit->report();
		//$this->lang->load('qwertyuio');

	}
}
