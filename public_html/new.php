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
    <style>
        </style>
    </style>
    <title>Submitting checkboxes</title>
    <script>
            function locationreload1() {
                location.reload();
                  
        }
        </script>
</head>
<body>

    <h1>Submitting checkboxes</h1>

    



<?php

$conn =mysqli_connect("localhost","id18707146_id18031980_root","codingSnipets_123","id18707146_id18031980_cs");

if ($conn-> connect_error)
        {
            die("Connection Failed". $con-> connect_error);
        }

$sql2 = "SELECT bit FROM users WHERE email='$em'";
    $result2 = $conn -> query($sql2);
 
    $row=NULL;

while($row = $result2-> fetch_assoc())
{
    $bit = $row['bit'];
}
echo $bit;
    if($bit==0)
    {
        echo '
        
        <form method="post" action="">

        <label for="allow_access">

            <input type="hidden" name="allow_access" value="0">

            <input type="checkbox" name="allow_access" value="1" id="allow_access"> allow access

        </label>
        
        <button type="submit" name="SubmitButton" onclick = "locationreload1()">Send</button>

    </form><br>';
     
if(isset($_POST['SubmitButton']))
  {
    
    $input = $_POST['allow_access']; //get input text
    $a=$_POST['allow_access'];

    
    $up1 = "UPDATE users SET bit=bit+1 WHERE email='$em'";
    $res1 = $conn -> query($up1);


    $up2 = "UPDATE users SET total=total+1 WHERE email='$em'";
    $res2 = $conn -> query($up2);
    // $_POST['SubmitButton']=NULL;


 };

    }
    else
    {
       echo 'Resource completed';
    }


?>
</body>
</html>