<?php

$nome = $_POST['nome'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <?php
    echo "<h2>Bem-vindo : $nome</h2>";
    ?>

    <form action="#" method="post">
        <div class="mb-3">
            <label for="text" class="form-label">Nome:</label>
            <input type="text" class="form-control" id="nome" aria-describedby="nome" name="nome">
            <div id="nome" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>

</html>
