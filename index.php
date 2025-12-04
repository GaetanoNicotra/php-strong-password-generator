<?php
// importo la funzione dal file function.php 
include_once 'functions.php';

// sposto l'utente in una pagina separata
if($password != "" ){

    //salvo la password 
    session_start();

    $_SESSION['password']= $password;

    header("Location: ./password.php");
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Password</title>
</head>
<body class='bg-success-subtle'>
    <div class="container mt-5">

        <h1>Generatore di password sicure</h1>
    
    <hr>
        <!-- il tag form invia al click del bottone il parametro scelto , all'URL -->
        <form action="">
            <!-- campo input (il 'name' lunghezza viene letto da php perchè l'ho passato al $_GET) -->
            <input type="number" min="3" max="20" id="lunghezza" name="lunghezza" class='input-group w-25 rounded'> 
            <label for="lunghezza">Inserici la lunghezza della password che vuoi generare</label>
    
            <br>
            <!-- il bottone invia i dati di default quando si torva dentro un form,
             automaticamente diventa: type="submit" -->
            <button class='btn btn-success mt-3'>Genera!</button>
        </form>
    </div>

</body>
</html>