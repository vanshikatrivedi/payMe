<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css" />

    <title>Buy Me a Coffee 🥤</title>
</head>

<body>


  <div class="row" style="padding:100px 300px;">
    <div class="col-50">
      <div class="container">
        <form action="payscript.php" method="post" style="padding: 25px;">

          <div class="row">
            <div class="col-25">
                <p style="text-align: center;margin:10px 10px;font-family:'Open Sans', sans-serif ; color: #00332c;">
                    <i>Hey</i>, 𝐟𝐞𝐥𝐥𝐨𝐰 <𝚍𝚎𝚟𝚎𝚕𝚘𝚙𝚎𝚛𝚜/>!</h2></br>
                    I am Vanshika Trivedi, an Aspiring Developer 😊</br>
                        <h1 style="text-align: center;margin:10px 10px;font-family: lato; color: #00332c;">Buy Me a Coffee </h1>
                </p>
                <p style="text-align: center;margin:10px 10px;font-family:'Open Sans', sans-serif ; color: #00332c;">
                    just in case you like my work.</br>
                </p>
                    
                    <img src="image/coffee-cup.svg" id="coffee-cup">
                    

                </p>
                
              <h3 style="text-align: center;margin:20px 10px;font-family: lato;">Let Me Know You</h3>


              <label for="fname"><i class="fa fa-user"></i> Full Name</label>
              <input type="text" id="fname" name="name" placeholder="John M. Doe">
              <label for="email"><i class="fa fa-envelope"></i> Email</label>
              <input type="text" id="email" name="email" placeholder="john@example.com">
              <input type="hidden" value="<?php echo 'OID' . rand(100, 1000); ?>" name="orderid">
              <input type="hidden" value="<?php echo 1; ?>" name="amount">
              <label for="city"><i class="fa fa-mobile"></i> Mobile</label>
              <input type="text" id="city" name="mobile" placeholder="Mobile Number">
              <label for="amount"><i class="fa fa-rupee-sign"></i> Amount (Required)</label>
              <input type="number" id="amount" name="amount" placeholder="Enter the amount in INR ie. ₹1/-">




            </div>

            <input type="submit" value="Pay Me :)" class="btn">
        </form>
      </div>
    </div>

  </div>

</body>

</html>