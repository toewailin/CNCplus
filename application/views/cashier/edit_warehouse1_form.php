
     <?php 

     echo form_open("admin/edit_warehouse1","id='warehouse1'");
     echo form_hidden('id',$row->id);    

     ?>
 <div class="container">
              <table class="table table-bordered table-hover tablesorter">
                          <caption>  <h1> <small>Edit Godaung Stock Form</small></h1>
                           <h5><?php echo $errmessage; ?></h5></caption>
                <tbody>
              

                  <tr>
                    <td  align="right">   <label>Product code:</label></td>
                    <td><?=form_input('product_code',$row->product_code,'class="form-control" id="product_code" onkeyup="admingrabdata(this.value,event)"')?></td>
                    </tr>
                
                   <tr>
                    <td  align="right" width="20%">   <label>Product Name:</label></td>
                    <td><?=form_input('product_name',$row->product_name,'class="form-control" id="product_name"')?></td>
                    </tr>

                   
                  
                   <tr>
                    <td  align="right">  <label>Unit:</label></td>
                    <td><?=form_dropdown('unit',$unit,$row->unit,'class="form-control" id="unit" onchange="admin_grabprice(this.value)"');?></td>
                   </tr>

                    

                    <tr>
                    <td  align="right">  <label>Price:</label></td>
                    <td>    <input class="form-control-discount" type="text" name="price" id="price" value="<?=$row->price?>" /></td>
                  </tr>

                  <tr>
                    <td  align="right">  <label>Small Item Count:</label></td>
                    <td>    <?=form_input('item_count',$row->smallitemcount,'class="form-control" id="smallitemcount"')?></td>
                  </tr>

                 
                  <tr>
                    <td  align="right">  <label>Quantity:</label></td>
                    <td>    <?=form_input('quantity',$row->quantity,'class="form-control" id="quantity" onkeyup="document.getElementById(\'total_smallitemcount\').value=parseFloat(this.value)*parseFloat(document.getElementById(\'smallitemcount\').value)"')?></td>
                  </tr>

                   <tr>
                    <td  align="right">  <label>Total Small Item Count:</label></td>
                    <td>    <?=form_input('total_smallitemcount',$row->total_smallitemcount,'class="form-control" id="total_smallitemcount"')?></td>
                  </tr>

                 
                 <tr>
                    <td> </td>
                    <td><?php echo form_button('save','SAVE','class="btn btn-primary btn-lgy" onclick="update_data(\'warehouse1\')"');?></td>
                </tr>
                </tbody>
              </table>
</div>

