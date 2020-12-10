<?php
$session_id=$this->db->get_where("login_validate",array('session_id'=>$this->session->userdata("session_id")))->row();
if($this->session->userdata("session_id")==$session_id->session_id)
    {


?>
<!DOCTYPE html>
<html>
<head>
	<title>Store Project</title>
	<base href="<?=base_url()?>"></base>
  <link href="<?=base_url()?>images/favicon.ico" rel="shortcut icon"/>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/signin.css">
	<link rel="stylesheet" type="text/css" href="css/sb-admin.css">
  <link rel="stylesheet" type="text/css" href="css/mystyle.css">
 <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
  <script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    
</head>



<body onload="checkstock()">

 <div id="wrapper">

      <!-- Sidebar -->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
                       <span class="icon-bar"></span>
 <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        
          <h3 class="sadmin">STORE CASHIER</h3>
        </div>


          <ul class="nav navbar-nav navbar-right navbar-user">

           
            <li class="dropdown alerts-dropdown" id="stockalert">
             <?php $check_remind=$this->admin_model->check_stock_remind();?>
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <?=$alert?> <span class="badge"><?=$check_remind->num_rows()?></span> <b class="caret"></b></a>
              <ul class="dropdown-menu">
              <?php
              $no=1;
            
              foreach($check_remind->result() as $remind):

              ?>
                <li><a href="#"><span class="badge"><?=$no?></span> <?=$remind->product_name;?> <span class="label label-danger"><?=$remind->l;?></span></a></li>
                
            <?php
            $no++;     
                  endforeach;
                ?>
                <li class="divider"></li>
                <li class="viewall" onclick="data_list('remind_purchase')" >View All</li>
               <!--  <li><a href="#">View All</a></li> -->
              </ul>
            </li>
          

             <li class="dropdown user-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-flag"></i> Change Language<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><?=anchor("cashier/change_language/myanmar",'<i class="fa fa-flag"></i> Myanmar</a>')?></li>
                <li><?=anchor("cashier/change_language/english",'<i class="fa fa-flag"></i> English</a>')?></li>
             
                </ul>
            </li>

              <li class="dropdown user-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?=$this->session->userdata('AdminUser')?><b class="caret"></b></a>
              <ul class="dropdown-menu">
               <li class="viewall" onclick="show_form('account_setting')"><i class="fa fa-gear"></i>Setting</li>

                <li class="divider"></li>
                <li>  <?=anchor("cashier/logout",'<i class="fa fa-power-off"></i> Log Out')?>
              </li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </nav>

      <div id="page-wrapper">
       
        <!-- <div class="row"> -->
          <div class="container" id="dialog_frame">

      <!-- start -->
          <div class="col-lg-2 col-md-2">

           <div class="thumbnail layout-icon" onclick="showdialogform('data_list/purchase')" >
            <img src="images/purchase.png"/>
            <p>Purchase</p>
            </div>
          </div>

          <!-- insert_form/purchase_form -->
           <!-- start -->
          <!--  <div class="col-lg-2 col-md-2 layout-icon" data-toggle="modal" data-target=".bs-example-modal-lg">
           <div class="thumbnail layout-icon">
            <img src="images/sale.png"/>
           <p> Sale</p>
           </div>
          </div> -->

          <div class="col-lg-2 col-md-2 layout-icon" onclick="showdialogform('data_list/sale')">
           <div class="thumbnail layout-icon">
            <img src="images/sale.png"/>
           <p> Sale Lists</p>
           </div>
          </div>

           <!-- start -->
           <div class="col-lg-2 col-md-2 layout-icon" onclick="showdialogform('data_list/stock')">
           <div class="thumbnail layout-icon">
            <img src="images/stock.png"/>
           <p> Stock</p>
           </div>
          </div>

           

          <!-- start -->
           <div class="col-lg-2 col-md-2 layout-icon" onclick="showdialogform('data_list/remind_purchase')">
           <div class="thumbnail layout-icon">
            <img src="images/remindalert.png"/>
          <p>  Remind Alert</p>
          </div>
          </div>

           <!-- start -->
           <div class="col-lg-2 col-md-2 layout-icon" onclick="showdialogform('data_list/order')">
           <div class="thumbnail layout-icon">
            <img src="images/order.png"/>
          <p> Order</p>
          </div>
          </div>

           <!-- start -->
           <div class="col-lg-2 col-md-2 layout-icon" onclick="showdialogform('data_list/deliver')">
           <div class="thumbnail layout-icon">
            <img src="images/deliver.png"/>
          <p> Delivers</p>
          </div>
          </div>
         

         
          <!-- start -->
           <div class="col-lg-2 col-md-2 layout-icon" onclick="showdialogform('data_list/damage')">
           <div class="thumbnail layout-icon">
            <img src="images/damage.png"/>
          <p> Damage</p>
          </div>
          </div>

          <!-- start -->
           <div class="col-lg-2 col-md-2 layout-icon" onclick="showdialogform('data_list/jackpot')">
           <div class="thumbnail layout-icon">
            <img src="images/jackpot.png"/>
          <p> Jackpot</p>
          </div>
          </div>

          <!-- start -->
           <div class="col-lg-2 col-md-2 layout-icon" onclick="showdialogform('data_list/supplier')">
           <div class="thumbnail layout-icon">
            <img src="images/supplier.png"/>
          <p>  Suppliers </p>
          </div>
          </div>

        

        


          <!-- start -->
           <div class="col-lg-2 col-md-2 layout-icon" onclick="showdialogform('data_list/general_outcome')">
           <div class="thumbnail layout-icon">
            <img src="images/generaloutcome.png"/>
          <p> General Outcomes</p>
          </div>
          </div>

         
           
   
</div>
 <!-- </div> -->
 </div><!-- /#wrapper -->

   
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
     <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      ...
    </div>
  </div>
</div>
  </body>
<script type="text/javascript" src="js/template.js"></script>
</html>
<?php
}
else
{
  redirect("site");
}

?>
