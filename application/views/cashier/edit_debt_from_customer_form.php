
<?=form_open("admin/edit_debt_from_customer","id='debt_from_customer'");
echo form_hidden("id",$row->id);
  $datestring = " %Y/%m/%d";
    $date= mdate($datestring);?>
      <div class="container">
              <table class="table table-bordered table-hover tablesorter">
                        <caption>    <h1> <small>Debt From Customer</small></h1>
</caption>  
                <tbody>
                 <tr>
                 <td width="20%"><label>Customer Name</label></td>
                    <td> <?=form_input('customer_name',$row->customer_name,'class="form-control"');?></td>
                  </tr>
                   <tr>
                    <td>   <label>Amount to Get</label></td>
                    <td><?=form_input('amount_to_get',$row->amounttoget,'class="form-control"')?></td>
                    </tr>

                  <tr>
                   <tr>
                    <td>  <label>Product Name</label></td>
                    <td> <?=form_input('product_name',$row->product_name,'class="form-control"');?></td>

                  </tr>

                  <tr>
                    <td>   <label>Category Name</label></td>
                    <td>   <?=form_dropdown('category',$category,$row->category,'class="form-control"');?></td>
                  </tr>
                  <tr>
                    <td>  <label>Date</label></td>
                    <td>    <?=form_input('date',$row->date,'class="form-control"')?></td>
                  </tr>

               <tr>
                    <td> </td>
                    <td><?php echo form_button('save','SAVE','class="btn btn-primary btn-lgy" onclick="update_data(\'debt_from_customer\')"');?></td>
                </tr>
                </tbody>
              </table>
   </div>
 <?=form_close();?>
