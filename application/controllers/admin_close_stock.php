<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin_close_stock extends CI_Controller {


function close_stock()
	{	
	
			
		mysql_query("INSERT INTO `tbl_shop_stock_history` SELECT * FROM `tbl_shop_stock` where date =CURDATE()");
		
	}//
	
}

 ?>