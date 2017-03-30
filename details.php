<!DOCTYPE html>
<html>
<body>
<p>This is a test to check how <br>PHP works <strong>together</strong> with HTML</p>
<?php
echo "Details of database\n";

$uuid = $_GET['uuid'];
echo "<br>";
echo substr($uuid, 0, 2);
echo "<br>";
echo substr($uuid, 2, 2);
echo "<br>";
echo substr($uuid, 4);
echo "<br>";
$dbpath = '/home/abel/.aiida/repository-default/repository/node/';
$path = $dbpath . substr($uuid, 0, 2) . '/' . substr($uuid, 2, 2) . '/' . substr($uuid, 4);


$filename = trim($path . '/raw_input/POSCAR');
#$filename = 'INCAR';
echo "<br>".$filename."<br>";
$fh = fopen($filename ,'r');
while ($line = fgets($fh)) {
       echo $line;
       echo '<br>';
}
fclose($fh);
$file = 'bulk_modulus-temperature.pdf'
echo '<img src="', $dbpath, '/', $file, '" alt="', $file, '" />';

?>

</body>
</html>

