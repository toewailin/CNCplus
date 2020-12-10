<?php


$show=$lists->row();

?>

<h3 class="title">Sale Order Delivery Form</h3>


 <?=form_open("","id='sale_delivery' 'class='cloneable-form'")?>

      <div class="container" style="margin-bottom:50px;">
 <div style="float:left">
 
<!-- <h3>Sale Entry Form </h3> -->
<table class="table"> 

<tr>  <td>  Pay Type</td> <td> <select name="paytype" class="form-control" onclick="checkpaytype(this.value)"><option value="credit">Credit</option><option value="cashdown">Cash Down</option></select>
 
</td></tr>

<tr>  <td>  <?=$customername?> </td> 
<td> <?=form_dropdown("customer",$customer,$show->customer."#".$show->customer_id," onchange='check_debt(this.value,\"customer\")' autocomplete='off'  class='form-control-discount form-control' readonly");?>
         </td></tr>
           <tr>
    
      <td>Note</td>
     <td><textarea name="note" class="form-control"></textarea></td>
    
     </tr>
</table>

  </div> 
  

  
<div style="float:right;">

<table class="table"> 

<tr>  <td> Date : </td> <td>        <input class="form-control-discount form-control date" type="text" name="date" id="date1" value="<?=$today?>"/>

</td></tr>

</table>

 </div>

<div style="float:right;margin-right:50px">

<table class="table"> 

<tr>  <td align="right"> Salesman :</td> <td>   <?=$this->session->userdata('AdminUser')?>
</td></tr>
<tr>  <td align="right"> ပစၥည္းထုတ္ေပးသူ : </td> <td> <?=form_dropdown("staff",$staff,"..select.."," autocomplete='off'  class='form-control-discount'");?>
         </td></tr>
</table>
 
  </div>



<div style="float:right;margin-right:50px">

<table class="table"> 

     <tr>  <td> Order Voucherno :</td> <td>   <?php

    
      ?>
 <input class="form-control-discount form-control" type="text" name="order_voucherno" id="voucherno" value="<?=$show->voucherno;?>" readonly/>
   
</td></tr>

</table>
 
  </div>


