<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin_damage_warehouse1 extends CI_Controller {





	function create_damage_warehouse1()
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
										'date'=>$date,
										'authority'=>$authority
												);

										$query=$this->db->insert('tbl_damage_warehouse1',$data);

										if($query)
										{

											$row=$this->db->get_where("tbl_unit",array("product_code"=>$product_code[$i],"unit"=>$unit[$i]))->row();
											//echo $this->db->last_query();
											$smallitemcount=$row->smallest_itemcount;
										 	$total_smallitemcount=$smallitemcount*$quantity[$i];

												
												$query=$this->db->query("UPDATE tbl_warehouse1 SET total_smallitemcount=total_smallitemcount-'$total_smallitemcount', quantity=floor(total_smallitemcount/smallitemcount)  WHERE product_code='".$product_code[$i]."'");
												
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



 ?>