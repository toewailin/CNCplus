<?php

$customer=$this->admin_model->grab_customer();
?>
       
           
           
            <div class="panel panel-primary">
              <div class="panel-heading">


                  <div class="container"> 

                      <div class="col-md-2"> 
  <h3 class="panel-title"><i class="fa fa-bars"></i> <?=$debtfromcustomertitle?></h3>
                       </div>

                      <div class="col-md-9">  

                             <form name="getreport" id="debt_from_customer">
                  <?=$from?> <input type="text" name="startdate" class="form-control-sale date" id="date1"/>
              <?=$to?> <input type="text" name="enddate" class="form-control-sale date" id="date2"/>
            
              Colunm <select name="colunm" class="form-control-sale" >

                      <option value="customer_name">Customer Name</option> 
                      
              </select>
               Value <input type="text" name="search" class="form-control-sale" onkeyup="searchsingle('debt_from_customer')"/>
              
              <input type="button" class="btn btn-primary active" value="<?=$search?>" onclick="searchsingle('debt_from_customer')">
            
            </form>
                      </div>


                      <div class="col-md-1 text-right"> 
                          <?php
                if ($this->session->userdata("authority")=='administrator')
                {
                ?>
                       <a href="javascript:show_form('debt_from_customer_form')" class="btn btn-default active"><?=$addnew?></a> 
                  
                        <?php
                  }
                 ?>  
                      
                       </div>
                  </div>  



              
              </div>
              <div class="panel-body">
              <table class="table table-bordered table-hover table-striped tablesorter">
                    <thead>
                      <tr>
                        <th> <?=$no?></th>                       
                        <th><?=$customername?></th>
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
                    $total=0;
                        foreach($lists->result() as $list):
                            $formid="form".$list->id;
                      ?>
                                  <tr>
                        <td><?=$count?></td>
                      
                        <td><?=$list->customer_name?></td>                       
                         <td id="exceed_amount<?=$list->id?>"><?php if($list->total_debt>0){echo number_format($list->total_debt);$debttype="debt_to_customer";}?></td>
                         <td id="require_amount<?=$list->id?>"><?php if($list->total_debt<0) {echo number_format($list->total_debt);$debttype="debt_from_customer";}?></td>
                        
           <?php
                if ($this->session->userdata("authority")=='administrator')
                {
                ?>
                        <td ><!-- <input type="text"  id="returnamount<?=$list->id?>" value="" class="form-control-sale"/> -->
                          <?=anchor('admin/transfer/'.$list->id,'Pay <i class="fa fa-angle-double-right"></i>', ' class="transfer btn btn-primary"  data-toggle="modal" data-toggle="modal" data-target="#transfer'.$list->id.'" title='.$list->customer_name);?>
                  
                    <div class="modal fade transfer" id='transfer<?=$list->id?>'>
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <h4 class="modal-title">ေၾကြးျပန္ဆပ္စာရင္း</h4>
          </div>
          <div class="modal-body">
            <div class="thumbnail">
            <?php echo form_open("admin/","id='".$formid."'");
            echo form_hidden("id",$list->id);
            echo form_hidden("returntype","debt_from_customer")
            ?>
             <table class="table table-bordered table-hover table-striped tablesorter">
               <tr>
                 <td>ေဖာက္သည္အမည္</td><td> 

                 <?php //form_dropdown("customer",$customer,"..select..","class='form-control'")?>
                 <input type="text" name="people" readonly="readonly" value="<?=$list->customer_name?>" class="form-control">
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
                   
                 <?php echo form_button('save',$save,'class="btn btn-primary btn-lgy" onclick="return_debt(\''.$formid.'\',\'debt_from_customer\')"');?>
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
                       <!--  <input type="button" onclick="return_debt(document.getElementById('returnamount<?=$list->id?>').value,<?=$list->id?>,'<?=$list->customer_name?>',<?=$list->total_debt?>,'debt_from_customer')" value="Pay" class="btn btn-primary"/> --></td>      
                          <td><?=$list->last_date?></td>               
                         <td>


                     
                <a onclick="viewdetails('<?=$list->id?>','debt_from_customer','')">View Details </a>/
                    <a onclick="viewreturns('<?=$list->id?>','customer_debt_returns')"> Returns</a>
                                          </td>
                                      </tr>
                                       <?php
                                       $count++;
                                       $total+=$list->total_debt;
                          endforeach;

                        
                        ?>
                        <tr>
                    <td align="right" colspan="3">All Total </td> <td colspan="7"> <?=number_format(abs($total))?></td>
                    </tr>
                   
                    </tbody>
                  </table>
                   
      </div>
    </div>
  </div>
