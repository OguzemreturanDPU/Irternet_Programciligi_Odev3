<?php	
	if (isset($_POST['kullanici_adi']) && isset($_POST['sifre']))
	{
		require 'veriler/uyeler.php';
		
		foreach($uyeler as $uye) {
			if ($uye['kullanici_adi'] == $_POST['kullanici_adi']) {
				
				if ($uye['sifre'] == $_POST['sifre']) {
					
					setcookie('kullanici_adi', $uye['kullanici_adi'], time() + 60*60*24, '/');
					
					header('Location: duyurular.php');
				}
				
				break;
			}
		}
	}

?>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Üyelik Sistemi</title>
	</head>
	<body>
		<?php require 'veriler/menu.php'; ?>
		<p>Üye Girişi</p>
		<form method="POST">
			<input type="text" name="kullanici_adi" placeholder="Kullanıcı Adı" />
			<input type="password" name="sifre" placeholder="Şifre" />
			<input type="submit" value="Giriş Yap" />
		</form>
	</body>
</html>