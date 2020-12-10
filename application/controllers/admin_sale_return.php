<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin_sale_return extends CI_Controller {


/*Sale Returns*/
	
	function create_sale_return()
	{

		$product_name=$this->input->post('product_name');
			$count=count($this->input->post("product_code"));
			$product_code=$this->input->post('product_code');		
			$price=$this->input->post('price');	
			$category=$this->input->post('category');	
			$quantity=$this->input->post('quantity');
			$smallitemcount=$this->input->post('item_count_hidden');
			$unit=$this->input->post('unit');
			$voucherno=$this->input->post('voucherno');
			$date=date("Y-m-d",strtotime($this->input->post("date")));
			$customer=explode("#",$this->input->post('customer'));	
			$note=$this->input->post("note");	
			$total=$this->input->post('total');
			$authority=$this->session->userdata("AdminUser");
			$totalqty=0;
			$nettotal=0;
			$status=0;

			for($i=0;$i<$count;$i++)
			{

				if($product_code[$i] !="" && $product_name[$i] !="")
					{
						
						$totalqty +=$quantity[$i];
						$nettotal +=$total[$i];

						$check_stock=$this->admin_model->check_shop_stock($product_code[$i],$unit[$i]);


						if($check_stock->num_rows()==1)
						{
							
							$row=$check_stock->row();
						//	$previousprice=$row->price;						
							$updqty=$row->quantity+$quantity[$i];
							$updsmallitem=$row->total_smallitemcount+($smallitemcount[$i]*$quantity[$i]);
						

						$data=array(
							
								'product_code'=>$product_code[$i],
								'product_name'=>$product_name[$i],
								'unit'=>$unit[$i],
								'category'=>$category[$i],
								'quantity'=>$quantity[$i],
								'smallitemcount'=>$smallitemcount[$i],								
								'price'=>$price[$i]	,
								'voucherno'=>$voucherno,
								'total'=>$total[$i],
								'date'=>$date					

																	
								);
						
						$query=$this->db->insert('tbl_sale_return',$data);

						if($query)
						{
							$data=array(
									
									'quantity'=>$updqty,
									'category'=>$category[$i],
									'total_smallitemcount'=>$updsmallitem,
																			
										);

							$this->db->where('product_code',$product_code[$i]);
							$this->db->where("unit",$unit[$i]);
							$query=$this->db->update('tbl_shop_stock',$data);

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

			}


			if($status==1)
			{
				$data=array(

					'voucherno'=>$voucherno,
					'customer_id'=>$customer[1],
					'customer'=>$customer[0],
					'totalqty'=>$totalqty	,
					'nettotal'=>$nettotal	,
					'note'=>$note,			
					'date'=>$date,
					'authority'=>$authority
									

						);

				$query=$this->db->insert("tbl_sale_return_header",$data);
							
				if($query)
				{
					$vdata=array("voucherno"=>"");
						$this->db->insert("tbl_sr",$vdata);
					$status=1;
				}
				else
				{
					$status=0;
				}
			}

			echo $status;

	}



}

 ?>