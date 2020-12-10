<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin_consinement_stock extends CI_Controller {

/*Create Stock*/
	

	function create_consinement_stock()
	{
				//validation check
				$check=$this->admin_model->validate_stock();

				if($check==true)
				{

					$count=count($this->input->post('product_name'));
					$product_name=$this->input->post('product_name');	
					$product_code=$this->input->post('product_code');		
					$unit=$this->input->post('unit');
					$quantity=$this->input->post('quantity');
					$price=$this->input->post('price');
					$category=$this->input->post('category');
					$consinement_id=$this->input->post('consinement_id');

					$totalqty=0;
					$table="tbl_consinement_stock";
					$date=date("Y-m-d",strtotime($this->input->post("date")));
					
					
					for($i=0;$i<$count;$i++)
					{

						if($product_code[$i] !="" && $product_name[$i] !="")
						{

						$data=array(
							
								'product_code'=>$product_code[$i],
								'product_name'=>$product_name[$i],
								'unit'=>$unit[$i],
								'quantity'=>$quantity[$i],
								'category'=>$category[$i],
								'consinement_id'=>$consinement_id,
								'price'=>$price[$i],
								'date'=>$date																	
																	
								);
						
						$query=$this->db->insert($table,$data);

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



				}

				echo $status;

			}

		
	}


	/**/




	/*Update Stock*/

	function update_consinement_stock()
	{
				$id=$this->input->post('id');



				
					$product_name=$this->input->post('product_name');	
					$product_code=$this->input->post('product_code');		
					$unit=$this->input->post('unit');
					$quantity=$this->input->post('quantity');
					$price=$this->input->post('price');
					$category=$this->input->post('category');

					$totalqty=0;
					$table="tbl_consinement_stock";
					$date=date("Y-m-d",strtotime($this->input->post("date")));
					
				
						$data=array(
							
								'product_code'=>$product_code,
								'product_name'=>$product_name,
								'unit'=>$unit,
								'quantity'=>$quantity,
								'category'=>$category,
								'price'=>$price,
								'date'=>$date																	
																	
								);
						
						$this->db->where('id',$id);
						$query=$this->db->update('tbl_consinement_stock',$data) or die(mysql_error());
			
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

				

			

}

 ?>