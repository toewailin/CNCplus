<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Smart Sale  | Backend Data Administrator</title>
	<base href="<?=base_url()?>"></base>


<link href="css/jquery-ui.css" rel="stylesheet">
  <link href="<?=base_url()?>images/favicon.ico" rel="shortcut icon"/>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/signin.css">
<!-- 	<link rel="stylesheet" type="text/css" href="css/sb-admin.css">
  <link rel="stylesheet" type="text/css" href="css/mystyle.css"> -->
   <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">

   
    
  
   <link rel="stylesheet" type="text/css" href="css/main.css">
      <style>
  .ui-autocomplete {
    max-height: 200px;
    overflow-y: auto;
    /* prevent horizontal scrollbar */
    overflow-x: hidden;
  }
  /* IE 6 doesn't support max-height
   * we use height instead, but this forces the menu to always be this tall
   */
  * html .ui-autocomplete {
    height: 200px;
  }
  </style>
</head>



<body onload="checkstock()">

 <div id="wrapper">

      <!-- Sidebar -->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
       <div class="navigation" align="center">
       <?php /*anchor('admin','
        <div class="navBox c1">
            <div class="navIcon"><img src="images/nav/home.png" border="0"></div>
            <div class="navtext">Home</div>


</div>')*/?><!-- navBox c1 -->
 <a><div class="navBox c1">
                <div class="navIcon"><img src="images/nav/brand.png" border="0"></div>
                <div class="navtext"> Products <i class="fa fa-caret-down"></i></div>
                <div class="navDrop dropL c1">
                <div class="navTrim dropTrim"></div>
              <?=anchor("admin/data_list/category",'<div class="dropItemCon"><div class="navDropItem"><i class="fa fa-chevron-circle-right"></i> Category </div></div>')?>

                <?=anchor("admin/data_list/unit",'<div class="dropItemCon"><div class="navDropItem"><i class="fa fa-chevron-circle-right"></i> Code & Price Setup </div></div>')?>
              <?=anchor("admin/data_list/remind_purchase",'<div class="dropItemCon"><div class="navDropItem"><i class="fa fa-chevron-circle-right"></i> '.$runout_remind_alert.'</div></div>')?>


            </div>
               
            </div></a>

              <a>
        <div class="navBox c2">
            <div class="navIcon"><img src="images/nav/customer.png" border="0"></div>
            <div class="navtext">Customer & Supplier <i class="fa fa-caret-down"></i></div>

            <div class="navDrop dropL c2">
                <div class="navTrim dropTrim"></div>

                 <?=anchor("admin/data_list/supplier",'<div class="dropItemCon"><div class="navDropItem"><i class="fa fa-chevron-circle-right"></i> Supplier Lists </div></div>')?>
               <?=anchor("admin/data_list/customer",'<div class="dropItemCon"><div class="navDropItem"><i class="fa fa-chevron-circle-right"></i> Customer Lists </div></div>')?>
             <?=anchor("admin/data_list/staff",'<div class="dropItemCon"><div class="navDropItem"><i class="fa fa-chevron-circle-right"></i> Staff Lists </div></div>')?>
             
            </div>
        </div>
        </a>

        

         <a><div class="navBox c7">
            <div class="navIcon"><img src="images/nav/stock.png" border="0"></div>
            <div class="navtext">Warehouse <i class="fa fa-caret-down"></i></div>
          
          <div class="navDrop dropL c7">
            <div class="navTrim dropTrim"></div>
            
            <?=anchor("admin/data_list/subwarehouse",'<div class="dropItemCon"><div class="navDropItem"><i class="fa fa-chevron-circle-right"></i> Sub Warehouse Lists</div></div>')?>

             <?=anchor("admin/data_list/consinement",'<div class="dropItemCon"><div class="navDropItem"><i class="fa fa-chevron-circle-right"></i> Consinement Lists</div></div>')?>
              
            <?=anchor("admin/data_list/showroom",'<div class="dropItemCon"><div class="navDropItem"><i class="fa fa-chevron-circle-right"></i> Show Room Lists </div></div>')?>
               
            
            
          </div>
        </div></a>



 <a><div class="navBox c3">
            <div class="navIcon"><img src="images/nav/inventory.png" border="0"></div>
            <div class="navtext">Inventory <i class="fa fa-caret-down"></i></div>
          
          <div class="navDrop dropL c3">
            <div class="navTrim dropTrim"></div>
            
            <?=anchor("admin/data_list/warehouse1",'<div class="dropItemCon"><div class="navDropItem"><i class="fa fa-chevron-circle-right"></i> Main Warehouse Inventory </div></div>')?>
            <?=anchor("admin/data_list/subwarehouse_stock",'<div class="dropItemCon"><div class="navDropItem"><i class="fa fa-chevron-circle-right"></i> Sub-Warehouse Inventory </div></div>')?>

             <?=anchor("admin/data_list/consinement_stock",'<div class="dropItemCon"><div class="navDropItem"><i class="fa fa-chevron-circle-right"></i> Consinement Inventory</div></div>')?>
             <?=anchor("admin/data_list/showroom_stock",'<div class="dropItemCon"><div class="navDropItem"><i class="fa fa-chevron-circle-right"></i> Showroom Inventory</div></div>')?>
              
        <div class="dropItemCon" onclick="close_stock()" data-toggle="modal" data-target="#myModal"><div class="navDropItem"><i class="fa fa-chevron-circle-right"></i> Close Stocks</div></div>            

            
            
          </div>
        </div></a>

        
