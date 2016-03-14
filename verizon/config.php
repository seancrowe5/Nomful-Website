<?php
require_once('vendor/autoload.php');

$stripe = array(
  "secret_key"      => "sk_test_uMTJhaR5rAwMtnsLLKH9wTBx",
  "publishable_key" => "pk_test_JQ0bC9TcrUXB06bKoMjYjw3l"
);

\Stripe\Stripe::setApiKey($stripe['secret_key']);
?>