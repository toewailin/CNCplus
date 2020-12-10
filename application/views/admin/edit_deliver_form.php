
     <?=form_open("admin/edit_deliver","id='deliver'");
     echo form_hidden('id',$row->id);?>
 <div class="container">
              <table class="table table-bordered table-hover tablesorter">
                          <caption>  <h1> <small>Edit Order Form</small></h1>
                           <h5><?php echo $errmessage; ?></h5></caption>
                <tbody>
              
                   <tr>
                    <td  align="right" width="20%">   <label><?=$product_name?></label></td>
                    <td><?=form_input('product_name',$row->product_name,'class="form-control"')?></td>
                    </tr>

                     <tr>
                    <td  align="right">   <label><?=$unitname?></label></td>
                    <td><?=form_input('unit',$row->unit,'class="form-control"')?></td>
                    </tr>
                
                  
                   <tr>
                    <td  align="right">  <label><?=$price?></label></td>
                    <td>    <?=form_input('price',$row->price,'class="form-control"')?></td>
                  </tr>
                 
                  <tr>
                    <td  align="right">  <label><?=$quantity?></label></td>
                    <td>    <?=form_input('quantity',$row->quantity,'class="form-control"')?></td>
                  </tr>

                       <tr>
                    <td  align="right">  <label><?=$total?></label></td>
                    <td>    <?=form_input('total',$row->total,'class="form-control"')?></td>
                  </tr>
                  
                   <tr>
                    <td  align="right">  <label><?=$suppliername?></label></td>
                    <td>    <?=form_input('suppliername',$row->supplier_name,'class="form-control"')?></td>
                  </tr>

                  <tr>
                    <td  align="right">  <label><?=$address?></label></td>
                    <td>    <?=form_input('suppliername',$row->address,'class="form-control"')?></td>
                  </tr>

                   <tr>
                    <td  align="right">  <label><?=$authority?></label></td>
                    <td>    <?=form_input('authority',$row->authority,'class="form-control"')?></td>
                  </tr>
                  
                 <tr>
                    <td> </td>
                    <td><?php echo form_button('save','SAVE','class="btn btn-primary btn-lgy" onclick="update_data(\'deliver\')"');?></td>
                </tr>
                </tbody>
              </table>
</div>
 
 