<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin_shop_stock extends CI_Controller {

/*Update Stock*/


/****************/

	function create_shop_stock()
	{
		
				//validation check
				$check=$this->admin_model->validate_stock();

				if($check==true)
				{

					$count=count($this->input->post('product_name'));
					$product_name=$this->input->post('product_name');	
					$product_code=$this->input->post('product_code');		
					$category=$this->input->post('category');		
					$unit=$this->input->post('unit');
					$quantity=$this->input->post('quantity');
					$price=$this->input->post('price');
					$totalqty=0;
					$smallitemcount=$this->input->post('item_count');
					$total_smallitemcount=$this->input->post('total_smallitemcount');
					$table="tbl_shop_stock";
					$date=date("Y-m-d");
					
					
					for($i=0;$i<$count;$i++)
					{

						if($product_code[$i] !="" && $product_name[$i] !="")
						{
						

						$totalqty+=$quantity[$i];

						$check_stock=$this->admin_model->check_stock($table,$product_code[$i],$unit[$i]);


						if($check_stock->num_rows()==1)
						{
							
							$row=$check_stock->row();
							$previousprice=$row->price;						
							$updqty=$quantity[$i]+$row->quantity;
							$updsmallitem=$total_smallitemcount[$i]+$row->total_smallitemcount;
							$averageprice=(($row->price*$row->quantity)+($price[$i]*$quantity[$i]))/($row->quantity+$quantity[$i]);
							$averagesmallitemprice=($averageprice/$smallitemcount[$i]);
							$balance_qty=$row->quantity;							

								$data=array(
									
									'quantity'=>$updqty,
									'total_smallitemcount'=>$updsmallitem,
										'price'=>$averageprice,
										/*'date'=>$date*/
									
										);

							$this->db->where('product_code',$product_code[$i]);
							$this->db->where("unit",$unit[$i]);
							$query=$this->db->update($table,$data);


						if($query)
								{
									$status=1;
								}
								else
								{
									$status=2;
								}
						}

						else
						{
						
						//$balance_qty=0;
					
						$data=array(
							
								'product_code'=>$product_code[$i],
								'product_name'=>$product_name[$i],
								'category'=>$category[$i],
								'unit'=>$unit[$i],
								'quantity'=>$quantity[$i],
								'smallitemcount'=>$smallitemcount[$i],
								'total_smallitemcount'=>$total_smallitemcount[$i],
								'price'=>$price[$i]																	
																	
								);
						
						$query=$this->db->insert($table,$data);

							if($query)
								{
									$status=1;
								}
								else
								{
									$status=2;
								}
						


						
							}
							
							
						}


						else
						{
							
							$status=2;
						}
					}
				}
				

				echo $status;

				
		
	}


		/**/

function update_shop_stock()
	{
			
			$id=$this->input->post('id');

			$product_name=$this->input->post('product_name');	
			$product_code=$this->input->post('product_code');		
			$unit=$this->input->post('unit');
			$quantity=$this->input->post('quantity');
			$price=$this->input->post('price');
			$smallitemcount=$this->input->post('item_count');
			$total_smallitemcount=$this->input->post('total_smallitemcount');

			$data=array(
						'product_name'=>$product_name,
						'product_code'=>$product_code,
						'unit'=>$unit,
						'price'=>$price,
						'quantity'=>$quantity,
						'smallitemcount'=>$smallitemcount,
						'total_smallitemcount'=>$total_smallitemcount,

												
						);	


			$this->db->where('id',$id);
			$query=$this->db->update('tbl_shop_stock',$data) or die(mysql_error());
			if($query)
			{

				$this->db->where("product_code",$product_code);
				$this->db->where("unit",$unit);
				$this->db->where("iscurrent",1);
				//$query=$this->db->update('tbl_product_price',array("addup_qty"=>$this->input->post('old_quantity')));
				/*$data["errmessage"]="successfully save";*/

				$query=$this->db->update("tbl_product_price",array("purchase_price"=>$price,"average_purchase_price"=>$price,"average_smallitem_price"=>($price/$smallitemcount)));
				$status=1;
				//echo "successfully saved";
			}

			else
			{
				/*$data["errmessage"]="fail to save";*/
				$status=0;
				//echo "fail to save";

			}
			

		

		echo $status;
					
		
	}


}

 ?>