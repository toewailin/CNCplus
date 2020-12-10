
          
              
 <div class="container">
            
             
            <div class="panel panel-primary">
            <div class="panel-heading heading-over">
               <div class="container"> 
                      <div class="col-md-3">  
                <h3 class="panel-title"><i class="fa fa-bars"></i> General Incomes</h3>
                 </div>

                        <div class="col-md-8">  
                         <form name="singlesearch" id="general_income">
                <?=$from?> <input type="text" name="startdate" class="form-control-sale date" id="date1"/>
              <?=$to?> <input type="text" name="enddate" class="form-control-sale date" id="date2"/>
             
            
              <input type="button" class="btn btn-primary active" value="<?=$search?>" onclick="showreport('general_income')">
           
            </form> 
                        </div>
      
            <div class="col-md-1 text-right"> 
             
            <!--   <a href="javascript:show_form('sale_return_form')" class="btn btn-default active"><?=$addnew?></a>  -->
       <?=anchor("admin/insert_form/general_income_form",$addnew,'class="btn btn-default active"')?>
                
                    
                  </div>
              </div>
              </div>
            
              <div class="panel-body">
                 <div class="table-responsive panel-over">
              <table class="table table-bordered table-hover table-striped tablesorter">
                    <thead class="thead-over">
                      <tr>
                        <th width="60"> <?=$no?></th>
                                        
                        <th><?="Name"?></th>
                        <th><?=$amount?></th>
                        <th>Remark</th>
                        <th>Date</th>
                                        
                        <th width="150"><?=$edit?>/<?=$delete?></th>
                        
                      </tr>
                    </thead>
                    
                    <tbody id="content">
                    <?php
                    $count=1;
            						foreach($lists->result() as $list):
            					?>
                                  <tr>
                        <td width="55"><?=$count?></td>                      
                         <td><?=$list->name?></td>
                        <td><?=number_format($list->total)?><input type="hidden" value="<?=$list->total?>" /></td> 
                        <td><?=$list->remark?></td>

                         <td><?=$list->date?></td>
                           
                         <td width="150">
                      
<!--                          <a href="javascript:showdialogform('edit_form/general_income/<?=$list->id?>')"><?=$edit?></a> /  
 -->                      <a href="javascript:makeedit('<?=$list->id?>','general_income')"><?=$edit?></a> / 
                     <a href="javascript:makedelete('<?=$list->id?>','general_income','<?=$this->uri->segment(4)?>')"><?=$delete?></a>
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
