
 
<?=form_open("admin/create_subwarehouse","id='subwarehouse'");?>
 <div class="container">
              <table class="table table-bordered table-hover tablesorter">
                          <caption><h1> <small>Warehouse Entry Form</small></h1>
</caption>
                <tbody>
                 <tr>
                 <td align="right" width="20%"><label>Warehouse Name :</label></td>
                    <td> <?=form_input('name','','class="form-control"');?>
                    <span class="err"><?=form_error("name")?></span></td>
                  </tr>
                    <tr>
                 <td align="right" width="20%"><label>Location :</label></td>
                    <td> <?=form_input('location','','class="form-control"');?>
                    <span class="err"><?=form_error("location")?></span></td>
                  </tr>
                   
                  <tr>
                    <td align="right"> </td>
                    <td><?php echo form_button('save',$save,'class="btn btn-primary btn-lgy" onclick="insert_form(\'subwarehouse\')"');?></td>
                </tr>
                </tbody>
              </table>
            </div>
 <?=form_close();?>
 