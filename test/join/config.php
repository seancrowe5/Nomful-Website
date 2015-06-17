<?php
require_once('vendor/autoload.php');

//test
//sk_test_uMTJhaR5rAwMtnsLLKH9wTBx 
//pk_test_JQ0bC9TcrUXB06bKoMjYjw3l 

//live
//sk_live_SYYhkBbbtoAt503sMgJpGKNY
//pk_live_a7plqC3BMb74TAFBiefltyaf

$stripe = array(
  "secret_key"      => "sk_live_SYYhkBbbtoAt503sMgJpGKNY",
  "publishable_key" => "pk_live_a7plqC3BMb74TAFBiefltyaf"
);

\Stripe\Stripe::setApiKey($stripe['secret_key']);
?>