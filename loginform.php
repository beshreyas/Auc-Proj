<!DOCTYPE html>
  <html>
    <head>
      
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

      <link rel="shortcut icon" href="images/title.jpg" type="image/png">
   
  <meta charset="utf-8">
  <title>Login</title>
  
    <link rel="stylesheet" href="css/zerogrid.css">
  <link rel="stylesheet" href="css/style.css">
  
  <script src="js/jquery-latest.min.js"></script>
  <script src="js/script.js"></script>
  <script src="js/jquery183.min.js"></script>
    </head>

    <body>
<!--////////////////////////////////////Header-->
<header class="bg-theme">
  <div class="wrap-header zerogrid">
    <div class="row">
      <div id="cssmenu">
        <ul>
           <li><a href="index.php">Home</a></li>
           <li class='active'><a href="squads.php">The Squad</a></li>
        </ul>
      </div>
      <a href='index.php' class="logo"><img src="images/logo.png" /></a>
    </div>
  </div>
</header>

<br>
<br>



      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <div class="row" style="width:30%; background-color:#FF5733; border-radius:15px; box-shadow:5px 5px 5px 5px; ">
      <br>
      <center><h1 style="color:white;">Enter Login Details</h1></center>
      <br>
        <form class="col s12"	method="post" action="logincheck.php"	>
          <div class="row">
        
        <div class="input-field col s12">
          <input id="last_name" type="text" class="validate" name="Email" placeholder="Email" style="color:white;">
          
        </div>
      </div>
      
      <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" class="validate" name="password" placeholder="Password" style="color:white;">
         </div>
      </div>
     <br>
     
    	</div>
    
    
    
  
<center><button class="btn waves-effect waves-light" type="submit" name="action">LOGIN
  </button>&nbsp;&nbsp;&nbsp;&nbsp;<a href="registero.php" class="waves-effect waves-light btn">Register</a></center>
</form>
<br>
  <footer>
  <div class="wrap-footer">
    <div class="zerogrid">
      <div class="row">
       When the fun stops, STOP!  
      </div>
    </div>
  </div>
</footer>
    </body>
  </html>



