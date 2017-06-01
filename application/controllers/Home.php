<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model('Home_models');
    }

	public function index()
	{
		$data = $this->Home_models->readProduk();
		$datatampil = array('databarang'=> $data);
		$this->load->view('view_home', $datatampil);
	}

	function edit($id){
		$where = array('id' => $id);
		$data['user'] = $this->m_data->edit_data($where,'user')->result();
		$this->load->view('v_edit',$data);
	}

	public function edit_data($kode_barang){
		$data1 = $this->Home_models->readProduk();
		$datatampil = array('databarang'=> $data1);
		$barang = $this->Home_models->GetBarang("where kode_barang = '$kode_barang'");
		$data = array(
			"kode_barang" => $barang[0]['kode_barang'],
			"nama_barang" => $barang[0]['nama_barang'],
			"satuan" => $barang[0]['satuan'],
			"harga" => $barang[0]['harga']
		);
		$this->load->view('dashboard/view_produk_update',$data,$datatampil);
	}

	public function edit_harga($kode_barang){
		$data1 = $this->Home_models->readProduk();
		$datatampil = array('databarang'=> $data1);
		$barang = $this->Home_models->GetBarang("where kode_barang = '$kode_barang'");
		$data = array(
			"kode_barang" => $barang[0]['kode_barang'],
			"nama_barang" => $barang[0]['nama_barang'],
			"satuan" => $barang[0]['satuan'],
			"harga" => $barang[0]['harga']
		);
		$this->load->view('dashboard/view_harga_update',$data,$datatampil);
	}

	public function edit_user($kodeuser){
		$barang = $this->Home_models->GetUSer("where u_id = '$kodeuser'");
		$data = array(
			"u_id" => $barang[0]['u_id'],
			"u_name" => $barang[0]['u_name'],
			"nama" => $barang[0]['nama'],
		);
		$this->load->view('dashboard/view_user_update',$data);
	}

		function editdata(){
			$id = $this->input->post('kode_barang');
			$nama = $this->input->post('nama_barang');
			$satuan = $this->input->post('satuan');
			$harga = $this->input->post('harga');

			$data = array(
				'nama_barang' => $nama,
				'satuan' => $satuan,
				'harga' => $harga
			);

			$where = array(
				'kode_barang' => $id
			);

			$this->Home_models->Update_Data($data,$where);
			redirect('Home/readProduk');
		}

		function editharga(){
			$nama = $this->input->post('nama_barang');
			$harga = $this->input->post('harga');

			$data = array(
				'harga' => $harga
			);

			$where = array(
				'nama_barang' => $nama
			);

			$this->Home_models->Update_Data($data,$where);
			redirect('Home/readHarga');
		}

		function edituser(){
			$u_id = $this->input->post('u_id');
			$u_name = $this->input->post('u_name');
			$nama = $this->input->post('nama');
			$data = array(
				'u_name' => $u_name,
				'nama' => $nama
			);
			$where = array(
				'u_id' => $u_id
			);
			$this->Home_models->Update_User($data,$where);
			redirect('Home/readUser');
		}




	public function hapus($kode_barang){
		echo "Delete barang : ".$kode_barang;
		$where = array('kode_barang'=>$kode_barang);
		$res = $this->Home_models->Delete_Data('barang',$where);
		if($res<1){
			redirect('Home/readData');
		}
		else{
			echo "<h2>GAGAL</h2>";
		}
	}

	public function hapusUser($user){
		echo "Delete user : ".$user;
		$where = array('u_id'=>$user);
		$res = $this->Home_models->Delete_User('user',$where);
		if($res<1){
			redirect('Home/readUser');
		}
		else{
			echo "<h2>GAGAL</h2>";
		}
	}

	public function hapusArtikel($idberita){
		$where = array('IDberita'=>$idberita);
		$res = $this->Home_models->Delete_Berita('berita',$where);
		if($res<1){
			redirect('Home/readArtikel');
		}
		else{
			echo "<h2>GAGAL</h2>";
		}
	}

	function tambahUser(){
	$id = $this->input->post('u_id');
	$nama = $this->input->post('nama');
	$username = $this->input->post('u_name');
	$password = $this->input->post('u_paswd');
	$data = array(
		'u_id' => $id,
		'nama' => $nama,
		'u_name' => $username,
		'u_paswd' => md5($password)
		);
	}

		function tambahArtikel(){
		$id = $this->input->post('IDberita');
		$nama = $this->input->post('Judul');
		$gambar = $this->input->post('gambar');
		$tanggal = $this->input->post('Tanggal');
		$isi = $this->input->post('IsiBerita');
		$data = array(
			'IDberita' => $id,
			'Judul' => $nama,
			'gambar' => $gambar,
			'Tanggal' => $tanggal,
			'IsiBerita' => $isi
			);


		$this->Home_models->tambahArtikel($data);
		redirect('Home/readArtikel');
		}

		function tambah_User() {
		$this->load->view('dashboard/view_tambah_user');
		}

		function tambah_Artikel() {
		$this->load->view('dashboard/view_tambah_artikel');
		}

	function create() {
	$data = array(
		'kode_barang' => $this->input->post('kode_barang'),
		'nama_barang' => $this->input->post('nama_barang'),
		'satuan' => $this->input->post('satuan'),
		'jumlah' => $this->input->post('jumlah'),
		'harga' => $this->input->post('harga'),
		'kategori' => $this->input->post('kategori')
	);
	$this->Home_models->addData($data);
	$this->index();
}

	public function readData(){
		$data = $this->Home_models->readData();
		$datatampil = array('databarang'=> $data);
		$this->load->view('dashboard/dashboard', $datatampil);
		//$this->load->view('view_home', $datatampil);
	}

	public function readUser(){
		$data = $this->Home_models->readUser();
		$datatampil = array('databarang'=> $data);
		$this->load->view('dashboard/view_user', $datatampil);
		//$this->load->view('view_home', $datatampil);
	}

	public function readProduk(){
		$data = $this->Home_models->readProduk();
		$datatampil = array('databarang'=> $data);
		$this->load->view('dashboard/view_produk', $datatampil);
		//$this->load->view('view_home', $datatampil);
	}

	public function readBerita(){
		$data = $this->Home_models->readBerita();
		$datatampil = array('databarang'=> $data);
		$this->load->view('dashboard/view_artikel', $datatampil);
		//$this->load->view('view_home', $datatampil);
	}

	public function readPost($idberita){

		$data = $this->Home_models->readPost($idberita);
		if($data == true){
			$datatampil = array('databarang'=> $data);
			$this->load->view('view_artikel_post', $datatampil);
		}
		else{
			redirect(base_url()."index.php/Home/readBerita");
		}
		//$this->load->view('view_home', $datatampil);
	}

	public function readHarga(){
		$data = $this->Home_models->readHarga();
		$datatampil = array('databarang'=> $data);
		$this->load->view('dashboard/view_harga', $datatampil);
		//$this->load->view('view_home', $datatampil);
	}

	public function readArtikel(){
		$data = $this->Home_models->readBerita();
		$datatampil = array('databarang'=> $data);
		$this->load->view('dashboard/view_artikel_dashboard', $datatampil);
		//$this->load->view('view_home', $datatampil);
	}

	public function admin(){
		$this->load->view('admin');
		//$this->load->view('view_home', $datatampil);
	}

}
