<div class="tab-content">

                <div class="tab-pane fade in active" id="currentprice">
                
                  <table class="table table-bordered table-hover table-striped tablesorter">
                    <thead>
                      <tr>
                      <th width="20"><?=$no?></th>
                        <th><?=$product_code?></th>
                        <th><?=$product_name?></th>
                        <th><?=$unit?></th>
                        <th><?=$current_purchase_price?></th>
                  <th><?=$previous_purchase_price?></th>
                  <th><?=$average_purchase_price?></th>              
                      
                        <th><?=$date?></th>
                      
                       
                      </tr>
                    </thead>
                    <tbody>


                    
               <?php

                          $count=1;
                        foreach($lists->result() as $list):

                          $lists->num_rows();
                            if($list->iscurrent==1)
                            {
                          ?>
                        
                        <tr>
                        <td><?=$count?></td>
                        <td><?=$list->product_code; ?></td>
                      <td><?=$list->product_name;?></td>
                        <td><?=$list->unit?></td>
                        <td><?=$list->purchase_price?></td>
                         <td><?=$list->previous_purchase_price?></td>
                          <td><?=$list->average_purchase_price?></td>
                      
                        <td><?=$list->date?></td>
                      

                      </tr>
                     
                  
                     <?php
                   $count++;
                   }
                  endforeach;
                
                        ?>  
                         </tbody>
                    </table>


                </div>



  <div class="tab-pane fade in" id="lastprice">
                
                 <table class="table table-bordered table-hover table-striped tablesorter">
                    <thead>
                      <tr>
                      <th width="20"><?=$no?></th>
                        <th><?=$product_code?></th>
                        <th><?=$product_name?></th>
                        <th><?=$unit?></th>
                        <th><?=$current_purchase_price?></th>
                  <th><?=$previous_purchase_price?></th>
                  <th><?=$average_purchase_price?></th>              
                      
                        <th><?=$date?></th>
                      
                       
                      </tr>
                    </thead>
                    <tbody>


                    
               <?php

                          $count=1;
                        foreach($lists->result() as $list):

                          $lists->num_rows();
                            if($list->iscurrent==0)
                            {
                          ?>
                        
                        <tr>
                        <td><?=$count?></td>
                        <td><?=$list->product_code; ?></td>
                      <td><?=$list->product_name;?></td>
                        <td><?=$list->unit?></td>
                        <td><?=$list->purchase_price?></td>
                         <td><?=$list->previous_purchase_price?></td>
                          <td><?=$list->average_purchase_price?></td>
                      
                        <td><?=$list->date?></td>
                      

                      </tr>
                     
                  
                     <?php
                   $count++;
                   }
                  endforeach;
                
                        ?>  
                         </tbody>
                    </table>


                </div>

                
              </div>