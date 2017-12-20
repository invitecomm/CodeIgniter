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
 * CodeIgniter Model Class used to create common HTML elements that 
 * are regularaly used and modular elements with the template style. 
 *
 * @version 1.0
 * @author Brian LaVallee <brian.lavallee@invite-comm.jp>
 */
class Example_model extends CI_Model {

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

	}

	/**
	 * Method to populate the CSS link tags in the page head.
	 *
	 * Designed the be very flexable, allowing grainular control
	 * over the CSS loaded by the page when needed.  Common use
	 * is for the login page, where page level styles are not
	 * used.
	 *
     * @access  public
	 * @param	mixed	string or an array of $plugins
     * @return  string Appends CodeIgniter output with properly formated HTML elements
	 */	
	public function example()
	{
		return uniqid();
	}
}
