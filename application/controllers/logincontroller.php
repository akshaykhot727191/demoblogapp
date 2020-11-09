<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class logincontroller extends CI_Controller {

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
			 $type= $this->input->post('type');
	       //);
       	 $result = $this->PostModel->login($username,$pass,$type); 
			if($result=='true'){
				if($type=='user'){
					$this->session->set_userdata('username',$username);
					redirect(base_url('index.php/postcontroller'));
				}else{
					$this->session->set_userdata('username',$username);
					redirect(base_url('index.php/guest'));
				}
		}else{
			redirect(base_url('index.php/login'));
		}
	}
	public function logout()
	{    $this->session->sess_destroy();
		$this->load->view('login');
		
	}
}
?>