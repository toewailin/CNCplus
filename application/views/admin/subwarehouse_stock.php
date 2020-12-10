

           
            <div class="panel panel-primary">
              <div class="panel-heading heading-over">
              <div class="container"> 
                  <div class="col-md-3">   <h3 class="panel-title"><i class="fa fa-bars"></i> Sub-Warehouse Stock Balance</h3></div>
                 
                  <div class="col-md-8">  
                       <form name="singlesearch" id="subwarehouse_stock" class="searchform">
               
             
              Colunm <select name="colunm" class="form-control-sale" >
                      <option value="product_code">Product Code</option>
                         <option value="product_name">Product Name</option>
                      
                        <option value="unit">Unit</option>
                        <option value="price">Price</option>
                        <option value="quantity">Quantity</option>
                        <option value="category">Category</option>

                      
              </select>
              Value <input type="text" name="search" class="form-control-sale" onkeyup="searchsingle('subwarehouse_stock')"/>
              
             <!--  <input type="button" class="btn btn-primary" value="Search" onclick="searchsingle(document.singlesearch.data.value,document.singlesearch.colunm.value,'subwarehouse_stock')">
            -->

             <input type="button" class="btn btn-default active" value="<?=$search?>" onclick="searchsingle('subwarehouse_stock')">
           
            </form> 
                  </div>


                   <div class="col-lg-1 col-md-1 text-right"> 
                 
                   <?=anchor("admin/insert_form/subwarehouse_stock_form",$addnew,'class="btn btn-default active"')?>
                      
                  </div>
              </div> 
               
              </div>
              
                  <div class="panel-body">
                <div class="table-responsive panel-over">
                 <div class="col-md-2" style="position:fixed;width:200px;overflow:scroll;height:450px">
              <strong>Sub-Warehouses</strong>
                <ul class="sidebar-menu" type="square">     
              <?php 
               foreach($subwarehouses->result() as $subware):
                    
                          ?>           
                  <li class="">
                     <?=anchor("admin/data_list/subwarehouse_stock/".urlencode($subware->id),'<i class="fa fa-"></i><span>'.$subware->name.'</span>')?>
                  </li>
                  <?php endforeach ?>
        
                              
                  
              </ul>
              <br/>
              <br/>
              </div>
              <!-- left end -->
              <!-- right start -->
                <div class="col-md-10" style="margin-left:200px">
                  <table class="table table-bordered table-hover table-striped tablesorter">
                    <thead  class="thead-over">
                      <tr>
                      <th>  No</th>
                        <th width="200"><?=$product_code?></th>
                        <th width="370"><?=$product_name?></th>
                        <th>  Category</th>
                        <th width="280"><?=$quantity?></th>
                        <th width="480">Sub-warehouse Name</th>                        
                        <th width="350"><?=$price?></th>
                                                <th> Total</th>

                   
                         <th width="150"><?=$edit?> / <?=$delete?> </th>
                          
                      </tr>
                    </thead>
                      
                    <tbody id="content">
                    <?php
                                        $count=1;

                 $totalinvest=0;
						foreach($lists->result() as $list):

					           ?>

                      <tr>
                       <td><?=$count?></td>
                        <td><?=$list->product_code?></td>
                        <td><?=$list->product_name?></td>  
                        <td><?=$list->category?></td>                       
                      <td><?=number_format($list->quantity)?> <?=$list->unit?></td>  
                      <td><?=$list->name?></td>

                        <td><?=number_format($list->price)?></td>
                        <td><?=(number_format($list->price*$list->quantity))?></td>
                        
                          <td width="150">
                         <a href="javascript:makeedit('<?=$list->id?>','subwarehouse_stock')"><?=$edit?></a> 
                         / 
	                   <a href="javascript:makedelete('<?=$list->id?>','subwarehouse_stock','<?=$this->uri->segment(4)?>')"><?=$delete?></a>
                        / 
 
 
                         <?=anchor('admin/transfer/'.$list->id,'transfer <i class="fa fa-angle-double-right"></i>', ' class="transfer"  data-toggle="modal" data-toggle="modal" data-target="#transfer'.$list->id.'" title='.$list->product_name);?>
                  
                    <div class="modal fade transfer" id='transfer<?=$list->id?>'>
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <h4 class="modal-title">ကုန္ပစၥည္းေရႊ႕ရန္</h4>
          </div>
          <div class="modal-body">
            <div class="thumbnail">
            <?php echo form_open("admin/","id='".$formid."'");
            echo form_hidden("id",$list->id);
           echo form_hidden("category",$list->category);


            ?>
             <table class="table table-bordered table-hover table-striped tablesorter">
               <tr>
                <td> Sub-Warehouse</td>
              <td> 
                     <span><input type="text" name="warehouse" class="form-control" readonly='readonly' value="<?php echo $list->name ?>" /></span>
</td>
    
               </tr>
                <tr>
                <td>Showroom Name</td><td> 
                <?=form_dropdown('showroom_id',$grab_tbl_id,'','class="form-control clonelastone"');?></td>
               </tr>
                 <tr>
                 <td>ကုဒ္နံပါတ္</td><td> 

                  
                <span><input type="text" name="product_code" class="form-control" readonly='readonly' value="<?=$list->product_code?>" /></span>
              
                 </td>
               </tr>


                <tr>
                 <td>ကုန္ပစၥည္းအမည္</td><td> 

                  
                <span><input type="text" name="product_name" class="form-control" readonly='readonly' value="<?=$list->product_name?>"/></span>
              
                 </td>
               </tr>

                <tr>
                 <td>Unit</td><td> 

                  
                <span><input type="text" name="unit" class="form-control" readonly='readonly' value="<?=$list->unit?>" /></span>
              
                 </td>
               </tr>

                <tr>
                 <td>Price</td><td> 

                  
                <span><input type="text" name="price" class="form-control" readonly='readonly' value="<?=$list->price?>"/></span>
              
                 </td>
               </tr>
                <tr>
                 <td>ဂိုေဒါင္ရွိ အေရအတြက္</td><td> 

                  
                <span><input type="text" name="warehouse_quantity" class="form-control" readonly='readonly' value="<?=$list->quantity?>"/></span>
              
                 </td>
               </tr>
                   <tr>
                 <td>ေရႊ႕ရန္ အေရအတြက္</td><td> 

                  
                <span><input type="text" name="quantity" class="form-control"/></span>
              
                 </td>
               </tr>
               <tr>
                 <td colspan="2" align="center">
                   
                 <?php echo form_button('save',$save,'class="btn btn-primary btn-lgy" onclick="stock_transfer(\'subwarehouse_stock\','.$list->id.')"');;?>
                 </td>
               </tr>
             </table>
             <?=form_close()?>
            </div>
            
           
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
                         </td>
                       
                      </tr>
                    
                       <?php
                       $count++;
                       $totalinvest+=($list->price*$list->quantity);
        		endforeach;
        					
        				        ?>
                         <tr>
                    <td align="center" colspan="7"><br/> စုစုေပါင္း ကုန္က်န္သင့္ေငြ<br/> </td> <td> <br/><?=number_format($totalinvest,3)?><br/></td><td > <br/><br/></td>
                    </tr>
                    </tbody>

                  </table>

                
                </div>
                
              </div>
            </div>
            </div>



