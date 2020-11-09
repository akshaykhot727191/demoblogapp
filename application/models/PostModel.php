<?php

defined('BASEPATH') or exit('No direct script access allowed');

class PostModel extends CI_Model
{
	public function login($uname,$pass,$type)
    { 
        $myquery = $this->db->query("SELECT * FROM login WHERE username ='".$uname."'and type='".$type."'");
        $row = $myquery->row();

        if (isset($row))
        {
            $hash = $row->password;
            if ($pass==$hash) {
                $result='true';
            } else {
                $result='false';
            }
        } else{
            $result='false';
        }
		return $result;
		
    }
	
	public function lists($tblname)
    {
        $this->db->select("postid,title,category,image,dese");
		  $this->db->from($tblname);
		  $query = $this->db->get();
         return $query->result();
    }
	
    public function save($data,$tblname)
    {
      	$this->db->insert($tblname, $data);
		
		if($this->db->affected_rows()>0){
			return 'true';
		}else{
			return 'false';
		}
    }
     public function delete($id)
    {

        $this->db->where('postid', $id);
        $this->db->delete('post');
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
        $this->db->where('postid', $id);
        $query = $this->db->get('post');
        if ($query->num_rows() > 0) {
            return $query;
        } else {
            return false;
        }
    }
	public function update($data,$id)
    {
      
		$this->db->where('postid', $id);
		$this->db->update('post',$data);
		
		if($this->db->affected_rows()>0){
			return 'true';
		}else{
			return 'false';
		}
    }
}?>