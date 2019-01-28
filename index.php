<?php include "includes/db.php"; ?>
<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Nerdvana</title>
	<link rel="icon" href="Nerdvana.ico" type="image/ico" sizes="16x16">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" type="text/css" href="css/nav.css">

	<script src="js/index.js"></script>
</head>
<body>
	
	<!-- NAVIGATION BAR -->
	
	<?php include "includes/nav.php" ?>
    
    <div class="container">
        <div class="well">
            <h1>Welcome To Nerdvana !!</h1>
            <hr>
            <p>NERDVANA is a global entertainment media brand powered by fan passion. The fan-trusted source in entertainment, we provide a home to explore, contribute to, and celebrate the world of many characters and their universes. Whether looking for in-depth information about your favorite character, universe or what’s buzzing in entertainment, NERDVANA has your fictional curiosities covered through fan-expert knowledge and carefully curated and fun, original multi-platform content. NERDVANA provides the most passionate fans a home to explore, speculate, and give perspective on their interests with millions of fans on the world's largest entertainment fan site.</p>
        </div>
        <div class="well">
            <h1>What's NEW ?</h1>
            <hr>
            <p>THE WAIT IS OVER ........ WINTER HAS FINALLY ARRIVED !!! The Song Of Ice And Fire Universe is finally up and running.... and we just can't get enough of it. The best television show ever - Game Of Thrones - is here. Also don't forget to catch up on the entire series of the books... from 'Game of Thrones' to 'The Dance Of Dragons'. With Winds of Winter release date lurking around the corner, and the chance of Season 8 trailer dropping any time... the timing could not have been any better!</p>
        </div>

        <div class="thumbnail">
            <img class="img-responsive" src="Images/White-Walker.jpg">
        </div>
        
        <div class="well">
            <h1>Coming Soon....</h1>
            <hr>
            <ul>
                <li>TV Series Episode Guide</li>
                <li>Star Wars Universe</li>
                <li>User Defined Pages</li>
            </ul>
        </div>
    </div>

    <!-- FOOTER -->

	<footer style="color: white;">
  		<p>Designed by:<br><br>Tejas Joshi<br>Vedant Singh<br>Yogesh Murarka</p>
  		<p>Contact information: <a href="mailto:ezioauditorefirenze007@gmail.com" style="color: yellow;">ezioauditorefirenze007@gmail.com</a>.</p>
	</footer>
<?php include "includes/footer.php" ?>