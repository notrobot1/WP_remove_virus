<?php
$rootpath = '.';
$fileinfos = new RecursiveIteratorIterator(
    new RecursiveDirectoryIterator($rootpath)
);
foreach($fileinfos as $pathname => $fileinfo) {
    if (!$fileinfo->isFile()) continue;
    $pos1 = stripos($pathname, ".php");
    if ($pos1 !== false) {
    $section = file_get_contents($pathname, FALSE, NULL, 0, 600);
    echo($pathname."\n");
    echo($section."\n");
    }
}


?>
