   <?php
                          $count=1;
                          foreach($lists->result() as $list):
                          ?>
                         <tr>
                        <td width="105"><?=$count?></td>
                         <td width="200"><?=$list->product_code?></td>
                          <td width="480"><?=$list->product_name?></td>
                          <td>  <?=$list->category?></td>
                           <td width="200"><?=$list->unit?></td>
                       <td><?=$list->smallest_itemcount?></td>
                        <td width="190"><?=$list->price?></td>                      
                         <td width="150">
                         <?php //anchor("admin/edit_form/unit/".$list->id,$edit)?>
                          <a href="javascript:makeedit('<?=$list->id?>','unit')"><?=$edit?></a> / 
                       <a href="javascript:makedelete('<?=$list->id?>','unit','<?=$this->uri->segment(4)?>')"><?=$delete?></a>
                         </td>
                      </tr>
                     
                       <?php
                       $count++;
                   endforeach;
                    ?>
