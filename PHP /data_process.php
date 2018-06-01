
<?php
$user="root";
  $pass="";
  $db= "mydata";
  $connection= mysql_connect('localhost', $user, $pass) or die("could not connect");
  mysql_select_db($db, $connection) or die("no database");

  $ts1=$ts2= $ts3= $ts4='';

  $result= mysql_query("SELECT * FROM register where timeslot='Monday 15:00-17:00' ");
  $num= mysql_num_rows($result);
     $ts1=8-$num;
  $result= mysql_query("SELECT * FROM register where timeslot='Tuesday 14:00-16:00' ");
  $num= mysql_num_rows($result);
    $ts2=8-$num;
  $result= mysql_query("SELECT * FROM register where timeslot='Thusday 11:00-13:00' ");
  $num= mysql_num_rows($result);
     $ts3=8-$num;
  $result= mysql_query("SELECT * FROM register where timeslot='Friday 10:00-12:00' ");
  $num= mysql_num_rows($result);
     $ts4=8-$num;

	if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['studentid']) && isset($_POST['email']) && isset($_POST['timeslot'])){
		$firstname= $_POST['firstname'];
		$lastname= $_POST['lastname'];
		$studentid= $_POST['studentid'];
		$email= $_POST['email'];
		$timeslot=$_POST['timeslot'];
	
		if(!empty($firstname) && !empty($lastname) && !empty($studentid) &&  !empty($email)){

			$check_query= mysql_query("SELECT firstname from register where studentid='$studentid' ", $connection);
			$num_rows= mysql_num_rows($check_query);
			mysql_free_result($check_query);


			if($num_rows == 0){
				if($timeslot=='Monday 15:00-17:00' && $ts1==0){echo 'seats are full for 1st timeslot'; }
				elseif($timeslot=='Tuesday 14:00-16:00' && $ts2==0){ echo 'seats are full for 2nd timeslot';}
				elseif($timeslot=='Thusday 11:00-13:00' && $ts3==0){ echo 'seats are full for 3rd time slot.';}
				elseif($timeslot=='Friday 10:00-12:00' && $ts4==0){ echo 'seats are full for 4th timeslot'; }
				else{
					$sql="insert into register (firstname, lastname, studentid, email, timeslot ) values ('$firstname', '$lastname', '$studentid', '$email', '$timeslot')";
					$result= mysql_query($sql);
					 echo $status= 'data inserted successfully';
					
				}
				?>
				<input action="action" onclick="window.history.go(-1); return false;" type="button" value="Back" class="edit"/>

				<?php
			}
			else{
				?>
				<p>Already registered</p>
				<p>Do you want to delete old record and Register again?</p>
				<br>
				<form action="deleteData.php" method="post"> 
				<button type="submit" name="data" value="dvalue">Delete data </button>
          		<input type="hidden" name="id" value="<?php echo $studentid; ?>">

				<input action="action" onclick="window.history.go(-1); return false;" type="button" value="Back" class="edit" />
        		</form>
				<?php
				
			}
		}
		
		else{
			echo $status= "all field are required";
			?>
				<input action="action" onclick="window.history.go(-1); return false;" type="button" value="Back" class="edit" />

				<?php
		}
	}
?>




