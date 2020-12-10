<?php
$session_id=$this->db->get_where("login_validate",array('session_id'=>$this->session->userdata("session_id")))->row();
if($this->session->userdata("session_id")==$session_id->session_id && $this->session->userdata("IsLogin")==true)
    {


?>
    <div class="container">
 <div style="float:left">
<h3>Damage Product Entry Form </h3>
</div>

<div style="float:right;">
 <span style="float:right;margin-right:20px">
 <label>Date : </label> <label><?=date("Y-m-d")?></label><br/>
 <label>Time:</label> <span id="showtime"> 
</span>
</div>

<div style="float:right;margin-right:50px">
 <span style="float:right;margin-right:20px"><label>Authority : </label><label><?=$this->session->userdata('AdminUser')?></label></span>
  </div>
</div>

<?=form_open("",'class="cloneable-form" id="damage"');?>
 <div class="container">
              <table class="table table-bordered table-hover tablesorter">
                          
                <tbody id="SourceWrapper">
                <tr>
                    <td class="center">Product Code</td>
                    <td class="center">Product Name</td>                                       
                    <td class="center">Unit</td>                    
                     <td class="center">Quantity</td>
                    
                    <td></td>
                </tr>
                <tr class="clonethis">
                   <td width="200"><?=form_input('product_code[]','','class="form-control-discount code" onkeyup="get_droplist(this.value,event)" autocomplete="off"');?> <div class="display"></div></td>
                    <td> <?=form_input('product_name[]','','class="form-control-discount"');?></td>
                    
                    <td width="200"> <?=form_input('unit[]','','class="form-control-discount"');?></td>
                     <td width="200"> <?=form_input('quantity[]','','class="form-control-discount qty" onkeyup="cloneform(event)"');?></td>
                      <td width="20"> <span class='close' onclick="removerform(event)"> &times; </span></td>
                </tr>
                </tbody>
                  <tr>
                    <td colspan="3"> </td>
                    
                    <td align="right"><?php echo form_button('save','SAVE','class="btn btn-primary btn-lgy" onclick="cashier_insert_form(\'damage\')"');?></td>
                </tr> 
                
              </table>
            </div>
 <?=form_close();?>
 <?php
}
else
{
  redirect("site");
  exit;
}

?>