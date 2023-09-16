<!DOCTYPE html>
<html>
<head>
    <title>Exemplo de Link PHP</title>
</head>
<body>
    <h1>Clique</h1>
    
    <?php
    
    $url = "https://www.youtube.com/watch?v=nte67e4vtkQ";
    ?>

    <p>Clica urgentemente<a href="<?php echo $url; ?>">Nosso link</a></p>
</body>
</html>
