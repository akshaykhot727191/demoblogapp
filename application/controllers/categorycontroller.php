<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class categorycontroller extends CI_Controller {

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
	 
	  public function __construct()
    {
        parent::__construct();
		  $this->load->helper('url','form');
        $this->load->model('BlogModel');
		$this->logged_in();
    }
	private function logged_in(){
		if(! $this->session->userdata('username')){
		  redirect(base_url('index.php/logincontroller'));  
		}
	}
	public function index()
	{
		 $query = $this->BlogModel->lists('category');
			$data['list'] = null;
		  if($query){
		   $data['list'] =  $query;
		  }
		$this->load->view('templete/header');
		$this->load->view('templete/sidebar');
		$this->load->view('category/catedashbord',$data);
		$this->load->view('templete/footer');
	}
	 public function addcategory()
	{  
    	$this->load->view('templete/header');
		$this->load->view('templete/sidebar');
		$this->load->view('category/addcategory');
		$this->load->view('templete/footer');
	}
	public function savecategory()
	{   
            $name = $this->input->post('txtcategory');			
			
		$result = $this->BlogModel->save($name,'category');
		$msg='';
			if($result=='true'){
				$msg= 'saved';
			}else{
				$msg ='failed';
			}
				redirect(base_url('index.php/categorycontroller'));	
				
	}

	public function deletecategory()
	{  
    	$r = $this->uri->segment(3);
		$result = $this->BlogModel->delete($r);
		redirect(base_url('index.php/categorycontroller'));
	}
	public function view()
	{  
		$r = $this->uri->segment(3);
		$data['query'] = $this->BlogModel->getbyrollno($r);
		// echo '<pr>';
		//print_r($data);
		// exit;
		
    	$this->load->view('templete/header');
		$this->load->view('templete/sidebar');
		$this->load->view('post/viewpost',$data);
		$this->load->view('templete/footer');
		
	}
	
}
