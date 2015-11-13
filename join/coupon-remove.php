<?php
  // check if the coupon cookie is first set, otherwise go back
  if (!isset($_COOKIE['coupon_info'])) { 
    header ( "Location: payment.php" ); 
  
  // and if it is set, expire and unset it, and then go back
  } else {
    setcookie ("coupon_info", "", time()-60*60*25, '/', 'nomful.com'	);
    unset($_COOKIE['coupon_info']);
    header ( "Location: payment.php" );
   }

?>
