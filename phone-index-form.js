$(function() {

	// Get the form.
	var form = $('#ajax-phone-index');

	// Get the messages div.
	var formMessages = $('#branch-message');

	// Set up an event listener for the contact form.
	$(form).submit(function(e) {
		// Stop the browser from submitting the form.
		e.preventDefault();
        
        if ($('input#sp-website-r').val().length != 0) {
            return false;
        } 
      
        if ($('input#sp-phone-r').val().length != 0) {
            return false;
        } 
      
        if ($('input#phone_number_a').val().length != 16) {
            alert("Oh no! Is that a real phone number?");
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
			$('#ajax-phone-index').hide();
            $('#branch-message-top').fadeIn(700);
            
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
