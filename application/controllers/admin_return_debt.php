<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin_return_debt extends CI_Controller {



/*Return Debt From Customer */

	function return_debt()
	{
		
				$debt_id=$this->input->post("id");
				$returnamount=$this->input->post('returnamount');
				$people=$this->input->post('people');
				$note=$this->input->post('note');

				$total_debt=$this->input->post('total_debt');
				if ($total_debt<0)
				{
					$balance=abs($total_debt)-$returnamount;
				}
				else
				{
					$balance=$total_debt-$returnamount;
				}



				$returntype=$this->input->post('returntype');
				$paymethod=$this->input->post('paymethod');
				$payname=$this->input->post('payname');
				$date=date("Y-m-d",strtotime($this->input->post('date')));
				

			if($returntype=="debt_from_customer")
			{
					$data=array(							 	
					'customer'=>$people,
					'customer_id'=>$debt_id,
					'total_debt'=>$total_debt,
					'returnamount'=>$returnamount,
					'balance'=>$balance,
					'paymethod'=>$paymethod,
					'payname'=>$payname,		
					'note'=>$note,						
					'date'=>$date
										
					);

				$query=$this->db->insert('tbl_customer_debt_return',$data);
					
				if($query)
				{

						$qry=$this->db->query("UPDATE tbl_customer SET total_debt=total_debt+'$returnamount',last_date='$date' WHERE id='$debt_id'");
					if($qry)
						{
							$status=1;
						}
						else
						{
							$status=0;
						}
					
					
				}
				else
				{
					$status=0;
				}
	
			}
				 
			if($returntype=="debt_to_supplier")
			{
					$data=array(							 	
					'supplier'=>$people,
					'supplier_id'=>$debt_id,
					'returnamount'=>$returnamount,
					'paymethod'=>$paymethod,
					'payname'=>$payname,		
					'note'=>$note,						
					'date'=>$date
										
					);

				$query=$this->db->insert('tbl_supplier_debt_return',$data);
					
				if($query)
				{
					$qry=$this->db->query("UPDATE tbl_supplier SET total_debt=total_debt+'$returnamount',last_date='$date' WHERE id='$debt_id'");
					if($qry)
						{
							$status=1;
						}
						else
						{
							$status=0;
						}
					
					
				}

				else
				{
					$status=0;
				}
	
			}

			echo $status;
	
	}//

}

 ?>