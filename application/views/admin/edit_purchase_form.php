
     <?=form_open("admin/edit_purchase","id='purchase'");
     echo form_hidden('id',$row->id);?>
 <div class="container">
              <table class="table table-bordered table-hover tablesorter">
                          <caption>  <h1> <small>Edit Purchase Form</small></h1>
                           <h5><?php echo $errmessage; ?></h5></caption>
                <tbody>
              

                  <tr>
                    <td  align="right">   <label>Product code:</label></td>
                    <td><?=form_input('product_code',$row->product_code,'class="form-control"')?></td>
                    </tr>
                
                   <tr>
                    <td  align="right" width="20%">   <label>Product Name:</label></td>
                    <td><?=form_input('product_name',$row->product_name,'class="form-control"')?></td>
                    </tr>

                   
                  
                   <tr>
                    <td  align="right">  <label>Unit:</label></td>
                    <td>    <?=form_dropdown('unit',$unit,$row->unit,'class="form-control"')?></td>
                  </tr>

                   <tr>
                    <td  align="right">  <label>Small Item Count:</label></td>
                    <td>    <?=form_input('smallitemcount',$row->smallitemcount,'class="form-control"')?></td>
                  </tr>
                 
                  <tr>
                    <td  align="right">  <label>Quantity:</label></td>
                    <td>    <?=form_input('quantity',$row->quantity,'class="form-control" onkeyup="changeqty(this.value,event)" id="quantity"')?></td>
                  </tr>


                       <tr>
                    <td  align="right">  <label>Price:</label></td>
                    <td>    <?=form_input('price',$row->price,'class="form-control" onkeyup="changeprice(this.value,event)" id="price"')?></td>
                  </tr>
                
                <tr>
                  
                  <td align="right"> <label>Transportation Charges</td>
                  <td> <input type="text" name="transportationcharges" class="form-control" id="transportationcharges" value="<?=$row->transportationcharges?>"></td>
                
                </tr>


                 <tr>
                  
                  <td align="right"> <label>Transfer Rate</td>
                  <td> <input type="text" name="transferrate" class="form-control" id="transferrate" value="<?=$row->transferrate?>"></td>
                 
                </tr>

              

                <tr>
                  
                  <td align="right"> <label>Amount For Each Unit</td>
                  <td> <input type="text" name="amountforeachunit" class="form-control" id="amountforeachunit" value="<?=$row->amountforeachunit?>"></td>
                 
                </tr>


                <tr>
                  
                  <td align="right"> <label>Amount For Small Item</td>
                  <td> <input type="text" name="amountforsmallitem" class="form-control" id="amountforsmallitem" value="<?=$row->amountforsmallitem?>"></td>
                 
                </tr>

                   <tr>
                    <td  align="right">  <label>Net Total:</label></td>
                    <td>    <?=form_input('netamount',$row->total,'class="form-control" id="total"')?></td>
                  </tr>
                 
                 <tr>
                    <td> </td>
                    <td><?php echo form_button('save','SAVE','class="btn btn-primary btn-lgy" onclick="update_data(\'purchase\')"');?></td>
                </tr>
                </tbody>
              </table>
</div>
