     <form name="getreport"  id="purchase_header">
                <?=$from?> <input type="text" name="startdate" class="form-control-sale" id="date1"/>
              <?=$to?> <input type="text" name="enddate" class="form-control-sale" id="date2"/>
            
              Colunm <select name="colunm" class="form-control-sale" >

                      <option value="supplier_name">Supplier Name</option>
                         <option value="product_name">Voucher No</option>                       
                         <option value="requiredamount">Required Amount</option>
                        
                      
              </select>
               Value <input type="text" name="search" class="form-control-sale" />
              
              <input type="button" class="btn btn-primary" value="<?=$search?>" onclick="searchdebt('purchase_header')">
            
            </form>
             
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-bars"></i> <?=$debttosuppliertitle?></h3>
              </div>
              <div class="panel-body">
              <table class="table table-bordered table-hover table-striped tablesorter">
                    <thead>
                      <tr>
                        <th> <?=$no?></th>
                        <th><?=$voucher?></th>
                        <th><?=$suppliername?></th>
                        <th><?=$total?></th>
                        <th><?=$advance?></th>
                         <th><?=$exceedamounttopayment?></th>
                           <th><?="ေနာက္ဆံုးက်န္ေငြ"?></th>
                        <th><?=$date?></th>
                           <th width="170">View Details / Returns</th>
                      </tr>
                    </thead>
                    <tbody id="content">
                    <?php
                    $count=1;
                    $total=0;
            						foreach($lists->result() as $list):
            					?>
                                  <tr>
                        <td><?=$count?></td>
                        <td><?=$list->voucherno?></td>
                        <td><?=$list->supplier_name?></td>
                        <td><?=number_format($list->netamounttosupplier)?></td>                         
                         <td><?=number_format($list->advance)?></td>
                         <td><?=number_format($list->balance)?></td>
                         <td><?=number_format($list->requiredamount)?></td>
                         <td><?=$list->date?></td>                        
                         <td>
                     
               	<a onclick="viewdetails('<?=$list->voucherno?>','debt_from_supplier','')">View Details </a>/
                    <a onclick="viewreturns('<?=$list->voucherno?>','debt_from_supplier')"> Returns</a>
                                          </td>
                                      </tr>
                                       <?php
                                       $count++;
                                       $total+=$list->requiredamount;
                					endforeach;
                				
                				?>
                        <tr>
                    <td align="right" colspan="6">All Total </td> <td colspan="4"> <?=number_format($total)?></td>
                    </tr>
                    </tbody>
                  </table>
                   
      </div>
    </div>
  </div>
