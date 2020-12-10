<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin_searchsingle extends CI_Controller {

var $data;

	function __construct()
	{
		error_reporting(0);
		parent::__construct();
		$this->load->model('admin_model');
		

		
			

		$this->data=array(


			'today'=>date("d-m-Y",strtotime($this->session->userdata('date'))),
			'store'=>"SHWE KYEE STORE",
			'shop_stock'=>"Shop Stock Lists",

			'no'=>"No",
			'alert'=>"Product Balance Alert",
			'debtalert'=>"Debt Alert",
			'user'=>"User Lists",
			'username'=>"User Name",
			'staffname'=>"Staff Name",
			'ipaddress'=>"IP Address",
			'computername'=>"Computer Name",
			'newusername'=>'New Username',
			'newpassword'=>'New Password',
			'cnewpassword'=>'Comfirm New Password',
			'oldpassword'=>'Old Password',
			'userrole'=>"User Role",			
			'promotion'=>"Promotion Lists",
			'product_arrive'=>"Order Receive Lists",
			'deliver'=>"Delivery Lists",
			'edit'=>"Edit",
			'delete'=>"Delete",
			'transfer'=>"Transfer",
			'date'=>"Date",
			'phone'=>"Phone",
			'contact_person'=>"Contact Person",
			'advance'=>"Advance",
			'balance'=>"Balance",
			'stock'=>"Home Stock Lists",
			'authority'=>"Authority",
			'currentprice'=>"Current Prices",
			'lastprice'=>"Last Prices",
			'sale'=>"Sale List",
			'purchase'=>"Order Lists",
			'product_price'=>"Product Pricing Lists",
			'runout_remind_alert'=>"Run Out Remind Alert",
			'atleastqty'=>"Quantity Must Be At Least",
			'damage'=>"Damage Lists",
			'jackpot'=>"Jackpot Percentage Lists",
			'amount'=>"Amount",
			'unit'=>"Unit Lists",
			'unitname'=>"Unit",
			'discountpercent'=>"Percentage (%)",
			'discountamount'=>"Amount",
			'startdate'=>"Start Date",
			'enddate'=>"End Date",
			'discountbydate'=>"Discount By Date",
			'discountlist'=>"Discount List",
			'remark'=>"Remark",
			'targetvalue'=>"Target Amount",
			'arrivevalue'=>'Getting Value',
			'category'=>"Product Category Lists",
			'incomeoutcome'=>"Income and Outcome Lists",
			'income'=>"Income List",
			'outcome'=>"Outcome Lists",
			'profitandlosses'=>"Profit From Sale",
			'generaloutcome'=>"General Outcome Lists",
			'debttosupplier'=>"Payable List",
			'debtfromcustomer'=>"Receivable List",
			'debttocustomer'=>"Debt To Customer",
			'product_code'=>"Code No",
			'product_name'=>"Product Name",
			'unitname'=>"Unit",
			'save'=>"Save",
			'smallitemcount'=>"Containing Items Count",
			'price'=>"Price",
			'quantity'=>"Quantity",
			'discount'=>"Discount Per Item",
			'total'=>"Total",
			'customer'=>"Customer Name",
			'customername'=>"Customer Name",
			'alltotal'=>"All Total",
			'discountfromall'=>"Discount From All Total",
			'tax'=>"Tax",
			'netamount'=>"Net Amount",
			'receive'=>"Receive",
			'refund'=>"Refund",
			'slipnumber'=>"Slip Number",
			'usertitle'=>"User Lists",
			'suppliertitle'=>"Supplier Lists",
			'customertitle'=>"Customer Lists",
			'stocktitle'=>"Home Stock Lists",
			'saletitle'=>"Sale Lists",
			'promotiontitle'=>"Promotion Lists",
			'supplierordertitle'=>"Purchase Order Lists",
			'customerordertitle'=>"Sale Order Lists",
			'purchasetitle'=>"Purchase Lists",
			'productpricetitle'=>"Product Pricing Lists",
			'runoutalerttitle'=>"Run Out Stock Lists",
			'damagetitle'=>"Damage Product Lists",
			'jackpotchange'=>"Jackpot Lists",
			'unittitle'=>"Code And Prices",
			'discountbydatetitle'=>"Discount By Date Lists",
			'discountbyamounttitle'=>"Discount By Amount Lists",
			'categorytitle'=>"Product Category Lists",
			'incomeoutcometitle'=>"Income and Outcome Lists",
			'generaloutcometitle'=>"General Outcome Lists",
			'debttosuppliertitle'=>"Debt To Supplier Lists",
			'debtfromsuppliertitle'=>"Debt From Supplier List",
			'debtfromcustomertitle'=>"Debt From Customer Lists",
			'profit'=>"Profit",
			'losses'=>"Losses",
			'purchase_price'=>"Purchase Price",
			'selling_price'=>"Selling Price",
			'totalgeneraloutcome'=>"Total General Outcomes",
			'totalincome'=>"Total General Incomes",
			'totaldamage'=>"Total Damage Amount",
			'totalpurchase'=>"Total Purchasing Amount",
			'totaloutcome'=>"Total Outcomes",
			'description'=>"Description",
			'addnew'=>"Add New",
			'suppliername'=>"Supplier Name",
			'status'=>"Status",
			'address'=>"Address",
			'purchasedelivertitle'=>"Purchase Delivery Lists",
			'saledelivertitle'=>"Sale Delivery Lists",
			'voucher'=>"Voucher Number",
			'amountforeachunit'=>"Amount For Each Unit",
			'transportationcharges'=>'Transportation Charges',
			'transferrate'=>"Transfer Rate",
			'totaltransportationcharges'=>'Total Transportation Charges',
			'totaltransferrate'=>"Total Transfer Rate",
			'totalcustomfee'=>'Total Custom Fees',
			'netamounttosupplier'=>'Net Amount To Supplier',
			'totaldiscount'=>"Total Discount",
			'paidamounttosupplier'=>'Paid Amount To Supplier',
			'balancetosupplier'=>"Balance To Supplier",
			'refundtosupplier'=>"Refunt Amount From Supplier",
			'requierdamounttopayment'=>"Requierd Amout To Payment",
			'exceedamounttopayment'=>"Exceed Amount To Payment",

			"exceed"=>"Exceed Amount",
			'required'=>"Requierd Amount",
			'sellingpriceforeachunit'=>"Selling Price For Each Unit",
			'amountforsmallitem'=>"Amount For Small Item",
			'sellingpriceforeachitem'=>"Selling Price For Each Item",
			'outcome_categories'=>"Outcome Categories",
			'requiredamount'=>"Required Amount",
			'title'=>"Title",
			'from'=>"From",
			'to'=>"To",
			'saledtotal'=>"Saled Amount Total",
			'purchasetotal'=>"Purchased Amount Total",
			'totalprofit'=>"Total Profit",
			'search'=>"Search",
			'paidby'=>"Paid By",
			'receivedby'=>"Received By",
			'returnamount'=>"Return Amount",
			'current_purchase_price'=>"Current Purchase Price",
			'previous_purchase_price'=>"Previous Purchase Price",
			'average_purchase_price'=>"Average Purchase Price",
			'ownmoney'=>"Own Money",
			'supplier_unseen_promotion'=>"Unseen Promotion From Supplier",
			'customer_unseen_promotion'=>'Unseen Promotion To Customer',
			'bysaleamount'=>'bysaleamount',
			'byqtyamount'=>'Saled Amount By Quantity',
			'wholesalejackpot'=>"Wholesale +",
			'retailjackpot'=>"Retai//l +",
			'customerjackpot'=>"Jackpot Percetage To Customer",
			'itemchange'=>"Item Changed Lists",
			'depositmoney'=>"Estimated Deposit Money",
			'depositamount'=>"Deposit Amount",
			'year'=>"Year",
			'money_transaction'=>"Cash Transfer / Receipt"
			);
		
		
		}


		/*****************/

	function searchsingle()
	{

		 $data = $this->data;

		$check=$this->admin_model->validate_search();
		
		if($check==true)
		{

			
		$value=$this->input->post("search");
		$colunm=$this->input->post("colunm");
		$ostartdate=$this->input->post('startdate');
		$oenddate=$this->input->post('enddate');
		$startdate=date("Y-m-d",strtotime($this->input->post('startdate')));
		$enddate=date("Y-m-d",strtotime($this->input->post('enddate')));
		$table=$this->uri->segment(3);			

		if($table=="sale")
		{
			$table="sale_header";
		}
		/*if($table=="unit")
		{
			$query=$this->db->get("tbl_unit");

		}*/
	/*	else
		{
*/
		if(empty($value) && empty($ostartdate) && empty($oenddate))
		{
			switch ($table) {
				case "discount" :
				$query=$this->db->get("tbl_discount");
				break;

				case "debt_from_customer" :
				$query=$this->db->get("tbl_customer");
				break;

				case "debt_to_supplier" :
				$query=$this->db->get("tbl_supplier");
				break;


				case "promotion":
				$query=$this->db->query("SELECT * FROM tbl_".$table."");
				break;

				case "delivery":
				$query=$this->db->query("SELECT * FROM tbl_sale_header WHERE date=CURDATE()");
				break;

				

				
				default:
			//	$this->db->where('date','CURDATE()');
				$query=$this->db->get("tbl_".$table);
				break;


			}
			
		
		}
		
		elseif(!empty($value) && empty($ostartdate) && empty($oenddate))
		{

			switch($table)
			{
				case  "order" :
				$query=$this->db->query("SELECT tbl_purchase.*,tbl_debt_to_supplier.supplier FROM tbl_purchase LEFT JOIN tbl_debt_to_supplier ON tbl_purchase.voucherno=tbl_debt_to_supplier.voucherno WHERE $colunm LIKE '$value%'");
				break;

				case "debt_to_supplier" : 
				$query=$this->db->query("SELECT * FROM tbl_supplier WHERE $colunm LIKE '$value%'");
				break;

				case "debt_from_customer" : 
				$query=$this->db->query("SELECT * FROM tbl_customer WHERE $colunm LIKE '$value%'");
				break;

				case "general_outcome" : 	
				$query=$this->db->query("SELECT tbl_general_outcome.*,tbl_outcome_category.title FROM tbl_general_outcome LEFT JOIN tbl_outcome_category ON tbl_general_outcome.outcome_category=tbl_outcome_category.id WHERE $colunm LIKE '$value%'");
				break;

				case "delivery":
				$query=$this->db->query("SELECT * FROM tbl_sale_header WHERE $colunm LIKE '$value%'");
				break;

				case "discount" :
				$query=$this->db->query("SELECT * FROM tbl_discount WHERE $colunm='$value'");
				break;

				case "promotion":
				$query=$this->db->query("SELECT * FROM tbl_promotion WHERE $colunm='$value'");
				break;



				case "unit" :
				

				if($this->input->post("category") !="")
				{
					$this->db->like($colunm,$value,"after");
					$this->db->where('category',urldecode($this->input->post("category")));

					$query=$this->db->order_by("product_code","DESC")->get("tbl_unit");
				
				}
				else
				{
					$query=$this->db->like($colunm,$value,"after")->order_by("product_code","ASC")->get("tbl_".$table);
				}

				break;




				case "warehouse1" : 
				$query=$this->db->like($colunm,$value,"after")->order_by("product_code","ASC")->get("tbl_warehouse1");
				break;


				case "showroom_stock" : 
				
					$this->db->select("tbl_showroom.*,tbl_showroom_stock.*");
					$this->db->join("tbl_showroom","tbl_showroom.id=tbl_showroom_stock.showroom_id");
					$this->db->like("tbl_showroom_stock.".$colunm,$value,"after");
					$this->db->order_by("tbl_showroom_stock.product_code","DESC");
					$query=$this->db->get("tbl_".$table);
				break;



				case "consinement_stock" : 
				
					$this->db->select("tbl_consinement.*,tbl_consinement_stock.*");
					$this->db->join("tbl_consinement","tbl_consinement.id=tbl_consinement_stock.consinement_id");
					$this->db->like("tbl_consinement_stock.".$colunm,$value,"after");

					$this->db->order_by("tbl_consinement_stock.product_code","DESC");
					$query=$this->db->get("tbl_".$table);
					break;



				case "subwarehouse_stock" : 
				
					$this->db->select("tbl_subwarehouse.*,tbl_subwarehouse_stock.*");
					$this->db->join("tbl_subwarehouse","tbl_subwarehouse.id=tbl_subwarehouse_stock.subwarehouse_id");
					$this->db->order_by("tbl_subwarehouse_stock.product_code","DESC");
					$this->db->like("tbl_subwarehouse_stock.".$colunm,$value,"after");
					$query=$this->db->get("tbl_".$table);
				

					$data["grab_tbl_id"]=$this->admin_model->grab_tbl_id("tbl_showroom");

				break;


				
			
				$data["subwarehouse"]=$this->admin_model->grab_subwarehouse();
				$data["lists"]=$this->db->order_by("product_code","DESC")->get("tbl_".$table);
				break;


				default:
				$this->db->like($colunm,$value,'after');
				$query=$this->db->get("tbl_".$table);
				break;


				
			}
					
		}

		
		elseif(!empty($value) && !empty($ostartdate) && empty($oenddate))
		{

			switch($table)
			{
				case  "order" :
				$query=$this->db->query("SELECT tbl_purchase.*,tbl_debt_to_supplier.supplier FROM tbl_purchase LEFT JOIN tbl_debt_to_supplier ON tbl_purchase.voucherno=tbl_debt_to_supplier.voucherno WHERE $colunm LIKE '$value%' AND date='$startdate'");
				break;

				case "debt_to_supplier" : 
				$query=$this->db->query("SELECT * FROM tbl_supplier WHERE $colunm LIKE '$value%' AND last_date='$startdate'");
				break;

				case "debt_from_customer" : 
				$query=$this->db->query("SELECT * FROM tbl_customer WHERE $colunm LIKE '$value%' AND last_date='$startdate'");
				break;

				case "general_outcome" : 	
				$query=$this->db->query("SELECT tbl_general_outcome.*,tbl_outcome_category.title FROM tbl_general_outcome LEFT JOIN tbl_outcome_category ON tbl_general_outcome.outcome_category=tbl_outcome_category.id WHERE $colunm='$value' AND date='$startdate'");
				break;

				case "delivery":
				$query=$this->db->query("SELECT * FROM tbl_sale_header WHERE $colunm LIKE '$value%' AND date='$startdate'");
				break;

				case "discount" :
				$query=$this->db->query("SELECT * FROM tbl_discount WHERE $colunm='$value'");
				break;

				case "promotion":
				$query=$this->db->query("SELECT * FROM tbl_promotion WHERE $colunm='$value' AND startdate='$startdate'");
				break;

				default:
				$query=$this->db->query("SELECT * FROM tbl_".$table." WHERE $colunm LIKE '%$value%' and date='$startdate'");
				break;

				
			}
					
		}

		elseif(!empty($value) && empty($ostartdate) && !empty($oenddate))
		{

			switch($table)
			{
				case  "order" :
				$query=$this->db->query("SELECT tbl_purchase.*,tbl_debt_to_supplier.supplier FROM tbl_purchase LEFT JOIN tbl_debt_to_supplier ON tbl_purchase.voucherno=tbl_debt_to_supplier.voucherno WHERE $colunm LIKE '$value%' AND date='$enddate'");
				break;

				case "debt_to_supplier" : 
				$query=$this->db->query("SELECT * FROM tbl_supplier WHERE $colunm LIKE '$value%' AND last_date='$enddate'");
				break;

				case "debt_from_customer" : 
				$query=$this->db->query("SELECT * FROM tbl_customer WHERE $colunm LIKE '$value%' AND last_date='$enddate'");
				break;

				case "general_outcome" : 	
				$query=$this->db->query("SELECT tbl_general_outcome.*,tbl_outcome_category.title FROM tbl_general_outcome LEFT JOIN tbl_outcome_category ON tbl_general_outcome.outcome_category=tbl_outcome_category.id WHERE $colunm='$value' AND date='$enddate'");
				break;

				case "discount" :
				$query=$this->db->query("SELECT * FROM tbl_discount WHERE $colunm='$value'");
				break;

				case "promotion":
				$query=$this->db->query("SELECT * FROM tbl_promotion WHERE $colunm='$value' AND enddate='$enddate'");
				break;

				case "delivery":
				$query=$this->db->query("SELECT * FROM tbl_sale_header WHERE $colunm LIKE '$value%' AND date='$enddate'");
				break;


				default:
				$query=$this->db->query("SELECT * FROM tbl_".$table." WHERE $colunm LIKE '%$value%' and date='$enddate'");
				break;
				
			}
		
		}

		elseif(empty($value) && !empty($ostartdate) && empty($oenddate))
		{

			switch($table)
			{
				case  "order" :
				$query=$this->db->query("SELECT tbl_purchase.*,tbl_debt_to_supplier.supplier FROM tbl_purchase LEFT JOIN tbl_debt_to_supplier ON tbl_purchase.voucherno=tbl_debt_to_supplier.voucherno WHERE date='$startdate'");
				break;

				case "debt_to_supplier" : 
				$query=$this->db->query("SELECT * FROM tbl_supplier WHERE last_date='$startdate'");
				break;

				case "debt_from_customer" : 
				$query=$this->db->query("SELECT * FROM tbl_customer WHERE last_date='$startdate'");
				break;

				case "general_outcome" : 	
				$query=$this->db->query("SELECT tbl_general_outcome.*,tbl_outcome_category.title FROM tbl_general_outcome LEFT JOIN tbl_outcome_category ON tbl_general_outcome.outcome_category=tbl_outcome_category.id WHERE date='$startdate'");
				break;

				case "discount" :
				$query=$this->db->query("SELECT * FROM tbl_discount WHERE $colunm='$value'");
				break;

				case "promotion":
				$query=$this->db->query("SELECT * FROM tbl_promotion WHERE startdate='$startdate'");
				break;

				case "delivery":
				$query=$this->db->query("SELECT * FROM tbl_sale_header WHERE  date='$startdate'");
				break;

				default:
				$query=$this->db->get("tbl_".$table,array('date'=>$startdate));
				break;
				
			}

		}



		elseif(empty($value) && empty($ostartdate) && !empty($oenddate))
		{
			switch($table)
			{
				case  "order" :
				$query=$this->db->query("SELECT tbl_purchase.*,tbl_debt_to_supplier.supplier FROM tbl_purchase LEFT JOIN tbl_debt_to_supplier ON tbl_purchase.voucherno=tbl_debt_to_supplier.voucherno WHERE date='$enddate'");
				break;

				case "debt_to_supplier" : 
				$query=$this->db->query("SELECT * FROM tbl_supplier WHERE last_date='$enddate'");
				break;

				case "debt_from_customer" : 
				$query=$this->db->query("SELECT * FROM tbl_customer WHERE last_date='$enddate'");
				break;

				case "general_outcome" : 	
				$query=$this->db->query("SELECT tbl_general_outcome.*,tbl_outcome_category.title FROM tbl_general_outcome LEFT JOIN tbl_outcome_category ON tbl_general_outcome.outcome_category=tbl_outcome_category.id WHERE date='$enddate'");
				break;

				case "discount" :
				$query=$this->db->query("SELECT * FROM tbl_discount WHERE $colunm='$value'");
				break;

				case "promotion":
				$query=$this->db->query("SELECT * FROM tbl_promotion WHERE enddate='$enddate'");
				break;

				case "delivery":
				$query=$this->db->query("SELECT * FROM tbl_sale_header WHERE date='$enddate'");
				break;

				default:
				$query=$this->db->get("tbl_".$table,array('date'=>$enddate));
				break;
				
			}

		}


		elseif(empty($value) && !empty($ostartdate) && !empty($oenddate))
		{

			switch($table)
			{
				case  "order" :
				$query=$this->db->query("SELECT tbl_purchase.*,tbl_debt_to_supplier.supplier FROM tbl_purchase LEFT JOIN tbl_debt_to_supplier ON tbl_purchase.voucherno=tbl_debt_to_supplier.voucherno WHERE date BETWEEN '$startdate' AND '$enddate'");
				break;

				case "debt_to_supplier" : 
				$query=$this->db->query("SELECT * FROM tbl_supplier WHERE last_date BETWEEN '$startdate' AND '$enddate'");
				break;

				case "debt_from_customer" : 
				$query=$this->db->query("SELECT * FROM tbl_customer WHERE last_date BETWEEN '$startdate' AND '$enddate'");
				break;

				case "general_outcome" : 	
				$query=$this->db->query("SELECT tbl_general_outcome.*,tbl_outcome_category.title FROM tbl_general_outcome LEFT JOIN tbl_outcome_category ON tbl_general_outcome.outcome_category=tbl_outcome_category.id WHERE tbl_general_outcome.date BETWEEN '$startdate' AND '$enddate'");
				break;

				case "promotion":
				$query=$this->db->query("SELECT * FROM tbl_".$table." WHERE startdate>='$startdate' AND enddate<='$enddate'");
				break;

				case "discount" :
				$query=$this->db->query("SELECT * FROM tbl_discount WHERE $colunm='$value'");
				break;

				case "delivery":
				$query=$this->db->query("SELECT * FROM tbl_sale_header WHERE date BETWEEN '$startdate' AND '$enddate'");
				break;

				default:
				$query=$this->db->query("SELECT * FROM tbl_".$table." WHERE date BETWEEN '$startdate' AND '$enddate'");
				break;
				
			}
				
		}


		elseif(!empty($value) && !empty($ostartdate) && !empty($oenddate))
		{

			switch($table)
			{
				case  "order" :
				if($colunm=='supplier')
				{
				$query=$this->db->query("SELECT tbl_purchase.*,tbl_debt_to_supplier.supplier FROM tbl_purchase LEFT JOIN tbl_debt_to_supplier ON tbl_purchase.voucherno=tbl_debt_to_supplier.voucherno WHERE tbl_debt_to_supplier.$colunm='$value' AND date BETWEEN '$startdate' AND '$enddate'");
				}
				else
				{
					$query=$this->db->query("SELECT tbl_purchase.*,tbl_debt_to_supplier.supplier FROM tbl_purchase LEFT JOIN tbl_debt_to_supplier ON tbl_purchase.voucherno=tbl_debt_to_supplier.voucherno WHERE tbl_purchase.$colunm='$value' AND date BETWEEN '$startdate' AND '$enddate'");
				}

				break;


				case "debt_to_supplier" : 
				$query=$this->db->query("SELECT * FROM tbl_supplier WHERE WHERE $colunm LIKE '$value%' ANDlast_date BETWEEN '$startdate' AND '$enddate'");
				break;

				case "debt_from_customer" : 
				$query=$this->db->query("SELECT * FROM tbl_customer WHERE WHERE $colunm LIKE '$value%' ANDlast_date BETWEEN '$startdate' AND '$enddate'");
				break;

				case "general_outcome" : 	
				$query=$this->db->query("SELECT tbl_general_outcome.*,tbl_outcome_category.title FROM tbl_general_outcome LEFT JOIN tbl_outcome_category ON tbl_general_outcome.outcome_category=tbl_outcome_category.id WHERE tbl_general_outcome.$colunm='$value' AND tbl_general_outcome.date BETWEEN '$startdate' AND '$enddate'");
				break;

				case "promotion":
				$query=$this->db->query("SELECT * FROM tbl_".$table." WHERE $colunm='$value' AND startdate>='$startdate' AND enddate<='$enddate'");
				break;

				case "discount" :
				$query=$this->db->query("SELECT * FROM tbl_discount WHERE $colunm='$value'");
				break;

				case "delivery":
				$query=$this->db->query("SELECT * FROM tbl_sale_header WHERE $colunm LIKE '$value' AND date BETWEEN '$startdate' AND '$enddate'");
				break;


				default:
				$query=$this->db->query("SELECT * FROM tbl_".$table." WHERE $colunm LIKE '$value%' AND date BETWEEN '$startdate' AND '$enddate'");
				break;
				
			}
			
		}
	//}



		if($query->num_rows()>=1)
		{
			$data["lists"]=$query;	
			$this->load->view("admin/".$table."_list",$data);
		}

		else
		{
			echo "<h3>No result found matched with your search</h3>";
		}
		
		}
	}
	
}

 ?>