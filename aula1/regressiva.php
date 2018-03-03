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
            if(!($i & 1)) {
                echo $i !== 4838 ? "<b class='par'>".$i."</b>" : "<b>".$i."</b>";
            }
        }
        ?>
    </body>
</html>