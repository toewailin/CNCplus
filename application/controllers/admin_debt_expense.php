<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin_debt_expense extends CI_Controller {



/*Debt Expense*/


function debt_expense()
	{	
				

			$debt_id=$this->input->post("debt_id");
			$customer=$this->input->post("customer");			
			$amount=$this->input->post("amount");
			$date=date("Y-m-d");

			$qry=$this->db->query("UPDATE tbl_customer SET debt_expense=1 WHERE id='$debt_id'");
			if($qry)
			{
				$data=array(
							'customer'=>$customer,
							'total'=>$amount,
							'date'=>$date
							);

				$qry=$this->db->insert("tbl_debt_expense",$data);

				if($qry)
				{
					$status=1;
				}
				else
				{
					$status=0;
				}

			}

			echo $status;


	}

}

 ?>