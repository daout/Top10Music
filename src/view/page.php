<!DOCTYPE html>
<html>
    <head>
      <meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Top 10 Music</title>

<!-- Appel Feuille de Style Bootstrap -->

<!-- Appel � la feuille de style th�me Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- Appel � la feuille de style th�me Bootstrap -->
<link href="css/bootstrap-theme.min.css" rel="stylesheet">

<link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.css" rel="stylesheet">
<link href="css/star-rating.min.css" media="all" rel="stylesheet" type="text/css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    
    <script src="js/star-rating.min.js" type="text/javascript"></script>


<!-- Appel � la feuille de style th�me Bootstrap -->
<link href="css/style.css" rel="stylesheet">


<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->  
    </head>
    
    <body>

	<div class="container">

	<header>
		<?php
			include "header.php";
		?>
	</header>
        
    <div>
  		<?php 
    		include "carousel.php";
		?>
	</div>
		
	<section class="row">
	<aside>
	<?php 
    		include "news.php";
		?>
	</aside>
	
	<article>
	<?php 
	
    		include $view_path;
    	?>
	</article>
		
    </section>
    
	<footer>
		<?php
			include "footer.php";
		?>
	</footer>
	
	</div>
	<!-- Appel de la librarie  JQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<!-- Appel de la librarie bootstrap.min.js -->
	<script src="js/bootstrap.min.js"></script>
    
    </body>
</html>