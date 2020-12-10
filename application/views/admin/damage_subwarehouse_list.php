 <?php
                    $totalqty=0;
                    $totalcost=0;
						  foreach($lists->result() as $list):
					           ?>
                      <tr>
                        <td width="150"><?=$list->product_code?></td>
                        <td width="350"><?=$list->product_name?></td>
                     
                         <td width="150"><?=$list->unit?></td>
                        <td width="150"><?=number_format($list->amountforeachunit)?></td>
                         <td width="250"><?=$list->quantity?></td>
                       <td width="150"><?=number_format($list->total)?></td>
                         <td width="150"><?=$list->date?></td>
                         <td width="150"><?=$list->authority?></td>
                         <td><?=$list->subwarehouse_id?></td>
                           <?php
                if ($this->session->userdata("authority")=='administrator')
                {
                ?>
                         <td width="150">
                      
                        <!--   <a href="javascript:showdialogform('edit_form/damage_subwarehouse/<?=$list->id?>')"><?=$edit?></a> /  -->
	                    <a href="javascript:makeedit('<?=$list->id?>','damage_subwarehouse')"><?=$edit?></a> / 
                     <a href="javascript:makedelete('<?=$list->id?>','damage_subwarehouse','<?=$this->uri->segment(4)?>')"><?=$delete?></a>
                         </td>

                      <?php
                  }
                 ?>  
                      </tr>
                       <?php
                       $totalqty+=$list->quantity;
                        $totalcost+=$list->total;
                					endforeach;
                					
                				?>
                          <tr>
                    <td align="right" colspan="4">All Total </td> <td> <?=$totalqty?></td><td colspan="4"><?=number_format($totalcost)?></td>
                    </tr>