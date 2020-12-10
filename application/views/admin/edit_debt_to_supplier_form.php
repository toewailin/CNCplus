
<?=form_open("admin/edit_debt_to_supplier","id='debt_to_supplier'");
echo form_hidden("id",$row->id);
 ?>
 <div class="container">
              <table class="table table-bordered table-hover tablesorter">
                          <caption> <h1> <small>Debt  to Supplier</small></h1>
</caption>
                <tbody>
                 <tr>
                 <td align="right" width="20%"><label>Supplier Name:</label></td>
                    <td> <?=form_input('supplier_name',$row->supplier_name,'class="form-control"');?>
                    <span class="err"><?=form_error("supplier_name")?></span></td>
                  </tr>
                   <tr>
                    <td align="right">   <label>Amount to Give:</label></td>
                    <td><?=form_input('amount_to_give',$row->amounttogive,'class="form-control"')?>
                    <span class="err"><?=form_error("amount_to_give")?></span></td>
                    </tr>

                  
                   <tr>
                    <td align="right">  <label>Product Name:</label></td>
                    <td>    <?=form_input('product_name',$row->product_name,'class="form-control"')?>
                    <span class="err"><?=form_error("product_name")?></span></td>
                  </tr>
                  <tr>
                    <td align="right">   <label>Category Name:</label></td>
                    <td>   <?=form_dropdown('category',$category,$row->category,'class="form-control"');?>
                    </td>
                  </tr>
                  <tr>
                    <td align="right">  <label>Date:</label></td>
                    <td>    <?=form_input('date',$row->date,'class="form-control"')?>
                    </td>
                  </tr>
                  <tr>
                    <td> </td>
                    <td><?php echo form_button('save','SAVE','class="btn btn-primary btn-lgy" onclick="update_data(\'debt_to_supplier\')"');?></td>
                </tr>
                </tbody>
              </table>
            </div>
 <?=form_close();?>
