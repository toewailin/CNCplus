<!DOCTYPE html>
<html>
<head>
  <title><?=$store?> | Purchase Form</title>
  <base href="<?=base_url()?>"></base>
  <link href="<?=base_url()?>images/favicon.ico" rel="shortcut icon"/>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/mystyle.css">
  <script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    
    
</head>
<body>
<div class="container">

<!--h1 class="form-title"> <small style="float:left">PURCHASE Form</small> <small style="float:right">Date : <?php //echo $date;?></small></h1-->


<h4>Header Information</h4>

 <?=form_open("","id='purchase-heading'")?>
 <table class="table table-hover tablesorter">
  <tr>
    <td><?=$voucher?></td>
    <td>
      <?php

      $ip=explode('.',$this->input->ip_address());
      ?>
      <input class="form-control-discount" type="text" name="voucherno" id="voucherno" value="<?=time().end($ip);?>"/>
   </td>
    <td><?=$date?></td>
    <td>
      <input class="form-control-discount" type="text" name="date" id="date1" value="<?=$today?>"/>
    </td>
     </tr>
      <tr>
    <td><?=$suppliername?></td>
     <td> <?=form_dropdown('supplier',$supplier,'','class="form-control-discount" onchange="check_debt(this.value,\'supplier\')" autocomplete="off"');?></td>
     </tr>
  </table>
 
<?=form_close()?>

  <h4>Details Information</h4>
  <?=form_open('','id="purchase" name="myform"');?>

 <table class="table table-hover tablesorter">
  <tr>
    <td ><?=$product_code?></td>
    <td>
      
      <input class="form-control-discount" type="text" name="product_code" id="product_code" onkeyup="get_droplist(this.value,event)" autocomplete="off" />
   <div class="display"></div></td>
    <td ><?=$product_name?></td>
    <td>
      <input class="form-control-discount" type="text" name="product_name" id="product_name" />
    </td>
    <td><?=$unitname?> </td>
    <td><?=form_dropdown('unit',$unit,'','class="form-control-discount" id="unit" onchange="grabitemcount(this.value)"');?></td>
   </tr>
  <tr>
    <td><?=$price?></td>
    <td><input class="form-control-discount" type="text" name="price" id="price" value="0" /></td>
    <td><?=$quantity?></td>
    <td><input class="form-control-discount" type="text" name="quantity" id="quantity" value="0" onkeyup="calculate_total(this.value,document.getElementById('price').value)" /></td>

    <td><?=$smallitemcount?></td>
    <td><input class="form-control-discount" type="text" name="smallitemcount" id="smallitemcount" value="1" /></td>
   </tr>
   <tr>
   <td>သင့္ေငြ</td>
   <td><input type="text" name="total" id="ptotal" class="form-control-discount" value="0" /></td>
   

   <td>Discount Percentage</td>
   <td><input type="text" name="dispercent" id="pdispercent" value="0" class="form-control-discount" onblur="changediscountpercent('pdispercent')" /></td>
   
   <td>Percentage Amount</td>
   <td><input type="text" name="disvalue" id="disvalue" value="0" class="form-control-discount" onblur="purchasediscounttotal(this.value)" /></td>
  </tr>
  <tr>
   <td>အသားတင္သင့္ေငြ</td>
   <td><input type="text" name="subtotal" id="subtotal" class="form-control-discount" value="0" /></td>

   <td>၀ယ္ P + FOC</td>
   <td><input type="text" name="totalqty" id="totalqty" value="0" class="form-control-discount" onkeyup="calculateitemprice(this.value)"/></td>

   <td>ယူနစ္တစ္ခုစီ အတြက္သင့္ေငြ</td>
   <td><input type="text" name="itemprice"  id="itemprice" value="0" class="form-control-discount"/></td>

