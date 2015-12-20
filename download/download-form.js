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
      
		// Serialize the form data.
		var formData = $(form).serialize();

		// Submit the form using AJAX.
		$.ajax({
			type: 'POST',
			url: $(form).attr('action'),
			data: formData
		})
        
        function(sendSMS('input#phone_number_a'));
      
		.done(function(response) {
			// Make sure that the formMessages div has the 'success' class.
			$(formMessages).removeClass('error');
			$(formMessages).addClass('success');
            

			// Set the message text.
			$(formMessages).text(response);

            // Hide the form.
			$('#ajax-download').hide();
            $('#download-message-top').fadeIn(700);
            
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


(function(b,r,a,n,c,h,_,s,d,k){if(!b[n]||!b[n]._q){for(;s<_.length;)c(h,_[s++]);d=r.createElement(a);d.async=1;d.src="https://cdn.branch.io/branch-v1.8.3.min.js";k=r.getElementsByTagName(a)[0];k.parentNode.insertBefore(d,k);b[n]=h}})(window,document,"script","branch",function(b,r){b[r]=function(){b._q.push([r,arguments])}},{_q:[],_v:1},"addListener applyCode banner closeBanner creditHistory credits data deepview deepviewCta first getCode init link logout redeem referrals removeListener sendSMS setIden...(line truncated)...
      branch.init('key_test_mecNdlfYel5IvYJXZtBVIhaotynBT0K2'); //key_live_kbmLoonXji6GF6P8YutPaifnztbFJ1QG 


function sendSMS(form) {
  var phone = form.phone_number_a.value;
  var linkData = {
      tags: [],
      channel: 'Flyer Landing Page',
      feature: 'TextMeTheApp',
      data: {}
  };
  var options = {};
  var callback = function(err, result) {
    if (err) {
      alert("Sorry, something went wrong.");
    }
    else {
      alert("SMS sent!");
    }
  };
  branch.sendSMS(phone, linkData, options, callback);
    form.phone_number_a.value = "";
  }

