<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 

class Cashier extends CI_Controller{

	var $data;

	function __construct()
	{
		parent::__construct();
		$this->load->model('cashier_model');
		$this->load->model("admin_model");

		

	
		
			

		$this->data=array(


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
			'debttosupplier'=>"Debt To Supplier Lists",
			'debtfromcustomer'=>"Debt From Customer Lists",
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
			'unittitle'=>"Unit Lists",
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

	/**/
	
	function index()
	{
/**/if(get_cookie("cashier_cookie"))
		{
					$data = $this->data;
				$form='sale_form';
			
				$data["customer"]=$this->admin_model->grab_customer();
				$data["staff"]=$this->admin_model->grab_staff();
				$data["product_codes"]=$this->db->get("tbl_unit");
				$data['main_content']=$form;
				$this->load->view("cashier/template",$data);

		}

		else
			{
				$data["message"]="Login to access this page";
				$this->load->view("login_form",$data);
			}
}
/******/

/*insert form*/
	function insert_form($form)
	{
		if(get_cookie("cashier_cookie"))
		{
		$data = $this->data;
		

		$data["unit"]=array(""=>"... select ...");
		$data["supplier"]=$this->admin_model->grab_supplier();
		$data["customer"]=$this->admin_model->grab_customer();
		$data["outcome_category"]=$this->admin_model->grab_outcome_category();
		$data["errmessage"]="";	
		
		
		if($this->uri->segment(4))
		{
			$data["main_content"]=$form."_".$this->uri->segment(4);
		} 
		else
		{	

			$data["main_content"]=$form;
			
		}


			$this->load->view("cashier/template",$data);	
}

		else
			{
				$data["message"]="Login to access this page";
				$this->load->view("login_form",$data);
			}
		
	}//


function updated_data_list($table)
	{
		
		$data = $this->data;
	
			$table=$this->uri->segment(3);
			$data["unit"]=$this->admin_model->grab_unit();
			switch($table)
			{

				case'returnlist':
				$data["lists"]=$this->db->query("SELECT * FROM tbl_debt_return WHERE date=CURDATE()");
				break;
				
				case "product_price":
				$data["lists"]=$this->db->query("SELECT tbl_product_price.* FROM tbl_product_price");
				break;

				case "purchase_return":
				$data["lists"]=$this->db->query("SELECT * FROM tbl_purchase_return_header ORDER BY voucherno DESC");
				break;

				case "sale_return":
				$data["lists"]=$this->db->query("SELECT * FROM tbl_sale_return_header ORDER BY voucherno DESC");
				break;
			
				case "debt_to_supplier" :
				$data["lists"]=$this->db->order_by("supplier_name,last_date","DESC")->get_where("tbl_supplier",array('total_debt !='=>0));
				break;

				case "debt_from_customer":			
				$data["lists"]=$this->db->order_by("customer_name,last_date","DESC")->get_where("tbl_customer",array('total_debt !='=>0,'debt_expense'=>0));
				break;

				case "income_outcome": 
				$data["totalsale"]=$this->db->query("SELECT SUM(received-refund) as total FROM tbl_sale_header WHERE date=CURDATE()")->row();
				/**/$data["totalget"]=$this->db->query("SELECT SUM(returnamount) as total FROM tbl_debt_return WHERE returntype='debt_from_customer' AND date=CURDATE()")->row();
				/**/$data["totalreqamt"]=$this->db->query("SELECT SUM(total) as total FROM tbl_debt_from_customer WHERE total<0 ")->row();
				/**/$data["retruntocustomer"]=$this->db->query("SELECT SUM(total) as total FROM tbl_debt_from_customer WHERE total>0")->row();
				
				/**/$data["reqamttosupplier"]=$this->db->query("SELECT SUM(net_total-paid_total) as total FROM tbl_debt_to_supplier")->row();
		//		$data["totaljackpot"]=$this->db->query("SELECT SUM(percentage) as total, SUM(jpchangemoney) as jpchangemoney FROM tbl_jackpot WHERE date=CURDATE()")->row();
				$data["supplierunseen"]=$this->db->query("SELECT SUM(amount) as total FROM tbl_supplier_unseen WHERE date=CURDATE()")->row();
				$data['itemchange']=$this->db->query("SELECT SUM(quantity*price) as total FROM tbl_itemchange WHERE date=CURDATE()")->row();
				$data["customerunseen"]=$this->db->query("SELECT SUM(amount) as total FROM tbl_customer_unseen WHERE date=CURDATE()")->row();
				$data["generaloutcome"]=$this->db->query("SELECT SUM(total) as total FROM tbl_general_outcome WHERE date=CURDATE()")->row();
				$data["promotion"]=$this->db->query("SELECT SUM(targetamount) as total FROM tbl_promotion WHERE startdate=CURDATE()")->row();
		//		$data["totaljackpotchange"]=$this->db->query("SELECT SUM(total) as total FROM tbl_jackpotchange WHERE date=CURDATE()")->row();
				$data["totaldebt"]=$this->db->query("SELECT SUM(paid_total) as total FROM tbl_debt_to_supplier WHERE paid_date=CURDATE()")->row();
			//	$data["totaldamage"]=$this->db->query("SELECT SUM(total) as total FROM tbl_damage WHERE date=CURDATE()")->row();
	//			$data["customerjackpot"]=$this->db->query("SELECT SUM(percentage) as total FROM tbl_customer_jackpot WHERE date=CURDATE()")->row();
				$data["totaldamage"]=$this->db->query("SELECT SUM(total) as total FROM tbl_damage WHERE date=CURDATE()")->row();
				$data["totalstock"]=$this->db->query("SELECT SUM((price/smallitemcount)*total_smallitemcount) as total FROM tbl_shop_stock")->row();
				$data["totaldeposit"]=$this->db->query("SELECT amount as total FROM tbl_deposit WHERE year='".date('Y')."'")->row();
		//		$data["alljackpot"]=$this->db->query("SELECT total FROM tbl_all_jackpot")->row();
				break;


				case 'sale_profit' :
				$data['lists']=$this->db->query("SELECT DISTINCT (tbl_sale.product_code), SUM(tbl_sale.total) as total, sum(tbl_sale.item_count) as totalitem_count,tbl_sale.date,tbl_sale.product_name,tbl_product_price.average_smallitem_price,tbl_product_price.purchase_price FROM tbl_sale LEFT JOIN tbl_product_price ON tbl_sale.product_code=tbl_product_price.product_code WHERE tbl_sale.date=CURDATE() GROUP BY tbl_sale.product_code,tbl_product_price.product_code, tbl_sale.date ORDER BY tbl_sale.date");
				break;

				case 'damage':
				$data["lists"]=$this->db->query("SELECT * FROM tbl_damage WHERE date=CURDATE()");
				break;

				case 'customer':
				$data["lists"]=$this->db->query("SELECT * FROM tbl_customer ORDER BY id DESC");
				break;

				case 'supplier':
				$data["lists"]=$this->db->query("SELECT * FROM tbl_supplier ORDER BY id DESC");
				break;

				case "general_outcome":
				$data["lists"]=$this->db->query("SELECT tbl_general_outcome.*,tbl_outcome_category.title FROM tbl_general_outcome LEFT JOIN tbl_outcome_category ON tbl_general_outcome.outcome_category=tbl_outcome_category.id");
				break;

				case "sale" :				
				$data["lists"]=$this->db->query("SELECT * FROM tbl_sale_header WHERE date=CURDATE() ORDER BY voucherno DESC");
				break;

				case "jackpotchange" :
				$data["lists"]=$this->db->query("select customer,amount,sum(quantity) as quantity,sum(total) as total from tbl_jackpotchange WHERE status=0 group by customer, amount");
				break;

				case "sale_order" :				
				$data["lists"]=$this->db->query("SELECT * FROM tbl_sale_order_header WHERE status=0 ORDER BY voucherno DESC");
				break;

				case "purchase_order" :				
				$data["lists"]=$this->db->query("SELECT * FROM tbl_purchase_order_header WHERE status=0 ORDER BY voucherno DESC");
				break;


				case "total":
				$data["lists"]=$this->db->query("SELECT total FROM tbl_total")->row();
				break;

				case "bysaleamount":
				$data['lists']=$this->db->query("SELECT  SUM(totalamount) as total,customer_name FROM `tbl_sale_header` GROUP BY customer_name ORDER by total desc");
				break;

				case "byqtyamount":
				//$data['lists']=$this->db->query("SELECT SUM(item_count)as total,product_name,product_code,date FROM `tbl_sale` WHERE customer !='' AND date=CURDATE() GROUP BY product_name,unit ORDER by total desc");
				$data['lists']=$this->db->query("SELECT SUM(item_count)as total,product_name,product_code,date FROM `tbl_sale` WHERE date=CURDATE() GROUP BY product_name,unit ORDER by total desc");
				
				break;

				case "discount" :
				$data["lists"]=$this->db->query("SELECT * FROM tbl_discount");
				break;

				case "stock_alert":
				$data["lists"]=$this->admin_model->check_stock_remind();
				break;

					case "sale_delivery":
				$data["lists"]=$this->db->query("SELECT * FROM tbl_sale_deliver_header WHERE date=CURDATE() ORDER BY voucherno ASC");
				break;


				case "purchase_delivery":
				$data["lists"]=$this->db->query("SELECT * FROM tbl_purchase_deliver_header WHERE date=CURDATE() ORDER BY voucherno ASC");
				break;

				case "shop_stock_alert":
				$data["lists"]=$this->admin_model->check_shop_stock_remind();
				break;

				case "debt_alert":
				$data["lists"]=$this->admin_model->check_debt_alert();
				break;

				case "purchase":
				$data["lists"]=$this->db->query("SELECT * FROM tbl_purchase_header ORDER BY voucherno DESC ");
				break;
				

				case "unit" :
				

				if($this->uri->segment(4))
				{
					$data["lists"]=$this->db->order_by("product_code","DESC")->get_where("tbl_unit",array('category'=>urldecode($this->uri->segment(4))));
				}
				else
				{
					$data["lists"]=$this->db->order_by("product_code","DESC")->get("tbl_".$table);
				}

				$data["categories"]=$this->db->query("SELECT DISTINCT category FROM tbl_unit order by category ASC");
				break;


				case "shop_stock" : 
				if($this->uri->segment(4))
				{
					$data["lists"]=$this->db->order_by("product_code","DESC")->get_where("tbl_shop_stock",array('category'=>urldecode($this->uri->segment(4))));
				}
				else
				{
					$data["lists"]=$this->db->order_by("product_code","DESC")->get("tbl_".$table);
				}

				$data["categories"]=$this->db->query("SELECT DISTINCT category FROM tbl_shop_stock order by category ASC");
				break;



				case "warehouse1" : 
				if($this->uri->segment(4))
				{
					$data["lists"]=$this->db->order_by("product_code","DESC")->get_where("tbl_warehouse1",array('category'=>urldecode($this->uri->segment(4))));
				}
				else
				{
					$data["lists"]=$this->db->order_by("product_code","DESC")->get("tbl_".$table);
				}

				$data["categories"]=$this->db->query("SELECT DISTINCT category FROM tbl_warehouse1 order by category ASC");
				break;


				case "warehouse2" : 
				if($this->uri->segment(4))
				{
					$data["lists"]=$this->db->order_by("product_code","DESC")->get_where("tbl_warehouse2",array('category'=>urldecode($this->uri->segment(4))));
				}
				else
				{
					$data["lists"]=$this->db->order_by("product_code","DESC")->get("tbl_".$table);
				}

				$data["categories"]=$this->db->query("SELECT DISTINCT category FROM tbl_warehouse2 order by category ASC");
				break;



				default:
				$data["lists"]=$this->db->get("tbl_".$table);
				break;
			
			}			

			//$data["main_content"]=$table;
			$this->load->view("admin/".$table,$data);		
		
	}


	/******/

/*Search Form*/

	
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
					$query=$this->db->like($colunm,$value,"after")->order_by("product_code","DESC")->get("tbl_".$table);
				}

		//		$data["categories"]=$this->db->query("SELECT DISTINCT category FROM tbl_unit order by category ASC");
				break;


				case "shop_stock" : 
				if($this->input->post("category") !="")
				{
					$this->db->like($colunm,$value,"after");
					$this->db->where('category',urldecode($this->input->post("category")));

					$query=$this->db->order_by("product_code","DESC")->get("tbl_unit");
				
				}
				else
				{
					$query=$this->db->like($colunm,$value,"after")->order_by("product_code","DESC")->get("tbl_".$table);
				}

		//		$data["categories"]=$this->db->query("SELECT DISTINCT category FROM tbl_unit order by category ASC");
				break;


				case "warehouse1" : 
				if($this->input->post("category") !="")
				{
					$this->db->like($colunm,$value,"after");
					$this->db->where('category',urldecode($this->input->post("category")));

					$query=$this->db->order_by("product_code","DESC")->get("tbl_unit");
				
				}
				else
				{
					$query=$this->db->like($colunm,$value,"after")->order_by("product_code","DESC")->get("tbl_".$table);
				}

		//		$data["categories"]=$this->db->query("SELECT DISTINCT category FROM tbl_unit order by category ASC");
				break;

				case "warehouse2" : 
				if($this->input->post("category") !="")
				{
					$this->db->like($colunm,$value,"after");
					$this->db->where('category',urldecode($this->input->post("category")));

					$query=$this->db->order_by("product_code","DESC")->get("tbl_unit");
				
				}
				else
				{
					$query=$this->db->like($colunm,$value,"after")->order_by("product_code","DESC")->get("tbl_".$table);
				}

		//		$data["categories"]=$this->db->query("SELECT DISTINCT category FROM tbl_unit order by category ASC");
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
			$this->load->view("cashier/".$table."_list",$data);
		}

