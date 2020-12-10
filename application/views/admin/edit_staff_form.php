
 <div class="container">

<?php echo form_open("admin/update_staff","id='staff'");
 echo form_hidden('id',$row->id);
?>
              <table class="table table-bordered table-hover tablesorter">
                          <caption><h1> <small>Edit Staff Form</small></h1>
</caption>
                <tbody>
                 <tr>
                 <td align="right" width="20%"><label><?=$staffname?>:</label></td>
                    <td> <?=form_input('name',$row->staff,'class="form-control"');?>
                    <span class="err"><?=form_error("staff")?></span></td>
                  </tr>
                   
                  <tr>
                    <td align="right"> </td>
                    <td><?php echo form_button('save',$save,'class="btn btn-primary btn-lgy" onclick="update_data(\'staff\')"');?></td>
                </tr>
                </tbody>
              </table>
               <?=form_close();?>

            </div>
 