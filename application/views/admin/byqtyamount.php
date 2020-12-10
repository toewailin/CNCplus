         
             
 <div class="container">
            
             
            <div class="panel panel-primary">
             <div class="panel-heading heading-over">

                  <div class="container"> 
                      <div class="col-md-3">  
                       <h3 class="panel-title"><i class="fa fa-bars"></i> <?=$byqtyamount?> </h3>
                      </div>

                        <div class="col-md-8">  
                              <form name="singlesearch" id="byqtyamount">
                <?=$from?> <input type="text" name="startdate" class="form-control-sale date" id="date1"/>
              <?=$to?> <input type="text" name="enddate" class="form-control-sale date" id="date2"/>
             
            
              <input type="button" class="btn btn-primary active" value="<?=$search?>" onclick="showreport('byqtyamount')">
           
            </form> 

                        </div>
                  </div>  
               
              </div>
              <div class="panel-body">
                 <div class="table-responsive panel-over">
              <table class="table table-bordered table-hover table-striped tablesorter">
                    <thead>
                      <tr>
                        <th> <?=$no?></th>
                        <th><?=$product_name?></th>
                        <th><?=$quantity?></th>
                        <th><?=$date?></th>
                        <th>View Details</th>
                                              
                      </tr>
                    </thead>
                    <tbody id="content">
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
                       /* $rows=$this->db->query("SELECT sum(quantity) as totqty,unit from tbl_sale where product_code='".$list->product_code."' AND customer !='' AND date=CURDATE() group by unit order by item_count DESC");
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
                    </tbody>
                   
                  </table>

              
      </div>
    </div>
  </div>
  </div>
  
