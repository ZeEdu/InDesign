<html>
    <head>
        <title>Minhas pagina</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <h1>Mateus victor </h1>
        <?php date_default_timezone_set('America/Los_Angeles'); ?>
        <strong>minha idade: <?= date("Y") - 1998; ?> anos</strong>
        <?php
        for($i = 0; $i <= 10000; $i++) {
            echo ($i & 1) ? "<b class='impar'>".$i." é impar</b>" : ($i !== 0 ? "<p  class='par'>".$i." é par</p>" : "<p class='indefinido'>$i</p>");
        }
        ?>
    </body>
</html>