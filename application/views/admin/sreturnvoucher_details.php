
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
                        <th ><?=$no?></th>
                        <th><?=$product_code?></th>
                        <th><?=$product_name?></th>
                         <th><?=$quantity?></th>
                        <th ><?=$unit?></th>
                        <th><?=$price?></th>
                       
                      <th>Total</th>
                       
                      <th><?=$date?></th>
                       
                        <!--  <th><?=$edit?>/<?=$delete?></th> -->
                      </tr>
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
                      <td><?=$count?></td>
                       <td ><?=$list->product_code?></td>
                        <td ><?=$list->product_name?></td>
                         <td ><?=$list->quantity?></td>
                          <td ><?=$list->unit?></td>  
                          <td ><?=$list->price?></td>                         
                           <td ><?=$list->total?></td>
                        
                           <td ><?=$list->date?></td>                         
                       <!--   <td >
                      
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
                    <td align="right" colspan="6">All Total </td> <td align="center"> <?=number_format($total)?></td></td>
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
