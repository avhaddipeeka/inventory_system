<?php
class Manufacturer_model extends CI_Model {

    public function getManufacturer()
    {
	   	$query = $this->db->query("SELECT * FROM tbl_manufacturer");
    	return $query->result();
    }

    public function saveRecord($tbl_name,$data)
    {
	   	$this->db->insert($tbl_name,$data);
    }

    public function getModeldetails()
    {
    	$sql = "SELECT * FROM tbl_model";
		$query = $this->db->query($sql);
    	return $query->result();	
    }

}