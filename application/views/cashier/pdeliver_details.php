<?php

$show=$lists->row();
?>
<h3 class="title">Purchase Order Delivery Form</h3>


 <?=form_open("","id='purchase_delivery' 'class='cloneable-form'")?>
 <table class="table table-hover tablesorter">
  <tr>
    <td><?=$voucher?></td>
    <td>
      <?php

      $ip=explode('.',$this->input->ip_address());
      ?>
      <input class="form-control-discount form-control" type="text" name="voucherno" id="voucherno" value="<?=$show->voucherno;?>" readonly="readonly"/>
   </td>
    <td><?=$date?></td>
    <td>
      <input class="form-control-discount form-control date" type="text" name="date" id="date1" value="<?=date('d-m-Y')?>"/>
    </td>
     </tr>
      <tr>
    <td><?=$suppliername?></td>
    <td> <?=form_dropdown('supplier',$supplier,$show->supplier."#".$show->supplier_id,"class='form-control-discount form-control' onchange='check_debt(this.value,\"supplier\")' readonly='readonly'");?></td>
     
   <!--  <td>Deliver Warehouse</td>
     <td> <?=form_dropdown('warehouse',array('warehouse1'=>'warehouse (1)','warehouse2'=>'warehouse (2)'),'','class="form-control-discount" autocomplete="off"');?></td>
      -->
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
          
            <td align="center" width="200">Require Quantity</td>
            <td align="center" width="100"><?=$unitname?></td>
              <td align="center" width="150"><?=$price?></td>
            <td align="center" width="150">Warehouse</td>
            <td align="center" width="180"> <?="သင့္ေငြ"?></td>
         </tr>
          <?php
          $count=1;
          $net=0;
            foreach($lists->result() as $list):
          ?>

         <tr class="clonethis">
         <td><?=$count?></td>
              <td><?=form_input('product_code[]',$list->product_code,'class="form-control-discount form-control pcode autocomplete"  onkeyup="fill(this.value,event)" autocomplete="off" readonly');?> <div class="display"></div></td>
             <td> <?=form_input('product_name[]',$list->product_name,'class="form-control-discount form-control" autocomplete="off" readonly');?></td>
              <td> <?=form_input('quantity[]',$list->requirequantity,' class="qty form-control-discount form-control" onkeyup="admincloneform(event)" autocomplete="off"');?></td>
             
              <td> <?=form_input('unit[]',$list->unit,' id="unit" class="form-control-discount form-control clonelastone" onchange="grabprice(this.value,event)" autocomplete="off" readonly');?><?=form_hidden('item_count_hidden[]',$list->smallitemcount);?><?=form_hidden("category[]",$list->category)?></td>
              <!--  <td><?=form_input('item_count[]',0,' class="form-control-discount form-control clonelastone" autocomplete="off" readonly');?>
                
               </td> -->

              <td width="15"> <?=form_input('price[]',$list->price,' class="form-control-discount form-control" autocomplete="off" readonly');?></td>
               <td width="100"> <?=form_dropdown('warehouse[]',array("warehouse1"=>"warehouse (1)","warehouse2"=>"warehouse (2)","shop_stock"=>"Shop"),'','onkeyup="admincloneform(event)" class="form-control-discount discount clonelastone"');?></td> 

              <td width="140"> <?=form_input('total[]',$list->total,'class="form-control-discount form-control clonelastone total" autocomplete="off" readonly');?>
              </td>
              <td width="5"><span class='close' onclick="removerform(event)"> x </span></td>
         </tr>
         <?php
          $count++;
          $net+=$list->total;
          endforeach;

         ?>
         </tbody>
     </table>
     <?=form_hidden("discounttotal",0,"id='discount'")?>


<table class="table">

  <tr>
       <td colspan="2" align="right">Net Amount To Supplier</td><td width="200"> <input type="text" name="netamount" id="total" value="<?=$net?>"  class="form-control-discount form-control"  /></td>
 <td colspan="3" align="right"> </tr>
 <tr>
  <td colspan="2" align="right"> Previous Require Amount / Exceed Amount / Advance<!-- ယခင္က်န္ေငြ (-) / ပိုေငြ / ၾကိဳေပးေငြ --></td><td width="200"> <input type="text" name="advance" id="advance" value="<?=$show->total_debt?>"  class="form-control-discount form-control"  onkeyup="payadvance(this.value,document.getElementById('total').value)"/></td>
 <td colspan="3" align="right"> </tr>
 <tr>
       <td colspan="2" align="right">Balance To Supplier</td><td width="200"> <input type="text" name="balance" id="balance" value="<?=$show->total_debt-$show->netamounttosupplier?>"  class="form-control-discount form-control"/></td>
 <td colspan="3" align="right"> </tr>
<tr>
 <tr>
       <td colspan="2" align="right">Pay Amount</td><td width="200"> <input type="text" name="balance" id="balance" value="<?=$show->total_debt-$show->netamounttosupplier?>"  class="form-control-discount form-control"/></td>
 <td colspan="3" align="right"> </tr>
<tr>
 <tr>
       <td colspan="2" align="right">Current Balance To Supplier</td><td width="200"> <input type="text" name="balance" id="balance" value="<?=$show->total_debt-$show->netamounttosupplier?>"  class="form-control-discount form-control"/></td>
 <td colspan="3" align="right"> </tr>
<tr>
 
<td colspan="4" align="right">
 <?php echo form_button('save','SAVE','class="btn btn-primary btn-lgy" onclick="insert_form(\'purchase_delivery\')"');?>
</td><td colspan="2" align="right"></tr>
</table>

<?php
echo form_close();
?>
  