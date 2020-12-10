// JavaScript Document
var site_url;
site_url="http://localhost:8080/cnc/index.php/";
//site_url="http://192.168.1.106:8080/cnc/index.php/";


$(document).ready(function(){
	
	//$("input.pcode").focus();
	//$('input').attr('autocomplete', 'off');
	//$(".creditpay").hide();
	

/*	$('.pagination a').click(function(eve){
		
		eve.preventDefault();
		var link = $(this).attr('href');
		
		$.ajax({
			
			url:link,
			type:"GET",
			dataType : 'html',
			success:function(html)
			{
			updatePage(html);	
			}
			});
		});*/



	});


/*Change to MMK*/

function changetommk(price)
{
	price=parseFloat(price);
	exchangerate=parseFloat($("input[name='exchangerate']").val());
	$("input[name='price']").val(price*exchangerate);
	
}

/*get_dropunit*/

function get_dropunit(unit,arg)
{

	if(unit=="")
	{
	$(arg.target).parent().find("div.display").html("");
	
	}
	else
	{

	
	$.ajax({
	type: "POST",
	url:  site_url+"admin/get_dropunit/",
	data: "unit="+ unit ,
	success: function(html){
							  
						   
							$(arg.target).parent().find("div.display").html(html).show();
						}
		
		});

	
	}
	
}


/**/


function get_dropcategory(category,arg)
{

	if(category=="")
	{
	$(arg.target).parent().find("div.display").html("");
	
	}
	else
	{

	
	$.ajax({
	type: "POST",
	url:  site_url+"admin/get_dropcategory/",
	data: "category="+ category ,
	success: function(html){
							
							$(arg.target).parent().find("div.display").html(html).show();
						}
		
		});

	
	}
	
}


/*Add Row*/

function addrow(form)
{

x=$("form#purchase").serializeArray();

 
 tr="<tr>";
 $.each(x, function(i, field){    
if(field.name=="product_code" || field.name=="product_name" || field.name=="unit" || field.name=="price" || field.name=="quantity" ||  field.name=="subtotal" )
{

tr +="<td>"+field.value+"</td>"
}
else
{

}

tr+="<input type='hidden' name='"+field.name+"s[]' value='"+field.value+"'/>";
 //$("form#hide-text").append("<input type='hidden' name='"+field.name+"s[]' value='"+field.value+"'/>");   
 
  });
    
  

tr+="<td><a onclick='premover(this)' style='cursor:pointer'>x</a></td></tr>";
	 $("#addrow").append(tr);
	//$("#hiddentotal").val(parseFloat($("#hiddentotal").val())+parseFloat($("#ptotal").val()));

	transportationcharges=parseFloat($("#transportationcharges").val());
	transferrate=parseFloat($("#transferrate").val());
	//costforproduct=parseFloat($("#quantity").val())*parseFloat($("#price").val());
	//custom_fee=parseFloat($("#custom_fee").val());
	disvalue=parseFloat($("#disvalue").val());
	//alltotal=parseFloat($("#alltotal").val());
	subtotal=parseFloat($("#subtotal").val());


	totaldiscount=parseFloat($("#totaldiscount").val())+disvalue;
	totaltransportationcharges=parseFloat($("#totaltransportationcharges").val())+transportationcharges;
	totaltransferrate=parseFloat($("#totaltransferrate").val())+transferrate;
	//totalcustomfee=parseFloat($("#totalcustomfee").val())+custom_fee;
	netamounttosupplier=parseFloat($("#netamounttosupplier").val())+subtotal;

	totaldebt=$("#totaldebt").find("input[name='totaldebt']").val();  
	$("#advance").val(netamounttosupplier-(parseFloat(totaldebt)));
	

	$("#netamounttosupplier").val(netamounttosupplier);
	$("#alltotal").val(netamounttosupplier+totaltransportationcharges+totaltransferrate);
	$("#totaldiscount").val(totaldiscount);
	
	$("#totaltransportationcharges").val(totaltransportationcharges);
	$("#totaltransferrate").val(totaltransferrate);
	//$("#balance").val(netamounttosupplier);

	//$("#totalcustomfee").val(totalcustomfee+custom_fee);
	$("#product_code").val("");
	$("#product_name").val("");
	$("#unit").html("<option>.......</option>");
	$("#price").val(0);
	$("#quantity").val(1);
	$("#smallitemcount").val(0);
	$("#ptotal").val(0);
	$("#pdispercent").val(0);
	$("#disvalue").val(0);
	$("#subtotal").val(0);
	$("#totalqty").val(1);
	$("#itemprice").val(0);
	$("#transportationcharges").val(0);
	$("#transferrate").val(0);
	//$("#custom_fee").val(0);
	$("#amountforeachunit").val(0);
	$("#amountforsmallitem").val(0);


	//$("#totalcostforproduct").val(parseFloat($("#totalcostforproduct").val())+costforproduct);
	//$("#totaldiscount").val(parseFloat($("#totaldiscount").val())+discount);
	//$("#netamounttosupplier").val(parseFloat($("#totalcostforproduct").val())-parseFloat($("#totaldiscount").val()));
	
	//$("#alltotal").val(alltotal+netamount);

	
}



function cal_balance(pay)
{

	alltotal=parseFloat($("#alltotal").val());
	pay=parseFloat(pay);
	
	$("#balance").val(alltotal-pay);
}


/**/

function payadvance(advance,netamount)
{
	balance=parseFloat(advance)-parseFloat(netamount);
	$("#balance").val(balance);
}


/**/

function makebackup()
{
	var loading=$("#dialog_frame").prepend('<div class="loading-indication" id="loading-indication"><img src="http://192.168.1.1/images/ajax-loader.gif" /> Loading...</div>');
	//$("#dialog_frame").prepend(loading);
	$.ajax({
				type:"POST",
				url : "http://192.168.1.1/dbbackup.php",
			
				success:function(e)
				{
					var elem = document.getElementById("loading-indication");
					elem.parentNode.removeChild(elem);
					alert("finish");				
					
				
				}

			});
					
}

/**/

function checkexceedamount(refund)
{
	var received=$("#received").val();
	var alltotal=$("#alltotal").val()
	$("#exceedamount").val(parseFloat(received)-(parseFloat(refund)+parseFloat(alltotal)));
}


/*calculate_nettotalto_supplier*/

function calculate_nettotalto_supplier(pvalue,original_total,id,type)
{
	
	pvalue=parseFloat(pvalue);
	original_total=parseFloat(original_total);
	

	if(type=="percent")
	{
			var disvalue= original_total *(pvalue/100);
			$("#discount_value"+id).val(disvalue);
			var nettotal=original_total-disvalue;
			var dispercent=pvalue;
			
	}


	else if(type=="value")
	{
		
		var disvalue= pvalue;
		var nettotal=original_total-disvalue;
		var dispercent=0;
		
	}

		data="disvalue="+disvalue+"&dispercent="+dispercent+"&nettotal="+nettotal+"&id="+id;
		$.ajax({
				type:"POST",
				url : site_url+"admin/return_debt_to_supplier/1/",
				data: data,
				
		});

	$("#net_total"+id).text(nettotal);

	$("#paid_total"+id).focus();


}

/*discountbysaleamount*/

