<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Customer extends CI_Controller {

	 public function __construct()
       {
      
			parent::__construct();
			
		
       }
	public function index()
	{	
		
		$this->load->view('frontend/main'); 
		 
	}

	
	public function check_user_availability(){
		$username  =  $this->input->post('username');

		$this->load->model('frontend/customer_model','customerModel');
		 $result = $this->customerModel->check_user_availability($username);
			 if($result)
			 {
			 	echo "1";
			 }else{
			 	echo "0";
			 }
		
	}
	public function register()
	{		
		$url_value = $this->input->get('ty');
		echo $url_value;
		$viewdata['one_column_layout'] = true;
		$data['main'] = $this->load->view('frontend/templates/taxi-reg',$viewdata,true);
		$this->load->view('frontend/main', $data);
	}

	public function login()
	{
		
		
		
	}

	
	 function logout()
	 {

	 	$this->session->all_userdata();
	 	$this->session->sess_destroy();
		redirect('frontend/indexController/index');


	 }
	
}


/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */