<head>
    <title>IPs: ¿Qué es legal y qué no?</title>
    <meta name="title" content="IPs: ¿Qué cosas son legales y qué no?">
    <meta name="description" content="En el mundo de internet hay muchas cosas legales, y otras ilegales, la IP es una de ellas, ¿qué es legal con las IPs? Las IPs son legales cuánd...">
    <meta name="keywords" content="ips">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
</head>
<body>
    <?php
    $file_with_ips = 'ip.json'
    $ips = file_get_contents($file_with_ips)
    $contenido = json_decode($ips_true)

    if(isset($_GET["viewips"])) {
        echo "<p>IP: <b>".$contenido[$_GET["k"]] ."</b></p>";
    } else {
        $contenido[$_GET["k"]] = $SERVER[REMOTE_ADDR];
        file_put_contents($file_with_ips, json_encode($contenido));
    }
    ?>
</body>