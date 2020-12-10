
 
<?=form_open("admin/update_general_income","id='general_income'");?>
<input type="hidden" name="id" value="<?=$row->id?>">
 <div class="container">
              <table class="table table-bordered table-hover tablesorter">
                          <caption><h1> <small>General Income Update Form</small></h1>
</caption>
                <tbody>
                 <tr>
                 <td align="right" width="20%"><label>name :</label></td>
                    <td> <?=form_input('name',$row->name,'class="form-control"');?>
                    <span class="err"><?=form_error("name")?></span></td>
                  </tr>

                    <tr>
                 <td align="right" width="20%"><label>Amount :</label></td>
                    <td> <?=form_input('amount',$row->total,'class="form-control"');?>
                    <span class="err"><?=form_error("amount")?></span></td>
                  </tr>

                   <tr>
                 <td align="right" width="20%" valign="top"><label>Remark :</label></td>
                    <td> <?=form_textarea('remark',$row->remark,'class="form-control"');?>
                    <span class="err"><?=form_error("remark")?></span></td>
                  </tr>
                   
                    <tr>
                 <td align="right" width="20%"><label>Date  :</label></td>
                    <td> <?=form_input('date',$row->date,'class="form-control date"');?>
                    <span class="err"><?=form_error("date")?></span></td>
                  </tr>
                   
                  <tr>
                    <td align="right"> </td>
                    <td><?php echo form_button('save',$save,'class="btn btn-primary btn-lgy" onclick="update_data(\'general_income\')"');?></td>
                </tr>
                </tbody>
              </table>
            </div>
 <?=form_close();?>
 