<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Multi extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{		
		$data['me_env'] = $_SERVER['CI_ENV'];
		$data['me_url'] = $this->config->item('base_url');
		
		$this->config->load('custom');
		
		$data['cu_name'] = $this->config->item('custom_name');
		$data['cu_string'] = $this->config->item('custom_string');
		$data['cu_db'] = $this->config->item('custom_db_path');



		$this->load->view('multi',$data);
		//$this->output->append_output($_SERVER['CI_ENV']);
		//$this->output->append_output($this->config->item('base_url'));
	}
}
