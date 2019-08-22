<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ろくまる農園</title>
    </head>
    <body>
        <?php
            $mbango = $_POST['mbango'];

            // $hoshi['M1'] = 'カニ星雲';
            // $hoshi['M31'] = 'アンドロメダ大星雲';
            // $hoshi['M42'] = 'オリオン大星雲';
            // $hoshi['M45'] = 'すばる';
            // $hoshi['M57'] = 'ドーナツ星雲';

            $hoshi = array('M1' => 'カニ星雲', 'M31' => 'アンドロメダ大星雲', 
                'M42' => 'オリオン大星雲', 'M45' => 'すばる', 'M57' => 'ドーナツ星雲');

            foreach($hoshi as $key => $var){
                echo $key.'は'.$var.'<br>';
            }

            echo 'あなたが選んだ☆は'.$hoshi[$mbango].'ですね？<br>';
            echo '<input type="button" onclick="history.back()" value="戻る">';
        ?>
    </body>
</html>