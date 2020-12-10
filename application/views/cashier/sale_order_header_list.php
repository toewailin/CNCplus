  <?php
                    $count=1;
						    foreach($lists->result() as $list):
					           ?>
                      <tr>
                        <td width="50" align="center"><?=$count?></td>
                        <td width="130"><?=$list->voucherno?></td>
                         <td width="200"><?=$list->customer?></td>
                         <td width="90"><?=$list->netamount?></td>
                        <td width="200"><?=$list->advance?></td> 
                       <td width="120" align="center"><?=$list->date?></td>
                        <td width="90" align="center"><?php if($list->status==1){echo "<span class='btn btn-success'>ေရာက္ျပီး </span>";}else{echo "<span class='btn btn-warning'>က်န္ေသး</span>";}?></td>                        
                        <td width="120" align="center">
                        
	                        <a onclick="viewdetails('<?=$list->voucherno?>','sorder')">View Details </a> 
                          /
         <!--   <a onclick="viewdetails('<?=$list->voucherno?>','pdeliver')">Deliver Details </a>  -->
   <?php
            if($list->status==0)
            {
              echo anchor("cashier/viewdetails_deliver/sdeliver/".$list->voucherno,"Change To Bill","class='btn btn-primary'");
            }
            else
            {}
            ?>           
                        
                         </td>
                          <td>  <a href="javascript:makecancel('<?=$list->voucherno?>','sale_order','<?=$this->uri->segment(4)?>')">Cancel</a>
                      </td>
                    </tr>
                       <?php
                       $count++;
            endforeach;
                  
                        ?>