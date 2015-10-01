<?php
require ('mysql_class.php');
$select = $db->select("user", "");
$row = $db->rows($select);
if ($row >= 1) {
?>
<table border="1px">
    <tr>
        <th>id</th>
        <th>nikename</th>
        <th>email</th>
    </tr>
<?php
  while ($array = $db->myArray($select)) {
    echo "<tr>";
    echo "<td>" . $array['id'] . "</td>";
    echo "<td>" . $array['name'] . "</td>";
    echo "<td>" . $array['email'] . "</td>";
    echo "</tr>";
  }
?>
</table>

<?php
} 
else {
  echo "查不到任何数据!";
}
$db->dbClose();
?>