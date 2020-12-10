// JavaScript Document
var site_url;
//site_url="http://192.168.1.1/index.php/";
site_url="http://localhost/www/index.php/";


var date=new Date();
	var d=date.getDate();
	var y=date.getFullYear();
	var mon=date.getMonth()+1;
	var h=date.getHours();
	var m=date.getMinutes();
	var s=date.getSeconds();

$(document).ready(function(){
	
	$("input.code").focus();
	$('.pagination a').click(function(eve){
		
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
		});

	});



/*Add Row*/

function addrow(form)
{

x=$("form#purchase").serializeArray();

 $("#addrow").append("<tr>");
 $.each(x, function(i, field){    
if(field.name=="product_code" || field.name=="product_name" || field.name=="totalqty" || field.name=="unit" || field.name=="amountforeachunit" )
{
$("#addrow").append("<td>"+field.value+"</td>");
}
else
{

}

 $("form#hide-text").append("<input type='hidden' name='"+field.name+"s[]' value='"+field.value+"'/>");   
 
  });
    
  
$("#addrow").append("<td><a onclick='premover(this)' style='cursor:pointer'>x</a></td>");	
	
	$("#hiddentotal").val(parseFloat($("#hiddentotal").val())+parseFloat($("#ptotal").val()));

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
	$("#amountforeachunit").val(0);
	$("#amountforsmallitem").val(0);
	
}


/**/

function makebackup()
{
	var loading=$("#dialog_frame").prepend('<div class="loading-indication" id="loading-indication"><img src="http://localhost/www/images/ajax-loader.gif" /> Loading...</div>');
	//$("#dialog_frame").prepend(loading);
	$.ajax({
				type:"POST",
				url : "http://localhost/www/dbbackup.php",
			
				success:function(e)
				{
					var elem = document.getElementById("loading-indication");
					elem.parentNode.removeChild(elem);
					alert("finish");				
					
				
				}

			});
					
}

/**/

function checkexceedamount()
{
	var refund=$("#refund").val();
	var exceedamount=$("#exceedamount").val()
	$("#exceedamount").val(exceedamount-(refund));
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

function calculate_exceedamount_supplier(paid,id)
{
		var nettotal=$("#net_total"+id).text();

		data="paid="+paid+"&id="+id;
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
	data=($("#purchase-heading").serialize())+"&"+($("#hide-text").serialize())+"&"+($("#purchase-send").serialize());
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
					window.close();
					showdialogform('data_list/'+form);
						
					}
					
				}
		});
}


/**/


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



/*Views Details*/

function viewdetails(voucherno,debttype,amount)
{

	//window.close();
	width=screen.availWidth-50;
	height=screen.availHeight-70;
	var WinPrint = window.open('index.php/admin/viewdetails/'+debttype+"/"+voucherno+"/"+amount, '','left=100,top=0,width='+width+',height='+height+',toolbar=0,scrollbars=1,status=0,fullscreen=1');
	
		
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
	window.close();
	width=screen.availWidth-50;
	height=screen.availHeight-70;
	var WinPrint = window.open('index.php/admin/'+form, '','left=100,top=0,width='+width+',height='+height+',toolbar=0,scrollbars=1,status=0,fullscreen=1');
						
}


/* Update Page*/
  
function updatePage(html)
{
	//alert(html);
	
	$('#content').html(html);	
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
 function makeedit(id,page,pagenum)
{

	
	if(pagenum =="")
	{
		pagenum=0;
	}
	else
	{
		pagenum=pagenum;
	}
	
		$.ajax({
			type:"POST",
			url:site_url+"admin/edit_form/"+page+"/"+pagenum+"/"+id,

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
		//alert(form);
		//alert(data);
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
					window.close();
					showdialogform('data_list/'+form);
						
					}

					else
					{
						alert(e);
					}
				}

		});
			return false;
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

function searchjackpotchange(table)
{
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
					else if(e==3)
					{
						alert("No active promotion. Create active promotion first");
					}
					else if(e==1)
					{
										
					alert("Successfull saved");
					window.close();
					showdialogform('data_list/'+form);
						
					}
					else
					{
						alert(e);
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


/*stockalert*/

function checkstock()
{


	$.ajax({
		type:"POST",
		url:site_url+"admin/stockalert/",
		success : function(e)
					{
					//alert(e);
					 $("#stockalert").html(e);	
					
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
				url : site_url+"admin/account_setting",
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
               		  $(arg.target).parent().parent().find("input[name='quantity[]']").select();

               		 $(arg.target).parent().parent().find("input[name='total[]']").val(price-discount);
               		 
               		 calculateSum();
                    });
                });
            }

          //   $(arg.target).parent().parent().find("input[name='quantity[]']").val(1);
               
		
	});

	
	$(arg.target).parent().parent().find("input[name='quantity[]']").val(1).focus();
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

