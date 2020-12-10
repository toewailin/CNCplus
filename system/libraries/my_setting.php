<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP 5.1.6 or newer
 *
 * @package		CodeIgniter
 * @author		ExpressionEngine Dev Team
 * @copyright	Copyright (c) 2008 - 2011, EllisLab, Inc.
 * @license		http://codeigniter.com/user_guide/license.html
 * @link		http://codeigniter.com
 * @since		Version 1.0
 * @filesource
 */

// ------------------------------------------------------------------------

/**
 * Pagination Class
 *
 * @package		CodeIgniter
 * @subpackage	Libraries
 * @category	CI_My_setting
 * @author		ExpressionEngine Dev Team
 * @link		http://codeigniter.com/user_guide/libraries/pagination.html
 */
class CI_My_setting extend {

public function __construct()
	{
	
	$this->CI =& get_instance();
	$this->CI->load->library('session');
if($this->CI->session->userdata("language")=="english")
{

$user="User Lists";
$promotion="Promotion";
$edit="Edit";
$delete="Delete";
$date="Date";
$advance="Advance";
$balance="Balance";
$stock="Stock Lists";
$currentprice="Current Prices";
$lastprice="Last Prices";
$sale="Sale List";
$purchase="Purchase Lists";
$product_price="Product Pricing Lists";
$runout_remind_alert="Run Out Remind Alert";
$damage="Damage Lists";
$jackpot="Jackpot Lists";
$unit="Unit Lists";
$discountbydate="Discount By Date";
$discountbyamount="Discount By Amount";
$category="Product Category Lists";
$incomeoutcome="Income and Outcome Lists";
$generaloutcome="General Outcome Lists";
$debttosupplier="Debt To Supplier Lists";
$debtfromsupplier="Debt From Customer Lists";

$product_code="Code No";
$product_name="Product Name";
$unit="Unit";
$smallitemcount="Containing Items Count";
$price="Price";
$quantity="Quantity";
$discount="Discount Per Item";
$total="Total";
$customer="Customer Name";
$alltotal="All Total";
$discountfromall="Discount From All Total";
$tax="Tax";
$netamount="Net Amount";
$receive="Receive";
$refund="Refund";

}
else
{

$user="ေဆာ့၀ဲ အသံုးျပဳသူစာရင္း";
$promotion="အေရာင္းျမွင့္တင္ျခင္း";
$edit="ျပင္ရန္";
$delete="ဖ်က္ရန္";
$date="ရက္စြဲ";
$advance="ေပးေခ်ေငြ";
$balance="က်န္ေငြ";
$stock="ကုန္လက္က်န္စာရင္း";
$currentprice="လက္ရွိေစ်းႏႈန္းမ်ား";
$lastprice="ယခင္ေစ်းႏႈန္းမ်ား";
$sale="အေရာင္းစာရင္း";
$purchase="ကုန္၀ယ္စာရင္း";
$product_price="ပစၥည္းေစ်းႏႈန္း သတ္မွတ္ခ်က္မ်ား";
$runout_remind_alert="ကုန္ခါနီးပစၥည္းမ်ား";
$damage="ကုန္အပ်က္အစီး စာရင္း";
$jackpot="မဲလဲလွယ္မႈစာရင္း";
$unit="အသံုးျပဳေနဆဲ ယူနစ္မ်ား";
$discountbydate="ရက္အလိုက္သတ္မွတ္ေသာ Discount သတ္မွတ္ခ်က္မ်ား";
$discountbyamount="ေငြပမာဏျဖင့္သတ္မွတ္ေသာ Discount သတ္မွတ္ခ်က္မ်ား";
$category="ဆိုင္တြင္းရွိ ကုန္ပစၥည္း အမ်ိဳးအစားမ်ား";
$incomeoutcome="ထြက္ေငြ ၀င္ေငြ အရွံး အျမတ္ စာရင္း";
$generaloutcome="အေထြေထြ အသံုးစာရိတ္ စာရင္း";
$debttosupplier="ဆိုင္မွ ေပးရန္ရွိေသာ အေၾကြးစာရင္း";
$debtfromsupplier="ဆိုင္မွ ရရန္ရွိေသာ အေၾကႊးစာရင္း";

$product_code="ကုဒ္နံပါတ္";
$product_name="ကုန္ပစၥည္းအမည္";
$unit="ယူနစ္";
$smallitemcount="ပါ၀င္ပစၥည္းအေရအတြက္";
$price="ေစ်းႏႈန္း";
$quantity="ကုန္ပစၥည္း အေရအတြက္";
$discount="ကုန္ပစၥည္းတစ္ခုခ်င္းစီ ေလွ်ာ့ေစ်း";
$total="စုစုေပါင္း";
$customer="၀ယ္သူအမည္";
$alltotal="အားလံုးစုစုေပါင္း";
$discountfromall="အားလံုးစုစုေပါင္းမွ ေလွ်ာ့ေစ်း";
$tax="အခြန္";
$netamount="အသားတင္စုစုေပါင္းက်သင့္ေငြ";
$receive="၀ယ္သူမွေပးေငြ";
$refund="ျပန္အမ္းေငြ";
}
	
}
}
// END Pagination Class

/* End of file Pagination.php */
/* Location: ./system/libraries/Pagination.php */