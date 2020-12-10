<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin_consinement_sale extends CI_Controller {

/*Create Stock*/
	

	function create_consinement_sale()
	{
				
					$this->load->model("cashier_model");
					$count=count($this->input->post('product_name'));
					$product_name=$this->input->post('product_name');	
					$product_code=$this->input->post('product_code');		
					$unit=$this->input->post('unit');
					$quantity=$this->input->post('quantity');
					$price=$this->input->post('price');
					$discount=$this->input->post('discount');
					$total=$this->input->post('total');
					$category=$this->input->post('category');
					$consinement_id=$this->input->post('consinement_id');
					$nettotal=$this->input->post('nettotal');

					$totalqty=0;
					$table="tbl_consinement_sale";
					$date=date("Y-m-d",strtotime($this->input->post("date")));
					



					$data=array(

						"consinement_id"=>$consinement_id,
						"nettotal"=>$nettotal,
						"date"=>$date


						);


						$query=$this->db->insert("tbl_consinement_sale_header",$data);

						if($query)
						{
							$status=1;
						}

						else
						{
							$status=0;
						}




				if($status==1)
				{

					$voucherno=$this->db->insert_id();
					
						for($i=0;$i<$count;$i++)
					{

						if($product_code[$i] !="" && $product_name[$i] !="")
						{

						$data=array(
							
								'product_code'=>$product_code[$i],
								'product_name'=>$product_name[$i],
								'unit'=>$unit[$i],
								'quantity'=>$quantity[$i],
								'category'=>$category[$i],
								'consinement_id'=>$consinement_id,
								'price'=>$price[$i],
								'discount'=>$discount[$i],
								'total'=>$total[$i],
								'voucherno'=>$voucherno,
								'date'=>$date																	
																	
								);
						
						$query=$this->db->insert($table,$data);

						if($query)

								{


								$updquery=$this->db->query("UPDATE tbl_consinement_stock SET quantity=quantity-'$quantity[$i]' WHERE consinement_id='$consinement_id' AND product_code='$product_code[$i]'");// 

								if($updquery)
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
						$status=2;
					}



				}



						

				}

				echo $status;

			

		
	}


	/**/




	/*Update Stock*/

	function update_consinement_sale()
	{
				$id=$this->input->post('id');



					$this->load->model("cashier_model");
					$count=count($this->input->post('product_name'));
					$product_name=$this->input->post('product_name');	
					$product_code=$this->input->post('product_code');		
					$unit=$this->input->post('unit');
					$quantity=$this->input->post('quantity');
					$price=$this->input->post('price');
					$discount=$this->input->post('discount');
					$total=$this->input->post('total');
					$category=$this->input->post('category');

					$totalqty=0;
				
					$data=array(
							
								'product_code'=>$product_code,
								'product_name'=>$product_name,
								'unit'=>$unit,
								'quantity'=>$quantity,
								'category'=>$category,
								'price'=>$price,
								'discount'=>$discount,
								'total'=>$total
																	
								);
						
						$this->db->where('id',$id);
						$query=$this->db->update('tbl_consinement_sale',$data) or die(mysql_error());
			
						if($query)

								{
									$status=1;
								}
								else
								{
									$status=0;
								}
					

						echo $status;

				}

				

			

}

 ?>