function discountbysaleamount(percent,total,id)
{
	var disvalue= total *(percent/100);
	$("#disvalue"+id).text(disvalue);

}

/*Calculate exceed amount to payment*/

function calculate_exceedamount_supplier(paid,id,supplier,nettotal)
{
		var nettotal=$("#net_total"+id).text();
		data="paid="+paid+"&id="+id+"&supplier="+supplier+"&nettotal="+nettotal;
		$.ajax({
				type:"POST",
				url : site_url+"admin/return_debt_to_supplier/2/",
				data: data,
				success:function(e)
				{
						e=parseFloat(e);
						if(e > 0)
						{
							$("#exceed_amount"+id).text(e);
							$("#require_amount"+id).text("0");
						}
						else if(e < 0)
						{
							$("#require_amount"+id).text(e);
							$("#exceed_amount"+id).text("0");
						}

						else if(e==0)
						{
							$("#exceed_amount"+id).text("0");
							$("#require_amount"+id).text("0");
						}
					
					
					$("#paid_date"+id).text(y+"."+mon+"."+d);


				}
		});


	
}


/**/

function purchase_insert(form)
{
	data=($("#purchase-heading").serialize())+"&"+($("#purchase").serialize())+"&"+($("#purchase-send").serialize());
	//alert($("#hide-text").serialize());
	//data=$("#purchase").serialize();
	//alert($("#hide-text").serialize());
	$.ajax({
				type:"POST",
				url : site_url+"admin/create_"+form,
				data: data,
				success:function(e)
				{
					if(e==0)
					{
						alert("fail to save data");
					}
					else if(e==2)
					{
						alert("please fill valid data");
					}
					else
					{
										
					alert("Successfull saved");
					//window.close();
					//showdialogform('data_list/'+form);
					updatePage(form);
						
					}
					
				}
		});
}


/**/

/*
function return_debt(form)
{

	data=$('#'+form).serialize();	
	
	$.ajax({
				type:"POST",
				url : site_url+"admin/return_debt/"+form,
				data: data,
				success:function(e)
				{
					if(e==0)
					{
						alert("fail to save data");
					}
					else if(e==2)
					{
						alert("please fill valid data");
					}
					else
					{
										
					alert("Successfull saved");
					window.close();
					showdialogform('data_list/'+form);
						
					}
					
				}
		});
}
*/

function calculate_saledelivery_total(nettotal,totaltransportationcharges,totaltranserfrate)
{
	alltotal=parseFloat(nettotal)+parseFloat(totaltransportationcharges)+parseFloat(totaltranserfrate);
	$("#alltotal").val(alltotal);
	$("#balance").val(alltotal);
}


function return_debt(formid,returntype)
{

	data=$('#'+formid).serialize();	
	
	$.ajax({
				type:"POST",
				url : site_url+"admin/return_debt/",
				data: data,
				success:function(e)
				{
					//window.location=site_url+"admin/data_list/"+returntype;
					
					//$("#paid_date"+id).text(y+"."+mon+"."+d);
					if(e==0)
					{
						alert("fail to save data");
					}
					else if(e==2)
					{
						alert("please fill valid data");
					}
					else if(e==1)
					{
										
					alert("Successfull saved");
					$(".modal").hide();

					updatePage(returntype);
						
					}
				}
		});
}

/*checkpaytype*/

function checkpaytype(type)
{
	if(type=="credit")
	{
		$(".creditpay").show();
	}

	else
	{
		$(".creditpay").hide();
	}
}

/*Views Details*/

function viewdetails(voucherno,debttype,amount)
{

	//window.close();
	width=screen.availWidth-50;
	height=screen.availHeight-70;
	var WinPrint = window.open('index.php/cashier/viewdetails/'+debttype+"/"+voucherno+"/"+amount, '','left=100,top=0,width='+width+',height='+height+',toolbar=0,scrollbars=1,status=0,fullscreen=1');
	
		
}//

/**/

function viewreturns(voucherno,debttype)
{

	width=screen.availWidth-50;
	height=screen.availHeight-70;
	var WinPrint = window.open('index.php/admin/viewreturns/'+debttype+"/"+voucherno, '','left=100,top=0,width='+width+',height='+height+',toolbar=0,scrollbars=1,status=0,fullscreen=1');
	
		
}//


/*Show Dialog Form*/

function showdialogform(form)
{
	
		$.ajax({
			type:"POST",
			url:site_url+"cashier/insert_form/"+form,

			success:function(e)
			{
				//alert(e);

				$("#dialog_frame").html(e);
			}
		});		
		//window.location.href=site_url+"admin/delete/"+page+"/"+pagenum+"/"+id;	
	
					
}


/* Update Page*/
  
function updatePage(form)
{
	
	$.ajax({
			type:"POST",
			url:site_url+"cashier/updated_data_list/"+form,

			success:function(e)
			{
				//alert(e);

				$("#cashier_wrapper").html(e);
			}
		});		
	
		
}


/*Show Search Form*/

function showsearchform(){

		 
    $("#searchform").animate({top:80},"slow");    

}


/*Search Close*/

function searchcolse()
{
	$("#searchform").animate({top:-200},"slow");
}


/*Make Delete*/
///....................
function makedelete(id,page,pagenum)
{


	if(pagenum =="")
	{
		pagenum=0;
	}

	else
	{
		pagenum=pagenum;
	}

	if(confirm("are you sure you want to delete this item ?"))
	{
		$.ajax({
			type:"POST",
			url:site_url+"admin/delete/"+page+"/"+pagenum+"/"+id,

			success:function(e)
			{

			//	alert(e);
				$("#content").html(e);
			}
		});		
		//window.location.href=site_url+"admin/delete/"+page+"/"+pagenum+"/"+id;	
	}	
}//


/*Make Edit*/
 function makeedit(id,page)
{

	
	/*if(pagenum =="")
	{
		pagenum=0;
	}
	else
	{
		pagenum=pagenum;
	}*/
	
		$.ajax({
			type:"POST",
			url:site_url+"admin/edit_form/"+page+"/"+id,

			success:function(e)
			{
				//alert(e);

				$("#dialog_frame").html(e);
			}
		});		
		//window.location.href=site_url+"admin/delete/"+page+"/"+pagenum+"/"+id;	
	
}

//.........................


function update_data(form)
{
	
		data=$('#'+form).serialize();
	
		$.ajax({
				type:"POST",
				url : site_url+"admin/update_"+form,
				data: data,
				success:function(e)
				{
					if(e==0)
					{
						alert("fail to save data");
					}
					else if(e==2)
					{
						alert("please fill valid data");
					}
					else if(e==1)
					{
										
					alert("Successfull saved");

					updatePage(form);
						
					}

					else
					{
						alert(e);
					}
				}

		});
			return false;
}//


///------------------------------


function stock_transfer(warehouse,id)
{
		data=$('#form'+id).serialize();
	
		$.ajax({
				type:"POST",
				url : site_url+"admin_stock_transfer/stock_transfer/"+id,
				data: data,
				success:function(e)
				{
					if(e==0)
					{
						alert("fail to save data");
					}
					else if(e==2)
					{
						alert("please fill valid data");
					}
					else if(e==1)
					{
										
					alert("Successfull saved");
					$('#transfer'+id).modal('hide');
					updatePage(warehouse);

					window.location.href=site_url+"cashier/data_list/"+warehouse;
						
					}

					else
					{
						alert(e);
					}
				}

		});
			//return false;
}//
//.........................

