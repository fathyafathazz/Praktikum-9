<html>
<head>
<title>Penggunaan Modularisasi</title>
</head>
<body>
    <h2> penggunaan require one </h2>
    <pre>
        <?php
        require_once("function.php");
        echo("Luas segi empat dengan p = 2 dan 1 = 4 adalah ".Luas(2,4)."<br>");
        require_once("function.php");
        echo("Luas segi empat dengan p = 5 dan 1 = 4 adalah ".Luas(5,4));
        ?>
    </pre>
</body>
</html>