<a>
        <div class="navBox c5">
            <div class="navIcon"><img src="images/nav/consine.png" border="0"></div>
            <div class="navtext"> Transfered Lists <i class="fa fa-caret-down"></i></div>

            <div class="navDrop dropL c5">
                <div class="navTrim dropTrim"></div>
          <?=anchor("admin/data_list/transfer_history",'<div class="dropItemCon"><div class="navDropItem"><i class="fa fa-chevron-circle-right"></i> Transfers To SubWarehouse</div></div>')?>
         <?=anchor("admin/data_list/transfer_history",'<div class="dropItemCon"><div class="navDropItem"><i class="fa fa-chevron-circle-right"></i> Transfers To Consines</div></div>')?>
         <?=anchor("admin/data_list/transfer_history",'<div class="dropItemCon"><div class="navDropItem"><i class="fa fa-chevron-circle-right"></i> Transfers To Showroom</div></div>')?>
               
               
            
            </div>
        </div>
        </a>


          
         <a>
        <div class="navBox c4">
            <div class="navIcon"><img src="images/nav/purchase.png" border="0"></div>
            <div class="navtext">Purchase <i class="fa fa-caret-down"></i></div>

            <div class="navDrop dropL c4">
                <div class="navTrim dropTrim"></div>
               
                 <?=anchor("admin/data_list/purchase",'<div class="dropItemCon"><div class="navDropItem"><i class="fa fa-chevron-circle-right"></i> Purchasing To Main Warehouse </div></div>')?>
                 <?=anchor("admin/data_list/purchase_multiple",'<div class="dropItemCon"><div class="navDropItem"><i class="fa fa-chevron-circle-right"></i> Purchasing To Subwarehouse  </div></div>')?>

            
            </div>
        </div>
        </a>

        



        <a><div class="navBox c6">
                <div class="navIcon"><img src="images/nav/dollar.png" border="0"></div>
                <div class="navtext">Sale <i class="fa fa-caret-down"></i></div>

                <div class="navDrop dropL c6">
                  <div class="navTrim dropTrim"></div>
                  
                   <?php //echo anchor("admin/data_list/sale",'<div class="dropItemCon"><div class="navDropItem"><i class="fa fa-chevron-circle-right"></i> Shop Sale</div></div>')?>
               
                   <?php echo anchor("admin/data_list/consinement_sale",'<div class="dropItemCon"><div class="navDropItem"><i class="fa fa-chevron-circle-right"></i> Consinement Sale</div></div>','')?>
                   <?php echo anchor("admin/data_list/sale",'<div class="dropItemCon"><div class="navDropItem"><i class="fa fa-chevron-circle-right"></i> Showroom Sale</div></div>','')?>
                 	 
                </div>
            </div></a>





  <a>
        <div class="navBox c8">
            <div class="navIcon"><img src="images/nav/return.png" border="0"></div>
            <div class="navtext">Returns <i class="fa fa-caret-down"></i></div>

            <div class="navDrop dropL c8">
                <div class="navTrim dropTrim"></div>

                 <?=anchor("admin/data_list/purchase_return",'<div class="dropItemCon"><div class="navDropItem"><i class="fa fa-chevron-circle-right"></i> Purchasing Returns From Main</div></div>')?>
                  <?=anchor("admin/data_list/purchase_multiple_return",'<div class="dropItemCon"><div class="navDropItem"><i class="fa fa-chevron-circle-right"></i> Purchasing Returns From Subwarehouse</div></div>')?>

                     <?=anchor("admin/data_list/sale_return",'<div class="dropItemCon"><div class="navDropItem"><i class="fa fa-chevron-circle-right"></i> Sale Returns </div></div>')?>
                 
              
            </div>
        </div>
        </a>


         <a>

        <div class="navBox c9">
            <div class="navIcon"><img src="images/nav/stats.png" border="0"></div>
            <div class="navtext">Statistics <i class="fa fa-caret-down"></i></div>
            
                        <div class="navDrop dropL c9">
                <div class="navTrim dropTrim"></div>
                 <?=anchor("admin/data_list/bysaleamount",'<div class="dropItemCon"><div class="navDropItem"><i class="fa fa-chevron-circle-right"></i> By Sale Amount</div></div>')?>
               <?=anchor("admin/data_list/byqtyamount",'<div class="dropItemCon"><div class="navDropItem"><i class="fa fa-chevron-circle-right"></i> By Product Amount</div></div>')?>
               
              
            </div>
         
        </div>

        </a>


         <a>

         <div class="navBox c10">
            <div class="navIcon"><img src="images/nav/dollars.png" border="0"></div>
            <div class="navtext">Outcomes <i class="fa fa-caret-down"></i></div>
            
                        <div class="navDrop dropL c10">
                <div class="navTrim dropTrim"></div>

                  <?=anchor("admin/data_list/outcome_category",'<div class="dropItemCon"><div class="navDropItem"><i class="fa fa-chevron-circle-right"></i> Outcome Categories</div></div>')?>
               
                  <?=anchor("admin/data_list/general_outcome",'<div class="dropItemCon"><div class="navDropItem"><i class="fa fa-chevron-circle-right"></i> General Outcomes</div></div>')?>
               
                
            </div>
         
        </div>

        </a>
    
   
       


       


         <a>

         <div class="navBox c12">
            <div class="navIcon"><img src="images/nav/damage.png" border="0"></div>
            <div class="navtext">Rejects <i class="fa fa-caret-down"></i></div>
            
						<div class="navDrop dropL c12">
                <div class="navTrim dropTrim"></div>
                 <?=anchor("admin/data_list/damage_warehouse1",'<div class="dropItemCon"><div class="navDropItem"><i class="fa fa-chevron-circle-right"></i> Main Warehouse Rejects </div></div>')?>
                 <?=anchor("admin/data_list/damage_subwarehouse",'<div class="dropItemCon"><div class="navDropItem"><i class="fa fa-chevron-circle-right"></i> Sub-Warehouse Rejects </div></div>')?>

                  <?=anchor("admin/data_list/damage_consinement",'<div class="dropItemCon"><div class="navDropItem"><i class="fa fa-chevron-circle-right"></i> Consinement Rejects </div></div>')?>
                  <?=anchor("admin/data_list/damage_showroom",'<div class="dropItemCon"><div class="navDropItem"><i class="fa fa-chevron-circle-right"></i> Showroom Rejects </div></div>')?>

                 
            </div>
         
        </div>
    </a>

      <a>
        <div class="navBox c13">
            <div class="navIcon"><img src="images/nav/profit.png" border="0"></div>
            <div class="navtext">LEDGER <i class="fa fa-caret-down"></i></div>

            <div class="navDrop dropL c13">
                <div class="navTrim dropTrim"></div>

                 <?=anchor("admin/data_list/sale_profit",'<div class="dropItemCon"><div class="navDropItem"><i class="fa fa-chevron-circle-right"></i> Profit and Loses From Sale</div></div>')?>
                <?=anchor("admin/data_list/income_outcome",'<div class="dropItemCon"><div class="navDropItem"><i class="fa fa-chevron-circle-right"></i> Monthly Profit and Loses</div></div>')?>
                <?=anchor("admin/data_list/daily_income_outcome",'<div class="dropItemCon"><div class="navDropItem"><i class="fa fa-chevron-circle-right"></i> Daily Income and Outcome</div></div>')?>

                 <?=anchor("admin/data_list/debt_to_supplier",'<div class="dropItemCon"><div class="navDropItem"><i class="fa fa-chevron-circle-right"></i> Payable Lists</div></div>')?>
               
                 <?=anchor("admin/data_list/debt_from_customer",'<div class="dropItemCon"><div class="navDropItem"><i class="fa fa-chevron-circle-right"></i> Receivable Lists</div></div>')?>
                  <?=anchor("admin/data_list/debt_expense",'<div class="dropItemCon"><div class="navDropItem"><i class="fa fa-chevron-circle-right"></i> Debt Expenses</div></div>')?>
                  <?=anchor("admin/data_list/general_income",'<div class="dropItemCon"><div class="navDropItem"><i class="fa fa-chevron-circle-right"></i> General Incomes</div></div>')?>

                    <?=anchor("admin/data_list/cash_book",'<div class="dropItemCon"><div class="navDropItem"><i class="fa fa-chevron-circle-right"></i> Daily Cash Book</div></div>')?>
         
               
            </div>
        </div>
        </a>



 <a>


         <div class="navBox c14">
         <?php
          $check_remind=$this->admin_model->check_stock_remind();
        $check_shop_stock_remind=$this->admin_model->check_shop_stock_remind();
         ?>
          <?php 

    $std=date("Y-m-d",strtotime($today)-1296000);
    $debt=$this->db->query("SELECT * FROM tbl_customer WHERE total_debt<0 AND last_date<='$std'");
     
             ?>
            <div class="navIcon"><img src="images/nav/remindalert.png" border="0"></div>
            <div class="navtext">Alert <i class="fa fa-caret-down"></i></div>
            
						<div class="navDrop dropL c14">
                <div class="navTrim dropTrim"></div>

                <?=anchor("admin/data_list/shop_stock_alert",'<div class="dropItemCon"><div class="navDropItem"><i class="fa fa-chevron-circle-right"></i> Running Out Products <span class="badge" id="shopstockalert">'.$check_shop_stock_remind->num_rows().'</span></div></div>')?>
              <?php //anchor("admin/data_list/stock_alert",'<div class="dropItemCon"><div class="navDropItem"><i class="fa fa-chevron-circle-right"></i> ဂိုေဒါင္တြင္းရွိ ကုန္ခါနီး ပစၥည္းမ်ား <span class="badge" id="stockalert">'.$check_remind->num_rows().'</span></div></div>')?>
             
              <?=anchor("admin/data_list/debt_alert",'<div class="dropItemCon"><div class="navDropItem"><i class="fa fa-chevron-circle-right"></i> '.$debtalert.' <span class="badge" id="debtalert">'.$debt->num_rows().'</span></div></div>')?>
              <div class="dropItemCon"><div class="navDropItem"> <span id="promotionalert" class="badge"></span></div></div>
                
            </div>
            <span class="badge" id="alert">
         <?php
         echo ($check_shop_stock_remind->num_rows()+$check_remind->num_rows()+$debt->num_rows());
         ?>
         </span>
        </div>

        </a>


        <a>

         <div class="navBox c15">
            <div class="navIcon"><img src="images/nav/logout1.png" border="0"></div>
            <div class="navtext"><?=get_cookie("admin_cookie")?> <i class="fa fa-caret-down"></i></div>
            
            <div class="navDrop dropL c15">
                <div class="navTrim dropTrim"></div>
                 <a href="javascript:show_form('account_setting')"><div class="dropItemCon"><div class="navDropItem"><i class="fa fa-gear"></i> Account  Setting</div></div></a>
                     <?=anchor("admin/data_list/user",'<div class="dropItemCon"><div class="navDropItem"><i class="fa fa-user"></i> User Setting </div></div>')?>
          
               
               <?=anchor("admin/logout",'<div class="dropItemCon"><div class="navDropItem"><i class="fa fa-power-off"></i> Logout</div></div>')?>
              
                 
            </div>
         
        </div>
    </a>

     <a>

         <div class="navBox c16">
            <div class="navIcon" onclick="window.print()"><img src="images/nav/print.png" border="0"></div>
            
            <div class="navDrop dropL c15">
                <div class="navTrim dropTrim"></div>
               
               <?php echo anchor("admin/backup_data/".$this->uri->segment(3),'<div class="dropItemCon"><div class="navDropItem"><i class="fa fa-cloud-download"></i> Excel</div></div>')?>
             
                 
            </div>
            
    </a>

    </div>
      </nav>

      <div id="page-wrapper">
       
        <!-- <div class="row"> -->
          <div class="" id="dialog_frame">

         

            <?php $this->load->view('admin/'.$main_content); ?>
   
</div>
 <!-- </div> -->
 </div><!-- /#wrapper -->

    <!-- JavaScript -->


  </body>
  <script src="js/jquery.js"></script>
   <script type="text/javascript" src="js/bootstrap.js"></script>
<script src="js/jquery-ui.js"></script>
<script type="text/javascript" src="js/template.js"></script>

  <script>

  $(function() {

     $( ".date" ).datepicker({
  dateFormat: "dd-mm-yy"
});
    $( "#date1" ).datepicker("option", "dateFormat","d-m-yy");
    $( "#date2" ).datepicker("option", "dateFormat","d-m-yy");
     $( "#date3" ).datepicker("option", "dateFormat","d-m-yy");
     $( ".date" ).datepicker("option", "dateFormat","d-m-yy");
  });


$(document).on('focus', "input.autocomplete", function() {
    $(this).autocomplete({
source: "http://localhost:8080/CNC/index.php/admin/search",
minLength: 0,//search after two characters
select: function(event,ui){
    //do something
    }
});
});
  </script>
</html>