function show_form(form)
{
	
			$.ajax({
					type: "POST",
					url : site_url+"admin/insert_form/"+form,
					//data : data,
					success : function(e)
					{
					//alert(e);
					 $("#dialog_frame").html(e);	
					}			
			}); 
}//


/**/

function data_list(table)
{	

		$.ajax({
				type: "POST",
				url : site_url+"admin/data_list/"+table,
				//data : data,
				success : function(e)
				{
					
				 $("#dialog_frame").html(e);	
				
				}
			
			});
}//


/**/


function cashier_data_list(table)
{	

		$.ajax({
				type: "POST",
				url : site_url+"cashier/data_list/"+table,
				//data : data,
				success : function(e)
				{
					$("#dialog_frame").html(e);					
				}
			
			});
}//



/**/

function showreport(table)
{	

		

		/*alert($("#date1").val());
		alert($("#date2").val());
		if($("#date1").val()=="" || $("#date2").val())
		{
			alert("Startdate and Enddate must be filled");
		}
		
		else
		{
*/

		/*startdate=new Date(startdate);
		startdate=(startdate.getTime())/1000;
		enddate=new Date(enddate);
		enddate=(enddate.getTime())/1000;
		*/
		$("#content").html("<tr><td align='center' colspan='10'><img src='images/loading.gif'/></td></tr>");
		data=$("#"+table).serialize();

		$.ajax({
				type: "POST",
				url : site_url+"admin/showreport/"+table,
				data : data,
				success : function(e)
				{
					
					
				 $("#content").html(e);	
				
				}
			
			});
	//}
}//






/*
function searchsingle(value,colunm,table)
{	

		if(value=="")
		{
			alert("Enter some value for the selected colunm");
		}
		else
		{

			var data=$("#"+table).serialize();

		$.ajax({
				type: "POST",
				url : site_url+"admin/searchsingle/"+table,
				data : data,
				success : function(e)
				{
					
					
				 $("#content").html(e);	
				
				}
			
			});
	}
}

*/

/*DoneDelivery*/
function DoneDelivery(voucherno)
{
	data="voucherno="+voucherno;
	$.ajax({
				type: "POST",
				url : site_url+"admin/DoneDelivery/"+voucherno,
				data : data,
				success : function(e)
				{
					if(e==1)
					{
				
					$("#text_"+voucherno).html("<span>Finished</span>");	
				  	$("#date_"+voucherno).html("today");	
					}
					else
					{
						 $("#text_"+voucherno).html("<span>Error</span>");	
				
					}
					

				
				}
			
			});

}
/*DoneDelivery*/

function searchjackpotchange(table)
{
	$("#content").html("<tr><td align='center' colspan='10'><img src='images/loading.gif'/></td></tr>");
	var data=$("#"+table).serialize();

		$.ajax({
				type: "POST",
				url : site_url+"admin/searchjackpotchange/"+table,
				data : data,
				success : function(e)
				{
					
					
				 $("#content").html(e);	
				
				}
			
			});
}
/**/

function searchsingle(table)
{	


		$("#content").html("<tr><td align='center' colspan='10'><img src='images/loading.gif'/></td></tr>");

		var data=$("#"+table).serialize();

		$.ajax({
				type: "POST",
				url : site_url+"cashier/searchsingle/"+table,
				data : data,
				success : function(e)
				{
					
					
				 $("#content").html(e);	
				
				}
			
			});
	
}


function searchdebt(table)
{
	var data=$("#"+table).serialize();

		$.ajax({
				type: "POST",
				url : site_url+"admin/searchdebt/"+table,
				data : data,
				success : function(e)
				{
					
					
				 $("#content").html(e);	
				
				}
			
			});
	
}



function showadvancesearch(table)
{	

		data=$("#searchform").serialize();

		$.ajax({
				type: "POST",
				url : site_url+"admin/showadvancesearch/"+table,
				data : data,
				success : function(e)
				{
					
					
				 $("#content").html(e);	

				 searchcolse();
				
				}
			
			});
	
}
/**/


function search_incomeoutcome()
{
	
	$("#search").html("<tr><td align='center' colspan='10'><img src='images/loading.gif'/></td></tr>");
	var data=$("#income_outcome").serialize();
	//alert(data);

		$.ajax({
				type: "POST",
				url : site_url+"admin/income_outcome/",
				data : data,
				success : function(e)
				{
					
					
				 $("#search").html(e);	
				
				}
			
			});
}

function search_sale_profit()
{
		
	 $("#content").html("<tr><td align='center' colspan='10'><img src='images/loading.gif'/></td></tr>");

	var data=$("#sale_profit").serialize();
	//alert(data);

		$.ajax({
				type: "POST",
				url : site_url+"admin/search_sale_profit/",
				data : data,
				success : function(e)
				{
					
					
				 $("#search").html(e);	
				
				}
			
			});
}






/**/

function insert_form(form)
{
		data=$('#'+form).serialize();
		$.ajax({
				type:"POST",
				url : site_url+"cashier/create_"+form,
				data: data,
				success:function(e)
				{
					if(e==0)
					{
						alert("fail to save data");
					}
					else if(e==2)
					{
						alert("please fill valid data");
					}
					else if(e==3)
					{
						alert("No active promotion. Create active promotion first");
					}
					else if(e==1)
					{
										
					alert("Successfull saved");
					/*if(form=="purchase_delivery")
					{
						form="purchase_order";
					}
					if(form=="sale_delivery")
					{
						form="sale_order";
					}
					else
					{
						form=form;
					}*/

					updatePage(form);
						
					}
					else
					{
						
						print_voc(e);

							window.location.href=site_url+"cashier/data_list/sale_order";

					}
				}
		});
}//

/*

function showtime()
{

	var date=new Date();
	var h=date.getHours();
	var m=date.getMinutes();
	var s=date.getSeconds();

	var result=h+":"+m+":"+s;

	$('#showtime').html(result);

	setTimeout("showtime()",1000);
}
*/

function cashier_checkstock()
{
	$.ajax({
		type:"POST",
		url:site_url+"cashier/stockalert/",
		success : function(e)
					{
						
						  //s=e.parseFloat();
					//alert(e);
					 $("#stockalert").html(e);	
					
					
					}	
		
	});

	$.ajax({
		type:"POST",
		url:site_url+"cashier/debtalert/",
		success : function(e)
					{
					// d=e;
					 $("#debtalert").html(e);	
					

					}	
		
	});

	

	$.ajax({
		type:"POST",
		url:site_url+"admin/promotion_alert/",
		success : function(e)
					{
					//alert(e);
					 $("#promotionalert").html(e);	
					
					}	
		
	});

	

	var date=new Date();
	var h=parseFloat(date.getHours());
	var m=date.getMinutes();
	//var s=date.getSeconds();

	if(h>12)
    {
      a=" PM";
      h=h-12;
    }
   /* else if(h==12)
    {

    }*/

	//var result=h+":"+m+":"+s;
	var result=h+":"+m;

	$('#showtime').html(result);

	setTimeout("cashier_checkstock()",60000);
}


/*stockalert*/

