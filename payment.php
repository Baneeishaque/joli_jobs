<?php 
require_once('config.php'); 
?>
<html>
  <head>
    <title> Registration payment</title>
    <meta name="viewport" content="width=device-width">
    <style>
      .razorpay-payment-button {
        color: #ffffff !important;
        background-color: #0d6496;
        border-color: #7266ba;
        font-size: 14px;
        padding: 10px;
      }
    </style>
  </head>
  <body>
    <form action="success.php" method="POST">
    <!-- Note that the amount is in paise = 50 INR -->
    <script
         src="https://checkout.razorpay.com/v1/checkout.js"
        data-key="<?php echo $razor_api_key; ?>"
        data-amount="20000"
        data-buttontext="Pay with Razorpay"
        data-name="Joli Jobs.com"
        data-description="Registration with RazorPay"
        data-image="img/Logo for R.png"
        data-prefill.name="Joli Jobs.com"
        data-prefill.email="support@razorpay.com"
        data-theme.color="#0d6496"
    ></script>
    <input type="hidden" value="Hidden Element" name="hidden">
    </form>
  </body>
</html>



