
     <?php 

     echo form_open("admin/edit_consinement_sale","id='consinement_sale'");
     echo form_hidden('id',$row->id);    
     echo form_hidden("voucherno",$row->voucherno);

     ?>
 <div class="container">
              <table class="table table-bordered table-hover tablesorter">
                          <caption>  <h1> <small>Consinement Sale Edit Form</small></h1>
                           <h5><?php echo $errmessage; ?></h5></caption>
                <tbody>
              

                  <tr>
                    <td  align="right">   <label>Product code:</label></td>
                    <td><?=form_input('product_code',$row->product_code,'class="form-control" id="product_code" onkeyup="admingrabdata(this.value,event)"')?></td>
                    </tr>
                
                   <tr>
                    <td  align="right" width="20%">   <label>Product Name:</label></td>
                    <td><?=form_input('product_name',$row->product_name,'class="form-control" id="product_name"')?>                
                        <?php  echo form_hidden('category',$row->category,'id="category"') ?>
                    </td>
                    </tr>

                   
                   <tr>
                    <td  align="right">  <label>Unit:</label></td>
                    <td><?=form_dropdown('unit',$unit,$row->unit,'class="form-control" id="unit" onchange="admin_grabprice(this.value)"');?></td>
                   </tr>

                      
                  <tr>
                    <td  align="right">  <label>Quantity:</label></td>
                    <td>    <?=form_input('quantity',$row->quantity,'class="form-control" id="quantity" onkeyup="calculate_total(this.value,document.getElementById(\'price\').value)"')?></td>
                  </tr>

                    <tr>
                    <td  align="right">  <label>Price:</label></td>
                    <td>    <input class="form-control-discount" type="text" name="price" id="price" value="<?=$row->price?>" readonly="readonly"/></td>
                  </tr>

              <tr>
                    <td  align="right">  <label>Discount:</label></td>
                    <td>    <input class="form-control-discount" type="text" name="discount" id="discount" value="<?=$row->discount?> %" /></td>
                  </tr>

              <tr>
                    <td  align="right">  <label>Total:</label></td>
                    <td>    <input class="form-control-discount" type="text" name="total" id="total" value="<?=$row->total?>" /></td>
                  </tr>
        

                 
                 <tr>
                    <td> </td>
                    <td><?php echo form_button('save','SAVE','class="btn btn-primary btn-lgy" onclick="update_sale(\'consinement_sale\')"');?></td>
                </tr>
                </tbody>
              </table>
</div>

 