<?php
//Include GP config file && User class
include_once 'Login/gpConfig.php';
include_once 'Login/User.php';

if(isset($_GET['code'])){
	$gClient->authenticate($_GET['code']);
	$_SESSION['token'] = $gClient->getAccessToken();
	header('Location: ' . filter_var($redirectURL, FILTER_SANITIZE_URL));
}

if (isset($_SESSION['token'])) {
	$gClient->setAccessToken($_SESSION['token']);
}

if ($gClient->getAccessToken()) {
	//Get user profile data from google
	$gpUserProfile = $google_oauthV2->userinfo->get();
	
	//Initialize User class
	$user = new User();
	
	//Insert or update user data to the database
    $gpUserData = array(
        'oauth_provider'=> 'google',
        'oauth_uid'     => $gpUserProfile['id'],
        'first_name'    => $gpUserProfile['given_name'],
        'last_name'     => $gpUserProfile['family_name'],
        'email'         => $gpUserProfile['email'],
        'locale'        => $gpUserProfile['locale'],
        'picture'       => $gpUserProfile['picture'],
    );
    $userData = $user->checkUser($gpUserData);
	
	//Storing user data into session
	$_SESSION['userData'] = $userData;
	$_SESSION['name'] = "rachit";
	$data = $userData;
	//Render facebook profile data
    if(!empty($userData)){
       
       echo "
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
            
              <li><img style='border-radius:50%; height:9mm' src=".$data['picture']."><a style='color: black; font-size: 16px;' href='#'>".$data['first_name']."</a>
              <ul class='nav-dropdown'>
                

                <li><a style='font-size: 15px;'href='/Login/logout.php' >Logout</a></li>
                <li><a style='font-size: 15px;'href='feedback.html' >Feedback</a></li>

              </ul>
            </li>
            
             
            
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
";
    }else{
        $output = '<h3 style="color:red">Some problem occurred, please try again.</h3>';
    }
} else {
	$authUrl = $gClient->createAuthUrl();
	$output = '<a  href="'.filter_var($authUrl, FILTER_SANITIZE_URL).'"><img style=" height: 90px;
  width: auto; ;" src="/Login/images/google-signin.png" alt=""/></a>';
  echo '<html>
<head>
<style>



@import url("https://fonts.googleapis.com/css?family=Raleway:400,700");
*, *:before, *:after {
  box-sizing: border-box;
}

body {
  min-height: 100vh;
  font-family: "Raleway", sans-serif;
}

.container {
  /*position: absolute;*/
  width: 100%;
  height: 100%;
  overflow: hidden;
}
.container:hover .top:before, .container:hover .top:after, .container:hover .bottom:before, .container:hover .bottom:after, .container:active .top:before, .container:active .top:after, .container:active .bottom:before, .container:active .bottom:after {
  margin-left: 200px;
  transform-origin: -200px 50%;
  transition-delay: 0s;
}
.container:hover .center, .container:active .center {
  opacity: 1;
  transition-delay: 0.2s;
}

.top:before, .top:after, .bottom:before, .bottom:after {
  content: "";
  display: block;
  position: absolute;
  width: 200vmax;
  height: 200vmax;
  top: 50%;
  left: 50%;
  margin-top: -100vmax;
  transform-origin: 0 50%;
  transition: all 0.5s cubic-bezier(0.445, 0.05, 0, 1);
  z-index: 10;
  opacity: 0.65;
  transition-delay: 0.2s;
}

.top:before {
  transform: rotate(45deg);
  background: #e46569;
}
.top:after {
  transform: rotate(135deg);
  background: #ecaf81;
}

.bottom:before {
  transform: rotate(-45deg);
  background: #60b8d4;
}
.bottom:after {
  transform: rotate(-135deg);
  background: #3745b5;
}

.center {
  position: absolute;
  width: 400px;
  height: 400px;
  top: 50%;
  left: 50%;
  margin-left: -200px;
  margin-top: -200px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  padding: 30px;
  opacity: 0;
  transition: all 0.5s cubic-bezier(0.445, 0.05, 0, 1);
  transition-delay: 0s;
  color: #333;
}
.center input {
  width: 100%;
  padding: 15px;
  margin: 5px;
  border-radius: 1px;
  border: 1px solid #ccc;
  font-family: inherit;
}



<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="itstyle.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Shadows+Into+Light&display=swap" rel="stylesheet">
<title>Login with Google using PHP by CodexWorld</title>
<style type="text/css">
h1{font-family: "Shadows Into Light", cursive;}


</style>

</head>
<body style = "background-color:powderblue">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<div class="container" onclick="onclick">
  <div class="top"></div>
  <div class="bottom"></div>
  <div class="center" style"transform:translate(-50%,-50%);">'.$output.'</div>
    <h2>&nbsp;</h2>
  </div>
</div>


</body>
</html>';
}
?>
