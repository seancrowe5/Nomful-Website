$(function() {

	// Get the form.
	var form = $('#ajax-register');

	// Get the messages div.
	var formMessages = $('#register-messages');

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
      
        if ($('input#first-name').val().length <= 1) {
            alert("Oh no! Is that your real first name?");
            return false;
        } 
      
        if ($('input#last-name').val().length <= 1) {
            alert("Oh no! Is that your real last name?");
            return false;
        } 
      
        if ($('input#cell-phone').val().length != 10 ) {
            alert("Oh no! Please enter a 10 digit phone number. Just numbers.");
            return false;
        }
      
        if ($('input#password').val() != $('input#retype-password').val()) {
            alert("Oh no! Your passwords don't match");
            return false;
        } 
      
        if ($('input#motivation').val().length <= 2) {
            alert("Oh no! You are not motivated?");
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
		.success(function(response) {
			// Make sure that the formMessages div has the 'success' class.
			window.location = "/payment.php";
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
