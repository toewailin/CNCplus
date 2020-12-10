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
                <h3 class="panel-title"><i class="fa fa-bars"></i> <?=" Voucher Number : ".$this->uri->segment(4)?></h3>
              </div>
              <div class="panel-body">
              <table class="table table-bordered table-hover table-striped tablesorter">
                    <thead>
                      <tr>
                        <th> <?=$no?></th>
                        <th><?=$product_code?></th>
                        <th><?=$product_name?></th>
                        <th><?=$price?></th>
                        <th><?=$quantity?></th>
                        <th><?=$total?></th>
                        <th><?=$discount?></th>
                                              
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
                        <td><?=$list->product_code?></td>
                        <td><?=$list->product_name?></td>
                        <td><?=$list->price?></td>                         
                         <td><?=$list->quantity?></td>
                         <td><?=$list->total?></td>
                        <td><?=$list->discount?></td>                                            
                        
                                      </tr>
                                       <?php
                         $count++;
                         $total+=$list->total;
                					endforeach;
                				
                				?>
                    </tbody>
                    <tr>
                      
                      <td colspan="5" align="right"><?=$alltotal?></td>

                      <td colspan="2"><?=$total?></td>
                    </tr>
                     <tr>
                      
                      <td colspan="5" align="right">Total Discount</td>

                      <td colspan="2"><?=$list->totaldiscount?></td>
                    </tr>

                    <tr>
                      
                      <td colspan="5" align="right"><?=$netamount?></td>

                      <td colspan="2"><?=$total-$list->totaldiscount?></td>
                    </tr>
                     <tr>
                      
                      <td colspan="5" align="right"><?=$advance?></td>

                      <td colspan="2"><?=$list->advance?></td>
                    </tr>

                     <tr>
                      
                      <td colspan="5" align="right"><?=$balance?></td>

                      <td colspan="2"><?=$list->balance?></td>
                    </tr>
                  </table>

          <span class="btn btn-default active" style="float:right;margin-bottom:40px" onclick="showdialogform('insert_form/debt_return_from_supplier_form/<?=$this->uri->segment(3)?>/<?=$this->uri->segment(4)?>')">+ Add Return</span>
          
                   
      </div>
    </div>
  </div>
  </body>
<script type="text/javascript" src="js/template.js"></script>
</html>
