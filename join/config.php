<?php
require_once('vendor/autoload.php');

//live
$stripe = array(
  "secret_key"      => "sk_live_SYYhkBbbtoAt503sMgJpGKNY",
  "publishable_key" => "pk_live_a7plqC3BMb74TAFBiefltyaf"
);

//test
//$stripe = array(
//  "secret_key"      => "sk_test_uMTJhaR5rAwMtnsLLKH9wTBx",
//  "publishable_key" => "pk_test_JQ0bC9TcrUXB06bKoMjYjw3l"
//);


\Stripe\Stripe::setApiKey($stripe['secret_key']);
?>