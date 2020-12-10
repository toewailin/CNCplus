<?php


         
					$count=1;
              foreach($lists->result() as $list):
                     ?>
                      <tr>
                      <td><?=$count?></td>
                        <td><?=$list->username?></td>
                        <td><?=$list->ip_address?></td>
                          <td><?=$list->computer_name?></td>
                         <td><?=$list->user_role?></td>
                      <td><?=$list->date?></td>
                         <td>
                        
                         <a href="javascript:showdialogform('edit_form/user/<?=$list->id?>')"><?=$edit?></a> / 
                     <a href="javascript:makedelete('<?=$list->id?>','user','<?=$this->uri->segment(4)?>')"><?=$delete?></a>
                          </td>
                      </tr>
                       <?php
                       $count++;
          endforeach;
?>
