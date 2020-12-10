<div class="container">
            
             
            <div class="panel panel-primary">
            <div class="panel-heading heading-over">
               <div class="container"> 
                      <div class="col-md-3">  
                <h3 class="panel-title"><i class="fa fa-bars"></i> <?=$bysaleamount?> </h3>
                 </div>

                        <div class="col-md-8">  
                         <form name="singlesearch" id="bysaleamount">
                <?=$from?> <input type="text" name="startdate" class="form-control-sale date" id="date1"/>
              <?=$to?> <input type="text" name="enddate" class="form-control-sale date" id="date2"/>
             
            
              <input type="button" class="btn btn-primary active" value="<?=$search?>" onclick="showreport('bysaleamount')">
           
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
                        <th width="320">Percentage</th>
                        <th width="280">Value</th>
                                              
                      </tr>
                    </thead>
                    
                    <tbody id="content">
                    <?php
                    $count=1;
            						foreach($lists->result() as $list):
            					?>
                                  <tr>
                        <td width="55"><?=$count?></td>                      
                         <td width="385"><?=$list->customer_name?></td>
                        <td width="380"><?=number_format($list->total)?><input type="hidden" value="<?=$list->total?>" /></td> 

                         <td width="290"><input type="text" onkeyup="discountbysaleamount(this.value,'<?=$list->total?>',<?=$count?>)"/>%</td>
                         <td id="disvalue<?=$count?>" width="250"></td>
                        
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
