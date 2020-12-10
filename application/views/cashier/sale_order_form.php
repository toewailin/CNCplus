
<h3 class="title">Sale Order Form</h3>



 <?=form_open("","id='sale_order' 'class='cloneable-form'")?>
 <table class="table table-hover tablesorter">
  <tr>
   <td>Voucher</td>
    <td>
      <?php
      $row=$this->db->select_max("voucherno")->get("tbl_so")->row();
    $number=$row->voucherno+1;
    $voucherno=str_pad($number, 10, "0", STR_PAD_LEFT); 
   // return $pcname."-".$voucherno;

      $voucherno="SO-".$voucherno;
      ?>
      <input class="form-control-discount" type="text" name="voucherno" id="voucherno" value="<?=$voucherno?>"/>
   </td>
    <td><?=$date?></td>
    <td>
      <input class="form-control-discount date" type="text" name="date" id="date1" value="<?=date('d-m-Y')?>"/>
    </td>
     </tr>
      <tr>
    <td><?=$customername?></td>
    <td> <?=form_dropdown("customer",$customer,"..select.."," onchange='check_debt(this.value,\"customer\")' autocomplete='off'  class='form-control-discount'");?>
    </td>
     
    <td> </td>
    <td>
     
         </td>
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
          <td class="no">1</td>
                <td><?=form_input('product_code[]','','class="form-control-discount pcode autocomplete"  onkeyup="fill(this.value,event)" autocomplete="off"');?> <div class="display"></div></td>
            <td> <?=form_input('product_name[]','','class="form-control-discount" autocomplete="off"');?></td>
              <td> <?=form_input('quantity[]','',' class="qty form-control-discount" onkeyup="admincloneform(event)" autocomplete="off"');?></td>
             
              <td> <?=form_dropdown('unit[]',array(""=>"... select ..."),'',' id="unit" class="form-control-discount clonelastone" onchange="grabprice(this.value,event)" onkeyup="admincloneform(event)" autocomplete="off"');?> <?=form_hidden('item_count_hidden[]','');?></td>
              <!--  <td><?php //form_input('item_count[]',0,' class="form-control-discount clonelastone" autocomplete="off"');?>
                
               </td> -->

              <td width="15"> <?=form_input('price[]','',' class="form-control-discount" autocomplete="off" onkeyup="admincloneform(event)"');?></td>
            <!--   <td> <?php //form_input('discount[]',0,' onblur="calamount(this.value)" class="form-control-discount discount clonelastone"');?></td> 
              -->
              <td width="140"> <?=form_input('total[]',0,'class="form-control-discount clonelastone total" autocomplete="off" onkeyup="admincloneform(event)"');?>
              </td>
              <td width="5"><span class='close' onclick="removerform(event)"> x </span></td>
         </tr>
         </tbody>
     </table>

     <?php //form_hidden("discounttotal",0,"id='discount'")?>


<table class="table">

  <tr>
       <td colspan="2" align="right">Net Amount</td><td width="200"> <input type="text" name="netamount" id="total" value=0  class="form-control-discount"  /></td>
 <td colspan="3" align="right"> </tr>
 <tr>
  <td colspan="2" align="right">Advance</td><td width="200"> <input type="text" name="advance" id="advance" value=0  class="form-control-discount"  onkeyup="payadvance(this.value,document.getElementById('total').value)"/></td>
 <td colspan="3" align="right"> </tr>
<!--  <tr>
       <td colspan="2" align="right">Balance</td><td width="200"> <input type="text" name="balance" id="balance" value=0  class="form-control-discount"/></td>
 <td colspan="3" align="right"> </tr>
<tr>
  -->
<td colspan="4" align="right">
 <?php echo form_button('save','SAVE','class="btn btn-primary btn-lgy" onclick="insert_form(\'sale_order\')"');?>
</td><td colspan="2" align="right"></tr>
</table>

<?php
echo form_close();
?>
  