<?php
session_start();

$password = $_SESSION['password'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Document</title>
</head>
<body class='bg-success-subtle'>
    <div class="container mt-5">
        <h2>La tua password è: <?php echo $password ?></h2>
        <h5>La lunghezza è di <?php echo strlen($password) .' caratteri' ?></h5>
</div>
</body>
</html>