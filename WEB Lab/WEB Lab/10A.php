<!DOCTYPE html>

    <head>
       <title>Date</title>
       <style>
        h1{
            text-align: center;
        }
        date{
            color: green;
        }
       </style>
    </head>
    <body>
    <h1>Today's date is
    <date>
    <?php
   date_default_timezone_set('Asia/Kolkata');
    $today= date("d-m-Y");
    $x = date("H:i:s");
    $i = date("l");
    echo "$today \t";
    echo "$x \t";
    echo $i
    ?>
    </date>
    </h1>
   
    </body>
</html>