<?php
$user="root";
  $pass="";
  $db= "mydata";
  $connection= mysql_connect('localhost', $user, $pass) or die("could not connect");
  mysql_select_db($db, $connection) or die("no database");

  $data= $_POST['id'];

  $sql=mysql_query("delete from register where studentid= '$data'");

?>
<script type="text/javascript">location.href = 'RegisterMainPage.php';</script>