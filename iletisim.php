<!DOCTYPE html>
<html>
<head>
	<title>Muhammet Furkan ÖZEL Ödev</title>
<style type="text/css">
	#govde{
		width: 960px;
		margin: auto;
		
	}
	#banner{
		height: 200px;
		width: 100%;
	}

	#navbar {
		border-top:3px solid white;
		border-bottom:3px solid white;
		}


	#navbar ul{
		text-align:center;
		list-style: none;
		margin:0;
		padding:0;
	}
	#navbar ul li{
		display: inline-block;
		padding:0 10px;
		margin:auto -2px;

	}
	#navbar ul li a{
		color: white;
		display: inline-block;
		font: 14px/100% Arial, Helvetica, sans-serif;
		height: 36px;
		line-height: 36px;
		text-decoration: none;
		vertical-align: middle;
		padding: 0 10px;
		 
	}
	#navbar ul li a:hover{
		color: white;
		
	}

	
	#footer{
		width: 100%;
		height: 20px;
		color: white;
		font-family: arial;
		font-size: 12px;
		text-align: center;
		font-weight: bold;
		padding-top:8px; 
	}
	
	input[type=text], select, textarea {
			width: 100%;
			padding: 12px;
			border: 1px solid #ccc; 
			border-radius: 4px; 
			box-sizing: border-box;
			margin-top: 6px; 
			margin-bottom: 16px; 
			resize: vertical 
		}
		input[type=submit] {
			background-color: white;
			color: black;
			padding: 12px 20px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
		}

		input[type=submit]:hover {
			color: white;
			background-color: black;
		}
		.container {
			border-radius: 5px;
			background-color: #393939;
			padding: 20px;
		}
	
	
</style>
</head>

<body>
<body background="img/background.jpg">...</body>
<div id="govde">

<div id="banner">
	<a href="index.php"><img src="img/banners.jpg" height="200px"; width="100%"/>
	
</div>

<div id="navbar">
 <ul>
<li><a href="index.php">Anasayfa</a></li>
<li><a href="bilgisayarin_tarihcesi.php">Bilgisayarın Tarihçesi</a></li>
<li><a href="urunlerimiz.php">Ürünlerimiz</a></li>
<li><a href="hakkimda.php">Hakkımda</a></li>
<li><a href="iletisim.php">İletişim</a></li>
 </ul>
</div>

<div style="width: 600px; margin: auto; height: 300px; color: white; font-family: arial; font-size: 15px; text-align: center; padding: 5px;">
<h1></h1><br>
<div/>

<div class="container">
  <form action="mail.php" method="POST">
    <label for="ad"></label>
    <input type="text" name="ad" placeholder="Adınız">

    <label for="eposta"></label>
    <input type="text" name="eposta" placeholder="E-Posta Adresiniz">
        <label for="konu"></label>
    <input type="text" name="konu" placeholder="Konu">

    <label for="mesaj"></label>
    <textarea name="mesaj" placeholder="Mesajınız" style="height:100px"></textarea>

    <input type="submit" name="submit" value="Gönder">

  </form>
</div>

<div id="footer">
	Bu site Muhammet Furkan ÖZEL tarafından 2019 yılında kurulmuştur
</div>

<audio controls style="display:none;" autoplay>
  <source src="music/hareketli_music.mp3" type="audio/mpeg">
</audio>

</body>
</html>