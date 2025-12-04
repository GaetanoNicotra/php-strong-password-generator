
<?php
if(isset($_GET['lunghezza'])){
    
    //variabili che contengono i caratteri per la password
    $upper = 'ABCDEFGHILMNOPQRSTUWXYZ';
    $lower='abcdefghilmnopqrstywxz';
    $special='£$%&/=?!"';
    $numbers='0123456789';

    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Generatore di password sicure</h1>

<hr>

    <form action="">
        <!-- campo input -->
        <input type="number" min="3" max="20" id="lunghezza" name="lunghezza"> 
        <label for="lunghezza">Inserici la lunghezza della password che vuoi generare</label>

        <br>

        <button>Genera!</button>
    </form>
</body>
</html>