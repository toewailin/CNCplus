
            <div class="panel panel-primary">
              <div class="panel-heading">

              <div class="container">
              <div class="col-md-2">
                <h3 class="panel-title"><i class="fa fa-bars"></i> Outcome Category</h3>
              </div>
              <div class="col-md-9">
                   <form name="getreport" id="outcome_category">
              Colunm <select name="colunm" class="form-control-sale" >                      
                        <option value="outcome_category">Unit</option>
                      
              </select>
              Value <input type="text" name="search" class="form-control-sale" />
             
              <?=$from?> <input type="text" name="startdate" class="form-control-sale date" id="date1"/>
              <?=$to?> <input type="text" name="enddate" class="form-control-sale date" id="date2"/>
              
              <input type="button" class="btn btn-primary" value="<?=$search?>" onclick="searchsingle('outcome_category')">
             </form> 
              </div>
              <div class="col-md-1 text-right">    
 

                   <a href="javascript:show_form('outcome_category_form')" class="btn btn-default active"><?=$addnew?></a> 
                  
                   
                  </div>

              </div>
                
              </div>
              <div class="panel-body">
                <div class="table-responsive">
                  <table class="table table-bordered table-hover table-striped tablesorter">
                    <thead>
                      <tr>
                      <th><?=$no?></th>
                       
                        <th><?=$title?></th>
                        <th><?=$amount?></th>
                      
                         <th><?=$edit?>/<?=$delete?></th>
                          
                      </tr>
                    </thead>
                    <tbody id="content">
                     
                          <?php
                          $count=1;
                          foreach($lists->result() as $list):
                          ?>
                         <tr>
                        <td><?=$count?></td>
                       
                        <td><?=$list->title?></td> 
                         <td><?=$list->amount?></td>                      
                         
                         <td>
                        
                          <a href="javascript:showdialogform('edit_form/outcome_category/<?=$list->id?>')"><?=$edit?></a> / 
	                     <a href="javascript:makedelete('<?=$list->id?>','outcome_category','<?=$this->uri->segment(4)?>')"><?=$delete?></a>
                         </td>
                          
                      </tr>
                     
                       <?php
                       $count++;
            	     endforeach;
            				?>
                    
                    </tbody>
                  </table>
                    <?php
                  echo "<div class='pagination'>";
                  echo $this->pagination->create_links();
                  echo "</div>";
                  ?>
                </div>
                
              </div>
            </div>
      
    