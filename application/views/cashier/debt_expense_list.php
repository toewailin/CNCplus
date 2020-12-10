<?php
                    $count=1;
                    $total=0;

                        foreach($lists->result() as $list):
                      ?>
                                  <tr>
                        <td width="55"><?=$count?></td>                      
                         <td width="385"><?=$list->customer?></td>
                        <td width="380"><?=number_format($list->total)?><input type="hidden" value="<?=$list->total?>" /></td> 

                         <td width="290"><?=$list->date?></td>
                        
                                      </tr>
                                       <?php
                        $count++;
                        $total+=abs($list->total);
                          endforeach;
                        
                        ?>

                        <tr><td colspan="2">Total</td><td><?php echo number_format($total)?></td></tr>