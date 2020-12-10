<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin_purchase_multiple_return extends CI_Controller {


/*Purchase Returns*/
	
	function create_purchase_multiple_return()
	{

			$product_name=$this->input->post('product_name');
			$count=count($this->input->post("product_code"));
			$product_code=$this->input->post('product_code');		
			$price=$this->input->post('price');	
			$quantity=$this->input->post('quantity');
			$category=$this->input->post('category');

			$smallitemcount=$this->input->post('item_count_hidden');
			$unit=$this->input->post('unit');
			$voucherno=$this->input->post('voucherno');
			$date=date("Y-m-d",strtotime($this->input->post("date")));
			$supplier=explode("#",$this->input->post('supplier'));	
			$warehouse=$this->input->post("warehouse");	
			$table="tbl_".$warehouse;
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

						$check_stock=$this->admin_model->check_stock($table,$product_code[$i],$unit[$i]);


						if($check_stock->num_rows()==1)
						{
							
							$row=$check_stock->row();
						//	$previousprice=$row->price;						
							$updqty=$row->quantity-$quantity[$i];
							$updsmallitem=$row->total_smallitemcount-($smallitemcount[$i]*$quantity[$i]);
						

						$data=array(
							
								'product_code'=>$product_code[$i],
								'product_name'=>$product_name[$i],
								'unit'=>$unit[$i],
								'quantity'=>$quantity[$i],
								'smallitemcount'=>$smallitemcount[$i],								
								'price'=>$price[$i]	,
								'category'=>$category[$i]	,
								'voucherno'=>$voucherno,
								'total'=>$total[$i],
								'date'=>$date					

																	
								);
						
						$query=$this->db->insert('tbl_purchase_return',$data);

						if($query)
						{
							$data=array(
									
									'quantity'=>$updqty,
									'total_smallitemcount'=>$updsmallitem,
									'category'=>$category[$i]	,

																			
										);

							$this->db->where('product_code',$product_code[$i]);
							$this->db->where("unit",$unit[$i]);
							$query=$this->db->update('tbl_'.$warehouse,$data);

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
					'supplier_id'=>$supplier[1],
					'supplier'=>$supplier[0],
					'totalqty'=>$totalqty	,
					'warehouse'=>$warehouse	,
					'nettotal'=>$nettotal	,
					'note'=>$note,			
					'date'=>$date,
					'authority'=>$authority
									

						);

				$query=$this->db->insert("tbl_purchase_return_header",$data);
							
				if($query)
				{
					$vdata=array("voucherno"=>"");
						$this->db->insert("tbl_pr",$vdata);
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