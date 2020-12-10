
<?=form_open("","id='debt_from_customer'");?>
      <div class="container">
              <table class="table table-bordered table-hover tablesorter">
                        <caption>    <h1> <small>Debt From Customer</small></h1>
</caption>  
                <tbody>
                 <tr>
                 <td width="20%"><label><?=$customername?></label></td>
                    <td> <?=form_dropdown('customer_name',$customer,"",'class="form-control"');?></td>
                  </tr>

                   <tr>
                    <td>   <label><?="က်န္ေငြ"?></label></td>
                    <td><?=form_input('require','','class="form-control"')?></td>
                    </tr>
                     <tr>
                    <td>   <label><?="ပိုေငြ"?></label></td>
                    <td><?=form_input('exceed','','class="form-control"')?></td>
                    </tr>
              
                  <tr>
                    <td>  <label><?=$date?></label></td>
                    <td>    <?=form_input('date',$today,'class="form-control date" id="date1"')?></td>
                  </tr>

                  <tr>
                    <td> </td>
                    <td><?php echo form_button('save','SAVE','class="btn btn-primary btn-lgy" onclick="insert_form(\'debt_from_customer\')"');?>
                   </td>
                </tr>
                </tbody>
              </table>
   </div>
 <?=form_close();?>
 