
<?=form_open("" ,'class="cloneable-form" id="remind_purchase"');?>
 <div class="container">
              <table class="table table-bordered table-hover tablesorter">
              <caption>
            <h1> <small>Set Running Out Product Remind </small></h1></caption>
                <tbody id="SourceWrapper">
                <tr>
                  <td class="center"><?=$product_code?></td>
                 <td class="center"><?=$product_name?></td>
                 
                  <td class="center"><?=$unitname?></td>
                  <td class="center"><?=$atleastqty?></td>
                  <td></td>
                </tr>
                <tr class="clonethis">
                  <td> <?=form_input('product_code[]','','class="form-control-discount autocomplete"  onkeyup="fill(this.value,event)" autocomplete="off"');?> <div class="display"></div></td>
                 <td> <?=form_input('product_name[]','','class="form-control-discount"');?></td>
                    <td> <?=form_dropdown('unit[]',$unit,'','class="form-control-discount" onkeyup="admincloneform(event)" id="unit"');?></td>
                  <td> <?=form_input('quantity[]','','class="form-control-discount qty clonelastone" onkeyup="admincloneform(event)"');?></td>
                  <td> <span class='close' onclick="removerform(event)"> &times; </span></td>
                </tr>
                </tbody>
                <tr>
                     <td colspan="3"> </td>
                    <td><?php echo form_button('save',$save,'class="btn btn-primary btn-lgy" onclick="insert_form(\'remind_purchase\')"');?></td>
                </tr> 
              </table>
            </div>
 <?=form_close();?>
  
  