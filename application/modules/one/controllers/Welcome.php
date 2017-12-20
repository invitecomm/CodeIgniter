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
class Welcome extends CI_Controller {

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
		//$this->lang->load('example','japanese');
		$this->load->helper('url');
	}

	/**
	 * Index Page for this controller.
	 *
     * @access  public
     * @return  string CodeIgniter output to CI_Controller
     */
	public function index()
	{
		//$data['model'] = $this->example->example();
		//$data['lang'] = $this->lang->line('sample');
		//$data['mpath'] = 'application/modules/' . $this->router->fetch_module();

		//$this->load->view('welcome_message', $data);
		echo anchor('/one/config', 'Config') . '<br />';
		echo anchor('/one/helpers', 'Helpers') . '<br />';
		echo anchor('/one/lang', 'Languages') . '<br />';
		
		//$isEnabled = in_array('mod_rewrite', apache_get_modules());
		//echo ($isEnabled) ? 'Enabled' : 'Not enabled';
		//$this->load->helper('url');
		//echo base_url();
		//echo current_url();
		//echo BASEPATH;
	}
}
