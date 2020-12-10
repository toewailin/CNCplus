
    <h5><?php echo $errmessage; ?></h5>
     <?=form_open("admin/edit_damage_shop","id='damage_warehouse1'");
     echo form_hidden('id',$row->id);?>
 <div class="container">
              <table class="table table-bordered table-hover tablesorter">
                          <caption>  <h1> <small>ဂုိေဒါင္ (၁) ကုန္အပ်က္အစီးစာရင္း ျပင္ရန္ </small></h1></caption>
                <tbody>
                 <tr>
                 <td  align="right" width="20%"><label ><?=$product_code?>:</label></td>
                    <td width="60%"> <?=form_input('product_code',$row->product_code,'class="form-control"');?></td>
                  </tr>
                   <tr>
                    <td  align="right">   <label><?=$product_name?>:</label></td>
                    <td><?=form_input('product_name',$row->product_name,'class="form-control"')?></td>
                    </tr>
                    
                    </tr>
                 

                   <tr>
                    <td  align="right">  <label><?=$unitname?>:</label></td>
                    <td>    <?=form_dropdown('unit',$unit,$row->unit,'class="form-control"')?></td>
              
                  </tr>
                    <td  align="right">  <label><?=$quantity?>:</label></td>
                    <td>    <?=form_input('quantity',$row->quantity,'class="form-control" onkeyup="changeqty(this.value,event)"')?></td>
                  </tr>
                       
                  
                 <tr>
                    <td  align="right">  <label><?=$authority?>:</label></td>
                    <td>    <?=form_input('authority',$row->authority,'class="form-control" onkeyup="changeqty(this.value,event)"')?></td>
                  </tr>
                       
                    <td> </td>
                    <td><?php echo form_button('save',$save,'class="btn btn-primary btn-lgy" onclick="update_data(\'damage_warehouse1\')"');?></td>
                </tr>
                </tbody>
              </table>
</div>
 <?=form_close();?>
