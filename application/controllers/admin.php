<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Admin extends CI_Controller
{

	var $data;

	function __construct()
	{
		error_reporting(0);
		parent::__construct();
		$this->load->model('admin_model');
		

		
			

		$this->data=array(


			'today'=>date("d-m-Y",strtotime(date("Y-m-d"))),
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

	
	/**/

	function change_language()
	{
		
			$userdata=array(
							'language'=>$this->uri->segment(3)
											
							);			
			
			redirect('admin/index');
	}


	



	function index()
	{	
		
		if(get_cookie("admin_cookie"))
		{


				 $data = $this->data;

				 $this->load->model("cashier_model");

				 //$check_promotion=$this->cashier_model->check_promotion();
				// $data["alert"]=$this->db->count_all_results('tbl_');
				 $data["main_content"]="main";
				 $data["lists"]=$this->admin_model->check_stock_remind();

				 $this->load->view("admin/template",$data);

		}

		else
			{
				$data["message"]="Login to access this page";
				$this->load->view("login_form",$data);
			}
	
	}


	


	function shopstockalert()
	{
			 $data = $this->data;
            $check_remind=$this->admin_model->check_shop_stock_remind();
            echo $check_remind->num_rows();
	}

	/* check_stock_remind*/

	function stockalert()
	{
			 $data = $this->data;
            $check_remind=$this->admin_model->check_stock_remind();
            echo $check_remind->num_rows();

         
             /*echo ' <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> '.$data["alert"].' <span class="badge"> '.$check_remind->num_rows().' </span> <b class="caret"></b></a>
              <ul class="dropdown-menu">';
              
              $no=1;
            
              foreach($check_remind->result() as $remind):

            
               echo '<li><a href="#"><span class="badge">'.$remind->product_code.'</span>'.$remind->pname.' <span class="label label-danger"> '.$remind->l." ".$remind->unit;' </span></a></li>';
                
          
            		$no++;     
                  endforeach;
                
                echo '<li class="divider"></li>
                </ul>';
	*/
	}



/**/
function get_dropunit()
	{
		$unit=trim($this->input->post("unit"));
		

		$query2=$this->db->like("unit",$unit)->group_by("unit")->get("tbl_unit");
		echo "<ul>";
		foreach($query2->result() as $row):
	?>
		<li onclick="fill_unit('<?=$row->unit?>',event)"> <?=$row->unit?></li>
		<?php
		endforeach;
		echo "</ul>";
	}

/**/


function get_dropcategory()
	{
		$category=trim($this->input->post("category"));
		

		$query2=$this->db->like("category",$category)->group_by("category")->get("tbl_unit");
		echo "<ul>";
		foreach($query2->result() as $row):
	?>
		<li onclick="fill_category('<?=$row->category?>',event)"> <?=$row->category?></li>
		<?php
		endforeach;
		echo "</ul>";
	}


/**/


	function get_droplist()
	{
		$pcode=trim($this->input->post("pcode"));
		$query2=$this->db->like("product_code",$pcode,'after')->group_by("product_code")->order_by("product_code","ASC")->get("tbl_unit");
	//	$query2=$this->db->query("SELECT * FROM tbl_unit WHERE product_code like "%$pcode% ORDER BY PATINDEX('%$pcode%', product_code) ASC, LEN(product_code) ASC");
		echo "<ul>";
		foreach($query2->result() as $row):
	?>
		<li onclick="fill('<?=$row->product_code?>',event)"> <?=$row->product_code." (".$row->product_name.")"?></li>
		<?php
		endforeach;
		echo "</ul>";
	}

	/**/

	function debtalert()
	{
		 $data = $this->data;
            $check_debt=$this->admin_model->check_debt_alert();
            echo $check_debt->num_rows();
	}


	function promotion_alert()
	{
		$qry=$this->db->query("SELECT targetamount FROM tbl_promotion WHERE targetamount >=(amount*(3/4)) AND status=1");
		if($qry->num_rows()==1)
		{
			$row=$qry->row();
			echo "<a style='opacity:1'><i class='fa fa-bell'></i> Promotion Alarm : <span class='badge'>".$row->targetamount."</span></a>";
		}
		//echo "<a>hello</a>";
	}

	

		/*Account setting form*/
function account_setting()
	{
		$data = $this->data;
		
			$username=get_cookie("admin_cookie");
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





/**/


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



function makecancel()
	{	
				

			$voucherno=$this->uri->segment(5);
			$table=$this->uri->segment(3);	
			if($table=="purchase_order")
			{
				$this->db->delete('tbl_purchase_order',array('voucherno'=>$voucherno));
				$this->db->delete('tbl_purchase_order_header',array('voucherno'=>$voucherno));

			}

			if($table=="sale_order")
			{
				$this->db->delete('tbl_sale_order',array('voucherno'=>$voucherno));
				$this->db->delete('tbl_sale_order_header',array('voucherno'=>$voucherno));


			}
			
			$this->delete_left_data_list($table);
		
		
	}//
	
	/*logout*/
	function logout()
	{
			
				delete_cookie("admin_cookie");
				$array_items=array("AdminUser"=>"","AdminPass"=>"");
		
				redirect('site');

	}
	/*Show Data Lists Start*/



	function check_remind()
	{
		 $data = $this->data;
		$data['main_content']="remind_purchase";
			$data["lists"]=$this->admin_model->check_remind();
			$this->load->view("admin/template",$data);		
	}

/**/



function checkshowroomqty()
	{
		$pcode=$this->input->post("pcode");
		$unit=$this->input->post('unit');
		$qu=$this->input->post("qu");
		$sale=$this->input->post("sale");
		//$table="tbl_".$sale."_stock";
		
		$grab_tbl_id=$this->input->post("grab_tbl_id");
		$id=$sale."_id";


		//$query=$this->db->query("SELECT * FROM $table WHERE product_code='$pcode' AND $id='$grab_tbl_id'");
		$query=$this->db->query("SELECT * FROM tbl_showroom_stock WHERE product_code='$pcode'");
		//echo $this->db->last_query();
		if($query->num_rows() ==1)
		{
			$unitquery=$query->row();

			 $mqu1=$unitquery->quantity;

					if($mqu1<$qu)
					{
						echo $mqu1+$psrow->total_smallitemcount;
					}
					else
					{
						echo $mqu1;
					}

			

		}

	

		else
		{
			echo 0;
		}		

	}

/**/

	function admingrabdata()
	{
		ob_clean();

		
			$xml = new MY_Xml_writer;
			$xml->setRootName('items');
			$xml->initiate();
			
			
			$pcode=$this->input->post("pcode");
			$myunits="";
			$punits=$this->db->query("SELECT unit,price FROM tbl_unit WHERE product_code='$pcode' order by price DESC");
			foreach($punits->result() as $punit):
			$myunits.=$punit->unit.",";
			$myunit_price.=$punit->price.",";

			endforeach;

			$query=$this->db->query("SELECT * FROM tbl_unit where tbl_unit.product_code='$pcode' ORDER BY price DESC LIMIT 1");
		//	echo $query->num_rows();
			if($query->num_rows()==1)
			{
			$row=$query->row();
			$xml->startBranch('data');	
			$xml->addNode('product_name', $row->product_name);	
			$xml->addNode('category', $row->category);	
			$xml->addNode('image', $row->photo);	

			$xml->addNode('discount', $row->discount);	
			$xml->addNode('myunits',$myunits);
			$xml->addNode('myunit_price',$myunit_price);

			$xml->addNode('price', $row->price);	
			$xml->addNode('item_count',$row->smallest_itemcount);		
			$xml->endBranch();		
			
			$xml->getXml(true);
			}
		
	}


	/*Get Sale Price*/
	function getsaleprice()
	{

			ob_clean();

		
			$xml = new MY_Xml_writer;
			$xml->setRootName('items');
			$xml->initiate();
			
			
			$pcode=$this->uri->segment(3);
			$query=$this->db->query("SELECT product_name,price FROM tbl_shop_stock where product_code='$pcode'");
		//	echo $query->num_rows();
			if($query->num_rows()==1)
			{
			$row=$query->row();
			$xml->startBranch('data');	
			$xml->addNode('product_name', $row->product_name);	
			/*$xml->addNode('unit', $row->unit);	*/
			$xml->addNode('price', $row->price);			
			$xml->endBranch();		
			
			$xml->getXml(true);
			}
		
	}


/**/



/**/



	function fillWithoutPrice()
	{
		ob_clean();
		
			$xml = new MY_Xml_writer;
			$xml->setRootName('items');
			$xml->initiate();
			
			
			$pcode=$this->uri->segment(3);
			$myunits="";
			$query=$this->db->query("SELECT * FROM tbl_unit WHERE product_code='$pcode' order by price DESC");
			foreach($query->result() as $punit):
			$myunits.=$punit->unit.",";
			endforeach;
		if($query->num_rows()>=1)
			{
			$row=$query->row();
			$xml->startBranch('data');	
			$xml->addNode('product_name', $row->product_name);	
			$xml->addNode('category', $row->category);	
			$xml->addNode('myunits',$myunits);
			$xml->addNode('item_count',$row->smallest_itemcount);		
			$xml->endBranch();		
			
			$xml->getXml(true);


			}
		
	}


/**/




	function fillWithPrice()
	{
		ob_clean();
		
			$xml = new MY_Xml_writer;
			$xml->setRootName('items');
			$xml->initiate();
			
			
			$pcode=$this->uri->segment(3);
			$myunits="";
			$query=$this->db->query("SELECT * FROM tbl_unit WHERE product_code='$pcode' order by price DESC");
			foreach($query->result() as $punit):
			$myunits.=$punit->unit.",";
			endforeach;
		if($query->num_rows()>=1)
			{
			$row=$query->row();
			$xml->startBranch('data');	
			$xml->addNode('product_name', $row->product_name);	
			$xml->addNode('category', $row->category);	
			$xml->addNode('myunits',$myunits);
			$xml->addNode('price', $row->price);	

			$xml->addNode('item_count',$row->smallest_itemcount);		
			$xml->endBranch();		
			
			$xml->getXml(true);


			}
		
	}


/**/






	function fillWithPurchase()
	{
		ob_clean();
		
			$xml = new MY_Xml_writer;
			$xml->setRootName('items');
			$xml->initiate();
			
			
			$pcode=$this->input->post("pcode");
			$warehouse=$this->input->post("warehouse");

			$myunits="";
			$query=$this->db->query("SELECT * FROM tbl_".$warehouse." WHERE product_code='$pcode' order by smallitemcount DESC");

			foreach($query->result() as $punit):
			$myunits.=$punit->unit.",";
			endforeach;
		if($query->num_rows()>=1)
			{
			$row=$query->row();
			$xml->startBranch('data');	
			$xml->addNode('product_name', $row->product_name);	
			$xml->addNode('category', $row->category);	
			$xml->addNode('price', $row->price);	
			$xml->endBranch();		
			
			$xml->getXml(true);


			}
		
	}

	/**/
	

	function search()
	{

		$pcode = trim(strip_tags($_GET['term']));
		$query2=$this->db->like("product_code",$pcode,'after')->group_by("product_code")->order_by("product_code","ASC")->get("tbl_unit");
	
		foreach($query2->result_array() as $row):
			$row['label']=htmlentities(stripslashes($row["product_code"]))." ( ".htmlentities(stripslashes($row["product_name"]))." ) ";
			$row['value']=htmlentities(stripslashes($row["product_code"]));
			$row['id']=(int)$row['id'];

			$row_set[] = $row;
	
		endforeach;

		echo json_encode($row_set);
	
	

	}
	
	/*Grab Unit*/
	function grabunit()
	{
		
		ob_clean();
		
		$xml = new MY_Xml_writer;
		$xml->setRootName('items');
		$xml->initiate();			
		
		$pcode=$this->uri->segment(3);
		$query=$this->db->query("SELECT unit,product_name FROM tbl_shop_stock where tbl_shop_stock.product_code='$pcode' order by smallest_itemcount ASC");

		if($query->num_rows()==1)
		{
		$row=$query->row();
		$xml->startBranch('data');	
		$xml->addNode('product_name', $row->product_name);	
		$xml->addNode('unit', $row->unit);				
		$xml->endBranch();		
		
		$xml->getXml(true);
		}
		
				
	}


	/*insert form*/
	function insert_form($form)
	{
		
		$data = $this->data;
		
		
		$data["unit"]=array(""=>"... select ...");
		$data["supplier"]=$this->admin_model->grab_supplier();
		$data["customer"]=$this->admin_model->grab_customer();
		switch($form)
		{
			case  "showroom_stock_form" : 	
			$data["grab_tbl_id"]=$this->admin_model->grab_tbl_id("tbl_showroom");

			break;

			case "consinement_stock_form" : 					
			$data["grab_tbl_id"]=$this->admin_model->grab_tbl_id("tbl_consinement");
			$data["subwarehouses"]=$this->admin_model->grab_tbl_id("tbl_subwarehouse");

			break;

			case "subwarehouse_stock_form" : 					
			$data["grab_tbl_id"]=$this->admin_model->grab_tbl_id("tbl_subwarehouse");

			break;
			
			case "consinement_sale_form" : 
			$data["staff"]=$this->admin_model->grab_staff();
					
			$data["grab_tbl_id"]=$this->admin_model->grab_tbl_id("tbl_consinement");

			break;

			case "showroom_sale_form" : 
			$data["staff"]=$this->admin_model->grab_staff();
					
			$data["grab_tbl_id"]=$this->admin_model->grab_tbl_id("tbl_showroom");

			break;


			case "purchase_multiple_form":
			$data["grab_tbl_id"]=$this->admin_model->grab_tbl_id("tbl_subwarehouse");

			break;

			case "damage_subwarehouse_form":
			$data["grab_tbl_id"]=$this->admin_model->grab_tbl_id("tbl_subwarehouse");

			break;

			case "damage_consinement_form":
			$data["grab_tbl_id"]=$this->admin_model->grab_tbl_id("tbl_consinement");

			break;

			case "damage_showroom_form":
			$data["grab_tbl_id"]=$this->admin_model->grab_tbl_id("tbl_showroom");

			break;

			case "purchase_multiple_return_form":
			$data["grab_tbl_id"]=$this->admin_model->grab_tbl_id("tbl_subwarehouse");

			break;


			case "sale_form" : 
			$data["staff"]=$this->admin_model->grab_staff();
					

			break;



			case "purchase_form" : 
		//	$data["staff"]=$this->admin_model->grab_staff();
					
			$data["grab_tbl_id"]=$this->admin_model->grab_tbl_id("tbl_subwarehouse");

			break;

		}
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


			$this->load->view("admin/template",$data);	

		
	}//


	/**/

	function data_list($table)
	{
		if(get_cookie("admin_cookie"))
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

				case "monthly_income_outcome": 
				$data["dateinterval"]=date("d-m-Y");
				//$data["dateinterval"]=$this->db->query("select DATE_FORMAT(NOW() ,'01-%m-%Y') as DATE FROM tbl_shop_stock")->row();
				$data["totalsale"]=$this->db->query("SELECT SUM(totalamount) as total FROM tbl_sale_header WHERE MONTH(date)=MONTH(CURDATE())")->row();
				/**/$data["totalsalereturn"]=$this->db->query("SELECT SUM(nettotal) as total FROM tbl_sale_return_header WHERE MONTH(date)=MONTH(CURDATE())")->row();
				$data["totalpurchasereturn"]=$this->db->query("SELECT SUM(nettotal) as total FROM tbl_purchase_return_header WHERE MONTH(date)=MONTH(CURDATE())")->row();
				$data["totalpurchase"]=$this->db->query("SELECT SUM(total) as total FROM tbl_purchase  WHERE MONTH(date)=MONTH(CURDATE())")->row();
				$data["totalsalereturn"]=$this->db->query("SELECT SUM(total) as total FROM tbl_sale_return WHERE MONTH(date)=MONTH(CURDATE())")->row();
				
				$data["deliverycharges"]=$this->db->query("SELECT SUM(deliveryfees) as total FROM tbl_sale_header WHERE MONTH(date)=MONTH(CURDATE())")->row();
				$data["totalgrossprofit"]=$this->db->query("SELECT SUM(tbl_sale.total) as sale_total, SUM(tbl_shop_stock.price) as total_purchase FROM tbl_sale JOIN tbl_shop_stock ON tbl_sale.product_code=tbl_shop_stock.product_code WHERE MONTH(tbl_sale.date)=MONTH(CURDATE())")->row();
				$data["deliverycost"]=$this->db->query("SELECT SUM(deliveryfees) as total FROM tbl_sale_header WHERE MONTH(date)=MONTH(CURDATE())")->row();
				$data["total_shop_openingstock"]=$this->db->query("SELECT SUM(quantity*price) as total FROM tbl_shop_stock_history WHERE MONTH(date)=MONTH(CURDATE())")->row();
				$data["total_w1_openingstock"]=$this->db->query("SELECT SUM(quantity*price) as total FROM tbl_warehouse1_history WHERE MONTH(date)=MONTH(CURDATE())")->row();
				$data["total_w2_openingstock"]=$this->db->query("SELECT SUM(quantity*price) as total FROM tbl_warehouse2_history WHERE MONTH(date)=MONTH(CURDATE())")->row();
				$data["total_shop_closingstock"]=$this->db->query("SELECT SUM(quantity*price) as total FROM tbl_shop_stock WHERE MONTH(date)=MONTH(CURDATE())")->row();
				$data["total_w1_closingstock"]=$this->db->query("SELECT SUM(quantity*price) as total FROM tbl_warehouse1 WHERE MONTH(date)=MONTH(CURDATE())")->row();
				$data["total_w2_closingstock"]=$this->db->query("SELECT SUM(quantity*price) as total FROM tbl_warehouse2 WHERE MONTH(date)=MONTH(CURDATE())")->row();
				$data["totalgeneraloutcome"]=$this->db->query("SELECT SUM(total) as total FROM tbl_general_outcome WHERE MONTH(date)=MONTH(CURDATE())")->row();
				$data["generalincome"]=$this->db->query("SELECT SUM(total) as total FROM tbl_general_income WHERE MONTH(date)=MONTH(CURDATE())")->row();
				$data["debtexpense"]=$this->db->query("SELECT SUM(total) as total FROM tbl_debt_expense WHERE MONTH(date)=MONTH(CURDATE())")->row();
				//$data["totaldamage_shop"]=$this->db->query("SELECT SUM(total) as total FROM tbl_damage_shop WHERE MONTH(date)=MONTH(CURDATE())")->row();
				$data["totaldamage_shop"]=$this->db->query("SELECT SUM((price/smallitemcount)*total_smallitemcount) as total FROM tbl_damage_shop WHERE MONTH(date)=MONTH(CURDATE())")->row();

				break;


				case "daily_income_outcome" :
				$data["dateinterval"]=date("Y-m-d");
				$data["totalsale"]=$this->db->query("SELECT SUM(received) as total FROM tbl_sale_header WHERE date=CURDATE()")->row();
				$data["generalincome"]=$this->db->query("SELECT SUM(total) as total FROM tbl_general_income WHERE date=CURDATE()")->row();
				$data["totalgeneraloutcome"]=$this->db->query("SELECT SUM(total) as total FROM tbl_general_outcome WHERE date=CURDATE()")->row();
				$data["deliverycost"]=$this->db->query("SELECT SUM(deliveryfees) as total FROM tbl_sale_header WHERE date=CURDATE()")->row();
				$data["totalpurchase"]=$this->db->query("SELECT SUM(total) as total FROM tbl_purchase WHERE date=CURDATE() ")->row();

				break;

				case "cash_book" :
				$data["dateinterval"]=date("Y-m-d");
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
				$data["dateinterval"]=date("Y-m-d");	
				//$data["lists"]=$this->db->query("SELECT DISTINCT(tbl_sale.product_code), SUM(tbal_sale.total) as total");
				$data['lists']=$this->db->query("SELECT DISTINCT (tbl_sale.product_code), SUM(tbl_sale.total) as total, sum(tbl_sale.quantity) as total_quantity,tbl_sale.date,tbl_sale.product_name,tbl_warehouse1.price FROM tbl_sale LEFT JOIN tbl_warehouse1 ON tbl_sale.product_code=tbl_warehouse1.product_code WHERE tbl_sale.date=CURDATE() GROUP BY tbl_sale.product_code,tbl_warehouse1.product_code, tbl_sale.date ORDER BY tbl_sale.date");
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


				case "purchase_multiple_return":
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


			case "purchase_multiple":
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
				$data["grab_tbl_id"]=$this->admin_model->grab_tbl_id("tbl_subwarehouse");

				break;


				case "showroom_stock" : 
				if($this->uri->segment(4))
				{
					$this->db->select("tbl_showroom.*,tbl_showroom_stock.*");
					$this->db->join("tbl_showroom","tbl_showroom.id=tbl_showroom_stock.showroom_id");
					$this->db->order_by("tbl_showroom_stock.showroom_id","DESC");
					$this->db->order_by("tbl_showroom_stock.product_code","DESC");

					$data["lists"]=$this->db->get_where("tbl_showroom_stock",array('tbl_showroom_stock.showroom_id'=>urldecode($this->uri->segment(4))));

					//$data["lists"]=$this->db->order_by("product_code","DESC")->get_where("tbl_showroom_stock",array('category'=>urldecode($this->uri->segment(4))));
				}
				else
				{
					$this->db->select("tbl_showroom.*,tbl_showroom_stock.*");
					$this->db->join("tbl_showroom","tbl_showroom.id=tbl_showroom_stock.showroom_id");
					$this->db->order_by("tbl_showroom_stock.product_code","DESC");
					$data["lists"]=$this->db->get("tbl_".$table);
				}

				//$data["categories"]=$this->db->query("SELECT DISTINCT category FROM tbl_showroom_stock order by category ASC");
				$data["showrooms"]=$this->db->query("SELECT tbl_showroom.* FROM tbl_showroom right join tbl_showroom_stock ON tbl_showroom.id=tbl_showroom_stock.showroom_id group by tbl_showroom_stock.showroom_id order by tbl_showroom.name ASC ");
				break;



				case "consinement_stock" : 
				if($this->uri->segment(4))
				{
					$this->db->select("tbl_consinement.*,tbl_consinement_stock.*");
					$this->db->join("tbl_consinement","tbl_consinement.id=tbl_consinement_stock.consinement_id");
					$this->db->order_by("tbl_consinement_stock.consinement_id","DESC");
					$this->db->order_by("tbl_consinement_stock.product_code","DESC");

					$data["lists"]=$this->db->get_where("tbl_consinement_stock",array('tbl_consinement_stock.consinement_id'=>urldecode($this->uri->segment(4))));

					//$data["lists"]=$this->db->order_by("product_code","DESC")->get_where("tbl_consinement_stock",array('category'=>urldecode($this->uri->segment(4))));
				}
				else
				{
					$this->db->select("tbl_consinement.*,tbl_consinement_stock.*");
					$this->db->join("tbl_consinement","tbl_consinement.id=tbl_consinement_stock.consinement_id");
					$this->db->order_by("tbl_consinement_stock.product_code","DESC");
					$data["lists"]=$this->db->get("tbl_".$table);
				}

				//$data["categories"]=$this->db->query("SELECT DISTINCT category FROM tbl_showroom_stock order by category ASC");
				$data["consinements"]=$this->db->query("SELECT tbl_consinement.* FROM tbl_consinement inner join tbl_consinement_stock ON tbl_consinement.id=tbl_consinement_stock.consinement_id group by tbl_consinement.name order by tbl_consinement.name ASC ");
				break;



				case "subwarehouse_stock" : 
				if($this->uri->segment(4))
				{
					$this->db->select("tbl_subwarehouse.*,tbl_subwarehouse_stock.*");
					$this->db->join("tbl_subwarehouse","tbl_subwarehouse.id=tbl_subwarehouse_stock.subwarehouse_id");
					$this->db->order_by("tbl_subwarehouse_stock.subwarehouse_id","DESC");
					$this->db->order_by("tbl_subwarehouse_stock.product_code","DESC");

					$data["lists"]=$this->db->get_where("tbl_subwarehouse_stock",array('tbl_subwarehouse_stock.subwarehouse_id'=>urldecode($this->uri->segment(4))));

					//$data["lists"]=$this->db->order_by("product_code","DESC")->get_where("tbl_subwarehouse_stock",array('category'=>urldecode($this->uri->segment(4))));
				}
				else
				{
					$this->db->select("tbl_subwarehouse.*,tbl_subwarehouse_stock.*");
					$this->db->join("tbl_subwarehouse","tbl_subwarehouse.id=tbl_subwarehouse_stock.subwarehouse_id");
					$this->db->order_by("tbl_subwarehouse_stock.product_code","DESC");
					$data["lists"]=$this->db->get("tbl_".$table);
				}

				//$data["categories"]=$this->db->query("SELECT DISTINCT category FROM tbl_showroom_stock order by category ASC");
				$data["subwarehouses"]=$this->db->query("SELECT tbl_subwarehouse.* FROM tbl_subwarehouse right join tbl_subwarehouse_stock ON tbl_subwarehouse.id=tbl_subwarehouse_stock.subwarehouse_id group by tbl_subwarehouse_stock.subwarehouse_id order by tbl_subwarehouse.name ASC ");
				$data["grab_tbl_id"]=$this->admin_model->grab_tbl_id("tbl_showroom");

				break;


				case "category" :
				$data["lists"]=$this->db->query("SELECT DISTINCT category FROM tbl_unit order by category ASC");
				break;

				case "warehouse1" :
				$data["categories"]=$this->db->query("SELECT DISTINCT category FROM tbl_warehouse1 order by category ASC");
				break;

				$data["subwarehouse"]=$this->admin_model->grab_subwarehouse();
				$data["lists"]=$this->db->order_by("product_code","DESC")->get("tbl_".$table);
				break;


				case "consinement_sale":
				$this->db->select("tbl_consinement.*,tbl_consinement_sale_header.*");
				$this->db->join("tbl_consinement","tbl_consinement.id=tbl_consinement_sale_header.consinement_id");
				$this->db->order_by("tbl_consinement_sale_header.date","DESC");
				$data["lists"]=$this->db->get("tbl_consinement_sale_header");
				break;


				default:
				$data["lists"]=$this->db->order_by("id","DESC")->get("tbl_".$table);
				break;
			
			}			

			$data["main_content"]=$table;
			$this->load->view("admin/template",$data);		
		}
		else
		{
			redirect("site");
		}
	}


/*Updated Data Lists*/


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
				$data["dateinterval"]=date("Y-m-d");
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
				$data["totalstock"]=$this->db->query("SELECT SUM((price/smallitemcount)*total_smallitemcount) as total FROM tbl_showroom_stock")->row();
				$data["totaldeposit"]=$this->db->query("SELECT amount as total FROM tbl_deposit WHERE year='".date('Y')."'")->row();
		//		$data["alljackpot"]=$this->db->query("SELECT total FROM tbl_all_jackpot")->row();
				break;


				case 'sale_profit' :
				$data["dateinterval"]=date("Y-m-d");			
				$data['lists']=$this->db->query("SELECT DISTINCT (tbl_sale.product_code), SUM(tbl_sale.total) as total, sum(tbl_sale.item_count) as totalitem_count,tbl_sale.date,tbl_sale.product_name,tbl_product_price.average_smallitem_price,tbl_product_price.purchase_price FROM tbl_sale LEFT JOIN tbl_product_price ON tbl_sale.product_code=tbl_product_price.product_code WHERE tbl_sale.date=CURDATE() GROUP BY tbl_sale.product_code,tbl_product_price.product_code, tbl_sale.date ORDER BY tbl_sale.date");
				break;

				case 'damage':
				$data["lists"]=$this->db->query("SELECT * FROM tbl_damage WHERE date=CURDATE()");
				break;

				case 'customer':
				$data["lists"]=$this->db->query("SELECT * FROM tbl_customer ORDER BY  customer_name");
				break;

				case 'supplier':
				$data["lists"]=$this->db->query("SELECT * FROM tbl_supplier ORDER BY supplier_name");
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

				case "consinement_sale":
				$this->db->select("tbl_consinement.*,tbl_consinement_sale_header.*");
				$this->db->join("tbl_consinement","tbl_consinement.id=tbl_consinement_sale_header.consinement_id");
				$this->db->order_by("tbl_consinement_sale_header.date","DESC");
				$data["lists"]=$this->db->get("tbl_consinement_sale_header");
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
				

				case "purchase_multiple":
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


				case "showroom_stock" : 
				if($this->uri->segment(4))
				{
					$this->db->select("tbl_showroom.*,tbl_showroom_stock.*");
					$this->db->join("tbl_showroom","tbl_showroom.id=tbl_showroom_stock.showroom_id");
					$this->db->order_by("tbl_showroom_stock.showroom_id","DESC");
					$this->db->order_by("tbl_showroom_stock.product_code","DESC");

					$data["lists"]=$this->db->get_where("tbl_showroom_stock",array('tbl_showroom_stock.showroom_id'=>urldecode($this->uri->segment(4))));

					//$data["lists"]=$this->db->order_by("product_code","DESC")->get_where("tbl_showroom_stock",array('category'=>urldecode($this->uri->segment(4))));
				}
				else
				{
					$this->db->select("tbl_showroom.*,tbl_showroom_stock.*");
					$this->db->join("tbl_showroom","tbl_showroom.id=tbl_showroom_stock.showroom_id");
					$this->db->order_by("tbl_showroom_stock.product_code","DESC");
					$data["lists"]=$this->db->get("tbl_".$table);
				}

				//$data["categories"]=$this->db->query("SELECT DISTINCT category FROM tbl_showroom_stock order by category ASC");
				$data["showrooms"]=$this->db->query("SELECT tbl_showroom.* FROM tbl_showroom right join tbl_showroom_stock ON tbl_showroom.id=tbl_showroom_stock.showroom_id group by tbl_showroom_stock.showroom_id order by tbl_showroom.name ASC ");
				break;



				case "consinement_stock" : 
				if($this->uri->segment(4))
				{
					$this->db->select("tbl_consinement.*,tbl_consinement_stock.*");
					$this->db->join("tbl_consinement","tbl_consinement.id=tbl_consinement_stock.consinement_id");
					$this->db->order_by("tbl_consinement_stock.consinement_id","DESC");
					$this->db->order_by("tbl_consinement_stock.product_code","DESC");

					$data["lists"]=$this->db->get_where("tbl_consinement_stock",array('tbl_consinement_stock.consinement_id'=>urldecode($this->uri->segment(4))));

					//$data["lists"]=$this->db->order_by("product_code","DESC")->get_where("tbl_consinement_stock",array('category'=>urldecode($this->uri->segment(4))));
				}
				else
				{
					$this->db->select("tbl_consinement.*,tbl_consinement_stock.*");
					$this->db->join("tbl_consinement","tbl_consinement.id=tbl_consinement_stock.consinement_id");
					$this->db->order_by("tbl_consinement_stock.product_code","DESC");
					$data["lists"]=$this->db->get("tbl_".$table);
				}

				//$data["categories"]=$this->db->query("SELECT DISTINCT category FROM tbl_showroom_stock order by category ASC");
				$data["consinements"]=$this->db->query("SELECT tbl_consinement.* FROM tbl_consinement inner join tbl_consinement_stock ON tbl_consinement.id=tbl_consinement_stock.consinement_id group by tbl_consinement.name order by tbl_consinement.name ASC ");
				break;



				case "subwarehouse_stock" : 
				if($this->uri->segment(4))
				{
					$this->db->select("tbl_subwarehouse.*,tbl_subwarehouse_stock.*");
					$this->db->join("tbl_subwarehouse","tbl_subwarehouse.id=tbl_subwarehouse_stock.subwarehouse_id");
					$this->db->order_by("tbl_subwarehouse_stock.subwarehouse_id","DESC");
					$this->db->order_by("tbl_subwarehouse_stock.product_code","DESC");

					$data["lists"]=$this->db->get_where("tbl_subwarehouse_stock",array('tbl_subwarehouse_stock.subwarehouse_id'=>urldecode($this->uri->segment(4))));

					//$data["lists"]=$this->db->order_by("product_code","DESC")->get_where("tbl_subwarehouse_stock",array('category'=>urldecode($this->uri->segment(4))));
				}
				else
				{
					$this->db->select("tbl_subwarehouse.*,tbl_subwarehouse_stock.*");
					$this->db->join("tbl_subwarehouse","tbl_subwarehouse.id=tbl_subwarehouse_stock.subwarehouse_id");
					$this->db->order_by("tbl_subwarehouse_stock.product_code","DESC");
					$data["lists"]=$this->db->get("tbl_".$table);
				}

				//$data["categories"]=$this->db->query("SELECT DISTINCT category FROM tbl_showroom_stock order by category ASC");
				$data["subwarehouses"]=$this->db->query("SELECT tbl_subwarehouse.* FROM tbl_subwarehouse right join tbl_subwarehouse_stock ON tbl_subwarehouse.id=tbl_subwarehouse_stock.subwarehouse_id group by tbl_subwarehouse_stock.subwarehouse_id order by tbl_subwarehouse.name ASC ");
				break;


				case "category" :
				$data["lists"]=$this->db->query("SELECT DISTINCT category FROM tbl_unit order by category ASC");
				break;

				case "warehouse1" :
				$data["categories"]=$this->db->query("SELECT DISTINCT category FROM tbl_warehouse1 order by category ASC");
				break;

				$data["subwarehouse"]=$this->admin_model->grab_subwarehouse();
				$data["lists"]=$this->db->order_by("product_code","DESC")->get("tbl_".$table);
				break;




				default:
				$data["lists"]=$this->db->get("tbl_".$table);
				break;
			
			}			

			//$data["main_content"]=$table;
			$this->load->view("admin/".$table,$data);		
		
	}




