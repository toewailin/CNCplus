
 <div class="container">
          
            <div class="panel panel-primary">
              <div class="panel-heading heading-over">
              <div class="container"> 

                  <div class="col-lg-2 col-md-2">  
    <h3 class="panel-title"><i class="fa fa-bars"></i> Consinement Sale Lists</h3>
                  </div>

                  <div class="col-lg-9 col-md-9">  
                        <form name="singlesearch" id="sale">
               
<?=$from?> <input type="text" name="startdate" class="form-control-sale date" id="date1"/>
              <?=$to?> <input type="text" name="enddate" class="form-control-sale date" id="date2"/>
         
              Colunm <select name="colunm" class="form-control-sale" >
                     
                        <option value="voucherno">Voucherno</option>
                        <option value="consinement_name">Consinement Name</option>
                      
              </select>
            
               Value <input type="text" name="search" class="form-control-sale" onkeyup="searchsingle('sale')"/>
              <input type="button" class="btn btn-primary active" value="<?=$search?>" onclick="searchsingle('sale')">
           
            </form> 
                  </div>


                <div class="col-lg-1 col-md-1 text-right">  
       
                 
     <?=anchor("admin/insert_form/consinement_sale_form",$addnew,'class="btn btn-default active"')?>

                  </div>

              </div>  
                
              </div>
              
              <div class="panel-body">
                <div class="table-responsive panel-over">
                  <table class="table table-bordered table-hover table-striped tablesorter">
                    <thead class="thead-over">
                      <tr>                        
                        <th width="50"><?=$no?></th>
                        <th width="100"><?=$voucher?></th>                       
                         <th width="200">Consinement Name</th>
                        <th width="120"><?=$total?></th>
                        
                        <th width="120">Date</th>
                        <th width="120">View Details</th>
                      </tr>
                    </thead>                 
                  
                    <tbody id="content">
                  <?php
                    $count=1;
                    $totalamount=0;
                  
                        foreach($lists->result() as $list):
                      ?>
                                  <tr>
                        <td width="40"><?=$count?></td>
                        <td width="95"><?=$list->voucherno?></td>
                        <td width="150"><?=$list->name?></td>
                        <td width="90"><?=number_format($list->nettotal)?></td>
                        
                        <td width="90"><?=$list->date?></td>                                      
                        <td width="90">
                      <a onclick="viewdetails('<?=$list->voucherno?>','consinement_sale','')">View Details </a>
                 
                        </td>
                                      </tr>
                                       <?php
                                       $count++;
                                       $totalamount+=$list->nettotal;
                                     
                          endforeach;
                        
                        ?>

                        <tr>

                        <td width="40"></td>
                        <td width="95"></td>
                        <td width="150">Total</td>
                        <td width="90"><?=number_format($totalamount)?></td>
                       
                        <td width="90"></td>                                      
                        <td width="90">
                      
                        </td>
                        </tr>


                     
                    </tbody>
                  </table>
                    <?php
              
                  ?>
                </div>
                
              </div>
            </div>


          </div>
      
