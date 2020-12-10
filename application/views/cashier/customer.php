 <div class="panel panel-primary">
              <div class="panel-heading heading-over">
               <div class="container">


                  <div class="col-lg-2 col-md-2">
                    <h3 class="panel-title"><i class="fa fa-bars"></i> <?=$customertitle?></h3>
                  </div>

                  <div class="col-lg-9 col-md-9">
                      <form name="getreport" id="customer">
             <?=$from?> <input type="text" name="startdate" class="form-control-sale date" id="date1"/>
              <?=$to?> <input type="text" name="enddate" class="form-control-sale date" id="date2"/>
             
              Colunm <select name="colunm" class="form-control-sale" >
                        <option value="customer_name">Customer name</option>
                        <option value="address">Address</option>
                        <option value="phone">Phone</option>
                        <option value="contact_person">Contact Person</option>
                       
              </select>
              Value <input type="text" name="search" class="form-control-sale" onkeyup="searchsingle('customer')"/>
              
              <input type="button" class="btn btn-primary active" value="<?=$search?>" onclick="searchsingle('customer')">
            </form> 
                  </div>
                

                <div class="col-lg-1 col-md-1 text-right">    
                 
                  
                   
                  </div>


              </div>
              </div>
              
              <div class="panel-body">
                <div class="table-responsive panel-over">
                  <table class="table table-bordered table-hover table-striped tablesorter">
                    <thead class="thead-over">
                      <tr>
                        <th width="70"><?=$no?></th>                                              
                        <th width="260"><?=$customer?></th>
                        <th width="240"><?=$address?></th>
                        <th width="240"><?=$phone?></th>
                         <th width="250"><?=$contact_person?></th>
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
                      <td width="70"><?=$count?></td>
                        <td width="260"><?=$list->customer_name?></td>
                        <td width="240"><?=$list->address?></td>
                          <td width="240"><?=$list->phone?></td>
                         <td width="250"><?=$list->contact_person?></td>
                          <td id="exceed_amount<?=$list->id?>"><?php if($list->total_debt>0){echo number_format($list->total_debt);$debttype="debt_to_customer";}?></td>
                         <td id="require_amount<?=$list->id?>"><?php if($list->total_debt<0) {echo number_format($list->total_debt);$debttype="debt_from_customer";}?></td>
                        
                       <td width="230"><?=$list->date?></td>
                      
                         
                          
                      </tr>
                       <?php
                       $count++;
					endforeach;
					
				?>
                    </tbody>
                  </table>
                    <?php
                  echo "<div class='pagination'>";
                  echo $this->pagination->create_links();
                  echo "</div>";
                  ?>
                </div>
                
              </div>
            </div>
          </div>
          
    