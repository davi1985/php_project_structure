<!-- Include functions -->
<?php require '../app/functions/pages.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Estrura Básica para Projetos PHP</title>
    
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Materialize CSS -->
    <link rel="stylesheet" href="assets/css/materialize.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/custom.css">
</head>
<body>

    <!-- Includes pages -->
    <?php

    try {

        require pagesLoad();

    } catch (Exception $e) {
        
        echo $e->getMessage();
    }
    ?>  

</body>
</html>
