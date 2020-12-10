<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Site_model extends CI_Model{

//date
	function grab_date()
	{
		$datestring = " %Y-%m-%d";
		$date= mdate($datestring);
		return $date;
		}
	function grab_time()
	{
		$timestring = "%h:%i %a";
		$time= mdate($timestring);
		return $time;
	}//

} 

/*site_model end here*/