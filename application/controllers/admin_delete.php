<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin_delete extends CI_Controller {


	
function delete()
	{	
	if($this->session->userdata("AdminUser") &&  $this->session->userdata("AdminPass"))
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
		
		}
	else
		{
			$data["message"]="Login to access this page";
			$this->load->view("login_form",$data);
		}
	}//




}

 ?>