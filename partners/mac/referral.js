$(function() {

	// Get the form.
	var form = $('#ajax-referral');

	// Get the messages div.
	var formMessages = $('#referral-messages');

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
      
        if ($('input#client-first-name').val().length <= 1) {
            alert("Oh no! Is that your client's first name?");
            return false;
        } 
      
        if ($('input#client-last-name').val().length <= 1) {
            alert("Oh no! Is that your client's last name?");
            return false;
        } 
      
        if ($('input#trainer-name').val().length <= 1 ) {
            alert("Oh no! Is that really your name?");
            return false;
        }
      
        if ($('input#trainer-email').val().length <= 5) {
            alert("Oh no! Please enter a valid email.");
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
