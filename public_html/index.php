<?php
error_reporting(0);
include_once 'Login/gpConfig.php';
include_once 'Login/User.php';
$data = $_SESSION['userData'];

?>
       <html lang='en' >
<head>
  <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
   <style>
       .disclaimer{
           display:none;
       }
   </style>
   
   <style type='text/css'>
h1{font-family:Arial, Helvetica, sans-serif;color:#999999;}
</style>
   
   
  <title>Coding Snippets</title>
  <link rel='stylesheet' href='st.css'> <!-- To link your CSS to HTML bruh -->

  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css'>
<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css'><link rel='stylesheet' href='./style.css'>
<script src='https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js'></script>
<style>
#left {    
 text-align: right;  
 }  
 </style>
</head>
<body style='background-color:white;'>

<!-- partial:index.partial.html -->
<div id='preloader'>
        <div class='classy-load'></div>
    </div>

<header style='background-color: #87CEEB;' class='header_area'>
  <div  class='main_header_area animated'>
    <div  class='container'>
      <nav style='background-color: #87CEEB;' id='navigation1' class='navigation'>
        <!-- Logo Area Start -->
        <div class='nav-header'>
          <a style='color: rgb(0, 0, 0);font-size: 30px; ' class='nav-brand' href='#'>Coding Snippets</a> 
          <div class='nav-toggle'></div>
        </div>
      
        <!-- Main Menus Wrapper -->
        <div class='nav-menus-wrapper'>
          <ul class='nav-menu align-to-right'>
            <!-- <li><a style='color: black;font-size: 16px;' href='index.php'>Home</a></li> -->

            <li ><a style='color: black; font-size: 16px;'  href='#'>Templates</a>
              <div class='megamenu-panel'>
                <div class='megamenu-lists'>
                  <ul  class='megamenu-list list-col-4'>
                    <li><a style='font-size: 15px;'href='snippets/index.php?id=All Divisors'>All Divisors</a></li>
                    <li><a style='font-size: 15px;'href='snippets/index.php?id=Anagram'>Anagram</a></li>
                    <li><a style='font-size: 15px;'href='snippets/index.php?id=Binary Exponentiation'>Binary Exponentiation</a></li>
                    <li><a style='font-size: 15px;'href='snippets/index.php?id=Count Digits'>Count Digits</a></li>
                    <li><a style='font-size: 15px;'href='snippets/index.php?id=Count Set Bits O(1)'>Count Set Bits O(1)</a></li>
                    <li><a style='font-size: 15px;'href='snippets/index.php?id=Count Set Bits O(logn)'>Count Set Bits O(logn)</a></li>
                    <li><a style='font-size: 15px;'href='snippets/index.php?id=GCD'>GCD</a></li>
                  </ul>
                  <ul class='megamenu-list list-col-4'>
                    <li><a style='font-size: 15px;'href='snippets/index.php?id=IsPrime'>IsPrime</a></li>
                    <li><a style='font-size: 15px;'href='snippets/index.php?id=Kadane'>Kadane</a></li>
                    <li><a style='font-size: 15px;'href='snippets/index.php?id=KMP'>KMP</a></li>
                    <li><a style='font-size: 15px;'href='snippets/index.php?id=Longest Common Subsequence'>Longest Common Subsequence</a></li>
                    <li><a style='font-size: 15px;'href='snippets/index.php?id=Longest Increasing subsequence'>Longest Increasing subsequence</a></li>
                    <li><a style='font-size: 15px;'href='snippets/index.php?id=Max Circular Subarray Sum'>Max Circular Subarray Sum</a></li>
                  </ul>
                  <ul class='megamenu-list list-col-4'>
                    <li><a style='font-size: 15px;'href='snippets/index.php?id=Palindrome Number'>Palindrome Number</a></li>
                    <li><a style='font-size: 15px;'href='snippets/index.php?id=Palindrome'>Palindrome</a></li>
                    <li><a style='font-size: 15px;'href='snippets/index.php?id=Prime Factors'>Prime Factors</a></li>
                    <li><a style='font-size: 15px;'href='snippets/index.php?id=Rabin Karp'>Rabin Karp</a></li>
                    <li><a style='font-size: 15px;'href='snippets/index.php?id=Segment Tree'>Segment Tree</a></li>
                    <li><a style='font-size: 15px;'href='snippets/index.php?id=Sieve'>Sieve</a></li>
                  </ul>
                  <ul class='megamenu-list list-col-4'>
                    <li><a style='font-size: 15px;'href='snippets/index.php?id=Square root'>Square root</a></li>
                    <li><a style='font-size: 15px;'href='snippets/index.php?id=Transpose of Matrix'>Transpose of Matrix</a></li>
                    <li><a style='font-size: 15px;'href='snippets/index.php?id=Trie'>Trie</a></li>
                    <li><a style='font-size: 15px;'href='snippets/index.php?id=Union Find'>Union Find</a></li>
                    <li><a style='font-size: 15px;'href='snippets/index.php?id=Union Find(Path Compression)'>Union Find(Path Compression)</a></li>
                    <li><a style='font-size: 15px;'href='snippets/index.php?id=Union Find(Union by rank)'>Union Find(Union by rank)</a></li>
                  </ul>
                </div>
              </div>
            </li>



            <li ><a style='color: black; font-size: 16px;'  href='#'>Resourses and Roadmaps</a>
              <div class='megamenu-panel'>
                <div class='megamenu-lists'>
                  <ul  class='megamenu-list list-col-4'>
                    <li><a style='font-size: 15px;' href='resourse.php?id=introduction'>Introduction</a></li>
                    <li><a style='font-size: 15px;' href='resourse.php?id=mathematics'>Mathematics</a></li>
                      <li><a style='font-size: 15px;' href='resourse.php?id=bit'>Bit Magic</a></li>
                      <li><a style='font-size: 15px;' href='resourse.php?id=array'>Array</a></li>
                      <li><a style='font-size: 15px;' href='resourse.php?id=recursion'>Recursion</a></li>
                      <li><a style='font-size: 15px;' href='resourse.php?id=searching'>Searching</a></li>
                  </ul>
                  <ul class='megamenu-list list-col-4'>
                    <li><a style='font-size: 15px;' href='resourse.php?id=sorting'>Sorting</a></li>
                    <li><a style='font-size: 15px;' href='resourse.php?id=matrix'>Matrix</a></li>
                    <li><a style='font-size: 15px;' href='resourse.php?id=hashing'>Hashing</a></li>
                    <li><a style='font-size: 15px; 'href='resourse.php?id=strings'>Strings</a></li>
                    <li><a style='font-size: 15px;' href='resourse.php?id=linked_list'>Linked List	</a></li>
                    <li><a style='font-size: 15px;' href='resourse.php?id=stack'>Stack</a></li>
                  </ul>
                  <ul class='megamenu-list list-col-4'>
                    <li><a style='font-size: 15px;' href='resourse.php?id=queue'>Queue</a></li>
                    <li><a style='font-size: 15px;' href='resourse.php?id=deque'>Deque</a></li>
                    <li><a style='font-size: 15px;' href='resourse.php?id=tree'>Tree</a></li>
                    <li><a style='font-size: 15px;' href='resourse.php?id=binary_search_tree'>Binary Search Tree</a></li>
                    <li><a style='font-size: 15px;' href='resourse.php?id=heap'>Heap</a></li>
                      <li><a style='font-size: 15px;' href='resourse.php?id=graph'>Graph</a></li>
                  </ul>
                  <ul class='megamenu-list list-col-4'>
                    <li><a style='font-size: 15px;' href='resourse.php?id=Greedy'>Greedy Approach</a></li>
                    <li><a style='font-size: 15px;' href='resourse.php?id=backtracking'>Backtracking</a></li>
                    <li><a style='font-size: 15px;' href='resourse.php?id=dynamic_programming'>Dynamic Programming</a></li>
                    <li><a style='font-size: 15px;' href='resourse.php?id=Trie'>Trie</a></li>
                    <li><a style='font-size: 15px;' href='resourse.php?id=segment_and_binary_indexed_trees'>Segment and BI Trees	</a></li>
                    <li><a style='font-size: 15px;' href='resourse.php?id=disjoint_set'>Disjoint Set</a></li>
                  </ul>
                </div>
              </div>
            </li>
           
            
            

            <li><a style='color: black; font-size: 16px;' href='#'>Learn C++</a>
              <ul class='nav-dropdown'>
                

                <li><a style='font-size: 15px;'href='https://youtu.be/1v_4dL8l8pQ' target='_blank'>Just Enough</a></li>
                <li><a style='font-size: 15px;'href='https://youtube.com/playlist?list=PLlrATfBNZ98dudnM48yfGUldqGD0S4FFb' target='_blank'>In depth</a></li>
              </ul>
            </li>

            <li><a style='color: black; font-size: 16px;' href='#'>Learn C++ STL</a>
              <ul class='nav-dropdown'>
                

                <li><a style='font-size: 15px;'href='https://youtu.be/zBhVZzi5RdU' target='_blank'>Video</a></li>
                <li><a style='font-size: 15px;'href='https://www.geeksforgeeks.org/c-magicians-stl-algorithms/' target='_blank'>Article</a></li>
              </ul>
            </li>
            
               <?php
               error_reporting(0);
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
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js'></script><script  src='./script.js'></script>

<br>
  <center>
      
      
  <div style='background-color; '>
      <div >  
    <a href='#'><img src='https://cdn.dribbble.com/users/1787323/screenshots/7123758/media/5c2b6b54ae3d5eabd56679e63ed83eaa.png?compress=1&resize=400x300' width='50%'  height='75%'></a>
     </div>

  <a href='progress.php'><input type='button' style=' width: 40%;background:  #04abec;color: #fff;' class='button' value='RESOURCES AND ROADMAP'></a>
  <br><br>
  <a href='template.html'><input type='button' class='button' style='  width: 40%; background:  #04abec; color: #fff;'   value='ALL TEMPLATES'></a>
    </div>
    
    
    
   
</center>
</body>


</html>







 
