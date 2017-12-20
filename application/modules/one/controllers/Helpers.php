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
class Helpers extends CI_Controller {

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
		$this->load->helper('url');
		$this->load->library('unit_test');

		$this->load->helpers(array('test_alpha','test_bravo'));
		//$this->load->helper('test_bravo');
		$this->load->helper('test_charlie');
		$this->load->helper('subdir/test_echo');
		$this->load->helper('subdir/test_delta');

	}

	/**
	 * Index Page for this controller.
	 *
     * @access  public
     * @return  string CodeIgniter output to CI_Controller
     */
	public function index()
	{

		echo '<h3>Default Test</h3><br />';
		
		//function_exists

		$this->unit->run(
			alpha_one(), 
			'system', 
			'Standard', 
			'Standard System Helper'
		);

		if (function_exists('alpha_zulu')) {
			$this->unit->run(
				alpha_zulu(), 
				'application', 
				'Extend', 
				'Extended Function in the Application'
			);
		} else {
			$this->unit->run(
				TRUE, 
				FALSE, 
				'Extend', 
				'Standard Extension of Helper'
			);
		}

		$this->unit->run(
			alpha_two(), 
			'application', 
			'Override', 
			'Standard Override of System Helper'
		);
		
		$this->unit->run(
			bravo_one(), 
			'application', 
			'Replace',
			'Replace the Standard System Helper'
		);

		if (function_exists('bravo_zulu')) {
			$this->unit->run(
				bravo_zulu(), 
				'extend', 
				'Extend', 
				'Extended Function in the Application'
			);
		} else {
			$this->unit->run(
				TRUE, 
				FALSE, 
				'Extend', 
				'Standard Extension of Helper'
			);
		}

		$this->unit->run(
			bravo_two(), 
			'override', 
			'Override', 
			'Standard Override of System Helper'
		);

		if (function_exists('charlie_zulu')) {
			$this->unit->run(
				charlie_zulu(), 
				'module_extend', 
				'Module Extend', 
				'Extended Function in the Module'
			);
		} else {
			$this->unit->run(
				TRUE, 
				FALSE, 
				'Module Extend', 
				'Module Extension of Helper'
			);
		}

		$this->unit->run(
			charlie_two(), 
			'module_override', 
			'Module Override', 
			'Standard Override of System Helper & Application Helper'
		);

		$this->unit->run(
			charlie_one(), 
			'module', 
			'Module Replace', 
			'Replace the Standard System Helper & Application Replacement of System Helper'
		);

		$this->unit->run(
			delta_one(), 
			'subdir', 
			'Subdirectory Helper', 
			'Standard Override of System Helper'
		);

		$this->unit->run(
			echo_zulu(), 
			'subdir_extend', 
			'Extend Subdirectory Helper', 
			'Standard Override of System Helper'
		);

		$this->unit->run(
			echo_two(), 
			'subdir_override', 
			'Override Subdirectory Helper', 
			'Standard Override of System Helper'
		);
		
		//print_r(asset('/this/that/foo.js'));
		echo '<pre>';
		print_r(asset('/.//dir/test.txt'));

		//echo asset('this/that/foo.js');


//$this->unit->run(charlie_one(), 'application', 'C1');
		//echo CI::$APP->router->fetch_module();
		//print_r(Modules::$locations);
		echo $this->unit->report();
	}
}
