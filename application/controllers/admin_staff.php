<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin_staff extends CI_Controller {



	/*Add Staff Information */

	function create_staff()
	{

		
				//validation check
				//$check=$this->admin_model->validate_staff();
			$check=true;
				$date=$this->session->userdata('date');

						if($check==true)
						{
							 	$data=array(
							 	
								'staff'=>$this->input->post('staff')
								
								
								);
								 $query=$this->db->insert('tbl_staff',$data);
							
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




/*Update Staff Info*/
	function update_staff()
	{
		
				//validation check
				$id=$this->input->post('id');			

			//	$check=$this->admin_model->validate_supplier();
			//	$date=$this->session->userdata('date');
				$check=true;

						if($check==true)
						{
							 	$data=array(
							 	
								'staff'=>$this->input->post('name')
								
								
								);

								$this->db->where('id',$id);
								 $query=$this->db->update('tbl_staff',$data);
							
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

/*******/


}

 ?>