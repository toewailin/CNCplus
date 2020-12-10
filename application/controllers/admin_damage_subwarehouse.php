<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin_damage_subwarehouse extends CI_Controller {




	function create_damage_subwarehouse()
	{
	
				//validation check
				$check=$this->admin_model->validate_damage();

						if($check==true)
						{
							 	
						$count=count($this->input->post('product_name'));
						$product_name=$this->input->post('product_name');
						$product_code=$this->input->post('product_code');
						$quantity=$this->input->post('quantity');
						$category=$this->input->post('category');
						$subwarehouse_id=$this->input->post('subwarehouse_id');

						$unit=$this->input->post('unit');
						$authority=$this->input->post('user');
						$date=$this->input->post('date');

							 	for($i=0;$i<$count;$i++)
									{

										$check_price=$this->admin_model->get_purchase_price("product_price",$product_code[$i]);


										if($check_price->num_rows()>=1)

										{
												
											$row=$check_price->row();											
											

										$data=array(
										
										'product_code'=>$product_code[$i],
										'product_name'=>$product_name[$i],										
										'quantity'=>$quantity[$i],	
										'category'=>$category[$i],
										'amountforeachunit'=>$row->average_smallitem_price,
										'total'=>$quantity[$i]*$row->average_smallitem_price,								
										'unit'=>$unit[$i],										
										'subwarehouse_id'=>$subwarehouse_id[$i],										
										'date'=>$date,
										'authority'=>$authority
												);

										$query=$this->db->insert('tbl_damage_subwarehouse',$data);

										if($query)
										{

												
												$query=$this->db->query("UPDATE tbl_subwarehouse_stock SET quantity=quantity-'$quantity' WHERE product_code='".$product_code[$i]."' AND subwarehouse_id='".$subwarehouse_id[$i]."'");
												
												if($query)
												{$status=1;}
										}
										
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



}

 ?>