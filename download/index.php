<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <script type="text/javascript">
(function(b,r,a,n,c,h,_,s,d,k){if(!b[n]||!b[n]._q){for(;s<_.length;)c(h,_[s++]);d=r.createElement(a);d.async=1;d.src="https://cdn.branch.io/branch-v1.8.3.min.js";k=r.getElementsByTagName(a)[0];k.parentNode.insertBefore(d,k);b[n]=h}})(window,document,"script","branch",function(b,r){b[r]=function(){b._q.push([r,arguments])}},{_q:[],_v:1},"addListener applyCode banner closeBanner creditHistory credits data deepview deepviewCta first getCode init link logout redeem referrals removeListener sendSMS setIdentity track validateCode".split(" "), 0);
branch.init('key_test_mecNdlfYel5IvYJXZtBVIhaotynBT0K2');

            function sendSMS(form) {
                var phone = form.phone.value;
                var linkData = {
                    tags: [],
                    channel: 'Flyer Landing Page',
                    feature: 'TextMeTheApp',
                    data: {}
                };
                var options = {};
                var callback = function(err, result) {
                    if (err) {
                        alert("Sorry, something went wrong.");
                    }
                    else {
                        alert("SMS sent!");
                    
                    }
                };
                branch.sendSMS(phone, linkData, options, callback);
                form.phone.value = "";
            }
        </script>
    </head>
    <body>
    	Send SMS
        <form onsubmit="sendSMS(this); return false;">
        	<input id="phone" name="phone" type="tel" placeholder="(650) 123-4567" />
        	<br/>
        	<input type="submit"/>
        </form>
    </body>
</html>

<?php
    require "autoload.php";
    $MailChimp = new \Drewm\MailChimp('458779a92e35ef155beeb58b445fd2ee-us10');
    $result = $MailChimp->call('lists/subscribe', array(
                    'id'                => '297cbd7828',
                    'email'             => array('email'=>'crowesp2@miamioh.edu'),
                    'merge_vars'        => array('FNAME'=>'Sean', 'LNAME'=>'Crowe'),
                    'double_optin'      => false,
                    'update_existing'   => true,
                    'replace_interests' => false,
                    'send_welcome'      => false,
                ));
    print_r($result);
?>