function checkstock()
{

	//var s=0;
	//var d=0;
	$.ajax({
		type:"POST",
		url:site_url+"admin/stockalert/",
		success : function(e)
					{
						
						  //s=e.parseFloat();
					//alert(e);
					 $("#stockalert").html(e);	
					
					
					}	
		
	});

		$.ajax({
		type:"POST",
		url:site_url+"admin/shopstockalert/",
		success : function(e)
					{
						
						  //s=e.parseFloat();
					//alert(e);
					 $("#shopstockalert").html(e);	
					
					
					}	
		
	});

	$.ajax({
		type:"POST",
		url:site_url+"admin/debtalert/",
		success : function(e)
					{
					// d=e;
					 $("#debtalert").html(e);	
					

					}	
		
	});

	

	$.ajax({
		type:"POST",
		url:site_url+"admin/promotion_alert/",
		success : function(e)
					{
					//alert(e);
					 $("#promotionalert").html(e);	
					
					}	
		
	});

	

	var date=new Date();
	var h=date.getHours();
	var m=date.getMinutes();
	//var s=date.getSeconds();

	//var result=h+":"+m+":"+s;
	var result=h+":"+m;

	$('#showtime').html(result);

	setTimeout("checkstock()",60000);
}

///

/*function grabdataSccess(data) {

	console.log(data.length);
	console.log(this.getAttribute('name'));
	// var items = $(xml).find('items');
	 var i = 0;
	 var parent = $(this).parent().parent();
	 for (; i < data.length; i++) {
		for(var key in data[i]) {
			
			parent.find("input[name='"+key+"[]']").val(data[j][key]);
		}
	}
}*/


function update_account(form)
{
	data=$('#'+form).serialize();

		$.ajax({
				type:"POST",
				url : site_url+"cashier/account_setting",
				data: data,
				success:function(e)
				{
					if(e==0)
					{
						alert("Password can't changed");
					}

					else if(e==1)
					{
										
					alert("Password has been changed");
					window.close();
					//showdialogform('data_list/'+form);
						
					}

					else if(e==2)
					{
						alert("Your old password is wrong");
					}
					
				}

		});
			return false;
}

//....................cashier site
function grabdata(pcode,arg)
{

	var mainform=$(".cloneable-form");
		
	$.ajax({
		type:"POST",
		url:site_url+"cashier/grabdata/"+pcode,
		cache: false,
        dataType: "xml",
		
		
			success: function(xml) {
				


                $(xml).find('items').each(function(){
                    $(this).find("data").each(function(){
                        var pname = $(this).find('product_name').text(); 
                        var quantity=$(this).find('quantity').text();
                        var punit=$(this).find('unit').text();
                        var item_count=$(this).find('item_count').text();
                        var price=$(this).find('price').text();   
                           var discount=$(this).find('discount').text();             		    
                   		// $(mainform).find("input[name='product_name[]']").val(pname);   
                    $(arg.target).parent().parent().find("input[name='product_name[]']").val(pname);	
                    $(arg.target).parent().parent().find("input[name='unit[]']").val(punit);	
                    $(arg.target).parent().parent().find("input[name='item_count[]']").val(item_count);	
                    $(arg.target).parent().parent().find("input[name='item_count_hidden[]']").val(item_count);	                        
                   // $(arg.target).parent().parent().find("input[name='price[]']").val(price);
                    $(arg.target).parent().parent().find("input[name='discount[]']").val(discount);	
                    $(arg.target).parent().parent().find("input[name='unit[]']").focus();	
                       
                    });
                });
            }
		
	});
}


/**/

function grabitemcount(punit)
{
	pcode=$("#product_code").val();
	var data="unit="+punit+"&pcode="+pcode;
	$.ajax({
		type:"POST",
		url:site_url+"cashier/grabprice/",
		data:data,
		cache: false,
        dataType: "xml",
		
		
			success: function(xml) {
				

                $(xml).find('items').each(function(){
                    $(this).find("data").each(function(){                       
                        var item_count=$(this).find('item_count').text();
                        $("#smallitemcount").val(item_count);

                 });
                });
            }            
		
	});

}


/**/


function get_droplist(pcode,arg)
{

		
	var mainform=$(".cloneable-form");
	//var pcode=$(arg.target).parent().parent().find("input[name='product_code[]']").val();

	if(pcode=="")
	{
	$(arg.target).parent().parent().find("div").html("");
	
	}
	else
	{

	
	$.ajax({
	type: "POST",
	url:  site_url+"admin/get_droplist/",
	data: "pcode="+ pcode ,
	success: function(html){
							/*$(function() {
							 var availableTags = html;						     
						    $( ".display" ).autocomplete({
						      source: availableTags
						    });
						     });*/
						 
							$(arg.target).parent().parent().find("div").html(html).show();
						}
		
		});

	
	}
}
/**/

function fill_unit(Value,arg)
{

		$(arg.target).parent().parent().parent().find("input[name='unit']").val(Value);
		$('div.display').hide();

}


function fill_category(Value,arg)
{

		$(arg.target).parent().parent().parent().find("input[name='category']").val(Value);
		$('div.display').hide();

}

function get_drophide(arg)
{
	if(arg.value=="")
	{
	$("div#display").html("");
	
	}
}




function fill(Value,arg)
{
//$(arg.target).parent().parent().parent().find("input[name='product_code[]']").val(Value);
//$('.display').hide();


 
	//var mainform=$(".cloneable-form");
	if(arg.keyCode==13 || arg.keyCode == 9)
	{
		 arg.preventDefault(); 
	$.ajax({
		type:"POST",
		url:site_url+"admin/admingrabdata/"+Value,
		cache: false,
        dataType: "xml",
		
		
			success: function(xml) {			
				
			//alert

                $(xml).find('items').each(function(){
                    $(this).find("data").each(function(){
                        var pname = $(this).find('product_name').text(); 
                        //var punit=$(this).find('unit').text();
                        var myunits=$(this).find('myunits').text();
                        var price=$(this).find('price').text();
                        var item_count=$(this).find('item_count').text();                        
                        var discount=$(this).find('discount').text();
                        var myunits_array=myunits.split(",");
                        var unitopt="";
                        for ( i=0; i < myunits_array.length; i++ ) 

                        {

						unitopt+="<option value='"+myunits_array[i]+"'>"+myunits_array[i] + " - "+price+"</option>";

						}
						
                    
                      //
                        var price=$(this).find('price').text(); 

                        $("#product_code").val(Value);
                         $("#smallitemcount").val(item_count);
                    	$("#product_name").val(pname);   
                    	$("#unit").focus();
                     	 $(arg.target).parent().parent().find('[id]').html(unitopt);
                    $(arg.target).parent().parent().find("input[name='product_name[]']").val(pname);
                    $(arg.target).parent().parent().find("input[name='price[]']").val(price);
                    
                      $(arg.target).parent().parent().find("input[name='item_count[]']").val(item_count);
                       $(arg.target).parent().parent().find("input[name='item_count_hidden[]']").val(item_count);
                         $(arg.target).parent().parent().find("input[name='price[]']").val(price);  
                           $(arg.target).parent().parent().find("input[name='discount[]']").val(discount);  
                          $(arg.target).parent().parent().find("input[name='quantity[]']").select();


						 $(arg.target).parent().find("input[name='total[]']").val(price-discount);
					//	var total = parseFloat(total)-(parseFloat(parent.find("input[name='discount[]']").val())*qu);
						
                                    
                    	
                          });
                });
            }
		
	});

}
}

