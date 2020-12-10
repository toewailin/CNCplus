  <?php
                    $count=1;
                    $totalamount=0;
                    $totalreceive=0;
                      $totaldeliveryfees=0;
                    $totalreqamt=0;
                    $totaljackpot=0;
                    $totaldebt=0;
                    $totalnettotal=0;
                        foreach($lists->result() as $list):
                      ?>
                                  <tr>
                        <td width="40"><?=$count?></td>
                        <td width="95"><?=$list->voucherno?></td>
                        <td width="150"><?=$list->customer_name?></td>
                        <td width="90"><?=number_format($list->totalamount)?></td>
                         <td width="90"><?=number_format($list->totaldebt)?></td>
                           <td width="90"><?=number_format($list->nettotal)?></td>
                        <td width="90"><?=number_format($list->received)?></td> 
                         <td width="90"><?=number_format($list->jackpot)?></td>
                        <td width="90"><?=number_format($list->deliveryfees)?></td>    
                        <td width="90"><?php if($list->exceedamount<0) echo $list->exceedamount;?></td>  
                         <td width="90"><?php if($list->exceedamount>0) echo $list->exceedamount;?></td> 
                       <td><?=$list->authority?></td>
                        <td><?=$list->staff?></td>
                        <td width="90"><?=$list->date?></td>                                        
                        <td width="90">
                      <a onclick="viewdetails('<?=$list->voucherno?>','voucher','')">View Details </a>
                 
                        </td>
                                      </tr>
                                       <?php
                                       $count++;
                                       $totalamount+=$list->totalamount;
                                      $totalreceive+=$list->received;
                                      $totaldeliveryfees+=$list->deliveryfees;
                                       $totalnettotal+=$list->nettotal;
                                       $totaldebt+=abs($list->totaldebt);
                                       $totalreqamt+=$list->exceedamount;
                                        $totaljackpot+=$list->jackpot;
                          endforeach;
                        
                        ?>

                        <tr>

                        <td width="40"></td>
                        <td width="95"></td>
                       <td width="150">Total</td>
                        <td width="90"><?=number_format($totalamount)?></td>
                         <td width="90"><?=number_format($totaldebt)?></td>
                           <td width="90"><?=number_format($totalnettotal)?></td>
                        <td width="90"><?=number_format($totalreceive)?></td> 
                         <td width="90"><?=number_format($totaljackpot)?></td>
                        <td width="90"><?=number_format($totaldeliveryfees)?></td>    
                        <td width="90"><?php if($totalreqamt<0) echo abs($totalreqamt);?></td>  
                         <td width="90"><?php if($totalreqamt>0) echo abs($totalreqamt);?></td> 
                      
                        <td width="90"></td>                                      
                        <td width="90">
                      
                        </td>
                        </tr>
                         <tr><td colspan="12" align="center"> <br/><?="အသားတင္ရရွိေသာေငြသား (၀ယ္သူမွေပးေငြ (".number_format($totalreceive).")  +   စုစုေပါင္းပို႕ခ (".number_format($totaldeliveryfees).")) = ".number_format($totalreceive+$totaldeliveryfees)?></td></tr>

       