<?php
session_start();
?>

<!DOCTYPE html>
<html lang="ja">
        <head>
            <meta charset="UTF-8">
            <title>社員情報入力フォーム</title>
        </head>
        <body>
            <h2>登録が完了しました。</h2>
            <p>社員情報がデータベースに保存されました。</p>

            <button id="return-btn" onclick="location.href='form.php';">戻る</button>

            <?php
            // セッション変数を初期化
            $_SESSION = array();
            
            // セッションを終了
            session_destroy();
            ?>

        </body>
    </html>