
// JavaScript Document

var site_url;
site_url="http://192.168.1.5/STORE/index.php/";
//site_url="http://localhost/STORE/index.php/";


 var str=location.href.toLowerCase();



       $('#cssmenu li a').each(function() {

      
                if (str.indexOf(this.href.toLowerCase()) > -1) {
					$("li.active").removeClass("active");
                        $(this).parent().addClass("active"); 


                   }
                 });

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
		window.location.href=site_url+"admin/delete/"+page+"/"+pagenum+"/"+id;	
	}
	
}
///....................clone....
var maincolne;
(function(){

	var form = $('.cloneable-form');
	var clonethis = form.find(".clonethis");
	var cloneParent = clonethis.parent();
		maincolne = clonethis.clone(true);

	form.bind('keypress', function(event){
		var target = $(event.target);
		if( target.hasClass('clonelastone') && event.keyCode === 13 ){
			event.preventDefault();
			var cloneRow = maincolne.clone(true);
			cloneParent.append(cloneRow);
			return false;
		}


	});

	form.click(function(event){
		var target = $(event.target);
		if( target.hasClass('close')) {
			event.preventDefault();
			target.parent().parent().remove();
			return false;
		}
	});

	/*form.on('change', function(event){
		var target = $(event.target);
		if( target.hasClass('clonelastone') ){
			event.preventDefault();
			var cloneRow = maincolne.clone(true);
			clonethis.parent().append(cloneRow);
			return false;
		}
	});*/

	form.bind('keypress', function(event){
		
		var target = $(event.target);
		var parent = target.parent().parent();
		if( target.hasClass('qty') )
		{
		
		var qu = parseFloat(target.val());
		var price = parseFloat(parent.find("input[name='price[]']").val());
		var total=qu * price;
		parent.find("input[name='total[]']").val(total);	
		}	
		
		
	});

}())

///..............clone end......

///.................

function show_details(ItemID,Title,ThumbPhoto,Tag,Availability)
{
		data="ItemID="+ItemID+"&Title="+Title+"&ThumbPhoto="+ThumbPhoto+"&Tag="+Tag+"&Availability="+Availability;
		
		$.ajax({
				type: "POST",
				url : site_url+"admin/item_details/"+ItemID,
				data : data,
				success : function(data)
				{
				//$("#dialog_frame").html(data);	
				alert(data);
				}
			});
}

// Wait until the DOM has loaded before querying the document
			$(document).ready(function(){

				$('ul.tabs').each(function(){
				
					// For each set of tabs, we want to keep track of
					// which tab is active and it's associated content
					var $active, $content, $links = $(this).find('a');

					// If the location.hash matches one of the links, use that as the active tab.
					// If no match is found, use the first link as the initial active tab.
					$active = $($links.filter('[href="'+location.hash+'"]')[0] || $links[0]);
					$active.addClass('active');

					$content = $($active[0].hash);

					// Hide the remaining content
					$links.not($active).each(function () {
						$(this.hash).hide();
					});

					// Bind the click event handler
					$(this).on('click', 'a', function(e){
						// Make the old tab inactive.
						$active.removeClass('active');
						$content.hide();

						// Update the variables with the new link and content
						$active = $(this);
						$content = $(this.hash);

						// Make the tab active.
						$active.addClass('active');
						$content.show();

						// Prevent the anchor's default click action
						e.preventDefault();
					});
				});
			});
///.................

