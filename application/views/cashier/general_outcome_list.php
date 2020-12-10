  <?php
                          $count=1;
                          $total=0;
                          foreach($lists->result() as $list):
                          ?>
                          <tr>
                        <td width="70"><?=$count?></td>
                       
                        <td width="300"><?=$list->description; ?></td>
                         <td width="150"><?=number_format($list->price)?></td>
                          <td width="200"><?=number_format($list->quantity)?></td>
                           <td width="200"><?=number_format($list->total)?></td>
                        <td width="200"><?=$list->authority?></td>
                        <td width="200"><?=$list->title?></td>
                        <td width="100"><?=$list->date?></td>
                      
                         <td width="120">
                       
                
                          <a href="javascript:showdialogform('edit_form/general_outcome/<?=$list->id?>')"><?=$edit?></a> / 
                       <a href="javascript:makedelete('<?=$list->id?>','general_outcome','<?=$this->uri->segment(4)?>',event)"><?=$delete?></a>
                         </td>
                      </tr>
                    
                       <?php
                       $count++;
                        $total+=$list->total;
                   endforeach; 

                    ?> 
                     <tr>
                    <td align="right" colspan="4">All Total </td> <td colspan="5"> <?=number_format($total)?></td>
                    </tr> 
                