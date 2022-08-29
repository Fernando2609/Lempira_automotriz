<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionales Rango</title>
</head>
<body>
    <?php  
    $edad=30;
    if ($edad<=20) {
        print("<p>Te regalamos Boletos para el cine</p>");
    }
    if ($edad>20 && $edad<=30) {
        print("<p>Te regalamos Boletos para el concierto de Kathy Perry</p>");
    }
    if ($edad>30 && $edad<=40) {
        print("<p>Te regalamos Boletos para el Teatro</p>");
    }
    if ($edad>40) {
        print("<p>Te regalamos Boletos para la ópera</p>");
    }
    ?>
</body>
</html>