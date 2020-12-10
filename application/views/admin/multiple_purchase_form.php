

<h3 class="title">Purchase Form</h3>

<h4>Header Information</h4>

 <?=form_open("","id='purchase-heading'")?>
 <input type="hidden" name="dilivery" value="0">
 <table class="table table-hover tablesorter">
  <tr>
    <td>Voucher</td>
    <td>
      <?php
      $row=$this->db->select_max("voucherno")->get("tbl_p")->row();
    $number=$row->voucherno+1;
    $voucherno=str_pad($number, 10, "0", STR_PAD_LEFT); 
   // return $pcname."-".$voucherno;

      $voucherno="P-".$voucherno;
      ?>
      <input class="form-control-discount" type="text" name="voucherno" id="voucherno" value="<?=$voucherno?>"/>
   </td>
    <td><?=$date?></td>
    <td>
      <input class="form-control-discount date" type="text" name="date" id="date1" value="<?=date("d-m-Y")?>"/>
    </td>
     </tr>
      <tr>
    <td><?=$suppliername?></td>
     <td> <?=form_dropdown('supplier',$supplier,'','class="form-control-discount" onchange="check_debt(this.value,\'supplier\')" autocomplete="off"');?></td>
        
    
     </tr>
  </table>
 
<?=form_close()?>

  <h4>Details Information</h4>
  <?=form_open('','id="purchase" name="myform"');?>

 <table class="table table-bordered table-hover tablesorter center"> 

       <tbody id="SourceWrapper">
            
           <tr>
           <td width="5">No</td>
            <td align="center" width="100" ><?=$product_code?></td>
            <td align="center" width="180"><?=$product_name?></td>     
            
           <!--  <td align="center" width="100"><?=$smallitemcount?></td> -->
          
            <td align="center" width="100"><?=$quantity?></td>
            <td align="center" width="70"><?=$unitname?></td>
              <td align="center" width="100"><?=$price?></td>
            <td align="center" width="150">Sub-Warehouse Name</td>
            <td align="center" width="100"> <?="သင့္ေငြ"?></td>
         </tr>
         <tr class="clonethis">
         <td class="no">1</td>
              <td><?=form_input('product_code[]','','class="form-control-discount pcode autocomplete"  onkeyup="fill(this.value,event)" autocomplete="off"');?> <div class="display"></div></td>
             <td> <?=form_input('product_name[]','','class="form-control-discount" autocomplete="off"');?></td>
              <td> <?=form_input('quantity[]','',' class="qty form-control-discount" onkeyup="admincloneform(event)" autocomplete="off"');?></td>
             
              <td> <?=form_dropdown('unit[]',array(""=>"... select ..."),'',' id="unit" class="form-control-discount clonelastone" onkeyup="admincloneform(event)"  onchange="grabprice(this.value,event)" autocomplete="off"');?> <?=form_hidden('item_count_hidden[]','');?><?=form_hidden("category[]","")?>
</td>
              <!--  <td><?php //form_input('item_count[]',0,' class="form-control-discount clonelastone" autocomplete="off"');?>
                
               </td> -->

              <td width="100"> <?=form_input('price[]','',' class="form-control-discount" onkeyup="admincloneform(event)" autocomplete="off"');?></td>
               <td width="100"> <?=form_dropdown('warehouse[]',$grab_tbl_id,'','onkeyup="admincloneform(event)" class="form-control-discount discount clonelastone"');?></td> 
              
              <td width="100"> <?=form_input('total[]',0,'class="form-control-discount clonelastone total" autocomplete="off" onkeyup="admincloneform(event)" ');?>
              </td>
              <td width="5"><span class='close' onclick="removerform(event)"> x </span></td>
         </tr>
         </tbody>
     </table>

<?=form_close()?>

<form id="purchase-send">


<table class="table">
  <tr>
       <td colspan="2" align="right">Net Amount </td><td width="200"> 
       <input type="text" name="nettotal" id="nettotal" value=0  class="form-control-discount" autocomplete="off" /></td>
 <td colspan="3" align="right"> </tr>
 <tr>

<td colspan="4" align="right">
 <?php echo form_button('save','SAVE','class="btn btn-primary btn-lgy" onclick="purchase_insert(\'purchase\')"');?>
</td><td colspan="2" align="right"></tr>
</table>
</form>