</tr>


  <tr>
     <td><?=$transportationcharges?></td>
     <td>
     <input type="text" name="transportationcharges" class="form-control-discount" id="transportationcharges" value="0" onblur="calculatenetitemprice(this.value,document.getElementById('transferrate').value,0)"></td>
          
   <!--  <td><select class="form-control-discount" name="unit" size="1" id="unit">
      <option value="apple">apple</option>
    </select></td> -->
    <td><?=$transferrate?></td>
    <td><input class="form-control-discount" type="text" name="transferrate" id="transferrate" value="0" onblur="calculatenetitemprice(this.value,document.getElementById('transportationcharges').value,0)"/></td>
  <td>၁ ဖာ (ဖာၾကီး ၊ ဖာေသး) အတြက္ သင့္ေငြ</td>
    <td><input class="form-control-discount" type="text" name="amountforeachunit" id="amountforeachunit" value="0" /></td>
    

   </tr>
  <tr>
  
   <td><?="တစ္(ဘူး/ထုတ္/ပုလင္း) အတြက္သင့္ေငြ"?></td>
    <td><input class="form-control-discount" type="text" name="amountforsmallitem" id="amountforsmallitem" value="0"/></td>
    <td><?php echo form_button('save','ADD','class="btn btn-primary btn-lgy" onclick="addrow(\'purchase\')"');?></td>
   
   </tr>

</table>

<div class="insert_form">
<table class="table table-bordered table-hover tablesorter">
<tr bgcolor="lightgray">

        <th width="10%"><?=$product_code?></th>           
        <th width="30%"><?=$product_name?></th>
        <th><?=$unitname?></th>  
        <th><?=$price?></th>  
         <th><?=$quantity?></th>
        <th><?=$total?></th>
        <th>X</th>
      <!--  -->
</tr>
  <tbody id="addrow">
    

  </tbody>

  
</table>
<?=form_close()?>
</div>

<form id="purchase-send">


<table class="table">
 <tr>
       <td colspan="2" align="right">Net Amount To Supplier</td><td width="200"> <input type="text" name="netamounttosupplier" id="netamounttosupplier" value=0  class="form-control-discount"  /></td>
 <td colspan="3" align="right"> </tr>
 <tr>
<tr>
       <td colspan="2" align="right">Total Transportation Charges</td><td width="200"> <input type="text" name="totaltransportationcharges" id="totaltransportationcharges" value=0  class="form-control-discount"  /></td>
  <td colspan="3" align="right">
  </tr>
  <tr>


<tr>
       <td colspan="2" align="right">Total Transfer Rate</td><td width="200"> <input type="text" name="totaltransferrate" id="totaltransferrate" value=0  class="form-control-discount"  /></td>
  <td colspan="3" align="right">
  </tr>




  <tr>
       <td colspan="2" align="right">Total Discount</td><td width="200"> <input type="text" name="totaldiscount" id="totaldiscount" value=0  class="form-control-discount"  /></td>
 <td colspan="3" align="right"> </tr>

  <tr id="totaldebt">
             <td colspan="2" align="right"><?="ယခင္က်န္ေငြ (-) / ပိုေငြ / ၾကိဳေပးေငြ"?></td>
              <td><?=form_input('totaldebt',0,' class="form-control" autocomplete="off"');?></td>
            </tr>

 
  <td colspan="2" align="right">Advance To Supplier</td><td width="200"> <input type="text" name="advance" id="advance" value=0  class="form-control-discount"  onblur="payadvance(this.value,document.getElementById('netamounttosupplier').value)"/></td>
 <td colspan="3" align="right"> </tr>
 <tr>
       <td colspan="2" align="right">Balance To Supplier</td><td width="200"> <input type="text" name="balance" id="balance" value=0  class="form-control-discount"/></td>
 <td colspan="3" align="right"> </tr>
<tr>
 
<td colspan="4" align="right">
 <?php echo form_button('save','SAVE','class="btn btn-primary btn-lgy" onclick="purchase_insert(\'purchase\')"');?>
</td><td colspan="2" align="right"></tr>
</table>
</form>

<form id="hide-text"></form>

</div>
 </body>
<script type="text/javascript" src="js/template.js"></script>
</html>