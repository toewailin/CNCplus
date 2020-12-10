 <?php
                    $count=1;
						    foreach($lists->result() as $list):
					           ?>
                      <tr>
                        <td width="50" align="center"><?=$count?></td>
                        <td width="130"><?=$list->voucherno?></td>
                         <td width="200"><?=$list->supplier?></td>
                         <td width="90"><?=$list->netamounttosupplier?></td>
                        <td width="90"><?=$list->advance?></td> 
                       <td width="120" align="center"><?=$list->date?></td>
                        <td width="90" align="center"><?php if($list->status==1){echo "<span class='btn btn-success'>ေရာက္ျပီး </span>";}else{echo "<span class='btn btn-warning'>က်န္ေသး</span>";}?></td>                        
                        <td width="150" align="center">
                        
	                        <a onclick="viewdetails('<?=$list->voucherno?>','porder')">Order Details </a> 
            /
           <?php
            if($list->status==0)
            {
              echo anchor("cashier/viewdetails_deliver/pdeliver/".$list->voucherno,"Make Deliver","class='btn btn-primary'");
            }
            else
            {}
            ?>               
                         
            
                        
                         </td>
                          <td>  <a href="javascript:makecancel('<?=$list->voucherno?>','purchase_order','<?=$this->uri->segment(4)?>')">Cancel</a>
                      </td>
                    </tr>
                       <?php
                       $count++;
            endforeach;
                  
                        ?>