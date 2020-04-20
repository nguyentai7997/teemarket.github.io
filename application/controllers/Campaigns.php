<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Campaigns extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('campaigns_view');
	}

}

/* End of file test.php */
/* Location: ./application/controllers/test.php */
