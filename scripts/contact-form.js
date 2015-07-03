$(function() {

	// Get the form.
	var form = $('#ajax-contact');

	// Get the messages div.
	var formMessages = $('#contact-messages');

	// Set up an event listener for the contact form.
	$(form).submit(function(e) {
		// Stop the browser from submitting the form.
		e.preventDefault();
        
        if ($('input#sp-website').val().length != 0) {
            return false;
        } 
      
        else if ($('input#sp-phone').val().length != 0) {
            return false;
        } 
      
        else if ($('input#name').val().length <= 1) {
            alert("Oh no! Is that your real name?");
            return false;
        } 
      
        else if ($('input#email').val().length <= 1) {
            alert("Oh no! Is that your real email?");
            return false;
        } 
      
        else if ($('textarea#message').val().length <= 1) {
            alert("Oh no! That's not a real message!");
            return false;
        }
      
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

			// Clear the form.
			$('#email').val('');
          
		})
		.fail(function(data) {
			// Make sure that the formMessages div has the 'error' class.
			$(formMessages).removeClass('success');
			$(formMessages).addClass('error');

			// Set the message text.
			if (data.responseText !== '') {
				$(formMessages).text(data.responseText);
			} else {
				$(formMessages).text('Oops! An error occured and your message could not be sent.');
			}
		});

	});

});
