<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale-1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>listado de visitas</title>
</head>

<body>
    <h1>Listado de visitas por IP</h1>

    <ul>
        <?php foreach ($visitsIp as $ip) : ?>
            <li><?= e($ip) ?></li>
        <?php endforeach; ?>
    </ul>


    <div class='botons-group'>
        <input type='submit' name='buscar' value='Descargar archivo en .txt'>
        <input type='submit' name='volver' value='Descargar archivo en Json'>
    </div>

</body>

</html>