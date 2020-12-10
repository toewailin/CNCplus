      
              <div class="panel-body">
                <div class="table-responsive panel-over">
                   <table class="table table-bordered table-hover table-striped tablesorter">
                    <thead>
                      <tr>
                        <th width="90" class="center"><?=$date?></th>   
                        <th width="100" class="center"><?=$product_code?></th>
                        <th width="185" class="center"><?=$product_name?></th>
                                                 <th width="150" class="center" width="110"><?="အေရအတြက္"?></th>


<!--                         <th width="150" class="center" width="110"><?php//$unitname?></th>
 -->                       
<!--                           <th width="150" class="center" width="110"><?="သင့္ေငြ"?></th>
 -->
                        <th width="190" class="center" ><?="စုစုေပါင္းေရာင္းရေငြ"?></th>
                        <th width="190" class="center" ><?="စုစုေပါင္း၀ယ္ေစ်း"?></th>                     
                        <th width="190" class="center"><?=$profit?></th>
                      </tr>
                    </thead>
                   
                    <tbody id="content">
                    <?php
                    $total=0;
                    $totalcapital=0;
                    $totalprofit=0;

                                   
                        foreach($lists->result() as $list):
                    ?>
                      <tr>
                         <td width="90" valign="middle"><?=$list->date?></td>
                        <td width="100" align="center"><?=$list->product_code?></td>
                        <td width="185"><?=$list->product_name?></td>
                          <td  width="25%" align="center"><?=number_format($list->totalitem_count).$list->unit?></td>

                        <td width="190" align="right"><?=$list->total?></td>

                      
                         <td width="190" align="right"><?=$list->average_purchase_price?></td>
                        
                       <td width="190" align="right"><?=$list->total-$list->average_purchase_price?></td>
                    
                        <?php 

                         $total+=$list->total;
                         $totalcapital+= $average_purchase_price;
                       $totalprofit+= $list->total-$list->average_purchase_price;
                         
                         ?>
                      </tr>
                       <?php
                      // $total+=$list->total-($list->purchase_price*$list->totalqty);
                    //   $totalcard+=$list->carddiscount;
                            endforeach;


                           
                                ?>

                     <tr>
                     <td align="right"><br/><?=number_format($total)?></td>
                     <td align="right"><br/><?=$totalcapital?></td>
                     <td align="right"><br/><?=($totalprofit)?></td>
                    </tr>
                     
                    </tbody>
                  </table>
                    <?php
                /*  echo "<div class='pagination'>";
                  echo $this->pagination->create_links();
                  echo "</div>";*/
                  ?>
                </div>
                
              </div>
            </div>