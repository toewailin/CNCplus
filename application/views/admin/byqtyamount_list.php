 <?php
                    $count=1;
                        foreach($lists->result() as $list):
                      ?>
                                  <tr>
                        <td><?=$count?></td>              
                        <td><?=$list->product_name?></td> 
                        <td>
                        <?php 
                        echo $list->total;
                       /* $rows=$this->db->query("SELECT sum(quantity) as totqty,unit from tbl_sale where product_code='".$list->product_code."' AND customer !='' AND date BETWEEN '$startdate' AND '$enddate' group by unit order by item_count DESC");
                        foreach($rows->result() as $row):
                        
                          echo "<div class='col-md-3'>".$row->totqty." &nbsp;<b>".$row->unit."</b></div>";
                        endforeach;*/
                        ?></td>   
                        <td>
                          <?=$list->date?>
                        </td>
                        <td width="120" align="center">
                        
                         <a onclick="viewdetails('<?=$list->product_code?>','byqtyamount','<?=$list->date?>')">View Details </a> 
                          
                        
                         </td>                                       
                        
                       </tr>
                        <?php
                        $count++;
                          endforeach;
                        
                        ?>