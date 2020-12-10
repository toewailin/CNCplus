
 <div class="container">
          
            <div class="panel panel-primary">
              <div class="panel-heading heading-over">
              <div class="container"> 

                  <div class="col-lg-2 col-md-2">  
    <h3 class="panel-title"><i class="fa fa-bars"></i> Showroom Sale Lists</h3>
                  </div>

                  <div class="col-lg-9 col-md-9">  
                        <form name="singlesearch" id="sale">
               
<?=$from?> <input type="text" name="startdate" class="form-control-sale date" id="date1"/>
              <?=$to?> <input type="text" name="enddate" class="form-control-sale date" id="date2"/>
         
              Colunm <select name="colunm" class="form-control-sale" >
                     
                        <option value="voucherno">Voucherno</option>
                        <option value="customer_name">Customer Name</option>
                        <option value="received">Received</option>
                        <option value="nettotal">Net Total</option>
                        <option value="balance">Balance </option>
                         <option value="authority">Authority</option>
              </select>
            
               Value <input type="text" name="search" class="form-control-sale" onkeyup="searchsingle('sale')"/>
              <input type="button" class="btn btn-primary active" value="<?=$search?>" onclick="searchsingle('sale')">
           
            </form> 
                  </div>


                <div class="col-lg-1 col-md-1 text-right">  
    
                                              <?=anchor("admin/insert_form/showroom_sale_form",$addnew,'class="btn btn-default active"')?>


                     
                  </div>

              </div>  
                
              </div>
              
              <div class="panel-body">
                <div class="table-responsive panel-over">
                  <table class="table table-bordered table-hover table-striped tablesorter">
                    <thead class="thead-over">
                      <tr>                        
                        <th width="50"><?=$no?></th>
                        <th width="100"><?=$voucher?></th>                       
                         <th width="200"><?=$customer?></th>
                        <th width="120"><?=$total?></th>
                        <th width="120">Debt</th>
                        <th width="120"><?=$netamount?></th>
                        <th width="120"><?=$receive?></th>
                        <th width="120">Discount</th>
                        <th width="120">Delivery Fees</th>
                        <th width="120">Require Amount</th>
                        <th width="120">Exceed Amount</th>
                        <th>Salesman</th>
                        <th>ပစၥည္းထုတ္ေပးသူ</th>
                        <th width="120">Date</th>
                        <th width="120">View Details</th>
                      </tr>
                    </thead>                 
                  
                    <tbody id="content">
                  <?php
                    $count=1;
                    $totalamount=0;
                    $totalreceive=0;
                    $totaldeliveryfees=0;
                    $totalreqamt=0;
                    $totaljackpot=0;
                    $totaldebt=0;
                    $totalnettotal=0;
                        foreach($lists->result() as $list):
                      ?>
                                  <tr>
                        <td width="40"><?=$count?></td>
                        <td width="95"><?=$list->voucherno?></td>
                        <td width="150"><?=$list->customer_name?></td>
                        <td width="90"><?=number_format($list->totalamount)?></td>
                         <td width="90"><?=number_format($list->totaldebt)?></td>
                           <td width="90"><?=number_format($list->nettotal)?></td>
                        <td width="90"><?=number_format($list->received)?></td> 
                         <td width="90"><?=number_format($list->jackpot)?></td>
                        <td width="90"><?=number_format($list->deliveryfees)?></td>    
                        <td width="90"><?php if($list->exceedamount<0) echo $list->exceedamount;?></td>  
                         <td width="90"><?php if($list->exceedamount>0) echo $list->exceedamount;?></td> 
                        <td><?=$list->authority?></td>
                        <td><?=$list->staff?></td>
                        <td width="90"><?=$list->date?></td>                                      
                        <td width="90">
                      <a onclick="viewdetails('<?=$list->voucherno?>','voucher','')">View Details </a>
                 
                        </td>
                                      </tr>
                                       <?php
                                       $count++;
                                       $totalamount+=$list->totalamount;
                                      $totalreceive+=$list->received;
                                      $totaldeliveryfees+=$list->deliveryfees;
                                       $totalnettotal+=$list->nettotal;
                                       $totaldebt+=abs($list->totaldebt);
                                       $totalreqamt+=$list->exceedamount;
                                        $totaljackpot+=$list->jackpot;
                          endforeach;
                        
                        ?>

                        <tr>

                        <td width="40"></td>
                        <td width="95"></td>
                        <td width="150">Total</td>
                        <td width="90"><?=number_format($totalamount)?></td>
                         <td width="90"><?=number_format($totaldebt)?></td>
                           <td width="90"><?=number_format($totalnettotal)?></td>
                        <td width="90"><?=number_format($totalreceive)?></td> 
                         <td width="90"><?=number_format($totaljackpot)?></td>
                        <td width="90"><?=number_format($totaldeliveryfees)?></td>    
                        <td width="90"><?php if($totalreqamt<0) echo abs($totalreqamt);?></td>  
                         <td width="90"><?php if($totalreqamt>0) echo abs($totalreqamt);?></td> 
                      
                        <td width="90"></td>                                      
                        <td width="90">
                      
                        </td>
                        </tr>
                  <tr><td colspan="12" align="center"> <?="အသားတင္ရရွိေသာေငြသား (၀ယ္သူမွေပးေငြ (".number_format($totalreceive).")  +   စုစုေပါင္းပို႕ခ (".number_format($totaldeliveryfees).")) = ".number_format($totalreceive-$totaldeliveryfees)?></td></tr>


                     
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


          </div>
      
