  <?php
                    $count=1;
                 $totalinvest=0;
            foreach($lists->result() as $list):
              $formid="form".$list->id;
                     ?>
                      <tr>
                      <td><?=$count?></td>
                        <td><?=$list->product_code?></td>
                        <td><?=$list->product_name?></td>  
                        <td><?=$list->category?></td>                       
                        <!--  <td><?=number_format($list->quantity)?> <?=$list->unit?></td>  
                         <td><?=number_format($list->total_smallitemcount)?></td>   -->
                         <td><?=number_format($list->quantity)?> <?=$list->unit?> &nbsp; &nbsp; <?=($list->total_smallitemcount)-($list->quantity*$list->smallitemcount)?></td>
                        <td><?=number_format($list->price)?></td>
                        <td><?=(number_format($list->price*$list->quantity))?></td>
                      
                     <td width="150">
                       
                      
 
 
                         <?=anchor('cashier/transfer/'.$list->id,'transfer <i class="fa fa-angle-double-right"></i>', ' class="transfer"  data-toggle="modal" data-toggle="modal" data-target="#transfer'.$list->id.'" title='.$list->product_name);?>
                  
                    <div class="modal fade transfer" id='transfer<?=$list->id?>'>
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <h4 class="modal-title">ကုန္ပစၥည္းေရႊ႕ရန္</h4>
          </div>
          <div class="modal-body">
            <div class="thumbnail">
            <?php echo form_open("cashier/","id='".$formid."'");
            echo form_hidden("id",$list->id);
           echo form_hidden("category",$list->category);
            echo form_hidden("item_count",$list->smallitemcount);


            ?>
             <table class="table table-bordered table-hover table-striped tablesorter">
               <tr>
                <td> Warehouse</td>
              <td> 
                     <span><input type="text" name="warehouse" class="form-control" readonly='readonly' value="warehouse1" /></span>
</td>
    
               </tr>
                <tr>
                <td>ဆိုင္</td><td> <select name="shop" class="form-control">
                  <option value="shop">shop </option>
                  <!--  <option value="shop2">shop 2</option> -->
                </select></td>
               </tr>
                 <tr>
                 <td>ကုဒ္နံပါတ္</td><td> 

                  
                <span><input type="text" name="product_code" class="form-control" readonly='readonly' value="<?=$list->product_code?>" /></span>
              
                 </td>
               </tr>


                <tr>
                 <td>ကုန္ပစၥည္းအမည္</td><td> 

                  
                <span><input type="text" name="product_name" class="form-control" readonly='readonly' value="<?=$list->product_name?>"/></span>
              
                 </td>
               </tr>

                <tr>
                 <td>Unit</td><td> 

                  
                <span><input type="text" name="unit" class="form-control" readonly='readonly' value="<?=$list->unit?>" /></span>
              
                 </td>
               </tr>

                <tr>
                 <td>Price</td><td> 

                  
                <span><input type="text" name="price" class="form-control" readonly='readonly' value="<?=$list->price?>"/></span>
              
                 </td>
               </tr>
                <tr>
                 <td>ဂိုေဒါင္ရွိ အေရအတြက္</td><td> 

                  
                <span><input type="text" name="warehouse_quantity" class="form-control" readonly='readonly' value="<?=$list->quantity?>"/></span>
              
                 </td>
               </tr>
                   <tr>
                 <td>ေရႊ႕ရန္ အေရအတြက္</td><td> 

                  
                <span><input type="text" name="quantity" class="form-control"/></span>
              
                 </td>
               </tr>
               <tr>
                 <td colspan="2" align="center">
                   
                 <?php echo form_button('save',$save,'class="btn btn-primary btn-lgy" onclick="stock_transfer(\'warehouse1\','.$list->id.')"');;?>
                 </td>
               </tr>
             </table>
             <?=form_close()?>
            </div>
            
           
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div> </td> 
      
                      </tr>
                       <?php
                       $count++;
                       $totalinvest+=$list->total_smallitemcount*($list->price/$list->smallitemcount);
            endforeach;
                  
                        ?>
                         <tr>
                    <td align="center" colspan="4"><br/> စုစုေပါင္း ကုန္က်န္သင့္ေငြ<br/> </td> <td> <br/><?=number_format($totalinvest,3)?><br/></td><td > <br/><br/></td>
                    </tr>