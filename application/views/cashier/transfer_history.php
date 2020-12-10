  
            <div class="panel panel-primary">
              <div class="panel-heading heading-over">
              <div class="container"> 
                  <div class="col-lg-2 col-md-2">   <h3 class="panel-title"><i class="fa fa-bars"></i> Product Transfer Lists</h3></div>
                 
                  <div class="col-lg-8 col-md-9">  
                       <form name="singlesearch" id="transfer_history" class="searchform">
               
              <?=$from?> <input type="text" name="startdate" class="form-control-sale date" id="date1"/>
                  <?=$to?> <input type="text" name="enddate" class="form-control-sale date" id="date2"/>
                 
              Colunm <select name="colunm" class="form-control-sale" >
               <option value="warehouse">Warehouse</option>
                        <option value="shop">Shop</option>
                      <option value="product_code">Product Code</option>
                         <option value="product_name">Product Name</option>
                      
                        <option value="unit">Unit</option>
                       
                      
              </select>
              Value <input type="text" name="search" class="form-control-sale" onkeyup="searchsingle('transfer_history')"/>
              
             <!--  <input type="button" class="btn btn-primary" value="Search" onclick="searchsingle(document.singlesearch.data.value,document.singlesearch.colunm.value,'transfer_history')">
            -->

             <input type="button" class="btn btn-default active" value="<?=$search?>" onclick="searchsingle('transfer_history')">
           
            </form> 
                  </div>


                  <div class=" col-lg-2 col-md-2 text-right"> 
                    <!--  <a href="javascript:show_form('transfer_history_form')" class="btn btn-default active">Add Multiple Transfer</a> 
                      --> 
                  </div>
              </div> 
               
              </div>
              
              <div class="panel-body">
                <div class="table-responsive panel-over">
                  <table class="table table-bordered table-hover table-striped tablesorter">
                    <thead  class="thead-over">
                      <tr>
                        <th >Godaung Name</th>
                        <th >Shop Name</th>
                        <th >Product Code</th>
                        <th >Product Name</th>                        
                        <th >Quantity</th>
                        <th>Date</th>
                     
                         <!-- <th width="150"><?=$edit?> / <?=$delete?> / <?=$transfer?></th> -->
                      </tr>
                    </thead>
                      
                    <tbody id="content">
                    <?php
               
						foreach($lists->result() as $list):

					           ?>

                      <tr>
                       <td><?=$list->warehouse?></td>  
                        <td><?=$list->shop?></td>
                        <td><?=$list->product_code?></td>
                        <td><?=$list->product_name?></td>                         
                         <td><?=number_format($list->quantity)?> <?=$list->unit?></td>  
                         <td><?=$list->date?></td>
                        
                          <!-- <td width="150">
                         <a href="javascript:makeedit('<?=$list->id?>','transfer_history')"><?=$edit?></a> 
                         / 
	                   <a href="javascript:makedelete('<?=$list->id?>','transfer_history','<?=$this->uri->segment(4)?>')"><?=$delete?></a>
                       
                         </td> -->
                      </tr>
                    <?php endforeach;?>
                       
                    </tbody>

                  </table>

                
                </div>
                
              </div>

              
            </div>


