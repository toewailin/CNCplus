
         
            <div class="panel panel-primary">
              <div class="panel-heading heading-over">
              <div class="container">
              <div class="col-md-3">
                <h3 class="panel-title"><i class="fa fa-bars"></i> <?=$unittitle?></h3>
                </div>
                <div class="col-md-8">
                  
        <form name="getreport" id="unit">
        <input type="hidden" name="category" value="<?=$this->uri->segment(4)?>">
              Colunm <select name="colunm" class="form-control-sale" >   
               <option value="product_code">Product Code</option>
                <option value="product_name">Product Name</option>                   
                        <option value="unit">Unit</option>
                        <option value="category">Category</option>
                        
                      
              </select>
              Value <input type="text" name="search" class="form-control-sale" onkeyup="searchsingle('unit')" />
             
             <!--  <?=$from?> <input type="date" name="startdate" class="form-control-sale" id="date1"/>
              <?=$to?> <input type="date" name="enddate" class="form-control-sale" id="date2"/> -->
              
              <input type="button" class="btn btn-primary active" value="<?=$search?>" onclick="searchsingle('unit')">
             
             </form> 
                </div>
                <div class="col-md-1 text-right"> 
                
                  <a href="javascript:show_form('unit_form')" class="btn btn-default active"><?=$addnew?></a> 
                    
                </div>
              </div>
              </div>
              
              <div class="">
                
                <div class="table-responsive panel-over">

              <div class="col-md-2" style="position:fixed;width:200px;overflow:scroll;height:450px">
              <strong>Categories</strong>
                <ul class="sidebar-menu" type="square">     
              <?php 
               foreach($categories->result() as $category):
                    
                          ?>           
                  <li class="">
                     <?=anchor("admin/data_list/unit/".urlencode($category->category),'<i class="fa fa-"></i><span>'.$category->category.'</span>')?>
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
                    <thead class="thead-over">
                      <tr>
                      <th width="105"><?=$no?></th>
                       <th width="200"><?=$product_code?></th>
                       <th width="480"><?=$product_name?></th>
                       <th> <?=$categorytitle?></th>
                        <th width="200"><?=$unitname?></th>
                        <th><?=$smallitemcount?></th>
                        <th width="190"><?=$price?></th>
                     
                         <th width="150"><?=$edit?>/<?=$delete?></th>
               </tr>
                    </thead>
                   
                    <tbody id="content">
                     
                          <?php
                          $count=1;
                          foreach($lists->result() as $list):
                          ?>
                         <tr>
                        <td width="105"><?=$count?></td>
                         <td width="200"><?=$list->product_code?></td>
                          <td width="480"><?=$list->product_name?></td>
                          <td>  <?=$list->category?></td>
                           <td width="200"><?=$list->unit?></td>
                       <td><?=$list->smallest_itemcount?></td>
                        <td width="190"><?=$list->price?></td>      
                               
                         <td width="150">
                         <?php //anchor("admin/edit_form/unit/".$list->id,$edit)?>
                          <a href="javascript:makeedit('<?=$list->id?>','unit')"><?=$edit?></a> / 
                       <a href="javascript:makedelete('<?=$list->id?>','unit','<?=$this->uri->segment(4)?>')"><?=$delete?></a>
                         </td>
                   
                      </tr>
                     
                       <?php
                       $count++;
                   endforeach;
                    ?>
                    
                    </tbody>
                  </table>

                </div> 
                </div>
                
              </div>
            </div>
          <!-- </div> -->
   