<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin_unit extends CI_Controller {


	
function create_unit()
	{
				//validation check
				$check=$this->admin_model->validate_unit();
					if(!empty($_FILES['userfile']['name']))
						{

						$this->admin_model->img_upload("userfile",'photo');
						 $photo=$_FILES['userfile']['name'];
						}
						else
						{
							$photo="";
						}	
						echo $photo;


						if($check==true)
						{
							 	$data=array(
							 	
							 	'product_code'=>$this->input->post('product_code'),
								'product_name'=>$this->input->post('product_name'),
								'photo'=>$photo,										
								'category'=>$this->input->post("category"),
								'unit'=>$this->input->post('unit'),
								'price'=>$this->input->post('price'),
								'smallest_itemcount'=>$this->input->post('smallest_itemcount')
								
							
								);

								 $query=$this->db->insert('tbl_unit',$data);
							
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


				//echo $status;
				redirect("admin/data_list/unit");
		
	}//


	
	function update_unit()
	{
		
		
			$id=$this->input->post('id');

						$check=true;
						if($check==true)
						{

						if(!empty($_FILES['userfile']['name']))
						{

						$this->admin_model->img_upload("userfile",'photo');
						$photo=$_FILES['userfile']['name'];
						}
						else
						{
							$photo=$this->input->post("photo");
						}	

						$data=array(
										'product_code'=>$this->input->post('product_code'),
										'product_name'=>$this->input->post('product_name'),
										'photo'=>$photo,									
										'category'=>$this->input->post("category"),
										'unit'=>$this->input->post('unit'),
										'price'=>$this->input->post('price'),
										'smallest_itemcount'=>$this->input->post('smallest_itemcount')
																
									);	


						$this->db->where('id',$id);
						$query=$this->db->update('tbl_unit',$data);
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

				redirect("admin/data_list/unit");
				//echo $status;
			
	}//




}

 ?>