 <?php
                    $count=1;
						  foreach($lists->result() as $list):
					           ?>
                      <tr>
                      <td width="70"><?=$count?></td>
                        <td width="260"><?=$list->staff?></td>
                        
                         <td width="230">
                       <a href="javascript:makeedit('<?=$list->id?>','staff')"><?=$edit?></a> / 
                     
                        <!--   <a href="javascript:showdialogform('edit_form/staff/<?=$list->id?>')"><?=$edit?></a> /  -->
	                   <a href="javascript:makedelete('<?=$list->id?>','staff','<?=$this->uri->segment(4)?>')"><?=$delete?></a>
                         </td>
                      </tr>
                       <?php
                       $count++;
					endforeach;
					
				?>