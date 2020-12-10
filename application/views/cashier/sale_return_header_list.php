 <?php
                    $totalqty=0;
                    $total=0;
              foreach($lists->result() as $list):
                     ?>
                      <tr>
                        <td width="150"><?=$list->voucherno?></td>
                        <td width="350"><?=$list->customer?></td>
                     
                         <td width="150"><?=$list->totalqty?></td>
                        <td width="150"><?=$list->nettotal?></td>
                         <td width="250"><?=$list->note?></td>
                         <td width="150"><?=$list->date?></td>
                         <td width="150"><?=$list->authority?></td>
                          <td width="150">
                      
                          <a onclick="viewdetails('<?=$list->voucherno?>','sreturnvoucher','')">View Details </a>
                       </td>
                     
                         
                      </tr>
                       <?php
                       $totalqty+=$list->totalqty;
                        $total+=$list->nettotal;
                          endforeach;
                          
                        ?>
                          <tr>
                    <td align="right" colspan="2">All Total </td> <td> <?=$totalqty?></td><td colspan=""><?=number_format($total)?></td>
                    </tr>