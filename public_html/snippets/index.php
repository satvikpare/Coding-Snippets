<?php
include_once '../Login/gpConfig.php';
include_once '../Login/User.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
       <style>
       .disclaimer{
           display:none;
       }
   </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CODE</title>

    <link rel="stylesheet" href="monokai-sublime.min.css">
<script src="buffer\highlight.min.js"></script>


<script>hljs.highlightAll();</script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css'>
<link rel="stylesheet" href="style.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>
<body style="background-color:#e8eff5;">




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
          <a style="color: rgb(0, 0, 0);font-size: 25px; " class="nav-brand" href="https://codingsnippets.000webhostapp.com/index.php">Coding Snippets</a> 
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
                    <li><a style="font-size: 15px;"href='index.php?id=All Divisors'>All Divisors</a></li>
                    <li><a style="font-size: 15px;"href='index.php?id=Anagram'>Anagram</a></li>
                    <li><a style="font-size: 15px;"href='index.php?id=Binary Exponentiation'>Binary Exponentiation</a></li>
                    <li><a style="font-size: 15px;"href='index.php?id=Count Digits'>Count Digits</a></li>
                    <li><a style="font-size: 15px;"href='index.php?id=Count Set Bits O(1)'>Count Set Bits O(1)</a></li>
                    <li><a style="font-size: 15px;"href='index.php?id=Count Set Bits O(logn)'>Count Set Bits O(logn)</a></li>
                    <li><a style="font-size: 15px;"href='index.php?id=GCD'>GCD</a></li>
                  </ul>
                  <ul class="megamenu-list list-col-4">
                    <li><a style="font-size: 15px;"href='index.php?id=IsPrime'>IsPrime</a></li>
                    <li><a style="font-size: 15px;"href='index.php?id=Kadane'>Kadane</a></li>
                    <li><a style="font-size: 15px;"href='index.php?id=KMP'>KMP</a></li>
                    <li><a style="font-size: 15px;"href='index.php?id=Longest Common Subsequence'>Longest Common Subsequence</a></li>
                    <li><a style="font-size: 15px;"href='index.php?id=Longest Increasing subsequence'>Longest Increasing subsequence</a></li>
                    <li><a style="font-size: 15px;"href='index.php?id=Max Circular Subarray Sum'>Max Circular Subarray Sum</a></li>
                  </ul>
                  <ul class="megamenu-list list-col-4">
                    <li><a style="font-size: 15px;"href='index.php?id=Palindrome Number'>Palindrome Number</a></li>
                    <li><a style="font-size: 15px;"href='index.php?id=Palindrome'>Palindrome</a></li>
                    <li><a style="font-size: 15px;"href='index.php?id=Prime Factors'>Prime Factors</a></li>
                    <li><a style="font-size: 15px;"href='index.php?id=Rabin Karp'>Rabin Karp</a></li>
                    <li><a style="font-size: 15px;"href='index.php?id=Segment Tree'>Segment Tree</a></li>
                    <li><a style="font-size: 15px;"href='index.php?id=Sieve'>Sieve</a></li>
                  </ul>
                  <ul class="megamenu-list list-col-4">
                    <li><a style="font-size: 15px;"href='index.php?id=Square root'>Square root</a></li>
                    <li><a style="font-size: 15px;"href='index.php?id=Transpose of Matrix'>Transpose of Matrix</a></li>
                    <li><a style="font-size: 15px;"href='index.php?id=Trie'>Trie</a></li>
                    <li><a style="font-size: 15px;"href='index.php?id=Union Find'>Union Find</a></li>
                    <li><a style="font-size: 15px;"href='index.php?id=Union Find(Path Compression)'>Union Find(Path Compression)</a></li>
                    <li><a style="font-size: 15px;"href='index.php?id=Union Find(Union by rank)'>Union Find(Union by rank)</a></li>
                  </ul>
                </div>
              </div>
            </li>


            <li ><a style="color: black; font-size: 17px;"  href="#">Resourses and Roadmaps</a>
              <div class="megamenu-panel">
                <div class="megamenu-lists">
                  <ul  class="megamenu-list list-col-4">
                      <li><a style="font-size: 15px;" href='https://codingsnippets.000webhostapp.com/resourse.php?id=introduction'>Introduction</a></li>
                      <li><a style="font-size: 15px;" href='https://codingsnippets.000webhostapp.com/resourse.php?id=mathematics'>Mathematics</a></li>
                      <li><a style="font-size: 15px;" href='https://codingsnippets.000webhostapp.com/resourse.php?id=bit'>Bit Magic</a></li>
                      <li><a style="font-size: 15px;" href='https://codingsnippets.000webhostapp.com/resourse.php?id=array'>Array</a></li>
                      <li><a style="font-size: 15px;" href='https://codingsnippets.000webhostapp.com/resourse.php?id=recursion'>Recursion</a></li>
                      <li><a style="font-size: 15px;" href='https://codingsnippets.000webhostapp.com/resourse.php?id=searching'>searching</a></li>
                  </ul>
                  <ul class="megamenu-list list-col-4">
                    <li><a style="font-size: 15px;" href='https://codingsnippets.000webhostapp.com/resourse.php?id=sorting'>Sorting</a></li>
                    <li><a style="font-size: 15px;" href='https://codingsnippets.000webhostapp.com/resourse.php?id=satrix'>Matrix</a></li>
                    <li><a style="font-size: 15px;" href='https://codingsnippets.000webhostapp.com/resourse.php?id=hashing'>Hashing</a></li>
                    <li><a style="font-size: 15px; "href='https://codingsnippets.000webhostapp.com/resourse.php?id=strings'>Strings</a></li>
                    <li><a style="font-size: 15px;" href='https://codingsnippets.000webhostapp.com/resourse.php?id=linked_list'>Linked List	</a></li>
                    <li><a style="font-size: 15px;" href='https://codingsnippets.000webhostapp.com/resourse.php?id=stack'>Stack</a></li>
                  </ul>
                  <ul class="megamenu-list list-col-4">
                    <li><a style="font-size: 15px;" href='https://codingsnippets.000webhostapp.com/resourse.php?id=queue'>Queue</a></li>
                    <li><a style="font-size: 15px;" href='https://codingsnippets.000webhostapp.com/resourse.php?id=deque'>Deque</a></li>
                    <li><a style="font-size: 15px;" href='https://codingsnippets.000webhostapp.com/resourse.php?id=tree'>Tree</a></li>
                    <li><a style="font-size: 15px;" href='https://codingsnippets.000webhostapp.com/resourse.php?id=binary_search_tree'>Binary Search Tree</a></li>
                    <li><a style="font-size: 15px;" href='https://codingsnippets.000webhostapp.com/resourse.php?id=heap'>Heap</a></li>
                    <li><a style="font-size: 15px;" href='https://codingsnippets.000webhostapp.com/resourse.php?id=graph'>Graph</a></li>
                  </ul>
                  <ul class="megamenu-list list-col-4">
                    <li><a style="font-size: 15px;" href='https://codingsnippets.000webhostapp.com/resourse.php?id=greedy'>Greedy Approach</a></li>
                    <li><a style="font-size: 15px;" href='https://codingsnippets.000webhostapp.com/resourse.php?id=backtracking'>Backtracking</a></li>
                    <li><a style="font-size: 15px;" href='https://codingsnippets.000webhostapp.com/resourse.php?id=dynamic_programming'>Dynamic Programming</a></li>
                    <li><a style="font-size: 15px;" href='https://codingsnippets.000webhostapp.com/resourse.php?id=trie'>Trie</a></li>
                    <li><a style="font-size: 15px;" href='https://codingsnippets.000webhostapp.com/resourse.php?id=segment_and_binary_indexed_trees'>Segment and BI Trees	</a></li>
                    <li><a style="font-size: 15px;" href='https://codingsnippets.000webhostapp.com/resourse.php?id=disjoint_set'>Disjoint Set</a></li>
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
                            <li><a style="font-size: 15px;"href="https://codingsnippets.000webhostapp.com/feedback.html" >Feedback</a></li>

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
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js'></script><script  src="./script.js"></script>




