
<?=form_open('',' class="cloneable-form" id="shop_stock" ');?>

 <div class="container">
 <table class="table table-bordered table-hover tablesorter"> 
 <caption> <h1> <small>ဆိုင္သို႕ ကုန္ထည့္ရန္</small></h1>
</caption> 
    <tbody id="SourceWrapper">
   
    <tr>
        <td class="center"><?=$product_code?> </td> 
        <td class="center"><?=$product_name?></td>      
       <td class="center" width="100"><?=$smallitemcount?></td>
        <td class="center"><?=$quantity?></td>
                <td class="center"><?=$unitname?></td>  

        <td class="center" width="100"><?=$total.' '.$smallitemcount?></td>
        <td  class="center" width="100"><?=$price?></td>
       
     </tr>
      <tr class="clonethis">
            <td><?=form_input('product_code[]','','class="form-control-discount pcode autocomplete"  onkeyup="fill(this.value,event)" autocomplete="off"');?> <div class="display"></div></td>
                   <td> <?=form_input('product_name[]','','class="form-control-discount"');?></td>
           <?=form_hidden("category[]","")?>
             
             
               <td><?=form_input('item_count[]',0,' class="form-control-discount clonelastone"');?>
                              </td>
             
          <td width="140"> <input type="text" name="quantity[]" class="form-control-discount stockqty clonelastone" onkeyup="admincloneform(event)"  onblur="admincloneform(event)" required/><?php //form_input('quantity[]','','class="form-control-sale qty clonelastone" onkeyup="cloneform(event)"');?></td>
                     <td> <?=form_dropdown('unit[]',array(""=>"... select ..."),'',' id="unit" class="form-control-discount clonelastone" onkeyup="admincloneform(event)" onchange="grabprice(this.value,event)"');?></td>

        <td><?=form_input('total_smallitemcount[]',0,' class="form-control-discount clonelastone" onkeyup="admincloneform(event)"');?>  </td>
         <td width="15"> <?=form_input('price[]','',' class="form-control-discount"');?></td>
             
          <td> <span class='close' onclick="removerform(event)"> &times; </span></td>
      </tr>
   </tbody>
     <tr>
       <td colspan="4" align="right"><?php echo form_button('save',$save,'class="btn btn-primary btn-lgy" onclick="insert_form(\'shop_stock\')"');?></td>
     </tr>
 </table>
