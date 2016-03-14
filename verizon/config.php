<?php
require_once('vendor/autoload.php');

$stripe = array(
  "secret_key"      => "sk_live_SYYhkBbbtoAt503sMgJpGKNY",
  "publishable_key" => "pk_live_a7plqC3BMb74TAFBiefltyaf"
);

\Stripe\Stripe::setApiKey($stripe['sk_live_SYYhkBbbtoAt503sMgJpGKNY']);
?>