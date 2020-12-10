<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin_stock_transfer extends CI_Controller {



/*---------------------------*/
function warehouse1()
	{
			
			$id=$this->input->post('id');

			$warehouse=$this->input->post("warehouse");
			$table1="tbl_".$warehouse;
			$shop=$this->input->post("shop");
			$product_name=$this->input->post('product_name');	
			$product_code=$this->input->post('product_code');		
			$category=$this->input->post('category');
			$quantity=$this->input->post('quantity');
			$price=$this->input->post('price');
			$table_id=$this->input->post('table_id');
			$from=$this->uri->segment(2);
			if($from=="warehouse1")
				{$from="main warehouse"}

			$history=array(
							'warehouse'=>$from,
							'shop'=>$shop,
							'product_code'=>$product_code,
							'product_name'=>$product_name,
							'quantity'=>$quantity,
							'unit'=>$unit

				);

			
						
			$check_stock=$this->admin_model->check_shop_code($product_code);

			if($check_stock->num_rows()==1)
			{




				$updquery=$this->db->query("UPDATE tbl_subwarehouse_stock SET price='$price', quantity=quantity+'$quantity' WHERE product_code='$product_code'");// 
				
				if($updquery)
				{


				$updstock=$this->db->query("UPDATE ".$table." set quantity=quantity-'$quantity' WHERE product_code='$product_code'");
				if($updstock){

					
					$qry=$this->db->insert("tbl_transfer_history",$history);
					if($qry)
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
					$status=0;
				}



				}
				else
				{
					$status=0;
				}


			}

			else
			{

				

				$data=array(
						
						'product_code'=>$product_code,
						'product_name'=>$product_name,	
						'unit'=>$unit,	
						'category'=>$category,
							
						'quantity'=>$quantity,	
						'smallitemcount'=>$smallitemcount,							
						'total_smallitemcount'=>$total_smallitemcount,									
						'price'=>$price									
															
						);



				$query=$this->db->insert('tbl_shop_stock',$data);

				if($query)
				{
						
					$updstock=$this->db->query("UPDATE ".$table." set quantity=quantity-'$quantity', total_smallitemcount=total_smallitemcount-'$total_smallitemcount' WHERE product_code='$product_code' AND unit='$unit'");
					if($updstock){

					
					$qry=$this->db->insert("tbl_transfer_history",$history);
					if($qry)
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
						$status=0;
					}
				}
				else
				{
					$status=0;
					
				}
			}
		
	

				echo $status;
					
		
	}



	function subwarehouse_stock()
	{
			
			$id=$this->input->post('id');

			$warehouse=$this->input->post("warehouse");
			$table1="tbl_".$warehouse;
			$shop=$this->input->post("shop");
			$product_name=$this->input->post('product_name');	
			$product_code=$this->input->post('product_code');		
			$category=$this->input->post('category');
			$quantity=$this->input->post('quantity');
			$price=$this->input->post('price');
			$table_id=$this->input->post('table_id');
			//$table2=$this->input->post('item_count');

			$history=array(
							'warehouse'=>$warehouse,
							'shop'=>$shop,
							'product_code'=>$product_code,
							'product_name'=>$product_name,
							'quantity'=>$quantity,
							'unit'=>$unit

				);

			
						
			$check_stock=$this->admin_model->check_shop_code($product_code);

			if($check_stock->num_rows()==1)
			{




				$updquery=$this->db->query("UPDATE tbl_subwarehouse_stock SET price='$price', quantity=quantity+'$quantity' WHERE product_code='$product_code'");// 
				
				if($updquery)
				{


				$updstock=$this->db->query("UPDATE ".$table." set quantity=quantity-'$quantity' WHERE product_code='$product_code'");
				if($updstock){

					
					$qry=$this->db->insert("tbl_transfer_history",$history);
					if($qry)
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
					$status=0;
				}



				}
				else
				{
					$status=0;
				}


			}

			else
			{

				

				$data=array(
						
						'product_code'=>$product_code,
						'product_name'=>$product_name,	
						'unit'=>$unit,	
						'category'=>$category,
							
						'quantity'=>$quantity,	
						'smallitemcount'=>$smallitemcount,							
						'total_smallitemcount'=>$total_smallitemcount,									
						'price'=>$price									
															
						);



				$query=$this->db->insert('tbl_shop_stock',$data);

				if($query)
				{
						
					$updstock=$this->db->query("UPDATE ".$table." set quantity=quantity-'$quantity', total_smallitemcount=total_smallitemcount-'$total_smallitemcount' WHERE product_code='$product_code' AND unit='$unit'");
					if($updstock){

					
					$qry=$this->db->insert("tbl_transfer_history",$history);
					if($qry)
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
						$status=0;
					}
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