<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Smart Sale  | Backend Data Administrator</title>
  <base href="<?=base_url()?>"></base>
  <link href="<?=base_url()?>images/favicon.ico" rel="shortcut icon"/>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/signin.css">
<!--  <link rel="stylesheet" type="text/css" href="css/sb-admin.css">
  <link rel="stylesheet" type="text/css" href="css/mystyle.css"> -->
   <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
 <script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
     <link rel="stylesheet" type="text/css" href="css/jquery.ui.all.css">
  <link rel="stylesheet" type="text/css" href="css/demo.css">
  <script type="text/javascript" src="js/jquery.ui.core.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/jquery.ui.datepicker.js"></script>
    <?php
$session_id=$this->db->get_where("login_validate",array('session_id'=>$this->session->userdata("session_id")))->row();
if($this->session->userdata("session_id")==$session_id->session_id && $this->session->userdata("IsLogin")==true)
    {


?>
 <div class="container">
<!--  <nav class="navbar-fixed-top" role="navigation" style="background:white;border-bottom:2px solid #428bca;">
    <span class="btn btn-default active" style="float:right;margin-top:10px" onclick="showdialogform('insert_form/debt_from_customer_form')">+ <?=$addnew?></span>
        
            <form name="getreport" style="margin:10px" id="debt_from_customer">
                  <?=$from?> <input type="text" name="startdate" class="form-control-sale" id="date1"/>
              <?=$to?> <input type="text" name="enddate" class="form-control-sale" id="date2"/>
            
              Colunm <select name="colunm" class="form-control-sale" >

                      <option value="customer">Customer Name</option> 
                      
              </select>
               Value <input type="text" name="search" class="form-control-sale" />
              
              <input type="button" class="btn btn-primary" value="<?=$search?>" onclick="searchsingle('debt_from_customer')">
            
            </form>
             </nav>
            <br/><br/> -->
           
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-bars"></i> <?=$debtfromcustomertitle?></h3>
              </div>
              <div class="panel-body">
              <table class="table table-bordered table-hover table-striped tablesorter">
                    <thead>
                      <tr>
                        <th> <?=$no?></th>                       
                        <th><?=$customer?></th>
                        <th><?=$amount?></th>                         
                        <th><?=$date?></th>
                           
                      </tr>
                    </thead>
                    <tbody id="content">
                    <?php
                    $count=1;
                    $total=0;
                  
                       
            						foreach($lists->result() as $list):
            					?>
                                  <tr>
                        <td><?=$count?></td>
                      
                        <td><?=$list->customer?></td>                       
                         <td><?=$list->returnamount?></td>
                         <td><?=$list->date?></td>
                          </tr>
                           <?php
                           $count++;
                           $total+=$list->returnamount;
                					endforeach;

                				
                				?>
                        <tr>
                    <td align="right" colspan="2">All Total </td> <td colspan="3"> <?=number_format(abs($total))?></td>
                    </tr>
                  
                    </tbody>
                  </table>
                   
      </div>
    </div>
  </div>