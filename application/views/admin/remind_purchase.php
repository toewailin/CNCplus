                  
            <div class="panel panel-primary">
              <div class="panel-heading heading-over">

               <div class="container">
                 
               <div class="col-md-3">
                 
                 <h3 class="panel-title"><i class="fa fa-bars"></i> <?=$runoutalerttitle?></h3>
               </div>

               <div class="col-md-8">
                 <form name="singlesearch" id="remind_purchase">
              
              Colunm <select name="colunm" class="form-control-sale" >
                      <option value="product_code">Product Code</option>
                         <option value="product_name">Product Name</option>                      
                        <option value="unit">Unit</option>                       
                        <option value="quantity">Least Quantity</option>
                       
              </select>
              Value <input type="text" name="search" class="form-control-sale" onkeyup="searchsingle('remind_purchase')"/>
              
              <input type="button" class="btn btn-primary active" value="<?=$search?>" onclick="searchsingle('remind_purchase')">
             </form> 
               </div>


               <div class="col-md-1 text-right">

  
                <a href="javascript:show_form('remind_purchase_form')" class="btn btn-default active"><?=$addnew?></a> 
                
               </div>

               </div>


              </div>
             
              <div class="panel-body">
                <div class="table-responsive panel-over">

<table class="table table-bordered table-hover table-striped tablesorter">
                    <thead class="thead-over">
                      <tr>
                        <th width="60"><?=$no?></th>
                        <th width="250"><?=$product_code?></th>
                        <th width="450"><?=$product_name?></th>
                      
                        <th width="150"><?=$unitname?></th>
                        <th width="350"><?=$atleastqty?></th>
                         
                        <th width="280"><?=$edit?>/<?=$delete?></th>

                        
                      </tr>
                    </thead>
                   
                    <tbody id="content">
                    <?php
                    $count=1;
            						foreach($lists->result() as $list):
            					?>
                      <tr>
                        <td width="55"><?=$count?></td>
                        <td width="220"><?=$list->product_code?></td>
                        <td width="400"><?=$list->product_name?></td>                      
                         <td width="150"><?=$list->unit?></td>                        
                         <td width="300"><?=$list->atleastqty?></td>
                        
  
                         <td width="250">
                    
                            <a href="javascript:makeedit('<?=$list->id?>','remind_purchase')"><?=$edit?></a> / 
                     
	                       <a href="javascript:makedelete('<?=$list->id?>','remind_purchase','<?=$this->uri->segment(4)?>')"><?=$delete?></a>
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
        </div>
      
      