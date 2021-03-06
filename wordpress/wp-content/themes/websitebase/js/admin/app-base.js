/* ================================================= THEME FUNCTIONS ================================================= */

if(typeof $ !== 'function')
{
	var $ = jQuery;
}

/* ================================================= THEME FUNCTIONS ================================================= */

$(document).ready(function(){

/* ================================================= DOCUMENT READY ================================================= */
	
	// Lock admin bar buttons
	$('#wpadminbar #wp-admin-bar-site-name > .ab-item').click(function(e){
		e.preventDefault();
	});
	$('#wpadminbar #wp-admin-bar-new-content > .ab-item').click(function(e){
		e.preventDefault();
	});
	
	// Replace admin bar buttons
	$('#wpadminbar #wp-admin-bar-view-site').find('a').attr('target','_blank');
	
	// Action for custom multiple checkbox control in theme customize
	$(document).on('click','.wp-core-ui .customize-control-checkbox-multiple input[type="checkbox"]',function(){

		var checkbox_values = $(this).parents('.customize-control').find('input[type="checkbox"]:checked').map(function(){
							  		return this.value;
							  }).get().join(',');

		$(this).parents('.customize-control').find('input[type="hidden"]').val(checkbox_values).trigger('change');
	});
	
	// Action for custom WYSIWIG text control in theme customize
	if($('.wp-customizer').length > 0)
	{
		wp.customizerCtrlEditor = {
			init: function() {
				$(window).load(function(){
					$('textarea.wp-editor-area').each(function(){
						var tArea = $(this),
							id = tArea.attr('id'),
							editor = tinyMCE.get(id),
							setChange,
							content;

						if(editor){
							editor.onChange.add(function (ed, e) {
								ed.save();
								content = editor.getContent();
								clearTimeout(setChange);
								setChange = setTimeout(function(){
									tArea.val(content).trigger('change');
								},500);
							});
						}

						tArea.css({
							visibility: 'visible'
						}).on('keyup', function(){
							content = tArea.val();
							clearTimeout(setChange);
							setChange = setTimeout(function(){
								content.trigger('change');
							},500);
						});
					});
				});
			}
		};

		wp.customizerCtrlEditor.init();
	}
	
/* ================================================= DOCUMENT READY ================================================= */

});

$(window).bind('load', function(){

/* ================================================= THEME WINDOWS LOAD ================================================= */
	
	
	
/* ================================================= THEME WINDOWS LOAD ================================================= */

});

$(document).ajaxStart(function(){

/* ================================================= THEME AJAX START ================================================= */
	
	
	
/* ================================================= THEME AJAX START ================================================= */

});

$(document).ajaxComplete(function(){

/* ================================================= THEME AJAX COMPLETE ================================================= */
	
	
	
/* ================================================= THEME AJAX COMPLETE ================================================= */

});
