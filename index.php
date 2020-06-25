<html>
<head>
	<title>Whistle Blower</title>
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
	<div class="header">

		<! -- Bitcoin ad -->
		<iframe data-aa="1416198" src="//ad.a-ads.com/1416198?size=120x60" scrolling="no" style="width:120px; height:60px; border:0px; padding:0; overflow:hidden" allowtransparency="true"></iframe>
		<br>

		<img src="img/whistle.svg">
		<h1>Whistle Blower</h1>

	</div>
	<div class="container">
		<div class="grid">
			<!-- Left column -->
			<div></div>

			<!-- Middle colum (main content) -->
			<div id="middle-column">


					<!-- MAIN CONTENT HERE -->
					<form action="inc/insert_blow.php" method="post">
						<!-- input type="hidden" name="id" value="2" -->
						<p>
							<!-- label>Company name:</label -->
							<input class="textarea" type="textarea" name="company" placeholder="Company Name">
						</p>
						
						<p>
							<!-- label>Comment:</label -->
							<textarea name="comment" rows="6" cols="30" placeholder="My comment or story"></textarea>
						</p>
						
						<p>
							<!-- label>My Position in the company:</label -->
							<input class="textarea" type="textarea" name="position" placeholder="My position in the company">
						</p>
						
						<p>					
							<input type="submit" name="submit">
						</p>
					</form>

			</div>

			<!-- Right columm -->
			<div></div>
		</div>
	</div>
	
	<div class="container">
	
		<h2>Preview Blowers:</h2>
		
		<div class="grid">	
			<?php include("inc/display-rows.php"); ?>
		</div>
	</div>



	<div class="footer">
			Design and Code by <a href="http://www.toogreen.ca" target="_blank">toogreen</a> &copy;2020
	</div>
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

// Create lang variable from the script above
var lang = vars['lang'];

// Display the value in a popup
//alert(lang);

	// Check if variable FR was passed in URL, if so then load the FR version of this page
	if (lang == 'fr') {
      $('#en, #show-fr').toggle("hide");
      $('#show-en').toggle("show");
      $('#fr').toggle("slide");
    };
});

</script>
</html>