
<?=form_open("","id='remind_purchase'");
echo form_hidden('id',$row->id);
?>
 <div class="container">
              <table class="table table-bordered table-hover tablesorter">
                          <caption> <h1> <small>Edit Running Out Product Setting</small></h1>
</caption>
                <tbody>
                <tr>
                 <td  align="right" width="20%"><label><?=$product_code?>:</label></td>
                    <td> <?=form_input('product_code',$row->product_code,'class="form-control" id="product_code" onkeyup="grabunit(this.value,event)"');?>
                    <span class="err"><?=form_error("product_code")?></span></td>
                  </tr>
                 <tr>
                 <td  align="right"><label><?=$product_name?>:</label></td>
                    <td> <?=form_input('product_name',$row->product_name,'class="form-control" id="product_name"');?>
                    <span class="err"><?=form_error("product_name")?></span></td>
                  </tr>
                 
                   <tr>
                    <td  align="right">    <label><?=$unitname?>:</label></td>
                   <td>    <?=form_dropdown('unit',$unit,$row->unit,'class="form-control" id="unit"')?>
                   <span class="err"><?=form_error("unit")?></span></td>
                  </tr>
                
                    <td  align="right">  <label><?=$atleastqty?>:</label></td>
                    <td>    <?=form_input('atleastqty',$row->atleastqty,'class="form-control"')?>
                    <span class="err"><?=form_error("atleastqty")?></span></td>
                 
                  </tr>
                    <tr>
                    <td> </td>
                    <td ><?php echo form_button('save',$save,'class="btn btn-primary btn-lgy" onclick="update_data(\'remind_purchase\')"');?></td>
                   
                </tr>
                </tbody>
              </table>
            </div>
 <?=form_close();?>
 