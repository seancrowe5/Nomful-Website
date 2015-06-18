<?php
require_once('vendor/autoload.php');
    use Parse\ParseClient;
    use Parse\ParseQuery;
    use Parse\ParseObject;
//live
//ParseClient::initialize('KjqhJkgvtVSsPA9SVHxq1Euad73fWhLWfVS4LNxO', '9V1I071QAS4aveQRkxabmIY2wzisgnGQ1UH4SVG0', 'j3W9jcVXVgWQDfamFbm7UodDiYOSPjinnEAR7EdS');
//dev
ParseClient::initialize('EcHepDGBmNvZhRx8D1vMFLzMPgqAXqfIjpiIJuIe', 'cyksn8TZdJyJVIeM0RbTMkGmHlped7dMhoksgrxm', 'fk2DwxckV3Pe4fKGRs6LH1YaZkslDTu86TS6Ouv5');


//live
//$stripe = array(
//  "secret_key"      => "sk_live_SYYhkBbbtoAt503sMgJpGKNY",
//  "publishable_key" => "pk_live_a7plqC3BMb74TAFBiefltyaf"
//);

//test
$stripe = array(
  "secret_key"      => "sk_test_uMTJhaR5rAwMtnsLLKH9wTBx",
  "publishable_key" => "pk_test_JQ0bC9TcrUXB06bKoMjYjw3l"
);


\Stripe\Stripe::setApiKey($stripe['secret_key']);
?>