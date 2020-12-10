
 
<?=form_open("",'id="income_outcome"' );?>

 <div class="container">
              <table class="table table-bordered table-hover tablesorter">
                         <caption><h1> <small> Income Outcome</small></h1></caption> 
                <tbody>
               
                 <td align="right" width="20%"><label><?=$date?>:</label></td>
                    <td> <?=form_input('date','','class="form-control"');?>
                    <span class="err"><?=form_error("date")?></span></td>

                  </tr>
                  <tr>
                    <td align="right">  <label>Total Income:</label></td>
                    <td><?=form_input('total_income','','class="form-control"')?>
                    <span class="err"><?=form_error("total_income")?></span></td>
                  </tr>
                  <tr>
                    <td align="right"> <label>Total Outcome:</label></td>
                    <td><?=form_input('total_outcome','','class="form-control"')?>
                    <span class="err"><?=form_error("total_outcome")?></span></td>
                    </tr>  
                    <tr>
                    <td></td>
                    <td><?php echo form_button('save','SAVE','class="btn btn-primary btn-lgy" onclick="insert_form(\'income_outcome\')"');?></td>
                </tr>             
                </tbody>
              </table>
            </div>
 <?=form_close();?>