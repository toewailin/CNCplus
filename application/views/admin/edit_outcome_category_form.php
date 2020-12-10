
<?=form_open("admin/edit_unit","id='outcome_category'");
echo form_hidden('id',$row->id);?>
 <div class="container">
              <table class="table table-bordered table-hover tablesorter">
                          <caption>  <h1> <small>Edit Outcome Category Form</small></h1>
                      <h5><?php echo $errmessage; ?></h5>
                          </caption>
                <tbody>

                 
                   <tr>
                    <td align="right">   <label><?=$title?> </label></td>
                    <td><?=form_input('title',$row->title,'class="form-control"')?></td>
                    </tr>

                      <tr>
                    <td align="right">   <label><?=$amount?> </label></td>
                    <td><?=form_input('amount',$row->amount,'class="form-control"')?></td>
                    </tr>

               
                <tr>
                    <td> </td>
                    <td><?php echo form_button('save',$save,'class="btn btn-primary btn-lgy" onclick="update_data(\'outcome_category\')"');?></td>
                </tr>
                </tbody>
              </table>
            </div>
 <?=form_close();?>
 
 