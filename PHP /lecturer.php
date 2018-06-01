
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php

$q = $_GET['q'];
$user="root";
  $pass="";
  $db= "mydata";
  $connection= mysql_connect('localhost', $user, $pass) or die("could not connect");
  mysql_select_db($db, $connection) or die("no database");


$result = mysql_query("SELECT * FROM register WHERE timeslot = '$q'", $connection);

echo "<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>StudentId</th>
<th>Email</th>
<th>Timeslot</th>
</tr>";
while($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
    echo "<tr>";
    echo "<td>" . $row['firstname'] . "</td>";
    echo "<td>" . $row['lastname'] . "</td>";
    echo "<td>" . $row['studentid'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    echo "<td>" . $row['timeslot'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysql_close($connection);
?>
</body>
</html>
