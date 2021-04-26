<?php
require_once 'php/init.php';   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./resource/css/booking-style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
        rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Mansalva' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Bangers' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Faster One' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Sarpanch' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Iceberg' rel='stylesheet'>
    <title>Movie Seat Booking</title>
</head>

<body>
    <div class="movie-container">
    <form action="" method="GET">
    <?php
  booking2();
?>
        <label>Movie: </label>
        <!--MovieDB-->
        <?php
         viewMovies2();
        ?>
    </div>
    
    <div class="schedule-container">
        <label>Schedule: </label>
        <select id="movie" name="Time">
            <option value="1:00 - 3:00 PM" name="Time">1:00 - 3:00 PM</option>
            <option value="4:00 - 6:00 PM"name="Time">4:00 - 6:00 PM</option>
            <option value="7:00 - 9:00 PM"name="Time">7:00 - 9:00 PM</option>
        </select>
    </div>
    <ul class="showcase">
        <li>
            <small>N/A
            <input type='checkbox' name='Seat'>
            </small>
        </li>
        <li>
            <small>Selected
            <input type='checkbox' name='Seat' checked  disabled checked>
            </small>
        </li>
        <li>
          
            <small>Occupied
            <input type='checkbox' name='Seat' disabled checked>
            </small>
        </li>
    </ul>

    <div class="container">
    <div class="screen"></div>
    <!--Seats-->
       <?php
       viewSeats2(); 
       ?>
        <div class="tae">
       <h1>Seat Taken</h1>
       <?php
       updateSeats2(); 
       ?>
       </div>
       <div class="btn-form">
            <div class="btn-grp">
            <input type="submit" class="btn-pay" value="Book Tickets">
            </div>
            <div class="btn-grp">
           <a href="Payment.php"><input type="button" class="btn-pay" value="Proceed To Payment"></a> 
            </div>

            <div class="btn-grp">
            <a href="index.php"><input type="button" class="btn-back" value="Back"></a>
            </div>
        </div>
        </div>
       </form>
    </div>

    <script src="resource/js/script.js" type="text/javascript"></script>
</body>

</html>