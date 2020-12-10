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
<body>
 <div class="container">
            
             
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-bars"></i> <?="ေၾကြးျပန္ဆပ္ေငြ : "?></h3>
              </div>
              <div class="panel-body">
              <table class="table table-bordered table-hover table-striped tablesorter">
                    <thead>
                      <tr>
                        <th width="20"> <?=$no?></th>
                        <th><?=$suppliername?></th>
                        <th><?="By"?></th>
                        <th><?="ေပးသူအမည္"?></th>
                        <th><?="ေပးေငြ"?></th>
                        <th><?="မွတ္ခ်က္"?></th>
                        <th><?=$date?></th>
                                              
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
                         <td><?=$list->supplier?></td>
                            <td><?=$list->paymethod?></td>  
                             <td><?=$list->payname?></td>  
                        <td><?=number_format($list->returnamount)?></td>
                         <td><?=$list->note?></td>   
                          
                              <td><?=$list->date?></td>  
                                
                                                                   
                        
                                      </tr>
                                       <?php
                         $count++;
                         $total+=$list->returnamount;
                          endforeach;
                        
                        ?>
                    </tbody>
                    <tr>
                      
                      <td colspan="4" align="right"><?=$alltotal?></td>

                      <td  align="center"><br/><p> <?=number_format($total)?></p></td>
                    </tr>
                    
                  </table>

                  <?php $form=($this->uri->segment('3')=="debt_to_supplier"? "debt_return_to_supplier_form":"debt_return_to_supplier_form")?>

                
      </div>
    </div>
  </div>
   </body>
<script type="text/javascript" src="js/template.js"></script>
</html>
