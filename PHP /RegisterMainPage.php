<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Registration</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="style.css">
      <script>
        function clearFunction(){
        document.getElementById("myForm").reset();
}
</script>

  
</head>

<body>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registration</title>
        <link rel="stylesheet" href="css/normalize.css">
        <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>

      <form action="data_process.php" method="post" id="myForm">
      
        <h1>Registeration</h1>
        
        <fieldset>
          <legend><span class="number">1</span>COMP207-choose a practical slot</legend>
          <label for="firstname">Firstname:</label>
          <input type="text" id="firstname" name="firstname">

          <label for="lastname">Lastname:</label>
          <input type="text" id="lastname" name="lastname">

          <label for="studentid">StudentId:</label>
          <input type="text" id="studentid" name="studentid">
          
          <label for="mail">Email:</label>
          <input type="email" id="mail" name="email">
          
          
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

    
?>
       
        
      
        <label for="timeslot">Select Time Slot:</label>
        <select id="timeslot" name="timeslot">
            <option value="Monday 15:00-17:00">Monday 15:00-17:00 <?php echo $ts1; ?> seats are available.</option>
            <option value="Tuesday 14:00-16:00">Tuesday 14:00-16:00 <?php echo $ts2; ?> seats are available.</option>
            <option value="Thusday 11:00-13:00">Thusday 11:00-13:00 <?php echo $ts3; ?> seats are available.</option>
            <option value="Friday 10:00-12:00"> Friday 10:00-12:00 <?php echo $ts4; ?> seats are available.</option>
            
          
        </select>
        
          
        
        </fieldset>
        <button type="submit">Register</button>
        <button type="button" onclick="clearFunction()"">Clear</button>


      </form>
      
    </body>
</html>
  
  
</body>
</html>


