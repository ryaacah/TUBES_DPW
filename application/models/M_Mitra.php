<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Mitra extends CI_Model {

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
    
	public function getAll()
	{
		$query = $this -> db -> query ("select * from t_mitra");
        return $query -> result();
	}

	public function deleteMitra($id)
	{
		$this->db->where('id_mitra',$id);
		$this->db->delete('t_mitra');
	}

	public function insertMitra($data)
	{
		$this->db->insert('t_mitra',$data);
	}

	public function editMitra($data, $id)
	{
		$this->db->where('id_mitra',$id);
		$this->db->update('t_mitra',$data);
	}

	public function getMitra($id)
	{
		$this->db->where('id_mitra',$id);
		$query = $this->db->get('t_mitra');
		return $query->row();
	}
}