/**/


function grabprice(unit,arg)
{

	var mainform=$(".cloneable-form");
	var pcode=$(arg.target).parent().parent().find("input[name='product_code[]']").val();
	var data="unit="+unit+"&pcode="+pcode;
	$.ajax({
		type:"POST",
		url:site_url+"cashier/grabprice/",
		data:data,
		cache: false,
        dataType: "xml",
		
		
			success: function(xml) {
				


				//alert(xml);

                $(xml).find('items').each(function(){
                    $(this).find("data").each(function(){                       
                        var item_count=$(this).find('item_count').text();
                        var price=$(this).find('price').text();   
                        var discount=$(this).find('discount').text();
                       //alert(discount);
                    $(arg.target).parent().parent().find("input[name='item_count[]']").val(item_count);	
                    $(arg.target).parent().parent().find("input[name='item_count_hidden[]']").val(item_count);	                        
                    $(arg.target).parent().parent().find("input[name='price[]']").val(price);
               		 $(arg.target).parent().parent().find("input[name='discount[]']").val(discount);               		
               		
               		 qty= $(arg.target).parent().parent().find("input[name='quantity[]']").val();
               		 $(arg.target).parent().parent().find("input[name='total[]']").val(parseFloat(price)*parseFloat(qty));
               		   $(arg.target).parent().parent().find("input[name='price[]']").select();
               		 calculateSum();
                    });
                });
            }

          //   $(arg.target).parent().parent().find("input[name='quantity[]']").val(1);
               
		
	});

	
	//d$(arg.target).parent().parent().find("input[name='price[]']").focus();
}

/*****************/

function admin_grabprice(unit)
{
	pcode=$("#product_code").val();

	var data="unit="+unit+"&pcode="+pcode;
	$.ajax({
		type:"POST",
		url:site_url+"cashier/grabprice/",
		data:data,
		cache: false,
        dataType: "xml",
		
		
			success: function(xml) {
				


				//alert(xml);

                $(xml).find('items').each(function(){
                    $(this).find("data").each(function(){                       
                        var item_count=$(this).find('item_count').text();
                        var price=$(this).find('price').text();   
                        var discount=$(this).find('discount').text();


					    $("#smallitemcount").val(item_count);
				        $("#price").val(price);


				        });              

                });
            }

        
	});
}

/***********/

function updateqty(p_id,voucherno,qty,type)
{
		
		data="qty="+qty+"&p_id="+p_id+"&voucherno="+voucherno+"&type="+type;
		
		$.ajax({
				type:"POST",
				url : site_url+"admin/updateqty/",
				data: data,
				success:function(e)
				{

					alert(e);
					window.location=site_url+"admin/data_list/order/";

				}
		});


	
}


/*Update Own Amount*/
function updateamount(amount,id)
{
	data="amount="+amount+"&id="+id;
	$.ajax({
				type:"POST",
				url: site_url+"admin/updateamount/",
				data:data,
				success:function(e)
				{
					$("#totalown").text(e);
				}

			});
}


/*Check Debt*/

function check_debt(name,type)
{

		$.ajax({
		type:"POST",
		data:"name="+name+"&type="+type,
		url:site_url+"cashier/check_debt/",
		cache: false,
        dataType: "xml",
		success: function(xml) {

                $(xml).find('items').each(function(){
                $(this).find("data").each(function(){                       
                var totaldebt = $(this).find('totaldebt').text(); 
                var numrow=$(this).find('numrow').text();          
                	
                	$("#totaldebt").find("input[name='totaldebt']").val(parseFloat(totaldebt));                	
                	$("#alltotal").val(parseFloat($("#nettotal").val())-(parseFloat(totaldebt))); 
                	//alert(parseFloat(parseFloat($("#nettotal").val())-(parseFloat(totaldebt))));
                	$("#exceedamount").val(-(parseFloat($("#alltotal").val())));              
                                    
                    });
                });
            }
		
	});
}



/*Calculate Total*/
function calculate_total(qty,price)
{
	total=parseFloat(qty)*parseFloat(price);
	$("#ptotal").val(total);
	$("#totalqty").val(qty);
}

/*Grab Unit*/


function grabunit(pcode,arg)

{

var mainform=$(".cloneable-form");
		
	$.ajax({
		type:"POST",
		url:site_url+"admin/grabunit/"+pcode,
		cache: false,
        dataType: "xml",
		
		
			success: function(xml) {				


                $(xml).find('items').each(function(){
                    $(this).find("data").each(function(){
                       
                        var pname = $(this).find('product_name').text(); 
                        var punit=$(this).find('unit').text();
                        $(arg.target).parent().parent().find("input[name='product_name[]']").val(pname);	
                  	    $(arg.target).parent().parent().find("input[name='unit[]']").val(punit);
                  	    /* $(arg.target).parent().find("input[name='product_name'").val(pname);	
                  	    $(arg.target).parent().find("input[name='unit'").val(punit);	*/
                  	    $("#product_name").val(pname);
                  	     $("#unit").val(punit);
                      
                    });
                });
            }
		
	});


}

/**/

function Pgrabdata(pcode,arg)
{
	//var mainform=$(".cloneable-form");
		
	$.ajax({
		type:"POST",
		url:site_url+"admin/admingrabdata/"+pcode,
		cache: false,
        dataType: "xml",
		
		
			success: function(xml) {			
			

                $(xml).find('items').each(function(){
                    $(this).find("data").each(function(){
                        var pname = $(this).find('product_name').text(); 
                        //var punit=$(this).find('unit').text();
                        var myunits=$(this).find('myunits').text();
                        var price=$(this).find('price').text();
                        var item_count=$(this).find('item_count').text();                        
                        var discount=$(this).find('discount').text();
                        var myunits_array=myunits.split(",");
                        var unitopt="";
                        for ( i=0; i < myunits_array.length; i++ ) 

                        {

						unitopt+="<option value='"+myunits_array[i]+"'>"+myunits_array[i] + "</option>";

						}
						
                    
                      //
                        var price=$(this).find('price').text(); 
                         $("#smallitemcount").val(item_count);
                    	$("#product_name").val(pname);   
                     	 $(arg.target).parent().parent().find('[id]').html(unitopt);
                    $(arg.target).parent().parent().find("input[name='product_name[]']").val(pname);
                    $(arg.target).parent().parent().find("input[name='price[]']").val(price);
                    
                      $(arg.target).parent().parent().find("input[name='item_count[]']").val(item_count);
                       $(arg.target).parent().parent().find("input[name='item_count_hidden[]']").val(item_count);
                         $(arg.target).parent().parent().find("input[name='price[]']").val(price);  
                           $(arg.target).parent().parent().find("input[name='discount[]']").val(discount);  
                          $(arg.target).parent().parent().find("input[name='quantity[]']").select();


						 $(arg.target).parent().parent().find("input[name='total[]']").val(price-discount);
					//	var total = parseFloat(total)-(parseFloat(parent.find("input[name='discount[]']").val())*qu);
						
                                    
                    	
                          });
                });
            }
		
	});
}

/*Admin Grab Data*/

function admingrabdata(pcode,arg)

