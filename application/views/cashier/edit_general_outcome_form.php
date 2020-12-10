
<?=form_open("admin/edit_general_outcome","id='general_outcome'");
 
    echo form_hidden('id',$row->id);?>
   
 <div class="container">
              <table class="table table-bordered table-hover tablesorter">
              <caption>
             <h1> <small>General Outcome Update Form</small></h1>
              <h5><?php echo $errmessage; ?></h5></caption>
            </caption>
                <tbody>
                
                  <tr>
                  <tr>
                    <td align="right"><label><?=$description?> :</label></td>
                    <td><?=form_textarea('description',$row->description,'class="form-control"')?></td>
                    </tr>
                     <tr>
                    <td align="right"><label><?=$amount?> :</label></td>
                    <td><?=form_input('price',$row->price,'class="form-control" id="price" onkeyup="changeprice(this.value,event)"')?></td>
                    </tr>

                     <tr>
                    <td align="right"><label><?=$quantity?> :</label></td>
                    <td><?=form_input('quantity',$row->quantity,'class="form-control" id="quantity" onkeyup="changeqty(this.value,event)"')?></td>
                    </tr>

                     <tr>
                    <td align="right"><label><?=$total?> :</label></td>
                    <td><?=form_input('total',$row->total,'class="form-control" id="total"')?></td>
                    </tr>
                  <tr>
                    <td align="right"> <label><?=$date?> :</label></td>
                    <td><?=form_input('date',$row->date,'class="form-control"')?></td>
                  </tr>
                  <tr>
                    <td align="right"><label><?=$authority?> :</label></td>
                     <td><?=form_input('authority',$row->authority,'class="form-control"')?></td>
                  </tr>

                     <tr>
                    <td align="right"><label>Outcome Category :</label></td>
                     <td><?=form_dropdown('outcome_category',$outcome_category,$row->outcome_category,'class="form-control"')?></td>
                  </tr>
                  <tr>
                    <td> </td>
                    <td><?php echo form_button('save','SAVE','class="btn btn-primary btn-lgy" onclick="update_data(\'general_outcome\')"');?></td>
                </tr>
                </tbody>
              </table>
            </div>
 <?=form_close();?>
