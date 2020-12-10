 <?php
               
						foreach($lists->result() as $list):

					           ?>

                      <tr>
                       <td><?=$list->warehouse?></td>  
                        <td><?=$list->shop?></td>
                        <td><?=$list->product_code?></td>
                        <td><?=$list->product_name?></td>                         
                         <td><?=number_format($list->quantity)?> <?=$list->unit?></td>  
                         <td><?=$list->date?></td>
                        
                          <!-- <td width="150">
                         <a href="javascript:makeedit('<?=$list->id?>','transfer_history')"><?=$edit?></a> 
                         / 
	                   <a href="javascript:makedelete('<?=$list->id?>','transfer_history','<?=$this->uri->segment(4)?>')"><?=$delete?></a>
                       
                         </td> -->
                      </tr>
                    <?php endforeach;?>