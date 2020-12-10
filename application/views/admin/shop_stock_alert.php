 
            <div class="panel panel-primary">
              <div class="panel-heading heading-over">
              <h3 class="panel-title"><i class="fa fa-bars"></i> <?=$alert?> </h3>
              </div>
             
              <div class="panel-body">
                <div class="table-responsive panel-over">
                  <table class="table table-bordered table-hover table-striped tablesorter">
                    <thead  class="thead-over">
                      <tr>
                      <th>No</th>
                        <th width="200"><?=$product_code?></th>
                        <th width="370"><?=$product_name?></th>
                        <th width="280"><?=$quantity?></th>
                        <th width="480"><?=$smallitemcount?></th>                        
                        <th width="350"><?=$price?></th>
                     
                       
                      </tr>
                    </thead>
                      
                    <tbody id="content">
                    <?php
                    $count=1;
                 $totalcount=0;
						foreach($lists->result() as $list):
					           ?>
                      <tr>
                      <td><?=$count?></td>
                        <td><?=$list->product_code?></td>
                        <td><?=$list->product_name?></td>                         
                         <td><?=number_format($list->quantity)?> <?=$list->unit?></td>  
                         <td><?=number_format($list->total_smallitemcount)?></td>  
                        <td><?=number_format($list->price,3)?></td>
                          
                       <?php
                       $count++;
                       $totalcount+=1;
        		endforeach;
        					
        				        ?>
                         <tr bgcolor="red">
                    <td align="center" colspan="3"><br/> Total Running Out Products<br/> </td> <td> <br/><?=$totalcount?><br/></td><td > <br/><br/></td>
                    </tr>
                    </tbody>

                  </table>

                
                </div>
                
              </div>
            </div>
     