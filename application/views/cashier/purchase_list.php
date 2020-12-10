 <?php
                    $count=1;
                    $total=0;
              foreach($lists->result() as $list):
              
                     ?>
                      <tr>
                      <td width="60"><?=$count?></td>
                       <td width="130"><?=$list->voucherno?></td>
                        <td width="220"><?=$list->supplier?></td>
                          <td width="100"><?=$list->nettotal?></td>
                          <td width="220"><?=$list->totaldebt?></td>
                       <td width="100"><?=$list->received?></td>
                                   
                          <td  width="200"><?=$list->balance?></td>
                         <td width="150"><?=$list->date?></td>                         
                         <td width="150">
                      
                          <a onclick="viewdetails('<?=$list->voucherno?>','pvoucher','')">View Details </a>
                       </td>
                     
                      </tr>
                     <?php
                     $count++;
                    $total+=$list->nettotal;
                  endforeach;
                  ?>
                  <tr>
                    <td align="right" colspan="3">All Total </td> <td> <?=number_format($total)?></td>
                    </tr>
                 