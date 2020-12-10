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

            
             
            <div class="panel panel-primary">
              <div class="panel-heading">
              <div class="container">
                <div class="col-md-3">
                   <h3 class="panel-title"><i class="fa fa-bars"></i>Saled Amount Order By Quantity</h3>
              

                </div>
                <div class="col-md-8">
                <form name="singlesearch" id="sale">
                <?=$from?> <input type="date" name="startdate" class="form-control-sale" id="date1"/>
              <?=$to?> <input type="date" name="enddate" class="form-control-sale" id="date2"/>
             
            
              <input type="button" class="btn btn-primary active" value="<?=$search?>" onclick="searchsingle('sale')">
           
            </form> </div>

              </div>
               </div>
              <div class="panel-body">
              <table class="table table-bordered table-hover table-striped tablesorter">
                    <thead>
                      <tr>
                        <th> <?=$no?></th>
                         <th><?=$customer?></th>
                        <th><?=$product_name?></th>
                        <th><?=$quantity?></th>
                        <th><?=$date?></th>
                     
                      </tr>
                    </thead>
                    <tbody id="content">
                    <?php
                    $count=1;
            						foreach($lists->result() as $list):
            					?>
                                  <tr>
                        <td><?=$count?></td>   
                        <td><?=$list->customer?></td>           
                        <td><?=$list->product_name?></td> 
                        <td><?php 
                        $rows=$this->db->query("SELECT sum(quantity) as totqty,unit from tbl_sale where product_code='".$this->uri->segment(4)."' AND customer='".$list->customer."' AND date=CURDATE() group by unit order by item_count DESC");
                        foreach($rows->result() as $row):
                        
                          echo "<div class='col-md-3'>".$row->totqty." &nbsp;<b>".$row->unit."</b></div>";
                        endforeach;
                        ?></td>   
                        <td><?=$list->date?></td>
                               </tr>
                                       <?php
                        $count++;
                					endforeach;
                				
                				?>
                    </tbody>
                   
                  </table>

              
      </div>
    </div>
   </body>
<script type="text/javascript" src="js/template.js"></script>
</html>
