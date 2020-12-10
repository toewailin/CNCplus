
 <h1 > <small>Shop Damages Entry Form</small></h1>

<?=form_open("",'class="cloneable-form" id="damage_shop"');?>
<?=form_hidden("user",get_cookie("admin_cookie"));?>

 <div class="container">
              <table class="table table-bordered table-hover tablesorter">
                          
                <tbody id="SourceWrapper">
                <tr>
                    <td class="center"><?=$product_code?></td>
                    <td class="center"><?=$product_name?></td>                                       
                    <td class="center"><?=$unitname?></td>                    
                     <td class="center"><?=$quantity?></td>
                    <td class="center"><?=$date?></td>
                    <td></td>
                </tr>
                <tr class="clonethis">
                   <td ><?=form_input('product_code[]','','class="form-control-discount autocomplete"  onkeyup="fill(this.value,event)" autocomplete="off"');?> <div class="display"></div></td>
                    <td> <?=form_input('product_name[]','','class="form-control-discount"');?>           <?=form_hidden("category[]","")?>
</td>
                    
                    <td> <?=form_dropdown('unit[]',$unit,'','class="form-control-discount" id="unit"');?></td>
                    <td> <?=form_input('quantity[]','','class="form-control-discount qty" onkeyup="admincloneform(event)"');?></td>
                      <td>  <input type="date" name="date[]" value="<?=$today?>"  class="form-control-discount clonelastone date" onkeyup="cloneform(event)" /></td>

                      <td> <span class='close' onclick="removerform(event)"> &times; </span></td>
                </tr>
                </tbody>
                  <tr>
                    
                    
                    <td align="right" colspan="5"><?php echo form_button('save',$save,'class="btn btn-primary btn-lgy" onclick="insert_form(\'damage_shop\')"');?></td>
                </tr> 
                
              </table>
            </div>
 <?=form_close();?>
  
