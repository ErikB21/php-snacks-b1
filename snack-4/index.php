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
        set_time_limit(2);//tempo limite per il programma
            // $random = array();
            // for($i = 0; $i < 15; $i++){
            //     $random[] = rand(1, 50);
            //     $result = array_unique($random);
            // }
            // var_dump($result);
            function getArrayRandom($min, $max){
                $newArray = [];//creo un array vuoto
                while(count($newArray) < 15){//ciclo con while
                    $number = rand($min, $max);//creo un numero casuale tramite range(min,max)
                    if(!in_array($number, $newArray)){//se il numero random non si trova ancora nel array vuoto
                        $newArray[] = $number;//pushalo
                    }
                }
                return var_dump($newArray);//stampo a schermo ciò che ho creato
            }
            getArrayRandom(1, 100);
        ?>
    </div>
</body>
</html>

