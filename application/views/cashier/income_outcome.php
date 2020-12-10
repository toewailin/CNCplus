 
  <div class="container">
  
  </div>
                <div class="panel panel-primary" id="reportdata">
              <div class="panel-heading heading-over">

                  <div class="container"> 

          <div class="col-md-6">                <h3 class="panel-title"><i class="fa fa-bars"></i>  Profit and losses statement for <?=$dateinterval?> </h3>
</div>

                <div class="col-md-6">
                    <form name="getreport"  id="income_outcome">
              <?=$from?>
              <?=$to?> 
              <input type="text" name="enddate" class="form-control-sale date" id="date2"/>
<input type="text" name="startdate" class="form-control-sale date" id="date1"/>
              <input type="button" class="btn btn-primary" value="<?=$search?>" onclick="search_incomeoutcome()">
            <!--  <span class="btn btn-default active" style="float:right" onclick="show_form('purchase_form')" >+ Add New</span> </a> -->
            </form>
                </div>
              </div>
              </div>
             
              <div class="panel-body">
                <div class="table-responsive panel-over">
                <div style="margin:auto;width:60%">
                <table class="table table-hover" width="50%">                    
                    <tbody>
                      <tr>
                        <td align="right"><h3>Income</h3></td>
                        <td align="right">&nbsp;</td>
                      </tr>
                      <tr>
                      <td align="right" width="50%">Sale</td><td align="right"><?=number_format($totalsale->total,2);?></td></tr>
<tr>
  <td align="right">Sale Return</td>
  <td align="right">- &nbsp;&nbsp; <?=number_format(abs($totalsalereturn->total),2);?></td></tr>
                      <tr bgcolor="lightgray">
                        <td align="right" colspan="2"><strong>Total Sale Amount</strong> </td><td align="right"><strong>
                      <?php 
                      $totalsaleamount=$totalsale->total+abs($totalsalereturn->total);
                      echo number_format($totalsaleamount,2);
                      ?></strong>
                      </td></tr>
                       <?php 
                    
                      $totalinhand=$totalincome;
                      ?></strong>
                      </td></tr>
                      

                    </tbody>
                   </table>
                

                  

                   <br/>
                    <table class="table table-hover" width="50%">
                     <tbody>
                      <tr>
                        <td align="right"><h3>Cost Of Sale</h3></td>
                        <td align="right">&nbsp;</td>
                      </tr>
                      <tr>
                        <td align="right" width="50%">Opening Stock</td><td align="right"><?=number_format($totalstock->total,2);?></td></tr>
                    
  <tr>
    <td align="right"> Purchase</td><td align="right">+ &nbsp;&nbsp;<?=number_format($totalpurchase->total,2)?></td></tr>
    <tr>
      <td align="right">Purchase Return</td><td align="right">- &nbsp;&nbsp;<?=number_format($totalpurchasereturn->total,2);?></td></tr>
     <tr>
       <td align="right">Closing Stock</td><td align="right">- &nbsp;&nbsp; <?=number_format($totalstock->total,2);?></td></tr>
                     <tr  bgcolor="lightgray">
                      <td align="right" colspan="2"><strong>Total Cost Of Sale</strong> </td>
                    ><td align="right"><strong>
                       <?php
                       $totalcostofsale=($totalstock->total+$totalpurchase->total)-$totalpurchasereturn->total+$totalstock->total;
                      echo number_format($totalcostofsale,2);
                       ?></strong>
                      </td></tr>

                    </tbody>
                    </table>
                     <br/>
                   <table class="table table-hover" width="50%">
                      <tr>
                        <td width="50%" align="right"><h3>Other Income</h3></td>
                        <td align="right">&nbsp;</td>
                      </tr>
                      <tr>
                        <td align="right" colspan="2">Delivery Charges Income</td><td align="right"><?php echo number_format($generalincome->total,2);?></td></tr>
                      <tr  bgcolor="lightgray">
                        <td align="right" colspan="2">Gross Profit </td>
                        <td align="right"> + &nbsp;&nbsp; 
						<?php 
						$totalincome=$totalsaleamount-$totalcostofsale;
						//$totalincome=($totalgrossprofit->sale_total-$totalgrossprofit->total_purchase)+$generalincome->total;?>
						<?php // number_format(($totalgrossprofit->sale_total-$totalgrossprofit->total_purchase),2);?>  <?php echo number_format( $totalincome,2);?></td>
                      </tr>
                      

</tbody>

</table>
  <br/>
                  <table class="table table-hover" width="50%">
                      <tr>
                        <td width="50%" align="right"><h3>Expenses</h3></td>
                        <td align="right">&nbsp;</td>
                      </tr>
                      <tr>
                        <td align="right">General Expense</td>
                        <td align="right"><?php echo number_format($totalgeneraloutcome->total,2);?></td></tr>
         
                      <tr>
                        <td align="right">Delivery Cost</td>
                        <td align="right">+ &nbsp;&nbsp; <?=number_format($deliverycost->total,2)?></td>
                      </tr>
                     <!-- <tr>
                        <td align="right">Salary Expense</td>
                        <td align="right">&nbsp;</td>
                      </tr>-->
                      <tr>
                        <td align="right">Debt Expense</td>
                        <td align="right">+ &nbsp;&nbsp; <?=number_format($debtexpense->total,2)?></td>
                      </tr>
                      <tr>
                        <td align="right">Damage Expense</td>
                        <td align="right"> + &nbsp;&nbsp; <?php echo number_format($totaldamage_shop->total,2);?></td>
                      </tr>
                     
                     <?php
                     $totalexpense=$totalgeneraloutcome->total+$totaldamage_shop->total+$debtexpense->total+$deliverycost->total;
					 ?>
                       <tr  bgcolor="lightgray">
                      <td align="right" colspan="2"><strong>Total  Expense</td>
                        <td align="right">  + &nbsp;&nbsp;  <?php echo number_format($totalexpense,2);?></td></tr>

</tbody>

</table>
<br/>
                   <table class="table table-hover" width="50%">
                     
                      <tr  >
                        <td align="right">Total Income</td>
                        <td align="right"><?=number_format($totalincome,2)?></td>
                      </tr>
                      <tr  >
                        <td align="right">(-)Total Expenses</td>
                        <td align="right">- &nbsp;&nbsp;                          <?=number_format($totalexpense,2)?></td>
                      </tr>
                      <tr  bgcolor="lightgray">
                      <td align="right" colspan="2"><strong>Profit &amp; Losses Amount</td>
                        <td align="right"><?php echo number_format(($totalincome-$totalexpense),2);?></td></tr>

</tbody>

</table>
  <br/>


                  </div>
                </div>
              </div>

            </div>
          </div>
     
