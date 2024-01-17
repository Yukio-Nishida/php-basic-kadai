<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>テストの平均点を計算しよう</title>
</head>
<body>
    <p>
    <?php

    //生徒10人のスコアを変数score_1～10に表示
    $score_1 = 80;

    $score_2 = 60;

    $score_3 = 55;

    $score_4 = 40;

    $score_5 = 100;

    $score_6 = 25;

    $score_7 = 80;

    $score_8 = 95;

    $score_9 = 30;

    $score_10 = 60;
    
    //生徒10人全員分の合計得点を変数score_allに代入
    $score_all = $score_1 + $score_2 + $score_3 + $score_4 + $score_5 + $score_6 + $score_7 + $score_8 + $score_9 + $score_10;

    //生徒10人全員分の平均得点を変数score_averageに代入
    $score_average = $score_all / 10;

    //平均得点をブラウザに出力
    echo "平均得点は" .$score_average ."です。";
    ?>
    
</p>

        </body>

 </html>