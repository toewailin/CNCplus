
<?=form_open("admin/create_supplier","id='supplier'");?>
 <div class="container">
              <table class="table table-bordered table-hover tablesorter">
                          <caption><h1> <small>ဒိုင္အမည္စာရင္းသစ္ထည့္ရန္</small></h1>
</caption>
                <tbody>
                 <tr>
                 <td align="right" width="30%"><label><?=$suppliername?>:</label></td>
                    <td> <?=form_input('supplier','','class="form-control"');?>
                    <span class="err"><?=form_error("supplier")?></span></td>
                  </tr>
                   <tr>
                    <td align="right">   <label><?=$address?>:</label></td>
                    <td><?=form_input('address','','class="form-control"')?>
                    <span class="err"><?=form_error("address")?></span></td>
                    </tr>
                 <tr>
                    <td align="right">  <label><?=$contact_person?>:</label></td>
                    <td>    <?=form_input('contact_person','','class="form-control"')?>
                    <span class="err"><?=form_error("contact_person")?></span></td>
                  </tr>

                   <tr>
                    <td align="right">  <label><?=$phone?>:</label></td>
                    <td>    <?=form_input('phone','','class="form-control"')?>
                    <span class="err"><?=form_error("phone")?></span></td>
                  </tr>
                 
                   <tr>
                    <td align="right">   <label><?="က်န္ေငြ"?></label></td>
                    <td><?=form_input('require','','class="form-control"')?></td>
                    </tr>
                     <tr>
                    <td align="right">   <label><?="ပိုေငြ"?></label></td>
                    <td><?=form_input('exceed','','class="form-control"')?></td>
                    </tr>
              
                  <tr>
                    <td align="right">  <label><?=$date?></label></td>
                    <td>    <?=form_input('date',$today,'class="form-control date" id="date1"')?></td>
                  </tr>
                  <tr>
                  <tr>
                    <td align="right"> </td>
                    <td><?php echo form_button('save',$save,'class="btn btn-primary btn-lgy" onclick="insert_form(\'supplier\')"');?></td>
                </tr>
                </tbody>
              </table>
            </div>
 <?=form_close();?>
