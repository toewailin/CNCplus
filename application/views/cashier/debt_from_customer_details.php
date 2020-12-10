<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Smart Sale  | Backend Data Administrator</title>
  <base href="<?=base_url()?>"></base>
  <link href="<?=base_url()?>images/favicon.ico" rel="shortcut icon"/>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/signin.css">
<!--  <link rel="stylesheet" type="text/css" href="css/sb-admin.css">
  <link rel="stylesheet" type="text/css" href="css/mystyle.css"> -->
   <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
 <script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
     <link rel="stylesheet" type="text/css" href="css/jquery.ui.all.css">
  <link rel="stylesheet" type="text/css" href="css/demo.css">
  <script type="text/javascript" src="js/jquery.ui.core.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/jquery.ui.datepicker.js"></script>
    <script>
  $(function() {
    $( "#date1" ).datepicker();
    $( "#date2" ).datepicker();
   
  });
  </script>
   <link rel="stylesheet" type="text/css" href="css/main.css">
    <?php $row=$lists->row();?>
</head>

            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-bars"></i> <?=" Customer Name : ".$row->customer_name?></h3>
              </div>
              <div class="panel-body">
              <table class="table table-bordered table-hover table-striped tablesorter">
                    <thead>
                      <tr>
                       
                       <th>No</th>
                       <th>Voucher No</th>
                        <th>Total Amount</th>
                        <th>Debt</th>
                        <th>Net Total</th>
                        <th>Received</th>
                        <th>Discount</th>
                        <th>Delivery Fees</th>
                        <th>Require Amount</th>
                        <th>Exceed Amount</th>
                        <th>Date</th>
                        <th>View Details</th>

                        <!--  <th> <?=$no?></th>
                        <th><?=$product_name?></th>
                         <th><?=$quantity?></th>
                        <th><?=$price?></th>                       
                        <th><?=$total?></th>
                        <th><?=$discount?></th>
                        <th>Change Item</th>  -->    
                      </tr>
                    </thead>
                    <tbody id="content">

                    <?php
                    $count=1;
                    $total=0;
            						foreach($lists->result() as $list):
                        
            					?>
                                  <tr>
                        <td><?=$count?></td>
                        <td><?=$list->voucherno?></td>
                        <td><?=$list->totalamount?></td>
                        <td><?=$list->totaldebt?></td>
                           <td><?=number_format($list->nettotal)?></td>
                        <td><?=number_format($list->received)?></td> 
                         <td><?=number_format($list->jackpot)?></td>
                        <td><?=number_format($list->deliveryfees)?></td>    
                        <td><?php if($list->exceedamount<0) echo $list->exceedamount;?></td>  
                         <td><?php if($list->exceedamount>0) echo $list->exceedamount;?></td> 
                      
                        <td><?=$list->date?></td>                                      
                        <td>
                      <a onclick="viewdetails('<?=$list->voucherno?>','debt_voucher','')">View Details </a>
                 
                        </td>
                                      </tr>
                                       <?php
                         $count++;
                         $total+=$list->nettotal;
                					endforeach;
                				
                				?>
                    </tbody>


                  <!--  <tr>
                      
                      <td colspan="5" align="right"><?=$alltotal?></td>

                      <td colspan="2"><?=number_format($total)?></td>
                    </tr>


                      <tr>
                      
                      <td colspan="5" align="right"><?=$advance?></td>

                      <td colspan="2"><?=number_format($list->received)?></td>
                    </tr>
                    <tr>
                      
                      <td colspan="5" align="right"><?="မဲေငြ"?></td>

                      <td colspan="2"><?=number_format($list->jackpot)?></td>
                    </tr>

                     <tr>
                      
                      <td colspan="5" align="right"><?=$balance?></td>

                      <td colspan="2"><?=number_format($list->exceedamount)?></td>
                    </tr> -->
                  </table>
      
      </div>
    </div>
  </div>
  </body>
<script type="text/javascript" src="js/template.js"></script>
</html>
