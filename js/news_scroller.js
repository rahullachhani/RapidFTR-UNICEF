$(document).ready(function() {
	$.fn.news_scroller = function(programming_blog_info) {
		var information = {
			scroller_speed: 450, //This is the speed at which the system scrolls its items
			scroller_pause: 2800, //Allocated time for the scroller to pause and continue scrolling
			items_to_display: 8, //This is the number of items to display to the user on the screen while scrolling
			playing_or_pause: false, //Assign false to whether the system is scrolling or not which will later be used in the script
			height: 0, //Set initial scroller box height to zero
		};
	
		var programming_blog_info = $.extend(information, programming_blog_info),scroller = $(this),max_scroller_height = 44;
		
		//Set the position of the scroller box
		scroller.css({overflow: 'hidden', position: 'relative'}).children('ul').css({margin: "0", padding: "0", position: "relative", "list-style-type": "none", "z-index": "100"}).children('li').css({margin: "0", padding: "0", position: "relative", "list-style-type": "none", "z-index": "100"});
		
		// Set the height of the scroller
		scroller.height(max_scroller_height * programming_blog_info.items_to_display);
		
		// This is the main function that does the scrolling up event
		setInterval(function(){
			scroll_items_up(scroller, max_scroller_height, programming_blog_info); 
		}, programming_blog_info.scroller_pause);
		
		// Pause the scroller when a user's mouse enters the scrolling content
		scroller.mouseenter(function() {
			programming_blog_info.playing_or_pause = true;
		}).mouseleave(function(){
			programming_blog_info.playing_or_pause = false;
		});
			
		scroll_items_up = function(scroller_box, height, programming_blog_info){
			if(programming_blog_info.playing_or_pause)
				return;
			
			var scroller_ul = scroller_box.children('ul');
			
			var start_scrolling_with_first_item = scroller_ul.children('li:first').clone(true);
		
			scroller_ul.animate({top: '-=' + height + 'px'}, programming_blog_info.scroller_speed, function() {
				$(this).children('li:first').remove();
				$(this).css('top', '0px');
			});
			
			scroller_ul.children('li:first').fadeOut(programming_blog_info.scroller_speed);
			if(programming_blog_info.height == 0){
				scroller_ul.children('li:eq(' + programming_blog_info.items_to_display + ')').hide().fadeIn(programming_blog_info.scroller_speed).slideDown(); }
				
			//Start with the first item again at the end of the scrolling
			start_scrolling_with_first_item.appendTo(scroller_ul);
		};
	};
	$('.news_scroller').news_scroller(); //Call the scroller function via a class
});