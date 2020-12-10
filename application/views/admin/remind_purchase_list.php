 <?php
                    $count=1;
                        foreach($lists->result() as $list):
                      ?>
                      <tr>
                        <td width="55"><?=$count?></td>
                        <td width="220"><?=$list->product_code?></td>
                        <td width="400"><?=$list->product_name?></td>                      
                         <td width="150"><?=$list->unit?></td>                        
                         <td width="300"><?=$list->atleastqty?></td>
                         <td width="250">
                    
                          <a href="javascript:showdialogform('edit_form/remind_purchase/<?=$list->id?>')"><?=$edit?></a> / 
                         
                         <a href="javascript:makedelete('<?=$list->id?>','remind_purchase','<?=$this->uri->segment(4)?>')"><?=$delete?></a>
                         </td>
                      </tr>
                       <?php
                       $count++;
          endforeach;
        
        ?>