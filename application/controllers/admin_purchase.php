<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin_purchase extends CI_Controller {



	function create_purchase()
	{
		

			$check=true;
			
			if($check==true)
			{

			$count=count($this->input->post('product_name'));
			$product_name=$this->input->post('product_name');
			$product_code=$this->input->post('product_code');		
			$price=$this->input->post('price');	
			$quantity=$this->input->post('quantity');
			$unit=$this->input->post('unit');
			$total=$this->input->post('total');
			$nettotal=$this->input->post('nettotal');		
			$smallitemcount=$this->input->post('item_count_hidden');
			$category=$this->input->post('category');		
	
			$delivery=$this->input->post('delivery');
	
			$warehouse=$this->input->post("warehouse");
			$table="tbl_".$warehouse;
			$amount=0;
			$totalqty=0;
			$authority=$this->input->post('authority');
			$totalamount=$this->input->post('totalamount');
			$exceedamount=$this->input->post('exceedamount');
			$date=date("Y-m-d",strtotime($this->input->post("date")));

			$voucherno=$this->input->post('voucherno');
			$supplier=explode("#",$this->input->post('supplier'));		

			 date_default_timezone_set("Asia/Rangoon"); 
  			  $vdate= date('d-m-Y h:i:s'); //Returns IST
					
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
							$averageprice=(($row->price*$row->quantity)+($price[$i]*$quantity[$i]))/($row->quantity+$quantity[$i]);

								$data=array(
									
									'quantity'=>$updqty,
										'price'=>$averageprice,
										'category'=>$category[$i],
										'date'=>$date
									
										);

							$this->db->where('product_code',$product_code[$i]);
							$this->db->where("unit",$unit[$i]);
							$query=$this->db->update($table,$data);


							
						}

						else
						{
						
					
						$data=array(
							
								'product_code'=>$product_code[$i],
								'product_name'=>$product_name[$i],
								'category'=>$category[$i],
								'unit'=>$unit[$i],
								'quantity'=>$quantity[$i],
								'price'=>$price[$i]	,
								'date'=>$date																
																	
								);

						$query=$this->db->insert($table,$data);
						
										
							}
							
							
						}

						
						$data=array(
									
									'product_name'=>$product_name[$i],
									'product_code'=>$product_code[$i],
									'price'=>$price[$i],
									'quantity'=>$quantity[$i],
									'unit'=>$unit[$i],
									'total'=>$total[$i],									
									'voucherno'=>$voucherno,
									'date'=>$date
									
									);						

						$query=$this->db->insert('tbl_purchase',$data);
					
					}

					
						if($query)
						{

						
							$data=array(

									'voucherno'=>$voucherno,
									'supplier_id'=>$supplier[1],
									'supplier'=>$supplier[0],
									'totalqty'=>$totalqty	,
									'nettotal'=>$nettotal	,
																
									'date'=>$date,
									'delivery'=>$delivery,
									'warehouse'=>$warehouse						

										);

							$query=$this->db->insert("tbl_purchase_header",$data);
							if($query)
							{
								
								$vdata=array("voucherno"=>"");
							$this->db->insert("tbl_p",$vdata);
								$status=1;
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
		
	}//Purchasing Form Data Insert finish here




/*
	function create_purchase()
	{
		
		//$check=$this->admin_model->validate_purchase();
			$check=true;
				if($check==true)
			{

			$count=count($this->input->post('product_name'));
			$product_name=$this->input->post('product_name');
			$product_code=$this->input->post('product_code');		
			$price=$this->input->post('price');	
			$quantity=$this->input->post('quantity');
			$unit=$this->input->post('unit');
			$total=$this->input->post('total');
			$nettotal=$this->input->post('nettotal');		
			$smallitemcount=$this->input->post('item_count_hidden');
			$category=$this->input->post('category');		
			$delivery=$this->input->post('delivery');
			$warehouse=$this->input->post("warehouse");
			$tbl="";
			$tables=array_unique($warehouse);
			foreach($tables as $table):
				$tbl .= $table.",";
			endforeach;
			$amount=0;
			$totalqty=0;
			$authority=$this->input->post('authority');
			$totalamount=$this->input->post('totalamount');
			$exceedamount=$this->input->post('exceedamount');
			$date=date("Y-m-d",strtotime($this->input->post("date")));

				$voucherno=$this->input->post('voucherno');
					$supplier=explode("#",$this->input->post('supplier'));		

			 date_default_timezone_set("Asia/Rangoon"); 
  			  $vdate= date('d-m-Y h:i:s'); //Returns IST
					
					for($i=0;$i<$count;$i++)
					{

					
						
						if($product_code[$i] !="" && $product_name[$i] !="")
						{
						

						$totalqty+=$quantity[$i];

						$check_stock=$this->admin_model->check_stock("tbl_".$warehouse[$i],$product_code[$i],$unit[$i]);


						if($check_stock->num_rows()==1)
						{
							
							$row=$check_stock->row();
							$previousprice=$row->price;						
							$updqty=$quantity[$i]+$row->quantity;
							$updsmallitem=($smallitemcount[$i]*$quantity[$i])+$row->total_smallitemcount;
							$averageprice=(($row->price*$row->quantity)+($price[$i]*$quantity[$i]))/($row->quantity+$quantity[$i]);
							$averagesmallitemprice=($averageprice/$smallitemcount[$i]);
							$balance_qty=$row->quantity;							

								$data=array(
									
									'quantity'=>$updqty,
									'total_smallitemcount'=>$updsmallitem,
										'price'=>$averageprice,
										'date'=>$date
									
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
								'category'=>$category[$i],
								'quantity'=>$quantity[$i],
								'smallitemcount'=>$smallitemcount[$i],
								'total_smallitemcount'=>$smallitemcount[$i]*$quantity[$i],
								'price'=>$price[$i]																	
																	
								);
						
						$query=$this->db->insert("tbl_".$warehouse[$i],$data);

											

						
							}
							
							
						}

						
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

					
						if($query)
						{

						
							$data=array(

									'voucherno'=>$voucherno,
									'supplier_id'=>$supplier[1],
									'supplier'=>$supplier[0],
									'totalqty'=>$totalqty	,
									'nettotal'=>$nettotal	,																		
									'date'=>$date,
									'delivery'=>$delivery,
									'warehouse'=>$tbl						

										);

							$query=$this->db->insert("tbl_purchase_header",$data);
							if($query)
							{
								
								$vdata=array("voucherno"=>"");
							$this->db->insert("tbl_p",$vdata);
								$status=1;
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
		
	}//Purchasing Form Data Insert finish here

*/
}

 ?>