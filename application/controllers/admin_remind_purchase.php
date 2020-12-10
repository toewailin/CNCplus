<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin_remind_purchase extends CI_Controller {




	function create_remind_purchase()
	{
		
				//validation check

				$check=$this->admin_model->validate_remind_purchase();

				if($check==true)

				{
						
					$count=count($this->input->post('product_code'));							
					$product_code=$this->input->post('product_code');								
					$product_name=$this->input->post('product_name');								
					$unit=$this->input->post('unit');					
					$atleastqty=$this->input->post('quantity');
					
							
					for($i=0;$i<$count;$i++)
					{

						if($product_code[$i] !="" && $product_name[$i] !="")
						{
							$data=array(
										
										'product_code'=>$product_code[$i],											
										'product_name'=>$product_name[$i],
										'unit'=>$unit[$i],
										'atleastqty'=>$atleastqty[$i]
										
										);
		
							$query=$this->db->insert('tbl_remind_purchase',$data);

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

					
			}
		else
					{
						$status=2;
						
					}
				

				echo $status;
			
		
	}//

	

	function update_remind_purchase()
	{	
		

			$id=$this->input->post("id");
			$check=true;
			if($check==true)
			{
				
				$data=array(
							'product_code'=>$this->input->post('product_code'),
							'product_name'=>$this->input->post('product_name'),								
							'unit'=>$this->input->post('unit'),
							'atleastqty'=>$this->input->post('atleastqty')
							
							);

							$this->db->where("id",$id);
							$query=$this->db->update('tbl_remind_purchase',$data);
						
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