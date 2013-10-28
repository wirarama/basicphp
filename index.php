<?php
include('function.php'); //object oriented programmming
?>
<html>
	<head>
		<title>situs memek</title>
		<link href="style.css" rel="stylesheet" type="text/css" />
	</head>
	<div align="center">
		<!-- ni kontainer utamanya gan 700px -->
		<div id="utama">
			<!-- seterusnya agan ga usah mikirin lebar, kecuali di spit horizontal pikirin tinggi aja -->
			<div id="head">
			&nbsp;<!-- taruh gambar cewek bugil disini gan -->
			</div>
			<div id="nav">
				<?php menu(array('home','atuk','memek','jembut')); //bikin menu jadi lebih gampang gan ?>
			</div>
			<div id="content"><!-- taruh isi situs disini -->
				<div id="baris2">
					<?php menu(array('reira aisaki','yui hatano','tina yuzuki','rei mizuna')); //disini url yg ada spasi akan diganti jadi - ?>
				</div>
				<div id="baris1">
				<?php
				/*
				switch kondisi berdasarkan $_GET['halaman']
				$_GET['halaman']=home tidak didefinikan karena kondisi default. itu sama dengan kondisi ?halaman kosong
				*/
				switch($_GET['halaman']){
					case('atuk'):
						?>
						<p>atuk isiin konten halaman atuk disini</p>
						<?php
					break;
					case('memek'):
						?>
						<div class="thumbnails"><a href="images/hell460.jpg"><img src="images/hell460.jpg" width="100px"></a></div>
						<div class="thumbnails"><a href="images/hell460.jpg"><img src="images/hell460.jpg" width="100px"></a></div>
						<div class="thumbnails"><a href="images/hell460.jpg"><img src="images/hell460.jpg" width="100px"></a></div>
						<div class="thumbnails"><a href="images/hell460.jpg"><img src="images/hell460.jpg" width="100px"></a></div>
						<div style="clear:both;"></div> <!-- supaya mau kebawah gan -->
						<div class="thumbnails"><a href="images/hell460.jpg"><img src="images/hell460.jpg" width="100px"></a></div>
						<div class="thumbnails"><a href="images/hell460.jpg"><img src="images/hell460.jpg" width="100px"></a></div>
						<div class="thumbnails"><a href="images/hell460.jpg"><img src="images/hell460.jpg" width="100px"></a></div>
						<div class="thumbnails"><a href="images/hell460.jpg"><img src="images/hell460.jpg" width="100px"></a></div>
						<div style="clear:both;"></div> <!-- supaya mau kebawah gan -->
						<div class="thumbnails"><a href="images/hell460.jpg"><img src="images/hell460.jpg" width="100px"></a></div>
						<div class="thumbnails"><a href="images/hell460.jpg"><img src="images/hell460.jpg" width="100px"></a></div>
						<div class="thumbnails"><a href="images/hell460.jpg"><img src="images/hell460.jpg" width="100px"></a></div>
						<div class="thumbnails"><a href="images/hell460.jpg"><img src="images/hell460.jpg" width="100px"></a></div>
						<div style="clear:both;"></div> <!-- supaya mau kebawah gan -->
						<?php
					break;
					case('jembut'):
						?>
						<p>jembut isiin konten halaman jembut disini</p>
						<?php
					break;
					default:
						for($i=0;$i<4;$i++){
						?>
						<h3>Klik memek gan!! ada contoh bikin thumbails!!!</h3>
						<p><img src="images/hell460.jpg" align="left" width="200px">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						<?php
						}
					break;
				}
				?>
				</div>
				<div id="baris2">
					<?php menu(array('pepek','kontol','mengentot','mekatuk','pepek','kontol','mengentot','mekatuk')); ?>
				</div>
				<div style="clear:both;"></div>
			</div>
			<div id="credit">
				<div>situs ini dibuat oleh yui hatano yg cantik wkwkwkwkwk</div><!-- taruh kredit by tukang katuk disini -->
			</div>
		</div>
	</div>
</html>
