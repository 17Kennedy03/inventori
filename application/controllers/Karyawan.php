<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan extends CI_Controller {
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

	public function DataKaryawan()
	{

		

		if($this->uri->segment(4)=='view')
		{
			$nik=$this->uri->segment(3);
			$tampil=$this->MSudi->GetDataWhere('tbl_karyawan','nik',$nik)->row();
			$data['detail']['nik']= $tampil->nik;
            		$data['detail']['nama']= $tampil->nama;
            		$data['detail']['jabatan']= $tampil->jabatan;
            		$data['detail']['no_tlp']= $tampil->no_tlp;
            		$data['detail']['alamat']= $tampil->alamat;
			$data['content']='Karyawan/VFormUpdateKaryawan';
		}
		else
		{	
			$data['DataKaryawan']=$this->MSudi->GetData('tbl_karyawan');
			$data['content']='Karyawan/VKaryawan';
		}


		$this->load->view('VBackend',$data);
	}


	public function VFormAddKaryawan()
	{
		$data['content']='Karyawan/VFormAddKaryawan';
		$this->load->view('VBackend',$data);
	}
	public function AddDataKaryawan()
	{
		 $add['nik']=$this->input->post('nik');
         	 $add['nama']= $this->input->post('nama');
         	 $add['jabatan']= $this->input->post('jabatan');
         	 $add['no_tlp']= $this->input->post('no_tlp');
         	  $add['alamat']= $this->input->post('alamat');  
        	 $this->MSudi->AddData('tbl_karyawan',$add);
        	 redirect(site_url('Karyawan/DataKaryawan'));
	}



	public function UpdateDataKaryawan()
	{
		 $nik=$this->input->post('nik');
		 $update['nama']= $this->input->post('nama');
		 $update['jabatan']= $this->input->post('jabatan');
         	 $update['no_tlp']= $this->input->post('no_tlp');
         	 $update['alamat']= $this->input->post('alamat');
          	 $this->MSudi->UpdateData('tbl_karyawan','nik',$nik,$update);
		 redirect(site_url('Karyawan/DataKaryawan'));
	}


	public function DeleteDataKaryawan()
	{
		 $nik=$this->uri->segment('3');
        	 $this->MSudi->DeleteData('tbl_karyawan','nik',$nik);
        	 redirect(site_url('Karyawan/DataKaryawan'));
	}


}