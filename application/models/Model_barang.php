<?php defined('BASEPATH') or exit('No direct script access allowed');

class Model_barang extends CI_Model
{
	public $_table = "barang";

	public function getAll()
	{
		return $this->db->get($this->_table)->result_array();
	}

	 public function insert($params)
    {
    return $this->db->insert('barang', $params);
    }
	public function tambahDataBarang()
	{
			$post = $this->input->post();
			$data = array(
			'nama' => $post["nama_"],
			'id_user'	=> $this->session->userdata('id_user'),      
			  );

        $this->db->insert('barang', $data);
	}
	public function updateDatabarang()
	{
		$post = $this->input->post();

		$data = array(
		'nama_barang' => $post["nama_barang"],  
			
		);
		$this->db->where('id_barang', $this->input->post('id'));
		$this->db->update('barang', $data);
	}
	function hapus_barang($id)
	{
		
		$this->db->where('id_barang', $id);
		//DELETE FORM mytable
		$this->db->delete("barang");
	}
	public function get_nama(){
        $sql = "SELECT *
        FROM user
        ";
        //execute query
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
        $result = $query->result_array();
        $query->free_result();
        return $result;
        }else{
        return array();
        }
	}
	
	public function cek($params){
		$sql	= "SELECT *FROM user WHERE id_barang = ?";
		$query = $this->db->query($sql,$params);
        // echo $this->db->last_query();die;
        if ($query->num_rows() > 0) {
        $result = $query->row_array();
        $query->free_result();
        return $result;
        }else{
        return array();
		}
	}
	public function getbarangByid($id)
	{
		return $this->db->get_where('barang', ['id_barang' => $id])->row_array();
	}
	
}
