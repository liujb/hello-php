<?php
	$query = "select * from user;";
	$result = mysql_query($query);

	if(!$result){
		echo "Error";
	}else{
		echo "Success";
	}
?>
<br/>
<table border="1px">
        <tr>
            <th>id</th>
            <th>nikename</th>
            <th>email</th>
        </tr>
		<?php
		    while($row = mysql_fetch_row($result)){
		        echo "<tr>";
		        echo "<td>".$row[0]."</td>";
		        echo "<td>".$row[1]."</td>";
		        echo "<td>".$row[2]."</td>";
		        echo "</tr>";
		    }
		?>
    </table>
<?php
    mysql_close($conn);   
?>