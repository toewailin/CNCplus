
         
            <div class="panel panel-primary" id="reportdata">
              <div class="panel-heading heading-over">

                  <div class="container"> 

                      <div class="col-lg-2 col-md-2">  

                        <h3 class="panel-title"><i class="fa fa-bars"></i> Sale Delivery List</h3>
                      </div>


                        <div class="col-lg-9 col-md-9">  
                             <form name="singlesearch" id="sale_delivery_header">
   <?=$from?> <input type="text" name="startdate" class="form-control-sale date " id="date1"/>
              <?=$to?> <input type="text" name="enddate" class="form-control-sale date " id="date2"/>
             
              Colunm <select name="colunm" class="form-control-sale" >
                    
                         <option value="voucherno">Voucher No</option>
                        <option value="customer">Customer Name</option>
                       
              </select>
              Value <input type="text" name="search" class="form-control-sale" onkeyup="searchsingle('sale_deliver_header')"/>

              <input type="button" class="btn btn-primary" value="<?=$search?>" onclick="searchsingle('sale_deliver_header')">
           
            </form> 
                        </div>


                </div>

              </div>
             
              <div class="panel-body">
                <div class="table-responsive panel-over">
                  <table class="table table-bordered table-hover table-striped tablesorter">
                    <thead class="thead-over">
                      <tr>
                        <th width="60"><?=$no?></th>
                        <th width="130"><?=$voucher?></th>
                        <th width="220"><?=$customername?></th>
                         <th width="100">Delivered Quantity</th>
                         <th width="220">Net Amount</th>
                          <th width="100">Advance</th>
                      
                        <th width="200"><?=$balance?></th>
                        <th width="150"><?=$date?></th>
                       <th>Note</th>
                       <th width="120">View Details</th>
                      </tr>
                    </thead>
                      
                    <tbody id="content">
                    <?php
                    $count=1;
                    $total=0;
              foreach($lists->result() as $list):
              
                     ?>
                      <tr>
                      <td width="60"><?=$count?></td>
                       <td width="130"><?=$list->voucherno?></td>
                        <td width="220"><?=$list->customer?></td>
                          <td width="100"><?=$list->totalqty?></td>
                          <td width="220"><?=$list->netamount?></td>
                       <td width="100"><?=$list->advance?></td>
                                   
                          <td  width="200"><?=$list->balance?></td>
                         <td width="150"><?=$list->date?></td>  
                         <td><?=$list->note?></td>                       
                         <td width="150">
                      
                          <a onclick="viewdetails('<?=$list->voucherno?>','voucher','')">View Details </a>
                       </td>
                     
                      </tr>
                     <?php
                     $count++;
                    $total+=$list->netamount;
                  endforeach;
                  ?>
                  <tr>
                    <td align="right" colspan="3">All Total </td> <td> <?=number_format($total)?></td>
                    </tr>
                  </tbody>
                  </table>
                 
                </div>

              
               
              </div>
            </div>
          </div>
   