<?php 
include_once 'Login/gpConfig.php';
include_once 'Login/User.php';

$data = $_SESSION['userData'];
echo $data['email'];
$em=$data['email'];
?>



<!DOCTYPE html>
<html>
<head>
    <title>Submitting checkboxes</title>
</head>
<body>

    <h1>Submitting checkboxes</h1>

    <form method="post" action="">

        <label for="allow_access">

            <input type="hidden" name="allow_access" value="0">

            <input type="checkbox" name="allow_access" value="1" id="allow_access"> allow access

        </label>
        
        <button type="submit" name="SubmitButton">Send</button>

    </form>



<?php



if(isset($_POST['SubmitButton']))

  {
      
      
      //check if form was submitted
    $input = $_POST['allow_access']; //get input text
    $a=$_POST['allow_access'];


$conn =mysqli_connect("localhost","id18707146_id18031980_root","codingSnipets_123","id18707146_id18031980_cs");

if ($conn-> connect_error)
        {
            die("Connection Failed". $con-> connect_error);
        }



$up2 = "UPDATE users SET total=total+1 WHERE email='$em'";
$res1 = $conn -> query($up2);

if (!$res1) {
  die("Connection Failed rest");
}

$sql1 = "SELECT total  FROM users WHERE email='$em'";
$result1 = $conn -> query($sql1);


$sql2 = "SELECT bit  FROM users WHERE email='$em'";
$result2 = $conn -> query($sql2);


if (!$result1) {
  die("Connection Failed 1🙄");
}

if (!$result2) {
  die("Connection Failed 2🙄");
}

$row=NULL;


while($row = $result1-> fetch_assoc())
{
    $total = $row['total'];



 };
 
  
if($total>=1)
{
    echo '<input checked type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
    <label  for="vehicle1"> I have a bike</label><br>';
}
if($total==0) 
{
   echo ' <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
    <label for="vehicle1"> I have a bike</label><br> ';
}
  }


?>
</body>
</html>