<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $plan  = $_POST["plan"];
          setcookie(
            'plan_info',		// Name of the cookie, required
            $plan,				// The value of the cookie
            time()+60*60*24,	// Expiration time, set for a week in the future
            '/',				// Folder path the cookie will be available for
            'nomful.com'		// Domain to which the cookie will be bound
          );
  }
?>