function check_debt(customer)
{
		$.ajax({
		type:"POST",
		data:"customer="+customer,
		url:site_url+"cashier/check_debt/",
		cache: false,
        dataType: "xml",
		success: function(xml) {

                $(xml).find('items').each(function(){
                $(this).find("data").each(function(){                       
                var totaldebt = $(this).find('totaldebt').text(); 
                var numrow=$(this).find('numrow').text();          
                	
                	$("#totaldebt").find("input[name='totaldebt']").val(parseFloat(totaldebt));                	
                	$("#nettotal").val(parseFloat($("#total").val())-(parseFloat(totaldebt))); 

                	$("#received").select();              
                                    
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

                    	$("#product_name").val(pname);   
                     	 $(arg.target).parent().parent().find('[id]').html(unitopt);
                    $(arg.target).parent().parent().find("input[name='product_name[]']").val(pname);
                    $(arg.target).parent().parent().find("input[name='price[]']").val(price);
                    
                      $(arg.target).parent().parent().find("input[name='item_count[]']").val(1);
                       $(arg.target).parent().parent().find("input[name='item_count_hidden[]']").val(1);
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
                        var myunits_array=myunits.split(",");
                        var unitopt="";
                        for ( i=0; i < myunits_array.length; i++ ) 
                        {

						unitopt+="<option value='"+myunits_array[i]+"'>"+myunits_array[i] + "</option>";

						}
						
                    
                      //
                        var price=$(this).find('price').text(); 

                    	$("#product_name").val(pname);   
                     	 $("#unit").html(unitopt);
                     	 $("#smallitemcount").val(1);
                    $(arg.target).parent().parent().find("input[name='product_name[]']").val(pname);
                    $(arg.target).parent().parent().find("input[name='price[]']").val(price);
                    //  $(arg.target).parent().parent().find("input[name='quantity[]']").val(1);
                      $(arg.target).parent().parent().find("input[name='item_count[]']").val(1);
                        $(arg.target).parent().parent().find("input[name='price[]']").val(price);                 
                    	
                          });
                });
            }
		
	});


}


/*Insert Form*/

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
						if(form=="sale")
						{

							/*var WinPrint = window.open('', '','letf=0,top=0,width=1600,height=900,toolbar=0,scrollbars=0,status=0');
								WinPrint.document.writeln('<table align="center" class="table table-bordered table-hover" cellspacing="0" cellpadding="6" width="100%" style="font-family:Zawgyi-One;font-size:10px"><img src="http://192.168.1.1/images/logopng.png" width="100%"/>');
						
							WinPrint.focus();
							WinPrint.print();
							WinPrint.close();*/

							print_voc(e);

		
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
		var WinPrint = window.open('', '','letf=0,top=0,width=1600,height=900,toolbar=0,scrollbars=0,status=0');
						
			WinPrint.document.writeln('<table align="center" cellspacing="0" cellpadding="3" width="100%" style="font-family:Zawgyi-One;font-size:11px"><caption><img src="http://192.168.1.1/images/logopng.png" width="100%"/></caption>');				    
	   
			WinPrint.document.writeln(e);
				//	WinPrint.document.close();			
			WinPrint.print();
		//	WinPrint.close()
		
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


function calamount(dis)
{
	var price=$('#price').val();
	var discount=parseFloat(price)*(parseFloat(dis)/100);
	var netprice=parseFloat(price)-parseFloat(discount);
	var qty=$('#quantity').val();
	var result=parseFloat(netprice)*parseFloat(qty);
	$('#amount').val(result);
}



function calreceived(jackpot)
{
	var nettotal=parseFloat($("#nettotal").val());
	received=nettotal-parseFloat(jackpot);
	$("#received").val(received);
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

function calrefund()
{
	jackpot=$("#jackpot").val();
	received=$("#received").val();
	nettotal=$("#nettotal").val();

	var total=(parseFloat(received)+parseFloat(jackpot))-parseFloat(nettotal);

	if(total<0)
	{
		$("#refund").val(0).select();
	}
	else
	{
		$("#refund").val(total).select();
	}

	
	$("#exceedamount").val(total);

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
		clone.find('[id]').each(function(){this.id+='1'});
		// var cloneCount = 1;   
     	// $("#id").clone().attr('id', 'id'+ cloneCount++).after("#id");
   
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
		
		data="pcode="+pcode+"&unit="+unit;
		
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
						
							target.val(e);

						}
					
					}			
			}); 


		var item_count=parseFloat(parent.find("input[name='item_count_hidden[]']").val());
		var price = parseFloat(parent.find("input[name='price[]']").val());
		//alert(price);
		

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
		clone.find('[id]').each(function(){this.id+='1'});
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
	var target = $(event.target);
	 $(target).parents('tr').remove();
	/*target.parent().remove();
	calculateSum();*/
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