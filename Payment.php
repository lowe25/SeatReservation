<?php
require_once 'php/init.php';   
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTf-8">
  <title>PAYMENT</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="resource/css/payment-style.css">
</head>

<body>
<form action="" method="get">
  <div class="container mt-4 d-flex justify-content-center main">
    <div class="card">
      <div class="d-flex justify-content-between px-3 pt-4">
        <span class="pay">Payment</span>
      </div>

      <div class="px-3 pt-3">
        <label for="card number" class="d-flex justify-content-between">
          <span class="labeltxt">CARD NAME</span>
        </label>
        <input type="name" name="name" class="form-control inputtxt" placeholder="Will Smith">
      </div>


      <div class="px-3 pt-3">
        <label for="card number" class="d-flex justify-content-between">
          <span class="labeltxt">CARD NUMBER</span>
          <img src="download (4).png" width="25" class="image">
        </label>
        <input type="number" name="number" class="form-control inputtxt" placeholder="8881 2545 2545 2245">
      </div>


      <div class="d-flex justify-content-between px-3 pt-4">
        <div>
          <label for="date" class="exptxt">Expiry</label>
          <input type="number" name="number" class="form-control expiry" placeholder="MM / YY">
        </div>


        <div>
          <label for="cvv" class="cvvtxt">CVV /CVC</label>
          <input type="number" name="number" class="form-control cvv" placeholder="123">
        </div>
      </div>


      <div class="d-flex align-items-center justify-content-between px-3 py-4">
        <div>
          <a href="booking.php" type="button" class="btn cancel">Back to Booking</a>
        </div>
        <div>
        <input type="submit" class="btn btn-light" value="Pay Booked Seats">       
         </div>
      </div>
    </div>
  </div>


  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </form>
</body>
</html>