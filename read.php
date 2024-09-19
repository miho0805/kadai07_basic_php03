<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>データ表示</title>
</head>
<body>
    <h1>送信されたデータ一覧</h1>
    <?php
    // CSVファイルのパス
    $filePath = "data.csv";
    // ファイルが存在するか確認
    if (file_exists($filePath)) {
        // ファイルを開いてデータを読み込む
        if (($handle = fopen($filePath, "r")) !== FALSE) {
            echo '<table border="1">';
            echo '<tr><th>名前</th><th>Email</th><th>備考</th></tr>'; // テーブルのヘッダー
            // 行を一つずつ読み込む
            while (($data = fgetcsv($handle)) !== FALSE) {
                echo '<tr>';
                echo '<td>' . htmlspecialchars($data[0]) . '</td>';  // 名前
                echo '<td>' . htmlspecialchars($data[1]) . '</td>';  // Email
                echo '<td>' . htmlspecialchars($data[2]) . '</td>';  // 備考
                echo '</tr>';
            }
            echo '</table>';
            fclose($handle); // ファイルを閉じる
        } else {
            echo "<p>データの読み込み中にエラーが発生しました。</p>";
        }
    } else {
        echo "<p>データファイルが見つかりません。</p>";
    }
    ?>
    <a href="index.php">戻る</a>  <!-- 戻るリンク -->
</body>
</html>