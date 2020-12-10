
          
            <div class="panel panel-primary">
              <div class="panel-heading">

                <div class="container">
                <div class="col-md-3">
                <h3 class="panel-title"><i class="fa fa-bars"></i> <?=$productpricetitle?></h3>
                </div>
                <div class="col-md-9">
                     <form name="getreport" id="product_price">
              <?=$from?> <input type="text" name="startdate" class="form-control-sale date" id="date1"/>
              <?=$to?> <input type="text" name="enddate" class="form-control-sale date" id="date2"/>
            
              Colunm <select name="colunm" class="form-control-sale" >
                        <option value="product_code">Product Code</option>
                       <option value="unit">Unit</option>
                       
                        <option value="purchase_price">Purchasing Price</option>
                        
              </select>
               Value <input type="text" name="search" class="form-control-sale" />
              
              <input type="button" class="btn btn-primary active" value="<?=$search?>" onclick="searchsingle('product_price')">
             <!-- <span class="btn btn-default active" style="float:right" onclick="showdialogform('insert_form/product_price_form')" >+ <?=$addnew?></span> </a>
            --> </form> 
          
                </div>
               

              </div>
                
              </div>
               <ul class="nav nav-tabs" role="tablist">
                <li class="active" width="500"><a href="#currentprice" role="tab" data-toggle="tab"><?=$currentprice?></a></li>
                <li><a href="#lastprice" role="tab" data-toggle="tab"><?=$lastprice?></a></li>
              </ul>

              <div class="panel-body">


                <div class="table-responsive"  id="content">
                 <div class="tab-content">

                <div class="tab-pane fade in active" id="currentprice">
                
                  <table class="table table-bordered table-hover table-striped tablesorter">
                    <thead>
                      <tr>
                      <th width="20"><?=$no?></th>
                        <th><?=$product_code?></th>
                        <th><?=$product_name?></th>
                        <th><?=$unitname?></th>
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
                        <th><?=$unitname?></th>
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


                   
                    </div>


               
              
            </div>
                
      </div>
  </div>
