<?php
// ディレクトリ名の範囲指定
$startChapter = 2;
$endChapter = 11;

// 指定されたディレクトリを作成
for ($i = $startChapter; $i <= $endChapter; $i++) {
    // ディレクトリ名をゼロ埋めで生成
    $dirName = "chapter" . str_pad($i, 2, '0', STR_PAD_LEFT);

    // ディレクトリが存在しない場合は作成
    if (!is_dir($dirName)) {
        mkdir($dirName);
        echo "ディレクトリ {$dirName} を作成しました。\n";
    } else {
        echo "ディレクトリ {$dirName} は既に存在します。\n";
    }
}