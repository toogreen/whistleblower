<?php include("inc/variables.php"); ?>

<html>
<head>
	<title><?php echo $pagetitle; ?></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="UTF-8">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-169940317-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-169940317-1');
	</script>

	<!-- AdSense -->
	<script data-ad-client="ca-pub-7401520800104068" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,900;1,300&display=swap" rel="stylesheet">


</head>
<body>
	<header>

		<! -- Bitcoin ad -->
		<div class="ad">
			<iframe class="ad" data-aa="1416198" src="//ad.a-ads.com/1416198?size=120x60" scrolling="no" style="width:120px; height:60px; border:0px; padding:0; overflow:hidden" allowtransparency="true"></iframe>
		</div>
		
		<div id="logo">
			<img src="img/logo.svg">
		</div>
		
		<h1><?php echo $pagetitle; ?></h1>

	</header>
	<main class="container">
		<div class="grid">
			<!-- Left column -->
			<div>
				<!-- Bitcoin ad -->
				<iframe data-aa="1416908" src="//ad.a-ads.com/1416908?size=200x200" scrolling="no" style="width:200px; height:200px; border:0px; padding:0; overflow:hidden" allowtransparency="true"></iframe>
			</div>

			<!-- Middle colum (main content) -->
			<div id="middle-column">


					<!-- MAIN CONTENT HERE -->
					<form action="inc/insert_item.php" method="post">
					
						<h3><?php echo $subtitle; ?></h3>
						
						<p>
							<!-- label>Company name:</label -->
							<input class="textarea" type="textarea" name="field1" placeholder="Company To Shame">
						</p>
						
						<p>
							<!-- label>Comment:</label -->
							<textarea name="field2" rows="6" cols="30" placeholder="Comment or Story Here (don't worry, this is completely anonymous, there are no cookies either to track you. Go ahead and spill the beans! :)"></textarea>
						</p>
						
						<p>
							<!-- label>My Position in the company:</label -->
							<input class="textarea" type="hidden" name="field3" placeholder="Your position" value="hidden">
						</p>
						
						<p>					
							<input type="submit" name="submit">
						</p>
					</form>

			</div>

			<!-- Right columm -->
			<div>
				<!-- Bitcoin ad -->
				<iframe data-aa="1416910" src="//ad.a-ads.com/1416910?size=200x200" scrolling="no" style="width:200px; height:200px; border:0px; padding:0; overflow:hidden" allowtransparency="true"></iframe>
			</div>
		</div>

		<div class="container">
		
			<h2><?php echo $previous; ?></h2>
			
			<div class="grid">	
				<?php include("inc/display-rows.php"); ?>
			</div>
		</div>



	</main>
	




	<footer>
			Design and Code by <a href="http://www.toogreen.ca" target="_blank">toogreen</a> &copy;2020
	</footer>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>



$(document).ready(function(){

// Get all the strings from URL
var vars = [], hash;
    var q = document.URL.split('?')[1];
    if(q != undefined){
        q = q.split('&');
        for(var i = 0; i < q.length; i++){
            hash = q[i].split('=');
            vars.push(hash[1]);
            vars[hash[0]] = hash[1];
        }
}

// Create edit variable from the script above
var edit = vars['edit'];

// Display the value in a popup
//alert(lang);

	// Check if variable EDIT was passed in URL, if so then load the editable version of this page
	if (edit == 'yes') {
	$('.del').toggle("show");
    };
});

</script>
</html>