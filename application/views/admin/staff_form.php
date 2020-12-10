
<?=form_open("admin/create_staff","id='staff'");?>
 <div class="container">
              <table class="table table-bordered table-hover tablesorter">
                          <caption><h1> <small>Staff Entry Form</small></h1>
</caption>
                <tbody>
                 <tr>
                 <td align="right" width="20%"><label><?=$staffname?>:</label></td>
                    <td> <?=form_input('staff','','class="form-control"');?>
                    <span class="err"><?=form_error("staff")?></span></td>
                  </tr>
                   
                  <tr>
                    <td align="right"> </td>
                    <td><?php echo form_button('save',$save,'class="btn btn-primary btn-lgy" onclick="insert_form(\'staff\')"');?></td>
                </tr>
                </tbody>
              </table>
            </div>
 <?=form_close();?>
 