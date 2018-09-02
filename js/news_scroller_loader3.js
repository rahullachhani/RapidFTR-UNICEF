/* We have used window.load function to be sure that all required contents are loaded before the scroller begins to scroll the items */
$(window).load(function()
{
	$(document).ready(function() 
	{
		auto_display_news_scroller3();
	});
});


//This function loads the news scroller
function auto_display_news_scroller3()
{
	$.ajax({
		type: "POST",
		url: "auto_display_news_scroller3.php",
		data: '',
		cache: false,
		beforeSend: function() 
		{
			$("#auto_display_news_scroller3").html('<div style="height:170px;padding-top:120px;min-width:200px;width:auto;margin: 0 auto;font-family:Verdana, Geneva, sans-serif;font-size:12px;" align="center">Loading <img src="images/loadings.gif" align="absmiddle" alt="Loading..." /></div>');
		},
		success: function(response) 
		{
			$('#auto_display_news_scroller3').fadeIn(400).html(response); 
		}
	});
}