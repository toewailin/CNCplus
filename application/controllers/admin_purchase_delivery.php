<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin_purchase_delivery extends CI_Controller {


function create_purchase_delivery()
	{
		
		//validation check
		//$check=$this->admin_model->validate_purchase();
			$check=true;
				if($check==true)
				{

					$voucherno=$this->input->post('voucherno');
					$supplier=explode("#",$this->input->post('supplier'));					
					$date=$this->session->userdata('date');
					$count=count($this->input->post('product_code'));
					$product_name=$this->input->post('product_name');		
					$product_code=$this->input->post('product_code');	
					$price=$this->input->post('price');
					$category=$this->input->post('category');		

					$quantity=$this->input->post('quantity');
					$warehouse=$this->input->post('warehouse');
					$tbl="";
					$tables=array_unique($warehouse);
					foreach($tables as $table):
						$tbl .= $table.",";
					endforeach;
					//$table="tbl_".$warehouse;
					$smallitemcount=$this->input->post("item_count_hidden");
					$unit=$this->input->post('unit');
					$total=$this->input->post('total');
					$netamount=$this->input->post("netamounttosupplier");
					$advance=$this->input->post("advance");
					$balance=$this->input->post("balance");
					$totaldeliver=0;
					for($i=0;$i<$count;$i++)
					{

					$totaldeliver +=$quantity[$i];
						
						if($product_code[$i] !="" && $product_name[$i] !="")
						{ 
						
						$check_stock=$this->admin_model->check_stock("tbl_".$warehouse[$i],$product_code[$i],$unit[$i]);


						if($check_stock->num_rows()==1)
						{
							
							$row=$check_stock->row();
							$previousprice=$row->price;						
							$updqty=$quantity[$i]+$row->quantity;
							$updsmallitem=($smallitemcount[$i]*$quantity[$i])+$row->total_smallitemcount;
						//	$averageprice=(($row->price*$row->quantity)+($amountforeachunit[$i]*$quantity[$i]))/($row->quantity+$totalqty[$i]);
						//	$averagesmallitemprice=($averageprice/$smallitemcount[$i]);
							$balance_qty=$row->quantity;							

								$data=array(
									
									'quantity'=>$updqty,
									'total_smallitemcount'=>$updsmallitem,
										'price'=>$price[$i],
										'category'=>$category[$i]
									
										);

							$this->db->where('product_code',$product_code[$i]);
							$this->db->where("unit",$unit[$i]);
							$query=$this->db->update("tbl_".$warehouse[$i],$data);


						
						}

						else
						{
						
						//$balance_qty=0;
					
						$data=array(
							
								'product_code'=>$product_code[$i],
								'product_name'=>$product_name[$i],
								'unit'=>$unit[$i],
								'quantity'=>$quantity[$i],
								'category'=>$category[$i],

								'smallitemcount'=>$smallitemcount[$i],
								'total_smallitemcount'=>$smallitemcount[$i]*$quantity[$i],
								'price'=>$price[$i]																	
																	
								);
						
						$query=$this->db->insert("tbl_".$warehouse[$i],$data);
											

						
							}	

							if($query)
							{

							$qry=$this->db->query("UPDATE tbl_purchase_order set requirequantity=requirequantity-$quantity[$i] WHERE voucherno='$voucherno' AND product_code='$product_code[$i]' AND unit='$unit[$i]'");
							if($qry)
							{


							$data=array(
									
									'product_name'=>$product_name[$i],
									'product_code'=>$product_code[$i],
									'price'=>$price[$i],
									'quantity'=>$quantity[$i],
									'unit'=>$unit[$i],
									'item_count'=>$smallitemcount[$i],
									'total'=>$total[$i],									
									'voucherno'=>$voucherno,
									'warehouse'=>$warehouse[$i],

									'date'=>$date
									
									);						

						$query=$this->db->insert('tbl_purchase',$data);



							}
						}		
							
					}
						

					}

					
						if($query)
						{
							
							$data=array(

									'voucherno'=>$voucherno,
									'supplier_id'=>$supplier[1],
									'supplier'=>$supplier[0],
									'totalqty'=>$totaldeliver	,
									'nettotal'=>$netamount	,
									//'totaldebt'=>$totaldebt,				
									//'received'=>$received	,
									//'balance'=>$balance	,									
									'date'=>$date,
/*									'delivery'=>$delivery,
*/									'warehouse'=>$tbl						

										);

							$query=$this->db->insert("tbl_purchase_header",$data);

							
						
							$data=array(

									'voucherno'=>$voucherno,
									'supplier_id'=>$supplier[1],
									'supplier'=>$supplier[0],
									'totalqty'=>$totaldeliver,
									'netamount'=>$netamount,		
									'advance'=>$advance	,
									'balance'=>$balance	,
																	
									'date'=>$date								

										);

							$query=$this->db->insert("tbl_purchase_deliver_header",$data);
							if($query)
							{
									
								if( !empty($balance) || $balance !=0)
								{
										$this->db->query("UPDATE tbl_supplier SET total_debt='$balance', last_date='$date' WHERE id='$supplier[1]'");
									
								}

						$totaldeliver=$this->db->select_sum("requirequantity")->get_where("tbl_purchase_order",array("voucherno"=>$voucherno))->row();
						
						if($totaldeliver->requirequantity==0)

						{
							$query=$this->db->query("UPDATE tbl_purchase_order_header set status=1 WHERE voucherno='$voucherno'");
							if($query)
							{
								$status=1;
							}
							else
							{
								$status=0;
							}
						}
								$status=1;
																
						}

							
			}
		}

			else
			{
				$status=2;
				
			}


		echo $status;
		
	}//Purchasing Form Data Insert finish here


}

 ?>