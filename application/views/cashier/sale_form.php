<br/><br/><br/><br/>
 <script type="text/javascript">


var date=new Date();
  var d=date.getDate();
  var y=date.getFullYear();
  var mon=date.getMonth()+1;
  var h=parseFloat(date.getHours());
  var m=date.getMinutes();
  var s=date.getSeconds();

  if(h>=12)
    {
      a=" PM";
      h=h-12;
    }
    else
    {
      a=" AM";
    }
   // alert(h);

 </script>
    


  <?=form_open('',' class="cloneable-form" id="sale" ');?>
     <div class="container" style="margin-bottom:50px;">
 <div class='col-md-3'>
 
<!-- <h3>Sale Entry Form </h3> -->
<table class="table"> 

<tr>  <td>  Pay Type</td> <td> <select name="paytype" class="form-control-discount" onclick="checkpaytype(this.value)"><option value="credit">Credit</option><option value="cashdown">Cash Down</option></select>
 
</td></tr>

<tr>  <td>  <?=$customername?> </td> 
<td> <?=form_dropdown("customer",$customer,"..select.."," onchange='check_debt(this.value,\"customer\")' autocomplete='off'  class='form-control-discount'");?>
        <input type="text" name="other" class="form-control-discount" placeholder="Other Customer, Type Here"/>
         </td></tr>
         
</table>

  </div> 

  <div class='col-md-3'>
 
<!-- <h3>Sale Entry Form </h3> -->
<table class="table"> 

    <tr>
    
      <td>Note</td>
     <td><textarea name="note" class="form-control"></textarea></td>
    
     </tr>

          
</table>

  </div> 


<div class='col-md-3'>

<table class="table"> 

<tr>  <td align="right"> Salesman :</td> <td>   <?=get_cookie('cashier_cookie'); ?>
</td></tr>
<tr>  <td align="right"> ပစၥည္းထုတ္ေပးသူ : </td> <td> <?=form_dropdown("staff",$staff,"..select.."," autocomplete='off'  class='form-control-discount'");?>
         </td></tr>
</table>
 
  </div>


<div class='col-md-3'>

<table class="table"> 

<tr>  <td> Date : </td> <td>  <script type="text/javascript">document.write(d+"."+mon+"."+y)</script>
</td></tr>
<tr>  <td>  Time : </td> <td> <span id="showtime"><script type="text/javascript">document.write(h+":"+m+":"+s+a)</script>
         </td></tr>
</table>

 </div>

</div>


 	<table class="table table-bordered table-hover tablesorter center"> 

       <tbody id="SourceWrapper">
            
           <tr>
          <td>	No </td>
            <td align="center" width="180" ><?=$product_code?></td>
            <td align="center"><?=$product_name?></td>     
        
            <td align="center" width="100"><?=$quantity?></td>
            <td align="center" width="150"><?=$unitname?></td>
              <td align="center" width="150"><?=$price?></td>
            <td align="center" width="100"><?=$discount?></td>
            <td align="center" width="180"> <?="သင့္ေငြ"?></td>
         </tr>
         <tr class="clonethis">
         <td class="no">1</td>
       
                <td><?=form_input('product_code[]','','class="form-control-discount pcode autocomplete"  onkeyup="fill(this.value,event)" autocomplete="off"');?> <div class="display"></div></td>
            
              <td> <?=form_input('product_name[]','','class="form-control-discount" autocomplete="off"');?></td>
              <td> <?=form_input('quantity[]','',' class="qty form-control-discount" onkeyup="cloneform(event)" autocomplete="off"');?></td>
             
              <td> <?=form_dropdown('unit[]',array(""=>"... select ..."),'',' id="unit" class="form-control-discount clonelastone" onchange="grabprice(this.value,event)" autocomplete="off"');?> <?=form_hidden('item_count_hidden[]','');?></td>
             

              <td width="15"> <?=form_input('price[]','',' class="form-control-discount price" autocomplete="off" onkeyup="cloneform(event)"');?></td>
              <td> <?=form_input('discount[]',0,' class="form-control-discount discount clonelastone"  onkeyup="cloneform(event)" autocomplete="off"');?></td> 
              <td width="140"> <?=form_input('total[]',0,'class="form-control-discount clonelastone total"  onkeyup="cloneform(event)" autocomplete="off"');?>
              </td>
              <td width="5"><span class='close' onclick="removerform(event)"> x </span></td>
         </tr>

         </tbody>
     </table>

   
    <table class="table sale-footer"> 
      
       
      
            <tr>
              <td><?="သင့္ေငြ"?></td>
              <td><?=form_input('totalamount','',' id="total" class="form-control" autocomplete="off"');?></td>
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
                      <td><?=form_input('totaldebt',0,' class="form-control" autocomplete="off"');?></td>
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
             <td>  <?php echo form_button('preview','Preview','class="btn btn-primary btn-lgy" onclick="cashier_preview(\'sale\')" autocomplete="off"');?> <?php echo form_button('save','SAVE','class="btn btn-primary btn-lgy" onclick="cashier_insert_form(\'sale\')" autocomplete="off"');?> 
             </td>
           </tr>

          
     </table>

  
   
<?=form_close()?>
