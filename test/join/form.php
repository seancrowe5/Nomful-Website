<?php require_once('./config.php'); 



//this will be the base price
//if user does not enter in group code AND selects lower tier...set to 109


//if user does not enter in group code AND selects higher tier...set to 279
    //$amount = 27900;

//if user enters in group code...AND selects lower tier
    //$amount = 9900;
//if user enters in group code...AND selects lower tier
    //$amount = 24900;

//change the ui so the user is aware of the discount
   
$lowAmount = 10900;
$highAmount = 10900;

?>



<form action="charge.php" method="post">
  <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
          data-key          =   "<?php echo $stripe['publishable_key']; ?>"
          data-amount       =   "<?php echo lowAmount; ?>" 
          data-description  =   "One year's subscription" //title at top
          data-panel-label  =   "Subscribe!" //blue button _______ $99.00
          data-email        =   "prefil@mail.com" //prefills the email if we already know it
          data-label        =   "pay now" //blue button to initiate pay flow
          
          >
    </script>

</form>


<form action="charge.php" method="post">
  <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
          data-key          =   "<?php echo $stripe['publishable_key']; ?>"
          data-amount       =   "<?php echo $highAmount; ?>" 
          data-description  =   "One year's subscription" //title at top
          data-panel-label  =   "Subscribe!" //blue button _______ $99.00
          data-email        =   "prefil@mail.com" //prefills the email if we already know it
          data-label        =   "pay now" //blue button to initiate pay flow
          
          >
    </script>
</form>
