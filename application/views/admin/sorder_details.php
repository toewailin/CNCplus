
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
    
</head>


 <div class="container">
            
             
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-bars"></i> <?=" Voucher No : ".$this->uri->segment(4)?></h3>
              </div>
              <div class="panel-body">
                <div class="table-responsive">
                  <table class="table table-bordered table-hover table-striped tablesorter">
                    <thead class="thead-over">
                      <tr>
                        <th width="60"><?=$no?></th>
                        <th width="130"><?=$product_code?></th>
                        <th width="220"><?=$product_name?></th>
                        <th width="80"><?=$unit?></th>
                        <th width="130"><?=$price?></th>
                        <th width="180">Order Quantity</th>
                        <th width="180">Deliver Quantity</th>
                        <th>Required Quantity</th>
                      
                      
                        <th width="200"><?=$netamount?></th>
                        <th width="150"><?=$date?></th>
                       
                        <!--  <th width="150"><?=$edit?>/<?=$delete?></th>
                     -->  </tr>
                    </thead>
                      
                    <tbody id="content">
                    <?php
                    $count=1;
                    $total=0;
                   // $totaltransportationcharges=0;
                   // $totaltransferrate=0;
              foreach($lists->result() as $list):
              
                     ?>
                      <tr>
                      <td width="60"><?=$count?></td>
                       <td width="130"><?=$list->product_code?></td>
                        <td width="220"><?=$list->product_name?></td>
                          <td width="80"><?=$list->unit?></td>  
                          <td width="135"><?=number_format($list->price)?></td>
                          <td width="170"><?=$list->orderquantity?></td>
                          <td><?=$list->orderquantity-$list->requirequantity?></td>
                                 <td><?=$list->requirequantity?></td>
                          <td  width="200"><?=number_format($list->total)?></td>
                         <td width="150"><?=$list->date?></td>                         
                       <!--   <td width="150">
                      
                          <a href="javascript:showdialogform('edit_form/purchase/<?=$list->id?>')"><?=$edit?></a> / 
                     <a href="javascript:makedelete('<?=$list->id?>','purchase','<?=$this->uri->segment(4)?>')"><?=$delete?></a>
                         </td> -->
                     
                      </tr>
                     <?php
                     $count++;
                    $total+=$list->total;
                    //$totaltransportationcharges += $list->totaltransportationcharges
                  endforeach;
                  ?>
                  <tr>
                    <td align="right" colspan="8">All Total </td> </td> <td align="center"> <?=number_format($list->netamount)?></td>
                    </tr>
                     <tr>
                    <td align="right" colspan="8">Advance</td> </td> <td align="center"> <?=number_format($list->advance)?></td>
                    </tr>

                  <!-- <tr>
                    <td align="right" colspan="6">Balance </td> </td> <td align="center"> <?=number_format($list->balance)?></td>
                    </tr> -->
                  </tbody>
                  </table>
                 
                </div>

              
               
              </div>
            </div>
          </div>
    </body>
<script type="text/javascript" src="js/template.js"></script>
</html>
