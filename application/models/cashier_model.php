<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cashier_model extends CI_Model{
	
/*
	function grab_date()
	{
		$datestring = " %Y-%m-%d";
		$date= mdate($datestring);
		return $date;
	 }
	 
	function grab_time()
	{
		$timestring = "%h:%i %a";
		$time= mdate($timestring);
		return $time;
	}//*/

	function get_voucherno($pcname)
	{
		$row=$this->db->select_max("voucherno")->get("tbl_".$pcname)->row();
		$number=$row->voucherno+1;
		$voucherno=str_pad($number, 10, "0", STR_PAD_LEFT); 
		return $pcname."-".$voucherno;
	}

	function validate()
	{
		$this->db->where('user_name', $this->input->post('user_name'));
		$this->db->where('password', md5($this->input->post('password')));
		$query = $this->db->get('tbl_user');
		
		if($query->num_rows == 1)
		{
			return true;
			$data['user_role']=$row->user_role;
		}
	}// 


	/*Validate Sale Form*/
	
	function validate_sale()
	{
			$this->form_validation->set_rules("product_code[]","Product Code","required|xss_clean");
			$this->form_validation->set_rules("product_name[]","Product Name","required|xss_clean");			
			$this->form_validation->set_rules("price[]","Price","required|xss_clean");
			$this->form_validation->set_rules("quantity[]","Quantity","required|xss_clean");			
			

		  	if($this->form_validation->run()==FALSE)
				 {
					return false;
				 }    
	   		else
				 {
					return true;
	  			 }

	}//
	

	function validate_damage()
		{

			$this->form_validation->set_rules("product_code[]","Product Code","required|xss_clean");
			$this->form_validation->set_rules("product_name[]","Product Name","required|xss_clean");
			$this->form_validation->set_rules("category[]","Category","required|xss_clean");
			$this->form_validation->set_rules("quantity[]","Quantity","required|xss_clean");
			$this->form_validation->set_rules("unit[]","Unit","required|xss_clean");

		  	if($this->form_validation->run()==FALSE)
				 {
					return false;
				 }    
	   		else
				 {
						return true;			
	  			 }
		}//

	function validate_jackpot()
		{

			$this->form_validation->set_rules("product_code[]","Product Code","required|xss_clean");
			$this->form_validation->set_rules("product_name[]","Product Name","required|xss_clean");
			//$this->form_validation->set_rules("category[]","Category","required|xss_clean");
			$this->form_validation->set_rules("price[]","Amount","required|xss_clean");
			$this->form_validation->set_rules("quantity[]","Quantity","required|xss_clean");
			

		  	if($this->form_validation->run()==FALSE)
				 {
	
						return false;

				 }    
	   		else
				 {
			
						return true;
			
	  			 }
		}//
		
	function validate_debt_from_customer()
		{
			$this->form_validation->set_rules("customer_name","Customer Name","required|xss_clean");
			$this->form_validation->set_rules("amount_to_get","Amount To get","required|xss_clean");
			$this->form_validation->set_rules("product_name","Product Name","required|xss_clean");
			$this->form_validation->set_rules("category","Category","required|xss_clean");
			$this->form_validation->set_rules("date","Date","required|xss_clean");

			if($this->form_validation->run()==FALSE)
				 {
	
						return false;

				 }    
	   		else
				 {
			
						return true;
			
	  			 }

		}//

	//unit option 
	function grab_unit()
	{
		$this->db->cache_on();
		$query = $this->db->query("SELECT DISTINCT * FROM tbl_unit GROUP BY unit");

		foreach($query->result() as $row):
			$tags[$row->unit]=$row->unit;
		endforeach;
		return $tags;
	}//

	//category option
	function grab_category()
	{
		$this->db->cache_on();
		$query = $this->db->get("tbl_category");
		foreach($query->result() as $row):
			$tags[$row->category]=$row->category;
		endforeach;

		return $tags;
	}//



	function check_promotion()
	{
		$query=$this->db->query("SELECT * FROM tbl_promotion WHERE status=1");

		if($query->num_rows()>0)
		{
		$row=$query->row();
		$amount=$row->amount;
		$targetamount=$row->targetamount;
		//$enddate=strtotime($row->enddate);
		//$today=time();
		$enddate=$row->enddate;
		$today=date("Y-m-d");

			/*if($today>=$enddate)
			{
				$this->db->query("UPDATE tbl_promotion,tbl_discount,tbl_unit SET tbl_unit.discount=0, tbl_promotion.status=0,tbl_discount.iscurrent=0 WHERE tbl_promotion.id=tbl_discount.promotionid AND tbl_promotion.status=1 AND tbl_discount.iscurrent=1");
			}*/

			if($targetamount>=$amount)
			{
				$this->db->query("UPDATE tbl_promotion,tbl_discount,tbl_unit SET tbl_unit.discount=0, tbl_promotion.status=0,tbl_discount.iscurrent=0 WHERE tbl_promotion.id=tbl_discount.promotionid AND tbl_promotion.status=1 AND tbl_discount.iscurrent=1");
			}


		}


	}

	/*Account Check*/
	function check_account($oldpass)
	{

		//$this->db->where("computer_name",gethostbyaddr($this->input->ip_address()));
		$check=$this->db->get_where('tbl_user',array('username'=>$this->session->userdata('CashierUser'),'password'=>$oldpass));
		return $check;

	}

}//
