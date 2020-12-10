 <?=form_open("admin/edit_user","id='user'");
     echo form_hidden('id',$row->id);?>
 <div class="container">
              <table class="table table-bordered table-hover tablesorter">
                       <caption> <h1> <small>Edit User Form</small></h1>
    <h5><?php echo $errmessage; ?></h5></caption>   
                <tbody>
                 <tr>
                 <td  align="right"><label ><?=$username?>:</label></td>
                    <td> <?=form_input('username',$row->username,'class="form-control"');?></td>
                  </tr>
                 
                  <tr>
                   <tr>
                    <td  align="right">  <label><?=$ipaddress?>:</label></td>
                    <td>    <?=form_input('ip_address',$row->ip_address,'class="form-control"')?></td>
                  </tr>
                  <tr>
                    <td  align="right">  <label><?=$computername?>:</label></td>
                    <td>    <?=form_input('computer_name',$row->computer_name,'class="form-control"')?></td>
                  </tr>
                 <tr>
                    <td align="right">  <label><?=$userrole?>:</label></td>
                    <td>    <?=form_dropdown('user_role',array("cashier"=>"cashier","administrator"=>"administrator"),$row->user_role,'class="form-control"')?>
                    <span class="err"><?=form_error("user_role")?></span></td>
                  </tr>
                       <tr>
                    <td  align="right">  <label><?=$date?>:</label></td>
                    <td>    <?=form_input('date',$row->date,'class="form-control"')?></td>
                  </tr>
                  <tr>
                    <td> </td>
                    <td><?php echo form_button('save',$save,'class="btn btn-primary btn-lgy" onclick="update_data(\'user\')"');?></td>
                </tr>
                </tbody>
              </table>
</div>
 <?=form_close();?>
 
