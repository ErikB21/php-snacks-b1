<!-- 
## Snack 7

Creare un array contenente qualche alunno di un’ipotetica classe. 
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

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

    //creiamo la struttura dati
        $studenti = [

            [
                'nome' => 'Erik',
                'cognome' => 'Borgogno',
                'voti' => ['8', '6', '7', '9']
            ],
            [
                'nome' => 'Mario',
                'cognome' => 'Rossi',
                'voti' => ['6', '5', '3', '9']
            ],
            [
                'nome' => 'Leo',
                'cognome' => 'Pisano',
                'voti' => ['6', '6', '4', '5']
            ]
            
        ];
    ?>

    <ul>
        <?php
            for( $i = 0; $i < count($studenti); $i++){
                $studenteCorrente = $studenti[$i];//ciclo l'array e lo dichiaro in una variabile
                $voto = $studenteCorrente['voti'];//richiamo l'array di voti
                $media = array_sum($voto) / count($voto);//calcolo la media

                echo '<li>' . $studenteCorrente['nome'] . //stampo a schermo un li per ogni persona, con la relativa media
                ' ' . $studenteCorrente['cognome'] . 
                ' : ' . $media .
                '</li>';
            }

            // for( $i = 0; $i < count($studenti); $i++){
            //     $studenteCorrente = $studenti[$i];
            //     $somma = 0;
            //     $voto = $studenteCorrente['voti'];     
            //     for($j = 0; $j < count($voto); $j++)){
            //          $somma += $voto[$j];
            //     }
            //     $media = $somma / count($voto);

            //     echo '<li>' . $studenteCorrente['nome'] . 
            //     ' ' . $studenteCorrente['cognome'] . 
            //     ' : ' . $media .
            //     '</li>';
            // }
        ?>
    </ul>

    
</body>
</html>