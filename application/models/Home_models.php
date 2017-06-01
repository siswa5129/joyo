<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_models extends CI_Model {

	public function GetBarang($where=""){
		$data = $this->db->query('select * from barang '.$where);
		return $data->result_array();
 	}
	public function GetUser($where=""){
		$data = $this->db->query('select * from user '.$where);
		return $data->result_array();
 	}

	public function GetTelur1($where="1"){
		$data = $this->db->query('select * from barang '.$where);
		return $data->result_array();
	}

	public function GetTelur($kode_barang){
		$data = $this->db->get_where('barang',array('kode_barang'=> $kode_barang));
		//$data = $this->db->query('select * from berita');
		return $data->result_array();
	}

	function addData($data) {
		$this->db->insert('barang', $data);
	}

	public function Delete_Data($data,$where){
		$res = $this->db->delete($data,$where);
 	}

	public function Delete_User($data,$where){
		$res = $this->db->delete($data,$where);
 	}

	public function Delete_Berita($data,$where){
		$res = $this->db->delete($data,$where);
	}

	public function tambahData($data){
		$this->db->insert('user', $data);
	}

	public function tambahUser($data){
		$this->db->insert('user', $data);
	}

	public function tambahArtikel($data){
		$this->db->insert('berita', $data);
	}

	public function readData(){
		$data = $this->db->get('barang');
		return $data->result_array();
	}

	public function readUser(){
		$data = $this->db->get('user');
		return $data->result_array();
	}

	public function readProduk(){
		$data = $this->db->get('barang');
		return $data->result_array();
	}

	public function readBerita(){
		$data = $this->db->get('berita');
		return $data->result_array();
	}

	public function readPost($idberita){
		$data = $this->db->get_where('berita',array('IDberita'=> $idberita));
		//$data = $this->db->query('select * from berita');
		return $data->result_array();
	}

	public function readHarga(){
		$data = $this->db->query('select * from barang');
		return $data->result_array();
	}

	public function Update_Data($data,$where){
		$res = $this->db->update('barang',$data,$where);
		return $res;
	}

	public function Update_User($data,$where){
		$res = $this->db->update('user',$data,$where);
		return $res;
	}
}
