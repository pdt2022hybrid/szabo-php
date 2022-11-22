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

    function arrivals($date) {

            if ($date < 8) {
                $inTime = "Nacas";
                echo "Nacas";
                return "OK";
            }
            elseif  ($date > 8) {
                $late = " Meskanie";
                echo "Meskanie";
                return "LATE";
            }
            elseif ($date >=20) {
                die("nemoze");
            }

        }
    
        function writeArrivalsIntoFile($date, $inTime) {
            file_put_contents("cas.log", "$date $inTime <br>", FILE_APPEND);
        }

    
        date_default_timezone_set ("Europe/Bratislava");
        $date = date("H.i.s ");
        echo $date;
    
        $inTime = arrivals($date);
        writeArrivalsIntoFile($date, $inTime);
        
        
    ?>
    
</body>
</html>
