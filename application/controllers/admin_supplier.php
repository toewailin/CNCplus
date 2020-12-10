<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin_supplier extends CI_Controller {



	/*Add Supplier Information */

	function create_supplier()
	{
		
				//validation check
				$check=$this->admin_model->validate_supplier();
				$date=$this->session->userdata('date');
				if($this->input->post("require") !="" && $this->input->post("require") !=0)
				{
					$total=$this->input->post("require")*-1;
				}
				else if($this->input->post("require") =="" || $this->input->post("require") ==0)
				{
					$total=0;
				}


				if($this->input->post("exceed") !="" && $this->input->post("exceed") !=0 )
				{
					$total=$this->input->post("exceed");
				}


					

				else if($this->input->post("exceed") =="" || $this->input->post("exceed") ==0)
				{
					$total=0;
				}
			


			$date=date("Y-m-d",strtotime($this->input->post("date")));


						if($check==true)
						{
							 	$data=array(
							 	
								'supplier_name'=>$this->input->post('supplier'),
								'address'=>$this->input->post('address'),
								'phone'=>$this->input->post('phone'),
								'contact_person'=>$this->input->post('contact_person'),
								'total_debt'=>$total,	
                                 'last_date'=>$date,
								'date'=>$date
								
								);

								 $query=$this->db->insert('tbl_supplier',$data);
							
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

	

/*Update Supplier Information */

	function update_supplier()
	{
		
				//validation check
				$id=$this->input->post('id');			

			//	$check=$this->admin_model->validate_supplier();
				$date=$this->session->userdata('date');
				$check=true;
				if($this->input->post("require") !="" && $this->input->post("require") !=0)
				{
					$total=$this->input->post("require")*-1;
				}
				else if($this->input->post("require") =="" || $this->input->post("require") ==0)
				{
					$total=0;
				}


				if($this->input->post("exceed") !="" && $this->input->post("exceed") !=0 )
				{
					$total=$this->input->post("exceed");
				}


					

				else if($this->input->post("exceed") =="" || $this->input->post("exceed") ==0)
				{
					$total=0;
				}
			
			$date=date("Y-m-d",strtotime($this->input->post("date")));

						if($check==true)
						{
							 	$data=array(
							 	
								'supplier_name'=>$this->input->post('supplier'),
								'address'=>$this->input->post('address'),
								'phone'=>$this->input->post('phone'),
								'contact_person'=>$this->input->post('contact_person'),								
								'total_debt'=>$total,
								'last_date'=>$date,

								'date'=>$date
								
								);
								$this->db->where('id',$id);
								 $query=$this->db->update('tbl_supplier',$data);
							
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