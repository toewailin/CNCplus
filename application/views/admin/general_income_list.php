  <?php
                    $count=1;
            						foreach($lists->result() as $list):
            					?>
                                  <tr>
                        <td width="55"><?=$count?></td>                      
                         <td width="385"><?=$list->supplier?></td>
                        <td width="380"><?=number_format($list->total)?><input type="hidden" value="<?=$list->total?>" /></td> 

                         <td width="290"><?=$list->date?></td>
                          
                         <td width="150">
                      
<!--                          <a href="javascript:showdialogform('edit_form/general_income/<?=$list->id?>')"><?=$edit?></a> /  
 -->                      <a href="javascript:makeedit('<?=$list->id?>','general_income')"><?=$edit?></a> / 
                     <a href="javascript:makedelete('<?=$list->id?>','general_income','<?=$this->uri->segment(4)?>')"><?=$delete?></a>
                         </td>
 
                     
                                      </tr>
                                       <?php
                        $count++;
                					endforeach;
                				
                				?>