<?php
if (isset($_COOKIE['kullanici_adi'])) {
	echo 'Sayın <strong>' . $_COOKIE['kullanici_adi'] . '</strong>';
}
?>

<ul>
	<li><a href="index.php">Ana Sayfa</a></li>
	<li><a href="duyurular.php">Duyurular</a></li>
	<?php
		if (isset($_COOKIE['kullanici_adi'])) {
			echo '<li><a href="cikis.php">Çıkış</a></li>';
		} else {
			echo '<li><a href="uye-girisi.php">Üye Girişi</a></li>';
		}
	?>
</ul>