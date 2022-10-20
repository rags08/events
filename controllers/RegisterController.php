<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegisterController extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->database();
        $this->load->model("reg_model"); 

	}


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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		
		 $this->load->view('home');
	}
	

	public function register_form()
	{
      $this->load->view('register');
	}
	public function login_form()
	{
     
		 $this->load->view('login');
	
		if($this->input->post('login'))
		{
			$e=$this->input->post('username');
			$p=$this->input->post('password');
	
			$que=$this->db->query("select * from tbl_login where username='".$username."' and password='$password'");
			$row = $que->num_rows();
			if($row)
			{
			redirect('RegisterController/dashboard_form');
			}
			else
			{
		$data['error']="<h3 style='color:red'>Invalid login details</h3>";
			}	
		}
		$this->load->view('login',@$data);
		}
		function dashboard_form()
		{
		$this->load->view('dashboard');
		}
	public function datatable_form()
	{$result['data']=$this->reg_model->display_records();
		$result['states'] = $this->reg_model->getCity();
		$result['districts'] = $this->reg_model->getdept();
	
         $this->load->view('datatable',$result);

	  
	  
	}
	 
		public function deletedata($id)
		{
		// $id=$this->input->get('id');
		$response=$this->reg_model->deleterecords($id);
		if($response==true){
			$this->session->set_flashdata('message', 'Data deleted successfully!');
		
			redirect('RegisterController/datatable_form');
		}
		else{
			echo "Error !";
		}
	}
  
	public function savedata()  {
       $this->load->view('register');
	   $config['upload_path']='./uploads/';
	
        //this array is used to get fetch data from the view page.  
        if($this->input->post('btnsubmit')){
         
			$data ['name'] =$this->input->post('name');  
			$data ['photo'] = $this->input->post('photo');
			$data ['email'] = $this->input->post('email');  
			$data ['phone'] = $this->input->post('phone') ;
			$data ['address'] = $this->input->post('address');
			$data['city'] = $this->input->post('city');
			$data ['state'] = $this->input->post('state');
			$response =$this->reg_model->saverecords($data);
			if($response==true){
			echo "inserted successfully";
			}else {
			echo "inserted failed";
			}
		}
	}
}
			