/**/



	/**/
	function viewdetails_deliver()
	{
			$data = $this->data;
			$debttype=$this->uri->segment(3);
			$voucherno=$this->uri->segment(4);
			$amount=$this->uri->segment(5);
			
				$this->load->model("cashier_model");
				
			
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
			$this->load->view("admin/template",$data);

	}


	/**/

	function viewdetails_list()
	{
		$data = $this->data;
			$debttype=$this->uri->segment(3);
			$voucherno=$this->input->post("voucherno");
			$amount=$this->uri->segment(5);

			switch($debttype)
			{

				case "consinement_sale":
				$this->db->select("tbl_consinement.*,tbl_consinement_sale.*");
				$this->db->join("tbl_consinement","tbl_consinement.id=tbl_consinement_sale.consinement_id");
				$this->db->order_by("tbl_consinement_sale.date","DESC");
				$this->db->where("tbl_consinement_sale.voucherno",$voucherno);

				$data["lists"]=$this->db->get("tbl_consinement_sale");
				break;

			}

			$this->load->view("admin/".$debttype."_details_list",$data);

	}


	/**/


		function viewdetails()
		{
			
			$data = $this->data;
			$debttype=$this->uri->segment(3);
			$voucherno=$this->uri->segment(4);
			$amount=$this->uri->segment(5);

			switch($debttype)
			{

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

				
				case "consinement_sale":
				$this->db->select("tbl_consinement.*,tbl_consinement_sale.*");
				$this->db->join("tbl_consinement","tbl_consinement.id=tbl_consinement_sale.consinement_id");
				$this->db->where("tbl_consinement_sale.voucherno",$voucherno);
				$this->db->order_by("tbl_consinement_sale.date","DESC");
				$data["lists"]=$this->db->get("tbl_consinement_sale");
				break;


				case 'voucher':
				$data["lists"]=$this->db->query("SELECT tbl_sale.*,tbl_sale_header.received,tbl_sale_header.jackpot,tbl_sale_header.exceedamount,tbl_sale_header.nettotal,tbl_sale_header.totaldebt,tbl_sale_header.deliveryfees FROM tbl_sale LEFT JOIN tbl_sale_header ON tbl_sale.voucherno=tbl_sale_header.voucherno WHERE tbl_sale.voucherno='$voucherno'");
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
			
			$this->load->view("admin/".$debttype."_details",$data);
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

			$this->load->view("admin/".$debttype,$data);
		}

		








	
	

/*Income outcome form*/

	function income_outcome()
	{
		$data = $this->data;
		$ostartdate=$this->input->post('startdate');
		$oenddate=$this->input->post('enddate');
		$startdate=date("Y-m-d",strtotime($this->input->post('startdate')));
		$enddate=date("Y-m-d",strtotime($this->input->post('enddate')));

		if($ostartdate != "" && $oenddate=="")
		{
		 	$data["dateinterval"]=$startdate;
		 	$data["totalsale"]=$this->db->query("SELECT SUM(received-refund) as total FROM tbl_sale_header WHERE date='$startdate'")->row();
			$data["totalget"]=$this->db->query("SELECT SUM(returnamount) as total FROM tbl_debt_return WHERE returntype='debt_from_customer' AND date='$startdate'")->row();
			/**/$data["totalreqamt"]=$this->db->query("SELECT SUM(total) as total FROM tbl_debt_from_customer WHERE total<0 AND date='$startdate'")->row();
			/**/$data["retruntocustomer"]=$this->db->query("SELECT SUM(total) as total FROM tbl_debt_from_customer WHERE total>0 AND date='$startdate'")->row();
				
			$data["reqamttosupplier"]=$this->db->query("SELECT SUM(net_total-paid_total) as total FROM tbl_debt_to_supplier WHERE paid_total=0 AND purchase_date='$startdate'")->row();
			
			////$data["totaljackpot"]=$this->db->query("SELECT SUM(percentage) as total, SUM(jpchangemoney) as jpchangemoney FROM tbl_jackpot WHERE date='$startdate'")->row();
			$data["supplierunseen"]=$this->db->query("SELECT SUM(amount) as total FROM tbl_supplier_unseen WHERE date='$startdate'")->row();
			$data['itemchange']=$this->db->query("SELECT SUM(quantity*price) as total FROM tbl_itemchange WHERE date='$startdate'")->row();
			$data["customerunseen"]=$this->db->query("SELECT SUM(amount) as total FROM tbl_customer_unseen WHERE date='$startdate'")->row();
			$data["generaloutcome"]=$this->db->query("SELECT SUM(total) as total FROM tbl_general_outcome WHERE date='$startdate'")->row();
			$data["promotion"]=$this->db->query("SELECT SUM(targetamount) as total FROM tbl_promotion WHERE startdate='$startdate'")->row();
			////$data["totaljackpotchange"]=$this->db->query("SELECT SUM(total) as total FROM tbl_jackpotchange WHERE date='$startdate'")->row();
			//$data["totaldebt"]=$this->db->query("SELECT SUM(returnamount) as total FROM tbl_debt_return WHERE returntype='debt_to_supplier' AND date='$startdate'")->row();
			$data["totaldebt"]=$this->db->query("SELECT SUM(paid_total) as total FROM tbl_debt_to_supplier WHERE paid_date='$startdate'")->row();
			
			$data["totaldamage"]=$this->db->query("SELECT SUM(total) as total FROM tbl_damage WHERE date='$startdate'")->row();
		//	//$data["customerjackpot"]=$this->db->query("SELECT SUM(percentage) as total FROM tbl_customer_jackpot WHERE date='$startdate'")->row();
			$data["totalstock"]=$this->db->query("SELECT SUM((price/smallitemcount)*total_smallitemcount) as total FROM tbl_shop_stock")->row();
			$data["totaldeposit"]=$this->db->query("SELECT amount as total FROM tbl_deposit WHERE year='".date('Y')."'")->row();
			////$data["alljackpot"]=$this->db->query("SELECT total FROM tbl_all_jackpot")->row();
				
				
		 	//$data['outcomes']=$this->db->query("SELECT SUM(tbl_purchase_header.advance) as total FROM tbl_purchase_header WHERE date='$startdate'  UNION SELECT SUM(tbl_general_outcome.total) as total FROM tbl_general_outcome WHERE date='$startdate'  UNION SELECT SUM(tbl_damage.quantity) as total FROM tbl_damage WHERE date='$startdate' UNION SELECT SUM(tbl_sale_header.received) as total FROM tbl_sale_header WHERE date='$startdate' UNION SELECT SUM(tbl_debt_return.returnamount) as total FROM tbl_debt_return WHERE date='$startdate'");
			//$data['incomes']=$this->db->query("SELECT SUM(tbl_debt_return.returnamount) as totalDR, tbl_sale_header.date as date, SUM(tbl_sale_header.received) as total FROM tbl_sale_header LEFT JOIN tbl_debt_return ON tbl_debt_return.date=tbl_sale_header.date WHERE tbl_sale_header.date='$startdate'");
			
		}

		elseif($ostartdate=="" && $oenddate !="")
		{
			$data["dateinterval"]=$enddate;
			$data["totalsale"]=$this->db->query("SELECT SUM(received-refund) as total FROM tbl_sale_header WHERE date='$enddate'")->row();
			$data["totalget"]=$this->db->query("SELECT SUM(returnamount) as total FROM tbl_debt_return WHERE returntype='debt_from_customer' AND date='$enddate'")->row();
			/**/$data["totalreqamt"]=$this->db->query("SELECT SUM(total) as total FROM tbl_debt_from_customer WHERE total<0 AND date='$enddate'")->row();
				/**/$data["retruntocustomer"]=$this->db->query("SELECT SUM(total) as total FROM tbl_debt_from_customer WHERE total>0 AND date='$enddate'")->row();
				
			/**/$data["reqamttosupplier"]=$this->db->query("SELECT SUM(net_total-paid_total) as total FROM tbl_debt_to_supplier WHERE paid_total=0 AND purchase_date='$enddate'")->row();
			
	////		$data["totaljackpot"]=$this->db->query("SELECT SUM(percentage) as total, SUM(jpchangemoney) as jpchangemoney FROM tbl_jackpot WHERE date='$enddate'")->row();
			$data["supplierunseen"]=$this->db->query("SELECT SUM(amount) as total FROM tbl_supplier_unseen WHERE date='$enddate'")->row();
			$data['itemchange']=$this->db->query("SELECT SUM(quantity*price) as total FROM tbl_itemchange WHERE date='$enddate'")->row();
			$data["customerunseen"]=$this->db->query("SELECT SUM(amount) as total FROM tbl_customer_unseen WHERE date='$enddate'")->row();
			$data["generaloutcome"]=$this->db->query("SELECT SUM(total) as total FROM tbl_general_outcome WHERE date='$enddate'")->row();
			$data["promotion"]=$this->db->query("SELECT SUM(targetamount) as total FROM tbl_promotion WHERE startdate='$enddate'")->row();
	////		$data["totaljackpotchange"]=$this->db->query("SELECT SUM(total) as total FROM tbl_jackpotchange WHERE date='$enddate'")->row();
			//$data["totaldebt"]=$this->db->query("SELECT SUM(returnamount) as total FROM tbl_debt_return WHERE returntype='debt_to_supplier' AND date='$enddate'")->row();
			$data["totaldebt"]=$this->db->query("SELECT SUM(paid_total) as total FROM tbl_debt_to_supplier WHERE paid_date='$enddate' ")->row();
			
			$data["totaldamage"]=$this->db->query("SELECT SUM(total) as total FROM tbl_damage WHERE date='$enddate'")->row();
//			$data["customerjackpot"]=$this->db->query("SELECT SUM(percentage) as total FROM tbl_customer_jackpot WHERE date='$enddate'")->row();
			$data["totalstock"]=$this->db->query("SELECT SUM((price/smallitemcount)*total_smallitemcount) as total FROM tbl_shop_stock")->row();
			$data["totaldeposit"]=$this->db->query("SELECT amount as total FROM tbl_deposit WHERE year='".date('Y')."'")->row();
			
	//		$data["alljackpot"]=$this->db->query("SELECT total FROM tbl_all_jackpot")->row();
				
			//	$data['outcomes']=$this->db->query("SELECT SUM(tbl_purchase_header.advance) as total FROM tbl_purchase_header WHERE date='$enddate'  UNION SELECT SUM(tbl_general_outcome.total) as total FROM tbl_general_outcome WHERE date='$enddate'  UNION SELECT SUM(tbl_damage.quantity) as total FROM tbl_damage WHERE date='$enddate' UNION SELECT SUM(tbl_sale_header.received) as total FROM tbl_sale_header WHERE date='$enddate' UNION SELECT SUM(tbl_debt_return.returnamount) as total FROM tbl_debt_return WHERE date='$enddate'");
				//$data['incomes']=$this->db->query("SELECT SUM(tbl_debt_return.returnamount) as totalDR, tbl_sale_header.date as date, SUM(tbl_sale_header.received) as total FROM tbl_sale_header LEFT JOIN tbl_debt_return ON tbl_debt_return.date=tbl_sale_header.date WHERE tbl_sale_header.date='$enddate'");
			
		}

		elseif($ostartdate=="" && $oenddate=="")
		{
			$data["dateinterval"]=date("Y-m-d");
			$data["totalsale"]=$this->db->query("SELECT SUM(received-refund) as total FROM tbl_sale_header WHERE date=CURDATE()")->row();
			$data["totalget"]=$this->db->query("SELECT SUM(returnamount) as total FROM tbl_debt_return WHERE returntype='debt_from_customer' AND date=CURDATE()")->row();
			/**/$data["totalreqamt"]=$this->db->query("SELECT SUM(total) as total FROM tbl_debt_from_customer WHERE total<0")->row();
				/**/$data["retruntocustomer"]=$this->db->query("SELECT SUM(total) as total FROM tbl_debt_from_customer WHERE total>0")->row();
				
			/**/$data["reqamttosupplier"]=$this->db->query("SELECT SUM(net_total-paid_total) as total FROM tbl_debt_to_supplier WHERE paid_total=0 AND purchase_date=CURDATE()")->row();
			
	//		$data["totaljackpot"]=$this->db->query("SELECT SUM(percentage) as total, SUM(jpchangemoney) as jpchangemoney FROM tbl_jackpot WHERE date=CURDATE()")->row();
			$data["supplierunseen"]=$this->db->query("SELECT SUM(amount) as total FROM tbl_supplier_unseen WHERE date=CURDATE()")->row();
			$data['itemchange']=$this->db->query("SELECT SUM(quantity*price) as total FROM tbl_itemchange WHERE date=CURDATE()")->row();
			$data["customerunseen"]=$this->db->query("SELECT SUM(amount) as total FROM tbl_customer_unseen WHERE date=CURDATE()")->row();
			$data["generaloutcome"]=$this->db->query("SELECT SUM(total) as total FROM tbl_general_outcome WHERE date=CURDATE()")->row();
			$data["promotion"]=$this->db->query("SELECT SUM(targetamount) as total FROM tbl_promotion startdate=CURDATE()")->row();
	//		$data["totaljackpotchange"]=$this->db->query("SELECT SUM(total) as total FROM tbl_jackpotchange WHERE date=CURDATE()")->row();
			//$data["totaldebt"]=$this->db->query("SELECT SUM(returnamount) as total FROM tbl_debt_return WHERE returntype='debt_to_supplier' AND date=CURDATE()")->row();
			$data["totaldebt"]=$this->db->query("SELECT SUM(paid_total) as total FROM tbl_debt_to_supplier WHERE paid_date=CURDATE()")->row();
			
			$data["totaldamage"]=$this->db->query("SELECT SUM(total) as total FROM tbl_damage WHERE date=CURDATE()")->row();
//			$data["customerjackpot"]=$this->db->query("SELECT SUM(percentage) as total FROM tbl_customer_jackpot WHERE date=CURDATE()")->row();
			$data["totalstock"]=$this->db->query("SELECT SUM((price/smallitemcount)*total_smallitemcount) as total FROM tbl_shop_stock")->row();
			$data["totaldeposit"]=$this->db->query("SELECT amount as total FROM tbl_deposit WHERE year='".date('Y')."'")->row();
	//		$data["alljackpot"]=$this->db->query("SELECT total FROM tbl_all_jackpot")->row();
				
			
		//$data['outcomes']=$this->db->query("SELECT SUM(tbl_purchase_header.advance) as total FROM tbl_purchase_header WHERE date=CURDATE()  UNION SELECT SUM(tbl_general_outcome.total) as total FROM tbl_general_outcome WHERE date=CURDATE()  UNION SELECT SUM(tbl_damage.quantity) as total FROM tbl_damage WHERE date=CURDATE() UNION SELECT SUM(tbl_sale_header.received) as total FROM tbl_sale_header WHERE date=CURDATE() UNION SELECT SUM(tbl_debt_return.returnamount) as total FROM tbl_debt_return WHERE date=CURDATE()");
				//	$data['incomes']=$this->db->query("SELECT SUM(tbl_debt_return.returnamount) as totalDR, tbl_sale_header.date as date, SUM(tbl_sale_header.received) as total FROM tbl_sale_header LEFT JOIN tbl_debt_return ON tbl_debt_return.date=tbl_sale_header.date WHERE tbl_sale_header.date=CURDATE()");
			
		}

		elseif($ostartdate !="" && $oenddate !="")
		{
			
			//$data['outcomes']=$this->db->query("SELECT SUM(tbl_purchase_header.advance) as total FROM tbl_purchase_header WHERE date BETWEEN '$startdate' AND '$enddate'  UNION SELECT SUM(tbl_general_outcome.total) as total FROM tbl_general_outcome WHERE date BETWEEN '$startdate' AND '$enddate'  UNION SELECT SUM(tbl_damage.quantity) as total FROM tbl_damage WHERE date BETWEEN '$startdate' AND '$enddate' UNION SELECT SUM(tbl_sale_header.received) as total FROM tbl_sale_header WHERE date BETWEEN '$startdate' AND '$enddate' UNION SELECT SUM(tbl_debt_return.returnamount) as total FROM tbl_debt_return WHERE date BETWEEN '$startdate' AND '$enddate'");
				
			$data["dateinterval"]=$startdate." မွ ".$enddate." ထိ ";
			$data["totalsale"]=$this->db->query("SELECT SUM(received-refund) as total FROM tbl_sale_header WHERE date BETWEEN '$startdate' AND '$enddate' ")->row();
			$data["totalget"]=$this->db->query("SELECT SUM(returnamount) as total FROM tbl_debt_return WHERE returntype='debt_from_customer' AND date BETWEEN '$startdate' AND '$enddate' ")->row();
			/**/$data["totalreqamt"]=$this->db->query("SELECT SUM(total) as total FROM tbl_debt_from_customer WHERE total<0 AND date BETWEEN '$startdate' AND '$enddate' ")->row();
				/**/$data["retruntocustomer"]=$this->db->query("SELECT SUM(total) as total FROM tbl_debt_from_customer WHERE total>0 AND date BETWEEN '$startdate' AND '$enddate' ")->row();
				
			/**/$data["reqamttosupplier"]=$this->db->query("SELECT SUM(net_total-paid_total) as total FROM tbl_debt_to_supplier WHERE paid_total=0 AND purchase_date BETWEEN '$startdate' AND '$enddate' ")->row();
		
	//		$data["totaljackpot"]=$this->db->query("SELECT SUM(percentage) as total, SUM(jpchangemoney) as jpchangemoney FROM tbl_jackpot WHERE date BETWEEN '$startdate' AND '$enddate'")->row();
			$data["supplierunseen"]=$this->db->query("SELECT SUM(amount) as total FROM tbl_supplier_unseen WHERE date BETWEEN '$startdate' AND '$enddate' ")->row();
			$data['itemchange']=$this->db->query("SELECT SUM(quantity*price) as total FROM tbl_itemchange WHERE date BETWEEN '$startdate' AND '$enddate'")->row();
			$data["customerunseen"]=$this->db->query("SELECT SUM(amount) as total FROM tbl_customer_unseen WHERE date BETWEEN '$startdate' AND '$enddate' ")->row();
			$data["generaloutcome"]=$this->db->query("SELECT SUM(total) as total FROM tbl_general_outcome WHERE date BETWEEN '$startdate' AND '$enddate' ")->row();
			$data["promotion"]=$this->db->query("SELECT SUM(targetamount) as total FROM tbl_promotion WHERE startdate BETWEEN '$startdate' AND '$enddate' ")->row();
	//		$data["totaljackpotchange"]=$this->db->query("SELECT SUM(total) as total FROM tbl_jackpotchange WHERE date BETWEEN '$startdate' AND '$enddate' ")->row();
			//$data["totaldebt"]=$this->db->query("SELECT SUM(returnamount) as total FROM tbl_debt_return WHERE returntype='debt_to_supplier' AND date BETWEEN '$startdate' AND '$enddate' ")->row();
			$data["totaldebt"]=$this->db->query("SELECT SUM(paid_total) as total FROM tbl_debt_to_supplier WHERE paid_date BETWEEN '$startdate' AND '$enddate' ")->row();
				
			$data["totaldamage"]=$this->db->query("SELECT SUM(total) as total FROM tbl_damage WHERE date BETWEEN '$startdate' AND '$enddate' ")->row();
//			$data["customerjackpot"]=$this->db->query("SELECT SUM(percentage) as total FROM tbl_customer_jackpot WHERE date BETWEEN '$startdate' AND '$enddate' ")->row();
			$data["totalstock"]=$this->db->query("SELECT SUM((price/smallitemcount)*total_smallitemcount) as total FROM tbl_shop_stock")->row();
			$data["totaldeposit"]=$this->db->query("SELECT amount as total FROM tbl_deposit WHERE year='".date('Y')."'")->row();
	//		$data["alljackpot"]=$this->db->query("SELECT total FROM tbl_all_jackpot")->row();
				
				
		}
		
		$data['years']=$this->admin_model->get_fullyears();
		$this->load->view('admin/income_outcome_list',$data);
	}


/**/

	function search_sale_profit()
	{
		$data = $this->data;
		$ostartdate=$this->input->post('startdate');
		$oenddate=$this->input->post('enddate');
		$startdate=date("Y-m-d",strtotime($this->input->post('startdate')));
		$enddate=date("Y-m-d",strtotime($this->input->post('enddate')));

		if($ostartdate != "" && $oenddate=="")
		{

		 	$data["dateinterval"]=date("Y-F-d",strtotime($startdate));
		 	$data['lists']=$this->db->query("SELECT DISTINCT (tbl_sale.product_code), SUM(tbl_sale.total) as total, SUM(tbl_sale.item_count) as totalitem_count,tbl_sale.date,tbl_sale.product_name,tbl_product_price.average_purchase_price,tbl_sale.unit FROM tbl_sale LEFT JOIN tbl_product_price ON tbl_sale.product_code=tbl_product_price.product_code WHERE tbl_sale.date='$startdate' GROUP BY tbl_sale.product_code,tbl_sale.date ORDER BY tbl_sale.date");
					
		 	
		}

		elseif($ostartdate=="" && $oenddate !="")
		{
			$data["dateinterval"]=date("Y-F-d",strtotime($enddate));	
			$data['lists']=$this->db->query("SELECT DISTINCT (tbl_sale.product_code), SUM(tbl_sale.total) as total, SUM(tbl_sale.item_count) as totalitem_count,tbl_sale.date,tbl_sale.product_name,tbl_product_price.average_purchase_price,tbl_sale.unit FROM tbl_sale LEFT JOIN tbl_product_price ON tbl_sale.product_code=tbl_product_price.product_code WHERE tbl_sale.date='$enddate' GROUP BY tbl_sale.product_code,tbl_sale.date ORDER BY tbl_sale.date");
			
		}

		elseif($ostartdate=="" && $oenddate=="")
		{
			$data["dateinterval"]=date("Y-m-d");
			$data['lists']=$this->db->query("SELECT DISTINCT (tbl_sale.product_code), SUM(tbl_sale.total) as total, SUM(tbl_sale.item_count) as totalitem_count,tbl_sale.date,tbl_sale.product_name,tbl_product_price.average_purchase_price,tbl_sale.unit FROM tbl_sale LEFT JOIN tbl_product_price ON tbl_sale.product_code=tbl_product_price.product_code WHERE tbl_sale.date=CURDATE() GROUP BY tbl_sale.product_code,tbl_sale.date ORDER BY tbl_sale.date");
			
		}

		elseif($ostartdate !="" && $oenddate !="")
		{
			
			$data["dateinterval"]=date("Y-F-d",strtotime($startdate))." မွ ".date("Y-F-d",strtotime($enddate))." ထိ ";
			$data['lists']=$this->db->query("SELECT DISTINCT (tbl_sale.product_code), SUM(tbl_sale.total) as total, SUM(tbl_sale.item_count) as totalitem_count,tbl_sale.date,tbl_sale.product_name,tbl_product_price.average_purchase_price,tbl_sale.unit FROM tbl_sale LEFT JOIN tbl_product_price ON tbl_sale.product_code=tbl_product_price.product_code WHERE tbl_sale.date BETWEEN '$startdate' AND '$enddate' GROUP BY tbl_sale.product_code,tbl_sale.date ORDER BY tbl_sale.date");
				
			}
	
		$this->load->view('admin/sale_profit_list',$data);
	}



	/*Left Over list after deleted*/

	function delete_left_data_list($table)
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
				$data["dateinterval"]=date("Y-m-d");
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
				$data["dateinterval"]=date("Y-m-d");			
				$data['lists']=$this->db->query("SELECT DISTINCT (tbl_sale.product_code), SUM(tbl_sale.total) as total, sum(tbl_sale.item_count) as totalitem_count,tbl_sale.date,tbl_sale.product_name,tbl_product_price.average_smallitem_price,tbl_product_price.purchase_price FROM tbl_sale LEFT JOIN tbl_product_price ON tbl_sale.product_code=tbl_product_price.product_code WHERE tbl_sale.date=CURDATE() GROUP BY tbl_sale.product_code,tbl_product_price.product_code, tbl_sale.date ORDER BY tbl_sale.date");
				break;

				case 'damage':
				$data["lists"]=$this->db->query("SELECT * FROM tbl_damage WHERE date=CURDATE()");
				break;

				case 'customer':
				$data["lists"]=$this->db->query("SELECT * FROM tbl_customer ORDER BY  customer_name");
				break;

				case 'supplier':
				$data["lists"]=$this->db->query("SELECT * FROM tbl_supplier ORDER BY  supplier_name");
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
				$table="sale_order_header";
				break;

				case "purchase_order" :				
				$data["lists"]=$this->db->query("SELECT * FROM tbl_purchase_order_header WHERE status=0 ORDER BY voucherno DESC");
				$table="purchase_order_header";
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


				case "showroom_stock" : 
				if($this->uri->segment(4))
				{
					$this->db->select("tbl_showroom.*,tbl_showroom_stock.*");
					$this->db->join("tbl_showroom","tbl_showroom.id=tbl_showroom_stock.showroom_id");
					$this->db->order_by("tbl_showroom_stock.showroom_id","DESC");
					$this->db->order_by("tbl_showroom_stock.product_code","DESC");

					$data["lists"]=$this->db->get_where("tbl_showroom_stock",array('tbl_showroom_stock.showroom_id'=>urldecode($this->uri->segment(4))));

					//$data["lists"]=$this->db->order_by("product_code","DESC")->get_where("tbl_showroom_stock",array('category'=>urldecode($this->uri->segment(4))));
				}
				else
				{
					$this->db->select("tbl_showroom.*,tbl_showroom_stock.*");
					$this->db->join("tbl_showroom","tbl_showroom.id=tbl_showroom_stock.showroom_id");
					$this->db->order_by("tbl_showroom_stock.product_code","DESC");
					$data["lists"]=$this->db->get("tbl_".$table);
				}

				//$data["categories"]=$this->db->query("SELECT DISTINCT category FROM tbl_showroom_stock order by category ASC");
				$data["showrooms"]=$this->db->query("SELECT tbl_showroom.* FROM tbl_showroom right join tbl_showroom_stock ON tbl_showroom.id=tbl_showroom_stock.showroom_id group by tbl_showroom_stock.showroom_id order by tbl_showroom.name ASC ");
				break;



				case "consinement_stock" : 
				if($this->uri->segment(4))
				{
					$this->db->select("tbl_consinement.*,tbl_consinement_stock.*");
					$this->db->join("tbl_consinement","tbl_consinement.id=tbl_consinement_stock.consinement_id");
					$this->db->order_by("tbl_consinement_stock.consinement_id","DESC");
					$this->db->order_by("tbl_consinement_stock.product_code","DESC");

					$data["lists"]=$this->db->get_where("tbl_consinement_stock",array('tbl_consinement_stock.consinement_id'=>urldecode($this->uri->segment(4))));

					//$data["lists"]=$this->db->order_by("product_code","DESC")->get_where("tbl_consinement_stock",array('category'=>urldecode($this->uri->segment(4))));
				}
				else
				{
					$this->db->select("tbl_consinement.*,tbl_consinement_stock.*");
					$this->db->join("tbl_consinement","tbl_consinement.id=tbl_consinement_stock.consinement_id");
					$this->db->order_by("tbl_consinement_stock.product_code","DESC");
					$data["lists"]=$this->db->get("tbl_".$table);
				}

				//$data["categories"]=$this->db->query("SELECT DISTINCT category FROM tbl_showroom_stock order by category ASC");
				$data["consinements"]=$this->db->query("SELECT tbl_consinement.* FROM tbl_consinement inner join tbl_consinement_stock ON tbl_consinement.id=tbl_consinement_stock.consinement_id group by tbl_consinement.name order by tbl_consinement.name ASC ");
				break;



				case "subwarehouse_stock" : 
				if($this->uri->segment(4))
				{
					$this->db->select("tbl_subwarehouse.*,tbl_subwarehouse_stock.*");
					$this->db->join("tbl_subwarehouse","tbl_subwarehouse.id=tbl_subwarehouse_stock.subwarehouse_id");
					$this->db->order_by("tbl_subwarehouse_stock.subwarehouse_id","DESC");
					$this->db->order_by("tbl_subwarehouse_stock.product_code","DESC");

					$data["lists"]=$this->db->get_where("tbl_subwarehouse_stock",array('tbl_subwarehouse_stock.subwarehouse_id'=>urldecode($this->uri->segment(4))));

					//$data["lists"]=$this->db->order_by("product_code","DESC")->get_where("tbl_subwarehouse_stock",array('category'=>urldecode($this->uri->segment(4))));
				}
				else
				{
					$this->db->select("tbl_subwarehouse.*,tbl_subwarehouse_stock.*");
					$this->db->join("tbl_subwarehouse","tbl_subwarehouse.id=tbl_subwarehouse_stock.subwarehouse_id");
					$this->db->order_by("tbl_subwarehouse_stock.product_code","DESC");
					$data["lists"]=$this->db->get("tbl_".$table);
				}

				//$data["categories"]=$this->db->query("SELECT DISTINCT category FROM tbl_showroom_stock order by category ASC");
				$data["subwarehouses"]=$this->db->query("SELECT tbl_subwarehouse.* FROM tbl_subwarehouse right join tbl_subwarehouse_stock ON tbl_subwarehouse.id=tbl_subwarehouse_stock.subwarehouse_id group by tbl_subwarehouse_stock.subwarehouse_id order by tbl_subwarehouse.name ASC ");
				break;


				case "category" :
				$data["lists"]=$this->db->query("SELECT DISTINCT category FROM tbl_unit order by category ASC");
				break;

				case "warehouse1" :
				$data["categories"]=$this->db->query("SELECT DISTINCT category FROM tbl_warehouse1 order by category ASC");
				break;

				$data["subwarehouse"]=$this->admin_model->grab_subwarehouse();
				$data["lists"]=$this->db->order_by("product_code","DESC")->get("tbl_".$table);
				break;




				default:
				$data["lists"]=$this->db->get("tbl_".$table);
				break;
			
			}			

			//$data["main_content"]=$table;
			$this->load->view("admin/".$table."_list",$data);		
		
	}





	




	/*Edit form*/

	function edit_form()
	{

		if(get_cookie("admin_cookie"))
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

	}
	else
	{
		redirect("site");
	}
	}//



	





	
