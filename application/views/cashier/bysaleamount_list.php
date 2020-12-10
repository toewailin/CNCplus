<?php
  $count=1;
      foreach($lists->result() as $list):
    ?>
                <tr>
      <td width="55"><?=$count?></td>                      
       <td width="385"><?=$list->customer_name?></td>
      <td width="380"><?=number_format($list->total)?><input type="hidden" value="<?=$list->total?>" /></td> 

       <td width="290"><input type="text" onkeyup="discountbysaleamount(this.value,'<?=$list->total?>',<?=$count?>)"/>%</td>
       <td id="disvalue<?=$count?>" width="250"></td>
      
                    </tr>
                     <?php
      $count++;
        endforeach;
                        
  
?>



