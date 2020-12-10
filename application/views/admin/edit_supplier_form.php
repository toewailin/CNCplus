

<?=form_open("admin/update_supplier","id='supplier'");
    echo form_hidden('id',$row->id,"id='rowid'")
?>
 <div class="container">
              <table class="table table-bordered table-hover tablesorter">
                          <caption><h1> <small>ဒိုင္အမည္္စာရင္းျပင္ရန္</small></h1>
</caption>
                <tbody>
                 <tr>
                 <td align="right" width="20%"><label><?=$suppliername?>:</label></td>
                    <td> <?=form_input('supplier',$row->supplier_name,'class="form-control"');?>
                    <span class="err"><?=form_error("supplier")?></span></td>
                  </tr>
                   <tr>
                    <td align="right">   <label><?=$address?>:</label></td>
                    <td><?=form_input('address',$row->address,'class="form-control"')?>
                    <span class="err"><?=form_error("address")?></span></td>
                    </tr>
                    <tr>
                    <td align="right">  <label><?=$contact_person?>:</label></td>
                    <td>    <?=form_input('contact_person',$row->contact_person,'class="form-control"')?>
                    <span class="err"><?=form_error("contact_person")?></span></td>
                  </tr>
                   <tr>
                    <td align="right">  <label><?=$phone?>:</label></td>
                    <td>    <?=form_input('phone',$row->phone,'class="form-control"')?>
                    <span class="err"><?=form_error("phone")?></span></td>
                  </tr>
                
                  <tr>
                    <td align="right">   <label><?="က်န္ေငြ"?></label></td>
                    <td><?=form_input('require',($row->total_debt<0 ? $row->total_debt : 0),'class="form-control"')?></td>
                    </tr>
                     <tr>
                    <td align="right">   <label><?="ပိုေငြ"?></label></td>
                    <td><?=form_input('exceed',($row->total_debt>0 ? $row->total_debt : 0),'class="form-control"')?></td>
                    </tr>
              
                  <tr>
                    <td align="right">  <label><?=$date?></label></td>
                    <td>    <?=form_input('date',$row->date,'class="form-control date" id="date1"')?></td>
                  </tr>
                  <tr>
                    <td align="right"> </td>
                    <td><?php echo form_button('save',$save,'class="btn btn-primary btn-lgy" onclick="update_data(\'supplier\')"');?></td>
                </tr>
                </tbody>
              </table>
            </div>
 <?=form_close();?>
 