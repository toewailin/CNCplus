<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin_damage_showroom extends CI_Controller {


	
	function create_damage_showroom()
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
						$consinement_id=$this->input->post('consinement_id');

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
										'consinement_id'=>$consinement_id[$i],										
										'date'=>$date,
										'authority'=>$authority
												);

										$query=$this->db->insert('tbl_damage_showroom',$data);

										if($query)
										{


												
												$query=$this->db->query("UPDATE tbl_consinement_stock SET quantity=quantity-'$quantity' WHERE product_code='".$product_code[$i]."' AND consinement_id='".$consinement_id[$i]."'");
												
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