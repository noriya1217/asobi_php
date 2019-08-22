<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ろくまる農園</title>
    </head>
    <body>
        <?php
        $seireki = $_POST['seireki'];

        $wareki = gengo($seireki);
        echo $wareki;

        function gengo($seireki) {
            if (1868 < $seireki && $seireki <= 1911) {
                $gengo = '明治';
            } else if (1911 < $seireki && $seireki <= 1925) {
                $gengo = '大正';
            } else if (1926 <= $seireki && $seireki <= 1988) {
                $gengo = '昭和';
            } else if (1989 <= $seireki && $seireki <= 2019) {
                $gengo = '平成';
            } else {
                $gengo = '令和';
            }
            return($gengo);
        }
        ?>
    </body>
</html>