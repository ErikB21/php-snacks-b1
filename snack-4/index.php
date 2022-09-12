<!-- 
## Snack 4

Creare un array con 15 numeri casuali, tenendo conto che 
l’array non dovrà contenere lo stesso numero più di una volta. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <?php
            // $random = array();
            // for($i = 0; $i < 15; $i++){
            //     $random[] = rand(1, 50) . '<br>';
            //     $result = array_unique($random);
            // }
            // print_r($result);
            function getArrayRandom($min, $max){
                $newArray = [];
                while(count($newArray) < 15){
                    $number = rand($min, $max);
                    if(!in_array($number, $newArray)){
                        $newArray[] = $number;
                    }
                }
                return print_r($newArray);
            }
            getArrayRandom(1, 100);
            
        ?>
    </div>
</body>
</html>