// Stock Form Data Insert finish here

/*Create Debt From Customer*/


	function create_debt_from_customer()
	{
		$today=date("Y-m-d");
		
			
			$customer=explode("#", $this->input->post('customer_name'));
			if($this->input->post("require") !="" || $this->input->post("require") !=0)
			{
				$total=$this->input->post("require")*-1;
			}
			if($this->input->post("exceed") !="" || $this->input->post("exceed") !=0 )
			{
				$total=$this->input->post("exceed");
			}
			
			$date=date("Y-m-d",strtotime($this->input->post("date")));
		
			$query=$this->db->query("UPDATE tbl_customer set total_debt=total_debt+'$total', last_date='$date' WHERE id='$customer[1]'");
	
							
			if($query)
			{

				$status=1;
				
			}

			else
			{
				
				$status=0;							

			}

			echo $status;


		
		
	}//


/*Create Debt to Supplier*/




	function create_debt_to_supplier()
	{
		$today=date("Y-m-d");
		
			
			$supplier=explode("#", $this->input->post('supplier_name'));
			if($this->input->post("require") !="" || $this->input->post("require") !=0)
			{
				$total=$this->input->post("require")*-1;
			}
			if($this->input->post("exceed") !="" || $this->input->post("exceed") !=0 )
			{
				$total=$this->input->post("exceed");
			}
			
			$date=date("Y-m-d",strtotime($this->input->post("date")));
		
			$query=$this->db->query("UPDATE tbl_supplier set total_debt=total_debt+'$total', last_date='$date' WHERE id='$supplier[1]'");
	
							
			if($query)
			{

				$status=1;
				
			}

			else
			{
				
				$status=0;							

			}

			echo $status;


		
		
	}


	/**/


	function backup_data()
	{
		
$table=$this->uri->segment(3);
$xls_filename = $table.'_'.date('Y-m-d').'.xls'; 

		
header("Content-Type: application/doc;charset=utf-8");
header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=$xls_filename");
header("Pragma: no-cache");
header("Expires: 0");

 
// Start of printing column names as names of MySQL fields
$result = mysql_query("Select * from tbl_$table");
 
$sep = "\t"; // tabbed character
 
// Start of printing column names as names of MySQL fields
for ($i = 0; $i<mysql_num_fields($result); $i++) {
  echo strtoupper(mysql_field_name($result, $i)) . "\t";
}
print("\n");
// End of printing column names
 
// Start while loop to get data
while($row = mysql_fetch_row($result))
{
  $schema_insert = "";
  for($j=0; $j<mysql_num_fields($result); $j++)
  {
    if(!isset($row[$j])) {
      $schema_insert .= "NULL".$sep;
    }
    elseif ($row[$j] != "") {
      $schema_insert .= "$row[$j]".$sep;
    }
    else {
      $schema_insert .= "".$sep;
    }
  }
  $schema_insert = str_replace($sep."$", "", $schema_insert);
  $schema_insert = preg_replace("/\r\n|\n\r|\n|\r/", " ", $schema_insert);
  $schema_insert .= "\t";
  print(trim($schema_insert));
  print "\n";
		
		}




	
	}

}



