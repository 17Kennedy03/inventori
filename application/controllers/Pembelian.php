<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembelian extends CI_Controller {
	function __construct(){
	parent::__construct();
	$this->load->model('MBeli');
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

	public function DataPembelian()
	{

		

		if($this->uri->segment(4)=='view')
		{
			$id_transaksi=$this->uri->segment(3);
			$tampil=$this->MBeli->GetDataWhere('id_transaksi',$id_transaksi)->row();
					$data['detail']['id_transaksi']= $tampil->id_transaksi;
            		$data['detail']['id_barang']= $tampil->id_barang;
            		$data['detail']['supplier']= $tampil->supplier;
            		$data['detail']['harga_satuan']= $tampil->harga_satuan;
            		$data['detail']['jumlah']= $tampil->jumlah;
            		$data['detail']['satuan']= $tampil->satuan;
            		$data['detail']['tanggal']= $tampil->tanggal;
            		$data['detail']['keterangan']= $tampil->keterangan;
			$data['content']='Pembelian/VFormUpdatePembelian';
		}
		else
		{	
			$data['DataPembelian']=$this->MBeli->GetData('tbl_pembelian');
			$data['content']='Pembelian/VPembelian';
		}


		$this->load->view('VBackend',$data);
	}


	public function VFormAddPembelian()
	{
		$data['content']='Pembelian/VFormAddPembelian';
		$data['list_barang'] = $this->MBeli->list_barang();
		$this->load->view('VBackend',$data);
	}
	public function AddDataPembelian()
	{
		 	 $add['id_transaksi']=$this->input->post('id_transaksi');
         	 $add['id_barang']= $this->input->post('id_barang');
         	 $add['supplier']= $this->input->post('supplier');
         	 $add['harga_satuan']= $this->input->post('harga_satuan');
         	 $add['jumlah']= $this->input->post('jumlah');
         	 $add['satuan']= $this->input->post('satuan');
         	 $add['tanggal']= $this->input->post('tanggal');
         	 $add['keterangan']= $this->input->post('keterangan');  
        	 $this->MBeli->AddData('tbl_pembelian',$add);
        	 redirect(site_url('Pembelian/DataPembelian'));
	}



	public function UpdateDataPembelian()
	{
		 $id_transaksi=$this->input->post('id_transaksi');
		 	 $update['id_barang']= $this->input->post('id_barang');
		 	 $update['supplier']= $this->input->post('supplier');
          	 $update['harga_satuan']= $this->input->post('harga_satuan');
         	 $update['jumlah']= $this->input->post('jumlah');
         	 $update['satuan']= $this->input->post('satuan');
          	 $update['tanggal']= $this->input->post('tanggal');
          	 $update['keterangan']= $this->input->post('keterangan');
          	 $this->MBeli->UpdateData('tbl_pembelian','id_transaksi',$id_transaksi,$update);
		 redirect(site_url('Pembelian/DataPembelian'));
	}


	public function DeleteDataPembelian()
	{
		 $id_transaksi=$this->uri->segment('3');
        	 $this->MBeli->DeleteData('tbl_pembelian','id_transaksi',$id_transaksi);
        	 redirect(site_url('Pembelian/DataPembelian'));
	}


}