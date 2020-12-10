<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin_purchase_multiple extends CI_Controller {



	/* Create Purchase*/

	function create_purchase_multiple()
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
			$category=$this->input->post('category');		
			
			$subwarehouse_id=$this->input->post("subwarehouse_id");
			
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

						$check_stock=$this->admin_model->check_stock("tbl_subwarehouse_stock",$product_code[$i],$unit[$i]);


						if($check_stock->num_rows()==1)
						{
							
							$row=$check_stock->row();
							$previousprice=$row->price;						
							$updqty=$quantity[$i]+$row->quantity;
							$averageprice=(($row->price*$row->quantity)+($price[$i]*$quantity[$i]))/($row->quantity+$quantity[$i]);
							$balance_qty=$row->quantity;							

								$data=array(
									
									'quantity'=>$updqty,
										'price'=>$averageprice,
										'subwarehouse_id'=>$subwarehouse_id,
								        'category'=>$category[$i],

										'date'=>$date
									
										);

							$this->db->where('product_code',$product_code[$i]);
							$query=$this->db->update("tbl_subwarehouse_stock",$data);


							
						}

						else
						{
						
					
					$data=array(
							
								'product_code'=>$product_code[$i],
								'product_name'=>$product_name[$i],
								'unit'=>$unit[$i],
								'quantity'=>$quantity[$i],
								'category'=>$category[$i],
								'subwarehouse_id'=>$subwarehouse_id[$i],
								'price'=>$price[$i],
								'date'=>$date																	
																	
								);
						
						$query=$this->db->insert("tbl_subwarehouse_stock",$data);

											

						
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
									'warehouse'=>$subwarehouse_id[$i],

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
															
									'date'=>$date

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


}

 ?>