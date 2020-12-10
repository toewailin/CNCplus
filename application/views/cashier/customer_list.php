<?php
                    $count=1;
              foreach($lists->result() as $list):
                     ?>
                      <tr>
                      <td width="70"><?=$count?></td>
                        <td width="260"><?=$list->customer_name?></td>
                        <td width="240"><?=$list->address?></td>
                          <td width="240"><?=$list->phone?></td>
                         <td width="250"><?=$list->contact_person?></td>
                          <td id="exceed_amount<?=$list->id?>"><?php if($list->total_debt>0){echo number_format($list->total_debt);$debttype="debt_to_customer";}?></td>
                         <td id="require_amount<?=$list->id?>"><?php if($list->total_debt<0) {echo number_format($list->total_debt);$debttype="debt_from_customer";}?></td>
                        
                       <td width="230"><?=$list->date?></td>
                       
                        
                         
                      </tr>
                       <?php
                       $count++;
          endforeach;
          
        ?> 