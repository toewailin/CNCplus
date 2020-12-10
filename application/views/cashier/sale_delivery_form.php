

<h3 class="title">Sale Delivery Form ( To Customer )</h3>


<h4>  </h4>

 <?=form_open("","id='sale_delivery' 'class='cloneable-form'")?>
 <table class="table table-hover tablesorter">
  <tr>
    <td><?=$voucher?></td>
    <td>
    
      
      <input class="form-control-discount" type="text" name="voucherno" id="voucherno" placeholder="Type Order Voucher No"/>
   </td>
    <td><?=$date?></td>
    <td>
      <input class="form-control-discount" type="text" name="date" id="date1" value="<?=$today?>"/>
    </td>
     </tr>
      <tr>
    <td><?=$customername?></td>
    <td> <?=form_dropdown('customer',$customer,'','class="form-control-discount"');?></td>
     
    <td> </td>
    <td>
     
         </td>
     </tr>

       <tr>
    
      <td>Note</td>
     <td><textarea name="note" class="form-control"></textarea></td>
    
     </tr>
  </table>
 

  <h4>Details Information</h4>
  
  <table class="table table-bordered table-hover tablesorter center"> 

       <tbody id="SourceWrapper">
            
           <tr>
           <td>No</td>
            <td align="center" width="180" ><?=$product_code?></td>
            <td align="center"><?=$product_name?></td>     
            
           <!--  <td align="center" width="100"><?=$smallitemcount?></td> -->
          
            <td align="center" width="100"><?=$quantity?></td>
            <td align="center" width="150"><?=$unitname?></td>
              <td align="center" width="150"><?=$price?></td>
           <!--  <td align="center" width="100"><?php //$discount?></td> -->
            <td align="center" width="180"> <?="သင့္ေငြ"?></td>
         </tr>
         <tr class="clonethis">
         <td>1</td>
              <td><?=form_input('product_code[]','','class="form-control-discount pcode autocomplete"  onkeyup="fill(this.value,event)" autocomplete="off"');?> <div class="display"></div></td>
             <td> <?=form_input('product_name[]','','class="form-control-discount" autocomplete="off"');?></td>
              <td> <?=form_input('quantity[]','',' class="qty form-control-discount" onkeyup="admincloneform(event)" autocomplete="off"');?></td>
             
              <td> <?=form_dropdown('unit[]',array(""=>"... select ..."),'',' id="unit" class="form-control-discount clonelastone" onchange="grabprice(this.value,event)" autocomplete="off"');?> <?=form_hidden('item_count_hidden[]','');?></td>
              <!--  <td><?php //form_input('item_count[]',0,' class="form-control-discount clonelastone" autocomplete="off"');?>
                
               </td> -->

              <td width="15"> <?=form_input('price[]','',' class="form-control-discount" autocomplete="off"');?></td>
            <!--   <td> <?php //form_input('discount[]',0,' onblur="calamount(this.value)" class="form-control-discount discount clonelastone"');?></td> 
              -->
              <td width="140"> <?=form_input('total[]',0,'class="form-control-discount clonelastone total" autocomplete="off"');?>
              </td>
              <td width="5"><span class='close' onclick="removerform(event)"> x </span></td>
         </tr>
         </tbody>
     </table>

     <?php //form_hidden("discounttotal",0,"id='discount'")?>


<table class="table">
 <tr>
       <td colspan="2" align="right">သင့္ေငြ </td><td width="200"> <input type="text" name="nettotal" id="nettotal" value=0  class="form-control-discount"  /></td>
  </tr>
 <tr>
<tr>
       <td colspan="2" align="right">ပို႕ခ</td>
       <td width="200">
        <input type="text" name="totaltransportationcharges" id="totaltransportationcharges" value=0  class="form-control-discount" onkeyup="calculate_saledelivery_total(document.getElementById('nettotal').value,this.value,document.getElementById('totaltranserfrate').value)" /></td>
  
  </tr>
  <tr>


<tr>
       <td colspan="2" align="right">စုစုေပါင္း</td>
       <td width="200"> 
       <input type="text" name="totaltransferrate" id="totaltranserfrate" value=0  class="form-control-discount"  onkeyup="calculate_saledelivery_total(document.getElementById('nettotal').value,document.getElementById('totaltransportationcharges').value,this.value)"/></td>
  
  </tr>

 
                     <tr>
                      <td id="totaldebt" colspan="2" align="right"><?="ယခင္က်န္ေငြ (-) / ပိုေငြ"?>
                      </td>
                      <td width="200">
                      <?=form_input('totaldebt',0,' class="form-control-discount" autocomplete="off"');?></td>
                    </tr>
 
   <tr >
                      <td colspan="2" align="right"><?="စုစုေပါင္း က်သင့္ေငြ"?></td>
                      <td width="200"><?=form_input('alltotal',0,'id="alltotal" class="form-control-discount" autocomplete="off"');?></td>
                    </tr>


  <tr >
                      <td id="receive_row" colspan="2" align="right"><?=$receive?></td>
                      <td width="200"><?=form_input('received',0,'class="form-control-discount" id="received" onkeyup="calrefund(this.value)" onblur="calrefund(this.value)" autocomplete="off"');?></td><!-- onblur="calrefund(this.value,document.getElementById(\'netamount\').value)" -->
                   </tr>

                 <!-- 
                  <tr id="refund_row">
                       <td><?=$refund?></td>
                       <td> <?=form_input('refund',0,'class="form-control-discount" id="refund"  onblur="checkexceedamount(this.value)" autocomplete="off"');?></td>
                   </tr>  -->       
                 
               
                   <tr>
                         <td  id="requierdamounttopayment" colspan="2" align="right"><?="ယခုက်န္ေငြ (-) / ပိုေငြ"?></td>
                         <td width="200"> <input type="text" name="exceedamount" id="exceedamount" value=0  class="form-control-discount" autocomplete="off" /></td>
                    </tr>
 
<td colspan="3" align="right">
 <?php echo form_button('save','SAVE','class="btn btn-primary btn-lgy" onclick="insert_form(\'sale_delivery\')"');?>
</td><td colspan="2" align="right"></tr>
</table>
<?php
echo form_close();
?>
  