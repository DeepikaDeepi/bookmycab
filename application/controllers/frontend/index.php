<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class index extends CI_Controller {

	 public function __construct()
	 {
			parent::__construct();
			   
	 }

	public function index()
	{  
	//	$viewdata['content_for_page'] = $result;
	//	$viewdata['two_column_rightbar'] = true;
		$viewdata['one_column_layout'] = true;
		$data['main'] = $this->load->view('frontend/templates/home',$viewdata,true);
		$this->load->view('frontend/main', $data);
	}	
}
