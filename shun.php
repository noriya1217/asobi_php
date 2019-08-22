<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ろくまる農園</title>
    </head>
    <body>
        <?php
            $tsuki = $_POST['tsuki'];

            $yasai = array('','ブロッコリー', 'カリフラワー', 'レタス', 'みつば', 'アスパラガス',
                'セロリ', 'ナス', 'ピーマン', 'オクラ', 'さつまいも', '大根', 'ほうれん草');

            echo $tsuki.'月は'.$yasai[$tsuki].'が旬です。<br>';
            echo '<input type="button" onclick="history.back()" value="戻る">';
        ?>
    </body>
</html>