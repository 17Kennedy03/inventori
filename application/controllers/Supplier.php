<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier extends CI_Controller {
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

	public function DataSupplier()
	{

		

		if($this->uri->segment(4)=='view')
		{
			$id_supplier=$this->uri->segment(3);
			$tampil=$this->MSudi->GetDataWhere('tbl_supplier','id_supplier',$id_supplier)->row();
			$data['detail']['id_supplier']= $tampil->id_supplier;
            		$data['detail']['nama_supplier']= $tampil->nama_supplier;
            		$data['detail']['nama_pemilik']= $tampil->nama_pemilik;
            		$data['detail']['notlp']= $tampil->notlp;
            		$data['detail']['alamat']= $tampil->alamat;
			$data['content']='Supplier/VFormUpdateSupplier';
		}
		else
		{	
			$data['DataSupplier']=$this->MSudi->GetData('tbl_supplier');
			$data['content']='Supplier/VSupplier';
		}


		$this->load->view('VBackend',$data);
	}


	public function VFormAddSupplier()
	{
		$data['content']='Supplier/VFormAddSupplier';
		$this->load->view('VBackend',$data);
	}
	public function AddDataSupplier()
	{
		 $add['id_supplier']=$this->input->post('id_supplier');
         	 $add['nama_supplier']= $this->input->post('nama_supplier');
         	 $add['nama_pemilik']= $this->input->post('nama_pemilik');
         	 $add['notlp']= $this->input->post('notlp');
         	 $add['alamat']= $this->input->post('alamat');  
        	 $this->MSudi->AddData('tbl_supplier',$add);
        	 redirect(site_url('Supplier/DataSupplier'));
	}



	public function UpdateDataSupplier()
	{
		 $id_supplier=$this->input->post('id_supplier');
		 $update['nama_supplier']= $this->input->post('nama_supplier');
         	 $update['nama_pemilik']= $this->input->post('nama_pemilik');
         	 $update['notlp']= $this->input->post('notlp');
         	 $update['alamat']= $this->input->post('alamat');
          	 $this->MSudi->UpdateData('tbl_supplier','id_supplier',$id_supplier,$update);
		 redirect(site_url('Supplier/DataSupplier'));
	}


	public function DeleteDataSupplier()
	{
		 $id_supplier=$this->uri->segment('3');
        	 $this->MSudi->DeleteData('tbl_supplier','id_supplier',$id_supplier);
        	 redirect(site_url('Supplier/DataSupplier'));
	}


}