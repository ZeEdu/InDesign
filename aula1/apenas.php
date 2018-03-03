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
        for($i = 10000; $i >= 0; $i--) {
            echo in_array($i, [4838, 3713, 2762])? "<p class='par'>$i</p>" : "<p>$i</p>";
        }
        ?>
    </body>
</html>