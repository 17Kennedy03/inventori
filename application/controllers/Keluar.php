<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keluar extends CI_Controller {
	function __construct(){
	parent::__construct();
	$this->load->model('MKeluar');
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

	public function DataKeluar()
	{

		

		if($this->uri->segment(4)=='view')
		{
			$id_keluar=$this->uri->segment(3);
			$tampil=$this->MKeluar->GetDataWhere('id_keluar',$id_keluar)->row();
					$data['detail']['id_keluar']= $tampil->id_keluar;
            		$data['detail']['id_barang']= $tampil->id_barang;
            		$data['detail']['tanggal']= $tampil->tanggal;
            		$data['detail']['jumlah']= $tampil->jumlah;
            		$data['detail']['satuan']= $tampil->satuan;
            		$data['detail']['tujuan']= $tampil->tujuan;
            		$data['detail']['ket']= $tampil->ket;
			$data['content']='Keluar/VFormUpdateKeluar';
		}
		else
		{	
			$data['DataKeluar']=$this->MKeluar->GetData('tbl_keluar');
			$data['content']='Keluar/VKeluar';
		}


		$this->load->view('VBackend',$data);
	}


	public function VFormAddKeluar()
	{
		$data['content']='Keluar/VFormAddKeluar';
		$data['list_barang'] = $this->MKeluar->list_barang();
		$this->load->view('VBackend',$data);
	}
	public function AddDataKeluar()
	{
		 	 $add['id_keluar']=$this->input->post('id_keluar');
         	 $add['id_barang']= $this->input->post('id_barang');
         	 $add['tanggal']= $this->input->post('tanggal');
         	 $add['jumlah']= $this->input->post('jumlah');
         	 $add['satuan']= $this->input->post('satuan');
         	 $add['tujuan']= $this->input->post('tujuan');
         	 $add['ket']= $this->input->post('ket');  
        	 $this->MKeluar->AddData('tbl_keluar',$add);
        	 redirect(site_url('Keluar/DataKeluar'));
	}



	public function UpdateDataKeluar()
	{
		 $id_keluar=$this->input->post('id_keluar');
		 	 $update['id_barang']= $this->input->post('id_barang');
		     $update['tanggal']= $this->input->post('tanggal');
         	 $update['jumlah']= $this->input->post('jumlah');
         	 $update['satuan']= $this->input->post('satuan');
         	 $update['tujuan']= $this->input->post('tujuan');
         	 $update['ket']= $this->input->post('ket');
          	 $this->MKeluar->UpdateData('tbl_keluar','id_keluar',$id_keluar,$update);
		 redirect(site_url('Keluar/DataKeluar'));
	}


	public function DeleteDataKeluar()
	{
		 $id_keluar=$this->uri->segment('3');
        	 $this->MKeluar->DeleteData('tbl_keluar','id_keluar',$id_keluar);
        	 redirect(site_url('Keluar/DataKeluar'));
	}


}