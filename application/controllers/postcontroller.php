<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class postcontroller extends CI_Controller {

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
		$this->load->model('PostModel');
		$this->logged_in();
    }
	private function logged_in(){
		if(! $this->session->userdata('username')){
		  redirect(base_url('index.php/logincontroller'));  
		}
	}
	public function index()
	{ 	
		 $query = $this->PostModel->lists('post');
			$data['list'] = null;
		  if($query){
		   $data['list'] =  $query;
		  }
		$this->load->view('templete/header');
		$this->load->view('templete/sidebar');
		$this->load->view('post/postdashbord',$data);
		$this->load->view('templete/footer');
	}
	 public function addpost()
	{  
	     $query = $this->BlogModel->lists('category');
			$data['list'] = null;
		  if($query){
		   $data['list'] =  $query;
		  }
		 
    	$this->load->view('templete/header');
		$this->load->view('templete/sidebar');
		$this->load->view('post/addpost',$data);
		$this->load->view('templete/footer');
	}
	public function savepost()
	{   
	    $field = array(
            'title' => $this->input->post('txttitle'),    
            'category' => $this->input->post('category'),
            'image' => $this->input->post('img'),
            'dese' => $this->input->post('txtdes'),
            
        );
            $name = $this->input->post('txtcategory');			
			
		$result = $this->PostModel->save($field,'post');
		$msg='';
			if($result=='true'){
				$msg= 'saved';
			}else{
				$msg ='failed';
			}
				redirect(base_url('index.php/postcontroller'));	
				
	}
	public function deletepost()
	{  
    	$r = $this->uri->segment(3);
		$result = $this->PostModel->delete($r);
		redirect(base_url('index.php/postcontroller'));
	}
	 public function select()
	{
		$r = $this->uri->segment(3);
		$data['query'] = $this->PostModel->getbyrollno($r);
		// echo '<pr>';
		// print_r($data['query']->result());
		// exit;
		
		$this->load->view('templete/header');
		$this->load->view('templete/sidebar');
		$this->load->view('post/updatepost',$data);
		$this->load->view('templete/footer');
	}
	 public function update()
	{   
	  $id = $this->input->post('txtid');
	 
	  
	 $field = array(
            'title' => $this->input->post('txttitle'),    
            'category' => $this->input->post('category'),
            'image' => $this->input->post('img'),
            'dese' => $this->input->post('txtdes'),
            
        );
		$result = $this->PostModel->update($field,$id);
		$msg='';
		if($result=='true'){
			$msg= 'saved';
		}else{
			$msg ='failed';
		}
			redirect(base_url('index.php/postcontroller'));	
			
	}
	public function view()
	{
		$r = $this->uri->segment(3);
		$data['query'] = $this->PostModel->getbyrollno($r);
		// echo '<pr>';
		// print_r($data['query']->result());
		// exit;
		
		$this->load->view('templete/header');
		$this->load->view('templete/sidebar');
		$this->load->view('post/viewpost',$data);
		$this->load->view('templete/footer');
		
	}
}