{


var mainform=$(".cloneable-form");
		
	$.ajax({
		type:"POST",
		url:site_url+"admin/admingrabdata/"+pcode,
		cache: false,
        dataType: "xml",
		
		
			success: function(xml) {				
			

                   $(xml).find('items').each(function(){
                    $(this).find("data").each(function(){
                        var pname = $(this).find('product_name').text(); 
                        //var punit=$(this).find('unit').text();
                        var myunits=$(this).find('myunits').text();
                        var price=$(this).find('price').text();
                        var item_count=$(this).find('item_count').text();  
                        var myunits_array=myunits.split(",");

                        var unitopt="";
                        for ( i=0; i < myunits_array.length; i++ ) 
                        {

						unitopt+="<option value='"+myunits_array[i]+"'>"+myunits_array[i] + "</option>";

						}
						
                    
                      //
                        var price=$(this).find('price').text(); 

                    	$("#product_name").val(pname);  
                    	$("#price").val(price); 
                     	 $("#unit").html(unitopt);
                     	 $("#smallitemcount").val(item_count);
                    $(arg.target).parent().parent().find("input[name='product_name[]']").val(pname);
                    $(arg.target).parent().parent().find("input[name='price[]']").val(price);
                    //  $(arg.target).parent().parent().find("input[name='quantity[]']").val(1);
                      $(arg.target).parent().parent().find("input[name='item_count[]']").val(item_count);
                        $(arg.target).parent().parent().find("input[name='price[]']").val(price);                 
                    	
                          });
                });
            }
		
	});


}


/*Insert Form*/




function cashier_preview(form)
{
		data=$('#'+form).serialize();
	
		$.ajax({
				type:"POST",
				url : site_url+"cashier/create_preview",
				data: data,
				success:function(e)
				{
					if(e==0)
					{
						alert("fail to save data");
					}
					else if(e==2)
					{
						alert("please fill valid data");
					}

					else
					{
						

							print_voc(e);

						
					}				
				
					
				}
		});
}//

function cashier_insert_form(form)
{
		data=$('#'+form).serialize();
		$.ajax({
				type:"POST",
				url : site_url+"cashier/create_"+form,
				data: data,
				success:function(e)
				{
					if(e==0)
					{
						alert("fail to save data");
					}
					else if(e==2)
					{
						alert("please fill valid data");
					}

					else
					{
						//alert(form);
						if(form=="sale" || form=="preview")
						{

							

							print_voc(e);

							window.location.href=site_url+"cashier";


		
						}

						else
						{
							alert("sucessfully save");
						}
						
					}				
				
					
				}
		});
}//


/****************************/

function print_voc(e)
{
		var WinPrint = window.open('', '','letf=0,top=0,width=700,height=900,toolbar=0,scrollbars=0,status=0');
						
			WinPrint.document.writeln('<table align="center" cellspacing="0" cellpadding="3" width="100%" style="font-family:Zawgyi-One;font-size:12px;color:gray"><caption><font size="5">ဦးဟန္စိန္ + ေဒၚခင္ေ၀ (မိဘေမတၱာ) </font><br/><font size="3">ကိတ္ႏွင့္မုန္႕မ်ိဳးစံုေရာင္း၀ယ္ေရး </font><br/><span style="font-size:10px">အမွတ္ (၅၂) ၊ ၁၅ လမ္း(ေအာက္) ၊ လမ္းမေတာ္ျမိဳ႕နယ္ ၊ ရန္ကုန္ျမိဳ႕<br/> ဖုန္း - 01- 226358, 01-227461, 09- 5019895, 09-5122510 , 09-254112516</span><br/></caption>');
			WinPrint.document.writeln(e);
				//	WinPrint.document.close();			
			WinPrint.print();

		
}


/*show form*/

function cashier_show_form(form)
{
			
			$.ajax({
					type: "POST",
					url : site_url+"cashier/insert_form/"+form,
					//data : data,
					success : function(e)
					{
					//alert(e);
					 $("#dialog_frame").html(e);
					 $("input.code").focus();	
					}			
			}); 
}//



function calculatePSum()
{
	  var totalsum = 0;
	$("input[name='subtotals[]']").each(function(){
		  if(!isNaN(this.value) && this.value.length!=0) {
                totalsum += parseFloat(this.value);
            }
	});

	  var transportsum = 0;
	$("input[name='transportationchargess[]']").each(function(){
		  if(!isNaN(this.value) && this.value.length!=0) {
                transportsum += parseFloat(this.value);
            }
	});

	  var transfersum = 0;
	$("input[name='transferrates[]']").each(function(){
		  if(!isNaN(this.value) && this.value.length!=0) {
                transfersum += parseFloat(this.value);
            }
	});


	  var discountsum = 0;
	$("input[name='disvalues[]']").each(function(){
		  if(!isNaN(this.value) && this.value.length!=0) {
                discountsum += parseFloat(this.value);
            }
	});


	$("#netamounttosupplier").val(totalsum);
	$("#totaltransportationcharges").val(transportsum);
	$("#totaltransferrate").val(transfersum);
	$("#totaldiscount").val(discountsum);
}
/*********************/

    function calculateSum() {
 

        var sum = 0;
        //iterate through each textboxes and add the values
        $(".total").each(function() {
 //	alert(sum);
            //add only if the value is number
            if(!isNaN(this.value) && this.value.length!=0) {
                sum += parseFloat(this.value);
            }
 
        });

        $("#total").val(sum);
        $("#nettotal").val(sum);
         $("#balance").val(parseFloat($("#advance").val())-parseFloat($("#total").val()));

        totaldebt= $("#totaldebt").find("input[name='totaldebt']").val();                	
                	$("#alltotal").val(parseFloat($("#nettotal").val())-(parseFloat(totaldebt))); 
                	//alert(parseFloat(parseFloat($("#nettotal").val())-(parseFloat(totaldebt))));
                	exceedamount =parseFloat($("#nettotal").val())-(parseFloat(totaldebt));
                	$("#exceedamount").val(-(exceedamount));              
                     

          var dsum = 0;
        //iterate through each textboxes and add the values
        $(".discounthidden").each(function() 

        	{
 		
 		//	alert(dsum);
            //add only if the value is number
            if(!isNaN(this.value) && this.value.length!=0) {
                dsum += parseFloat(this.value);
            }
 
        });



        $("#discount").val(dsum);

       var netamount=sum-(dsum);
       $("#netamount").val(netamount);

    }



/*********************/

   function getsaleprice(pcode,arg)
   {


	var mainform=$(".cloneable-form");
		
	$.ajax({
		type:"POST",
		url:site_url+"admin/getsaleprice/"+pcode,
		cache: false,
        dataType: "xml",
		
		
			success: function(xml) {
				
			

                $(xml).find('items').each(function(){
                $(this).find("data").each(function(){
               var pname = $(this).find('product_name').text(); 
              /*   var punit=$(this).find('unit').text();*/
               // var item_count=$(this).find('item_count').text();
                var price=$(this).find('price').text(); 

               
                $(arg.target).parent().parent().find("input[name='product_name[]']").val(pname);

                $(arg.target).parent().parent().find("input[name='price[]']").val(price);

                                    
                    });
                });
            }
		
	});


   }

   function calwithdeliveryfees(deliveryfees)
   {

   	total=parseFloat($("#total").val());
   	deliveryfees=parseFloat(deliveryfees);
   	$("#nettotal").val(total+deliveryfees);	
//alert(deliveryfees);
   
   }



