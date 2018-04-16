<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index(){
		$this->data['hasil']=$this->model_crud->getUser('manajemenkeuangan');
		$this->load->view('welcome_message', $this->data);
	}
	public function form_input(){
		$this->load->view('form-input');
	}
	public function insert(){
		$tanggal = $_POST['Tanggal'];
		$rincian = $_POST['Rincian'];
		$pemasukkan = $_POST['Pemasukkan'];
		$pengeluaran = $_POST['Pengeluaran'];
		$jumlah = $_POST['Jumlah'];
		$keterangan = $_POST['Keterangan'];
		$data = array('userID'=>$id,'Tanggal'=>$tanggal,'Rincian'=>$rincian,'Pemasukkan'=>$pemasukkan,'Pengeluaran'=>$pengeluaran,'Jumlah'=>$jumlah,'Keterangan'=>$keterangan);
		$tambah=$this->model_crud->tambahData('manajemenkeuangan',$data);
		if($tambah>0){
			redirect('Welcome/index');
		}else{
			echo 'Gagal disimpan';
		}
	}
	public function delete($id){
		$hapus=$this->model_crud->hapusData('manajemenkeuangan',$id); 
		if($hapus>0){
			redirect('Welcome/index');
		}else{
			echo 'Gagal disimpan';
		}
	}
	public function form_edit($id){
		$this->data['dataEdit']=$this->model_crud->dataEdit('manajemenkeuangan',$id);
		$this->load->view('form-edit',$this->data);
	}
	public function update($id){
		$tanggal = $_POST['Tanggal'];
		$rincian = $_POST['Rincian'];
		$pemasukkan = $_POST['Pemasukkan'];
		$pengeluaran = $_POST['Pengeluaran'];
		$jumlah = $_POST['Jumlah'];
		$keterangan = $_POST['Keterangan'];
		$data = array('Tanggal'=>$tanggal,'Rincian'=>$rincian,'Pemasukkan'=>$pemasukkan,'Pengeluaran'=>$pengeluaran,'Jumlah'=>$jumlah,'Keterangan'=>$keterangan);
		$edit=$this->model_crud->editData('manajemenkeuangan',$data,$id);
		if($edit>0){
			redirect('Welcome/index');
		}else{
			echo 'Gagal disimpan';
		}
	}
}