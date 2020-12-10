<script type="text/javascript">
  $(document).ready(function () {
    $(".expandimg").mouseover(function () {
        $(this).stop().animate({
            //Decrement Left in pixel = 20/2 [20 increment in width]
            left: "-=10", 
            z-index:"1000",
            width: '120px'
        }, "fast"); 
    });
    $(".expandimg").mouseout(function () {
        $(this).stop().animate({
            //Increment Left in pixel = 20/2 [20 decrement in width]
            width: '50px',
            z-index:0,
            left: "+=10"
        }, "fast"); 
    });
});
 
</script>
<br/>

<h3 align="center">Sale Entry From Consinement</h3>
<br/>


  <?=form_open('',' class="cloneable-form" id="consinement_sale" ');?>
     <div class="container" style="margin-bottom:50px;">


<div class="col-md-6">
<table class="table"> 

<tr>  <td>  Consinement Name: </td> <td> <?=form_dropdown("consinement_id",$grab_tbl_id,"..select.."," autocomplete='off'  id='grab_tbl_id' class='form-control-discount'");?>
 </td></tr>
</table>
 
  </div>


  
<div class="col-md-6">
<table class="table"> 

<tr>  <td> Date : </td> <td>

      <input class="form-control-discount date" type="text" name="date" id="date1" value="<?=date("d-m-Y")?>"/>

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
                    <td align="center">Image</td>

            <td align="center" width="100"><?=$quantity?></td>
            <td align="center" width="150"><?=$unitname?></td>
              <td align="center" width="150"><?=$price?></td>
            <td align="center" width="100"><?=$discount?></td>
            <td align="center" width="180"> <?="သင့္ေငြ"?></td>
         </tr>
         <tr class="clonethis">
         <td class="no">1</td>
       
                <td><?=form_input('product_code[]','','class="form-control-discount pcode autocomplete"  onkeyup="fill(this.value,event)" autocomplete="off"');?> <div class="display"></div></td>
            
              <td> <?=form_input('product_name[]','','class="form-control-discount" autocomplete="off"');?><?=form_hidden("category[]","")?></td>
               <td><img src="" width="50" class="expandimg" /></td>

              <td> <?=form_input('quantity[]','',' class="qty form-control-discount" onkeyup="admincloneform(event,\'consinement\')" autocomplete="off"');?></td>
             
              <td> <?=form_dropdown('unit[]',array(""=>"... select ..."),'',' id="unit" class="form-control-discount clonelastone" onchange="grabprice(this.value,event)" autocomplete="off"');?> <?=form_hidden('item_count_hidden[]','');?></td>
             

              <td width="15"> <?=form_input('price[]','',' class="form-control-discount price" autocomplete="off" onkeyup="cloneform(event)"');?></td>
              <td> <?=form_input('discount[]','20 %',' class="form-control-discount discount clonelastone"  onkeyup="cloneform(event)" autocomplete="off"');?></td> 
              <td width="140"> <?=form_input('total[]',0,'class="form-control-discount clonelastone total"  onkeyup="cloneform(event)" autocomplete="off"');?>
              </td>
              <td width="5"><span class='close' onclick="removerform(event)"> x </span></td>
         </tr>

         </tbody>
     </table>

   
    <table class="table sale-footer"> 
      
       
      
            <tr>
              <td width="80%" align="right"><?="သင့္ေငြ"?></td>
              <td><?=form_input('nettotal','',' id="total" class="form-control" autocomplete="off"');?></td>
            </tr>
             
           <tr>
             <td width="80%" align="right"> </td>
             <td>  <?php echo form_button('save','SAVE','class="btn btn-primary btn-lgy" onclick="insert_form(\'consinement_sale\')" autocomplete="off"');?> 
             </td>
           </tr>

          
     </table>

  
   
<?=form_close()?>