function check_code(pcode)
{
	if(pcode !="")
	{
	$.ajax({
					type: "POST",
					url : site_url+"cashier/check_code/"+pcode,
					
					success : function(e)
					{
					//alert(e);
						alert(e);
					 $("input.code").focus();	
					}			
			}); 
}
}


/*function calamount(arg,dis)
{
	var price=$('#price').val();
	var discount=parseFloat(price)*(parseFloat(dis)/100);
	var netprice=parseFloat(price)-parseFloat(discount);
	var qty=$('#quantity').val();
	var result=parseFloat(netprice)*parseFloat(qty);
	$('#amount').val(result);
}
*/


function calreceived(total,deliveryfees,discount)
{


	var nettotal=(parseFloat(total)+parseFloat(deliveryfees))-parseFloat(discount);

	//received=nettotal;
	totaldebt=$("#totaldebt").find("input[name='totaldebt']").val();
	$("#nettotal").val(nettotal);
	$("#alltotal").val(nettotal-(totaldebt));
	$("#exceedamount").val(nettotal-(totaldebt));

		if(parseFloat(deliveryfees) >0 )
	   	{
	   		
	   		//$("#checkbox").prop("checked", true);
	   		$("input[name=deliverystatus]").prop("checked", true);
	   	}
	   else if(parseFloat(deliveryfees) <=0 || deliveryfees ==0 || deliveryfees == "")
	   	{
	   		
	   		//$("#checkbox").prop("checked", true);
	   		$("input[name=deliverystatus]").prop("checked", false);
	   	}

}




function caltax(tax)
{	
	var total=$('#total').val();
	var nettotal=parseFloat(total)+parseFloat(tax);
	$('#netamount').val(nettotal);
}


/*function calculatediscounttotal(discounttotal)
{

	var total=$('#total').val();
	var nettotal=parseFloat(total)-parseFloat(discounttotal);	
	$('#netamount').val(nettotal);
}*/


/*Calculate Discount Value For Purchase Form*/

function purchasediscounttotal(discounttotal)
{

	var total=$('#ptotal').val();
	var subtotal=parseFloat(total)-parseFloat(discounttotal);	
	$('#subtotal').val(subtotal);
}

/*Calculate Price Per Each Item after discount in purchase form */

function calculateitemprice(totalqty)
{

	var subtotal=$('#subtotal').val();
	var itemprice=parseFloat(subtotal)/parseFloat(totalqty);	
	$('#itemprice').val(itemprice);
}

/*Calculate Price Per Each Item after transportation charges + transfer rate in purchase form */

function calculatenetitemprice(transferrate,transportationcharges)
{
	var itemprice=$("#itemprice").val();
	var itemcount=$("#smallitemcount").val();

	var netitemprice=parseFloat(itemprice)+parseFloat(transferrate)+parseFloat(transportationcharges);

	$("#amountforeachunit").val(netitemprice);

	var smallitemprice=parseFloat(netitemprice)/parseFloat(itemcount);
	$("#amountforsmallitem").val(smallitemprice);
}

/*Calculate Refund*/

function calrefund(received)
{
	//jackpot=$("#jackpot").val();
	received=parseFloat(received);
	alltotal=parseFloat($("#alltotal").val());

	var exceed=received-alltotal;
	//$("#"+selid).select();

	/*if(total<0)
	{
		$("#"+selid).select();
	}
	else
	{
		$("#"+selid).val(total).select();
	}*/


	//$("#refund").val(exceed);
	$("#exceedamount").val(exceed);

}


/*calculate purchase*/

function calculate_purchase()
{
	price=parseFloat($("#price").val());
	
	quantity=parseFloat($("#quantity").val());
	itemcount=parseFloat($("#smallitemcount").val());
	transportationcharges=parseFloat($("#transportationcharges").val());
	transferrate=parseFloat($("#transferrate").val());
	total=price*quantity;
	discount=parseFloat($("#discount").val());
	total=total-discount;

	netamount=((price*quantity)+transferrate+transportationcharges)-discount;
	newprice=netamount/quantity;

	//$("#amountforeachunit").val(Math.ceil(newprice));
	//$("#amountforsmallitem").val(Math.ceil(newprice/itemcount));
	$("#amountforeachunit").val(newprice);
	$("#amountforsmallitem").val(newprice/itemcount);
	$("#netamount").val(total);
	

}



function cloneform(arg)
{
		var alltotal=0;
//	console.log(arg.keyCode)

	if(arg.keyCode==13)
	{

		arg.preventDefault();
		 var cloneCount = 1;   
		var clone=$( ".clonethis:last-child" ).clone().appendTo( "#SourceWrapper" );
		no= $('td.no').length;
		clone.find("td[class='no']").html(no);
		// var cloneCount = 1;   
     	// $("#id").clone().attr('id', 'id'+ cloneCount++).after("#id");
   
		clone.find("input[name='product_code[]']").val("");
		clone.find("input[name='product_name[]']").val("");
		clone.find("input[name='quantity[]']").val("");
		clone.find("input[name='item_count[]']").val("");
		clone.find("select[name='unit[]']").val("..select..");
		clone.find("input[name='price[]']").val("");
		clone.find("input[name='total[]']").val("");
		clone.find("input[name='title[]']").val("");
		clone.find("input[name='description[]']").val("");
		clone.find("input[name='atleastquantity[]']").val("");

		if(clone.hasClass('title'))
		{
			clone.find("input[name='title[]']").focus();
		}
		else
		{
			clone.find("input[name='product_code[]']").focus();
		}
		window.scrollBy(0, 50);
		
	}

	else
	{
		
		//var max=$('.total').length;
	//	alert(max);

		var target = $(arg.target);
		var parent = target.parent().parent();


		if( target.hasClass('qty'))
		{		
		var qu = parseFloat(target.val());

		pcode=parent.find("input[name='product_code[]']").val();
		unit=parent.find('option:selected').text();
		
		data="pcode="+pcode+"&unit="+unit+"&qu="+qu;
		var item_count=parseFloat(parent.find("input[name='item_count_hidden[]']").val());
		var price = parseFloat(parent.find("input[name='price[]']").val());
		
		$.ajax({
					type: "POST",
					url : site_url+"cashier/checkqty/",
					data:data,
					success : function(e)
					{
						e=parseFloat(e);
						if(e<qu)
						{
							alert("not enough items "+e+" "+unit+" left");
							qu=e;

							target.val(e);



						}


					var total=qu * price;

					if(parent.find("input[name='discount[]']"))
					{

					var total = parseFloat(total)-(parseFloat(parent.find("input[name='discount[]']").val())*qu);
					}

					totaldiscount=parseFloat(parent.find("input[name='discount[]']").val())*qu;
					/*alert(totaldiscount);*/
					parent.find("input[name='discounthidden[]']").val(totaldiscount);
					//alert(parent.find("input[name='discounthidden[]']").val());
					parent.find("input[name='total[]']").val(total);	
					parent.find("input[name='item_count[]']").val(qu*item_count);
					
					calculateSum();
					//alert(item_count);

					/*if(parent.find("input[name='item_count[]']").val()==NaN)
					{
						parent.find("input[name='item_count[]']").val(item_count);

					}*/

					
					
					}			
			}); 


		
		//alert(price);
		

		

		}


		else if(target.hasClass('price'))
		{

		var price = parseFloat(target.val());

	//	var item_count=parseFloat(parent.find("input[name='item_count_hidden[]']").val());
		var qu = parseFloat(parent.find("input[name='quantity[]']").val());
		
		var total=qu * price;

		parent.find("input[name='total[]']").val(total);	
	//	parent.find("input[name='item_count[]']").val(qu*item_count);

		calculateSum();


		}

		else if(target.hasClass('discount'))
		{

		var discount = parseFloat(target.val());

		var item_count=parseFloat(parent.find("input[name='item_count_hidden[]']").val());

		var qu = parseFloat(parent.find("input[name='quantity[]']").val());
		var price=parseFloat(parent.find("input[name='price[]']").val());
		var updtotal=(qu*price)-((item_count*qu)*discount);

		parent.find("input[name='total[]']").val(updtotal);	
	//	parent.find("input[name='item_count[]']").val(qu*item_count);

		calculateSum();


		}




		
	}

}


