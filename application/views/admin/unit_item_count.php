

<div class="row">
 <div class="container">
          <!--   <form name="getreport" style="margin-bottom:20px">
              From <input type="date" name="startdate" class="datepicker" id="date1"/>
              To <input type="date" name="enddate" class="datepicker" id="date2"/>
              <input type="button" class="btn btn-primary" value="Search" onclick="showreport(document.getreport.startdate.value,document.getreport.enddate.value,'unit')">
             <span class="btn btn-default active" style="float:right" onclick="show_form('unit_form')" >+ Add New</span> </a>
            </form> -->
             <form name="getreport" style="margin-bottom:20px" id="unit">
              Value <input type="text" name="data" class="form-control-sale" />
              Colunm <select name="colunm" class="form-control-sale" >
                        <option value="product_code">Product Code</option>
                        <option value="category">Category</option>
                        <option value="unit">Unit</option>
                        <option value="date">Date</option>
                        <option value="item_count">Item Count</option>
              </select>
              <input type="button" class="btn btn-primary" value="Search" onclick="searchsingle(document.getreport.data.value,document.getreport.colunm.value,'unit')">
             <span class="btn btn-default active" style="float:right" onclick="show_form('unit_form')" >+ Add New</span> </a>
            </form> 
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-bars"></i> Unit List</h3>
              </div>
              <div class="panel-body">
                <div class="table-responsive">
                  <table class="table table-bordered table-hover table-striped tablesorter">
                    <thead>
                      <tr>
                      <th>ID</th>
                       <th>Product Code</th>
                        <th>Product Name</th>
                        <th>Unit</th>
                        <th>Item Count</th>
                        <th>Date</th>
                         <th>Edit/Delete</th>

                      </tr>
                    </thead>
                    <tbody id="content">
                     
                          <?php
                          $count=1;
                          foreach($lists->result() as $list):
                          ?>
                         <tr>
                        <td><?=$count?></td>
                        <td><?=$list->product_code;?></td>
                        <td><?=$list->product_name;?></td>
                        <td><?=$list->unit?></td>
                        <td><?=$list->item_count?></td>
                         <td><?=$list->date?></td>
                         <td>
                        
                          <a href="javascript:makeedit('<?=$list->id?>','unit','<?=$this->uri->segment(4)?>')">Edit</a>
	                     <a href="javascript:makedelete('<?=$list->id?>','unit','<?=$this->uri->segment(4)?>')">Delete</a>
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
        </div>
