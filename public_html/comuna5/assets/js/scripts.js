jQuery(document).ready(function() {
    /*
        Fullscreen background
    */
    $.backstretch("http://atlasdelafecto.org/comuna5/assets/img/backgrounds/1.jpg");
    
    $('#top-navbar-1').on('shown.bs.collapse', function(){
    	$.backstretch("resize");
    });
    $('#top-navbar-1').on('hidden.bs.collapse', function(){
    	$.backstretch("resize");
    });
    
    /*
        Form
    */
    $('.registration-form fieldset:first-child').fadeIn('slow');
    
    $('.registration-form input[required], .registration-form input[type="password"], .registration-form textarea[required]').on('focus', function() {
    	$(this).removeClass('input-error');
    });
    
    // next step
    // $('.registration-form .btn-next').on('click', function() {
    // 	var parent_fieldset = $(this).parents('fieldset');
    // 	var next_step = true;
    //
    // 	parent_fieldset.find('input[required], textarea[required]').each(function() {
    // 		if( $(this).val() == "" ) {
    // 			$(this).addClass('input-error');
    // 			next_step = false;
    // 		}
    // 		else {
    // 			$(this).removeClass('input-error');
    // 		}
    // 	});
    //
    // 	if( next_step ) {
    // 		parent_fieldset.fadeOut(400, function() {
	 //    		$(this).next().fadeIn();
	 //    	});
    // 	}
    //
    // });
    
    // previous step
    // $('.registration-form .btn-previous').on('click', function() {
    // 	$(this).parents('fieldset').fadeOut(400, function() {
    // 		$(this).prev().fadeIn();
    // 	});
    // });
    
    // submit
    $('.registration-form').on('submit', function(e) {

    	$(this).find('input[required], textarea[required]').each(function() {
    		if( $(this).val() == "" ) {
    			e.preventDefault();
    			$(this).addClass('input-error');

    		}
    		else {
    			$(this).removeClass('input-error');
    		}
    	});
    	
    });
    
    
});
