<?php
    
    class Weather {

        public static $tempConditions = ['cold', 'mild', 'warm'];
        
        public static function celsiusToFarenheit($celsius) {

            return $celsius * 9 / 5 + 32;
        }

        public static function determineTemperatureConditions($farenheits) {
            if ($farenheits < 40) {

                return self::$tempConditions[0];

            }else if ($farenheits < 70) {
                return self::$tempConditions[1];
            } else {
                return self::$tempConditions[3];
            }
            
        }
    }

    // print_r(Weather::$tempConditions);
    // echo Weather::celsiusToFarenheit(20);
    echo Weather::determineTemperatureConditions(40);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP Tutorial</title>
</head>
<body>

</body>
</html>