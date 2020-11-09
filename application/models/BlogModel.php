<?php

defined('BASEPATH') or exit('No direct script access allowed');

class BlogModel extends CI_Model
{
	
	
	public function lists($tblname)
    {
        $this->db->select("id,cname");
		  $this->db->from($tblname);
		  $query = $this->db->get();
         return $query->result();
    }
	

    public function save($name,$tblname)
    {
      	$sql ="insert into category(cname)values ('".$name."')";
      	$this->db->query($sql);
		
		if($this->db->affected_rows()>0){
			return 'true';
		}else{
			return 'false';
		}
    }

     public function delete($id)
    {

        $this->db->where('id', $id);
        $this->db->delete('category');
    }
    public function getbycategory()
    {
         $this->db->select("id,cname");
		  $this->db->from('category');
		  $query = $this->db->get();
         return $query->result();
    }
	public function getbyrollno($id)
    {    
		$this->db->where('id', $id);
        $query = $this->db->get('category');
	    if ($query->num_rows() > 0) {
             foreach($query->result() as $value){
				$cname=$value->cname;
				}
			$this->db->where('category', $cname);
            $query = $this->db->get('post');
		     if ($query->num_rows() > 0) {
                return $query;
             } else {
               return false;
              }
			
	    }  else {
            return false;
        }
    }
}?>