<?php 


  $t= $_GET['id']; 


$conn =mysqli_connect("localhost","id18031980_root","o1W3E(Vi}TERSH","id18031980_cs");





        $query  =  "SELECT topic,code  FROM templates WHERE topic = '".$t."'";
        
$result = $conn -> query($query);




$row = mysqli_fetch_row($result);

echo ' <div style="height: 15px; background-color: #e8eff5"></div>
<header style="color: #04abec; height: 60px; background-color: #303F4A;     
  text-align:center; " >
  <h3 style="   text-align: center;   padding-top: 10px;
  vertical-align:middle;">'.$row[0].'</h1>
</header> <br>';

?>


     
    <pre>
<code id="p1" style="

  
  margin: auto;
    border: 3px transparent;
    font-size: 15px;
    position: relative;
   max-width: 60%;

   .tooltip {
  position: relative;
  display: inline-block;
}

.tooltip .tooltiptext {
  visibility: hidden;
  width: 140px;
  background-color: #555;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 5px;
  position: absolute;
  z-index: 1;
  bottom: 150%;
  left: 50%;
  margin-left: -75px;
  opacity: 0;
  transition: opacity 0.3s;
}

.tooltip .tooltiptext::after {
  content: '';
  position: absolute;
  top: 100%;
  left: 50%;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: #555 transparent transparent transparent;
}

.tooltip:hover .tooltiptext {
  visibility: visible;
  opacity: 1;
}

    "><?php echo $row[1]; ?>
    </code>
    </pre>
</body>
