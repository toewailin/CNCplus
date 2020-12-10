<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 

class Cashier_preview extends CI_Controller{

	
function create_preview() 
	{
	$today=$this->session->userdata('date');
		
				//validation check
			$check=$this->cashier_model->validate_sale();
			//$check=true;
			if($check==true)
			{
			$count=count($this->input->post('product_name'));
			$product_name=$this->input->post('product_name');
			$product_code=$this->input->post('product_code');		
			$price=$this->input->post('price');	
			$quantity=$this->input->post('quantity');
			
			$alltotal=$this->input->post('alltotal');
			$item_count_hidden=$this->input->post('item_count_hidden');
			$note=$this->input->post("note");
			$unit=$this->input->post('unit');
			$total=$this->input->post('total');
			$discount=$this->input->post('discount');
			$discounthidden=$this->input->post('discounthidden');
			$deliverystatus=$this->input->post('deliverystatus');
					
			$amount=0;
			$totqty=0;
			$authority=$this->input->post('authority');
			$totalamount=$this->input->post('totalamount');
			$totaldebt=$this->input->post('totaldebt');
			$staff=$this->input->post("staff");
			$nettotal=$this->input->post('nettotal');
			$received=$this->input->post('received');
			$jackpot=$this->input->post('jackpot');				
			$deliveryfees=$this->input->post('deliveryfees');		
			$exceedamount=$this->input->post('exceedamount');
			 date_default_timezone_set("Asia/Rangoon"); 
  			  $vdate= date('d-m-Y, h:i:s'); //Returns IST
			$ip=explode('.',$this->input->ip_address());
			 $pcname=$this->session->userdata("CashierUser");


			 $voucherno=$this->cashier_model->get_voucherno($this->session->userdata("CashierUser"));

			
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
			$authority=$this->session->userdata('DisplayName');
			$debtstring="";
			$paytype=$this->input->post("paytype");
			$discounttotal=0;
			if($exceedamount <0 )
			{
				//$debtstring= "စုစုေပါင္းက်န္ေငြ = ".abs($exceedamount);
				$debtstring="က်န္ေငြ";
			}
			elseif($exceedamount>0)
			{
				//$debtstring= "စုစုေပါင္းပိုေငြ = ".abs($exceedamount);
				$debtstring="ပိုေငြ";
			}

			
			$result='<tr width="100%">
<td colspan="5" >
<table  width="100%" style="font-family:Zawgyi-One;font-size:11px;color:gray;">

<tr width="">
<td align="left">၀ယ္သူ  </td>
<td>'.$customer[0].'</td>
<td></td>
<td align="right">ရက္စြဲ</td>
<td align="right">'.$vdate.'</td>
</tr>
<tr width="">
<td align="left">ေရာင္းသူ </td>
<td> '.$authority.'</td>
<td></td>
<td align="right">No</td>
<td align="right">'.$voucherno.'</td>
</tr>
<tr width="">
<td align="left"> Pay Type  </td>
<td>'.$paytype.'</td>
<td></td>
<td align="right">ထုတ္ပိုးသူ</td>
<td align="right">'.$staff.'</td>
</tr>

 </table>
</td>
</tr>
						  <tr>

						  </tr>
						  <tr bgcolor="#eeeeee">
						   <td align="left">စဥ္</td>
						  
					    <td width="40%">ပစၥည္းအမ်ိဳးအမည္</td>
					    <td align="center" width="17%">အေရအတြက္</td>
					    <td align="right" width="17%">ေစ်းႏႈန္း</td>					   
					    <td align="right" width="17%">သင့္ေငြ</td>
					  </tr>';

				 	for($i=0;$i<$count;$i++)
						{

							$item_count=$item_count_hidden[$i]*$quantity[$i];
							$amount+=$total[$i];
							$totqty+=$quantity[$i];
							
							$result.='<tr>
										  <td align="left">'.($i+1).'</td>
										
									    <td>'.$product_name[$i].'</td>
									    <td align="center">'.$quantity[$i].' <i>'.$unit[$i].'</i></td>
									    <td align="right">'.$price[$i].' </td>									 
									    <td align="right">'.$total[$i].' </td>
									  </tr>';

						
						}	
					$result.='<tr><td style="border-bottom:1px solid gray">&nbsp;</td><td style="border-bottom:1px solid gray">&nbsp;</td><td style="border-bottom:1px solid gray">&nbsp;</td><td style="border-bottom:1px solid gray">&nbsp;</td><td style="border-bottom:1px solid gray">&nbsp;</td></tr>
					<tr>
						<td></td>';

					    $result.='<td rowspan="8" valign="top">'.nl2br($note).'</td>';

					   $result.= '
					    <td>&nbsp;</td>
					   <td align="right">သင့္ေငြ</td>
					    <td align="right">'.$amount.'</td>
					  </tr>


					   <tr>				  
					    <td>&nbsp;</td>
					   
					    <td>&nbsp;</td>
					      <td align="right">ပို႕ခ</td>
					  
					    <td align="right">'.$deliveryfees.'</td>
					  </tr>';


					 if($jackpot>0)
					{
					 $result.='<tr>
					  
					   
					  
					   
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
					    <td align="right">စုစုေပါင္း </td>
					    <td align="right">'.$nettotal.'</td>
					  </tr>';


					  if($paytype=="credit")
					  {
					  
					$result.=' <tr>
					  
					
					    
					    <td>&nbsp;</td>
					    <td>&nbsp;</td>
					  <td align="right">ယခင္က်န္ေငြ (-) / ပိုေငြ</td>
					    
					    <td align="right">'.$totaldebt.'</td>
					  </tr>
					 
					   <tr>
					  
					
					  
					   <td>&nbsp;</td>
					    <td>&nbsp;</td>
					    <td align="right">စုစုေပါင္း က်သင့္ေငြ</td>
					    
					    <td align="right">'.$alltotal.'</td>
					  </tr>
					 
					
					  <tr>
					  
					
					   
					    <td>&nbsp;</td>
					    <td>&nbsp;</td>
					    <td align="right">ေပးေငြ</td>
					   
					    <td align="right">'.$received.'</td>
					  </tr>

					  <tr>
					  
					
					   
					   <td>&nbsp;</td>
					    <td>&nbsp;</td>
					    <td align="right">'.$debtstring.'</td>
					   
					    <td align="right">'.abs($exceedamount).'</td>
					  </tr>';}
					    
					 
						
					 $result.=' </table>';

					

					 $result .='<center style="font-family:Zawgyi-One;font-size:11px;color:gray;position:absolute;bottom:0;text-align:center;margin-left:45%;width:50px">ေက်းဇူးတင္ပါသည္။</center> </div>';
					   
	
					$status=$result;
			

				}
                
              	else
			{
				
					$status=2;
			}

	
	echo $status;		
				
			
					

		}

	}
	 ?>