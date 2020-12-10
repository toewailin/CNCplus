<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin_cancel extends CI_Controller {


function makecancel()
	{	
	
			$voucherno=$this->uri->segment(5);
			$table=$this->uri->segment(3);	
			if($table=="purchase_order")
			{
				$this->db->delete('tbl_purchase_order',array('voucherno'=>$voucherno));
				$this->db->delete('tbl_purchase_order_header',array('voucherno'=>$voucherno));

			}

			if($table=="sale_order")
			{
				$this->db->delete('tbl_sale_order',array('voucherno'=>$voucherno));
				$this->db->delete('tbl_sale_order_header',array('voucherno'=>$voucherno));


			}
			
			redirect("admin/delete_left_data_list/$table";
		
		
	}//
	
}

 ?>