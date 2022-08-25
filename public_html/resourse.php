<?php
error_reporting(0);
include_once 'Login/gpConfig.php';
include_once 'Login/User.php';
$data = $_SESSION['userData'];
$em=$data['email'];
?>
<!DOCTYPE html>
<html lang="en" >
<head>
    <style>
     input.largerCheckbox {
            width: 30px;
            height: 30px;
            background-color: black;
        }
.container1 {
  position: relative;
  padding-top:30px;
  width: 250%;
  max-width: 400px;
}

.container1 img {
  width: 100%;
  margin-left:10mm;
  height: auto;
  filter: blur(8px);
}

.container1 .btn1 {
  position: absolute;
  top: 40%;
  left: 180%;
  width:700px;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: #5DADE2;
  color: white;
  font-size: 20px;
  padding: 16px 30px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
}

.container1 .btn1:hover {
  background-color: #2E4053;
  color: white;
}

</style>
       <style>
       .disclaimer{
           display:none;
       }
   </style>
  <meta charset="UTF-8">
  <title>Coding Snippets</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css'><link rel="stylesheet" href="./style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>
<body style="background-color:#e8eff5">
<!-- partial:index.partial.html -->
<div id="preloader">
        <div class="classy-load"></div>
    </div>

<header style="background-color: #04abec;" class="header_area">
  <div  class="main_header_area animated">
    <div  class="container">
      <nav style="background-color: #04abec;" id="navigation1" class="navigation">
        <!-- Logo Area Start -->
        <div class="nav-header">
          <a style="color: rgb(0, 0, 0);font-size: 25px; " class="nav-brand" href="index.php">Coding Snippets</a> 
          <div class="nav-toggle"></div>
        </div>
      
        <!-- Main Menus Wrapper -->
        <div class="nav-menus-wrapper">
          <ul class="nav-menu align-to-right">
            <!-- <li><a style="color: black;font-size: 17px;" href="index.php">Home</a></li> -->

            <li ><a style="color: black; font-size: 17px;"  href="#">Coding Templates</a>
              <div class="megamenu-panel">
                <div class="megamenu-lists">
                  <ul  class="megamenu-list list-col-4">
                    <li><a  style="font-size: 15px;" href='snippets/index.php?id=All Divisors'>All Divisors</a></li>
                    <li><a style="font-size: 15px;"href='snippets/index.php?id=Anagram'>Anagram</a></li>
                    <li><a style="font-size: 15px;"href='snippets/index.php?id=Binary Exponentiation'>Binary Exponentiation</a></li>
                    <li><a style="font-size: 15px;"href='snippets/index.php?id=Count Digits'>Count Digits</a></li>
                    <li><a style="font-size: 15px;"href='snippets/index.php?id=Count Set Bits O(1)'>Count Set Bits O(1)</a></li>
                    <li><a style="font-size: 15px;"href='snippets/index.php?id=Count Set Bits O(logn)'>Count Set Bits O(logn)</a></li>
                    <li><a style="font-size: 15px;"href='snippets/index.php?id=GCD'>GCD</a></li>
                  </ul>
                  <ul class="megamenu-list list-col-4">
                    <li><a style="font-size: 15px;"href='snippets/index.php?id=IsPrime'>IsPrime</a></li>
                    <li><a style="font-size: 15px;"href='snippets/index.php?id=Kadane'>Kadane</a></li>
                    <li><a style="font-size: 15px;"href='snippets/index.php?id=KMP'>KMP</a></li>
                    <li><a style="font-size: 15px;"href='snippets/index.php?id=Longest Common Subsequence'>Longest Common Subsequence</a></li>
                    <li><a style="font-size: 15px;"href='snippets/index.php?id=Longest Increasing subsequence'>Longest Increasing subsequence</a></li>
                    <li><a style="font-size: 15px;"href='snippets/index.php?id=Max Circular Subarray Sum'>Max Circular Subarray Sum</a></li>
                  </ul>
                  <ul class="megamenu-list list-col-4">
                    <li><a style="font-size: 15px;"href='snippets/index.php?id=Palindrome Number'>Palindrome Number</a></li>
                    <li><a style="font-size: 15px;"href='snippets/index.php?id=Palindrome'>Palindrome</a></li>
                    <li><a style="font-size: 15px;"href='snippets/index.php?id=Prime Factors'>Prime Factors</a></li>
                    <li><a style="font-size: 15px;"href='snippets/index.php?id=Rabin Karp'>Rabin Karp</a></li>
                    <li><a style="font-size: 15px;"href='snippets/index.php?id=Segment Tree'>Segment Tree</a></li>
                    <li><a style="font-size: 15px;"href='snippets/index.php?id=Sieve'>Sieve</a></li>
                  </ul>
                  <ul class="megamenu-list list-col-4">
                    <li><a style="font-size: 15px;"href='snippets/index.php?id=Square root'>Square root</a></li>
                    <li><a style="font-size: 15px;"href='snippets/index.php?id=Transpose of Matrix'>Transpose of Matrix</a></li>
                    <li><a style="font-size: 15px;"href='snippets/index.php?id=Trie'>Trie</a></li>
                    <li><a style="font-size: 15px;"href='snippets/index.php?id=Union Find'>Union Find</a></li>
                    <li><a style="font-size: 15px;"href='snippets/index.php?id=Union Find(Path Compression)'>Union Find(Path Compression)</a></li>
                    <li><a style="font-size: 15px;"href='snippets/index.php?id=Union Find(Union by rank)'>Union Find(Union by rank)</a></li>
                  </ul>
                </div>
              </div>
            </li>


            <li ><a style="color: black; font-size: 17px;"  href="#">Resourses and Roadmaps</a>
              <div class="megamenu-panel">
                <div class="megamenu-lists">
                  <ul  class="megamenu-list list-col-4">
                    <li><a style="font-size: 15px;" href='resourse.php?id=introduction'>Introduction</a></li>
                    <li><a style="font-size: 15px;" href='resourse.php?id=mathematics'>Mathematics</a></li>
                      <li><a style="font-size: 15px;" href='resourse.php?id=bit'>Bit Magic</a></li>
                      <li><a style="font-size: 15px;" href='resourse.php?id=array'>Array</a></li>
                      <li><a style="font-size: 15px;" href='resourse.php?id=recursion'>Recursion</a></li>
                      <li><a style="font-size: 15px;" href='resourse.php?id=searching'>Searching</a></li>
                  </ul>
                  <ul class="megamenu-list list-col-4">
                    <li><a style="font-size: 15px;" href='resourse.php?id=sorting'>Sorting</a></li>
                    <li><a style="font-size: 15px;" href='resourse.php?id=matrix'>Matrix</a></li>
                    <li><a style="font-size: 15px;" href='resourse.php?id=hashing'>Hashing</a></li>
                    <li><a style="font-size: 15px; "href='resourse.php?id=strings'>Strings</a></li>
                    <li><a style="font-size: 15px;" href='resourse.php?id=linked_list'>Linked List	</a></li>
                    <li><a style="font-size: 15px;" href='resourse.php?id=stack'>Stack</a></li>
                  </ul>
                  <ul class="megamenu-list list-col-4">
                    <li><a style="font-size: 15px;" href='resourse.php?id=queue'>Queue</a></li>
                    <li><a style="font-size: 15px;" href='resourse.php?id=deque'>Deque</a></li>
                    <li><a style="font-size: 15px;" href='resourse.php?id=tree'>Tree</a></li>
                    <li><a style="font-size: 15px;" href='resourse.php?id=binary_search_tree'>Binary Search Tree</a></li>
                    <li><a style="font-size: 15px;" href='resourse.php?id=heap'>Heap</a></li>
                      <li><a style="font-size: 15px;" href='resourse.php?id=graph'>Graph</a></li>
                  </ul>
                  <ul class="megamenu-list list-col-4">
                    <li><a style="font-size: 15px;" href='resourse.php?id=Greedy'>Greedy Approach</a></li>
                    <li><a style="font-size: 15px;" href='resourse.php?id=backtracking'>Backtracking</a></li>
                    <li><a style="font-size: 15px;" href='resourse.php?id=dynamic_programming'>Dynamic Programming</a></li>
                    <li><a style="font-size: 15px;" href='resourse.php?id=Trie'>Trie</a></li>
                    <li><a style="font-size: 15px;" href='resourse.php?id=segment_and_binary_indexed_trees'>Segment and BI Trees	</a></li>
                    <li><a style="font-size: 15px;" href='resourse.php?id=disjoint_set'>Disjoint Set</a></li>
                  </ul>
                </div>
              </div>
            </li>

           
            
            

            <li><a style="color: black; font-size: 17px;" href="#">Learn C++</a>
              <ul class="nav-dropdown">
                

                <li><a style="font-size: 15px;"href="https://youtu.be/1v_4dL8l8pQ" target="_blank">Just Enough</a></li>
                <li><a style="font-size: 15px;"href="https://youtube.com/playlist?list=PLlrATfBNZ98dudnM48yfGUldqGD0S4FFb" target="_blank">In depth</a></li>
              </ul>
            </li>

            <li><a style="color: black; font-size: 17px;" href="#">Learn C++ STL</a>
              <ul class="nav-dropdown">
                

                <li><a style="font-size: 15px;"href="https://youtu.be/zBhVZzi5RdU" target="_blank">Video</a></li>
                <li><a style="font-size: 15px;"href="https://www.geeksforgeeks.org/c-magicians-stl-algorithms/" target="_blank">Article</a></li>
              </ul>
            </li>
            
             <?php
          if(!$_SESSION['userData']){
              echo '<li><a style="color: white; font-size: 17px;" href="/signin.php">Sign In ▶</a></li>';
               }
            else
            {
                $data = $_SESSION['userData'];
                echo '<li><img style="border-radius:50%; height:9mm" src='.$data["picture"].'><a style="color: black; font-size: 16px;" href="#">'.$data["first_name"].'</a>
              <ul class="nav-dropdown">
                

                <li><a style="font-size: 15px;"href="/Login/logout.php" >Logout</a></li>
                <li><a style="font-size: 15px;"href="feedback.html" >Feedback</a></li>

              </ul>
            </li>';
            }
            ?>
            
            
            
          </ul>
        </div>
      </nav>
    </div>
  </div>
