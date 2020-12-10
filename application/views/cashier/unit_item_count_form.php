
<?=form_open("",'id="unit_item_count"');?>

 <div class="container">
              <table class="table table-bordered table-hover tablesorter">
                          <caption><h1> <small>Unit Entry Form</small></h1>
</caption>
                <tbody>
                <tr>
                    <td>   <label>Product Code </label></td>
                    <td><?=form_input('product_code','','class="form-control"')?><br>
                    <span class="err"><?=form_error("product_code")?></span></td>
                    </tr>
                 <tr>
                 <td width="20%"><label>Product Name</label></td>
                    <td><?=form_input('product_name','','class="form-control"');?><br> 
                    <span class="err"><?=form_error("product_name")?></td>
                  </tr>
                
                   <tr>
                    <td>   <label>Unit </label></td>
                    <td><?=form_input('unit','','class="form-control"')?><br>
                    <span class="err"><?=form_error("unit")?></span></td>
                    </tr>
                 <tr>
                 <tr>
                    <td>   <label>Item Count </label></td>
                    <td><?=form_input('item_count','','class="form-control"')?><br>
                    <span class="err"><?=form_error("item_count")?></span></td>
                    </tr>
                 <tr>
                    <td> </td> 
                    <td><?php echo form_button('save','SAVE','class="btn btn-primary btn-lgy" onclick="insert_form(\'unit_item_count\')"');?></td>
                </tr>
              
                </tbody>
              </table>
            </div>
 <?=form_close();?>
 