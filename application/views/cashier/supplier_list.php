 <?php
                    $count=1;
              foreach($lists->result() as $list):
                     ?>
                      <tr>
                      <td width="50"><?=$count?></td>
                        <td><?=$list->supplier_name?></td>
                        <td><?=$list->address?></td>
                         <td><?=$list->contact_person?></td>  
                          <td><?=$list->phone?></td>
                                               
 <td id="exceed_amount<?=$list->id?>"><?php if($list->total_debt>0){echo number_format($list->total_debt);$debttype="debt_to_customer";}?></td>
                         <td id="require_amount<?=$list->id?>"><?php if($list->total_debt<0) {echo number_format($list->total_debt);$debttype="debt_from_customer";}?></td>
                                                      <td><?=$list->date?></td> 
                      
                       
                          
                      </tr>
                       <?php
                       $count++;
          endforeach;
          
        ?>