</header>
<br>




<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js'></script><script  src="./script.js"></script>





<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;<?
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>


  <script src="nav.js"></script>
<?php 
if(!$_SESSION['userData']){
    echo'
   <div class="container1">
  <img src="/assets/img/roadmap.png" alt="Snow" style="width:300%">
  <a href="/signin.php"><button class="btn1">🔓 Sign In to access Resource and Roadmap</button></a>
</div>';
}
else{

    
    //===========================================================================================================================================CONTENT DISPALAY
$tp= $_GET['id']; 
$tp1 = strtoupper($tp);
$tp2 = str_replace('_', ' ', $tp1);

  echo ' <div style="height: 15px; background-color: white"></div>
  <header style="color: #04abec; height: 60px; background-color: #303F4A;     
    text-align:center; " >
    <h3 style="   text-align: center;   padding-top: 10px;
    vertical-align:middle;">'.$tp2.'</h1>
  </header> <br>';  //HEADING OF PRO TOPIC

$conn =mysqli_connect("localhost","id18031980_root","o1W3E(Vi}TERSH","id18031980_cs");
//========================================================================================================================================//progress bar


       //==================================CHECK BOX 
       
       
     $conn =mysqli_connect("localhost","id18707146_id18031980_root","codingSnipets_123","id18707146_id18031980_cs");

if ($conn-> connect_error)
        {
            die("Connection Failed". $con-> connect_error);
        }

$sql2 = "SELECT $tp FROM users WHERE email='$em'";

    $result2 = $conn -> query($sql2);
    if($result2==0)
    {
        echo "hhh";
    }

    $row=NULL;
while($row = $result2-> fetch_assoc())
{
    $topic = $row["$tp"];
}

    if($topic==0)
    {
        echo '
        <div style="text-align:center;vertical-align:middle;">
        <form method="post" action="">

        <label for="allow_access">

            <input type="hidden" name="allow_access" value="0">

            <input style="height=10px" class="largerCheckbox" type="checkbox" name="allow_access" value="1" id="allow_access">  Click here if resource is 

        </label>
        
        <button type="submit" name="SubmitButton" onclick = "locationreload1()">Completed</button>

    </form></div><br>';
     
if(isset($_POST['SubmitButton']))
  {
    
    $input = $_POST['allow_access']; //get input text
    $a=$_POST['allow_access'];

    
    $up1 = "UPDATE users SET $tp=$tp+1 WHERE email='$em'";
    $res1 = $conn -> query($up1);


    $up2 = "UPDATE users SET total=total+1 WHERE email='$em'";
    $res2 = $conn -> query($up2);
    // $_POST['SubmitButton']=NULL;


 };

    }
    else
    {
       echo '<div style="background-color:#001a33;color:WHITE;text-align:center;font-size:23px">
  <b>✔ You Completed This Resource!</b>
</div><br>';
    }


      
      
      //MAin CONTENT
      
$sql = "SELECT * FROM $tp ";
        
$result = $conn -> query($sql);


while($row = $result-> fetch_assoc())
{
    $name = $row['name'];
    $eng = $row['english'];
    $prac = $row['practice'];
    $blog = $row['blog'];

if($name!=NULL)
    {

echo '
<button class="accordion">'.$name.'</button>
<div class="panel">
';

    }

if($eng!=NULL)
    {
echo'
<h1>Video :</h1>
<iframe width="560" height="315" src="'.$eng.'" 
title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> <br><br>
';
    }

    if($prac!=NULL)
    {
echo'
<style>
.btnStack {
  font-family: Oswald;
  background-color: orange;
  color: white;
  text-decoration: none;
  display: inline-block;
  padding: 6px 12px;
  margin-bottom: 0;
  font-size: 14px;
  font-weight: normal;
  line-height: 1.428571429;
  text-align: center;
  white-space: nowrap;
  vertical-align: middle;
  cursor: pointer;
  border: 1px solid transparent;
  border-radius: 4px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  -o-user-select: none;
  user-select: none;
}

a.btnStack:hover {
  background-color: #000;
}
</style>



<a href="'.$prac.'" class="btnStack" target="_blank">Practice Question</a>
';
    }
   

    if($blog!=NULL)
    {
      echo'

      <style>
            .btnStack {
            font-family: Oswald;
            background-color: orange;
            color: white;
            text-decoration: none;
            display: inline-block;
            padding: 6px 12px;
            margin-bottom: 0;
            font-size: 14px;
            font-weight: normal;
            line-height: 1.428571429;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            cursor: pointer;
            border: 1px solid transparent;
            border-radius: 4px;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            -o-user-select: none;
            user-select: none;
}

            a.btnStack:hover {
              background-color: #000;
            }
  </style>


      <a href="'.$blog.'" class="btnStack" target="_blank">Article</a>

 
';
    }
    

    
    
   echo '</div>  <br> ';
  
    

  };



ECHO '<style>
.accordion {
  background-color: #eee;
  color: #444;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  transition: 0.4s;
}

.active, .accordion:hover {
  background-color: #ccc;
}

.accordion:after {
  content: \'\002B\';
  color: #777;
  font-weight: bold;
  float: right;
  margin-left: 5px;
}

.active:after {
  content: "\2212";
}

.panel {
  padding: 0 18px;
  background-color: white;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
}
</style>
<body>

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>
';
}

?>

</body>
</html>
