<!DOCTYPE html>
<html>
<head>
	<title> CNC | Smartsale Login</title>
	<base href="<?=base_url()?>"></base>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link href="<?=base_url()?>images/favicon.ico" rel="shortcut icon"/>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/signin.css">
	<style type="text/css">
	h1,h3
	{

		
		text-align: center;
		text-shadow: 1px 1px 1px #428bca;

		
	}

	h3
	{
		margin-top: 0px;

		margin-bottom: 20px;
	}

	.form-control
	{
		width: 100% !important;
	}
	small
	{
		display: block !important;
		clear: both !important;
		margin: 10px auto 20px;
	}

	.sadmin
	{
		color: white;
		box-shadow: none;
		margin-top: 20px;
	}

	.panel-primary
	{
		border-color: rgb(255, 255, 255);
		padding: 0px;
		box-shadow: 0px 0px 2px 2px rgb(110, 110, 110);
	}

	body{
		background: #428bca;
	}


	</style>
</head>
<body>
<!--div id="wrapper">

      
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
       
        <div class="navbar-header">
         
        
          <h3 class="sadmin">SMART SALE | CASHIER</h3>
        </div>
        </nav>
 </div-->

 <div id="wrapper">
<div class="container loginbg">
	
<?php
echo form_open('site/do_login','class="form-signin"');
echo '<div class="panel panel-primary">
                           
              <h1><br/>CNC <small>Smart Sale Login</small></h1><div class="panel-body">';
//echo "<h3>Administrator Login</h3>";
  echo "Username *";
echo form_input('username','','class="form-control" placeholder="username"');
echo "Passowrd *";
echo form_password('password','','class="form-control" placeholder="password"');
/*echo form_checkbox('remember','','class="form-control"');
echo " Remember me ";*/
echo form_submit('submit','Login','class="btn btn-lg btn-primary form-control"');
echo "</div></div>";
echo form_close();
?>	
</div>
 
 </div>
 </body>
 </html>