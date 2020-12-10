 <?php
                    $count=1;
						  foreach($lists->result() as $list):
					           ?>
                      <tr>
                      <td width="70"><?=$count?></td>
                        <td width="260"><?=$list->name?></td>
                         <td width="260"><?=$list->location?></td>

                        
                         <td width="230">
                       <a href="javascript:makeedit('<?=$list->id?>','subwarehouse')"><?=$edit?></a> / 
                     
                        <!--   <a href="javascript:showdialogform('edit_form/subwarehouse/<?=$list->id?>')"><?=$edit?></a> /  -->
	                   <a href="javascript:makedelete('<?=$list->id?>','subwarehouse','<?=$this->uri->segment(4)?>')"><?=$delete?></a>
                         </td>
                          
                      </tr>
                       <?php
                       $count++;
					endforeach;
					
				?>