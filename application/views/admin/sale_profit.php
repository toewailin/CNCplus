
  
            <div class="panel panel-primary" >
              <div class="panel-heading heading-over">

                <div class="container"> 

               

                <div class="col-md-4">  
                  <h3 class="panel-title"><i class="fa fa-bars"></i>  <?=$profitandlosses?> ( <?=$dateinterval?>) </h3>
              
                </div>

                  <div class="col-md-8">  
                       <form name="getreport" id="sale_profit">
              <?=$from?> <input type="text" name="startdate" class="form-control-sale date" id="date1"/>
              <?=$to?> <input type="text" name="enddate" class="form-control-sale date" id="date2"/>

              <input type="button" class="btn btn-primary active" value="<?=$search?>" onclick="search_sale_profit()">
            <!--  <span class="btn btn-default active" style="float:right" onclick="show_form('purchase_form')" >+ Add New</span> </a> -->
            </form>
                  </div>
                   </div>
              </div>
              
              <div class="panel-body" id="search">
                <div class="table-responsive panel-over">
                 <table class="table table-bordered table-hover table-striped tablesorter">
                    <thead>
                      <tr>
                        <th width="90" class="center"><?=$date?></th>   
                        <th width="100" class="center"><?=$product_code?></th>
                        <th width="185" class="center"><?=$product_name?></th>
                                                 <th width="150" class="center" width="110"><?=$quantity?></th>


<!--                         <th width="150" class="center" width="110"><?php//$unitname?></th>
 -->                       
<!--                           <th width="150" class="center" width="110"><?="သင့္ေငြ"?></th>
 -->
                        <th width="190" class="center" ><?=$total?> Amount</th>
                        <th width="190" class="center" >Total Purchase Amount</th>                     
                        <th width="190" class="center"><?=$profit?></th>
                      </tr>
                    </thead>
                   
                    <tbody id="content">
                    <?php
                    $total=0;
                    $totalcapital=0;
                    $totalprofit=0;

                                   
                        foreach($lists->result() as $list):
                    ?>
                      <tr>
                         <td width="90" valign="middle"><?=$list->date?></td>
                        <td width="100" align="center"><?=$list->product_code?></td>
                        <td width="185"><?=$list->product_name?></td>
                          <td  width="25%" align="center"><?=number_format($list->totalitem_count).$list->unit?></td>

                        <td width="190" align="right"><?=$list->total?></td>

                      
                         <td width="190" align="right"><?=$list->average_purchase_price?></td>
                        
                       <td width="190" align="right"><?=$list->total-$list->average_purchase_price?></td>
                    
                        <?php 

                         $total+=$list->total;
                         $totalcapital+= $average_purchase_price;
                       $totalprofit+= $list->total-$list->average_purchase_price;
                         
                         ?>
                      </tr>
                       <?php
                      // $total+=$list->total-($list->purchase_price*$list->totalqty);
                    //   $totalcard+=$list->carddiscount;
                            endforeach;


                           
                                ?>

                     <tr>
                     <td align="right"><br/><?=number_format($total)?></td>
                     <td align="right"><br/><?=$totalcapital?></td>
                     <td align="right"><br/><?=($totalprofit)?></td>
                    </tr>
                     
                    </tbody>
                  </table>
                    <?php
                /*  echo "<div class='pagination'>";
                  echo $this->pagination->create_links();
                  echo "</div>";*/
                  ?>
                </div>
                
              </div>
            </div>
          </div>
        
