<?php
  require_once('./config.php');

  $token  = $_POST['stripeToken'];

  $customer = \Stripe\Customer::create(array(
      'email' => 'customer@example.com',
      'card'  => $token
  ));

  $charge = \Stripe\Charge::create(array(
      'customer' => $customer->id,
      'amount'   => 19900,
      'currency' => 'usd'
  ));

  echo '<h1>Successfully charged $199.00!</h1>'; //THOMAS THIS IS RESPONSE MESSAGE
?>