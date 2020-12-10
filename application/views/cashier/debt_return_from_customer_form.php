
<?=form_open("admin/create_debt_return_to_customer","id='debt_return_to_customer'");?>
<?=form_hidden("returntype","debt_from_customer")?>
 
 <div class="container">
              <table class="table table-hover tablesorter">
                  <caption><h1> <small>Debt Returns From Customer Form</small></h1></caption>
                <tbody>
                 <tr>
                 <td align="right" width="20%"><label><?=$returnamount?>  : </label></td>
                    <td> <?=form_input('returnamount','','class="form-control"');?>
                    <span class="err"><?=form_error("returnamount")?></span></td>
                  </tr>

                   <tr>
                    <td align="right">   <label><?=$paidby?> : </label></td>
                    <td><?=form_input('authorityfrom','','class="form-control"')?>
                    <span class="err"><?=form_error("authorityfrom")?></span></td>
                    </tr>
                 
                   <tr>
                    <td align="right">  <label><?=$receivedby?> : </label></td>
                    <td>    <?=form_input('authorityto','','class="form-control"')?>
                    <span class="err"><?=form_error("authorityto")?></span></td>
                  </tr>
                                  
                    <tr>
                    <td align="right">  <label><?=$date?> : </label></td>
                    <td>    
                    <input type="date" name="date" value="<?=$today?>" class="form-control"/>
                    </td>
                  </tr>

                  <tr>
                    <td align="right"> </td>
                    <td><?php echo form_button('save',$save,'class="btn btn-primary btn-lgy" onclick="return_debt(\'customer\')"');?></td>
                </tr>
                </tbody>
              </table>
            </div>
 <?=form_close();?>
 