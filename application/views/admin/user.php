
 <div class="container">
           <!--  <form name="getreport" style="margin-bottom:20px">
              From <input type="date" name="startdate" class="datepicker" id="date1"/>
              To <input type="date" name="enddate" class="datepicker" id="date2"/>
              <input type="button" class="btn btn-primary" value="Search" onclick="showreport(document.getreport.startdate.value,document.getreport.enddate.value,'user')">
             <span class="btn btn-default active" style="float:right" onclick="show_form('user_form')" >+ Add New</span> </a>
            </form> -->
          
            <div class="panel panel-primary">
             <div class="panel-heading">
                <div class="container">
              <div class="col-lg-2 col-md-2">
                <h3 class="panel-title"><i class="fa fa-bars"></i> <?=$usertitle?></h3>
                </div>
                <div class="col-lg-9 col-md-9"> 

  <form name="getreport" id="user">
               Colunm <select name="colunm" class="form-control-sale" >
                        <option value="username">User Name</option>
                        <option value="ip_address">IP Address</option>
                        <option value="computer_name">Computer Name</option>
                        <option value="user_role">User Role</option>
                        <option value="date">Date</option>
              </select>
              Value <input type="text" name="search" class="form-control-sale" />
            
             <?=$from?> <input type="text" name="startdate" class="form-control-sale date" id="date1"/>
              <?=$to?> <input type="text" name="enddate" class="form-control-sale date" id="date2"/>
              <input type="button" class="btn btn-primary active" value="<?=$search?>" onclick="searchsingle('user')">
               </form>

                </div>

                 <div class="col-lg-1 col-md-1 text-right"> 
                  <a href="javascript:show_form('user_form')" class="btn btn-default active"><?=$addnew?></a> 
                  
                </div>

              </div>
              </div>



              
              <div class="panel-body">
                <div class="table-responsive">
                  <table class="table table-bordered table-hover table-striped tablesorter">
                    <thead>
                      <tr>
                        <th><?=$no?></th>
                        <th><?=$username?></th>    
                        <th><?=$ipaddress?></th>
                        <th><?=$computername?></th>
                        <th><?=$userrole?></th>
                        <th><?=$date?></th>
                         <th><?=$edit?> / <?=$delete?></th>
                      </tr>
                    </thead>
                    <tbody id="content">
                    <?php
                    $count=1;
						  foreach($lists->result() as $list):
					           ?>
                      <tr>
                      <td><?=$count?></td>
                        <td><?=$list->username?></td>
                        <td><?=$list->ip_address?></td>
                          <td><?=$list->computer_name?></td>
                         <td><?=$list->user_role?></td>
                       <td><?=$list->date?></td>
                         <td>
                        
                       <a href="javascript:makeedit('<?=$list->id?>','user')"><?=$edit?></a> / 
                       <a href="javascript:makedelete('<?=$list->id?>','user','<?=$this->uri->segment(4)?>')"><?=$delete?></a>
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
    