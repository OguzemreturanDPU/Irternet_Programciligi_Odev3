<html>
	<head>
		<meta charset="utf-8" />
		<title>Üyelik Sistemi</title>
	</head>
	<body>
		<?php require 'veriler/menu.php'; ?>
		<p>Duyurular</p>
		
		<?php
		if (isset($_COOKIE['kullanici_adi'])) {
		?>
		<ol>
			<li>Dünya Kupası Messinin</li>
			<li>Hedef KPSS</li>
			<li>Galatasaray Çok büyük bir camiaa</li>
		</ol>
		<?php
		} else {
			echo '<h5 style="background-color: blue; color: white">Duyuruları yalnızca üyeler görebilir!</h5>';
		}
		
		?>
		
	</body>
</html>