		else
		{
			echo "<h3>No result found matched with your search</h3>";
		}
		
		}
	}

/******/

function print_voc()
{
	//$data["main_content"]="print_voc";
	$this->load->view("print_voc");
}

	/*logout*/
	function logout()
	{
				
				// $data = $this->data;
				$array_items=array("CashierUser"=>"","CashierPass"=>"");
				redirect('site');
				exit;
	}//

	/*fetch product data*/
	function grabdata()
	{

	
	/*	$pcode=$this->uri->segment(3);
				$query=$this->db->query("SELECT * FROM tbl_shop_stock where product_code='$pcode'");

				if($query->num_rows()==1)
				{
				$data=$query->row();
				$this->output->set_Content_type('application/json')->set_output(json_encode($data));
				}
*/

		ob_clean();
				
			
				$xml = new MY_Xml_writer;
				$xml->setRootName('items');
				$xml->initiate();
				
				
				$pcode=$this->uri->segment(3);
			//	$query=$this->db->query("SELECT * FROM tbl_shop_stock LEFT JOIN tbl_product_price ON tbl_shop_stock.product_code=tbl_product_price.product_code where tbl_shop_stock.product_code='$pcode' AND tbl_product_price.iscurrent=1");
				/*$this->db->join("tbl_discount","tbl_shop_stock.product_code=tbl_discount.product_code","LEFT");
				$this->db->where("tbl_shop_stock.product_code",$pcode);
				$this->db->where("tbl_discount.iscurrent",1);*/
				$this->db->where("tbl_shop_stock.product_code",$pcode);
				$query=$this->db->get("tbl_shop_stock");

				if($query->num_rows()==1)
				{
				$row=$query->row();
		
				$xml->startBranch('data');		
				$xml->addNode('product_name', $row->product_name);	
				$xml->addNode('quantity',$row->quantity);	
				$xml->addNode('unit', $row->unit);				
				$xml->addNode('price', $row->price);
				$xml->addNode('discount', $row->discount);
				$xml->addNode('item_count', $row->smallitemcount);
				$xml->endBranch();		
				
				
				}

					
				
				
				
				$xml->getXml(true);
				/*else
				{
					echo $this->db->last_query();
				}*/
		
						
	}


	/**/

	function checkqty()
	{
		$pcode=$this->input->post("pcode");
		$unit=$this->input->post('unit');
		$qu=$this->input->post("qu");

		$query=$this->db->query("SELECT * FROM tbl_shop_stock WHERE product_code='$pcode'");
		if($query->num_rows() >1)
		{

			if($unit=="PS")
			{
				$psrow=$this->db->query("SELECT quantity FROM tbl_shop_stock WHERE product_code='$pcode' and unit='$unit'")->row();
				echo $psrow->quantity;
			}

			else
			{
				$unitcheck=$this->db->query("SELECT quantity FROM tbl_shop_stock WHERE product_code='$pcode' and unit='$unit'");
				if($unitcheck->num_rows() <1)
				{
					$unitquery=$this->db->query("SELECT total_smallitemcount FROM `tbl_shop_stock` WHERE product_code='$pcode' ORDER BY smallitemcount DESC LIMIT 1")->row();	
					$mqu1=$unitquery->total_smallitemcount;
					if($mqu1<$qu)
					{
						$psrow=$this->db->query("SELECT total_smallitemcount FROM tbl_shop_stock WHERE product_code='$pcode' and unit='PS'")->row();
						echo $mqu1+$psrow->total_smallitemcount;
					}
					else
					{
						echo $mqu1;
					}
				}
				else
				{
					$row=$unitcheck->row();
					echo $row->quantity;
				}

				
			}
		

		}

		else if($query->num_rows()==1)
		{
			$unitcheck=$this->db->query("SELECT quantity FROM tbl_shop_stock WHERE product_code='$pcode' and unit='$unit'");
				if($unitcheck->num_rows() <1)
				{
					$unitquery=$this->db->query("SELECT total_smallitemcount FROM `tbl_shop_stock` WHERE product_code='$pcode' ORDER BY smallitemcount DESC LIMIT 1")->row();	
					echo $unitquery->total_smallitemcount;
				}
				else
				{
					$row=$unitcheck->row();
					echo $row->quantity;
				}

		}

		else
		{
			echo 0;
		}		

	}




	/**/

	function grabprice()
	{
			
			ob_clean();
				
			
				$xml = new MY_Xml_writer;
				$xml->setRootName('items');
				$xml->initiate();
				
				
				$pcode=$this->input->post('pcode');
				$unit=$this->input->post('unit');
				
				$query=$this->db->query("SELECT price,smallest_itemcount,discount FROM tbl_unit WHERE tbl_unit.product_code='$pcode' AND tbl_unit.unit='$unit'");
				
				if($query->num_rows()>=1)
				{
				$row=$query->row();
		
				$xml->startBranch('data');									
				$xml->addNode('price', $row->price);				
				$xml->addNode('item_count', $row->smallest_itemcount);
				$xml->addNode('discount',$row->discount);
				$xml->endBranch();					
				
				}	
				
				$xml->getXml(true);
	}

	//////////////////////////////////////////

	

	function check_code($pcode)
	{
		$query=$this->db->get_where("tbl_shop_stock",array('product_code'=>$pcode));
		if($query->num_rows()==0)
		{
			echo "There is no product associated with that code no ".$pcode;
		}

	}


	/*insert sale data */




	/**/
	function viewdetails_deliver()
	{
			$data = $this->data;
			$debttype=$this->uri->segment(3);
			$voucherno=$this->uri->segment(4);
			$amount=$this->uri->segment(5);
			
				
			
			switch($debttype)
			{
				case 'pdeliver':
				$data["supplier"]=$this->admin_model->grab_supplier();
				$data["lists"]=$this->db->query("SELECT tbl_purchase_order.*,tbl_purchase_order_header.*,tbl_supplier.total_debt FROM tbl_purchase_order LEFT JOIN tbl_purchase_order_header ON tbl_purchase_order.voucherno=tbl_purchase_order_header.voucherno JOIN tbl_supplier ON tbl_purchase_order_header.supplier_id=tbl_supplier.id WHERE tbl_purchase_order.voucherno='$voucherno' AND tbl_purchase_order.requirequantity !=0");
				break;

				case 'sdeliver':
				$data["staff"]=$this->admin_model->grab_staff();
				$data["customer"]=$this->admin_model->grab_customer();
				$data["lists"]=$this->db->query("SELECT tbl_sale_order.*,tbl_sale_order_header.*,tbl_customer.total_debt FROM tbl_sale_order LEFT JOIN tbl_sale_order_header ON tbl_sale_order.voucherno=tbl_sale_order_header.voucherno JOIN tbl_customer ON tbl_sale_order_header.customer_id=tbl_customer.id WHERE tbl_sale_order.voucherno='$voucherno'  AND tbl_sale_order.requirequantity !=0");
				break;

				
			}
			
			$data["main_content"]=$debttype."_details";
			$this->load->view("cashier/template",$data);
	}



	/**/

		function viewdetails()
		{
			/*$debttype=$this->input->post("debttype");
			$voucherno=$this->input->post("voucherno");*/
			$data = $this->data;
			$debttype=$this->uri->segment(3);
			$voucherno=$this->uri->segment(4);
			$amount=$this->uri->segment(5);

			switch($debttype)
			{
				/*case 'debt_to_supplier':
				$data["lists"]=$this->db->query("SELECT tbl_purchase.*, tbl_purchase_header.advance,tbl_purchase_header.balance,tbl_purchase_header.totaldiscount FROM tbl_purchase  LEFT JOIN tbl_purchase_header ON tbl_purchase.voucherno=tbl_purchase_header.voucherno WHERE tbl_purchase.voucherno='$voucherno'");
				break;*/

				case 'preturnvoucher':
				$data["lists"]=$this->db->query("SELECT tbl_purchase_return.*, tbl_purchase_return_header.* FROM tbl_purchase_return  LEFT JOIN tbl_purchase_return_header ON tbl_purchase_return.voucherno=tbl_purchase_return_header.voucherno WHERE tbl_purchase_return.voucherno='$voucherno'");
				break;

				case 'sreturnvoucher':
				$data["lists"]=$this->db->query("SELECT tbl_sale_return.*, tbl_sale_return_header.* FROM tbl_sale_return  LEFT JOIN tbl_sale_return_header ON tbl_sale_return.voucherno=tbl_sale_return_header.voucherno WHERE tbl_sale_return.voucherno='$voucherno'");
				break;



				case 'debt_to_supplier':
				$data["lists"]=$this->db->query("SELECT * FROM tbl_purchase_header WHERE supplier_id='$voucherno' AND balance !=0");
			//	$data["lists"]=$this->db->query("SELECT tbl_sale.*,tbl_sale_header.received,tbl_sale_header.jackpot,tbl_sale_header.exceedamount FROM tbl_sale LEFT JOIN tbl_sale_header ON tbl_sale.voucherno=tbl_sale_header.voucherno WHERE tbl_sale.voucherno='$voucherno'");
				break;

				case 'debt_from_customer':
				$data["lists"]=$this->db->query("SELECT * FROM tbl_sale_header WHERE customer_id='$voucherno'");
			//	$data["lists"]=$this->db->query("SELECT tbl_sale.*,tbl_sale_header.received,tbl_sale_header.jackpot,tbl_sale_header.exceedamount FROM tbl_sale LEFT JOIN tbl_sale_header ON tbl_sale.voucherno=tbl_sale_header.voucherno WHERE tbl_sale.voucherno='$voucherno'");
				break;

				case 'porder':
				$data["lists"]=$this->db->query("SELECT tbl_purchase_order.*,tbl_purchase_order_header.netamounttosupplier,tbl_purchase_order_header.advance FROM tbl_purchase_order LEFT JOIN tbl_purchase_order_header ON tbl_purchase_order.voucherno=tbl_purchase_order_header.voucherno WHERE tbl_purchase_order.voucherno='$voucherno'");
				break;

				case 'sorder':
				$data["lists"]=$this->db->query("SELECT tbl_sale_order.*,tbl_sale_order_header.netamount,tbl_sale_order_header.advance FROM tbl_sale_order LEFT JOIN tbl_sale_order_header ON tbl_sale_order.voucherno=tbl_sale_order_header.voucherno WHERE tbl_sale_order.voucherno='$voucherno'");
				break;

				


				case 'voucher':
				$data["lists"]=$this->db->query("SELECT tbl_sale.*,tbl_sale_header.* FROM tbl_sale LEFT JOIN tbl_sale_header ON tbl_sale.voucherno=tbl_sale_header.voucherno WHERE tbl_sale.voucherno='$voucherno'");
				break;

				case 'pvoucher':
				$data["lists"]=$this->db->query("SELECT tbl_purchase.*,tbl_purchase_header.nettotal,tbl_purchase_header.received,tbl_purchase_header.balance FROM tbl_purchase LEFT JOIN tbl_purchase_header ON tbl_purchase.voucherno=tbl_purchase_header.voucherno WHERE tbl_purchase.voucherno='$voucherno'");
				break;

				case 'debt_voucher':
				$data["lists"]=$this->db->query("SELECT tbl_sale.*,tbl_sale_header.received,tbl_sale_header.jackpot,tbl_sale_header.exceedamount,tbl_sale_header.nettotal,tbl_sale_header.totaldebt,tbl_sale_header.deliveryfees FROM tbl_sale LEFT JOIN tbl_sale_header ON tbl_sale.voucherno=tbl_sale_header.voucherno WHERE tbl_sale.voucherno='$voucherno'");
				break;

				case 'jackpotchange':
				$data["lists"]=$this->db->query("SELECT tbl_jackpotchange.* FROM tbl_jackpotchange WHERE tbl_jackpotchange.customer='".base64_decode($voucherno)."' AND amount='$amount'");
				break;

				case 'byqtyamount' :
				$data['lists']=$this->db->query("select customer,product_name,date,unit,SUM(item_count) as total from tbl_sale where product_code='$voucherno' AND date='$amount' GROUP BY customer ORDER BY total DESC");
			
			}
			
			$this->load->view("cashier/".$debttype."_details",$data);
		}


	/**/

		function viewreturns()
		{
			/*$debttype=$this->input->post("debttype");
			$voucherno=$this->input->post("voucherno");*/
			$data = $this->data;
			$debttype=$this->uri->segment(3);
			$voucherno=$this->uri->segment(4);

			if($debttype=="supplier_debt_returns")
			{
				$data["lists"]=$this->db->query("SELECT tbl_supplier_debt_return.* FROM tbl_supplier_debt_return WHERE tbl_supplier_debt_return.supplier_id='$voucherno'  ORDER BY date DESC");
			}
			

			elseif($debttype=="customer_debt_returns")
			{
				$data["lists"]=$this->db->query("SELECT tbl_customer_debt_return.* FROM tbl_customer_debt_return WHERE tbl_customer_debt_return.customer_id='$voucherno'  ORDER BY date DESC");
			}

			$this->load->view("cashier/".$debttype,$data);
		}





