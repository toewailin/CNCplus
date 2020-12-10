<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 

class Admin_sale extends CI_Controller{

	function create_sale() 
	{
	
		
			$today=date("Y-m-d");//$this->session->userdata('date');
			$this->load->model("cashier_model");
			$check=$this->cashier_model->validate_sale();
		//	$check=true;
			if($check==true)
			{
			$count=count($this->input->post('product_name'));
			$product_name=$this->input->post('product_name');
			$product_code=$this->input->post('product_code');		
			$price=$this->input->post('price');	
			$quantity=$this->input->post('quantity');
			$category=$this->input->post('category');
			
			$alltotal=$this->input->post('alltotal');
			$note=$this->input->post("note");
			$unit="pcs";
			$total=$this->input->post('total');
			$discount=$this->input->post('discount');
					
			$amount=0;
			$totqty=0;
			$authority=$this->input->post('authority');
			$voucherno=$this->input->post('voucherno');
			$totalamount=$this->input->post('totalamount');
			$totaldebt=$this->input->post('totaldebt');
			$staff=$this->input->post("staff");
			$nettotal=$this->input->post('nettotal');
			$received=$this->input->post('received');
			$jackpot=$this->input->post('jackpot');				
			$deliveryfees=$this->input->post('deliveryfees');		
			$exceedamount=$this->input->post('exceedamount');

			 date_default_timezone_set("Asia/Rangoon"); 
  			  $vdate= date('d-m-Y h:i:s'); //Returns IST
			 $pcname=get_cookie("admin_cookie");


			// $voucherno=$this->cashier_model->get_voucherno($pcname);

			
			if($this->input->post("customer")=="")
			{
				if($this->input->post('other') !="")
				{
					$customer=$this->input->post('other')."#0";
				}
				else
				{
				$customer=" #0";
				}
			}
			else
			{
				$customer=$this->input->post('customer');
			
			}
			
			
			$customer=explode("#",$customer);
			$authority=$pcname;//$this->session->userdata('DisplayName');
			$debtstring="";
			$paytype=$this->input->post("paytype");
			$discounttotal=0;
			if($exceedamount <0 )
			{
				$debtstring="က်န္ေငြ";
			}
			elseif($exceedamount>0)
			{
				$debtstring="ပိုေငြ";
			}


			/*	<tr><td>Customer '.$customer[0].'</td><td>Address '.$customer[0].'</td><td>Tel</td></tr>
*/
					$this->db->query("UPDATE tbl_customer SET total_debt='$exceedamount', last_date='$today' WHERE id='$customer[1]'");
				

				$result='<tr><td colspan="2">Date '.$vdate.'</td><td>No . '.$voucherno.'</td></tr>
	<tr><td colspan="4">Customer '.$customer[0].'</td></tr>
</table>
<table width="100%">

						  <tr>

						  </tr>
						  <tr bgcolor="#eeeeee">
						   <td align="left">No </td>
						  
					    <th align="left">Code No</th>
					    <th align="left" width="17%">Description</th>
					    <th align="right" width="17%">Qty</th>					   
					    <th align="right" width="17%">Rate</th>
					    <th align="right" width="17%">Amount</th>

					  </tr>';

				 	for($i=0;$i<$count;$i++)
						{

							$amount+=$total[$i];
							$totqty+=$quantity[$i];
							
							$result.='<tr>
										  <td align="left">'.($i+1).'</td>
										<td>'.$product_code[$i].'</td>

									    <td>'.$product_name[$i].'</td>
									    <td align="right">'.$quantity[$i].' <i>'.$unit.'</i></td>
									    <td align="right">'.$price[$i].' </td>									 
									    <td align="right">'.$total[$i].' </td>
									  </tr>';

						
							$data=array(
						
							'product_code'=>$product_code[$i],
							'product_name'=>$product_name[$i],
							'category'=>$category[$i],

							'price'=>$price[$i],
							'quantity'=>$quantity[$i],
							'unit'=>$unit,
							'total'=>$total[$i],						
							'discount'=>$discount[$i],	
							'voucherno'=>$voucherno,
							'customer'=>$customer[0],
							'date'=>$today
							);
							
							$query=$this->db->insert('tbl_sale',$data);
							
						
						if($query)
							{

							
							$updquery=$this->db->query("UPDATE tbl_showroom_stock SET quantity=quantity-'$quantity[$i]' WHERE product_code='$product_code[$i]'");// 
								
								
								$status=1;
							}

							else 
							{
								$status=0;
							}

						}

						if($status==1)
						{

						$saledata=array(
						"voucherno"=>$voucherno,
						"customer_id"=>$customer[1],
						"customer_name"=>$customer[0],
						"totalamount"=>$totalamount,						
						"totaldebt"=>$totaldebt,						
						"nettotal"=>$nettotal,
						"received"=>$received,	
						"jackpot"=>$jackpot,
						"deliveryfees"=>$deliveryfees,
						"exceedamount"=>$exceedamount,
						'authority'=>$authority,
						'staff'=>$staff,
						'date'=>$today,
						'paytype'=>$paytype,
						'note'=>$note
					
						);
						
					$query=$this->db->insert("tbl_sale_header",$saledata);


					if($query)
					{
						$vdata=array("voucherno"=>"");
						$this->db->insert("tbl_".strtolower($pcname),$vdata);
					}
				

				$result.='<tr>
				<td style="border-bottom:1px solid gray">&nbsp;</td>
				<td style="border-bottom:1px solid gray">&nbsp;</td>
				<td style="border-bottom:1px solid gray">&nbsp;</td>
				<td style="border-bottom:1px solid gray">&nbsp;</td>
				<td style="border-bottom:1px solid gray">&nbsp;</td>
				<td style="border-bottom:1px solid gray">&nbsp;</td>
				</tr>
					<tr>
						<td></td>';

					   $result.='<td rowspan="8" valign="top">'.nl2br($note).'</td>';

					   $result.= '
					    <td>&nbsp;</td>
					    <td>&nbsp;</td>
					   <td align="right">သင့္ေငြ</td>
					    <td align="right">'.$amount.'</td>
					  </tr>';


					 if($jackpot>0)
					{
					 $result.='<tr>
					   <tr>				  
					    <td>&nbsp;</td>
					   					    <td>&nbsp;</td>

					    <td>&nbsp;</td>
					      <td align="right">ပို႕ခ</td>
					  
					    <td align="right">'.$deliveryfees.'</td>
					  </tr>';
					}

					 if($jackpot>0)
					{
					 $result.='<tr>
					  
					   
					  
					   					    <td>&nbsp;</td>

					    <td>&nbsp;</td>
					    <td>&nbsp;</td>				
					      <td align="right">Discount ေပးေငြ</td>			   
					    <td align="right">'.$jackpot.'</td>
					  </tr>
					  ';
					}


					    $result.=' <tr>			   	   
					  
					   					    <td>&nbsp;</td>

					    <td>&nbsp;</td>
					    <td>&nbsp;</td>
					    <td align="right">စုစုေပါင္း </td>
					    <td align="right">'.$nettotal.'</td>
					  </tr>';


					  if($paytype=="credit")
					  {
					  
					$result.=' <tr>					  
										    <td>&nbsp;</td>

					    
					    <td>&nbsp;</td>
					    <td>&nbsp;</td>
					  <td align="right">ယခင္က်န္ေငြ (-) / ပိုေငြ</td>
					    
					    <td align="right">'.$totaldebt.'</td>
					  </tr>
					 
					   <tr>
					  
										    <td>&nbsp;</td>

					  
					   <td>&nbsp;</td>
					    <td>&nbsp;</td>
					    <td align="right">စုစုေပါင္း က်သင့္ေငြ</td>
					    
					    <td align="right">'.$alltotal.'</td>
					  </tr>
					 
					
					  <tr>
					  
					
					   					    <td>&nbsp;</td>

					    <td>&nbsp;</td>
					    <td>&nbsp;</td>
					    <td align="right">ေပးေငြ</td>
					   
					    <td align="right">'.$received.'</td>
					  </tr>

					  <tr>
					  
					   					    <td>&nbsp;</td>

					   <td>&nbsp;</td>
					    <td>&nbsp;</td>
					    <td align="right">'.$debtstring.'</td>
					   
					    <td align="right">'.abs($exceedamount).'</td>
					  </tr>';}
					    
					 
						
					 $result.=' </table>';

					

					 $result .='<center style="font-family:Zawgyi-One;font-size:11px;color:gray;position:absolute;bottom:0;text-align:center;margin-left:45%;width:50px">ေက်းဇူးတင္ပါသည္။</center> </div>';
					   
	
					$status=$result;
				
				}

						
			}

			else
			{
				
					$status=2;
			}

	
	echo $status;		
							

		
	}//

}
 ?>