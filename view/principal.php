<?php 

    require_once("controller/ControllerMessage.php");
    $show = new ControllerMessage();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de MVC com programação orientada a objetos</title>
</head>
<body>

    <h1 style="text-align: center;"> <?php echo ($show->showMessage());?> </h1>

    
</body>
</html>