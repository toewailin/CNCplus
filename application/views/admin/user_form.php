
<?=form_open("admin/create_user","id='user'");?>
 <div class="container">
              <table class="table table-bordered table-hover tablesorter">
                          <caption><h1> <small>User Registration Form</small></h1>
</caption>
                <tbody>
                 <tr>
                 <td align="right" width="20%"><label><?=$username?>:</label></td>
                    <td> <?=form_input('username','','class="form-control"');?>
                    <span class="err"><?=form_error("user_name")?></span></td>
                  </tr>
                   <tr>
                    <td align="right">   <label>Password:</label></td>
                    <td><?=form_password('password','','class="form-control"')?>
                    <span class="err"><?=form_error("password")?></span></td>
                    </tr>
                  <tr>
                   <tr>
                    <td align="right">  <label><?=$ipaddress?>:</label></td>
                    <td>    <?=form_input('ip_address','','class="form-control"')?>
                    <span class="err"><?=form_error("ip_address")?></span></td>
                  </tr>
                  <tr>
                    <td align="right">  <label><?=$computername?>:</label></td>
                    <td>    <?=form_input('computer_name','','class="form-control"')?>
                    <span class="err"><?=form_error("computer_name")?></span></td>
                  </tr>
                  <tr>
                    <td align="right">  <label><?=$userrole?>:</label></td>
                    <td>    <?=form_dropdown('user_role',array("cashier"=>"cashier","administrator"=>"administrator"),'','class="form-control"')?>
                    <span class="err"><?=form_error("user_role")?></span></td>
                  </tr>
                       <tr>
                    <td align="right">  <label><?=$date?>:</label></td>
                    <td>    <?=form_input('date',$today,'class="form-control"')?>
                    </td>
                  </tr>
                  <tr>
                    <td align="right"> </td>
                    <td><?php echo form_button('save',$save,'class="btn btn-primary btn-lgy" onclick="insert_form(\'user\')"');?></td>
                </tr>
                </tbody>
              </table>
            </div>
 <?=form_close();?>
  