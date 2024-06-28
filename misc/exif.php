<?php
declare (strict_types = 1);

if ($argc !== 2) {
    echo "Usage: php script.php <file_path>\n";
    exit(1);
}

$file_path = $argv[1];

if (!file_exists($file_path)) {
    echo "File not found: $file_path\n";
    exit(1);
}

// 開始時点のタイムスタンプを取得
$start_time = microtime(true);

$exif = @exif_read_data($file_path);

// 終了時点のタイムスタンプを取得
$end_time = microtime(true);

// 実行時間をミリ秒で計算
$execution_time_ms = ($end_time - $start_time) * 1000;

if ($exif === false) {
    echo "No EXIF data found in the file: $file_path\n";
} else {
    print_r($exif);
}

// 実行時間をミリ秒で出力
echo "Execution time: " . $execution_time_ms . " ms\n";
