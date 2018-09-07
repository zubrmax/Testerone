<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link href="../CSS/style.css" rel="stylesheet" type="text/css">
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
    <!--<img id="logo" src="../Img/zubrmax.jpg" alt="orange" width="160" height="40"> -->
    <div id="navigation">
        <ul id="menu">
          <li class="zubrmax">ГДЕ</li>
          <li><a href="../index.php">КТО</a></li>
          <li><a href="./whereami.php">ГДЕ</a></li>
          <li><a href="../Howami/howami.php">КАК</a></li>
          <li><a href="../Around/around.php">МЕДИА</a></li>
          <li><a href="../Resume/resume.php">РЕЗЮМЕ</a></li>
        </ul>
    </div>
</div>
<p class="comment">Все просто! В Новосибирске. Если приглядеться, то на фото можно разглядеть сибирских медведей. Сколько медведей вы видите?</p>
  <img src="../Img/novosib03.jpg" alt="orange" width=100% height="450">
  <footer><p id="pfooter"><br><br><br><br><br><br>Developed & designed by ZUBRMAX. All rights reserved. 2018.</p>
  </footer>
<body>
</html>
