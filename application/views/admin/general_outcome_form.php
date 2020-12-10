
<?=form_open("",'class="cloneable-form" id="general_outcome"');


   
echo form_hidden("authority",$this->session->userdata('AdminUser'));
    ?>
 <div class="container">
              <table class="table table-bordered table-hover tablesorter">
                          <caption><h1 > <small>General Outcome Entry Form</small></h1>
</caption>
                <tbody id="SourceWrapper">
                <tr>
                    
                    <td class="center"><?=$description?></td>
                     <td class="center"><?=$amount?></td>                 
                    <td class="center"><?=$quantity?></td> 
                    
                    <td class="center"><?=$total?></td>
                    <td class="center"><?=$authority?></td>
                  
                    <td class="center">Outcome Category</td>
                      <td class="center"><?=$date?></td>
                    <td></td>
                </tr>
                <tr class="clonethis title">
                   <td> <?=form_input('description[]','','class="form-control-discount"');?></td>
                     <td> <?=form_input('price[]','','class="form-control-discount price" onkeyup="admincloneform(event)"');?></td>
                      <td> <?=form_input('quantity[]','','class="form-control-discount qty" onkeyup="admincloneform(event)"');?></td>
                      <td> <?=form_input('total[]','','class="form-control-discount" onkeyup="admincloneform(event)"');?></td>
                        <td> <?=form_input('authority[]','','class="form-control-discount" onkeyup="admincloneform(event)"');?></td>
                      <td> <?=form_dropdown('outcome_category[]',$outcome_category,'','class="form-control-discount" onkeyup="admincloneform(event)"');?></td>
                      
                      <td> <input type="date" name="date[]" class="form-control-discount date" value="<?=$today?>" /></td>
                      <td> <span class='close' onclick="removerform(event)"> &times; </span></td>
                </tr>
                </tbody>
                  <tr>
                    <td colspan="4"> </td>
                    
                    <td align="right" colspan="5">
                    <?php echo form_button('save',$save,'class="btn btn-primary btn-lgy" onclick="insert_form(\'general_outcome\')"');?></td>
                </tr> 
                
              </table>
            </div>
 <?=form_close();?>
 