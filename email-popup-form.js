$(function() {
    
	// Get the form. 
	var form = $('#ajax-email-popup');

	// Get the messages div.
	var formMessages = $('#popup-message');

	// Set up an event listener for the contact form.
	$(form).submit(function(e) {
		// Stop the browser from submitting the form.
		e.preventDefault();
        
         //send optimizely
        // ensures the optimizely object is defined globally using
        window['optimizely'] = window['optimizely'] || [];

        // sends a tracking call to Optimizely for the given event name. 
        window.optimizely.push(["trackEvent", "popup-email-submitted"]);
        
        if ($('input#sp-website-r').val().length != 0) {
            return false;
        } 
      
        if ($('input#sp-phone-r').val().length != 0) {
            return false;
        } 
      
        if ($('input#email-popup').val().length <= 7) {
            alert("Oh no! Please enter a valid email.");
            return false;
        }
      
        /*$('input.button-primary.u-pull-right').fadeOut(1000);
        $('.row').fadeOut(1000);*/
      
		// Serialize the form data.
		var formData = $(form).serialize();

		// Submit the form using AJAX.
		$.ajax({
			type: 'POST',
			url: $(form).attr('action'),
			data: formData
		})
        
		.done(function(response) {
          
			// Make sure that the formMessages div has the 'success' class.
			$(formMessages).removeClass('error');
			$(formMessages).addClass('success');
            

			// Set the message text.
			$(formMessages).text(response);

            // Hide the form.
			$('#ajax-email-popup').hide();
            $('#popup-message-top').fadeIn(700);
            
		})
		.fail(function(data) {
			// Make sure that the formMessages div has the 'error' class.
			$(formMessages).removeClass('success');
			$(formMessages).addClass('error');

			// Set the message text.
			if (data.responseText !== '') {
				$(formMessages).text(data.responseText);
                return false;
			} else {
				$(formMessages).text('Oops! An error occured and your message could not be sent.');
                return false;
			}
		});

	});

});