function admincloneform(arg)
{

		var alltotal=0;
//	console.log(arg.keyCode)

	if(arg.keyCode==13)
	{

		arg.preventDefault();
		var clone=$( ".clonethis:last-child" ).clone();
		no= $('td.no').length+1;
		clone.find("td[class='no']").html(no);

		clone.appendTo( "#SourceWrapper" );
		
		clone.find("input[name='product_code[]']").val("");
		clone.find("input[name='product_name[]']").val("");
		clone.find("input[name='quantity[]']").val("");
		clone.find("input[name='item_count[]']").val("");
		clone.find("input[name='unit[]']").val("");
		clone.find("input[name='price[]']").val("");
		clone.find("input[name='total[]']").val("");
		clone.find("input[name='title[]']").val("");
		clone.find("input[name='description[]']").val("");
		clone.find("input[name='atleastquantity[]']").val("");
		if(clone.hasClass('title'))
		{
			clone.find("input[name='title[]']").focus();
		}
		else
		{
			clone.find("input[name='product_code[]']").focus();
		}
			window.scrollBy(0, 50);

		
	}

	else
	{
		
		//var max=$('.total').length;
	//	alert(max);

		var target = $(arg.target);
		var parent = target.parent().parent();
		if( target.hasClass('qty'))
		{		
		var qu = parseFloat(target.val());

	//	var item_count=parseFloat(parent.find("input[name='item_count_hidden[]']").val());
		var price = parseFloat(parent.find("input[name='price[]']").val());
		
		var total=qu * price;

		parent.find("input[name='total[]']").val(total);	
	//	parent.find("input[name='item_count[]']").val(qu*item_count);

		calculateSum();
		//alert(item_count);

		/*if(parent.find("input[name='item_count[]']").val()==NaN)
		{
			parent.find("input[name='item_count[]']").val(item_count);

		}*/

		

		}


		else if( target.hasClass('stockqty'))
		{		
		var qu = parseFloat(target.val());

	//	var item_count=parseFloat(parent.find("input[name='item_count_hidden[]']").val());
		var item_count = parseFloat(parent.find("input[name='item_count[]']").val());
		
		var total=qu * item_count;

		parent.find("input[name='total_smallitemcount[]']").val(total);	
	//	parent.find("input[name='item_count[]']").val(qu*item_count);

		//calculateSum();
		//alert(item_count);

		/*if(parent.find("input[name='item_count[]']").val()==NaN)
		{
			parent.find("input[name='item_count[]']").val(item_count);

		}*/

		

		}

		else if(target.hasClass('price'))
		{

		var price = parseFloat(target.val());

	//	var item_count=parseFloat(parent.find("input[name='item_count_hidden[]']").val());
		var qu = parseFloat(parent.find("input[name='quantity[]']").val());
		
		var total=qu * price;

		parent.find("input[name='total[]']").val(total);	
	//	parent.find("input[name='item_count[]']").val(qu*item_count);

		calculateSum(total);


		}



		else if( target.hasClass('dispercent') )
		{		

		var dispercent = parseFloat(target.val());

		//var item_count=parseFloat(parent.find("input[name='item_count_hidden[]']").val());
		var price = parseFloat(parent.find("input[name='price[]']").val());
		
		var disvalue= price *(dispercent/100);

		parent.find("input[name='discountvalue[]']").val(disvalue);

		}


	}

}


function caldiscount()
{
	var total = parseFloat(total)-(parseFloat(parent.find("input[name='discount[]']").val())*qu);
}

function changediscountpercent(id)
{



	if(id=="dispercent")
	{
		var dispercent2 = parseFloat($("#dispercent").val());
		
		//var item_count=parseFloat(parent.find("input[name='item_count_hidden[]']").val());
		var price = parseFloat($("#price").val());

		var disvalue= price *(dispercent2/100);

		$("#disvalue").val(disvalue);	
	}

	if(id=="pdispercent")
	{
		
		var total=parseFloat($("#ptotal").val());
		
		var dispercent=parseFloat($("#pdispercent").val());


		disvalue=total*(dispercent/100);
		$("#disvalue").val(disvalue);

	}
	
}




function premover(event)
{
	$(event).parent().parent().remove()
	
	calculatePSum();
}

//<td><a class="delete" onclick ="delete_user($(this))">Delete</a></td>



/*

	function percentTovalue(percent)
	{

		var parent = target.parent().parent();
		percentvalue=(percent)
	}
*/


function removerform(event)
{
	var target = $(event.target);

	target.parent().parent().remove();	

	calculateSum();
}


function changeqty(arg,event)
{

	var target = $(event.target);
	var parent = target.parent().parent();

	var price = parseFloat($("#price").val());
		
	var total=arg * price;

	$("#total").val(total);

}


function changeprice(arg,event)
{

	var target = $(event.target);
	var parent = target.parent().parent();

	var price = parseFloat($("#quantity").val());
		
	var total=arg * price;

	$("#total").val(total);

}



function calculateexceedamount(balance)
{
	balance=parseFloat(balance);
	if(balance<0)
	{
		$("#requiredamount").val(Math.abs(balance));
		$("#exceedamount").val(0);
	}
	else
	{
		var refund = $("#refund").val();
		var calc=balance-parseFloat(refund);
		$("#exceedamount").val(calc);
		$("#requiredamount").val(0);
	}
}


function calculaterefundtoexceed(refund)
{
	var balance=$("#balance").val()
	var value = parseFloat(refund)-parseFloat(balance)
	$("#exceedamount").val(value);
}

/*Make Delete*/
///....................
function makecancel(id,page,pagenum)
{


	if(pagenum =="")
	{
		pagenum=0;
	}

	else
	{
		pagenum=pagenum;
	}

	if(confirm("are you sure you want to cancel this order ?"))
	{
		$.ajax({
			type:"POST",
			url:site_url+"cashier/makecancel/"+page+"/"+pagenum+"/"+id,

			success:function(e)
			{

			//	alert(e);
				$("#content").html(e);
			}
		});		
		//window.location.href=site_url+"admin/delete/"+page+"/"+pagenum+"/"+id;	
	}	
}//