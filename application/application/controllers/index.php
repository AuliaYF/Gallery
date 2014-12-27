<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends CI_Controller {

	private $data = array(
		'main_view' => 'index/frontpage'
		);

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('basepage', $this->data);
	}

}

/* End of file index.php */
/* Location: ./application/controllers/index.php */