
<?=form_open("admin/create_supplier","id='supplier_unseen'");?>
<?php echo form_hidden("id",$row->id);
$supplier=$this->admin_model->grab_supplier();
?>

 <div class="container">
              <table class="table table-bordered table-hover tablesorter">
                          <caption><h1> <small>Update Unseen Promotion</small></h1>
</caption>
                <tbody>
                 <tr>
                 <td align="right" width="30%"><label><?=$suppliername?>:</label></td>
                    <td> <?=form_dropdown('supplier',$supplier,$row->supplier,'class="form-control"');?>
                    <span class="err"><?=form_error("supplier")?></span></td>
                  </tr>
                   <tr>
                    <td align="right">   <label><?=$amount?>:</label></td>
                    <td><?=form_input('amount',$row->amount,'class="form-control"')?>
                    <span class="err"><?=form_error("amount")?></span></td>
                    </tr>
                 <tr>
                    <td align="right">  <label><?=$date?>:</label></td>
                    <td>    <input type="date" name="date" class="form-control" value="<?=$row->date?>">
                    <span class="err"><?=form_error("date")?></span></td>
                  </tr>
                 <tr>
                    <td align="right"> </td>
                    <td><?php echo form_button('save',$save,'class="btn btn-primary btn-lgy" onclick="update_data(\'supplier_unseen\')"');?></td>
                </tr>
                </tbody>
              </table>
            </div>
 <?=form_close();?>
   
   