      
            <div class="panel panel-primary">
              <div class="panel-heading heading-over">
              <div class="container"> 
                  <div class="col-md-3">   <h3 class="panel-title"><i class="fa fa-bars"></i> <?=$shop_stock?></h3></div>
                 
                  <div class="col-md-7">  
                       <form name="singlesearch" id="shop_stock" class="searchform">
               
             
              Colunm <select name="colunm" class="form-control-sale" >
                      <option value="product_code">Product Code</option>
                         <option value="product_name">Product Name</option>
                      
                        <option value="unit">Unit</option>
                        <option value="price">Price</option>
                        <option value="quantity">Quantity</option>
                      
              </select>
              Value <input type="text" name="search" class="form-control-sale" onkeyup="searchsingle('shop_stock')"/>
              
             <!--  <input type="button" class="btn btn-primary" value="Search" onclick="searchsingle(document.singlesearch.data.value,document.singlesearch.colunm.value,'shop_stock')">
            -->

             <input type="button" class="btn btn-default active" value="<?=$search?>" onclick="searchsingle('shop_stock')">
           
            </form> 
                  </div>


                  <div class="col-md-2 text-right"> 
                      
                  </div>
              </div> 
               
              </div>
              
              <div class="panel-body">
                <div class="table-responsive panel-over">
                 <div class="col-md-2" style="position:fixed;width:200px;overflow:scroll;height:450px">
              <strong>Categories</strong>
                <ul class="sidebar-menu" type="square">     
              <?php 
               foreach($categories->result() as $category):
                    
                          ?>           
                  <li class="">
                     <?=anchor("cashier/data_list/shop_stock/".$category->category,'<i class="fa fa-"></i><span>'.$category->category.'</span>')?>
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
                      <th>No</th>
                        <th width="200"><?=$product_code?></th>
                        <th width="370"><?=$product_name?></th>
                        <th>Category</th>
                        <th>Balance</th>
                         <th width=""><?=$price?></th>
                        <th> Total</th>
                    
                    
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
                         <td><?=number_format($list->quantity)?> <?=$list->unit?> <?=($list->total_smallitemcount)-($list->quantity*$list->smallitemcount)?></td>  
                        <td><?=number_format($list->price)?></td>
                     <td><?=(number_format($list->price*$list->quantity))?></td>

                        
                         
                      </tr>
                    
                       <?php
                       $count++;
                       $totalinvest+=$list->total_smallitemcount*($list->price/$list->smallitemcount);
        		endforeach;
        					
        				        ?>
                         <tr>
                    <td align="center" colspan="4"><br/> စုစုေပါင္း ကုန္က်န္သင့္ေငြ<br/> </td> <td> <br/><?=number_format($totalinvest,3)?><br/></td><td > <br/><br/></td>
                    </tr>
                    </tbody>

                  </table>
                  </div>
                
                </div>
                
              </div>
            </div>

