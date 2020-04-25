<?php 
session_start();
require_once('config.php'); 
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Success-page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.3/animate.min.css">
  <style>
    .razorpay-payment-button {
      position: relative;
      top: 1.5em;
      text-decoration: none;
      background: #8bc34a;
      color: #fff;
      margin: auto;
      padding: .8em 3em;
      -webkit-box-shadow: 0px 15px 30px rgba(50, 50, 50, 0.21);
      -moz-box-shadow: 0px 15px 30px rgba(50, 50, 50, 0.21);
      box-shadow: 0px 15px 30px rgba(50, 50, 50, 0.21);
      border-radius: 25px;
      -webkit-transition: all .4s ease;
      -moz-transition: all .4s ease;
      -o-transition: all .4s ease;
      transition: all .4s ease;
      border: 0px solid transparent;

    }

    .razorpay-payment-button:hover {
      -webkit-box-shadow: 0px 15px 30px rgba(50, 50, 50, 0.41);
      -moz-box-shadow: 0px 15px 30px rgba(50, 50, 50, 0.41);
      box-shadow: 0px 15px 30px rgba(50, 50, 50, 0.41);
      -webkit-transition: all .4s ease;
      -moz-transition: all .4s ease;
      -o-transition: all .4s ease;
      transition: all .4s ease;
    }



    body {
      background: #E9EDF0;
    }

    #card {
      position: relative;
      top: 110px;
      width: 418px;
      display: block;
      margin: auto;
      text-align: center;
      font-family: 'Source Sans Pro', sans-serif;
    }

    #upper-side {
      padding: 2em;
      background-color: #0D6496;
      display: block;
      color: #fff;
      border-top-right-radius: 8px;
      border-top-left-radius: 8px;
    }

    #checkmark {
      font-weight: lighter;
      fill: #fff;
      margin: -3.5em auto auto 68px;
    }

    #status {
      font-weight: lighter;
      text-transform: uppercase;
      letter-spacing: 2px;
      font-size: 1em;
      margin-top: -.2em;
      margin-bottom: 0;
    }

    #lower-side {
      padding: 2em 2em 5em 2em;
      background: #fff;
      display: block;
      border-bottom-right-radius: 8px;
      border-bottom-left-radius: 8px;
    }

    #message {
      margin-top: -.5em;
      color: #757575;
      letter-spacing: 1px;
    }

    #contBtn {
      position: relative;
      top: 1.5em;
      text-decoration: none;
      background: #8bc34a;
      color: #fff;
      margin: auto;
      padding: .8em 3em;
      -webkit-box-shadow: 0px 15px 30px rgba(50, 50, 50, 0.21);
      -moz-box-shadow: 0px 15px 30px rgba(50, 50, 50, 0.21);
      box-shadow: 0px 15px 30px rgba(50, 50, 50, 0.21);
      border-radius: 25px;
      -webkit-transition: all .4s ease;
      -moz-transition: all .4s ease;
      -o-transition: all .4s ease;
      transition: all .4s ease;
    }

    #contBtn:hover {
      -webkit-box-shadow: 0px 15px 30px rgba(50, 50, 50, 0.41);
      -moz-box-shadow: 0px 15px 30px rgba(50, 50, 50, 0.41);
      box-shadow: 0px 15px 30px rgba(50, 50, 50, 0.41);
      -webkit-transition: all .4s ease;
      -moz-transition: all .4s ease;
      -o-transition: all .4s ease;
      transition: all .4s ease;
    }
  </style>
</head>

<body>

<?php
  $pay = $_SESSION['temp_user_reg']['payment'];
  $pay = $pay*100;
?>

  <div id='card' class="animated fadeIn">
    <div id='upper-side'>
      <?xml version="1.0" encoding="utf-8"?>
      <!-- Generator: Adobe Illustrator 17.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
      <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">

      <h1 id='status'>
        Make a Payment
      </h1>
    </div>
    <div id='lower-side'>
      <p id='message'>
        ₹ <?php echo $_SESSION['temp_user_reg']['payment'] ?>
      </p>
      <form action="success.php" method="POST">
        <!-- Note that the amount is in paise = 50 INR -->
        <script src="https://checkout.razorpay.com/v1/checkout.js" data-key="<?php echo $razor_api_key; ?>"
          data-amount="<?php echo $pay ?>" data-buttontext="Pay with Razorpay" data-name="Joli Jobs.com"
          data-description="Registration with RazorPay" data-image="img/Logo for R.png"
          data-prefill.name="Joli Jobs.com" data-prefill.email="support@razorpay.com" data-theme.color="#0d6496">
        </script>
        <input type="hidden" value="Hidden Element" name="hidden">
      </form>
      <!-- <a href="#" id="contBtn">Continue</a> -->
    </div>
  </div>

</body>

</html>