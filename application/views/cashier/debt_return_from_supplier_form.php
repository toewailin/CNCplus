
<?=form_open("admin/create_debt_return_to_supplier","id='debt_to_supplier'");?>
<input type="hidden" name="returntype" value="<?=$this->uri->segment(4)?>" />
<input type="hidden" name="voucherno" value="<?=$this->uri->segment(5)?>" />
 <div class="container">
              <table class="table table-hover tablesorter">
                          <caption><h1> <small>Debt Return From Supplier Form</small></h1>
</caption>
                <tbody>
                 <tr>
                 <td align="right" width="20%"><label><?=$returnamount?> : </label></td>
                    <td> <?=form_input('returnamount','','class="form-control"');?>
                    <span class="err"><?=form_error("returnamount")?></span></td>
                  </tr>
                   <tr>
                    <td align="right">   <label><?=$paidby?> : </label></td>
                    <td><?=form_input('authorityfrom','','class="form-control"')?>
                    <span class="err"><?=form_error("authorityfrom")?></span></td>
                    </tr>
                  <tr>
                   <tr>
                    <td align="right">  <label><?=$receivedby?> : </label></td>
                    <td>    <?=form_input('authorityto','','class="form-control"')?>
                    <span class="err"><?=form_error("authorityto")?></span></td>
                  </tr>
                                  
                       <tr>
                    <td align="right">  <label><?=$date?> : </label></td>
                    <td>    
                    <input type="date" name="date" value="<?=date('Y-m-d')?>" class="form-control"/>
                    </td>
                  </tr>
                  <tr>
                    <td align="right"> </td>
                    <td><?php echo form_button('save',$save,'class="btn btn-primary btn-lgy" onclick="return_debt(\'debt_from_supplier\')"');?></td>
                </tr>
                </tbody>
              </table>
            </div>
 <?=form_close();?>
  