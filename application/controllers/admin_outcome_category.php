<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin_outcome_category extends CI_Controller {

function create_outcome_category()
	{
		
		
				//validation check
				$check=$this->admin_model->validate_outcome_category();

						if($check==true)
						{
							
							 	$data=array(
							 
								'title'=>$this->input->post('title'),
								'amount'=>$this->input->post('amount')
								
								);
								 $query=$this->db->insert('tbl_outcome_category',$data);
							
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
		}
		
	



	/*Update Outcome Category*/

	function update_outcome_category()
	{
		
			//validation check
				$check=$this->admin_model->validate_outcome_category();
					$id=$this->input->post('id');

						if($check==true)
						{
							
							 	$data=array(
							 
								'title'=>$this->input->post('title'),
								'amount'=>$this->input->post('amount')
								
								);

								$this->db->where('id',$id);
								 $query=$this->db->update('tbl_outcome_category',$data);
							
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
	


}

}

 ?>