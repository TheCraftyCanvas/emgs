/***
* skeleton_emgs.js
*
***/

jQuery.noConflict();
jQuery(document).ready(function($){
	$('.collapse-accordion').click(function () {
		var parentAccordion = $(this).parents('.views-row').children('.ui-accordion-header'); 	
		$(parentAccordion).children('a').trigger('click');		
		$(parentAccordion).trigger('focus');
	})

})