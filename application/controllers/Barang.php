<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {
	function __construct(){
	parent::__construct();
	$this->load->model('MSudi');
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

	public function DataBarang()
	{

		

		if($this->uri->segment(4)=='view')
		{
			$id_barang=$this->uri->segment(3);
			$tampil=$this->MSudi->GetDataWhere('tbl_barang','id_barang',$id_barang)->row();
			$data['detail']['id_barang']= $tampil->id_barang;
            		$data['detail']['nama_barang']= $tampil->nama_barang;
            		$data['detail']['stok']= $tampil->stok;
            		$data['detail']['keterangan']= $tampil->keterangan;
			$data['content']='Barang/VFormUpdateBarang';
		}
		else
		{	
			$data['DataBarang']=$this->MSudi->GetData('tbl_barang');
			$data['content']='Barang/VBarang';
		}


		$this->load->view('VBackend',$data);
	}


	public function VFormAddBarang()
	{
		$data['content']='Barang/VFormAddBarang';
		$this->load->view('VBackend',$data);
	}
	public function AddDataBarang()
	{
		 $add['id_barang']=$this->input->post('id_barang');
         	 $add['nama_barang']= $this->input->post('nama_barang');
         	 $add['stok']= $this->input->post('stok');
         	  $add['keterangan']= $this->input->post('keterangan');  
        	 $this->MSudi->AddData('tbl_barang',$add);
        	 redirect(site_url('Barang/DataBarang'));
	}



	public function UpdateDataBarang()
	{
		 $id_barang=$this->input->post('id_barang');
		 $update['nama_barang']= $this->input->post('nama_barang');
         	 $update['stok']= $this->input->post('stok');
         	 $update['keterangan']= $this->input->post('keterangan');
          	 $this->MSudi->UpdateData('tbl_barang','id_barang',$id_barang,$update);
		 redirect(site_url('Barang/DataBarang'));
	}


	public function DeleteDataBarang()
	{
		 $id_barang=$this->uri->segment('3');
        	 $this->MSudi->DeleteData('tbl_barang','id_barang',$id_barang);
        	 redirect(site_url('Barang/DataBarang'));
	}


}