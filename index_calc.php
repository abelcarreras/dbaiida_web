<!DOCTYPE html>
<html>
<body>
<p>This is a test to check how <br>PHP works <strong>together</strong> with HTML</p>
<?php
echo "My first PHP script! Example script that just says this\n";
$conn=pg_pconnect("host=localhost user=aiida dbname=aiidadb");
if (!$conn) {
  echo "An error occurred.\n";
  exit;
}

$result = pg_query($conn, "SELECT id, uuid FROM db_dbnode");
if (!$result) {
  echo "An error occurred in querry.\n";
  exit;
}

echo "<table>";
while ($row = pg_fetch_row($result)) {

# SELECT *  FROM db_dbcalcstate  WHERE dbnode_id = '680'  
 $re_2 = pg_query($conn, "SELECT state FROM db_dbcalcstate WHERE dbnode_id=".$row[0]);
  $status = pg_fetch_row($re_2)[0];
  if ( $status == 'FINISHED') { 
  
#  echo "ID: $row[0]  UUID: $row[1]";
#  echo "<br />\n";
   echo "<tr><td><a href=details.php?uuid=$row[1]>$row[0]</a></td><td>$row[1]</td></tr>";
   }
}
echo "</table>";



echo "<br>final";

?>

</body>
</html>

