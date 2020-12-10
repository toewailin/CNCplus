<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin_sale_order extends CI_Controller {


	function create_sale_order()
	{
		
		//validation check
			//$check=$this->admin_model->validate_jackpot();
			$check=true;

						if($this->input->post('customer') !="")
						{
							$count=count($this->input->post('product_name'));
							$product_name=$this->input->post('product_name');
							$product_code=$this->input->post('product_code');
							$price=$this->input->post('price');	
							$quantity=$this->input->post('quantity');
							$unit=$this->input->post('unit');	
							$total=$this->input->post('total');								
							$voucherno=$this->input->post('voucherno');
							
							$customer=explode("#", $this->input->post('customer'));
							$netamount=$this->input->post('netamount');
							$advance=$this->input->post('advance');
							$smallitemcount=$this->input->post('item_count_hidden');
							$username=$this->session->userdata('AdminUser');
							$date=date("Y-m-d",strtotime($this->input->post('date')));								
							
							for($i=0;$i<$count;$i++)
							{
							$data=array(
							'product_code'=>$product_code[$i],
							'product_name'=>$product_name[$i],
							'price'=>$price[$i],
							'orderquantity'=>$quantity[$i],
							'requirequantity'=>$quantity[$i],						
							'unit'=>$unit[$i],
							'smallitemcount'=>$smallitemcount[$i],
							'total'=>$total[$i],
							'voucherno'=>$voucherno,						
							'date'=>$date
							);
							
							$query=$this->db->insert('tbl_sale_order',$data);
											
								if($query)
								{

								$dstatus=1;
								
								}

								else
								{
									
									$dstatus=0;									

								}	

								

							}

							/*insert into customer order header*/

						if($dstatus==1)
						{

						$order=array(
						"voucherno"=>$voucherno,
						"customer_id"=>$customer[1],
						"customer"=>$customer[0],
						"netamount"=>$netamount,						
						"advance"=>$advance,						
						//"balance"=>$balance,
						"status"=>0,							
						'date'=>$date
						
						);
						
					$query=$this->db->insert("tbl_sale_order_header",$order);

					if($query)
					{

						if( !empty($advance) || $advance !=0)
								{
										$this->db->query("UPDATE tbl_customer SET total_debt=total_debt-'$advance', last_date='$date' WHERE id='$customer[1]'");
									
								}
						
						$vdata=array("voucherno"=>"");
						$this->db->insert("tbl_so",$vdata);
						$dstatus=1;
					}	
					else
					{
						$dstatus=0;
					}


				
						}


				
					}

			else
				{
					$dstatus=2;
					
				}


				echo $dstatus;
		
	}//


}

 ?>