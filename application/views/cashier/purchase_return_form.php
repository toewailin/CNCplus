
<h3 class="title">Purchase Return Form</h3>


 <?=form_open("","id='purchase_return' 'class='cloneable-form'")?>
 <table class="table table-hover tablesorter">
  <tr>
    <td><?=$voucher?></td>
    <td>
      <?php

    
      $row=$this->db->select_max("voucherno")->get("tbl_pr")->row();
    $number=$row->voucherno+1;
    $voucherno=str_pad($number, 10, "0", STR_PAD_LEFT); 
   // return $pcname."-".$voucherno;

      $voucherno="PR-".$voucherno;
    
      ?>
      <input class="form-control-discount" type="text" name="voucherno" id="voucherno" value="<?=$voucherno?>"/>
   </td>
    <td><?=$date?></td>
    <td>
      <input class="form-control-discount date" type="text" name="date" id="date1" value="<?=$today?>"/>
    </td>
     </tr>
      <tr>
    <td><?=$suppliername?></td>
    <td> <?=form_dropdown('supplier',$supplier,'',"class='form-control-discount' onchange='check_debt(this.value,\"supplier\")'");?></td>
    <td>Deliver Warehouse</td>
     <td> <?=form_dropdown('warehouse',array('warehouse1'=>'warehouse (1)','warehouse2'=>'warehouse (2)','shop_stock'=>'shop'),'','class="form-control-discount" autocomplete="off"');?></td>
    
   
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
            <!-- <td align="center" width="100"><?php //$discount?></td> -->
            <td align="center" width="180"> <?="သင့္ေငြ"?></td>
         </tr>
         <tr class="clonethis">
         <td class="no">1</td>
              <td><?=form_input('product_code[]','','class="form-control-discount pcode autocomplete"  onkeyup="fill(this.value,event)" autocomplete="off"');?> <div class="display"></div></td>
             <td> <?=form_input('product_name[]','','class="form-control-discount" autocomplete="off"');?> <?=form_hidden("category[]","")?></td>
              <td> <?=form_input('quantity[]','',' class="qty form-control-discount" onkeyup="admincloneform(event)" autocomplete="off"');?></td>
             
              <td> <?=form_dropdown('unit[]',array(""=>"... select ..."),'',' id="unit" class="form-control-discount clonelastone" onchange="grabprice(this.value,event)" autocomplete="off"');?> <?=form_hidden('item_count_hidden[]','');?></td>
              <!--  <td><?=form_input('item_count[]',0,' class="form-control-discount clonelastone" autocomplete="off"');?>
                
               </td> -->

              <td width="15"> <?=form_input('price[]','',' class="form-control-discount" autocomplete="off"');?></td>
              <!-- <td> <?php ///form_input('discount[]',0,' onblur="calamount(this.value)" class="form-control-discount discount clonelastone"');?></td> 
               -->
              <td width="140"> <?=form_input('total[]',0,'class="form-control-discount clonelastone total" autocomplete="off"');?>
              </td>
              <td width="5"><span class='close' onclick="removerform(event)"> x </span></td>
         </tr>
         </tbody>
     </table>

     <?=form_hidden("discounttotal",0,"id='discount'")?>


<table class="table">

 <tr>
       <td colspan="2" align="right">Total Amount</td><td width="200"> <input type="text" name="netamount" id="total" value=0  class="form-control-discount"  /></td>
 <td colspan="3" align="right"> </tr>
 
 
<td colspan="4" align="right">
 <?php echo form_button('save','SAVE','class="btn btn-primary btn-lgy" onclick="insert_form(\'purchase_return\')"');?>
</td><td colspan="2" align="right"></tr>
</table>

<?php
echo form_close();
?>
  