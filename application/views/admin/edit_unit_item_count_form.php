
<?=form_open("admin/edit_unit","id='unit'");
echo form_hidden('id',$row->id);?>
 <div class="container">
              <table class="table table-bordered table-hover tablesorter">
                          <caption>  <h1> <small>Edit Unit Item Count Form</small></h1>
                      <h5><?php echo $errmessage; ?></h5>
                          </caption>
                <tbody>

                   <tr>
                    <td>   <label>Product Code </label></td>
                    <td><?=form_input('product_code',$row->product_code,'class="form-control"')?></td>
                    </tr>
                 <tr>
                 <td><label>Product Name</label></td>
                    <td><?=form_input('product_name',$row->product_name,'class="form-control"');?></td>
                  </tr>
                
                   <tr>
                    <td>   <label>Unit </label></td>
                    <td><?=form_input('unit',$row->unit,'class="form-control"')?></td>
                    </tr>

                     <tr>
                    <td>   <label>Item Count </label></td>
                    <td><?=form_input('item_count',$row->item_count,'class="form-control"')?></td>
                    </tr>
                <tr>
                    <td> </td>
                    <td><?php echo form_button('save','SAVE','class="btn btn-primary btn-lgy" onclick="update_data(\'unit\')"');?></td>
                </tr>
                </tbody>
              </table>
            </div>
 <?=form_close();?>
 