/*Check Debt*/

	function check_debt()
	{
					 
				$name=explode("#", $this->input->post("name"));
				//print_r($name);

				$type=$this->input->post("type");
				$table="tbl_".$type;
			 if($name[0] !="")
				{					

				ob_clean();				
			
				$xml = new MY_Xml_writer;
				$xml->setRootName('items');
				$xml->initiate();	

				$query=$this->db->query("SELECT total_debt as totaldebt FROM $table WHERE id=$name[1] ORDER BY date DESC");
				/*echo $this->db->last_query();
				if($query->num_rows()==1)
				{*/
				
				$row=$query->row();		
				$xml->startBranch('data');
				$xml->addNode('totaldebt', $row->totaldebt);				
				$xml->endBranch();		
				
				/*
				}	
				else
				{
				$xml->startBranch('data');
				$xml->addNode('totaldebt', 0);				
				$xml->endBranch();	
				}
				*/
				$xml->getXml(true);		

		}
	}

	
/******/



function delete()
	{	
	
			$id=$this->uri->segment(5);
			$table=$this->uri->segment(3);	
			$pageno=$this->uri->segment(4);	
			if($table=="purchase")
			{
				$row=$this->db->query("SELECT total,voucherno FROM tbl_purchase WHERE id='$id'")->row();
				$total=$row->total;
				$voucherno=$row->voucherno;
				$this->db->query("UPDATE tbl_debt_to_supplier SET original_total=original_total-'$total', net_total=net_total-'$total' WHERE voucherno='$voucherno'");
			}

			if($table=="deposit")
			{
				$query=$this->db->delete('tbl_'.$table,array('year'=>$id));
				$this->delete_left_data_list($table);
			}


			if($table=="sale")
			{
					
					$row=$this->db->get_where("tbl_sale",array('id'=>$id))->row();
					$voucherno=$row->voucherno;
					$product_code=$row->product_code;
					$old_unit=$row->unit;
					$old_quantity=$row->quantity;
					$old_price=$row->price;
					$old_total=$row->total;	
					$old_item_count=$row->item_count;
					$nettotal=$total;

					/*$new_product_code=$row->product_code;
					$new_product_name=$row->product_name;
					$new_unit=$row->unit;
					$new_quantity=$row->quantity;
					$new_price=$row->price;
					$new_item_count=$row->item_count;
					$new_discount=$row->discount;
					$new_total=$row->netamount;
					$nettotal=$old_total-$new_total;*/

					if($old_unit=="PS")
					{
						$updqry=$this->db->query("UPDATE tbl_shop_stock SET quantity=quantity+'$old_quantity',total_smallitemcount=total_smallitemcount+($old_quantity*smallitemcount) WHERE product_code='$old_product_code' AND unit='PS'") or die(mysql_error());
					}								
					
					else
					{
						$updqry=$this->db->query("UPDATE tbl_shop_stock SET quantity=quantity+'$old_quantity',total_smallitemcount=total_smallitemcount+($old_quantity*smallitemcount) WHERE product_code='$old_product_code' AND unit !='PS'") or die(mysql_error());
					
					}


					$query=$this->db->query("UPDATE tbl_sale_header SET totalamount=totalamount-('$nettotal'), nettotal=nettotal-('$nettotal'), received=received-('$nettotal') WHERE voucherno='$voucherno'");
			
				}
			
			$query=$this->db->delete('tbl_'.$table,array('id'=>$id));
			$this->delete_left_data_list($table);
		

	}//


