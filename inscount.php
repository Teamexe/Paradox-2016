<?PHP

$hitslog = "inscount.txt";   
$hits = file($hitslog);
$hits = $hits[0] + 1;

$fp = fopen($hitslog, "w");
fwrite($fp, $hits);

?>
