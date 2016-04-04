<?php
    // My modifications to mailer script from:
    // http://blog.teamtreehouse.com/create-ajax-contact-form
    // Added input sanitizing to prevent injection

    // Only process POST reqeusts.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the form fields and remove whitespace.
        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
        $first_name = $_POST["first-name"];
        $last_name  = $_POST["last-name"];
        $cell_phone = $_POST["cell-phone"];
        $password   = $_POST["password"];
        $motivation = $_POST["motivation"];
      
        // Check that data was sent to the mailer.
        if ( !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Set a 400 (bad request) response code and exit.
            http_response_code(400);
            echo "Oops! There was a problem with your email. Please try again.";
            exit;
        }

        // Set the recipient email address.
        // FIXME: Update this to your desired email address.
        $recipient = "thomas@nomful.com";

        // Set the email subject.
        $subject = "New contact from $email";

        // Build the email content.
        $email_content .= "First Name: $first_name\n\n";
        $email_content .= "Last Name:  $last_name\n\n";
        $email_content .= "Email:      $email\n\n";
        $email_content .= "Cell Phone: $cell_phone\n\n";
        $email_content .= "Password:   $password\n\n";
        $email_content .= "Motivation: $motivation\n\n";

        // Build the email headers.
        $email_headers = "From: <$email>";
        $contents = array('first_name' => $first_name, 'last_name' => $last_name, 'email' => $email, 'cell_phone' => $cell_phone, 'password' => $password, 'motivation' => $motivation);
      
      
        // THIS HERE IS WHERE THE COOKIE IS SET!!!! THIS IS WHERE THE PARSE STUFF WOULD GO!!! I might suggest putting any parse calls or stuff in the IF STATEMENT on line 55 because that is where we kick back either success on submission or not
        $c=json_encode($contents);
        setcookie(
          'user',				// Name of the cookie, required
          $c,					// The value of the cookie
          time()+60*5,			// Expiration time, set for a week in the future
          '/',						// Folder path the cookie will be available for
          'nomful.com'		// Domain to which the cookie will be bound
        );

        // Send the email.
        if (mail($recipient, $subject, $email_content, $email_headers)) {
            // Set a 200 (okay) response code.
            http_response_code(200);
            echo "Thank You!";
        } else {
            // Set a 500 (internal server error) response code.
            http_response_code(500);
            echo "Oops! Something went wrong.";
        }

    } else {
        // Not a POST request, set a 403 (forbidden) response code.
        http_response_code(403);
        echo "There was a problem with your submission, please try again.";
    }

?>
