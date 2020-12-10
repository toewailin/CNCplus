
          
              
 <div class="container">
            
             
            <div class="panel panel-primary">
            <div class="panel-heading heading-over">
               <div class="container"> 
                      <div class="col-md-3">  
                <h3 class="panel-title"><i class="fa fa-bars"></i> Debt Expense</h3>
                 </div>

                        <div class="col-md-8">  
                         <form name="singlesearch" id="debt_expense">
                <?=$from?> <input type="text" name="startdate" class="form-control-sale date" id="date1"/>
              <?=$to?> <input type="text" name="enddate" class="form-control-sale date" id="date2"/>
             
            
              <input type="button" class="btn btn-primary active" value="<?=$search?>" onclick="showreport('debt_expense')">
           
            </form> 
                        </div>
              </div>
              </div>
            
              <div class="panel-body">
                 <div class="table-responsive panel-over">
              <table class="table table-bordered table-hover table-striped tablesorter">
                    <thead class="thead-over">
                      <tr>
                        <th width="60"> <?=$no?></th>
                                        
                        <th width="430"><?=$customer?></th>
                        <th width="430"><?=$amount?></th>
                        <th width="320">Date</th>
                                              
                      </tr>
                    </thead>
                    
                    <tbody id="content">
                    <?php
                    $count=1;
                    $total=0;

            						foreach($lists->result() as $list):
            					?>
                                  <tr>
                        <td width="55"><?=$count?></td>                      
                         <td width="385"><?=$list->customer?></td>
                        <td width="380"><?=number_format($list->total)?><input type="hidden" value="<?=$list->total?>" /></td> 

                         <td width="290"><?=$list->date?></td>
                        
                                      </tr>
                                       <?php
                        $count++;
                        $total+=abs($list->total);
                					endforeach;
                				
                				?>

                        <tr><td colspan="2">Total</td><td><?php echo number_format($total)?></td></tr>
                    </tbody>
                   
                  </table>

              
      </div>
    </div>
  </div>
 </div>
