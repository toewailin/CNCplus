
<?=form_open('',' class="cloneable-form" id="consinement_stock" ');?>
<?php echo form_hidden("tbl","tbl_consinement_stock"); ?>

 <div class="container">
 <table class="table">
 <caption> <h1> <small>Consinement Inventory Form</small> </h1>
</caption> 
<tr>
  <th></th>
  <th>Choose Date</th>
  <th> <input type="text" name="date" placeholder="choose date" id="date" class="date form-control calender" /></th>
<th>From (Sub-warehouse Name)</th>
 <th> <?=form_dropdown('subwarehouse_id',$subwarehouses,'','class="form-control-discount clonelastone" onkeyup="admincloneform(event)"');?></th>
</tr>

<tr>
  <th></th>
  <th></th>
  <th></th>

  <th>To (Consinement Name)</th>
 <th> <?=form_dropdown('consinement_id',$grab_tbl_id,'','class="form-control-discount clonelastone" onkeyup="admincloneform(event)"');?></th>
</tr>

</table>
<p><br/><br/></p>
 <table class="table table-bordered table-hover tablesorter"> 

    <tbody id="SourceWrapper">
   
    <tr>
        <th class="center"><?=$product_code?> </th> 
        <th class="center"><?=$product_name?></th>      

        <th class="center"><?=$quantity?> (Pcs)</th>
                    <td class="center"><?="Price"?></td>                    

        <th  class="center"><?=$price?></th>


       
     </tr>
      <tr class="clonethis">
          <td><?=form_input('product_code[]','','class="form-control-discount pcode autocomplete" onkeyup="fill(this.value,event)" autocomplete="off"');?> <div class="display"></div></td>
              <td> <?=form_input('product_name[]','','class="form-control-discount"');?><?=form_hidden("category[]","")?></td>
             
             

          <td > <input type="text" name="quantity[]" class="form-control-discount stockqty clonelastone" onkeyup="admincloneform(event)"  onblur="admincloneform(event)" required/><?php //form_input('quantity[]','','class="form-control-sale qty clonelastone" onkeyup="cloneform(event)"');?></td>
          <td> <?=form_dropdown('unit[]',array(""=>"... select ..."),'',' id="unit" class="form-control-discount clonelastone" onchange="grabprice(this.value,event)"');?></td>
                              </td>
         <td> <?=form_input('price[]','',' class="form-control-discount" onkeyup="admincloneform(event)"');?></td>

          <td> <span class='close' onclick="removerform(event)"> &times; </span></td>
      </tr>
   </tbody>
     <tr>
       <td colspan="4" align="right"><?php echo form_button('save',$save,'class="btn btn-primary btn-lgy" onclick="insert_form(\'consinement_stock\')"');?></td>
     </tr>
 </table>
