<?php 

/**
* 
*/
class Model extends CI_Model
{
	
	function __construct()
	{
		$this->load->database();
	}

    public function get_data($table_name, $column_name, $condition){
        // select * from $table_name, where $column_name == $condition
        $this->db->where($column_name, $condition);
        return $this->db->get($table_name);
    }

	public function login($data)
	{
		// $condition = "npm =" . "'" . $data['npm'] . "' AND " . "password =" . "'" . $data['password'] . "'";
        // $this->db->select('*');
        // $this->db->from('masuk');
        // $this->db->where($condition);
    
        // $query = $this->db->get();
        // if ($query->num_rows() == 1) {
        //     return true;
        // } else {
        //     return false;
        // }

        return $this->db->get_where('masuk', $data);
	}

	public function read_user_information($npm) {
    //     $condition = "npm =" . "'" . $npm . "'";
    //     $this->db->select('*');
    //     $this->db->from('masuk');
    //     $this->db->where($condition);
    //     //$this->db->limit(1);
    //     $query = $this->db->get();

    //     if ($query->num_rows() == 1) {
    //         return $query->result();
   
    //    } else {
    //         return false;
    //     }

        // return $this->db->get_where('masuk', $npm);
        // return $query->result();
        $query = $this->db->query("SELECT * FROM masuk WHERE npm='$npm' LIMIT 1");
        return $query->result();
        // $this->db->select('*');
        // $query = $this->db->get('masuk');
        // return $query->result();
        // $query= $this->db->get('masuk');
        // return $query->result();
    }
    public function insertData($data){
        return $this->db->insert('biodata', $data);
    }

    public function updateData($data){
        return $this->db->replace('biodata', $data);
    }

    public function deleteData($data){
        return $this->db->delete('biodata', $data);
    }
    public function hapus_data($where, $table){
        $this->db->where($where);
        $this->db->delete($table);
    }

}



 ?>