</div>
 

  <h4>Details Information</h4>
  
  <table class="table table-bordered table-hover tablesorter center"> 

       <tbody id="SourceWrapper">
            
           <tr>
           <td>No</td>
            <td align="center" width="180" ><?=$product_code?></td>
            <td align="center"><?=$product_name?></td>     
            
           <!--  <td align="center" width="100"><?=$smallitemcount?></td> -->
          
            <td align="center" width="200">Require Quantity</td>
            <td align="center" width="100"><?=$unitname?></td>
              <td align="center" width="150"><?=$price?></td>
           <!--  <td align="center" width="100"><?php //$discount?></td> -->
            <td align="center" width="180"> <?="သင့္ေငြ"?></td>
         </tr>
          <?php
          $count=1;
          $net=0;
            foreach($lists->result() as $list):
          ?>

         <tr class="clonethis">
         <td><?=$count?></td>
              <td><?=form_input('product_code[]',$list->product_code,'class="form-control-discount form-control pcode autocomplete"  onkeyup="fill(this.value,event)" autocomplete="off" readonly');?> <div class="display"></div></td>
             <td> <?=form_input('product_name[]',$list->product_name,'class="form-control-discount form-control" autocomplete="off" readonly');?></td>
              <td> <?=form_input('quantity[]',$list->requirequantity,' class="qty form-control-discount form-control" onkeyup="admincloneform(event)" autocomplete="off"');?></td>
             
              <td> <?=form_input('unit[]',$list->unit,' id="unit" class="form-control-discount form-control clonelastone" onchange="grabprice(this.value,event)" autocomplete="off" readonly');?><?=form_hidden('item_count_hidden[]',$list->smallitemcount);?></td>
              <!--  <td><?=form_input('item_count[]',0,' class="form-control-discount form-control clonelastone" autocomplete="off" readonly');?>
                
               </td> -->

              <td width="15"> <?=form_input('price[]',$list->price,' class="form-control-discount form-control" autocomplete="off" readonly');?></td>
              <!-- <td> <?php ///form_input('discount[]',0,' onblur="calamount(this.value)" class="form-control-discount form-control discount clonelastone"');?></td> 
               -->
              <td width="140"> <?=form_input('total[]',$list->total,'class="form-control-discount form-control clonelastone total" autocomplete="off" readonly');?>
              </td>
              <td width="5"><span class='close' onclick="removerform(event)"> x </span></td>
         </tr>
         <?php
          $count++;
          $net+=$list->total;
          endforeach;

         ?>
         </tbody>
     </table>

     <?php //form_hidden("discounttotal",0,"id='discount'")?>

   
    <table class="table sale-footer"> 
      
       
      
            <tr>
              <td width="50%"><?="သင့္ေငြ"?></td>
              <td><?=form_input('totalamount',$net,'id="total" class="form-control" autocomplete="off"');?></td>
            </tr>
              <tr>
                <td>  ပို႕ခ</td>
                 <td><?=form_input('deliveryfees',0,'class="form-control" id="deliveryfees" autocomplete="off" onkeyup="calreceived(document.getElementById(\'total\').value,this.value,document.getElementById(\'jackpot\').value)"');?></td>
              </tr>
           

            <tr id="jackpot_row">
              <td><?="Discount ေပးေငြ"?></td>
              <td><?=form_input('jackpot',0,'class="form-control" id="jackpot"  onkeyup="calreceived(document.getElementById(\'total\').value,document.getElementById(\'deliveryfees\').value,this.value)" onblur="calrefund(\'received\')" autocomplete="off"')?></td>
           </tr>


           <tr id="netamount">
              <td ><?="စုစုေပါင္း"?></td>
              <td><?=form_input('nettotal',0,'class="form-control" id="nettotal" autocomplete="off"');?></td>
           </tr>
              
            <!--  <div id="creditpay"> -->

                     <tr id="totaldebt" class="creditpay">
                      <td><?="ယခင္က်န္ေငြ (-) / ပိုေငြ"?></td>
                      <td><?=form_input('totaldebt',$show->total_debt,' class="form-control" autocomplete="off"');?></td>
                    </tr>

                    
                     <tr class="creditpay">
                      <td><?="စုစုေပါင္း က်သင့္ေငြ"?></td>
                      <td><?=form_input('alltotal',0,'id="alltotal" class="form-control" autocomplete="off"');?></td>
                    </tr>
                 
                 
                   <tr id="receive_row" class="creditpay">
                      <td><?=$receive?></td>
                      <td><?=form_input('received',0,'class="form-control" id="received" onkeyup="calrefund(this.value)" onblur="calrefund(this.value)" autocomplete="off"');?></td><!-- onblur="calrefund(this.value,document.getElementById(\'netamount\').value)" -->
                   </tr>

                 <!-- 
                  <tr id="refund_row">
                       <td><?=$refund?></td>
                       <td> <?=form_input('refund',0,'class="form-control" id="refund"  onblur="checkexceedamount(this.value)" autocomplete="off"');?></td>
                   </tr>  -->       
                 
               
                   <tr id="requierdamounttopayment" class="creditpay">
                         <td><?="ယခုက်န္ေငြ (-) / ပိုေငြ"?></td>
                         <td> <input type="text" name="exceedamount" id="exceedamount" value=0  class="form-control" autocomplete="off" /></td>
                    </tr>

        <!--   </div> -->
        
                <tr>
                  <td></td>
                  <td align="left">
                    <input type="checkbox" name="deliverystatus" value="1"> Delivery 
                  </td>
                </tr>
           <tr>
             <td> </td>
             <td>  <?php echo form_button('preview','Preview','class="btn btn-primary btn-lgy" onclick="cashier_preview(\'sale\')" autocomplete="off"');?> 
             <?php echo form_button('save','SAVE','class="btn btn-primary btn-lgy" onclick="insert_form(\'sale_delivery\')" autocomplete="off"');?> 
             </td>
           </tr>

          
     </table>

  
<?php
echo form_close();
?>
  