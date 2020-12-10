<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin_purchase_order extends CI_Controller {


/*Create Sale Order*/

	


	/*Create Purchase Order*/

	function create_purchase_order()
	{
			//validation check
				$check=$this->admin_model->validate_purchase_order();

				if($check==true)
				{

					$count=count($this->input->post('product_name'));
					$product_name=$this->input->post('product_name');
					$product_code=$this->input->post('product_code');
					$quantity=$this->input->post('quantity');
					$unit=$this->input->post('unit');		
					$category=$this->input->post('category');		
					$price=$this->input->post('price');	
					$total=$this->input->post('total');		
					$supplier=explode("#",$this->input->post('supplier'));
					$voucherno=$this->input->post('voucherno');
					$smallitemcount=$this->input->post('item_count_hidden');
					$netamount=$this->input->post('netamount');
					$advance=$this->input->post('advance');
					//$balance=$this->input->post('balance');
					$date=date("Y-m-d",strtotime($this->input->post('date')));	
					$totalqty=0;
				
					for($i=0;$i<$count;$i++)
					{
							$totalqty +=$quantity[$i];
						$data=array(
									'voucherno'=>$voucherno,									
									'product_code'=>$product_code[$i],
									'product_name'=>$product_name[$i],
									'orderquantity'=>$quantity[$i],
									'requirequantity'=>$quantity[$i],
									'smallitemcount'=>$smallitemcount[$i],
									'unit'=>$unit[$i],	
									'category'=>$category[$i],	
									'price'=>$price[$i],			
									'total'=>$total[$i],							
									'date'=>$date,
									);


				$query=$this->db->insert('tbl_purchase_order',$data);

				if($query)
				{

					$status=1;
				}

				else
				{
					
					$status=0;
					

				}
			

			}

					if($query)
					{


							$data=array(
										'voucherno'=>$voucherno,
										'supplier_id'=>$supplier[1],
										'supplier'=>$supplier[0],
										'totalqty'=>$totalqty,
										'netamounttosupplier'=>$netamount,
										'advance'=>$advance,
									//	'balance'=>$balance,
										'date'=>$date

										);
										$qry=$this->db->insert('tbl_purchase_order_header',$data);

							if($qry)
							{
								if( !empty($advance) || $advance !=0)
								{
										$this->db->query("UPDATE tbl_supplier SET total_debt=total_debt-'$advance', last_date='$date' WHERE id='$supplier[1]'");
									
								}

						$vdata=array("voucherno"=>"");
						$this->db->insert("tbl_po",$vdata);
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
		
	}




}

 ?>