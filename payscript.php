<?php

 $apiKey = "rzp_test_U6w6jCI1F3JfzC";

?>

<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
<link rel="stylesheet" href="style.css" />



<form action="" method="POST">
<script
src="https://checkout.razorpay.com/v1/checkout.js"
    data-key="<?php echo $apiKey; ?>" // Enter the Test API Key ID generated from Dashboard → Settings → API Keys
    data-amount="<?php echo $_POST['amount'] * 100;?>" // Amount is in currency subunits. Hence, 29935 refers to 29935 paise or ₹299.35.
    data-currency="INR"//You can accept international payments by changing the currency code. Contact our Support Team to enable International for your account
    data-id="<?php echo 'OID'.rand(10,100).'END';?>"//Replace with the order_id generated by you in the backend.
    data-buttontext="Think once more! Click 'here' if you still want to Pay Me ;)"
    data-name="Buy a Coffee!"
    data-description="for Vanshika"
    data-image="https://res.cloudinary.com/startup-grind/image/upload/c_fill,dpr_2.0,f_auto,g_center,h_250,q_auto:good,w_250/v1/gcs/platform-data-goog/events/IMG_5091.jpg"
    data-prefill.name="<?php echo $_POST['name'];?>"
    data-prefill.email="<?php echo $_POST['email'];?>"
    data-prefill.contact="<?php echo $_POST['mobile'];?>"
    data-theme.color="#cb997e"
></script>
<input type="hidden" custom="Hidden Element" name="hidden">
</form>


