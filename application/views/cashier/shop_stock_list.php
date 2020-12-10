 <?php
                    $count=1;
                 $totalinvest=0;
            foreach($lists->result() as $list):

                     ?>

                      <tr>
                      <td><?=$count?></td>
                        <td><?=$list->product_code?></td>
                        <td><?=$list->product_name?></td>            
                        <td><?=$list->category?></td>             
                         <td><?=number_format($list->quantity)?> <?=$list->unit?> <?=($list->total_smallitemcount)-($list->quantity*$list->smallitemcount)?></td>  
                        <td><?=number_format($list->price)?></td>
                     <td><?=(number_format($list->price*$list->quantity))?></td>

                         
                         
                         
                      </tr>
                    
                       <?php
                       $count++;
                       $totalinvest+=$list->total_smallitemcount*($list->price/$list->smallitemcount);
            endforeach;
                  
                        ?>
                         <tr>
                    <td align="center" colspan="4"><br/> စုစုေပါင္း ကုန္က်န္သင့္ေငြ<br/> </td> <td> <br/><?=number_format($totalinvest,3)?><br/></td><td > <br/><br/></td>
                    </tr>