<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Garuda extends CI_Controller {

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
	public function index()
	{
		$this->load->view('V_Home');
	}

	public function linkproduk() {
		$this->load->view('V_Produk');
	}

	public function linktarif() {
		$this->load->view('V_Tarif');
	}

	public function linkmitra() {

		$this -> load -> Model ('M_Mitra');
		$dt = $this -> M_Mitra -> getAll ();

		$temp['data'] = $dt;
		$temp['title'] = "List Of Mitra";

		$this -> load -> view ('V_Mitra', $temp);
	}

	public function linkkarir() {
		$this->load->view('V_Karir');
	}

	public function delete($id){
		$M_mitra = $this->load->model('M_Mitra');
		$this->M_Mitra->deleteMitra($id);
		redirect (base_url('/index.php/C_Garuda/linkmitra'));
	}

	public function createForm(){
		$this->load->view('V_CreateMitra');
	}

	public function updateForm($id){
		$M_Mitra = $this->load->model('M_Mitra');
		$createmitra = $this->M_Mitra->getMitra($id);
		
		$data=array('data_mitra'=>$createmitra);
		$this->load->view('V_UpdateMitra', $data);
	}

	public function createAction(){
		$perusahaan = $this->input->post('perusahaan');
		$kemitraan = $this->input->post('kemitraan');
		$alamat = $this->input->post('alamat');
		$email = $this->input->post('email');

		$createaction = array(
			'perusahaan' => $perusahaan,
			'kemitraan' => $kemitraan,
			'alamat' => $alamat,
			'email' => $email
		);

		$M_Mitra = $this->load->model('M_Mitra');
		$this->M_Mitra->insertMitra($createaction);
		redirect (base_url('/index.php/C_Garuda/linkmitra'));
	}

	public function updateAction(){
		$id = $this->input->post('id_mitra');
		$perusahaan = $this->input->post('perusahaan');
		$kemitraan = $this->input->post('kemitraan');
		$alamat = $this->input->post('alamat');
		$email = $this->input->post('email');

		$updateaction = array(
			'perusahaan' => $perusahaan,
			'kemitraan' => $kemitraan,
			'alamat' => $alamat,
			'email' => $email
		);

		$M_Mitra = $this->load->model('M_Mitra');
		$this->M_Mitra->editMitra($updateaction, $id);
		redirect (base_url('/index.php/C_Garuda/linkmitra'));
	}
}
