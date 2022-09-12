<!-- 
## Snack 2

Passare come parametri GET name, mail e age e verificare 
(cercando i metodi che non conosciamo nella documentazione) che:
1- name sia più lungo di 3 caratteri
2- mail contenga un punto e una chiocciola 
3- age sia un numero
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack-2</title>
</head>
<body>
    <?php
        $nome = $_GET['name'];
        $email = $_GET['email'];
        $age = $_GET['age'];
        if(strlen($nome) >= 3 && strpos($email, '@') !==false && strpos($email, '.') !== false && is_numeric($age) !== false){
            echo '<h2>Accesso riuscito!</h2>';
        } else {
            echo '<h2>Accesso Negato!</h2>';
        }    
    ?>  
</body>
</html>

