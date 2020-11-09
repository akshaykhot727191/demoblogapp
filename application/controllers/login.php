<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

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
        $this->load->model('PostModel');

    }
	
	
	
	public function index()
	{ 
		$this->load->view('login');
		
	}
	
	public function login()
	{ 
	 //$field = array(
            $username = $this->input->post('txtusername');
		     $pass= $this->input->post('txtpass');
	       //);
       	 $result = $this->post->login($username,$pass); 
			if($result=='true'){
			redirect(base_url('index.php/Welcome'));
		}else{
			redirect(base_url('index.php/login'));
		}
	}
}
?>