/**/
function data_list($table)
	{
		if(get_cookie("cashier_cookie"))
		{
		
		$data = $this->data;
		
			$table=$this->uri->segment(3);
			$data["unit"]=$this->admin_model->grab_unit();
			switch($table)
			{

				case'customer_returnlist':
				$data["lists"]=$this->db->query("SELECT * FROM tbl_customer_debt_return WHERE date=CURDATE()");
				break;
				
				case "product_price":
				$data["lists"]=$this->db->query("SELECT tbl_product_price.* FROM tbl_product_price");
				break;

			
				case "debt_to_supplier" :
				$data["lists"]=$this->db->order_by("supplier_name,last_date","DESC")->get_where("tbl_supplier",array('total_debt !='=>0));
				break;

				case "debt_from_customer":			
				$data["lists"]=$this->db->order_by("customer_name,last_date","DESC")->get_where("tbl_customer",array('total_debt !='=>0,'debt_expense'=>0));
				break;

				case "income_outcome": 
				$data["totalsale"]=$this->db->query("SELECT SUM(totalamount) as total FROM tbl_sale_header ")->row();
				/**/$data["totalsalereturn"]=$this->db->query("SELECT SUM(nettotal) as total FROM tbl_sale_return_header ")->row();
				$data["totalpurchasereturn"]=$this->db->query("SELECT SUM(nettotal) as total FROM tbl_purchase_return_header ")->row();
				$data["totalpurchase"]=$this->db->query("SELECT SUM(total) as total FROM tbl_purchase  ")->row();
				$data["totalsalereturn"]=$this->db->query("SELECT SUM(total) as total FROM tbl_sale_return ")->row();
				
				$data["deliverycharges"]=$this->db->query("SELECT SUM(deliveryfees) as total FROM tbl_sale_header")->row();
				$data["totalgrossprofit"]=$this->db->query("SELECT SUM(total) as sale_total, SUM(average_purchase_price) as total_purchase FROM tbl_sale JOIN tbl_product_price ON tbl_sale.product_code=tbl_product_price.product_code ")->row();
				$data["deliverycost"]=$this->db->query("SELECT SUM(deliveryfees) as total FROM tbl_sale_header ")->row();
				//$data['itemchange']=$this->db->query("SELECT SUM(quantity*price) as total FROM tbl_itemchange ")->row();
				$data["totalstock"]=$this->db->query("SELECT SUM(quantity) as total FROM tbl_shop_stock ")->row();
				$data["totalgeneraloutcome"]=$this->db->query("SELECT SUM(total) as total FROM tbl_general_outcome ")->row();
				$data["generalincome"]=$this->db->query("SELECT SUM(total) as total FROM tbl_general_income")->row();
				////$data["totaljackpotchange"]=$this->db->query("SELECT SUM(total) as total FROM tbl_jackpotchange ")->row();
				$data["debtexpense"]=$this->db->query("SELECT SUM(total) as total FROM tbl_debt_expense WHERE date=CURDATE()")->row();
			//	$data["totaldamage"]=$this->db->query("SELECT SUM(total) as total FROM tbl_damage ")->row();
			////	$data["customerjackpot"]=$this->db->query("SELECT SUM(percentage) as total FROM tbl_customer_jackpot ")->row();
				$data["totaldamage_shop"]=$this->db->query("SELECT SUM(total) as total FROM tbl_damage_shop ")->row();
			//	$data["totaldamage_warehouse1"]=$this->db->query("SELECT SUM(total) as total FROM tbl_damage_warehouse1 WHERE date=CURDATE()")->row();
				//$data["totaldamage_warehouse2"]=$this->db->query("SELECT SUM(total) as total FROM tbl_damage_warehouse2 WHERE date=CURDATE()")->row();
				break;


				case "daily_income_outcome" :
				$data["totalsale"]=$this->db->query("SELECT SUM(received) as total FROM tbl_sale_header WHERE date=CURDATE()")->row();
				$data["generalincome"]=$this->db->query("SELECT SUM(total) as total FROM tbl_general_income WHERE date=CURDATE()")->row();
				$data["totalgeneraloutcome"]=$this->db->query("SELECT SUM(total) as total FROM tbl_general_outcome WHERE date=CURDATE()")->row();
				$data["deliverycost"]=$this->db->query("SELECT SUM(deliveryfees) as total FROM tbl_sale_header WHERE date=CURDATE()")->row();
				$data["totalpurchase"]=$this->db->query("SELECT SUM(total) as total FROM tbl_purchase WHERE date=CURDATE() ")->row();

				break;
				

				$data["totalstock"]=$this->db->query("SELECT SUM((price/smallitemcount)*total_smallitemcount) as total FROM tbl_shop_stock")->row();
			//	$data["totaldeposit"]=$this->db->query("SELECT amount as total FROM tbl_deposit WHERE year='".date('Y')."'")->row();
			////	$data["alljackpot"]=$this->db->query("SELECT total FROM tbl_all_jackpot")->row();
				break;


				case 'sale_profit' :
				//$data["lists"]=$this->db->query("SELECT DISTINCT(tbl_sale.product_code), SUM(tbal_sale.total) as total");
				$data['lists']=$this->db->query("SELECT DISTINCT (tbl_sale.product_code), SUM(tbl_sale.total) as total, sum(tbl_sale.item_count) as totalitem_count,tbl_sale.date,tbl_sale.product_name,tbl_product_price.average_smallitem_price,tbl_product_price.purchase_price FROM tbl_sale LEFT JOIN tbl_product_price ON tbl_sale.product_code=tbl_product_price.product_code WHERE tbl_sale.date=CURDATE() GROUP BY tbl_sale.product_code,tbl_product_price.product_code, tbl_sale.date ORDER BY tbl_sale.date");
				break;

				case 'damage':
				$data["lists"]=$this->db->query("SELECT * FROM tbl_damage WHERE date=CURDATE()");
				break;

				case "general_outcome":
				$data["lists"]=$this->db->query("SELECT tbl_general_outcome.*,tbl_outcome_category.title FROM tbl_general_outcome LEFT JOIN tbl_outcome_category ON tbl_general_outcome.outcome_category=tbl_outcome_category.id");
				break;

				case "sale" :				
				$data["lists"]=$this->db->query("SELECT * FROM tbl_sale_header WHERE date=CURDATE() ORDER BY voucherno DESC");
				break;

				case "jackpotchange" :
				$data["lists"]=$this->db->query("select customer,amount,sum(quantity) as quantity,sum(total) as total from tbl_jackpotchange WHERE status=0 group by customer, amount");
				break;

				case "sale_order" :				
				$data["lists"]=$this->db->query("SELECT * FROM tbl_sale_order_header WHERE status=0 ORDER BY voucherno DESC");
				break;

				case "purchase_order" :				
				$data["lists"]=$this->db->query("SELECT * FROM tbl_purchase_order_header WHERE status=0 ORDER BY voucherno DESC");
				break;

				case "purchase_return":
				$data["lists"]=$this->db->query("SELECT * FROM tbl_purchase_return_header ORDER BY voucherno DESC");
				break;

				case "sale_return":
				$data["lists"]=$this->db->query("SELECT * FROM tbl_sale_return_header ORDER BY voucherno DESC");
				break;

				case "total":
				$data["lists"]=$this->db->query("SELECT total FROM tbl_total")->row();
				break;

				case "bysaleamount":
				$data['lists']=$this->db->query("SELECT  SUM(totalamount) as total,customer_name FROM `tbl_sale_header` GROUP BY customer_name ORDER by total desc");
				break;

				case "byqtyamount":
				//$data['lists']=$this->db->query("SELECT SUM(item_count)as total,product_name,product_code,date FROM `tbl_sale` WHERE customer !='' AND date=CURDATE() GROUP BY product_name,unit ORDER by total desc");
				$data['lists']=$this->db->query("SELECT SUM(item_count)as total,product_name,product_code,date FROM `tbl_sale` WHERE date=CURDATE() GROUP BY product_name,unit ORDER by total desc");
				
				break;

				case "discount" :
				$data["lists"]=$this->db->query("SELECT * FROM tbl_discount");
				break;

				case "stock_alert":
				$data["lists"]=$this->admin_model->check_stock_remind();
				break;

				case "shop_stock_alert":
				$data["lists"]=$this->admin_model->check_shop_stock_remind();
				break;

				

				case "debt_alert":
				$data["lists"]=$this->admin_model->check_debt_alert();
				break;

				case "sale_delivery":
				$data["lists"]=$this->db->query("SELECT * FROM tbl_sale_deliver_header ORDER BY voucherno ASC");
				break;


				case "purchase_delivery":
				$data["lists"]=$this->db->query("SELECT * FROM tbl_purchase_deliver_header ORDER By voucherno DESC ");
				break;

				/*case "unit":
				$data["lists"]=$this->db->query("SELECT * FROM tbl_unit order by product_code");
				break;*/

				case "purchase":
				$data["lists"]=$this->db->query("SELECT * FROM tbl_purchase_header WHERE delivery=0 ORDER By voucherno DESC ");
				break;


				case "unit" :
				

				if($this->uri->segment(4))
				{
					$data["lists"]=$this->db->order_by("product_code","ASC")->get_where("tbl_unit",array('category'=>urldecode($this->uri->segment(4))));
				}
				else
				{
					$data["lists"]=$this->db->order_by("product_code","ASC")->get("tbl_".$table);
				}

				$data["categories"]=$this->db->query("SELECT DISTINCT category FROM tbl_unit order by category ASC");
				break;


				case "shop_stock" : 
				if($this->uri->segment(4))
				{
					$data["lists"]=$this->db->order_by("product_code","ASC")->get_where("tbl_shop_stock",array('category'=>urldecode($this->uri->segment(4))));
				}
				else
				{
					$data["lists"]=$this->db->order_by("product_code","ASC")->get("tbl_".$table);
				}

				$data["categories"]=$this->db->query("SELECT DISTINCT category FROM tbl_shop_stock order by category ASC");
				break;



				case "warehouse1" : 
				if($this->uri->segment(4))
				{
					$data["lists"]=$this->db->order_by("product_code","ASC")->get_where("tbl_warehouse1",array('category'=>urldecode($this->uri->segment(4))));
				}
				else
				{
					$data["lists"]=$this->db->order_by("product_code","ASC")->get("tbl_".$table);
				}

				$data["categories"]=$this->db->query("SELECT DISTINCT category FROM tbl_warehouse1 order by category ASC");
				break;


				case "warehouse2" : 
				if($this->uri->segment(4))
				{
					$data["lists"]=$this->db->order_by("product_code","ASC")->get_where("tbl_warehouse2",array('category'=>urldecode($this->uri->segment(4))));
				}
				else
				{
					$data["lists"]=$this->db->order_by("product_code","ASC")->get("tbl_".$table);
				}

				$data["categories"]=$this->db->query("SELECT DISTINCT category FROM tbl_warehouse2 order by category ASC");
				break;



				default:
				$data["lists"]=$this->db->order_by("id","DESC")->get("tbl_".$table);
				break;
			
			}			

			$data["main_content"]=$table;
			$this->load->view("cashier/template",$data);		
		}
		else
		{
			redirect("site");
		}
	}



	/*Left Over list after deleted*/

	function delete_left_data_list($table)
	{
		
		$data = $this->data;
		
			$table=$this->uri->segment(3);
			//$data['main_content']=$table;
			//$data["lists"]=$this->admin_model->data_list($table);
			switch($table)
			{
				
				case "product_price":
				$data["lists"]=$this->db->query("SELECT tbl_product_price.*,tbl_shop_stock.product_name FROM tbl_product_price LEFT JOIN tbl_shop_stock ON tbl_product_price.product_code=tbl_shop_stock.product_code");
				break;
			
				case "debt_to_supplier" :
				//$data["lists"]=$this->db->query("SELECT tbl_purchase_header.*,tbl_supplier.supplier_name FROM tbl_purchase_header LEFT JOIN tbl_supplier ON tbl_purchase_header.supplier_id=tbl_supplier.id WHERE tbl_purchase_header.requiredamount>0");
				$data["lists"]=$this->db->get_where("tbl_purchase_header",array('requiredamount >'=>0));
				break;

				case "debt_from_customer":			
				//$data["lists"]=$this->db->query("SELECT tbl_sale_header.*,tbl_customer.customer_name FROM tbl_sale_header LEFT JOIN tbl_customer ON tbl_sale_header.customer_id=tbl_customer.id WHERE tbl_sale_header.requiredamount>0");
				$data["lists"]=$this->db->get_where("tbl_purchase_header",array('requiredamount >'=>0));
				
				break;

				case "income_outcome": 
				$data['outcomes']=$this->db->query("SELECT SUM(tbl_purchase_header.advance) as total FROM tbl_purchase_header WHERE date=CURDATE()  UNION SELECT SUM(tbl_general_outcome.total) as total FROM tbl_general_outcome WHERE date=CURDATE()  UNION SELECT SUM(tbl_damage.quantity) as total FROM tbl_damage WHERE date=CURDATE() UNION SELECT SUM(tbl_sale_header.received) as total FROM tbl_sale_header WHERE date=CURDATE() UNION SELECT SUM(tbl_debt_return.returnamount) as total FROM tbl_debt_return WHERE date=CURDATE()");
				//$data['incomes']=$this->db->query("SELECT SUM(tbl_debt_return.returnamount) as totalDR, tbl_sale_header.date as date, SUM(tbl_sale_header.received) as total FROM tbl_sale_header LEFT JOIN tbl_debt_return ON tbl_debt_return.date=tbl_sale_header.date WHERE tbl_sale_header.date=CURDATE()");
			
				break;


				case "deposit":
				$data["lists"]=$this->db->get("tbl_deposit");
				break;

				default:
				$data["lists"]=$this->db->get("tbl_".$table);
				break;
			
			}
			
			
			$this->load->view("cashier/".$table."_list",$data);	
		
	}



	/*Edit form*/

	function edit_form()
	{
		 $data = $this->data;
		$data["errmessage"]="";
		$form=$this->uri->segment(3);
		$id=$this->uri->segment(4);
		//$data["category"]=$this->admin_model->grab_category();
		$data["unit"]=$this->admin_model->grab_unit();
		$data["outcome_category"]=$this->admin_model->grab_outcome_category();
		//$data["main_content"]="edit_".$form."_form";
		
		$data["row"]=$this->admin_model->get_data($id,$form);
		$form="edit_".$form."_form";
		$this->load->view("admin/".$form,$data);	
		//$this->load->view("admin/template",$data);
	}//


