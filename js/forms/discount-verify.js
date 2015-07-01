$(function() {

	// Get the form.
	var form = $('#ajax-discount');

	// Get the messages div.
	var formMessages = $('#discount-messages');

	// Set up an event listener for the contact form.
	$(form).submit(function(e) {
		// Stop the browser from submitting the form.
		e.preventDefault();
        
        // We check to see if some schmuck put in something here. If yes, adios
        if ($('input#sp-website-r').val().length != 0) {
            return false;
        } 
      
        // Again, we check if some schmuck put something in. If yes, adios
        if ($('input#sp-phone-r').val().length != 0) {
            return false;
        } 
      
        // We make sure that the group code is actually filled in
        if ($('input#group-code').val().length <= 1) {
            alert("Oh no! Please enter a group code");
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
          
//           var opts = {
//		lines: 13, // The number of lines to draw
//		length: 11, // The length of each line
//		width: 5, // The line thickness
//		radius: 17, // The radius of the inner circle
//		corners: 1, // Corner roundness (0..1)
//		rotate: 0, // The rotation offset
//		color: '#FFF', // #rgb or #rrggbb
//		speed: 1, // Rounds per second
//		trail: 60, // Afterglow percentage
//		shadow: false, // Whether to render a shadow
//		hwaccel: false, // Whether to use hardware acceleration
//		className: 'spinner', // The CSS class to assign to the spinner
//		zIndex: 2e9, // The z-index (defaults to 2000000000)
//		top: 'auto', // Top position relative to parent in px
//		left: 'auto' // Left position relative to parent in px
//        };
//        var target = document.createElement("div");
//        document.body.appendChild(target);
//        var spinner = new Spinner(opts).spin(target);
//        iosOverlay({
//            text: "Loading",
//            duration: 2e3,
//            spinner: spinner
//        });
//			location.reload();
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
