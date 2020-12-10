<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin_general_outcome extends CI_Controller {

	/*Create New General Outcomes*/

	function create_general_outcome()
	{
		
				$check=$this->admin_model->validate_general_outcome();

						if($check==true)
						{
							 
							$count=count($this->input->post('description'));
							$description=$this->input->post('description');
							$quantity=$this->input->post('quantity');
							$price=$this->input->post('price');
							$total=$this->input->post('total');
							$date=$this->session->userdata('date');
							$authority=$this->input->post('authority');			
							$outcome_category=$this->input->post('outcome_category');				

						
						for($i=0;$i<$count;$i++)
							{
								$data=array(
								
								'description'=>$description[$i],
								'price'=>$price[$i],
								'quantity'=>$quantity[$i],
								'total'=>$total[$i],
								'date'=>$date,
								'authority'=>$authority[$i],
								'outcome_category'=>$outcome_category[$i]

								);

								$query=$this->db->insert('tbl_general_outcome',$data);
								if($query)
								{

								$status=1;
								
								}

								else
								{
									
									$status=0;									

								}						
					

							}
				
				}
					

				else
				{
					$status=2;
					
				}


				echo $status;
		

	}//
	

	
	/*Update General Outcome*/


	function update_general_outcome()
	{
			
			if($this->session->userdata("AdminUser") && $this->session->userdata("AdminPass") && $this->session->userdata("authority")=='administrator')
		{
		
			$id=$this->input->post('id');

						$data=array(
									'description'=>$this->input->post("description"),														
									'price'=>$this->input->post("price"),
									'quantity'=>$this->input->post("quantity"),
									'total'=>$this->input->post("total"),	
									'authority'=>$this->input->post("authority"),
									'outcome_category'=>$this->input->post("outcome_category"),
									'date'=>$this->input->post("date")
															
									);	


						$this->db->where('id',$id);
						$query=$this->db->update('tbl_general_outcome',$data);
					if($query)
						{

							$status=1;
							
						}

						else
						{
							
							$status=0;
							

						}

						echo $status;
					
					
		}
		else
		{
			$data["message"]="Login to access this page";
			$this->load->view("login_form",$data);
		}
	}

}

 ?>