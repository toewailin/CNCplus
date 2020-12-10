   
        
            <div class="panel panel-primary">
              <div class="panel-heading heading-over">
              <div class="container">
              <div class="col-lg-2 col-md-2">
                <h3 class="panel-title"><i class="fa fa-bars"></i> <?=$suppliertitle?></h3>
                </div>

                <div class="col-lg-9 col-md-9">
              <form name="getreport" id="supplier">
               <?=$from?> <input type="text" name="startdate" class="form-control-sale date" id="date1"/>
              <?=$to?> <input type="text" name="enddate" class="form-control-sale date" id="date2"/>
              Colunm <select name="colunm" class="form-control-sale" >
                        <option value="supplier_name">Supplier name</option>
                        <option value="address">Address</option>
                        <option value="phone">Phone</option>
                        <option value="contact_person">Contact Person</option>
                       
              </select>
              Value <input type="text" name="search" class="form-control-sale" onkeyup="searchsingle('supplier')"/>
              
           
              <input type="button" class="btn btn-primary active" value="<?=$search?>" onclick="searchsingle('supplier')">
               </form> 
            </div>

            <div class="col-lg-1 col-md-1 text-right"> 
              
                 
          
            </div>
             </div>
             </div>

            

              <div class="panel-body ">
                <div class="table-responsive panel-over">
                  <table class="table table-bordered table-hover table-striped tablesorter">
                    <thead class="thead-over">
                      <tr>
                        <th><?=$no?></th>                                              
                        <th width="200">Supplier Name</th>
                        <th width="190"><?=$address?></th>
                         <th width="150"><?=$contact_person?></th>
                        <th width="150"><?=$phone?></th>
                        <th>Exceed Amount</th>
                        <th>Required Amount</th>
                       
                      <th><?=$date?></th>
                        
                      </tr>
                    </thead>
                      
                    <tbody id="content">
                    <?php
                    $count=1;
						  foreach($lists->result() as $list):
					           ?>
                      <tr>
                      <td width="50"><?=$count?></td>
                        <td><?=$list->supplier_name?></td>
                        <td><?=$list->address?></td>
                         <td><?=$list->contact_person?></td>  
                          <td><?=$list->phone?></td>
                                               
                           <td id="exceed_amount<?=$list->id?>"><?php if($list->total_debt>0){echo number_format($list->total_debt);$debttype="debt_to_customer";}?></td>
                         <td id="require_amount<?=$list->id?>"><?php if($list->total_debt<0) {echo number_format($list->total_debt);$debttype="debt_from_customer";}?></td>
                        
                              <td><?=$list->date?></td> 
                       
                        
                          
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
     