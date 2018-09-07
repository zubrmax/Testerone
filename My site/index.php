<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link href="./CSS/style.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script>
	jQuery(function($) {
		$(window).scroll(function(){
			if($(this).scrollTop()>140){
				$('#navigation').addClass('fixed');
			}
			else if ($(this).scrollTop()<140){
				$('#navigation').removeClass('fixed');
			}
		});
	});
</script>
</head>
<body>
  <div id="header">
    <div id="navigation">
        <ul id="menu">
          <li class="zubrmax">КТО</li>
            <li><a href="./index.php">КТО</a></li>
            <li><a href="Whereami/whereami.php">ГДЕ</a></li>
            <li><a href="Howami/howami.php">КАК</a></li>
            <li><a href="Around/around.php">МЕДИА</a></li>
            <li><a href="Resume/resume.php">РЕЗЮМЕ</a></li>
        </ul>
    </div>
</div>
<p class="comment">Этот фильм покажет и расскажет все. Или почти все.)</p>
  <iframe width="465" height="292" src="https://www.youtube.com/embed/AnukTAG2T_8" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
  <footer><p id="pfooter"><br><br><br><br><br><br>Developed & designed by ZUBRMAX. All rights reserved. 2018.</p>
  </footer>
<body>
</html>
