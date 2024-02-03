<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>PHP基礎編</title>
</head>

<body>
    <?php
    // 連想配列$food_dataを制定
    $food_data = ['商品名' => '玉ねぎ', '価格' => '200', '生産地' => '北海道'];

    // 連想配列$food_dataのキーと値を1つずつ順番に出力する
    foreach($food_data as $key => $value) {
        echo "{$key}:{$value}<br>";
    }
    ?>
    
</body>

 </html>