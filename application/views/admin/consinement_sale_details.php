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
              <div class="panel-body" id="content">
              <table class="table table-bordered table-hover table-striped tablesorter">
                    <thead>
                      <tr>
                        <th> <?=$no?></th>
                        <th><?=$product_code?></th>
                        <th><?=$product_name?></th>
                         <th><?=$quantity?></th>
                        <th><?=$price?></th>                       
                        <th><?=$discount?></th>
                                 <th><?=$total?></th>
               <th>Consinement Name</th>
               <th>Date</th>
               <th>Edit / Delete</th>
                     
                      </tr>
                    </thead>
                    <tbody >
                    <?php
                    $count=1;
                    $total=0;
            						foreach($lists->result() as $list):
            					?>
                                  <tr>
                        <td><?=$count?></td>
                        <td><?=$list->product_code?></td>
                        <td><?=$list->product_name?></td>
                           <td><?=number_format($list->quantity)." ".$list->unit?></td>
                        <td><?=number_format($list->price)?></td>
                       <td><?=number_format($list->discount)?> %</td>                                            
 
                         <td><?=number_format($list->total)?></td>
                      <td><?=$list->name?></td>
                      <td><?=$list->date?></td>
                      <td width="150">
                         <?php //anchor("admin/edit_form/consinement_sale/".$list->id,$edit)?>

                          <a href="javascript:sale_edit('<?=$list->id?>','consinement_sale')"><?=$edit?></a> / 
                       <a href="javascript:makedelete('<?=$list->id?>','consinement_sale','<?=$this->uri->segment(4)?>')"><?=$delete?></a>
                         </td>                                    </tr>
                                       <?php
                         $count++;
                         $total+=$list->total;
                					endforeach;
                				
                				?>
                    </tbody>
                    <tr>
                    <td rowspan="7" colspan="4"><?=$list->note?></td>
                      
                     <td  colspan="2" align="right">စုစုေပါင္း</td>

                      <td align="center"><?=number_format($total)?></td>
                    </tr>

                    
                  </table>

                  
      </div>
    </div>
  </div>
   </body>
<script type="text/javascript" src="js/template.js"></script>
</html>
