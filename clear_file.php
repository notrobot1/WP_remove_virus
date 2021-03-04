
<?php
function one($url){
echo $url. " ";
$section = file_get_contents($url);
if (strpos($section, 'chr(') !== false) {

echo("true");

//$pattern = '/<\?\php .*\}\?\>/';

$pattern = '/\<\?php[\s\S]+?\?\>/';
$new = preg_replace($pattern, "", $section);
//file_put_contents($url, $new);

}

}
$rootpath = '.';
$fileinfos = new RecursiveIteratorIterator(
    new RecursiveDirectoryIterator($rootpath)
);
foreach($fileinfos as $pathname => $fileinfo) {
    if (!$fileinfo->isFile()) continue;
    $pos1 = stripos($pathname, ".php");
    $pos2 = stripos($pathname, "wp-av.php");
    echo $pos1 ." ". $pos2;
    if ($pos1 !== false && $pos2 === false) {
       one($pathname);
    //$section = file_get_contents($pathname, FALSE, NULL, 0, 600);
    //echo($pathname."\n");
    //echo($section."\n");
    }
}


?>

