<!DOCTYPE html>
<html>
<body>
<p>First approach to list workflows of AiiDA<br>database with status <strong>FINISHED</strong> using HTML</p>
<?php
echo "Starting PHP script\n";
$conn=pg_pconnect("host=localhost user=aiida dbname=aiidadb");
if (!$conn) {
  echo "An error occurred.\n";
  exit;
}

$result = pg_query($conn, "SELECT id, uuid, label FROM db_dbworkflow WHERE state = 'FINISHED'");
if (!$result) {
  echo "An error occurred in querry.\n";
  exit;
}
echo "<table>";
while ($row = pg_fetch_row($result)) {

# SELECT *  FROM db_dbcalcstate  WHERE dbnode_id = '680'  
  
#  echo "ID: $row[0]  UUID: $row[1]";
#  echo "<br />\n";
   echo "<tr><td><a href=details.php?uuid=$row[1]>$row[0]</a></td><td>$row[1] - $row[2]</td></tr>";
}
echo "</table>";



echo "<br>final";

?>

</body>
</html>

