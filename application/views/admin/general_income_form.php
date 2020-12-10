
 
<?=form_open("admin/create_general_income","id='general_income'");?>
 <div class="container">
              <table class="table table-bordered table-hover tablesorter">
                          <caption><h1> <small>General Income Entry Form</small></h1>
</caption>
                <tbody>
                 <tr>
                 <td align="right" width="20%"><label>Name :</label></td>
                    <td> <?=form_input('name','','class="form-control"');?>
                    <span class="err"><?=form_error("name")?></span></td>
                  </tr>

                    <tr>
                 <td align="right" width="20%"><label>Amount :</label></td>
                    <td> <?=form_input('amount','','class="form-control"');?>
                    <span class="err"><?=form_error("amount")?></span></td>
                  </tr>
                   
                    <tr>
                 <td align="right" width="20%" valign="top"><label>remark :</label></td>
                    <td> <?=form_textarea('remark',"",'class="form-control"');?>
                    <span class="err"><?=form_error("remark")?></span></td>
                  </tr>
                    <tr>
                 <td align="right" width="20%"><label>Date  :</label></td>
                    <td> <?=form_input('date','','class="form-control date"');?>
                    <span class="err"><?=form_error("date")?></span></td>
                  </tr>
                   
                  <tr>
                    <td align="right"> </td>
                    <td><?php echo form_button('save',$save,'class="btn btn-primary btn-lgy" onclick="insert_form(\'general_income\')"');?></td>
                </tr>
                </tbody>
              </table>
            </div>
 <?=form_close();?>
 