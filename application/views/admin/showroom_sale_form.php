<br/>

<h3 align="center">Sale Entry From Showroom</h3>
<br/>


  <?=form_open('',' class="cloneable-form" id="sale" ');?>
     <div class="container" style="margin-bottom:50px;">

<div class="col-md-3">
 
<!-- <h3>Sale Entry Form </h3> -->
<table class="table"> 

<tr>  <td>  Pay Type</td> <td> <select name="paytype" class="form-control" onclick="checkpaytype(this.value)"><option value="credit">Credit</option><option value="cashdown">Cash Down</option></select>
 
</td></tr>

<tr>  <td>  <?=$customername?> </td> 
<td> <?=form_dropdown("customer",$customer,"..select.."," onchange='check_debt(this.value,\"customer\")' autocomplete='off'  class='form-control-discount'");?>
        <input type="text" name="other" class="form-control" placeholder="Other Customer, Type Here"/>
         </td></tr>
           
</table>

  </div> 


<div class="col-md-3">

<table class="table"> 

<tr>  <td align="right"> Voucher No :</td> 
<td>   
<?=form_input("voucherno","","class='form-control'");?>
</td></tr>

 <tr>
    
      <td>Note</td>
     <td><textarea name="note" class="form-control"></textarea></td>
    
     </tr>
</table>

 </div>


  

<div class="col-md-3">

<table class="table"> 

<tr>  <td align="right"> Salesman :</td> <td>   <?=get_cookie("admin_cookie")?>
</td></tr>

</table>
 
  </div>




  
<div class="col-md-3">

<table class="table"> 

<tr>  <td> Date : </td> <td> 
      <input class="form-control-discount date" type="text" name="date" id="date1" value="<?=date("d-m-Y")?>"/>

</td>
</tr>
</table>

 </div>


</div>


 	<table class="table table-bordered table-hover tablesorter center"> 

       <tbody id="SourceWrapper">
            
           <tr>
          <th>	No </th>
            <th align="center" width="180" ><?=$product_code?></th>
            <th align="center"><?=$product_name?></th>     
        
            <th align="center" width="100"><?=$quantity?> (Pcs)</th>
<!--             <th align="center" width="150"><?=$unitname?></th>
 -->              <th align="center" width="150"><?=$price?></th>
            <th align="center" width="100">Discount</th>
            <th align="center" width="180"> <?="သင့္ေငြ"?></th>
         </tr>
         <tr class="clonethis"><!-- onchange="grabprice(this.value,event)" onkeyup="cloneform(event,\'showroom\')" -->
         <td class="no">1</td>
       
                <td><?=form_input('product_code[]','','class="form-control-discount pcode autocomplete"  onkeyup="fill(this.value,event)" autocomplete="off"');?> <div class="display"></div></td>
            
              <td> <?=form_input('product_name[]','','class="form-control-discount" autocomplete="off"');?><?=form_hidden("category[]","")?></td>
              <td> <?=form_input('quantity[]','',' class="qty form-control-discount" onkeyup="cloneform1(event,this.value)" autocomplete="off"');?></td>
             
              <td> <?=form_dropdown('price[]',array(0=>0),'',' id="unit" class="form-control-discount clonelastone price " onchange="cloneform1(event,this.value)" autocomplete="off"');?> 
             

<!--               <td width="15"> <?=form_input('price[]','',' class="form-control-discount price" autocomplete="off" onkeyup="cloneform(event)"');?></td>
 -->              <td> <?=form_input('discount[]',0,' class="form-control-discount discount clonelastone discount"  onkeyup="cloneform1(event,this.value)" autocomplete="off"');?></td> 
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
             <td>  <?php // echo form_button('preview','Preview','class="btn btn-primary btn-lgy" onclick="_preview(\'sale\')" autocomplete="off"');?> <?php echo form_button('save','SAVE','class="btn btn-primary btn-lgy" onclick="insert_form(\'sale\')" autocomplete="off"');?> 
             </td>
           </tr>

          
     </table>

  
   
<?=form_close()?>
