
        
          
            <div class="panel panel-primary">
              <div class="panel-heading heading-over">
               <div class="container">


                  <div class="col-lg-2 col-md-2">
                    <h3 class="panel-title"><i class="fa fa-bars"></i> Consinement Lists</h3>
                  </div>

                  <div class="col-lg-9 col-md-9">
                      <form name="getreport" id="consinement">
             <?=$from?> <input type="text" name="startdate" class="form-control-sale date" id="date1"/>
              <?=$to?> <input type="text" name="enddate" class="form-control-sale date" id="date2"/>
             
              Colunm <select name="colunm" class="form-control-sale" >
                        <option value="name">sub-warehouse name</option>
                         <option value="location">Location</option>
                      
                       
              </select>
              Value <input type="text" name="search" class="form-control-sale" onkeyup="searchsingle('consinement')"/>
              
              <input type="button" class="btn btn-primary active" value="<?=$search?>" onclick="searchsingle('consinement')">
            </form> 
                  </div>
                

                <div class="col-lg-1 col-md-1 text-right">  
      
                   <a href="javascript:show_form('consinement_form')" class="btn btn-default active"><?=$addnew?></a> 
                 
                     
                  </div>


              </div>
              </div>
                <br/>
              <div class="panel-body">
                <div class="table-responsive panel-over">
                  <table class="table table-bordered table-hover table-striped tablesorter">
                    <thead class="thead-over">
                      <tr>
                        <th width="70"><?=$no?></th>                                              
                        <th width="260">Name</th>
                        <th width="260">Location</th>

                             
                         <th width="230"><?=$edit?> / <?=$delete?></th>
                          
                      </tr>
                    </thead>
                    
                    <tbody id="content">
                    <?php
                    $count=1;
						  foreach($lists->result() as $list):
					           ?>
                      <tr>
                      <td width="70"><?=$count?></td>
                        <td width="260"><?=$list->name?></td>
                         <td width="260"><?=$list->location?></td>

                              
                         <td width="230">
                       <a href="javascript:makeedit('<?=$list->id?>','consinement')"><?=$edit?></a> / 
                     
                        <!--   <a href="javascript:showdialogform('edit_form/consinement/<?=$list->id?>')"><?=$edit?></a> /  -->
	                   <a href="javascript:makedelete('<?=$list->id?>','consinement','<?=$this->uri->segment(4)?>')"><?=$delete?></a>
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
          </div>
          
       