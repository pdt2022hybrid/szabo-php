<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php 
        echo "ahoj <br>";


        function arrivals() {
            date_default_timezone_set ("Europe/Bratislava");
            $date = date("H.i.s ");
            echo $date;

            if ($date < 8) {
                $inTime = "Nacas";
                echo "Nacas";
            }
            elseif  ($date > 8) {
                $late = " Meskanie";
                echo "Meskanie";
            }
            elseif ($date >=20) {
                die("nemoze");
            }

            function writeArrivalsIntoFile($date, $inTime, $late) {
                file_put_contents("cas.log", "$date $inTime, $late <br>", FILE_APPEND);
            }
            

        }

        arrivals();
        writeArrivalsIntoFile();
        
        
    ?>
    
</body>
</html>