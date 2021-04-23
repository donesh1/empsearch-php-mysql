<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <!-- <script src="https://kit.fontawesome.com/556a8dbe9b.js" crossorigin="anonymous"></script> -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  
    <title>Bank of Montreal - Citrix Virtual App and Desktop</title>
	<link rel="shortcut icon" type="image/jpg" href="image/favicon.png"/>
 </head>
 <body>

    <div class='main'>
    
    
        
            <h1 style="text-align:center" >Welcome to BMO Virtual App and Desktop Migration</h1>
            <form action="index.php" style="text-align:center" method="POST">
                        <!-- <input type="text" name="" class="search-txt" placeholder="Enter your email address..."/>    -->
                   
                    <div class="search-box">
                        <input type="text" name="search-txt" class="search-txt" placeholder="Enter your email address...."></input>
                        <!-- <input type="submit" name="submit" ></button> -->
                        <button <a class="search-btn" name="search-btn" type="submit">
                        <i class="fas fa-search"></i>
                        </a> 
                        </button>


                        <?php
                            include_once('fetch.php');
                        ?>


                    </div>
                
                </form>
                <!-- <div id="footer" class="footer-center">
                        <div class="footer-icons">
                            <a href="https://github.com/donesh1/empsearch-php-mysql" title="Source Code"><img src="image/github.jpeg" class="icon-style" alt="Github icon"></a>
                            <a href="mailto:<Donesh Bajaj>donesh1@gmail.com" title="Feedback"><img src="image/email.jpeg" class="icon-style" alt="Emailicon" text=></a>
                        </div>
				</div>	 -->

    
    </div>

 </body>

</html>