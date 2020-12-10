
<?php
$outcome_category=$this->admin_model->grab_outcome_category();

?>
        
            <div class="panel panel-primary">
              <div class="panel-heading heading-over">

                   <div class="container">

                  <div class="col-md-2">
                <h3 class="panel-title"><i class="fa fa-bars"></i> <?=$generaloutcometitle?></h3>

                  </div>

                  <div class="col-md-9">  
                        <form name="getreport" id="general_outcome">
              <?=$from?> <input type="text" name="startdate" class="form-control-sale date" id="date1"/>
              <?=$to?> <input type="text" name="enddate" class="form-control-sale date" id="date2"/>
               Colunm <select name="colunm" class="form-control-sale" >
                        <option value="outcome_category">Outcome Categories</option>                        
                       
              </select>

              Value <?=form_dropdown('search',$outcome_category,'','class="form-control-sale"');?></td>
               
              <!-- <input type="button" class="btn btn-primary" value="<?=$search?>" onclick="showreport('general_outcome')"> -->
               <input type="button" class="btn btn-primary active" value="<?=$search?>" onclick="searchsingle('general_outcome')">
            </form>
           
                  </div>


                    <div class="col-md-1 text-right"> 
                      
                 <?=anchor("admin/insert_form/general_outcome_form",$addnew,'class="btn btn-default active"')?>

                        <!--   <a href="javascript:show_form('general_outcome_form')" class="btn btn-default active"><?=$addnew?></a>  -->
                
                        
                     </div>


                  </div>
              </div>
              
              <div class="panel-body">
                <div class="table-responsive panel-over">
                  <table class="table table-bordered table-hover table-striped tablesorter">
                    <thead class="thead-over">
                      <tr>
                      <th width="70"><?=$no?></th>
                     
                        <th width="300"><?=$description?></th>
                        <th width="150"><?=$price?></th>
                         <th width="200"><?=$quantity?></th>
                          <th width="200"><?=$total?></th>
                          <th width="200"><?=$authority?></th>
                          <th width="200"><?=$outcome_categories?></th>
                        <th width="100"><?=$date?></th>
                        
                         <th width="120"><?=$edit?> / <?=$delete?></th>

                        
                      </tr>
                    </thead>
                     
                    <tbody id="content">
                    
                          <?php
                          $count=1;
                          $total=0;
                          foreach($lists->result() as $list):
                          ?>
                          <tr>
                        <td width="70"><?=$count?></td>
                       
                        <td width="300"><?=$list->description; ?></td>
                         <td width="150"><?=number_format($list->price)?></td>
                          <td width="200"><?=number_format($list->quantity)?></td>
                           <td width="200"><?=number_format($list->total)?></td>
                        <td width="200"><?=$list->authority?></td>
                        <td width="200"><?=$list->title?></td>
                        <td width="100"><?=$list->date?></td>
                        
                         <td width="120">
                       
                
                       <a href="javascript:makeedit('<?=$list->id?>','general_outcome')"><?=$edit?></a> / 
                       <a href="javascript:makedelete('<?=$list->id?>','general_outcome','<?=$this->uri->segment(4)?>',event)"><?=$delete?></a>
                         </td>

                    
                      </tr>
                    
                       <?php
                       $count++;
                        $total+=$list->total;
            	     endforeach; 

            				?> 
                     <tr>
                    <td align="right" colspan="4">All Total </td> <td colspan="5"> <?=number_format($total)?></td>
                    </tr>    </tbody>
                  </table>
               
                </div>
               
              </div>
            </div>
          </div>
       
