
            <div class="panel panel-primary">
              <div class="panel-heading heading-over">

               <div class="container">

                    <div class="col-md-3">
                  <h3 class="panel-title"><i class="fa fa-bars"></i> Showroom Reject Lists</h3>
                  </div>

                  <div class="col-md-8">
                     <form name="singlesearch" id="damage_showroom">
                 <?=$from?> <input type="text" name="startdate" class="form-control-sale date" id="date1"/>
                  <?=$to?> <input type="text" name="enddate" class="form-control-sale date" id="date2"/>
                 
                  Colunm <select name="colunm" class="form-control-sale" >
                  <option value="showroom_id">Showroom Name</option>
                          <option value="product_code">Product Code</option>
                             <option value="product_name">Product Name</option>                     
                            <option value="unit">Unit</option>                     
                            <option value="quantity">Quantity</option>
                                         
              </select>
               
               Value <input type="text" name="search" class="form-control-sale" onkeyup="searchsingle('damage_showroom')"/>
          
              <input type="button" class="btn btn-primary active" value="<?=$search?>" onclick="searchsingle('damage_showroom')">
           
            </form> 
                  </div>

                 
            <div class="col-md-1 text-right"> 
                
                  <?=anchor("admin/insert_form/damage_showroom_form",$addnew,'class="btn btn-default active"')?>

                   
                  </div>

                </div>
              </div>
            
              <div class="panel-body">
                <div class="table-responsive panel-over">
                  <table class="table table-bordered table-hover table-striped tablesorter">
                    <thead class="thead-over">
                      <tr>
                        <th width="150"><?=$product_code?></th>
                        <th width="350"><?=$product_name?></th>                      
                                             
                        <th width="150"><?=$unitname?></th>
                        <th width="150"><?=$price?></th>
                       
                        <th width="250"><?=$quantity?></th> 
                        <th width="150"><?=$total?></th> 

                         <th width="150"><?=$date?></th>
                        <th width="150"><?=$authority?></th>
                        <th>Showroom Name</th>
               
                         <th width="150"><?=$edit?>/<?=$delete?></th>
                   
                      </tr>
                    </thead>
                    
                    <tbody id="content">
                    <?php
                    $totalqty=0;
                    $totalcost=0;
						  foreach($lists->result() as $list):
					           ?>
                      <tr>
                        <td width="150"><?=$list->product_code?></td>
                        <td width="350"><?=$list->product_name?></td>
                     
                         <td width="150"><?=$list->unit?></td>
                        <td width="150"><?=number_format($list->amountforeachunit)?></td>
                         <td width="250"><?=$list->quantity?></td>
                       <td width="150"><?=number_format($list->total)?></td>
                         <td width="150"><?=$list->date?></td>
                         <td width="150"><?=$list->authority?></td>
                         <td><?=$list->showroom_id?>></td>
                        
                         <td width="150">
                      
                        <!--   <a href="javascript:showdialogform('edit_form/damage_showroom/<?=$list->id?>')"><?=$edit?></a> /  -->
	                    <a href="javascript:makeedit('<?=$list->id?>','damage_showroom')"><?=$edit?></a> / 
                     <a href="javascript:makedelete('<?=$list->id?>','damage_showroom','<?=$this->uri->segment(4)?>')"><?=$delete?></a>
                         </td>

                      
                      </tr>
                       <?php
                       $totalqty+=$list->quantity;
                        $totalcost+=$list->total;
                					endforeach;
                					
                				?>
                          <tr>
                    <td align="right" colspan="4">All Total </td> <td> <?=$totalqty?></td><td colspan="4"><?=number_format($totalcost)?></td>
                    </tr>
                    </tbody>
                  </table>
                  
                </div>
                
              </div>
            </div>
          </div>
       </div>
       