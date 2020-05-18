<!DOCTYPE html>

<html>

<head>

	<title>menu</title>

	<link rel="stylesheet" type="text/css" href="style.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<script src="script.js"></script> <script src="myscripts.js"></script>

	<script type = "text/javascript" src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		
    <script type = "text/javascript" src = "https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>

</head>

<body>

	<div id = "menu_header">
		
		<div class = "menu_header-containment-wrapper"> <a class = "menu_link-default" href = "index.html">

			<div class = "menu_header-title"> 
				
				<div class = "menu_header-main-title">Greens</div>

				<div class = "menu_header-tagline">sandwich bar</div>

			</a></div> <!-- header-title -->

			<div class = "menu_header-menu">
				
				<nav>

					<ul class = "menu_header-menu-list">

						<li><a class = "menu_first" href = "index.html">home</a></li>

						<li><a class = "menu_second" href = "menu.html">menu</a></li>

						<li><a class = "menu_second" href = "maps.html">maps</a></li>

						<li><a class = "menu_second" href = "bookings.html">bookings</a></li>

					</ul>

				</nav> 

			</div> <!-- header-menu -->

				<div class = "brand-collection">
		
				<div id = "image-4" class="bounce1"  ><img  class ="brand" src = "brands/facebook-brands-black.svg"></img></div>

				<div id = "image-5" class="bounce2"  ><img  class ="brand" src = "brands/instagram-brands-black.svg"></img></div>

				<div id = "image-6" class="bounce3"  ><img  class ="brand" src = "brands/twitter-brands-black.svg"></img></div>

			</div> <!-- brand-collection -->

		</div>  <!-- header-containment-wrapper -->

	</div> <!-- header -->

	<div class = "menu_main-wrapper">

		<form action = "" method = "post">

			<input type = "text" name = "name" placeholder = "full name"> 

			<input type = "text" name = "email" placeholder = "email">

			<input type = "date" name = "date">

			<input type = "submit">

		</form>

		<div class = "menu_heading-wrapper">menu</div><!--menu_heading-wrapper -->

		<div class = "menu_header-gap"></div><!--menu_heading-gap -->

		<div class ="menu_image-wrapper"><img class ="menu_breakfast-image" src = "images/breakfast.jpeg"></img></div><!--menu_image-wrapper-->
	</div><!--menu_main_wrapper-->

		<div>

			<script>

			$(function(){
				$(".menu_breakfast-image").hide().slideDown();
			})

			$(window).on("scroll", function(){
				number = $("#menu_header").offset().top
					if (number < 3
						) {
						$("#menu_header").fadeIn();
					}
					else {
						$("#menu_header").fadeOut();
					}
				})

			
		</script>
	</div>

</body>
</html>