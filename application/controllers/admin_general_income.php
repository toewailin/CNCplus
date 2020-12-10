<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin_general_income extends CI_Controller {

	/*Add General Income */

	function create_general_income()
	{

		
				//validation check
				//$check=$this->admin_model->validate_staff();
			$check=true;
				$date=date("Y-m-d",strtotime($this->input->post('date')));
				$name=$this->input->post('name');
				$remark=$this->input->post('remark');
				$amount=$this->input->post('amount');

						if($check==true)
						{
							 	$data=array(
							 	
								'name'=>$name,
								'total'=>$amount,
								'remark'=>$remark,
								'date'=>$date

								
								);
								 $query=$this->db->insert('tbl_general_income',$data);
							
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



	/*Add General Income */

	function update_general_income()
	{

		
				//validation check
				$id=$this->input->post("id");
			$check=true;
				$date=date("Y-m-d",strtotime($this->input->post('date')));
				$name=$this->input->post('name');
				$remark=$this->input->post('remark');
				$amount=$this->input->post('amount');

						if($check==true)
						{
							 	$data=array(
							 	
								'name'=>$name,
								'total'=>$amount,
								'remark'=>$remark,
								'date'=>$date

								
								);
								$this->db->where("id",$id);
								 $query=$this->db->update('tbl_general_income',$data);
							
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