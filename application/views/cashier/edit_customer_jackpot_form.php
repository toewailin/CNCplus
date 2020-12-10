
     <?php $jackpotcustomer=$this->admin_model->grab_jackpotcustomer();?>
     <?=form_open("admin/edit_product_price","id='customer_jackpot'");
     echo form_hidden('id',$row->id);?>
 <div class="container">
              <table class="table table-bordered table-hover tablesorter">
                          <caption>  <h1> <small>Edit customer jackpot Form</small></h1>
                          <h5><?php echo $errmessage; ?></h5></caption>
                <tbody>
                 <tr>
                 <td  align="right" width="20%"><label ><?=$customername?>:</label></td>
                   <td> <?=form_dropdown('customer',$jackpotcustomer,$row->customer,'class="form-control" onkeyup="cloneform(event)"');?></td>
                    </tr>
               
                 <tr>
                    <td  align="right">  <label>Percentage:</label></td>
                    <td>    <?=form_input('percentage',$row->percentage,'class="form-control"')?></td>
                  </tr>
                  
                 <tr>
                    <td> </td>
                    <td><?php echo form_button('save',$save,'class="btn btn-primary btn-lgy" onclick="update_data(\'customer_jackpot\')"');?></td>
                </tr>
                </tbody>
              </table>
</div>
 <?=form_close();?>
 