$(function() {

	// Get the form.
	var form = $('#ajax-download');

	// Get the messages div.
	var formMessages = $('#download-message');

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
      
        if ($('input#email_c').val().length <= 7) {
            alert("Oh no! Please enter a valid email.");
            return false;
        }
      
        var phone = $('input#phone_number_a').val();
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
			$('#ajax-download').hide();
            $('#download-message-top').fadeIn(700).addClass('download-message-top-style');
            
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





