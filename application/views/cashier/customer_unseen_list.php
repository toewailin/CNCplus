 <?php
                    $count=1;
                        foreach($lists->result() as $list):
                      ?>
                                  <tr>
                        <td><?=$count?></td>                      
                         <td><?=$list->customer?></td>
                        <td><?=number_format($list->amount)?></td>     
                        <td><?=$list->date?></td>   
                       <td>
                      
                          <a href="javascript:showdialogform('edit_form/customer_unseen/<?=$list->id?>')"><?=$edit?></a> / 
                     <a href="javascript:makedelete('<?=$list->id?>','customer_unseen','<?=$this->uri->segment(4)?>')"><?=$delete?></a>
                         </td>                                   
                        
                                      </tr>
                                       <?php
                         $count++;
                          endforeach;
                        
                        ?>