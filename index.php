
<html lang="en">
<head>
<link rel="shortcut icon" href="images/title.jpg" type="image/png">
    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Indian Premier League</title>
	<meta name="description" content="Free Responsive Html5 Css3 Templates | zerotheme.com">
	<meta name="author" content="www.zerotheme.com">
	<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

		<link href="font/material-design-icons-master/material-icons.css" rel="stylesheet">
    <!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- CSS
  ================================================== -->
  	<link rel="stylesheet" href="css/zerogrid.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/responsiveslides.css">

	
	<script src="js/jquery-latest.min.js"></script>
	<script src="js/script.js"></script>
    <script src="js/jquery183.min.js"></script>
    <script src="js/responsiveslides.min.js"></script>
    <script>
		// You can also use "$(window).load(function() {"
		$(function () {
		  // Slideshow 
		  $("#slider").responsiveSlides({
			auto: true,
			pager: false,
			nav: true,
			speed: 500,
			namespace: "callbacks",
			before: function () {
			  $('.events').append("<li>before event fired.</li>");
			},
			after: function () {
			  $('.events').append("<li>after event fired.</li>");
			}
		  });
		});
	</script>
    
</head>
<body>
<div class="wrap-body" >

<!--////////////////////////////////////Header-->
<header>

	<div class="wrap-header zerogrid">
		<div class="row">
			<div id="cssmenu">
				<ul>
				   <li class='active'><a href="index.php">Home</a></li>
				   <li><a href="squads.php">The Squad</a></li>	
				   <li><a href="loginform.php">Register/Login</a>
  					</li>

				   
				</ul>
			</div>
			<a href='index.php' class="logo"><img src="images/logo.png" /></a>
		</div>
	</div>
</header>

<div class="main-content art-content" >
	<marquee behaviour="scroll" direction="right"><h3> WELCOME TO THE INDEX PAGE! HAVE A GREAT AUCTION!</h3></marquee>
</div>
    

<!--////////////////////////////////////Footer-->
<footer>
	
	<div class="wrap-footer">
		<div class="zerogrid">
			When the fun stops, STOP!
		</div>
	</div>
</footer>
	
</div>
</body>
</html>