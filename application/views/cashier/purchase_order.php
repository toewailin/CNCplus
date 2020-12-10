
         
           
           
            <div class="panel panel-primary">
              <div class="panel-heading heading-over">
                <div class="container">
              <div class="col-lg-3 col-md-3">
                <h3 class="panel-title"><i class="fa fa-bars"></i> <?=$supplierordertitle?></h3>
                </div>
                <div class="col-lg-8 col-md-8">


         <form name="singlesearch" id="purchase_order_header">
    <?=$from?> <input type="text" name="startdate" class="date form-control-sale" id="date1"/>
              <?=$to?> <input type="text" name="enddate" class="date form-control-sale" id="date2"/>
              
            
              Colunm <select name="colunm" class="form-control-sale" >
                     
                         <option value="supplier">Supplier Name</option>
                                              
                       
                         <option value="voucherno">Voucher No</option>
              </select>
              Value <input type="text" name="search" class="form-control-sale" onkeyup="searchsingle('purchase_order_header')"/>
              <input type="button" class="btn btn-primary active" value="<?=$search?>" onclick="searchsingle('purchase_order_header')">
              
            </form>         
                 </div>
                  <div class="col-lg-1 col-md-1 text-right">  
                           <!--  <a href="javascript:show_form('purchase_order_form')" class="btn btn-default active"><?=$addnew?></a> 
               
                         -->
               <?=anchor("cashier/insert_form/purchase_order_form",$addnew,'class="btn btn-default active"')?>

                           
                        </div>
                
              </div>
               
              </div>
              
              <div class="panel-body">
                <div class="table-responsive panel-over">
                  <table class="table table-bordered table-hover table-striped tablesorter">
                    <thead class="thead-over">
                      <tr>
                        <th width="50"><?=$no?></th>  
                         <th width="130"><?=$voucher?></th>    
                         <th width="230"><?=$suppliername?></th>
                          <th width="180"><?=$netamounttosupplier?></th>                       
                         <th width="100"><?=$advance?></th>
                      
                        <th width="150"><?=$date?></th>
                          <th width="100">Status</th>   
                         <th width="130">View Details</th>
                         <th>Cancel</th>
                      </tr>
                    </thead>
                      
                    <tbody id="content">
                    <?php
                    $count=1;
                foreach($lists->result() as $list):
                     ?>
                      <tr>
                        <td width="50" align="center"><?=$count?></td>
                        <td width="130"><?=$list->voucherno?></td>
                         <td width="200"><?=$list->supplier?></td>
                         <td width="90"><?=$list->netamounttosupplier?></td>
                        <td width="90"><?=$list->advance?></td> 
                       <td width="120" align="center"><?=$list->date?></td>
                        <td width="90" align="center"><?php if($list->status==1){echo "<span class='btn btn-success'>ေရာက္ျပီး </span>";}else{echo "<span class='btn btn-warning'>က်န္ေသး</span>";}?></td>                        
                        <td width="150" align="center">
                        
                        
                          <a onclick="viewdetails('<?=$list->voucherno?>','porder')">Order Details </a> 
            /
            <?php
            if($list->status==0)
            {
              echo anchor("cashier/viewdetails_deliver/pdeliver/".$list->voucherno,"Change To Bill","class='btn btn-primary'");
            }
            else
            {}
            ?>
           
           <!--  <a class="btn btn-info" onclick="viewdetails('<?=$list->voucherno?>','pdeliver')"> Make Deliver </a>  -->
                          
                         
            
                        
                         </td>
                          <td> 
 <a href="javascript:makecancel('<?=$list->voucherno?>','purchase_order','<?=$this->uri->segment(4)?>')">Cancel</a>
                      </td>
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
       
       