<div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-bars"></i>  <?=$dateinterval?>  ထြက္ေငြ၀င္ေငြ စာရင္း</h3>
              </div>
             
              <div class="panel-body">
                <div class="table-responsive">
                <div style="margin:auto;width:60%">
               <table class="table table-hover" width="50%">                    
                    <tbody>
                      <tr><td align="right" width="70%">Total sale amount (အသားတင္ရရွိေသာေငြသား)</td><td align="right"><?=number_format($totalsale->total,2);?></td></tr>
<tr><td align="right">Total debt return (ေဖာက္သည္မွ ေၾကြးရေငြ)</td><td align="right"><?=number_format(abs($totalget->total),2);?></td></tr>
                      <tr><td align="right">ဒိုင္မွရေသာ Unseen Bonus</td><td align="right"><?=number_format($supplierunseen->total,2);?></td></tr>
                      <tr bgcolor="lightgray"><td align="right"><strong>Total Income</strong> </td><td align="right"><strong>
                      <?php 
                      $totalincome=$totalsale->total+abs($totalget->total)+$supplierunseen->total;
                      echo number_format($totalincome,2);
                      ?></strong>
                      </td></tr>
                       <?php 
                    
                      $totalinhand=$totalincome;
                      ?></strong>
                      </td></tr>
                      

                    </tbody>
                   </table>

                    <table class="table table-hover" width="50%">   
                    <tr bgcolor="lightgray"><td  align="right" width="70%"><strong>စုစုေပါင္းလက္ထဲရွိေငြ</strong>
                     </td><td align="right"><strong><?=number_format($totalinhand,2)?></strong>

                     </table>
                  

                   <br/>
                    <table class="table table-hover" width="50%">
                     <tbody>
                      <tr><td align="right" width="70%">Total General Outcome</td><td align="right"><?=number_format($generaloutcome->total,2);?></td></tr>
                      <tr><td align="right">ေဖာက္သည္သို႕ေပးေသာ Unseen Bonus</td><td align="right"><?=number_format($customerunseen->total,2);?></td></tr>
                      <tr><td align="right">Promotion ေပးေငြ</td><td align="right"><?=number_format($promotion->total,2);?></td></tr>
                    
  <tr><td align="right">ဒိုင္သို႔ေၾကြးေပးေငြ </td><td align="right"><?=number_format($totaldebt->total,2)?></td></tr>
    <tr><td align="right">စုစုေပါင္း ျပန္သြင္းပစၥည္းမ်ား တန္ဖိုး   </td><td align="right"><?=number_format($itemchange->total,2);?></td></tr>
                     <tr  bgcolor="lightgray"><td align="right"><strong>Total Outcome</strong> </td>
                      <td align="right"><strong>
                       <?php
                       $totaloutcome=$itemchange->total+$generaloutcome->total+$customerunseen->total+$promotion->total+$totaldebt->total;
                      echo number_format($totaloutcome,2);
                       ?></strong>
                      </td></tr>

                    </tbody>
                    </table>
                     <br/>
                   <table class="table table-hover" width="50%">
                      <tr><td align="right">လက္ရွိေငြ စုစုေပါင္း (စုစုေပါင္းလက္ထဲရွိေငြ - Total Outcome)</td><td align="right"><?php echo number_format($totalinhand-$totaloutcome,2);?></td></tr>
                                 
<tr><td align="right" width="70%">ေဖာက္သည္ထံမွေၾကြးရရန္က်န္ေငြ</td><td align="right">  + &nbsp;&nbsp; <?=number_format(abs($totalreqamt->total),2);?></td></tr>
                      <tr><td align="right">ကုန္က်န္ (ကုန္က်န္ - ကုန္အပ်က္အစီး) သင့္ေငြ </td><td align="right">  + &nbsp;&nbsp;  <?php echo number_format($totalstock->total,2);?></td></tr>
 

<tr bgcolor="lightgray"><td align="right" width="70%"><strong>စုစုေပါင္းေငြ ပမာဏ</strong></td><td align="right">   &nbsp;&nbsp; <strong> <?=number_format((abs($totalreqamt->total)+($totalinhand-$totaloutcome)+$totalstock->total),2);?></strong></td></tr>

</tbody>

</table>
<br/>


<table class="table table-hover" width="50%">
<tbody>
                      <tr><td align="right" width="70%">ဒိုင္သို႔ေၾကြးေပးရန္က်န္ေငြြ </td><td align="right"> - &nbsp;&nbsp; <?=number_format(($reqamttosupplier->total),2);?></td></tr>
          
                     <tr><td align="right" width="70%">ေဖာက္သည္သို႔ျပန္ေပးရန္ပိုေငြြ</td><td align="right"> - &nbsp;&nbsp; <?=number_format($retruntocustomer->total,2);?></td></tr>
            <?php
$totalprofit=abs($totalreqamt->total)+($totalinhand-$totaloutcome)+$totalstock->total;
$totaloutput=$reqamttosupplier->total+$retruntocustomer->total;
?>      
   
                    <tr bgcolor="lightgray"><td align="right" width="70%"><strong>မတည္ရင္းႏွီးေငြ</strong></td><td align="right"> <strong><?php echo number_format($totalprofit-$totaloutput,2);?></strong></td></tr>
             </tbody>

                  </table>
                  </div>
                </div>
              </div>
             