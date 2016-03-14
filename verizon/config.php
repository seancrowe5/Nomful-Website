<?php
require_once('vendor/autoload.php');

$stripe = array(
  "secret_key"      => "sk_test_BQokikJOvBiI2HlWgH4olfQ2",
  "publishable_key" => "pk_test_6pRNASCoBOKtIshFeQd4XMUh"
);

\Stripe\Stripe::setApiKey($stripe['sk_test_uMTJhaR5rAwMtnsLLKH9wTBx']);
?>