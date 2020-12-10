<?php

$supplier=$this->admin_model->grab_supplier();
?>
       
           
           
            <div class="panel panel-primary">
               <div class="panel-heading heading-over">


                  <div class="container"> 

                      <div class="col-md-2"> 
  <h3 class="panel-title"><i class="fa fa-bars"></i> <?=$debttosuppliertitle?></h3>
                       </div>

                      <div class="col-md-9">  

                             <form name="getreport" id="debt_to_supplier">
                  <?=$from?> <input type="text" name="startdate" class="form-control-sale date" id="date1"/>
              <?=$to?> <input type="text" name="enddate" class="form-control-sale date" id="date2"/>
            
              Colunm <select name="colunm" class="form-control-sale" >

                      <option value="supplier_name">Supplier Name</option> 
                      
              </select>
               Value <input type="text" name="search" class="form-control-sale" onkeyup="searchsingle('debt_to_supplier')"/>
              
              <input type="button" class="btn btn-primary active" value="<?=$search?>" onclick="searchsingle('debt_to_supplier')">
            
            </form>
                      </div>


                      <div class="col-md-1 text-right"> 
                          <?php
                if ($this->session->userdata("authority")=='administrator')
                {
                ?>
                       <a href="javascript:show_form('debt_to_supplier_form')" class="btn btn-default active"><?=$addnew?></a> 
                   <?php
                  }
                 ?>  
                      
                       </div>
                  </div>  



              
              </div>
              <div class="panel-body">
                  <div class="table-responsive panel-over">
              <table class="table table-bordered table-hover table-striped tablesorter">
                    <thead>
                      <tr>
                        <th> <?=$no?></th>                       
                        <th><?=$suppliername?></th>
                        <th><?=$exceed?></th>  
                         <th><?=$required?></th>  
                           <?php
                if ($this->session->userdata("authority")=='administrator')
                {
                ?>                    
                         <th>Pay Amount</th>
                     <?php
                  }
                 ?>  
                        <th>Last Date</th>
                           <th width="170">View Details / Returns</th>
                      </tr>
                    </thead>
                    <tbody id="content">
                    <?php
                    $count=1;
                   $exceed_total=0;
                    $required_total=0;                       

                     foreach($lists->result() as $list):
                            $formid="form".$list->id;
                      ?>
                                  <tr>
                        <td><?=$count?></td>
                      
                        <td><?=$list->supplier_name?></td>                       
                         <td id="exceed_amount<?=$list->id?>"><?php if($list->total_debt>0){echo number_format($list->total_debt);$debttype="debt_to_supplier";}?></td>
                         <td id="require_amount<?=$list->id?>"><?php if($list->total_debt<0) {echo number_format($list->total_debt);$debttype="debt_to_supplier";}?></td>
                       <?php
                if ($this->session->userdata("authority")=='administrator')
                {
                ?>  

                 <td ><!-- <input type="text"  id="returnamount<?=$list->id?>" value="" class="form-control-sale"/> -->
                          <?=anchor('admin/transfer/'.$list->id,'Pay <i class="fa fa-angle-double-right"></i>', ' class="transfer btn btn-primary"  data-toggle="modal" data-toggle="modal" data-target="#transfer'.$list->id.'" title='.$list->supplier_name);?>
                  
                    <div class="modal fade transfer" id='transfer<?=$list->id?>'>
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <h4 class="modal-title">ဒိုင္သို႕ေၾကြးျပန္ဆပ္စာရင္း</h4>
          </div>
          <div class="modal-body">
            <div class="thumbnail">
            <?php echo form_open("admin/","id='transfer".$formid."'");
            echo form_hidden("id",$list->id);
            echo form_hidden("returntype","debt_to_supplier")
            ?>
             <table class="table table-bordered table-hover table-striped tablesorter">
               <tr>
                 <td>ဒိုင္အမည္</td><td> 

                 <?php //form_dropdown("supplier",$supplier,"..select..","class='form-control'")?>
                 <input type="text" name="people" readonly="readonly" value="<?=$list->supplier_name?>" class="form-control">
                 </td>
               </tr>
                <tr>
                 <td>By</td><td> 
              <select name="paymethod" class="form-control">
                  <option value="person"> လူၾကံဳျဖင့္</option>
                    <option value="bank"> ဘဏ္ျဖင့္</option>
                </select> 
                 </td>
               </tr>
                 <tr>
                 <td>ေပးေငြ</td><td>                   
                <span><input type="text" name="returnamount" class="form-control" /></span>
              
                 </td>
               </tr>


                   <tr>
                 <td>ေပးသူအမည္</td><td>                   
                <span><input type="text" name="payname" class="form-control" /></span>
              
                 </td>
               </tr>

                   <tr>
                 <td>မွတ္ခ်က္</td><td>                   
                <span><textarea name="note" class="form-control"/>

                </textarea></span>
              
                 </td>
               </tr>
               <tr>
                 <td>ရက္စြဲ</td><td>                   
                <span><input type="text" name="date"  class="form-control date"/>

                </span>
              
                 </td>
               </tr>
               <tr>
                 <td colspan="2" align="center">
                   
                 <?php echo form_button('save',$save,'class="btn btn-primary btn-lgy" onclick="return_debt(\''.$formid.'\',\'debt_to_supplier\')"');?>
                 </td>
               </tr>
             </table>
             <?=form_close()?>
            </div>
            
           
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div> 
    </td> <?php
                  }
                 ?>  
                       <!--  <input type="button" onclick="return_debt(document.getElementById('returnamount<?=$list->id?>').value,<?=$list->id?>,'<?=$list->supplier_name?>',<?=$list->total_debt?>,'debt_to_supplier')" value="Pay" class="btn btn-primary"/> --></td>      
                          <td><?=$list->last_date?></td>               
                         <td>


                     
                <a onclick="viewdetails('<?=$list->id?>','debt_to_supplier','')">View Details </a>/
                    <a onclick="viewreturns('<?=$list->id?>','supplier_debt_returns')"> Returns</a>
                                          </td>
                                      </tr>
                                       <?php
                                       $count++;
                                       if($list->total_debt>0)
                                       {
                                       $exceed_total+=$list->total_debt;
                                      }
                                      else
                                      {
                                       $required_total+=$list->total_debt;
                                      }

                          endforeach;

                        
                        ?>
                        <tr>
                    <td align="right" colspan="2">All Total </td> <td > <?=number_format(abs($exceed_total))?></td> <td > <?=number_format($required_total)?></td>
                    </tr>
                    <tr>
                      <td align="right" colspan="2">ယေန႕ေၾကြးေပးေငြ</td> <td colspan="2">
                        <?php
                        $todaylist=$this->db->query("SELECT SUM(returnamount) as returntotal FROM tbl_supplier_debt_return WHERE date=CURDATE()")->row();
                        echo number_format(abs($todaylist->returntotal));
                        echo "&nbsp;&nbsp;&nbsp;";
                      //  echo anchor("site/returnlist"," SEE ALL","class='btn btn-primary'");
                        ?>
                      </td>
                    </tr>
                    </tbody>
                  </table>
                   
      </div>
    </div>
  </div>
  </div>
