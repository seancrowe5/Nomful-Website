<?php


$name = "sean";
$phoneNumber = "3306714458";


$fields = array("title" => "Notes",
               "value" => "This is much easier than I thought it would be.",
               "short" => false);

$attachments = array(   "fallback" => "New open task [Urgent]: <http://nomful.com>",
                        "pretext" => "New open task [Urgent]: <http://url_to_task|Test out Slack message attachments>",
                        "color" => "#D00000",
                        "fields" => $fields);

$payload = array("text" => "Name: $name signed up with phone: <sms://$phoneNumber> "); 

$data_string = json_encode($payload);                                                                                   
                                                                                                                     
$ch = curl_init('https://hooks.slack.com/services/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');                                                                      
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                                                  
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
    'Content-Type: application/json',                                                                                
    'Content-Length: ' . strlen($data_string))                                                                       
);                                                                                                                   
                                                                                                                     
$result = curl_exec($ch);


?>
