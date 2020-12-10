<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Site extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('site_model');
		$this->load->library('form_validation');
		$this->load->model('admin_model');
	}

	function index()
	{
		$this->load->view("login_form");
	}//

	// doing user login 	
	function do_login()
	{
		 $username=$this->input->post('username');
		$password=md5($this->input->post("password"));
		$pcname=gethostbyaddr($this->input->ip_address());

		//$query=$this->db->query("SELECT *,CURDATE() as date FROM tbl_user where username='$username' AND password='$password' AND computer_name='$pcname'");
		$query=$this->db->query("SELECT *,CURDATE() as date FROM tbl_user where username='$username' AND password='$password'");
						
		if($query->num_rows()>=1)
		{
			$user_role=$query->row();
			
			if($user_role->user_role=='administrator')
			{
				/*$userdata=array(
						'AdminUser'=>$this->input->post('username'),
						'AdminPass'=>md5($this->input->post('password')),
						'IsLogin'=>true,
						'DisplayName'=>$user_role->display_name,
						'date'=>$user_role->date,
						'authority'=>$user_role->user_role							
						);*/

			
					set_cookie('admin_cookie',$username,time() +3600); 
					set_cookie('user_role',"administrator",time() +3600); 
  
			
				redirect('admin');	
				
			}

			if($user_role->user_role=='cashier')
			{
				/*$userdata=array(
						'CashierUser'=>$this->input->post('username'),
						'CashierPass'=>md5($this->input->post('password')),
						'IsLogin'=>true,
						'DisplayName'=>$user_role->display_name,

						'date'=>$user_role->date
						);
				$this->session->set_userdata($userdata);	*/		

  
			
			//	$this->session->set_userdata($userdata);

				set_cookie('cashier_cookie',$username,time() +3600); 
				set_cookie('user_role',"cashier",time() +3600); 

				redirect('cashier');
			}


		/*	$userdata=array(
							'AdminUser'=>$this->input->post('username'),
							'AdminPass'=>md5($this->input->post('password')),
							'IsLogin'=>true,
							'LoginID'=>session_id(),
							'date'=>$user_role->date,
							'authority'=>$user_role->user_role							
							);	
			
			$this->session->set_userdata($userdata);
			redirect('admin');*/
			
			/*if($user_role->user_role=='administrator')
			{
				$this->session->set_userdata($userdata);
				redirect('admin');	
				
			}

			if($user_role->user_role=='cashier')
			{
				$this->session->set_userdata($userdata);				
				redirect('cashier');
			}

			if($user_role->user_role=='manager')
			{
				$this->session->set_userdata($userdata);
				redirect("manager");
			}			*/
		}		
		else
		{
			 $data["message"]="Username or Password do not match";
		
			$this->load->view("login_form");
		}
		
	}//

	
}