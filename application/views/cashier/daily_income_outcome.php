<div class="container">
  
  </div>
                <div class="panel panel-primary" id="reportdata">
              <div class="panel-heading heading-over">

                  <div class="container"> 

          <div class="col-md-6">                <h3 class="panel-title"><i class="fa fa-bars"></i> Daily Income And Outcome for <?=$dateinterval?> </h3>
</div>

                <div class="col-md-6">
                    <form name="getreport"  id="daily_income_outcome">
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
                <div style="margin:auto;width:70%">
                <table class="table table-hover" width="70%">                    
                    <tbody>
                      <tr>
                        <td align="right"><h3>Income</h3></td>
                        <td align="right">&nbsp;</td>
                        <td align="right">&nbsp;</td>
                      </tr>
                      <tr>
                      <td align="right" width="50%">Total Sale</td>
                      <td align="right"><?=number_format($totalsale->total,2);?></td>
                      <td align="right"></td></tr>
<tr>
  <td align="right">Other Income</td>
  <td align="right">- &nbsp;&nbsp; <?=number_format(abs($generalincome->total),2);?></td>
  <td align="right"></td></tr>
                      <tr bgcolor="lightgray">
                        <td align="right" colspan="2"><strong>Total  Incomes</strong> </td><td align="right"><strong>
                      <?php 
                      $totalsaleamount=$totalsale->total+abs($generalincome->total);
                      echo number_format($totalsaleamount,2);
                      ?></strong>
                      </td></tr>
                   
                      <tr>
                        <td align="right"><h3>Outcome (-)</h3></td>
                        <td align="right">&nbsp;</td>
                        <td align="right">&nbsp;</td>
                      </tr>
                      <tr>
                      <td align="right" width="50%">Total Purchase</td>
                      <td align="right"><?php echo number_format($totalpurchase->total,2);?></td>
                      <td align="right"></td></tr>
                      <tr>
                        <td align="right">General Expense</td>
                        <td align="right">+ &nbsp;&nbsp; <?=number_format($totalgeneraloutcome->total,2)?></td>
                        <td align="right"></td>
                      </tr>
                      <tr>
  <td align="right">Delivery Cost</td>
  <td align="right">+ &nbsp;&nbsp; <?=number_format($deliverycost->total,2)?></td>
  <td align="right"></td></tr>
                      <tr bgcolor="lightgray">
                         <td align="right" colspan="2"><strong>Total Outcomes</strong></td>
                        <td align="right"><strong><?php $totaloutcome=$totalpurchase->total+$totalgeneraloutcome->total+$deliverycost->total;
						echo number_format($totaloutcome,2)?></strong></td>
                        
                      </tr>
                      <tr bgcolor="lightgray">
                        <td align="right" colspan="2"><strong>Total Cash Received For <?=$dateinterval?></strong></td><td align="right"><strong>
                      <?php 
                     
                      echo number_format($totalincome-$totaloutcome);
                      ?></strong>
                      </td></tr>
                       <?php 
                    
                      $totalinhand=$totalincome;
                      ?>
                      

                    </tbody>
                   </table>
  
<br/>
                   


                  </div>
                </div>
              </div>

            </div>
          </div>
     
