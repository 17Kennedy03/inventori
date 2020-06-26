<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Masuk extends CI_Controller {
	function __construct(){
	parent::__construct();
	$this->load->model('MMasuk');
	}

	public function index()
	{
		if($this->session->userdata('Login'))
		{
			$data['content']='VBlank';
			$this->load->view('VBackend',$data);
		}
		else
		{
			 redirect(site_url('Login'));
		}

	}

	public function DataMasuk()
	{

		

		if($this->uri->segment(4)=='view')
		{
			$id_masuk=$this->uri->segment(3);
			$tampil=$this->MMasuk->GetDataWhere('id_masuk',$id_masuk)->row();
			$data['detail']['id_masuk']= $tampil->id_masuk;
            		$data['detail']['id_barang']= $tampil->id_barang;
            		$data['detail']['tanggal']= $tampil->tanggal;
            		$data['detail']['jumlah']= $tampil->jumlah;
            		$data['detail']['satuan']= $tampil->satuan;
			$data['content']='Masuk/VFormUpdateMasuk';
		}
		else
		{	
			$data['DataMasuk']=$this->MMasuk->GetData('tbl_masuk');
			$data['content']='Masuk/VMasuk';
		}


		$this->load->view('VBackend',$data);
	}


	public function VFormAddMasuk()
	{
		$data['content']='Masuk/VFormAddMasuk';
		$data['list_barang'] = $this->MMasuk->list_barang();
		$this->load->view('VBackend',$data);
	}
	public function AddDataMasuk()
	{
		 	 $add['id_masuk']=$this->input->post('id_masuk');
         	 $add['id_barang']= $this->input->post('id_barang');
         	 $add['tanggal']= $this->input->post('tanggal');
         	 $add['jumlah']= $this->input->post('jumlah');
         	 $add['satuan']= $this->input->post('satuan');  
        	 $this->MMasuk->AddData('tbl_masuk',$add);
        	 redirect(site_url('Masuk/DataMasuk'));
	}



	public function UpdateDataMasuk()
	{
		 $id_masuk=$this->input->post('id_masuk');
		 $update['id_barang']= $this->input->post('id_barang');
		 $update['tanggal']= $this->input->post('tanggal');
         	 $update['jumlah']= $this->input->post('jumlah');
         	 $update['satuan']= $this->input->post('satuan');
          	 $this->MMasuk->UpdateData('tbl_masuk','id_masuk',$id_masuk,$update);
		 redirect(site_url('Masuk/DataMasuk'));
	}


	public function DeleteDataMasuk()
	{
		 $id_masuk=$this->uri->segment('3');
        	 $this->MMasuk->DeleteData('tbl_masuk','id_masuk',$id_masuk);
        	 redirect(site_url('Masuk/DataMasuk'));
	}


}