
 <h1 > <small>Subwarehouse Reject Entry Form</small></h1>

<?=form_open("",'class="cloneable-form" id="damage_subwarehouse"');?>
<?=form_hidden("user",get_cookie("admin_cookie"));?>

 <div class="container">
              <table class="table table-bordered table-hover tablesorter">
                          
                <tbody id="SourceWrapper">
                <tr>
                    <th class="center"><?=$product_code?></th>
                    <th class="center"><?=$product_name?></th>                                       
                    <th class="center"><?="Price"?></th>                    
        <th class="center"><?=$quantity?> (Pcs)</th>
                     <th>Sub-Warehouse</th>
                    <th class="center"><?=$date?></th>
                    <th></th>
                </tr>
                <tr class="clonethis">
                   <td ><?=form_input('product_code[]','','class="form-control-discount autocomplete"  onkeyup="fill(this.value,event)" autocomplete="off"');?> <div class="display"></div></td>
                    <td> <?=form_input('product_name[]','','class="form-control-discount"');?>           <?=form_hidden("category[]","")?>
</td>
                    
                    <td> <?=form_dropdown('unit[]',$unit,'','class="form-control-discount" id="unit"');?></td>
                    <td> <?=form_input('quantity[]','','class="form-control-discount qty" onkeyup="admincloneform(event)"');?></td>
                                   <td width="100"> <?=form_dropdown('subwarehouse_id',$grab_tbl_id,'','class="form-control-discount clonelastone" onkeyup="admincloneform(event)"');?></td> 

                      <td>  <input type="date" name="date[]" value="<?=date("d-m-Y")?>"  class="form-control-discount clonelastone date" onkeyup="cloneform(event)" /></td>

                      <td> <span class='close' onclick="removerform(event)"> &times; </span></td>
                </tr>
                </tbody>
                  <tr>
                    
                    
                    <td align="right" colspan="5"><?php echo form_button('save',$save,'class="btn btn-primary btn-lgy" onclick="insert_form(\'damage_subwarehouse\')"');?></td>
                </tr> 
                
              </table>
            </div>
 <?=form_close();?>
  
