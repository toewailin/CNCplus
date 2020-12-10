<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin_customer extends CI_Controller {


	/*Add Customer Information */

	function create_customer()
	{

		
				//validation check
				$check=$this->admin_model->validate_customer();
				$date=date("Y-m-d");
				$customer=explode("#", $this->input->post('customer_name'));
				if($this->input->post("require") !="" && $this->input->post("require") !=0)
				{
					$total=$this->input->post("require")*-1;
				}
				if($this->input->post("exceed") !="" && $this->input->post("exceed") !=0 )
				{
					$total=$this->input->post("exceed");
				}


					if($this->input->post("require") =="" || $this->input->post("require") ==0)
				{
					$total=0;
				}

				if($this->input->post("exceed") =="" || $this->input->post("exceed") ==0)
				{
					$total=0;
				}
			
			$date=date("Y-m-d",strtotime($this->input->post("date")));

						if($check==true)
						{
							 	$data=array(
							 	
								'customer_name'=>$this->input->post('customer'),
								'address'=>$this->input->post('address'),
								'phone'=>$this->input->post('phone'),
								'contact_person'=>$this->input->post('contact_person'),
								'total_debt'=>$total,
                                'last_date'=>$date,								
								'date'=>$date
								
								);
								 $query=$this->db->insert('tbl_customer',$data);
							
						if($query)
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
					$status=2;
					
				}


				echo $status;
		
		
	}//


/*Update Customer Info*/
	function update_customer()
	{
		
				//validation check
				$id=$this->input->post('id');			

			//	$check=$this->admin_model->validate_supplier();
				$date=date("Y-m-d");
				$check=true;
				if($this->input->post("require") !="" && $this->input->post("require") !=0)
				{
					$total=$this->input->post("require")*-1;
				}
				if($this->input->post("exceed") !="" && $this->input->post("exceed") !=0 )
				{
					$total=$this->input->post("exceed");
				}


					if($this->input->post("require") =="" || $this->input->post("require") ==0)
				{
					$total=0;
				}

				if($this->input->post("exceed") =="" || $this->input->post("exceed") ==0)
				{
					$total=0;
				}
			
			$date=date("Y-m-d",strtotime($this->input->post("date")));

						if($check==true)
						{
							 	$data=array(
							 	
								'customer_name'=>$this->input->post('customer'),
								'address'=>$this->input->post('address'),
								'phone'=>$this->input->post('phone'),
								'contact_person'=>$this->input->post('contact_person'),
								'total_debt'=>$total,
								'last_date'=>$date,
								'date'=>$date
								
								);

								$this->db->where('id',$id);
								 $query=$this->db->update('tbl_customer',$data);
							
						if($query)
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
					$status=2;
					
				}


				echo $status;
		
		
	}//



}

 ?>