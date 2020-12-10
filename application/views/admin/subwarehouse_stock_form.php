
<?=form_open('',' class="cloneable-form" id="subwarehouse_stock" ');?>
<?php echo form_hidden("tbl","tbl_subwarehouse_stock"); ?>

 <div class="container">
 <table class="table">
 <caption> <h1> <small>Sub-warehouse Inventory Form</small> </h1>
</caption> 
<tr>
  <th></th>
  <th>Choose Date</th>
  <th> <input type="text" name="date" placeholder="choose date" id="date" class="date form-control calender" /></th>
<th>Choose Sub-warehouse Name</th>
<td> <?=form_dropdown('subwarehouse_id',$grab_tbl_id,'','class="form-control-discount clonelastone" onkeyup="admincloneform(event)"');?></td>
</tr>

</table>
<p><br/><br/></p>

 <table class="table table-bordered table-hover tablesorter"> 

    <tbody id="SourceWrapper">
   
    <tr>
        <th class="center"><?=$product_code?> </th> 
        <th class="center"><?=$product_name?></th>      

        <th class="center"><?=$quantity?> (Pcs)</th>
                    <th class="center"><?="Price"?></th>                    

        <th  class="center" width="100"><?=$price?></th>

     </tr>
      <tr class="clonethis">
          <td><?=form_input('product_code[]','','class="form-control-discount pcode autocomplete" onkeyup="fill(this.value,event)" autocomplete="off"');?> <div class="display"></div></td>
              <td> <?=form_input('product_name[]','','class="form-control-discount"');?> <?=form_hidden("category[]","")?></td>
             
             

          <td width="140"> <input type="text" name="quantity[]" class="form-control-discount stockqty clonelastone" onkeyup="admincloneform(event)"  onblur="admincloneform(event)" required/><?php //form_input('quantity[]','','class="form-control-sale qty clonelastone" onkeyup="cloneform(event)"');?></td>
 <td> <?=form_dropdown('unit[]',array(""=>"... select ..."),'',' id="unit" class="form-control-discount clonelastone" onchange="grabprice(this.value,event)" onkeyup="admincloneform(event)"');?></td>
                </td>
         <td width="15"> <?=form_input('price[]','',' class="form-control-discount" onkeyup="admincloneform(event)"');?></td>

          <td> <span class='close' onclick="removerform(event)"> &times; </span></td>
      </tr>
   </tbody>
     <tr>
       <td colspan="4" align="right"><?php echo form_button('save',$save,'class="btn btn-primary btn-lgy" onclick="insert_form(\'subwarehouse_stock\')"');?></td>
     </tr>
 </table>

 