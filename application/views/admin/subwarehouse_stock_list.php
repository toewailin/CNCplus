  <?php
                                        $count=1;

                 $totalinvest=0;
            foreach($lists->result() as $list):

                     ?>

                      <tr>
                       <td><?=$count?></td>
                        <td><?=$list->product_code?></td>
                        <td><?=$list->product_name?></td>  
                        <td><?=$list->category?></td>                       
                      <td><?=number_format($list->quantity)?> <?=$list->unit?></td>  
                      <td><?=$list->name?></td>

                        <td><?=number_format($list->price)?></td>
                        <td><?=(number_format($list->price*$list->quantity))?></td>
                        
                          <td width="150">
                         <a href="javascript:makeedit('<?=$list->id?>','subwarehouse_stock')"><?=$edit?></a> 
                         / 
                     <a href="javascript:makedelete('<?=$list->id?>','subwarehouse_stock','<?=$this->uri->segment(4)?>')"><?=$delete?></a>
                        / 
 
 
                         <?=anchor('admin/transfer/'.$list->id,'transfer <i class="fa fa-angle-double-right"></i>', ' class="transfer"  data-toggle="modal" data-toggle="modal" data-target="#transfer'.$list->id.'" title='.$list->product_name);?>
                  
                    <div class="modal fade transfer" id='transfer<?=$list->id?>'>
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <h4 class="modal-title">ကုန္ပစၥည္းေရႊ႕ရန္</h4>
          </div>
          <div class="modal-body">
            <div class="thumbnail">
            <?php echo form_open("admin/","id='".$formid."'");
            echo form_hidden("id",$list->id);
           echo form_hidden("category",$list->category);
            echo form_hidden("item_count",$list->smallitemcount);


            ?>
             <table class="table table-bordered table-hover table-striped tablesorter">
               <tr>
                <td> Sub-Warehouse</td>
              <td> 
                     <span><input type="text" name="warehouse" class="form-control" readonly='readonly' value="<?php echo $list->name ?>" /></span>
</td>
    
               </tr>
                <tr>
                <td>Showroom Name</td><td> 
                <?=form_dropdown('showroom_id',$grab_tbl_id,'','class="form-control clonelastone"');?></td>
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
                   
                 <?php echo form_button('save',$save,'class="btn btn-primary btn-lgy" onclick="stock_transfer('.$list->name.','.$list->id.')"');;?>
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
    </div>
                         </td>
                       
                      </tr>
                    
                       <?php
                       $count++;
                       $totalinvest+=($list->price*$list->quantity);
            endforeach;
                  
                        ?>
                         <tr>
                    <td align="center" colspan="7"><br/> စုစုေပါင္း ကုန္က်န္သင့္ေငြ<br/> </td> <td> <br/><?=number_format($totalinvest,3)?><br/></td><td > <br/><br/></td>
                    </tr>