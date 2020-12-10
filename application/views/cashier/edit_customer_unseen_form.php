
<?=form_open("admin/update_customer_unseen","id='customer_unseen'");?>
<?php echo form_hidden("id",$row->id);
$customer=$this->admin_model->grab_customer();
?>

 <div class="container">
              <table class="table table-bordered table-hover tablesorter">
                          <caption><h1> <small>Update Unseen Promotion</small></h1>
</caption>
                <tbody>
                 <tr>
                 <td align="right" width="30%"><label><?=$customername?>:</label></td>
                    <td> <?=form_dropdown('customer',$customer,$row->customer,'class="form-control"');?>
                    <span class="err"><?=form_error("customer")?></span></td>
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
                    <td><?php echo form_button('save',$save,'class="btn btn-primary btn-lgy" onclick="update_data(\'customer_unseen\')"');?></td>
                </tr>
                </tbody>
              </table>
            </div>
 <?=form_close();?>
