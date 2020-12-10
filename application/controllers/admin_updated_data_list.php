<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin_updated_data_list extends CI_Controller {


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
				$data["dateinterval"]=$this->session->userdata("date");
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
				$data["dateinterval"]=$this->session->userdata("date");			
				$data['lists']=$this->db->query("SELECT DISTINCT (tbl_sale.product_code), SUM(tbl_sale.total) as total, sum(tbl_sale.item_count) as totalitem_count,tbl_sale.date,tbl_sale.product_name,tbl_product_price.average_smallitem_price,tbl_product_price.purchase_price FROM tbl_sale LEFT JOIN tbl_product_price ON tbl_sale.product_code=tbl_product_price.product_code WHERE tbl_sale.date=CURDATE() GROUP BY tbl_sale.product_code,tbl_product_price.product_code, tbl_sale.date ORDER BY tbl_sale.date");
				break;

				case 'damage':
				$data["lists"]=$this->db->query("SELECT * FROM tbl_damage WHERE date=CURDATE()");
				break;

				case 'customer':
				$data["lists"]=$this->db->query("SELECT * FROM tbl_customer ORDER BY id customer_name");
				break;

				case 'supplier':
				$data["lists"]=$this->db->query("SELECT * FROM tbl_supplier ORDER BY id supplier_name");
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
				$data["lists"]=$this->db->get("tbl_".$table);
				break;
			
			}			

			//$data["main_content"]=$table;
			$this->load->view("admin/".$table,$data);		
		
	}


	
}

 ?>