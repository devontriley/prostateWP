/*
 *
 * jQuery
 *
*/

(function( root, $, undefined ) {
	"use strict";

	/*
	 *
	 * Main Navigation Accordion
	 *
	*/

	var hamburger = $('#massgov .menu a');
	var mainMenu = $('#mainMenuContainer');
	var closeMenu = $('#mainMenuContainer .closeMenu a');

	hamburger.click(function(){
		mainMenu.addClass('active');
	});

	closeMenu.click(function(){
		mainMenu.removeClass('active');
	});

	$('#mainMenuContainer .top > li > a').click(function(){
		var $this = $(this);
		var parentLi = $this.parent('li');

		if(!parentLi.hasClass('active')) {
			parentLi.addClass('active');
			parentLi.siblings('li').removeClass('active');
			parentLi.siblings('li').children('ul').slideUp();
			$this.siblings('ul').slideDown();
		}
	})

} ( this, jQuery ));
