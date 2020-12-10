   
            <div class="panel panel-primary">
              <div class="panel-heading heading-over">

               <div class="container">

                    <div class="col-md-2">
                  <h3 class="panel-title"><i class="fa fa-bars"></i> Purchase Returns</h3>
                  </div>

                  <div class="col-md-9">
                     <form name="singlesearch" id="purchase_return_header">
                 <?=$from?> <input type="text" name="startdate" class="form-control-sale date" id="date1"/>
                  <?=$to?> <input type="text" name="enddate" class="form-control-sale date" id="date2"/>
                 
                  Colunm <select name="colunm" class="form-control-sale" >
                             <option value="warehouse">Delivered Warehouse</option>
                              <option value="voucherno">Voucherno</option>
                            <option value="supplier">Supplier</option>
                                             
              </select>
               
               Value <input type="text" name="search" class="form-control-sale" onkeyup="searchsingle('purchase_return_header')"/>
          
              <input type="button" class="btn btn-primary active" value="<?=$search?>" onclick="searchsingle('purchase_return_header')">
           
            </form> 
                  </div>

                 
            <div class="col-md-1 text-right"> 
            
             <?=anchor("cashier/insert_form/purchase_return_form",$addnew,'class="btn btn-default active"')?>
                
                 
                  </div>

                </div>
              </div>
            
              <div class="panel-body">
                <div class="table-responsive panel-over">
                  <table class="table table-bordered table-hover table-striped tablesorter">
                    <thead class="thead-over">
                      <tr>
                        <th width="150">Voucher No</th>
                        <th width="350"><?=$suppliername?></th>                      
                                             
                        <th width="150">Total Quantity</th>
                        <th width="150">Net Total</th>
                       
                        <th width="250">Note</th> 
                        <th width="250">Delivered Warehouse</th> 
                      
                         <th width="150"><?=$date?></th>
                        <th width="150"><?=$authority?></th>
                         <th>View Details</th>
                 <?php
               // if ($this->session->userdata("authority")=='administrator')
               // {
                ?>
<!--                          <th width="150"><?=$edit?>/<?=$delete?></th>
 -->                    <?php
                //  }
                 ?>  
                      </tr>
                    </thead>
                    
                    <tbody id="content">
                    <?php
                    $totalqty=0;
                    $total=0;
						  foreach($lists->result() as $list):
					           ?>
                      <tr>
                        <td width="150"><?=$list->voucherno?></td>
                        <td width="350"><?=$list->supplier?></td>
                     
                         <td width="150"><?=$list->totalqty?></td>
                        <td width="150"><?=$list->nettotal?></td>
                         <td width="250"><?=$list->note?></td>
                         <td width="250"><?=$list->warehouse?></td>

                         <td width="150"><?=$list->date?></td>
                         <td width="150"><?=$list->authority?></td>
                          <td width="150">
                      
                          <a onclick="viewdetails('<?=$list->voucherno?>','preturnvoucher','')">View Details </a>
                       </td>
                     
                           <?php
               // if ($this->session->userdata("authority")=='administrator')
               // {
                ?>
                       <!--   <td width="150">
                      
                        <!--   <a href="javascript:showdialogform('edit_form/purchase_return/<?=$list->id?>')"><?=$edit?></a> /  -->
	                   <!--  <a href="javascript:makeedit('<?=$list->id?>','purchase_return')"><?=$edit?></a> / 
                     <a href="javascript:makedelete('<?=$list->id?>','purchase_return','<?=$this->uri->segment(4)?>')"><?=$delete?></a>
                         </td>
 --> 
                      <?php
                //  }
                 ?>  
                      </tr>
                       <?php
                       $totalqty+=$list->totalqty;
                        $total+=$list->nettotal;
                					endforeach;
                					
                				?>
                          <tr>
                    <td align="right" colspan="2">All Total </td> <td> <?=$totalqty?></td><td colspan=""><?=number_format($total)?></td>
                    </tr>
                    </tbody>
                  </table>
                  
                </div>
                
              </div>
            </div>
          </div>
       </div>
  