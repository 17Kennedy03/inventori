<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	function __construct(){
	parent::__construct();
	$this->load->model('MSudi');
	}


public function DataUser()
	{

		

		if($this->uri->segment(4)=='view')
		{
			$kd_login=$this->uri->segment(3);
			$tampil=$this->MSudi->GetDataWhere('tbl_login','kd_login',$kd_login)->row();
			$data['detail']['kd_login']= $tampil->kd_login;
            		$data['detail']['username']= $tampil->username;
            		$data['detail']['password']= $tampil->password;
            		$data['detail']['level']= $tampil->level;
			$data['content']='USer/VFormUpdateUser';
		}
		else
		{	
			$data['DataUser']=$this->MSudi->GetData('tbl_login');
			$data['content']='User/VUser';
		}


		$this->load->view('VBackend',$data);
	}


	public function VFormAddUser()
	{
		$data['content']='User/VFormAddUser';
		$this->load->view('VBackend',$data);
	}
	public function AddDataUser()
	{
		 $add['kd_login']=$this->input->post('kd_login');
         	 $add['username']= $this->input->post('username');
         	 $add['password']= $this->input->post('password');  
         	 $add['level']= $this->input->post('level');
        	 $this->MSudi->AddData('tbl_login',$add);
        	 redirect(site_url('User/DataUser'));
	}



	public function UpdateDataUser()
	{
		 $kd_login=$this->input->post('kd_login');
		 $update['username']= $this->input->post('username');
         	 $update['password']= $this->input->post('password');
         	 $update['level']= $this->input->post('level');
          	 $this->MSudi->UpdateData('tbl_login','kd_login',$kd_login,$update);
		 redirect(site_url('User/DataUser'));
	}


	public function DeleteDataUser()
	{
		 $kd_login=$this->uri->segment('3');
        	 $this->MSudi->DeleteData('tbl_login','kd_login',$kd_login);
        	 redirect(site_url('User/DataUser'));
	}

}