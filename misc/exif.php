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

$exif = @exif_read_data($file_path);

if ($exif === false) {
    echo "No EXIF data found in the file: $file_path\n";
} else {
    print_r($exif);
}
