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
                <h3 class="panel-title"><i class="fa fa-bars"></i> <?=" Supplier Name : ".$row->supplier?></h3>
              </div>
             <div class="panel-body">
                <div class="table-responsive">
                  <table class="table table-bordered table-hover table-striped tablesorter">
                    <thead class="thead-over">
                      <tr>
                        <th width="60"><?=$no?></th>
                        <th width="130"><?=$voucher?></th>
                        <th width="220"><?=$suppliername?></th>
                        <th width="80"><?=$totaltransportationcharges?></th>
                        <th width="130"><?=$totaltransferrate?></th>
                    
                        <th width="180"><?=$netamounttosupplier?></th>                       
                         <th width="100"><?=$advance?></th>
                      
                        <th width="200"><?=$balance?></th>
                        <th width="150"><?=$date?></th>
                       
                       <th width="120">View Details</th>
                      </tr>
                    </thead>
                      
                    <tbody id="content">
                    <?php
                    $count=1;
                    $total=0;
              foreach($lists->result() as $list):
              
                     ?>
                      <tr>
                      <td width="60"><?=$count?></td>
                       <td width="130"><?=$list->voucherno?></td>
                        <td width="220"><?=$list->supplier?></td>
                          <td width="80"><?=$list->totaltransportationcharges?></td>  
                          <td width="135"><?=$list->totaltransferrate?></td>
                          
                          <td width="100"><?=$list->netamounttosupplier?></td>
                         <td width="100"><?=$list->advance?></td>
                                   
                          <td  width="200"><?=$list->balance?></td>
                         <td width="150"><?=$list->date?></td>                         
                         <td width="150">
                      
                          <a onclick="viewdetails('<?=$list->voucherno?>','pvoucher','')">View Details </a>
                       </td>
                     
                      </tr>
                     <?php
                     $count++;
                    $total+=$list->netamounttosupplier;
                  endforeach;
                  ?>
                  <tr>
                    <td align="right" colspan="8">All Total </td> <td colspan="3"> <?=number_format($total)?></td>
                    </tr>
                  </tbody>
                  </table>
                 
                </div>

              
               
              </div>
    </div>
  </div>
  </body>
<script type="text/javascript" src="js/template.js"></script>
</html>
