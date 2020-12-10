
           
            <div class="panel panel-primary">
              <div class="panel-heading heading-over">
              <div class="container"> 
                  <div class="col-md-3">   <h3 class="panel-title"><i class="fa fa-bars"></i> Showroom Stock Balance</h3></div>
                 
                  <div class="col-md-8">  
                       <form name="singlesearch" id="showroom_stock" class="searchform">
               
             
              Colunm <select name="colunm" class="form-control-sale" >
                      <option value="product_code">Product Code</option>
                         <option value="product_name">Product Name</option>
                      
                        <option value="unit">Unit</option>
                        <option value="price">Price</option>
                        <option value="quantity">Quantity</option>
                        <option value="category">Category</option>

              </select>
              Value <input type="text" name="search" class="form-control-sale" onkeyup="searchsingle('showroom_stock')"/>
              
             <!--  <input type="button" class="btn btn-primary" value="Search" onclick="searchsingle(document.singlesearch.data.value,document.singlesearch.colunm.value,'showroom_stock')">
            -->

             <input type="button" class="btn btn-default active" value="<?=$search?>" onclick="searchsingle('showroom_stock')">
           
            </form> 
                  </div>


               
                <div class="col-lg-1 col-md-1 text-right"> 
                 
                   <?=anchor("admin/insert_form/showroom_stock_form",$addnew,'class="btn btn-default active"')?>
                      
                  </div>
              </div> 
               
              </div>
              
                 <div class="panel-body">
                <div class="table-responsive panel-over">
                 <div class="col-md-2" style="position:fixed;width:200px;overflow:scroll;height:450px">
              <strong>Showroom Name</strong>
                <ul class="sidebar-menu" type="square">     
              <?php 
               foreach($showrooms->result() as $showroom):
                    
                          ?>           
                  <li class="">
                     <?=anchor("admin/data_list/showroom_stock/".$showroom->id,'<i class="fa fa-"></i><span>'.$showroom->name.'</span>')?>
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
                        <th width="350"><?=$price?></th>
                                                <th> Total</th>
                        <th width="480">Showroom Name</th>    
                        <th>Location</th>                    

                   
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
                        <td><?=number_format($list->price)?></td>
                          <td><?=number_format($list->price*$list->quantity)?></td>
                         <td><?=$list->name?></td>
                         <td><?=$list->location?></td>  

                        
                          <td width="150">
                         <a href="javascript:makeedit('<?=$list->id?>','showroom_stock')"><?=$edit?></a> 
                         / 
	                   <a href="javascript:makedelete('<?=$list->id?>','showroom_stock','<?=$this->uri->segment(4)?>')"><?=$delete?></a>
                       
                         </td>
                         
                      </tr>
                    
                       <?php
                       $count++;

                       $totalinvest+=$list->quantity*$list->price;
        		endforeach;
        					
        				        ?>
                         <tr>
                    <td align="center" colspan="6"><br/> စုစုေပါင္း ကုန္က်န္သင့္ေငြ<br/> </td> <td> <br/><?=number_format($totalinvest)?><br/></td><td > <br/><br/></td>
                    </tr>
                    </tbody>

                  </table>

                
                </div>
                
              </div>
            </div>
            </div>


