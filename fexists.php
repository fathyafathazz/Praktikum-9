<html>
<head>
<title>Pemprosesan File</title>
</head>
<body>
    <h2>Pemeriksaan file</h2>
    <?php
    $file='D:\praktikum 9.txt';
    if(file_exists($file))
    {
        echo("file <b> $file <?b> sudah ada !");
    }else
    {
        echo("file <b> $file <?b> sudah ada !");
    }
    ?>
</body>
</html>