/*******/

	function stockalert()
	{
			 $data = $this->data;
            $check_remind=$this->admin_model->check_stock_remind();
           /// echo $check_remind->num_rows();

         
             echo ' <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> '.$data["alert"].' <span class="badge"> '.$check_remind->num_rows().' </span> <b class="caret"></b></a>
              <ul class="dropdown-menu">';
              
              $no=1;
            
              foreach($check_remind->result() as $remind):

            
               echo '<li><a href="#"><span class="badge">'.$remind->product_code.'</span>'.$remind->pname.' <span class="label label-danger"> '.$remind->l." ".$remind->unit;' </span></a></li>';
                
          
            		$no++;     
                  endforeach;
                
                echo '<li class="divider"></li>
                </ul>';
	
	}


	function debtalert()
	{
		 $data = $this->data;
            $check_debt=$this->admin_model->check_debt_alert();
            echo $check_debt->num_rows();
	}

/**/

function account_setting()
	{
		$data = $this->data;
		
			$username=get_cookie("cookie_name");
			 $oldpass=md5($this->input->post('opassword'));
			 $password=md5($this->input->post('password'));
			 $cpassword=md5($this->input->post('cpassword'));

			$data=array(
						'password'=>$password
						);
			$check=$this->admin_model->check_account($username,$oldpass);
			
		//	echo $check->num_rows();

			if($check->num_rows()==1)
			{

		

			$this->db->where('username',$username);
			$query=$this->db->update('tbl_user',$data);

				if($query)
				{
					$status=1;
				}
				else
				{
					$status=0;
				}
			}


			else
			{
				$status=2;
			}

			echo $status;
			
		
				
	}




	
} /*cashier controller end here*/