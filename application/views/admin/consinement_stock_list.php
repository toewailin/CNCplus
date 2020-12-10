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
                  
                         <td><?=number_format($list->quantity)?> <?=$list->unit?></td>  
                         <td><?=$list->name."( ".$list->location." )"?></td>  
                        <td><?=number_format($list->price)?></td>
                                                 <td><?=number_format($list->price*$list->quantity)?></td>

                          <td width="150">
                         <a href="javascript:makeedit('<?=$list->id?>','consinement_stock')"><?=$edit?></a> 
                         / 
                     <a href="javascript:makedelete('<?=$list->id?>','consinement_stock','<?=$this->uri->segment(4)?>')"><?=$delete?></a>
                       
                         </td>
                         
                      </tr>
                    
                       <?php
                         $count++;

                       $totalinvest+=$list->quantity*$list->price;
            endforeach;
                  
                        ?>
                         <tr>
                    <td align="center" colspan="7"><br/> စုစုေပါင္း ကုန္က်န္သင့္ေငြ<br/> </td> <td> <br/><?=number_format($totalinvest,3)?><br/></td><td > <br/><br/></td>
                    </tr>