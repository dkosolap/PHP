#!/usr/bin/php
<?PHP
    $file = file_get_contents($argv[1]);
    preg_match_all('/<a.*?>([.\s\S]*?)<\/a>/', $file, $res);
    foreach ($res[1] as $key => $value) {
        $file = str_replace($value, strtoupper($value), $file);
    }
    $res = NULL;
    preg_match_all('/<(.*?)>/', $file, $res);
    foreach ($res[1] as $key => $value) {
        $file = str_replace($value, strtolower($value), $file);
    }
    $res = NULL;
    preg_match_all('/title="(.*?)"/', $file, $res);
    foreach ($res[1] as $key => $value) {
        $file = str_replace($value, strtoupper($value), $file);
    }
    echo "$file";
?>
