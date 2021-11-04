<?php

include_once 'header.php';

?>

<section class="breadcrumb-option">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="breadcrumb-header">
					<h4>SHOP</h4>
				</div>
				<ul class="breadcrumb">
					<li class="breadcrumb-item"><a href="index.php">Home</a></li>
					<li class="breadcrumb-item active">Shop</li>
				</ul>
			</div>
		</div>
	</div>
</section>

<section class="shop">
	<div class="container">
		<div class="row">
			<div class="col-lg-3">
				<div class="shop-filter">
					<div class="accordion" id="accordion">
						<div class="card" id="">
							<?php
							$sql = "SELECT * FROM category";
							$result = $koneksi->query($sql);
							?>
							<div class="card-header">
								<a class="" type="" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
									Kategori <span class="float-right"><i class="ion ion-ios-arrow-down"></i></span>
								</a>
							</div>
							<div id="collapseOne" class="collapse show" aria-labelledby="" data-parent="#accordion">
								<div class="card-body">
									<p class="bj" href=""><input type="radio" value="12" name="kategori"> <span class="produk_check pl-2">Baju</span></p>
									<p class="cln" href=""><input type="radio" value="13" name="kategori"> <span class="produk_check pl-2">Celana</span></p>
									<p class="dmpt" href=""><input type="radio" value="14" name="kategori"> <span class="produk_check pl-2">Dompet</span></p>
									<!-- <p class="akssrs" href=""><input type="radio" value="15" name="kategori"> <span class="produk_check pl-2">Aksesoris</span></p> -->
									<p class="spt" href=""><input type="radio" value="16" name="kategori"> <span class="produk_check pl-2">Sepatu</span></p>
									<p class="jkt" href=""><input type="radio" value="17" name="kategori"> <span class="produk_check pl-2">Jaket</span></p>
									<!-- <p class="kskk" href=""><input type="radio" value="18" name="kategori"> <span class="produk_check pl-2">Kaos Kaki</span></p> -->
									<p class="ts" href=""><input type="radio" value="19" name="kategori"> <span class="produk_check pl-2">Tas</span></p>
									<p class="sndl" href=""><input type="radio" value="20" name="kategori"> <span class="produk_check pl-2">Sandal</span></p>
								</div>
							</div>
						</div>
						<!-- <div class="card" id="">
							<div class="card-header" id="">
								<a class="" type="" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
									Subkategori <span class="float-right"><i class="ion ion-ios-arrow-down"></i></span>
								</a>
							</div>
							<div id="collapseTwo" class="collapse show" aria-labelledby="" data-parent="#accordion">
								<div class="card-body">
									<p class="12" href=""><input type="checkbox" id="c1" value="6" name="baju" onclick="myFunction1()"> <span class="produk_check pl-2">Kaos Lengan Pendek</span></p>
									<p class="12" href=""><input type="checkbox" id="c2" value="19" name="baju" onclick="myFunction2()"> <span class="produk_check pl-2">Kemeja Lengan Panjang</span></p>
									<p class="12" href=""><input type="checkbox" id="c3" value="20" name="baju" onclick="myFunction3()"> <span class="produk_check pl-2">Kemeja Lengan Pendek</span></p>
									<p class="12" href=""><input type="checkbox" id="c4" value="22" name="baju" onclick="myFunction4()"> <span class="produk_check pl-2">Singlet</span></p>
									<p class="12" href=""><input type="checkbox" id="c5" value="51" name="baju"> <span class="produk_check pl-2">Kaos Lengan Panjang</span></p>
									<p class="13" href=""><input type="checkbox" id="c6" value="26" name="celana"> <span class="produk_check pl-2">Celana Jeans</span></p>
									<p class="13" href=""><input type="checkbox" id="c7" value="23" name="celana"> <span class="produk_check pl-2">Celana Panjang</span></p>
									<p class="13" href=""><input type="checkbox" id="c8" value="24" name="celana"> <span class="produk_check pl-2">Celana Pendek</span></p>
									<p class="13" href=""><input type="checkbox" id="c9" value="25" name="celana"> <span class="produk_check pl-2">Celana Training</span></p>
									<p class="14" href=""><input type="checkbox" id="c10" value="5" name="dompet"> <span class="produk_check pl-2">Dompet Panjang</span></p>
									<p class="14" href=""><input type="checkbox" id="c11" value="50" name="dompet"> <span class="produk_check pl-2">Dompet Pendek</span></p>
									<p class="15" href=""><input type="checkbox" id="c12" value="29" name="aksesoris"> <span class="produk_check pl-2">Jam Tangan</span></p>
									<p class="15" href=""><input type="checkbox" id="c13" value="40" name="aksesoris"> <span class="produk_check pl-2">Topi</span></p>
									<p class="15" href=""><input type="checkbox" id="c14" value="41" name="aksesoris"> <span class="produk_check pl-2">Kacamata</span></p>
									<p class="16" href=""><input type="checkbox" id="c15" value="30" name="sepatu"> <span class="produk_check pl-2">Sepatu Casual</span></p>
									<p class="16" href=""><input type="checkbox" id="c16" value="33" name="sepatu"> <span class="produk_check pl-2">Sepatu Pantopel</span></p>
									<p class="16" href=""><input type="checkbox" id="c17" value="54" name="sepatu"> <span class="produk_check pl-2">Sepatu Olahraga / Running</span></p>
									<p class="17" href=""><input type="checkbox" id="c18" value="52" name="jaket"> <span class="produk_check pl-2">Jaket Bomber</span></p>
									<p class="17" href=""><input type="checkbox" id="c19" value="34" name="jaket"> <span class="produk_check pl-2">Jaket Hodie</span></p>
									<p class="17" href=""><input type="checkbox" id="c20" value="47" name="jaket"> <span class="produk_check pl-2">Jaket Jeans</span></p>
									<p class="17" href=""><input type="checkbox" id="c21" value="36" name="jaket"> <span class="produk_check pl-2">Jaket Parasut</span></p>
									<p class="18" href=""><input type="checkbox" id="c22" value="38" name="kaoskaki"> <span class="produk_check pl-2">Kaos Kaki Panjang</span></p>
									<p class="18" href=""><input type="checkbox" id="c23" value="39" name="kaoskaki"> <span class="produk_check pl-2">Kaos Kaki Pendek</span></p>
									<p class="19" href=""><input type="checkbox" id="c24" value="12" name="tas"> <span class="produk_check pl-2">Tas Ransel</span></p>
									<p class="19" href=""><input type="checkbox" id="c25" value="13" name="tas"> <span class="produk_check pl-2">Tas Samping</span></p>
									<p class="19" href=""><input type="checkbox" id="c26" value="42" name="tas"> <span class="produk_check pl-2">Tas Pinggang</span></p>
									<p class="20" href=""><input type="checkbox" id="c27" value="14" name="sandal"> <span class="produk_check pl-2">Sandal Jepit</span></p>
									<p class="20" href=""><input type="checkbox" id="c28" value="55" name="sandal"> <span class="produk_check pl-2">Sandal Gunung / Casual</span></p>
								</div>
							</div>
						</div> -->
						<div class="card" id="">
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-9">
				<div class="shop-product">
					<div class="row">
						<?php
						date_default_timezone_set('Asia/Jakarta');
						$time = date('H:i');
						$b1 = "00:00";
						$a1 = "11:59";
						$b2 = "12:00";
						$a2 = "12:59";
						$b3 = "13:00";
						$a3 = "19:59";
						$b4 = "20:00";
						$a4 = "23:59";
						if ($time > "$b1" && $time < "$a1") {
							function feedForwardTrain($x1, $x2, $x3, $x4, $t, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bh1, $bh2, $bbiaso)
							{
								$maxIn    = max($x1, $x2, $x3, $x4, $t);
								$minIn    = min($x1, $x2, $x3, $x4, $t);

								//normalisasi data input
								$x1Nor = 0.8 * ($x1 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x2Nor = 0.8 * ($x2 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x3Nor = 0.8 * ($x3 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x4Nor = 0.8 * ($x4 - $minIn) / ($maxIn - $minIn) + 0.1;
								$targetNor = 0.8 * ($t - $minIn) / ($maxIn - $minIn) + 0.1;

								//hitung nilai pada hidden layer
								$h1 = $bbiash1 + ($x1Nor * $bx1h1) + ($x2Nor * $bx2h1) + ($x3Nor * $bx3h1) + ($x4Nor * $bx4h1);
								$h2 = $bbiash2 + ($x1Nor * $bx1h2) + ($x2Nor * $bx2h2) + ($x3Nor * $bx3h2) + ($x4Nor * $bx4h2);
								$h1Sig = 1 / (1 + exp($h1 * -1));
								$h2Sig = 1 / (1 + exp($h2 * -1));

								//hitung nilai output
								$out = $bbiaso + ($h1Sig * $bh1) + ($h2Sig * $bh2);
								$outSig = 1 / (1 + exp($out * -1));
								$err = ($targetNor - $outSig);
								$error = pow($err, 2);
								$te = 0.01;
								if ($error > $te) {
									backpropagationTrain($outSig, $targetNor, $h1Sig, $h2Sig, $bh1, $bh2, $x1Nor, $x2Nor, $x3Nor, $x4Nor, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bbiaso, $x1, $x2, $x3, $x4, $t);
								} else {
									// echo "Target =" . $targetNor . "<br>";
									// echo "Output =" . $outSig . "<br>";
									// $err = ($targetNor - $outSig);
									// $error = pow($err, 2);
									// echo "Error = " . $error . "<br><br>";

									global $bx1h1n, $bx2h1n, $bx3h1n, $bx4h1n, $bx1h2n, $bx2h2n, $bx3h2n, $bx4h2n, $bbiash1n, $bbiash2n, $bh1n, $bh2n, $bbiason;
									$bx1h1n = $bx1h1;
									$bx2h1n = $bx2h1;
									$bx3h1n = $bx3h1;
									$bx4h1n = $bx1h1;
									$bx1h2n = $bx1h2;
									$bx2h2n = $bx2h2;
									$bx3h2n = $bx3h2;
									$bx4h2n = $bx1h2;

									$bbiash1n =  $bbiash1;
									$bbiash2n =  $bbiash2;
									$bh1n	  = $bh1;
									$bh2n	  = $bh2;
									$bbiason  = $bbiaso;
								}
							}
							function backpropagationTrain($outSig, $targetNor, $h1Sig, $h2Sig, $bh1, $bh2, $x1Nor, $x2Nor, $x3Nor, $x4Nor, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bbiaso, $x1, $x2, $x3, $x4, $t)
							{
								$alpha = 0.1;

								//Persamaan lima
								$dk = ($targetNor - $outSig) * (1 - $outSig) * $outSig;
								// echo "<br>" . $dk;

								//Persamaan enam
								$deltawjk0 = $alpha * $dk;
								$deltawjk1 = $alpha * $dk * $h1Sig;
								$deltawjk2 = $alpha * $dk * $h2Sig;

								//Persamaan tujuh
								$din1 = $dk * $bh1;
								$din2 = $dk * $bh2;

								//Persamaan delapan
								$d1 = $din1 * $h1Sig * (1 - $h1Sig);
								$d2 = $din2 * $h2Sig * (1 - $h2Sig);

								//Persamaan sembilan VIJ Baru
								$x1h1n = $alpha * $d1 * $x1Nor;
								$x2h1n = $alpha * $d1 * $x2Nor;
								$x3h1n = $alpha * $d1 * $x3Nor;
								$x4h1n = $alpha * $d1 * $x4Nor;

								$x1h2n = $alpha * $d2 * $x1Nor;
								$x2h2n = $alpha * $d2 * $x2Nor;
								$x3h2n = $alpha * $d2 * $x3Nor;
								$x4h2n = $alpha * $d2 * $x4Nor;

								$deltav1 = $alpha * $d1;
								$deltav2 = $alpha * $d2;

								//Persamaan sepuluh
								$x1h1nn = $x1h1n +  $bx1h1;
								$x2h1nn = $x2h1n +  $bx2h1;
								$x3h1nn = $x3h1n +  $bx3h1;
								$x4h1nn = $x4h1n +  $bx4h1;

								$x1h2nn = $x1h2n +  $bx1h2;
								$x2h2nn = $x2h2n +  $bx2h2;
								$x3h2nn = $x3h2n +  $bx3h2;
								$x4h2nn = $x4h2n +  $bx4h2;

								//Persamaan sebelas
								$bbh1ko = $deltawjk1 + $bh1;
								$bbh2ko = $deltawjk2 + $bh2;

								$bibikh1 = $bbiash1 + $deltav1;
								$bibikh2 = $bbiash2 + $deltav2;

								$bibhki = $deltawjk0 + $bbiaso;

								feedForwardTrain($x1, $x2, $x3, $x4, $t, $x1h1nn, $x2h1nn, $x3h1nn, $x4h1nn, $x1h2nn, $x2h2nn, $x3h2nn, $x4h2nn, $bibikh1, $bibikh2, $bbh1ko, $bbh2ko, $bibhki);
							}
							feedForwardTrain(30, 46, 53, 54, 52, 0.103, 0.6, 0.33, 0.45, 0.3006, 0.3060, 0.876, 0.1006, 0.106, 0.55, 0.1579, 0.6172, 0.396);



							// ($x1, $x2, $x3, $x4, $t, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bh1, $bh2, $bbiaso
							//Baju1
							function feedForwardBaju1($x1, $x2, $x3, $x4, $t, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bh1, $bh2, $bbiaso)
							{
								$maxIn    = max($x1, $x2, $x3, $x4, $t);
								$minIn    = min($x1, $x2, $x3, $x4, $t);

								//normalisasi data input
								$x1Nor = 0.8 * ($x1 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x2Nor = 0.8 * ($x2 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x3Nor = 0.8 * ($x3 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x4Nor = 0.8 * ($x4 - $minIn) / ($maxIn - $minIn) + 0.1;
								$targetNor = 0.8 * ($t - $minIn) / ($maxIn - $minIn) + 0.1;

								//hitung nilai pada hidden layer
								$h1 = $bbiash1 + ($x1Nor * $bx1h1) + ($x2Nor * $bx2h1) + ($x3Nor * $bx3h1) + ($x4Nor * $bx4h1);
								$h2 = $bbiash2 + ($x1Nor * $bx1h2) + ($x2Nor * $bx2h2) + ($x3Nor * $bx3h2) + ($x4Nor * $bx4h2);
								$h1Sig = 1 / (1 + exp($h1 * -1));
								$h2Sig = 1 / (1 + exp($h2 * -1));

								//hitung nilai output
								$out = $bbiaso + ($h1Sig * $bh1) + ($h2Sig * $bh2);
								$outSig = 1 / (1 + exp($out * -1));
								$err = ($targetNor - $outSig);
								$error = pow($err, 2);
								$te = 0.3;
								global $dnf;
								$dn1 = ($maxIn - $minIn);
								$dn = $outSig * $dn1;
								$dnf = $dn + $minIn;
								if ($error > $te) {
									backpropagationBaju1($outSig, $targetNor, $h1Sig, $h2Sig, $bh1, $bh2, $x1Nor, $x2Nor, $x3Nor, $x4Nor, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bbiaso, $x1, $x2, $x3, $x4, $t);
								} else {
									// echo "Target =" . $targetNor . "<br>";
									// echo "Output =" . $outSig . "<br>";
									// $err = ($targetNor - $outSig);
									// $error = pow($err, 2);
									// echo "Error = " . $error . "<br><br>";
								}
							}
							function backpropagationBaju1($outSig, $targetNor, $h1Sig, $h2Sig, $bh1, $bh2, $x1Nor, $x2Nor, $x3Nor, $x4Nor, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bbiaso, $x1, $x2, $x3, $x4, $t)
							{
								$alpha = 0.1;

								//Persamaan lima
								$dk = ($targetNor - $outSig) * (1 - $outSig) * $outSig;
								// echo "<br>" . $dk;

								//Persamaan enam
								$deltawjk0 = $alpha * $dk;
								$deltawjk1 = $alpha * $dk * $h1Sig;
								$deltawjk2 = $alpha * $dk * $h2Sig;

								//Persamaan tujuh
								$din1 = $dk * $bh1;
								$din2 = $dk * $bh2;

								//Persamaan delapan
								$d1 = $din1 * $h1Sig * (1 - $h1Sig);
								$d2 = $din2 * $h2Sig * (1 - $h2Sig);

								//Persamaan sembilan VIJ Baru
								$x1h1n = $alpha * $d1 * $x1Nor;
								$x2h1n = $alpha * $d1 * $x2Nor;
								$x3h1n = $alpha * $d1 * $x3Nor;
								$x4h1n = $alpha * $d1 * $x4Nor;

								$x1h2n = $alpha * $d2 * $x1Nor;
								$x2h2n = $alpha * $d2 * $x2Nor;
								$x3h2n = $alpha * $d2 * $x3Nor;
								$x4h2n = $alpha * $d2 * $x4Nor;

								$deltav1 = $alpha * $d1;
								$deltav2 = $alpha * $d2;

								//Persamaan sepuluh
								$x1h1nn = $x1h1n +  $bx1h1;
								$x2h1nn = $x2h1n +  $bx2h1;
								$x3h1nn = $x3h1n +  $bx3h1;
								$x4h1nn = $x4h1n +  $bx4h1;

								$x1h2nn = $x1h2n +  $bx1h2;
								$x2h2nn = $x2h2n +  $bx2h2;
								$x3h2nn = $x3h2n +  $bx3h2;
								$x4h2nn = $x4h2n +  $bx4h2;

								//Persamaan sebelas
								$bbh1ko = $deltawjk1 + $bh1;
								$bbh2ko = $deltawjk2 + $bh2;

								$bibikh1 = $bbiash1 + $deltav1;
								$bibikh2 = $bbiash2 + $deltav2;

								$bibhki = $deltawjk0 + $bbiaso;

								feedForwardTrain($x1, $x2, $x3, $x4, $t, $x1h1nn, $x2h1nn, $x3h1nn, $x4h1nn, $x1h2nn, $x2h2nn, $x3h2nn, $x4h2nn, $bibikh1, $bibikh2, $bbh1ko, $bbh2ko, $bibhki);
							}
							feedForwardBaju1(45, 64, 62, 24, 55, $bx1h1n, $bx2h1n, $bx3h1n, $bx4h1n, $bx1h2n, $bx2h2n, $bx3h2n, $bx4h2n, $bbiash1n, $bbiash2n, $bh1n, $bh2n, $bbiason);
							$dbaju1 = round($dnf);
							//Baju2
							function feedForwardBaju2($x1, $x2, $x3, $x4, $t, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bh1, $bh2, $bbiaso)
							{
								$maxIn    = max($x1, $x2, $x3, $x4, $t);
								$minIn    = min($x1, $x2, $x3, $x4, $t);

								//normalisasi data input
								$x1Nor = 0.8 * ($x1 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x2Nor = 0.8 * ($x2 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x3Nor = 0.8 * ($x3 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x4Nor = 0.8 * ($x4 - $minIn) / ($maxIn - $minIn) + 0.1;
								$targetNor = 0.8 * ($t - $minIn) / ($maxIn - $minIn) + 0.1;

								//hitung nilai pada hidden layer
								$h1 = $bbiash1 + ($x1Nor * $bx1h1) + ($x2Nor * $bx2h1) + ($x3Nor * $bx3h1) + ($x4Nor * $bx4h1);
								$h2 = $bbiash2 + ($x1Nor * $bx1h2) + ($x2Nor * $bx2h2) + ($x3Nor * $bx3h2) + ($x4Nor * $bx4h2);
								$h1Sig = 1 / (1 + exp($h1 * -1));
								$h2Sig = 1 / (1 + exp($h2 * -1));

								//hitung nilai output
								$out = $bbiaso + ($h1Sig * $bh1) + ($h2Sig * $bh2);
								$outSig = 1 / (1 + exp($out * -1));
								$err = ($targetNor - $outSig);
								$error = pow($err, 2);
								$te = 0.3;
								global $dnf;
								$dn1 = ($maxIn - $minIn);
								$dn = $outSig * $dn1;
								$dnf = $dn + $minIn;
								if ($error > $te) {
									backpropagationBaju2($outSig, $targetNor, $h1Sig, $h2Sig, $bh1, $bh2, $x1Nor, $x2Nor, $x3Nor, $x4Nor, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bbiaso, $x1, $x2, $x3, $x4, $t);
								} else {
									// echo "Target =" . $targetNor . "<br>";
									// echo "Output =" . $outSig . "<br>";
									// $err = ($targetNor - $outSig);
									// $error = pow($err, 2);
									// echo "Error = " . $error . "<br><br>";
								}
							}
							function backpropagationBaju2($outSig, $targetNor, $h1Sig, $h2Sig, $bh1, $bh2, $x1Nor, $x2Nor, $x3Nor, $x4Nor, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bbiaso, $x1, $x2, $x3, $x4, $t)
							{
								$alpha = 0.1;

								//Persamaan lima
								$dk = ($targetNor - $outSig) * (1 - $outSig) * $outSig;
								// echo "<br>" . $dk;

								//Persamaan enam
								$deltawjk0 = $alpha * $dk;
								$deltawjk1 = $alpha * $dk * $h1Sig;
								$deltawjk2 = $alpha * $dk * $h2Sig;

								//Persamaan tujuh
								$din1 = $dk * $bh1;
								$din2 = $dk * $bh2;

								//Persamaan delapan
								$d1 = $din1 * $h1Sig * (1 - $h1Sig);
								$d2 = $din2 * $h2Sig * (1 - $h2Sig);

								//Persamaan sembilan VIJ Baru
								$x1h1n = $alpha * $d1 * $x1Nor;
								$x2h1n = $alpha * $d1 * $x2Nor;
								$x3h1n = $alpha * $d1 * $x3Nor;
								$x4h1n = $alpha * $d1 * $x4Nor;

								$x1h2n = $alpha * $d2 * $x1Nor;
								$x2h2n = $alpha * $d2 * $x2Nor;
								$x3h2n = $alpha * $d2 * $x3Nor;
								$x4h2n = $alpha * $d2 * $x4Nor;

								$deltav1 = $alpha * $d1;
								$deltav2 = $alpha * $d2;

								//Persamaan sepuluh
								$x1h1nn = $x1h1n +  $bx1h1;
								$x2h1nn = $x2h1n +  $bx2h1;
								$x3h1nn = $x3h1n +  $bx3h1;
								$x4h1nn = $x4h1n +  $bx4h1;

								$x1h2nn = $x1h2n +  $bx1h2;
								$x2h2nn = $x2h2n +  $bx2h2;
								$x3h2nn = $x3h2n +  $bx3h2;
								$x4h2nn = $x4h2n +  $bx4h2;

								//Persamaan sebelas
								$bbh1ko = $deltawjk1 + $bh1;
								$bbh2ko = $deltawjk2 + $bh2;

								$bibikh1 = $bbiash1 + $deltav1;
								$bibikh2 = $bbiash2 + $deltav2;

								$bibhki = $deltawjk0 + $bbiaso;

								feedForwardBaju2($x1, $x2, $x3, $x4, $t, $x1h1nn, $x2h1nn, $x3h1nn, $x4h1nn, $x1h2nn, $x2h2nn, $x3h2nn, $x4h2nn, $bibikh1, $bibikh2, $bbh1ko, $bbh2ko, $bibhki);
							}
							feedForwardBaju2(30, 46, 53, 54, 19, $bx1h1n, $bx2h1n, $bx3h1n, $bx4h1n, $bx1h2n, $bx2h2n, $bx3h2n, $bx4h2n, $bbiash1n, $bbiash2n, $bh1n, $bh2n, $bbiason);
							$dbaju2 = round($dnf);
							$arbaju = [$dbaju1, $dbaju2];







							// ($x1, $x2, $x3, $x4, $t, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bh1, $bh2, $bbiaso
							//Celana1
							function feedForwardCelana1($x1, $x2, $x3, $x4, $t, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bh1, $bh2, $bbiaso)
							{
								$maxIn    = max($x1, $x2, $x3, $x4, $t);
								$minIn    = min($x1, $x2, $x3, $x4, $t);

								//normalisasi data input
								$x1Nor = 0.8 * ($x1 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x2Nor = 0.8 * ($x2 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x3Nor = 0.8 * ($x3 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x4Nor = 0.8 * ($x4 - $minIn) / ($maxIn - $minIn) + 0.1;
								$targetNor = 0.8 * ($t - $minIn) / ($maxIn - $minIn) + 0.1;

								//hitung nilai pada hidden layer
								$h1 = $bbiash1 + ($x1Nor * $bx1h1) + ($x2Nor * $bx2h1) + ($x3Nor * $bx3h1) + ($x4Nor * $bx4h1);
								$h2 = $bbiash2 + ($x1Nor * $bx1h2) + ($x2Nor * $bx2h2) + ($x3Nor * $bx3h2) + ($x4Nor * $bx4h2);
								$h1Sig = 1 / (1 + exp($h1 * -1));
								$h2Sig = 1 / (1 + exp($h2 * -1));

								//hitung nilai output
								$out = $bbiaso + ($h1Sig * $bh1) + ($h2Sig * $bh2);
								$outSig = 1 / (1 + exp($out * -1));
								$err = ($targetNor - $outSig);
								$error = pow($err, 2);
								$te = 0.3;
								global $dnf;
								$dn1 = ($maxIn - $minIn);
								$dn = $outSig * $dn1;
								$dnf = $dn + $minIn;
								if ($error > $te) {
									backpropagationCelana1($outSig, $targetNor, $h1Sig, $h2Sig, $bh1, $bh2, $x1Nor, $x2Nor, $x3Nor, $x4Nor, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bbiaso, $x1, $x2, $x3, $x4, $t);
								} else {
									// echo "Target =" . $targetNor . "<br>";
									// echo "Output =" . $outSig . "<br>";
									// $err = ($targetNor - $outSig);
									// $error = pow($err, 2);
									// echo "Error = " . $error . "<br><br>";
								}
							}
							function backpropagationCelana1($outSig, $targetNor, $h1Sig, $h2Sig, $bh1, $bh2, $x1Nor, $x2Nor, $x3Nor, $x4Nor, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bbiaso, $x1, $x2, $x3, $x4, $t)
							{
								$alpha = 0.1;

								//Persamaan lima
								$dk = ($targetNor - $outSig) * (1 - $outSig) * $outSig;
								// echo "<br>" . $dk;

								//Persamaan enam
								$deltawjk0 = $alpha * $dk;
								$deltawjk1 = $alpha * $dk * $h1Sig;
								$deltawjk2 = $alpha * $dk * $h2Sig;

								//Persamaan tujuh
								$din1 = $dk * $bh1;
								$din2 = $dk * $bh2;

								//Persamaan delapan
								$d1 = $din1 * $h1Sig * (1 - $h1Sig);
								$d2 = $din2 * $h2Sig * (1 - $h2Sig);

								//Persamaan sembilan VIJ Baru
								$x1h1n = $alpha * $d1 * $x1Nor;
								$x2h1n = $alpha * $d1 * $x2Nor;
								$x3h1n = $alpha * $d1 * $x3Nor;
								$x4h1n = $alpha * $d1 * $x4Nor;

								$x1h2n = $alpha * $d2 * $x1Nor;
								$x2h2n = $alpha * $d2 * $x2Nor;
								$x3h2n = $alpha * $d2 * $x3Nor;
								$x4h2n = $alpha * $d2 * $x4Nor;

								$deltav1 = $alpha * $d1;
								$deltav2 = $alpha * $d2;

								//Persamaan sepuluh
								$x1h1nn = $x1h1n +  $bx1h1;
								$x2h1nn = $x2h1n +  $bx2h1;
								$x3h1nn = $x3h1n +  $bx3h1;
								$x4h1nn = $x4h1n +  $bx4h1;

								$x1h2nn = $x1h2n +  $bx1h2;
								$x2h2nn = $x2h2n +  $bx2h2;
								$x3h2nn = $x3h2n +  $bx3h2;
								$x4h2nn = $x4h2n +  $bx4h2;

								//Persamaan sebelas
								$bbh1ko = $deltawjk1 + $bh1;
								$bbh2ko = $deltawjk2 + $bh2;

								$bibikh1 = $bbiash1 + $deltav1;
								$bibikh2 = $bbiash2 + $deltav2;

								$bibhki = $deltawjk0 + $bbiaso;

								feedForwardTrain($x1, $x2, $x3, $x4, $t, $x1h1nn, $x2h1nn, $x3h1nn, $x4h1nn, $x1h2nn, $x2h2nn, $x3h2nn, $x4h2nn, $bibikh1, $bibikh2, $bbh1ko, $bbh2ko, $bibhki);
							}
							feedForwardCelana1(33, 64, 48, 30, 23,	$bx1h1n, $bx2h1n, $bx3h1n, $bx4h1n, $bx1h2n, $bx2h2n, $bx3h2n, $bx4h2n, $bbiash1n, $bbiash2n, $bh1n, $bh2n, $bbiason);
							$dcelana1 = round($dnf);
							//Celana2
							function feedForwardCelana2($x1, $x2, $x3, $x4, $t, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bh1, $bh2, $bbiaso)
							{
								$maxIn    = max($x1, $x2, $x3, $x4, $t);
								$minIn    = min($x1, $x2, $x3, $x4, $t);

								//normalisasi data input
								$x1Nor = 0.8 * ($x1 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x2Nor = 0.8 * ($x2 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x3Nor = 0.8 * ($x3 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x4Nor = 0.8 * ($x4 - $minIn) / ($maxIn - $minIn) + 0.1;
								$targetNor = 0.8 * ($t - $minIn) / ($maxIn - $minIn) + 0.1;

								//hitung nilai pada hidden layer
								$h1 = $bbiash1 + ($x1Nor * $bx1h1) + ($x2Nor * $bx2h1) + ($x3Nor * $bx3h1) + ($x4Nor * $bx4h1);
								$h2 = $bbiash2 + ($x1Nor * $bx1h2) + ($x2Nor * $bx2h2) + ($x3Nor * $bx3h2) + ($x4Nor * $bx4h2);
								$h1Sig = 1 / (1 + exp($h1 * -1));
								$h2Sig = 1 / (1 + exp($h2 * -1));

								//hitung nilai output
								$out = $bbiaso + ($h1Sig * $bh1) + ($h2Sig * $bh2);
								$outSig = 1 / (1 + exp($out * -1));
								$err = ($targetNor - $outSig);
								$error = pow($err, 2);
								$te = 0.3;
								global $dnf;
								$dn1 = ($maxIn - $minIn);
								$dn = $outSig * $dn1;
								$dnf = $dn + $minIn;
								if ($error > $te) {
									backpropagationCelana2($outSig, $targetNor, $h1Sig, $h2Sig, $bh1, $bh2, $x1Nor, $x2Nor, $x3Nor, $x4Nor, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bbiaso, $x1, $x2, $x3, $x4, $t);
								} else {
									// echo "Target =" . $targetNor . "<br>";
									// echo "Output =" . $outSig . "<br>";
									// $err = ($targetNor - $outSig);
									// $error = pow($err, 2);
									// echo "Error = " . $error . "<br><br>";
								}
							}
							function backpropagationCelana2($outSig, $targetNor, $h1Sig, $h2Sig, $bh1, $bh2, $x1Nor, $x2Nor, $x3Nor, $x4Nor, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bbiaso, $x1, $x2, $x3, $x4, $t)
							{
								$alpha = 0.1;

								//Persamaan lima
								$dk = ($targetNor - $outSig) * (1 - $outSig) * $outSig;
								// echo "<br>" . $dk;

								//Persamaan enam
								$deltawjk0 = $alpha * $dk;
								$deltawjk1 = $alpha * $dk * $h1Sig;
								$deltawjk2 = $alpha * $dk * $h2Sig;

								//Persamaan tujuh
								$din1 = $dk * $bh1;
								$din2 = $dk * $bh2;

								//Persamaan delapan
								$d1 = $din1 * $h1Sig * (1 - $h1Sig);
								$d2 = $din2 * $h2Sig * (1 - $h2Sig);

								//Persamaan sembilan VIJ Baru
								$x1h1n = $alpha * $d1 * $x1Nor;
								$x2h1n = $alpha * $d1 * $x2Nor;
								$x3h1n = $alpha * $d1 * $x3Nor;
								$x4h1n = $alpha * $d1 * $x4Nor;

								$x1h2n = $alpha * $d2 * $x1Nor;
								$x2h2n = $alpha * $d2 * $x2Nor;
								$x3h2n = $alpha * $d2 * $x3Nor;
								$x4h2n = $alpha * $d2 * $x4Nor;

								$deltav1 = $alpha * $d1;
								$deltav2 = $alpha * $d2;

								//Persamaan sepuluh
								$x1h1nn = $x1h1n +  $bx1h1;
								$x2h1nn = $x2h1n +  $bx2h1;
								$x3h1nn = $x3h1n +  $bx3h1;
								$x4h1nn = $x4h1n +  $bx4h1;

								$x1h2nn = $x1h2n +  $bx1h2;
								$x2h2nn = $x2h2n +  $bx2h2;
								$x3h2nn = $x3h2n +  $bx3h2;
								$x4h2nn = $x4h2n +  $bx4h2;

								//Persamaan sebelas
								$bbh1ko = $deltawjk1 + $bh1;
								$bbh2ko = $deltawjk2 + $bh2;

								$bibikh1 = $bbiash1 + $deltav1;
								$bibikh2 = $bbiash2 + $deltav2;

								$bibhki = $deltawjk0 + $bbiaso;

								feedForwardCelana2($x1, $x2, $x3, $x4, $t, $x1h1nn, $x2h1nn, $x3h1nn, $x4h1nn, $x1h2nn, $x2h2nn, $x3h2nn, $x4h2nn, $bibikh1, $bibikh2, $bbh1ko, $bbh2ko, $bibhki);
							}
							feedForwardCelana2(68,	29,	42,	48,	28, $bx1h1n, $bx2h1n, $bx3h1n, $bx4h1n, $bx1h2n, $bx2h2n, $bx3h2n, $bx4h2n, $bbiash1n, $bbiash2n, $bh1n, $bh2n, $bbiason);
							$dcelana2 = round($dnf);
							$arcelana = [$dcelana1, $dcelana2];







							// ($x1, $x2, $x3, $x4, $t, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bh1, $bh2, $bbiaso
							//Dompet1
							function feedForwardDompet1($x1, $x2, $x3, $x4, $t, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bh1, $bh2, $bbiaso)
							{
								$maxIn    = max($x1, $x2, $x3, $x4, $t);
								$minIn    = min($x1, $x2, $x3, $x4, $t);

								//normalisasi data input
								$x1Nor = 0.8 * ($x1 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x2Nor = 0.8 * ($x2 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x3Nor = 0.8 * ($x3 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x4Nor = 0.8 * ($x4 - $minIn) / ($maxIn - $minIn) + 0.1;
								$targetNor = 0.8 * ($t - $minIn) / ($maxIn - $minIn) + 0.1;

								//hitung nilai pada hidden layer
								$h1 = $bbiash1 + ($x1Nor * $bx1h1) + ($x2Nor * $bx2h1) + ($x3Nor * $bx3h1) + ($x4Nor * $bx4h1);
								$h2 = $bbiash2 + ($x1Nor * $bx1h2) + ($x2Nor * $bx2h2) + ($x3Nor * $bx3h2) + ($x4Nor * $bx4h2);
								$h1Sig = 1 / (1 + exp($h1 * -1));
								$h2Sig = 1 / (1 + exp($h2 * -1));

								//hitung nilai output
								$out = $bbiaso + ($h1Sig * $bh1) + ($h2Sig * $bh2);
								$outSig = 1 / (1 + exp($out * -1));
								$err = ($targetNor - $outSig);
								$error = pow($err, 2);
								$te = 0.3;
								global $dnf;
								$dn1 = ($maxIn - $minIn);
								$dn = $outSig * $dn1;
								$dnf = $dn + $minIn;
								if ($error > $te) {
									backpropagationDompet1($outSig, $targetNor, $h1Sig, $h2Sig, $bh1, $bh2, $x1Nor, $x2Nor, $x3Nor, $x4Nor, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bbiaso, $x1, $x2, $x3, $x4, $t);
								} else {
									// echo "Target =" . $targetNor . "<br>";
									// echo "Output =" . $outSig . "<br>";
									// $err = ($targetNor - $outSig);
									// $error = pow($err, 2);
									// echo "Error = " . $error . "<br><br>";
								}
							}
							function backpropagationDompet1($outSig, $targetNor, $h1Sig, $h2Sig, $bh1, $bh2, $x1Nor, $x2Nor, $x3Nor, $x4Nor, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bbiaso, $x1, $x2, $x3, $x4, $t)
							{
								$alpha = 0.1;

								//Persamaan lima
								$dk = ($targetNor - $outSig) * (1 - $outSig) * $outSig;
								// echo "<br>" . $dk;

								//Persamaan enam
								$deltawjk0 = $alpha * $dk;
								$deltawjk1 = $alpha * $dk * $h1Sig;
								$deltawjk2 = $alpha * $dk * $h2Sig;

								//Persamaan tujuh
								$din1 = $dk * $bh1;
								$din2 = $dk * $bh2;

								//Persamaan delapan
								$d1 = $din1 * $h1Sig * (1 - $h1Sig);
								$d2 = $din2 * $h2Sig * (1 - $h2Sig);

								//Persamaan sembilan VIJ Baru
								$x1h1n = $alpha * $d1 * $x1Nor;
								$x2h1n = $alpha * $d1 * $x2Nor;
								$x3h1n = $alpha * $d1 * $x3Nor;
								$x4h1n = $alpha * $d1 * $x4Nor;

								$x1h2n = $alpha * $d2 * $x1Nor;
								$x2h2n = $alpha * $d2 * $x2Nor;
								$x3h2n = $alpha * $d2 * $x3Nor;
								$x4h2n = $alpha * $d2 * $x4Nor;

								$deltav1 = $alpha * $d1;
								$deltav2 = $alpha * $d2;

								//Persamaan sepuluh
								$x1h1nn = $x1h1n +  $bx1h1;
								$x2h1nn = $x2h1n +  $bx2h1;
								$x3h1nn = $x3h1n +  $bx3h1;
								$x4h1nn = $x4h1n +  $bx4h1;

								$x1h2nn = $x1h2n +  $bx1h2;
								$x2h2nn = $x2h2n +  $bx2h2;
								$x3h2nn = $x3h2n +  $bx3h2;
								$x4h2nn = $x4h2n +  $bx4h2;

								//Persamaan sebelas
								$bbh1ko = $deltawjk1 + $bh1;
								$bbh2ko = $deltawjk2 + $bh2;

								$bibikh1 = $bbiash1 + $deltav1;
								$bibikh2 = $bbiash2 + $deltav2;

								$bibhki = $deltawjk0 + $bbiaso;

								feedForwardTrain($x1, $x2, $x3, $x4, $t, $x1h1nn, $x2h1nn, $x3h1nn, $x4h1nn, $x1h2nn, $x2h2nn, $x3h2nn, $x4h2nn, $bibikh1, $bibikh2, $bbh1ko, $bbh2ko, $bibhki);
							}
							feedForwardDompet1(40, 74,	22,	69,	40,	$bx1h1n, $bx2h1n, $bx3h1n, $bx4h1n, $bx1h2n, $bx2h2n, $bx3h2n, $bx4h2n, $bbiash1n, $bbiash2n, $bh1n, $bh2n, $bbiason);
							$ddompet1 = round($dnf);
							//Dompet2
							function feedForwardDompet2($x1, $x2, $x3, $x4, $t, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bh1, $bh2, $bbiaso)
							{
								$maxIn    = max($x1, $x2, $x3, $x4, $t);
								$minIn    = min($x1, $x2, $x3, $x4, $t);

								//normalisasi data input
								$x1Nor = 0.8 * ($x1 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x2Nor = 0.8 * ($x2 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x3Nor = 0.8 * ($x3 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x4Nor = 0.8 * ($x4 - $minIn) / ($maxIn - $minIn) + 0.1;
								$targetNor = 0.8 * ($t - $minIn) / ($maxIn - $minIn) + 0.1;

								//hitung nilai pada hidden layer
								$h1 = $bbiash1 + ($x1Nor * $bx1h1) + ($x2Nor * $bx2h1) + ($x3Nor * $bx3h1) + ($x4Nor * $bx4h1);
								$h2 = $bbiash2 + ($x1Nor * $bx1h2) + ($x2Nor * $bx2h2) + ($x3Nor * $bx3h2) + ($x4Nor * $bx4h2);
								$h1Sig = 1 / (1 + exp($h1 * -1));
								$h2Sig = 1 / (1 + exp($h2 * -1));

								//hitung nilai output
								$out = $bbiaso + ($h1Sig * $bh1) + ($h2Sig * $bh2);
								$outSig = 1 / (1 + exp($out * -1));
								$err = ($targetNor - $outSig);
								$error = pow($err, 2);
								$te = 0.3;
								global $dnf;
								$dn1 = ($maxIn - $minIn);
								$dn = $outSig * $dn1;
								$dnf = $dn + $minIn;
								if ($error > $te) {
									backpropagationDompet2($outSig, $targetNor, $h1Sig, $h2Sig, $bh1, $bh2, $x1Nor, $x2Nor, $x3Nor, $x4Nor, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bbiaso, $x1, $x2, $x3, $x4, $t);
								} else {
									// echo "Target =" . $targetNor . "<br>";
									// echo "Output =" . $outSig . "<br>";
									// $err = ($targetNor - $outSig);
									// $error = pow($err, 2);
									// echo "Error = " . $error . "<br><br>";
								}
							}
							function backpropagationDompet2($outSig, $targetNor, $h1Sig, $h2Sig, $bh1, $bh2, $x1Nor, $x2Nor, $x3Nor, $x4Nor, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bbiaso, $x1, $x2, $x3, $x4, $t)
							{
								$alpha = 0.1;

								//Persamaan lima
								$dk = ($targetNor - $outSig) * (1 - $outSig) * $outSig;
								// echo "<br>" . $dk;

								//Persamaan enam
								$deltawjk0 = $alpha * $dk;
								$deltawjk1 = $alpha * $dk * $h1Sig;
								$deltawjk2 = $alpha * $dk * $h2Sig;

								//Persamaan tujuh
								$din1 = $dk * $bh1;
								$din2 = $dk * $bh2;

								//Persamaan delapan
								$d1 = $din1 * $h1Sig * (1 - $h1Sig);
								$d2 = $din2 * $h2Sig * (1 - $h2Sig);

								//Persamaan sembilan VIJ Baru
								$x1h1n = $alpha * $d1 * $x1Nor;
								$x2h1n = $alpha * $d1 * $x2Nor;
								$x3h1n = $alpha * $d1 * $x3Nor;
								$x4h1n = $alpha * $d1 * $x4Nor;

								$x1h2n = $alpha * $d2 * $x1Nor;
								$x2h2n = $alpha * $d2 * $x2Nor;
								$x3h2n = $alpha * $d2 * $x3Nor;
								$x4h2n = $alpha * $d2 * $x4Nor;

								$deltav1 = $alpha * $d1;
								$deltav2 = $alpha * $d2;

								//Persamaan sepuluh
								$x1h1nn = $x1h1n +  $bx1h1;
								$x2h1nn = $x2h1n +  $bx2h1;
								$x3h1nn = $x3h1n +  $bx3h1;
								$x4h1nn = $x4h1n +  $bx4h1;

								$x1h2nn = $x1h2n +  $bx1h2;
								$x2h2nn = $x2h2n +  $bx2h2;
								$x3h2nn = $x3h2n +  $bx3h2;
								$x4h2nn = $x4h2n +  $bx4h2;

								//Persamaan sebelas
								$bbh1ko = $deltawjk1 + $bh1;
								$bbh2ko = $deltawjk2 + $bh2;

								$bibikh1 = $bbiash1 + $deltav1;
								$bibikh2 = $bbiash2 + $deltav2;

								$bibhki = $deltawjk0 + $bbiaso;

								feedForwardDompet2($x1, $x2, $x3, $x4, $t, $x1h1nn, $x2h1nn, $x3h1nn, $x4h1nn, $x1h2nn, $x2h2nn, $x3h2nn, $x4h2nn, $bibikh1, $bibikh2, $bbh1ko, $bbh2ko, $bibhki);
							}
							feedForwardDompet2(74, 64,	92,	50,	62, $bx1h1n, $bx2h1n, $bx3h1n, $bx4h1n, $bx1h2n, $bx2h2n, $bx3h2n, $bx4h2n, $bbiash1n, $bbiash2n, $bh1n, $bh2n, $bbiason);
							$ddompet2 = round($dnf);
							$ardompet = [$ddompet1, $ddompet2];






							// ($x1, $x2, $x3, $x4, $t, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bh1, $bh2, $bbiaso
							//Sepatu
							function feedForwardSepatu1($x1, $x2, $x3, $x4, $t, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bh1, $bh2, $bbiaso)
							{
								$maxIn    = max($x1, $x2, $x3, $x4, $t);
								$minIn    = min($x1, $x2, $x3, $x4, $t);

								//normalisasi data input
								$x1Nor = 0.8 * ($x1 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x2Nor = 0.8 * ($x2 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x3Nor = 0.8 * ($x3 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x4Nor = 0.8 * ($x4 - $minIn) / ($maxIn - $minIn) + 0.1;
								$targetNor = 0.8 * ($t - $minIn) / ($maxIn - $minIn) + 0.1;

								//hitung nilai pada hidden layer
								$h1 = $bbiash1 + ($x1Nor * $bx1h1) + ($x2Nor * $bx2h1) + ($x3Nor * $bx3h1) + ($x4Nor * $bx4h1);
								$h2 = $bbiash2 + ($x1Nor * $bx1h2) + ($x2Nor * $bx2h2) + ($x3Nor * $bx3h2) + ($x4Nor * $bx4h2);
								$h1Sig = 1 / (1 + exp($h1 * -1));
								$h2Sig = 1 / (1 + exp($h2 * -1));

								//hitung nilai output
								$out = $bbiaso + ($h1Sig * $bh1) + ($h2Sig * $bh2);
								$outSig = 1 / (1 + exp($out * -1));
								$err = ($targetNor - $outSig);
								$error = pow($err, 2);
								$te = 0.3;
								global $dnf;
								$dn1 = ($maxIn - $minIn);
								$dn = $outSig * $dn1;
								$dnf = $dn + $minIn;
								if ($error > $te) {
									backpropagationSepatu1($outSig, $targetNor, $h1Sig, $h2Sig, $bh1, $bh2, $x1Nor, $x2Nor, $x3Nor, $x4Nor, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bbiaso, $x1, $x2, $x3, $x4, $t);
								} else {
									// echo "Target =" . $targetNor . "<br>";
									// echo "Output =" . $outSig . "<br>";
									// $err = ($targetNor - $outSig);
									// $error = pow($err, 2);
									// echo "Error = " . $error . "<br><br>";
								}
							}
							function backpropagationSepatu1($outSig, $targetNor, $h1Sig, $h2Sig, $bh1, $bh2, $x1Nor, $x2Nor, $x3Nor, $x4Nor, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bbiaso, $x1, $x2, $x3, $x4, $t)
							{
								$alpha = 0.1;

								//Persamaan lima
								$dk = ($targetNor - $outSig) * (1 - $outSig) * $outSig;
								// echo "<br>" . $dk;

								//Persamaan enam
								$deltawjk0 = $alpha * $dk;
								$deltawjk1 = $alpha * $dk * $h1Sig;
								$deltawjk2 = $alpha * $dk * $h2Sig;

								//Persamaan tujuh
								$din1 = $dk * $bh1;
								$din2 = $dk * $bh2;

								//Persamaan delapan
								$d1 = $din1 * $h1Sig * (1 - $h1Sig);
								$d2 = $din2 * $h2Sig * (1 - $h2Sig);

								//Persamaan sembilan VIJ Baru
								$x1h1n = $alpha * $d1 * $x1Nor;
								$x2h1n = $alpha * $d1 * $x2Nor;
								$x3h1n = $alpha * $d1 * $x3Nor;
								$x4h1n = $alpha * $d1 * $x4Nor;

								$x1h2n = $alpha * $d2 * $x1Nor;
								$x2h2n = $alpha * $d2 * $x2Nor;
								$x3h2n = $alpha * $d2 * $x3Nor;
								$x4h2n = $alpha * $d2 * $x4Nor;

								$deltav1 = $alpha * $d1;
								$deltav2 = $alpha * $d2;

								//Persamaan sepuluh
								$x1h1nn = $x1h1n +  $bx1h1;
								$x2h1nn = $x2h1n +  $bx2h1;
								$x3h1nn = $x3h1n +  $bx3h1;
								$x4h1nn = $x4h1n +  $bx4h1;

								$x1h2nn = $x1h2n +  $bx1h2;
								$x2h2nn = $x2h2n +  $bx2h2;
								$x3h2nn = $x3h2n +  $bx3h2;
								$x4h2nn = $x4h2n +  $bx4h2;

								//Persamaan sebelas
								$bbh1ko = $deltawjk1 + $bh1;
								$bbh2ko = $deltawjk2 + $bh2;

								$bibikh1 = $bbiash1 + $deltav1;
								$bibikh2 = $bbiash2 + $deltav2;

								$bibhki = $deltawjk0 + $bbiaso;

								feedForwardTrain($x1, $x2, $x3, $x4, $t, $x1h1nn, $x2h1nn, $x3h1nn, $x4h1nn, $x1h2nn, $x2h2nn, $x3h2nn, $x4h2nn, $bibikh1, $bibikh2, $bbh1ko, $bbh2ko, $bibhki);
							}
							feedForwardSepatu1(53, 51,	30,	71,	52,	$bx1h1n, $bx2h1n, $bx3h1n, $bx4h1n, $bx1h2n, $bx2h2n, $bx3h2n, $bx4h2n, $bbiash1n, $bbiash2n, $bh1n, $bh2n, $bbiason);
							$dsepatu1 = round($dnf);
							//Sepatu2
							function feedForwardSepatu2($x1, $x2, $x3, $x4, $t, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bh1, $bh2, $bbiaso)
							{
								$maxIn    = max($x1, $x2, $x3, $x4, $t);
								$minIn    = min($x1, $x2, $x3, $x4, $t);

								//normalisasi data input
								$x1Nor = 0.8 * ($x1 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x2Nor = 0.8 * ($x2 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x3Nor = 0.8 * ($x3 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x4Nor = 0.8 * ($x4 - $minIn) / ($maxIn - $minIn) + 0.1;
								$targetNor = 0.8 * ($t - $minIn) / ($maxIn - $minIn) + 0.1;

								//hitung nilai pada hidden layer
								$h1 = $bbiash1 + ($x1Nor * $bx1h1) + ($x2Nor * $bx2h1) + ($x3Nor * $bx3h1) + ($x4Nor * $bx4h1);
								$h2 = $bbiash2 + ($x1Nor * $bx1h2) + ($x2Nor * $bx2h2) + ($x3Nor * $bx3h2) + ($x4Nor * $bx4h2);
								$h1Sig = 1 / (1 + exp($h1 * -1));
								$h2Sig = 1 / (1 + exp($h2 * -1));

								//hitung nilai output
								$out = $bbiaso + ($h1Sig * $bh1) + ($h2Sig * $bh2);
								$outSig = 1 / (1 + exp($out * -1));
								$err = ($targetNor - $outSig);
								$error = pow($err, 2);
								$te = 0.3;
								global $dnf;
								$dn1 = ($maxIn - $minIn);
								$dn = $outSig * $dn1;
								$dnf = $dn + $minIn;
								if ($error > $te) {
									backpropagationSepatu2($outSig, $targetNor, $h1Sig, $h2Sig, $bh1, $bh2, $x1Nor, $x2Nor, $x3Nor, $x4Nor, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bbiaso, $x1, $x2, $x3, $x4, $t);
								} else {
									// echo "Target =" . $targetNor . "<br>";
									// echo "Output =" . $outSig . "<br>";
									// $err = ($targetNor - $outSig);
									// $error = pow($err, 2);
									// echo "Error = " . $error . "<br><br>";
								}
							}
							function backpropagationSepatu2($outSig, $targetNor, $h1Sig, $h2Sig, $bh1, $bh2, $x1Nor, $x2Nor, $x3Nor, $x4Nor, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bbiaso, $x1, $x2, $x3, $x4, $t)
							{
								$alpha = 0.1;

								//Persamaan lima
								$dk = ($targetNor - $outSig) * (1 - $outSig) * $outSig;
								// echo "<br>" . $dk;

								//Persamaan enam
								$deltawjk0 = $alpha * $dk;
								$deltawjk1 = $alpha * $dk * $h1Sig;
								$deltawjk2 = $alpha * $dk * $h2Sig;

								//Persamaan tujuh
								$din1 = $dk * $bh1;
								$din2 = $dk * $bh2;

								//Persamaan delapan
								$d1 = $din1 * $h1Sig * (1 - $h1Sig);
								$d2 = $din2 * $h2Sig * (1 - $h2Sig);

								//Persamaan sembilan VIJ Baru
								$x1h1n = $alpha * $d1 * $x1Nor;
								$x2h1n = $alpha * $d1 * $x2Nor;
								$x3h1n = $alpha * $d1 * $x3Nor;
								$x4h1n = $alpha * $d1 * $x4Nor;

								$x1h2n = $alpha * $d2 * $x1Nor;
								$x2h2n = $alpha * $d2 * $x2Nor;
								$x3h2n = $alpha * $d2 * $x3Nor;
								$x4h2n = $alpha * $d2 * $x4Nor;

								$deltav1 = $alpha * $d1;
								$deltav2 = $alpha * $d2;

								//Persamaan sepuluh
								$x1h1nn = $x1h1n +  $bx1h1;
								$x2h1nn = $x2h1n +  $bx2h1;
								$x3h1nn = $x3h1n +  $bx3h1;
								$x4h1nn = $x4h1n +  $bx4h1;

								$x1h2nn = $x1h2n +  $bx1h2;
								$x2h2nn = $x2h2n +  $bx2h2;
								$x3h2nn = $x3h2n +  $bx3h2;
								$x4h2nn = $x4h2n +  $bx4h2;

								//Persamaan sebelas
								$bbh1ko = $deltawjk1 + $bh1;
								$bbh2ko = $deltawjk2 + $bh2;

								$bibikh1 = $bbiash1 + $deltav1;
								$bibikh2 = $bbiash2 + $deltav2;

								$bibhki = $deltawjk0 + $bbiaso;

								feedForwardSepatu2($x1, $x2, $x3, $x4, $t, $x1h1nn, $x2h1nn, $x3h1nn, $x4h1nn, $x1h2nn, $x2h2nn, $x3h2nn, $x4h2nn, $bibikh1, $bibikh2, $bbh1ko, $bbh2ko, $bibhki);
							}
							feedForwardSepatu2(38, 80, 44,	49, 52,	$bx1h1n, $bx2h1n, $bx3h1n, $bx4h1n, $bx1h2n, $bx2h2n, $bx3h2n, $bx4h2n, $bbiash1n, $bbiash2n, $bh1n, $bh2n, $bbiason);
							$dsepatu2 = round($dnf);
							$arsepatu = [$dsepatu1, $dsepatu2];






							// ($x1, $x2, $x3, $x4, $t, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bh1, $bh2, $bbiaso
							//Jaket1
							function feedForwardJaket1($x1, $x2, $x3, $x4, $t, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bh1, $bh2, $bbiaso)
							{
								$maxIn    = max($x1, $x2, $x3, $x4, $t);
								$minIn    = min($x1, $x2, $x3, $x4, $t);

								//normalisasi data input
								$x1Nor = 0.8 * ($x1 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x2Nor = 0.8 * ($x2 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x3Nor = 0.8 * ($x3 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x4Nor = 0.8 * ($x4 - $minIn) / ($maxIn - $minIn) + 0.1;
								$targetNor = 0.8 * ($t - $minIn) / ($maxIn - $minIn) + 0.1;

								//hitung nilai pada hidden layer
								$h1 = $bbiash1 + ($x1Nor * $bx1h1) + ($x2Nor * $bx2h1) + ($x3Nor * $bx3h1) + ($x4Nor * $bx4h1);
								$h2 = $bbiash2 + ($x1Nor * $bx1h2) + ($x2Nor * $bx2h2) + ($x3Nor * $bx3h2) + ($x4Nor * $bx4h2);
								$h1Sig = 1 / (1 + exp($h1 * -1));
								$h2Sig = 1 / (1 + exp($h2 * -1));

								//hitung nilai output
								$out = $bbiaso + ($h1Sig * $bh1) + ($h2Sig * $bh2);
								$outSig = 1 / (1 + exp($out * -1));
								$err = ($targetNor - $outSig);
								$error = pow($err, 2);
								$te = 0.3;
								global $dnf;
								$dn1 = ($maxIn - $minIn);
								$dn = $outSig * $dn1;
								$dnf = $dn + $minIn;
								if ($error > $te) {
									backpropagationJaket1($outSig, $targetNor, $h1Sig, $h2Sig, $bh1, $bh2, $x1Nor, $x2Nor, $x3Nor, $x4Nor, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bbiaso, $x1, $x2, $x3, $x4, $t);
								} else {
									// echo "Target =" . $targetNor . "<br>";
									// echo "Output =" . $outSig . "<br>";
									// $err = ($targetNor - $outSig);
									// $error = pow($err, 2);
									// echo "Error = " . $error . "<br><br>";
								}
							}
							function backpropagationJaket1($outSig, $targetNor, $h1Sig, $h2Sig, $bh1, $bh2, $x1Nor, $x2Nor, $x3Nor, $x4Nor, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bbiaso, $x1, $x2, $x3, $x4, $t)
							{
								$alpha = 0.1;

								//Persamaan lima
								$dk = ($targetNor - $outSig) * (1 - $outSig) * $outSig;
								// echo "<br>" . $dk;

								//Persamaan enam
								$deltawjk0 = $alpha * $dk;
								$deltawjk1 = $alpha * $dk * $h1Sig;
								$deltawjk2 = $alpha * $dk * $h2Sig;

								//Persamaan tujuh
								$din1 = $dk * $bh1;
								$din2 = $dk * $bh2;

								//Persamaan delapan
								$d1 = $din1 * $h1Sig * (1 - $h1Sig);
								$d2 = $din2 * $h2Sig * (1 - $h2Sig);

								//Persamaan sembilan VIJ Baru
								$x1h1n = $alpha * $d1 * $x1Nor;
								$x2h1n = $alpha * $d1 * $x2Nor;
								$x3h1n = $alpha * $d1 * $x3Nor;
								$x4h1n = $alpha * $d1 * $x4Nor;

								$x1h2n = $alpha * $d2 * $x1Nor;
								$x2h2n = $alpha * $d2 * $x2Nor;
								$x3h2n = $alpha * $d2 * $x3Nor;
								$x4h2n = $alpha * $d2 * $x4Nor;

								$deltav1 = $alpha * $d1;
								$deltav2 = $alpha * $d2;

								//Persamaan sepuluh
								$x1h1nn = $x1h1n +  $bx1h1;
								$x2h1nn = $x2h1n +  $bx2h1;
								$x3h1nn = $x3h1n +  $bx3h1;
								$x4h1nn = $x4h1n +  $bx4h1;

								$x1h2nn = $x1h2n +  $bx1h2;
								$x2h2nn = $x2h2n +  $bx2h2;
								$x3h2nn = $x3h2n +  $bx3h2;
								$x4h2nn = $x4h2n +  $bx4h2;

								//Persamaan sebelas
								$bbh1ko = $deltawjk1 + $bh1;
								$bbh2ko = $deltawjk2 + $bh2;

								$bibikh1 = $bbiash1 + $deltav1;
								$bibikh2 = $bbiash2 + $deltav2;

								$bibhki = $deltawjk0 + $bbiaso;

								feedForwardTrain($x1, $x2, $x3, $x4, $t, $x1h1nn, $x2h1nn, $x3h1nn, $x4h1nn, $x1h2nn, $x2h2nn, $x3h2nn, $x4h2nn, $bibikh1, $bibikh2, $bbh1ko, $bbh2ko, $bibhki);
							}
							feedForwardJaket1(32, 21, 61, 84, 18,	$bx1h1n, $bx2h1n, $bx3h1n, $bx4h1n, $bx1h2n, $bx2h2n, $bx3h2n, $bx4h2n, $bbiash1n, $bbiash2n, $bh1n, $bh2n, $bbiason);
							$djaket1 = round($dnf);
							//Jaket2
							function feedForwardJaket2($x1, $x2, $x3, $x4, $t, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bh1, $bh2, $bbiaso)
							{
								$maxIn    = max($x1, $x2, $x3, $x4, $t);
								$minIn    = min($x1, $x2, $x3, $x4, $t);

								//normalisasi data input
								$x1Nor = 0.8 * ($x1 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x2Nor = 0.8 * ($x2 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x3Nor = 0.8 * ($x3 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x4Nor = 0.8 * ($x4 - $minIn) / ($maxIn - $minIn) + 0.1;
								$targetNor = 0.8 * ($t - $minIn) / ($maxIn - $minIn) + 0.1;

								//hitung nilai pada hidden layer
								$h1 = $bbiash1 + ($x1Nor * $bx1h1) + ($x2Nor * $bx2h1) + ($x3Nor * $bx3h1) + ($x4Nor * $bx4h1);
								$h2 = $bbiash2 + ($x1Nor * $bx1h2) + ($x2Nor * $bx2h2) + ($x3Nor * $bx3h2) + ($x4Nor * $bx4h2);
								$h1Sig = 1 / (1 + exp($h1 * -1));
								$h2Sig = 1 / (1 + exp($h2 * -1));

								//hitung nilai output
								$out = $bbiaso + ($h1Sig * $bh1) + ($h2Sig * $bh2);
								$outSig = 1 / (1 + exp($out * -1));
								$err = ($targetNor - $outSig);
								$error = pow($err, 2);
								$te = 0.3;
								global $dnf;
								$dn1 = ($maxIn - $minIn);
								$dn = $outSig * $dn1;
								$dnf = $dn + $minIn;
								if ($error > $te) {
									backpropagationJaket2($outSig, $targetNor, $h1Sig, $h2Sig, $bh1, $bh2, $x1Nor, $x2Nor, $x3Nor, $x4Nor, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bbiaso, $x1, $x2, $x3, $x4, $t);
								} else {
									// echo "Target =" . $targetNor . "<br>";
									// echo "Output =" . $outSig . "<br>";
									// $err = ($targetNor - $outSig);
									// $error = pow($err, 2);
									// echo "Error = " . $error . "<br><br>";
								}
							}
							function backpropagationJaket2($outSig, $targetNor, $h1Sig, $h2Sig, $bh1, $bh2, $x1Nor, $x2Nor, $x3Nor, $x4Nor, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bbiaso, $x1, $x2, $x3, $x4, $t)
							{
								$alpha = 0.1;

								//Persamaan lima
								$dk = ($targetNor - $outSig) * (1 - $outSig) * $outSig;
								// echo "<br>" . $dk;

								//Persamaan enam
								$deltawjk0 = $alpha * $dk;
								$deltawjk1 = $alpha * $dk * $h1Sig;
								$deltawjk2 = $alpha * $dk * $h2Sig;

								//Persamaan tujuh
								$din1 = $dk * $bh1;
								$din2 = $dk * $bh2;

								//Persamaan delapan
								$d1 = $din1 * $h1Sig * (1 - $h1Sig);
								$d2 = $din2 * $h2Sig * (1 - $h2Sig);

								//Persamaan sembilan VIJ Baru
								$x1h1n = $alpha * $d1 * $x1Nor;
								$x2h1n = $alpha * $d1 * $x2Nor;
								$x3h1n = $alpha * $d1 * $x3Nor;
								$x4h1n = $alpha * $d1 * $x4Nor;

								$x1h2n = $alpha * $d2 * $x1Nor;
								$x2h2n = $alpha * $d2 * $x2Nor;
								$x3h2n = $alpha * $d2 * $x3Nor;
								$x4h2n = $alpha * $d2 * $x4Nor;

								$deltav1 = $alpha * $d1;
								$deltav2 = $alpha * $d2;

								//Persamaan sepuluh
								$x1h1nn = $x1h1n +  $bx1h1;
								$x2h1nn = $x2h1n +  $bx2h1;
								$x3h1nn = $x3h1n +  $bx3h1;
								$x4h1nn = $x4h1n +  $bx4h1;

								$x1h2nn = $x1h2n +  $bx1h2;
								$x2h2nn = $x2h2n +  $bx2h2;
								$x3h2nn = $x3h2n +  $bx3h2;
								$x4h2nn = $x4h2n +  $bx4h2;

								//Persamaan sebelas
								$bbh1ko = $deltawjk1 + $bh1;
								$bbh2ko = $deltawjk2 + $bh2;

								$bibikh1 = $bbiash1 + $deltav1;
								$bibikh2 = $bbiash2 + $deltav2;

								$bibhki = $deltawjk0 + $bbiaso;

								feedForwardJaket2($x1, $x2, $x3, $x4, $t, $x1h1nn, $x2h1nn, $x3h1nn, $x4h1nn, $x1h2nn, $x2h2nn, $x3h2nn, $x4h2nn, $bibikh1, $bibikh2, $bbh1ko, $bbh2ko, $bibhki);
							}
							feedForwardJaket2(64, 61, 64, 61,	61, $bx1h1n, $bx2h1n, $bx3h1n, $bx4h1n, $bx1h2n, $bx2h2n, $bx3h2n, $bx4h2n, $bbiash1n, $bbiash2n, $bh1n, $bh2n, $bbiason);
							$djaket2 = round($dnf);
							$arjaket = [$djaket1, $djaket2];





							// ($x1, $x2, $x3, $x4, $t, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bh1, $bh2, $bbiaso
							//Tas
							function feedForwardTas1($x1, $x2, $x3, $x4, $t, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bh1, $bh2, $bbiaso)
							{
								$maxIn    = max($x1, $x2, $x3, $x4, $t);
								$minIn    = min($x1, $x2, $x3, $x4, $t);

								//normalisasi data input
								$x1Nor = 0.8 * ($x1 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x2Nor = 0.8 * ($x2 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x3Nor = 0.8 * ($x3 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x4Nor = 0.8 * ($x4 - $minIn) / ($maxIn - $minIn) + 0.1;
								$targetNor = 0.8 * ($t - $minIn) / ($maxIn - $minIn) + 0.1;

								//hitung nilai pada hidden layer
								$h1 = $bbiash1 + ($x1Nor * $bx1h1) + ($x2Nor * $bx2h1) + ($x3Nor * $bx3h1) + ($x4Nor * $bx4h1);
								$h2 = $bbiash2 + ($x1Nor * $bx1h2) + ($x2Nor * $bx2h2) + ($x3Nor * $bx3h2) + ($x4Nor * $bx4h2);
								$h1Sig = 1 / (1 + exp($h1 * -1));
								$h2Sig = 1 / (1 + exp($h2 * -1));

								//hitung nilai output
								$out = $bbiaso + ($h1Sig * $bh1) + ($h2Sig * $bh2);
								$outSig = 1 / (1 + exp($out * -1));
								$err = ($targetNor - $outSig);
								$error = pow($err, 2);
								$te = 0.3;
								global $dnf;
								$dn1 = ($maxIn - $minIn);
								$dn = $outSig * $dn1;
								$dnf = $dn + $minIn;
								if ($error > $te) {
									backpropagationTas1($outSig, $targetNor, $h1Sig, $h2Sig, $bh1, $bh2, $x1Nor, $x2Nor, $x3Nor, $x4Nor, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bbiaso, $x1, $x2, $x3, $x4, $t);
								} else {
									// echo "Target =" . $targetNor . "<br>";
									// echo "Output =" . $outSig . "<br>";
									// $err = ($targetNor - $outSig);
									// $error = pow($err, 2);
									// echo "Error = " . $error . "<br><br>";
								}
							}
							function backpropagationTas1($outSig, $targetNor, $h1Sig, $h2Sig, $bh1, $bh2, $x1Nor, $x2Nor, $x3Nor, $x4Nor, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bbiaso, $x1, $x2, $x3, $x4, $t)
							{
								$alpha = 0.1;

								//Persamaan lima
								$dk = ($targetNor - $outSig) * (1 - $outSig) * $outSig;
								// echo "<br>" . $dk;

								//Persamaan enam
								$deltawjk0 = $alpha * $dk;
								$deltawjk1 = $alpha * $dk * $h1Sig;
								$deltawjk2 = $alpha * $dk * $h2Sig;

								//Persamaan tujuh
								$din1 = $dk * $bh1;
								$din2 = $dk * $bh2;

								//Persamaan delapan
								$d1 = $din1 * $h1Sig * (1 - $h1Sig);
								$d2 = $din2 * $h2Sig * (1 - $h2Sig);

								//Persamaan sembilan VIJ Baru
								$x1h1n = $alpha * $d1 * $x1Nor;
								$x2h1n = $alpha * $d1 * $x2Nor;
								$x3h1n = $alpha * $d1 * $x3Nor;
								$x4h1n = $alpha * $d1 * $x4Nor;

								$x1h2n = $alpha * $d2 * $x1Nor;
								$x2h2n = $alpha * $d2 * $x2Nor;
								$x3h2n = $alpha * $d2 * $x3Nor;
								$x4h2n = $alpha * $d2 * $x4Nor;

								$deltav1 = $alpha * $d1;
								$deltav2 = $alpha * $d2;

								//Persamaan sepuluh
								$x1h1nn = $x1h1n +  $bx1h1;
								$x2h1nn = $x2h1n +  $bx2h1;
								$x3h1nn = $x3h1n +  $bx3h1;
								$x4h1nn = $x4h1n +  $bx4h1;

								$x1h2nn = $x1h2n +  $bx1h2;
								$x2h2nn = $x2h2n +  $bx2h2;
								$x3h2nn = $x3h2n +  $bx3h2;
								$x4h2nn = $x4h2n +  $bx4h2;

								//Persamaan sebelas
								$bbh1ko = $deltawjk1 + $bh1;
								$bbh2ko = $deltawjk2 + $bh2;

								$bibikh1 = $bbiash1 + $deltav1;
								$bibikh2 = $bbiash2 + $deltav2;

								$bibhki = $deltawjk0 + $bbiaso;

								feedForwardTrain($x1, $x2, $x3, $x4, $t, $x1h1nn, $x2h1nn, $x3h1nn, $x4h1nn, $x1h2nn, $x2h2nn, $x3h2nn, $x4h2nn, $bibikh1, $bibikh2, $bbh1ko, $bbh2ko, $bibhki);
							}
							feedForwardTas1(71,	61,	38, 42, 76,	$bx1h1n, $bx2h1n, $bx3h1n, $bx4h1n, $bx1h2n, $bx2h2n, $bx3h2n, $bx4h2n, $bbiash1n, $bbiash2n, $bh1n, $bh2n, $bbiason);
							$dtas1 = round($dnf);
							//Dompet2
							function feedForwardTas2($x1, $x2, $x3, $x4, $t, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bh1, $bh2, $bbiaso)
							{
								$maxIn    = max($x1, $x2, $x3, $x4, $t);
								$minIn    = min($x1, $x2, $x3, $x4, $t);

								//normalisasi data input
								$x1Nor = 0.8 * ($x1 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x2Nor = 0.8 * ($x2 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x3Nor = 0.8 * ($x3 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x4Nor = 0.8 * ($x4 - $minIn) / ($maxIn - $minIn) + 0.1;
								$targetNor = 0.8 * ($t - $minIn) / ($maxIn - $minIn) + 0.1;

								//hitung nilai pada hidden layer
								$h1 = $bbiash1 + ($x1Nor * $bx1h1) + ($x2Nor * $bx2h1) + ($x3Nor * $bx3h1) + ($x4Nor * $bx4h1);
								$h2 = $bbiash2 + ($x1Nor * $bx1h2) + ($x2Nor * $bx2h2) + ($x3Nor * $bx3h2) + ($x4Nor * $bx4h2);
								$h1Sig = 1 / (1 + exp($h1 * -1));
								$h2Sig = 1 / (1 + exp($h2 * -1));

								//hitung nilai output
								$out = $bbiaso + ($h1Sig * $bh1) + ($h2Sig * $bh2);
								$outSig = 1 / (1 + exp($out * -1));
								$err = ($targetNor - $outSig);
								$error = pow($err, 2);
								$te = 0.3;
								global $dnf;
								$dn1 = ($maxIn - $minIn);
								$dn = $outSig * $dn1;
								$dnf = $dn + $minIn;
								if ($error > $te) {
									backpropagationTas2($outSig, $targetNor, $h1Sig, $h2Sig, $bh1, $bh2, $x1Nor, $x2Nor, $x3Nor, $x4Nor, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bbiaso, $x1, $x2, $x3, $x4, $t);
								} else {
									// echo "Target =" . $targetNor . "<br>";
									// echo "Output =" . $outSig . "<br>";
									// $err = ($targetNor - $outSig);
									// $error = pow($err, 2);
									// echo "Error = " . $error . "<br><br>";
								}
							}
							function backpropagationTas2($outSig, $targetNor, $h1Sig, $h2Sig, $bh1, $bh2, $x1Nor, $x2Nor, $x3Nor, $x4Nor, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bbiaso, $x1, $x2, $x3, $x4, $t)
							{
								$alpha = 0.1;

								//Persamaan lima
								$dk = ($targetNor - $outSig) * (1 - $outSig) * $outSig;
								// echo "<br>" . $dk;

								//Persamaan enam
								$deltawjk0 = $alpha * $dk;
								$deltawjk1 = $alpha * $dk * $h1Sig;
								$deltawjk2 = $alpha * $dk * $h2Sig;

								//Persamaan tujuh
								$din1 = $dk * $bh1;
								$din2 = $dk * $bh2;

								//Persamaan delapan
								$d1 = $din1 * $h1Sig * (1 - $h1Sig);
								$d2 = $din2 * $h2Sig * (1 - $h2Sig);

								//Persamaan sembilan VIJ Baru
								$x1h1n = $alpha * $d1 * $x1Nor;
								$x2h1n = $alpha * $d1 * $x2Nor;
								$x3h1n = $alpha * $d1 * $x3Nor;
								$x4h1n = $alpha * $d1 * $x4Nor;

								$x1h2n = $alpha * $d2 * $x1Nor;
								$x2h2n = $alpha * $d2 * $x2Nor;
								$x3h2n = $alpha * $d2 * $x3Nor;
								$x4h2n = $alpha * $d2 * $x4Nor;

								$deltav1 = $alpha * $d1;
								$deltav2 = $alpha * $d2;

								//Persamaan sepuluh
								$x1h1nn = $x1h1n +  $bx1h1;
								$x2h1nn = $x2h1n +  $bx2h1;
								$x3h1nn = $x3h1n +  $bx3h1;
								$x4h1nn = $x4h1n +  $bx4h1;

								$x1h2nn = $x1h2n +  $bx1h2;
								$x2h2nn = $x2h2n +  $bx2h2;
								$x3h2nn = $x3h2n +  $bx3h2;
								$x4h2nn = $x4h2n +  $bx4h2;

								//Persamaan sebelas
								$bbh1ko = $deltawjk1 + $bh1;
								$bbh2ko = $deltawjk2 + $bh2;

								$bibikh1 = $bbiash1 + $deltav1;
								$bibikh2 = $bbiash2 + $deltav2;

								$bibhki = $deltawjk0 + $bbiaso;

								feedForwardTas2($x1, $x2, $x3, $x4, $t, $x1h1nn, $x2h1nn, $x3h1nn, $x4h1nn, $x1h2nn, $x2h2nn, $x3h2nn, $x4h2nn, $bibikh1, $bibikh2, $bbh1ko, $bbh2ko, $bibhki);
							}
							feedForwardTas2(71,	16,	24,	76, 65, $bx1h1n, $bx2h1n, $bx3h1n, $bx4h1n, $bx1h2n, $bx2h2n, $bx3h2n, $bx4h2n, $bbiash1n, $bbiash2n, $bh1n, $bh2n, $bbiason);
							$dtas2 = round($dnf);
							$artas = [$dtas1, $dtas2];





							// ($x1, $x2, $x3, $x4, $t, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bh1, $bh2, $bbiaso
							//Sandal
							function feedForwardSandal1($x1, $x2, $x3, $x4, $t, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bh1, $bh2, $bbiaso)
							{
								$maxIn    = max($x1, $x2, $x3, $x4, $t);
								$minIn    = min($x1, $x2, $x3, $x4, $t);

								//normalisasi data input
								$x1Nor = 0.8 * ($x1 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x2Nor = 0.8 * ($x2 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x3Nor = 0.8 * ($x3 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x4Nor = 0.8 * ($x4 - $minIn) / ($maxIn - $minIn) + 0.1;
								$targetNor = 0.8 * ($t - $minIn) / ($maxIn - $minIn) + 0.1;

								//hitung nilai pada hidden layer
								$h1 = $bbiash1 + ($x1Nor * $bx1h1) + ($x2Nor * $bx2h1) + ($x3Nor * $bx3h1) + ($x4Nor * $bx4h1);
								$h2 = $bbiash2 + ($x1Nor * $bx1h2) + ($x2Nor * $bx2h2) + ($x3Nor * $bx3h2) + ($x4Nor * $bx4h2);
								$h1Sig = 1 / (1 + exp($h1 * -1));
								$h2Sig = 1 / (1 + exp($h2 * -1));

								//hitung nilai output
								$out = $bbiaso + ($h1Sig * $bh1) + ($h2Sig * $bh2);
								$outSig = 1 / (1 + exp($out * -1));
								$err = ($targetNor - $outSig);
								$error = pow($err, 2);
								$te = 0.3;
								global $dnf;
								$dn1 = ($maxIn - $minIn);
								$dn = $outSig * $dn1;
								$dnf = $dn + $minIn;
								if ($error > $te) {
									backpropagationSandal1($outSig, $targetNor, $h1Sig, $h2Sig, $bh1, $bh2, $x1Nor, $x2Nor, $x3Nor, $x4Nor, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bbiaso, $x1, $x2, $x3, $x4, $t);
								} else {
									// echo "Target =" . $targetNor . "<br>";
									// echo "Output =" . $outSig . "<br>";
									// $err = ($targetNor - $outSig);
									// $error = pow($err, 2);
									// echo "Error = " . $error . "<br><br>";
								}
							}
							function backpropagationSandal1($outSig, $targetNor, $h1Sig, $h2Sig, $bh1, $bh2, $x1Nor, $x2Nor, $x3Nor, $x4Nor, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bbiaso, $x1, $x2, $x3, $x4, $t)
							{
								$alpha = 0.1;

								//Persamaan lima
								$dk = ($targetNor - $outSig) * (1 - $outSig) * $outSig;
								// echo "<br>" . $dk;

								//Persamaan enam
								$deltawjk0 = $alpha * $dk;
								$deltawjk1 = $alpha * $dk * $h1Sig;
								$deltawjk2 = $alpha * $dk * $h2Sig;

								//Persamaan tujuh
								$din1 = $dk * $bh1;
								$din2 = $dk * $bh2;

								//Persamaan delapan
								$d1 = $din1 * $h1Sig * (1 - $h1Sig);
								$d2 = $din2 * $h2Sig * (1 - $h2Sig);

								//Persamaan sembilan VIJ Baru
								$x1h1n = $alpha * $d1 * $x1Nor;
								$x2h1n = $alpha * $d1 * $x2Nor;
								$x3h1n = $alpha * $d1 * $x3Nor;
								$x4h1n = $alpha * $d1 * $x4Nor;

								$x1h2n = $alpha * $d2 * $x1Nor;
								$x2h2n = $alpha * $d2 * $x2Nor;
								$x3h2n = $alpha * $d2 * $x3Nor;
								$x4h2n = $alpha * $d2 * $x4Nor;

								$deltav1 = $alpha * $d1;
								$deltav2 = $alpha * $d2;

								//Persamaan sepuluh
								$x1h1nn = $x1h1n +  $bx1h1;
								$x2h1nn = $x2h1n +  $bx2h1;
								$x3h1nn = $x3h1n +  $bx3h1;
								$x4h1nn = $x4h1n +  $bx4h1;

								$x1h2nn = $x1h2n +  $bx1h2;
								$x2h2nn = $x2h2n +  $bx2h2;
								$x3h2nn = $x3h2n +  $bx3h2;
								$x4h2nn = $x4h2n +  $bx4h2;

								//Persamaan sebelas
								$bbh1ko = $deltawjk1 + $bh1;
								$bbh2ko = $deltawjk2 + $bh2;

								$bibikh1 = $bbiash1 + $deltav1;
								$bibikh2 = $bbiash2 + $deltav2;

								$bibhki = $deltawjk0 + $bbiaso;

								feedForwardTrain($x1, $x2, $x3, $x4, $t, $x1h1nn, $x2h1nn, $x3h1nn, $x4h1nn, $x1h2nn, $x2h2nn, $x3h2nn, $x4h2nn, $bibikh1, $bibikh2, $bbh1ko, $bbh2ko, $bibhki);
							}
							feedForwardSandal1(49, 48, 50, 44, 42,	$bx1h1n, $bx2h1n, $bx3h1n, $bx4h1n, $bx1h2n, $bx2h2n, $bx3h2n, $bx4h2n, $bbiash1n, $bbiash2n, $bh1n, $bh2n, $bbiason);
							$dsandal1 = round($dnf);
							//Dompet2
							function feedForwardSandal2($x1, $x2, $x3, $x4, $t, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bh1, $bh2, $bbiaso)
							{
								$maxIn    = max($x1, $x2, $x3, $x4, $t);
								$minIn    = min($x1, $x2, $x3, $x4, $t);

								//normalisasi data input
								$x1Nor = 0.8 * ($x1 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x2Nor = 0.8 * ($x2 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x3Nor = 0.8 * ($x3 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x4Nor = 0.8 * ($x4 - $minIn) / ($maxIn - $minIn) + 0.1;
								$targetNor = 0.8 * ($t - $minIn) / ($maxIn - $minIn) + 0.1;

								//hitung nilai pada hidden layer
								$h1 = $bbiash1 + ($x1Nor * $bx1h1) + ($x2Nor * $bx2h1) + ($x3Nor * $bx3h1) + ($x4Nor * $bx4h1);
								$h2 = $bbiash2 + ($x1Nor * $bx1h2) + ($x2Nor * $bx2h2) + ($x3Nor * $bx3h2) + ($x4Nor * $bx4h2);
								$h1Sig = 1 / (1 + exp($h1 * -1));
								$h2Sig = 1 / (1 + exp($h2 * -1));

								//hitung nilai output
								$out = $bbiaso + ($h1Sig * $bh1) + ($h2Sig * $bh2);
								$outSig = 1 / (1 + exp($out * -1));
								$err = ($targetNor - $outSig);
								$error = pow($err, 2);
								$te = 0.3;
								global $dnf;
								$dn1 = ($maxIn - $minIn);
								$dn = $outSig * $dn1;
								$dnf = $dn + $minIn;
								if ($error > $te) {
									backpropagationSandal2($outSig, $targetNor, $h1Sig, $h2Sig, $bh1, $bh2, $x1Nor, $x2Nor, $x3Nor, $x4Nor, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bbiaso, $x1, $x2, $x3, $x4, $t);
								} else {
									// echo "Target =" . $targetNor . "<br>";
									// echo "Output =" . $outSig . "<br>";
									// $err = ($targetNor - $outSig);
									// $error = pow($err, 2);
									// echo "Error = " . $error . "<br><br>";
								}
							}
							function backpropagationSandal2($outSig, $targetNor, $h1Sig, $h2Sig, $bh1, $bh2, $x1Nor, $x2Nor, $x3Nor, $x4Nor, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bbiaso, $x1, $x2, $x3, $x4, $t)
							{
								$alpha = 0.1;

								//Persamaan lima
								$dk = ($targetNor - $outSig) * (1 - $outSig) * $outSig;
								// echo "<br>" . $dk;

								//Persamaan enam
								$deltawjk0 = $alpha * $dk;
								$deltawjk1 = $alpha * $dk * $h1Sig;
								$deltawjk2 = $alpha * $dk * $h2Sig;

								//Persamaan tujuh
								$din1 = $dk * $bh1;
								$din2 = $dk * $bh2;

								//Persamaan delapan
								$d1 = $din1 * $h1Sig * (1 - $h1Sig);
								$d2 = $din2 * $h2Sig * (1 - $h2Sig);

								//Persamaan sembilan VIJ Baru
								$x1h1n = $alpha * $d1 * $x1Nor;
								$x2h1n = $alpha * $d1 * $x2Nor;
								$x3h1n = $alpha * $d1 * $x3Nor;
								$x4h1n = $alpha * $d1 * $x4Nor;

								$x1h2n = $alpha * $d2 * $x1Nor;
								$x2h2n = $alpha * $d2 * $x2Nor;
								$x3h2n = $alpha * $d2 * $x3Nor;
								$x4h2n = $alpha * $d2 * $x4Nor;

								$deltav1 = $alpha * $d1;
								$deltav2 = $alpha * $d2;

								//Persamaan sepuluh
								$x1h1nn = $x1h1n +  $bx1h1;
								$x2h1nn = $x2h1n +  $bx2h1;
								$x3h1nn = $x3h1n +  $bx3h1;
								$x4h1nn = $x4h1n +  $bx4h1;

								$x1h2nn = $x1h2n +  $bx1h2;
								$x2h2nn = $x2h2n +  $bx2h2;
								$x3h2nn = $x3h2n +  $bx3h2;
								$x4h2nn = $x4h2n +  $bx4h2;

								//Persamaan sebelas
								$bbh1ko = $deltawjk1 + $bh1;
								$bbh2ko = $deltawjk2 + $bh2;

								$bibikh1 = $bbiash1 + $deltav1;
								$bibikh2 = $bbiash2 + $deltav2;

								$bibhki = $deltawjk0 + $bbiaso;

								feedForwardSandal2($x1, $x2, $x3, $x4, $t, $x1h1nn, $x2h1nn, $x3h1nn, $x4h1nn, $x1h2nn, $x2h2nn, $x3h2nn, $x4h2nn, $bibikh1, $bibikh2, $bbh1ko, $bbh2ko, $bibhki);
							}
							feedForwardSandal2(71, 66,	31,	38,	31, $bx1h1n, $bx2h1n, $bx3h1n, $bx4h1n, $bx1h2n, $bx2h2n, $bx3h2n, $bx4h2n, $bbiash1n, $bbiash2n, $bh1n, $bh2n, $bbiason);
							$dsandal2 = round($dnf);
							$arsandal = [$dsandal1, $dsandal2];
						}
						if ($time > "$b2" && $time < "$a2") {
							function feedForwardTrain($x1, $x2, $x3, $x4, $t, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bh1, $bh2, $bbiaso)
							{
								$maxIn    = max($x1, $x2, $x3, $x4, $t);
								$minIn    = min($x1, $x2, $x3, $x4, $t);

								//normalisasi data input
								$x1Nor = 0.8 * ($x1 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x2Nor = 0.8 * ($x2 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x3Nor = 0.8 * ($x3 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x4Nor = 0.8 * ($x4 - $minIn) / ($maxIn - $minIn) + 0.1;
								$targetNor = 0.8 * ($t - $minIn) / ($maxIn - $minIn) + 0.1;

								//hitung nilai pada hidden layer
								$h1 = $bbiash1 + ($x1Nor * $bx1h1) + ($x2Nor * $bx2h1) + ($x3Nor * $bx3h1) + ($x4Nor * $bx4h1);
								$h2 = $bbiash2 + ($x1Nor * $bx1h2) + ($x2Nor * $bx2h2) + ($x3Nor * $bx3h2) + ($x4Nor * $bx4h2);
								$h1Sig = 1 / (1 + exp($h1 * -1));
								$h2Sig = 1 / (1 + exp($h2 * -1));

								//hitung nilai output
								$out = $bbiaso + ($h1Sig * $bh1) + ($h2Sig * $bh2);
								$outSig = 1 / (1 + exp($out * -1));
								$err = ($targetNor - $outSig);
								$error = pow($err, 2);
								$te = 0.01;
								if ($error > $te) {
									backpropagationTrain($outSig, $targetNor, $h1Sig, $h2Sig, $bh1, $bh2, $x1Nor, $x2Nor, $x3Nor, $x4Nor, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bbiaso, $x1, $x2, $x3, $x4, $t);
								} else {
									// echo "Target =" . $targetNor . "<br>";
									// echo "Output =" . $outSig . "<br>";
									// $err = ($targetNor - $outSig);
									// $error = pow($err, 2);
									// echo "Error = " . $error . "<br><br>";

									global $bx1h1n, $bx2h1n, $bx3h1n, $bx4h1n, $bx1h2n, $bx2h2n, $bx3h2n, $bx4h2n, $bbiash1n, $bbiash2n, $bh1n, $bh2n, $bbiason;
									$bx1h1n = $bx1h1;
									$bx2h1n = $bx2h1;
									$bx3h1n = $bx3h1;
									$bx4h1n = $bx1h1;
									$bx1h2n = $bx1h2;
									$bx2h2n = $bx2h2;
									$bx3h2n = $bx3h2;
									$bx4h2n = $bx1h2;

									$bbiash1n =  $bbiash1;
									$bbiash2n =  $bbiash2;
									$bh1n      = $bh1;
									$bh2n      = $bh2;
									$bbiason  = $bbiaso;
								}
							}
							function backpropagationTrain($outSig, $targetNor, $h1Sig, $h2Sig, $bh1, $bh2, $x1Nor, $x2Nor, $x3Nor, $x4Nor, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bbiaso, $x1, $x2, $x3, $x4, $t)
							{
								$alpha = 0.1;

								//Persamaan lima
								$dk = ($targetNor - $outSig) * (1 - $outSig) * $outSig;
								// echo "<br>" . $dk;

								//Persamaan enam
								$deltawjk0 = $alpha * $dk;
								$deltawjk1 = $alpha * $dk * $h1Sig;
								$deltawjk2 = $alpha * $dk * $h2Sig;

								//Persamaan tujuh
								$din1 = $dk * $bh1;
								$din2 = $dk * $bh2;

								//Persamaan delapan
								$d1 = $din1 * $h1Sig * (1 - $h1Sig);
								$d2 = $din2 * $h2Sig * (1 - $h2Sig);

								//Persamaan sembilan VIJ Baru
								$x1h1n = $alpha * $d1 * $x1Nor;
								$x2h1n = $alpha * $d1 * $x2Nor;
								$x3h1n = $alpha * $d1 * $x3Nor;
								$x4h1n = $alpha * $d1 * $x4Nor;

								$x1h2n = $alpha * $d2 * $x1Nor;
								$x2h2n = $alpha * $d2 * $x2Nor;
								$x3h2n = $alpha * $d2 * $x3Nor;
								$x4h2n = $alpha * $d2 * $x4Nor;

								$deltav1 = $alpha * $d1;
								$deltav2 = $alpha * $d2;

								//Persamaan sepuluh
								$x1h1nn = $x1h1n +  $bx1h1;
								$x2h1nn = $x2h1n +  $bx2h1;
								$x3h1nn = $x3h1n +  $bx3h1;
								$x4h1nn = $x4h1n +  $bx4h1;

								$x1h2nn = $x1h2n +  $bx1h2;
								$x2h2nn = $x2h2n +  $bx2h2;
								$x3h2nn = $x3h2n +  $bx3h2;
								$x4h2nn = $x4h2n +  $bx4h2;

								//Persamaan sebelas
								$bbh1ko = $deltawjk1 + $bh1;
								$bbh2ko = $deltawjk2 + $bh2;

								$bibikh1 = $bbiash1 + $deltav1;
								$bibikh2 = $bbiash2 + $deltav2;

								$bibhki = $deltawjk0 + $bbiaso;

								feedForwardTrain($x1, $x2, $x3, $x4, $t, $x1h1nn, $x2h1nn, $x3h1nn, $x4h1nn, $x1h2nn, $x2h2nn, $x3h2nn, $x4h2nn, $bibikh1, $bibikh2, $bbh1ko, $bbh2ko, $bibhki);
							}
							feedForwardTrain(30, 46, 53, 54, 52, 0.103, 0.6, 0.33, 0.45, 0.3006, 0.3060, 0.876, 0.1006, 0.106, 0.55, 0.1579, 0.6172, 0.396);



							// ($x1, $x2, $x3, $x4, $t, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bh1, $bh2, $bbiaso
							//Baju1
							function feedForwardBaju1($x1, $x2, $x3, $x4, $t, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bh1, $bh2, $bbiaso)
							{
								$maxIn    = max($x1, $x2, $x3, $x4, $t);
								$minIn    = min($x1, $x2, $x3, $x4, $t);

								//normalisasi data input
								$x1Nor = 0.8 * ($x1 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x2Nor = 0.8 * ($x2 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x3Nor = 0.8 * ($x3 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x4Nor = 0.8 * ($x4 - $minIn) / ($maxIn - $minIn) + 0.1;
								$targetNor = 0.8 * ($t - $minIn) / ($maxIn - $minIn) + 0.1;

								//hitung nilai pada hidden layer
								$h1 = $bbiash1 + ($x1Nor * $bx1h1) + ($x2Nor * $bx2h1) + ($x3Nor * $bx3h1) + ($x4Nor * $bx4h1);
								$h2 = $bbiash2 + ($x1Nor * $bx1h2) + ($x2Nor * $bx2h2) + ($x3Nor * $bx3h2) + ($x4Nor * $bx4h2);
								$h1Sig = 1 / (1 + exp($h1 * -1));
								$h2Sig = 1 / (1 + exp($h2 * -1));

								//hitung nilai output
								$out = $bbiaso + ($h1Sig * $bh1) + ($h2Sig * $bh2);
								$outSig = 1 / (1 + exp($out * -1));
								$err = ($targetNor - $outSig);
								$error = pow($err, 2);
								$te = 0.3;
								global $dnf;
								$dn1 = ($maxIn - $minIn);
								$dn = $outSig * $dn1;
								$dnf = $dn + $minIn;
								if ($error > $te) {
									backpropagationBaju1($outSig, $targetNor, $h1Sig, $h2Sig, $bh1, $bh2, $x1Nor, $x2Nor, $x3Nor, $x4Nor, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bbiaso, $x1, $x2, $x3, $x4, $t);
								} else {
									// echo "Target =" . $targetNor . "<br>";
									// echo "Output =" . $outSig . "<br>";
									// $err = ($targetNor - $outSig);
									// $error = pow($err, 2);
									// echo "Error = " . $error . "<br><br>";
								}
							}
							function backpropagationBaju1($outSig, $targetNor, $h1Sig, $h2Sig, $bh1, $bh2, $x1Nor, $x2Nor, $x3Nor, $x4Nor, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bbiaso, $x1, $x2, $x3, $x4, $t)
							{
								$alpha = 0.1;

								//Persamaan lima
								$dk = ($targetNor - $outSig) * (1 - $outSig) * $outSig;
								// echo "<br>" . $dk;

								//Persamaan enam
								$deltawjk0 = $alpha * $dk;
								$deltawjk1 = $alpha * $dk * $h1Sig;
								$deltawjk2 = $alpha * $dk * $h2Sig;

								//Persamaan tujuh
								$din1 = $dk * $bh1;
								$din2 = $dk * $bh2;

								//Persamaan delapan
								$d1 = $din1 * $h1Sig * (1 - $h1Sig);
								$d2 = $din2 * $h2Sig * (1 - $h2Sig);

								//Persamaan sembilan VIJ Baru
								$x1h1n = $alpha * $d1 * $x1Nor;
								$x2h1n = $alpha * $d1 * $x2Nor;
								$x3h1n = $alpha * $d1 * $x3Nor;
								$x4h1n = $alpha * $d1 * $x4Nor;

								$x1h2n = $alpha * $d2 * $x1Nor;
								$x2h2n = $alpha * $d2 * $x2Nor;
								$x3h2n = $alpha * $d2 * $x3Nor;
								$x4h2n = $alpha * $d2 * $x4Nor;

								$deltav1 = $alpha * $d1;
								$deltav2 = $alpha * $d2;

								//Persamaan sepuluh
								$x1h1nn = $x1h1n +  $bx1h1;
								$x2h1nn = $x2h1n +  $bx2h1;
								$x3h1nn = $x3h1n +  $bx3h1;
								$x4h1nn = $x4h1n +  $bx4h1;

								$x1h2nn = $x1h2n +  $bx1h2;
								$x2h2nn = $x2h2n +  $bx2h2;
								$x3h2nn = $x3h2n +  $bx3h2;
								$x4h2nn = $x4h2n +  $bx4h2;

								//Persamaan sebelas
								$bbh1ko = $deltawjk1 + $bh1;
								$bbh2ko = $deltawjk2 + $bh2;

								$bibikh1 = $bbiash1 + $deltav1;
								$bibikh2 = $bbiash2 + $deltav2;

								$bibhki = $deltawjk0 + $bbiaso;

								feedForwardTrain($x1, $x2, $x3, $x4, $t, $x1h1nn, $x2h1nn, $x3h1nn, $x4h1nn, $x1h2nn, $x2h2nn, $x3h2nn, $x4h2nn, $bibikh1, $bibikh2, $bbh1ko, $bbh2ko, $bibhki);
							}
							feedForwardBaju1(59, 23, 23, 35, 16, $bx1h1n, $bx2h1n, $bx3h1n, $bx4h1n, $bx1h2n, $bx2h2n, $bx3h2n, $bx4h2n, $bbiash1n, $bbiash2n, $bh1n, $bh2n, $bbiason);
							$dbaju1 = round($dnf);
							//Baju2
							function feedForwardBaju2($x1, $x2, $x3, $x4, $t, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bh1, $bh2, $bbiaso)
							{
								$maxIn    = max($x1, $x2, $x3, $x4, $t);
								$minIn    = min($x1, $x2, $x3, $x4, $t);

								//normalisasi data input
								$x1Nor = 0.8 * ($x1 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x2Nor = 0.8 * ($x2 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x3Nor = 0.8 * ($x3 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x4Nor = 0.8 * ($x4 - $minIn) / ($maxIn - $minIn) + 0.1;
								$targetNor = 0.8 * ($t - $minIn) / ($maxIn - $minIn) + 0.1;

								//hitung nilai pada hidden layer
								$h1 = $bbiash1 + ($x1Nor * $bx1h1) + ($x2Nor * $bx2h1) + ($x3Nor * $bx3h1) + ($x4Nor * $bx4h1);
								$h2 = $bbiash2 + ($x1Nor * $bx1h2) + ($x2Nor * $bx2h2) + ($x3Nor * $bx3h2) + ($x4Nor * $bx4h2);
								$h1Sig = 1 / (1 + exp($h1 * -1));
								$h2Sig = 1 / (1 + exp($h2 * -1));

								//hitung nilai output
								$out = $bbiaso + ($h1Sig * $bh1) + ($h2Sig * $bh2);
								$outSig = 1 / (1 + exp($out * -1));
								$err = ($targetNor - $outSig);
								$error = pow($err, 2);
								$te = 0.3;
								global $dnf;
								$dn1 = ($maxIn - $minIn);
								$dn = $outSig * $dn1;
								$dnf = $dn + $minIn;
								if ($error > $te) {
									backpropagationBaju2($outSig, $targetNor, $h1Sig, $h2Sig, $bh1, $bh2, $x1Nor, $x2Nor, $x3Nor, $x4Nor, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bbiaso, $x1, $x2, $x3, $x4, $t);
								} else {
									// echo "Target =" . $targetNor . "<br>";
									// echo "Output =" . $outSig . "<br>";
									// $err = ($targetNor - $outSig);
									// $error = pow($err, 2);
									// echo "Error = " . $error . "<br><br>";
								}
							}
							function backpropagationBaju2($outSig, $targetNor, $h1Sig, $h2Sig, $bh1, $bh2, $x1Nor, $x2Nor, $x3Nor, $x4Nor, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bbiaso, $x1, $x2, $x3, $x4, $t)
							{
								$alpha = 0.1;

								//Persamaan lima
								$dk = ($targetNor - $outSig) * (1 - $outSig) * $outSig;
								// echo "<br>" . $dk;

								//Persamaan enam
								$deltawjk0 = $alpha * $dk;
								$deltawjk1 = $alpha * $dk * $h1Sig;
								$deltawjk2 = $alpha * $dk * $h2Sig;

								//Persamaan tujuh
								$din1 = $dk * $bh1;
								$din2 = $dk * $bh2;

								//Persamaan delapan
								$d1 = $din1 * $h1Sig * (1 - $h1Sig);
								$d2 = $din2 * $h2Sig * (1 - $h2Sig);

								//Persamaan sembilan VIJ Baru
								$x1h1n = $alpha * $d1 * $x1Nor;
								$x2h1n = $alpha * $d1 * $x2Nor;
								$x3h1n = $alpha * $d1 * $x3Nor;
								$x4h1n = $alpha * $d1 * $x4Nor;

								$x1h2n = $alpha * $d2 * $x1Nor;
								$x2h2n = $alpha * $d2 * $x2Nor;
								$x3h2n = $alpha * $d2 * $x3Nor;
								$x4h2n = $alpha * $d2 * $x4Nor;

								$deltav1 = $alpha * $d1;
								$deltav2 = $alpha * $d2;

								//Persamaan sepuluh
								$x1h1nn = $x1h1n +  $bx1h1;
								$x2h1nn = $x2h1n +  $bx2h1;
								$x3h1nn = $x3h1n +  $bx3h1;
								$x4h1nn = $x4h1n +  $bx4h1;

								$x1h2nn = $x1h2n +  $bx1h2;
								$x2h2nn = $x2h2n +  $bx2h2;
								$x3h2nn = $x3h2n +  $bx3h2;
								$x4h2nn = $x4h2n +  $bx4h2;

								//Persamaan sebelas
								$bbh1ko = $deltawjk1 + $bh1;
								$bbh2ko = $deltawjk2 + $bh2;

								$bibikh1 = $bbiash1 + $deltav1;
								$bibikh2 = $bbiash2 + $deltav2;

								$bibhki = $deltawjk0 + $bbiaso;

								feedForwardBaju2($x1, $x2, $x3, $x4, $t, $x1h1nn, $x2h1nn, $x3h1nn, $x4h1nn, $x1h2nn, $x2h2nn, $x3h2nn, $x4h2nn, $bibikh1, $bibikh2, $bbh1ko, $bbh2ko, $bibhki);
							}
							feedForwardBaju2(37, 57, 45, 74, 65, $bx1h1n, $bx2h1n, $bx3h1n, $bx4h1n, $bx1h2n, $bx2h2n, $bx3h2n, $bx4h2n, $bbiash1n, $bbiash2n, $bh1n, $bh2n, $bbiason);
							$dbaju2 = round($dnf);
							$arbaju = [$dbaju1, $dbaju2];







							// ($x1, $x2, $x3, $x4, $t, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bh1, $bh2, $bbiaso
							//Celana1
							function feedForwardCelana1($x1, $x2, $x3, $x4, $t, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bh1, $bh2, $bbiaso)
							{
								$maxIn    = max($x1, $x2, $x3, $x4, $t);
								$minIn    = min($x1, $x2, $x3, $x4, $t);

								//normalisasi data input
								$x1Nor = 0.8 * ($x1 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x2Nor = 0.8 * ($x2 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x3Nor = 0.8 * ($x3 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x4Nor = 0.8 * ($x4 - $minIn) / ($maxIn - $minIn) + 0.1;
								$targetNor = 0.8 * ($t - $minIn) / ($maxIn - $minIn) + 0.1;

								//hitung nilai pada hidden layer
								$h1 = $bbiash1 + ($x1Nor * $bx1h1) + ($x2Nor * $bx2h1) + ($x3Nor * $bx3h1) + ($x4Nor * $bx4h1);
								$h2 = $bbiash2 + ($x1Nor * $bx1h2) + ($x2Nor * $bx2h2) + ($x3Nor * $bx3h2) + ($x4Nor * $bx4h2);
								$h1Sig = 1 / (1 + exp($h1 * -1));
								$h2Sig = 1 / (1 + exp($h2 * -1));

								//hitung nilai output
								$out = $bbiaso + ($h1Sig * $bh1) + ($h2Sig * $bh2);
								$outSig = 1 / (1 + exp($out * -1));
								$err = ($targetNor - $outSig);
								$error = pow($err, 2);
								$te = 0.3;
								global $dnf;
								$dn1 = ($maxIn - $minIn);
								$dn = $outSig * $dn1;
								$dnf = $dn + $minIn;
								if ($error > $te) {
									backpropagationCelana1($outSig, $targetNor, $h1Sig, $h2Sig, $bh1, $bh2, $x1Nor, $x2Nor, $x3Nor, $x4Nor, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bbiaso, $x1, $x2, $x3, $x4, $t);
								} else {
									// echo "Target =" . $targetNor . "<br>";
									// echo "Output =" . $outSig . "<br>";
									// $err = ($targetNor - $outSig);
									// $error = pow($err, 2);
									// echo "Error = " . $error . "<br><br>";
								}
							}
							function backpropagationCelana1($outSig, $targetNor, $h1Sig, $h2Sig, $bh1, $bh2, $x1Nor, $x2Nor, $x3Nor, $x4Nor, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bbiaso, $x1, $x2, $x3, $x4, $t)
							{
								$alpha = 0.1;

								//Persamaan lima
								$dk = ($targetNor - $outSig) * (1 - $outSig) * $outSig;
								// echo "<br>" . $dk;

								//Persamaan enam
								$deltawjk0 = $alpha * $dk;
								$deltawjk1 = $alpha * $dk * $h1Sig;
								$deltawjk2 = $alpha * $dk * $h2Sig;

								//Persamaan tujuh
								$din1 = $dk * $bh1;
								$din2 = $dk * $bh2;

								//Persamaan delapan
								$d1 = $din1 * $h1Sig * (1 - $h1Sig);
								$d2 = $din2 * $h2Sig * (1 - $h2Sig);

								//Persamaan sembilan VIJ Baru
								$x1h1n = $alpha * $d1 * $x1Nor;
								$x2h1n = $alpha * $d1 * $x2Nor;
								$x3h1n = $alpha * $d1 * $x3Nor;
								$x4h1n = $alpha * $d1 * $x4Nor;

								$x1h2n = $alpha * $d2 * $x1Nor;
								$x2h2n = $alpha * $d2 * $x2Nor;
								$x3h2n = $alpha * $d2 * $x3Nor;
								$x4h2n = $alpha * $d2 * $x4Nor;

								$deltav1 = $alpha * $d1;
								$deltav2 = $alpha * $d2;

								//Persamaan sepuluh
								$x1h1nn = $x1h1n +  $bx1h1;
								$x2h1nn = $x2h1n +  $bx2h1;
								$x3h1nn = $x3h1n +  $bx3h1;
								$x4h1nn = $x4h1n +  $bx4h1;

								$x1h2nn = $x1h2n +  $bx1h2;
								$x2h2nn = $x2h2n +  $bx2h2;
								$x3h2nn = $x3h2n +  $bx3h2;
								$x4h2nn = $x4h2n +  $bx4h2;

								//Persamaan sebelas
								$bbh1ko = $deltawjk1 + $bh1;
								$bbh2ko = $deltawjk2 + $bh2;

								$bibikh1 = $bbiash1 + $deltav1;
								$bibikh2 = $bbiash2 + $deltav2;

								$bibhki = $deltawjk0 + $bbiaso;

								feedForwardTrain($x1, $x2, $x3, $x4, $t, $x1h1nn, $x2h1nn, $x3h1nn, $x4h1nn, $x1h2nn, $x2h2nn, $x3h2nn, $x4h2nn, $bibikh1, $bibikh2, $bbh1ko, $bbh2ko, $bibhki);
							}
							feedForwardCelana1(20, 64, 20,    66, 44,    $bx1h1n, $bx2h1n, $bx3h1n, $bx4h1n, $bx1h2n, $bx2h2n, $bx3h2n, $bx4h2n, $bbiash1n, $bbiash2n, $bh1n, $bh2n, $bbiason);
							$dcelana1 = round($dnf);
							//Celana2
							function feedForwardCelana2($x1, $x2, $x3, $x4, $t, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bh1, $bh2, $bbiaso)
							{
								$maxIn    = max($x1, $x2, $x3, $x4, $t);
								$minIn    = min($x1, $x2, $x3, $x4, $t);

								//normalisasi data input
								$x1Nor = 0.8 * ($x1 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x2Nor = 0.8 * ($x2 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x3Nor = 0.8 * ($x3 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x4Nor = 0.8 * ($x4 - $minIn) / ($maxIn - $minIn) + 0.1;
								$targetNor = 0.8 * ($t - $minIn) / ($maxIn - $minIn) + 0.1;

								//hitung nilai pada hidden layer
								$h1 = $bbiash1 + ($x1Nor * $bx1h1) + ($x2Nor * $bx2h1) + ($x3Nor * $bx3h1) + ($x4Nor * $bx4h1);
								$h2 = $bbiash2 + ($x1Nor * $bx1h2) + ($x2Nor * $bx2h2) + ($x3Nor * $bx3h2) + ($x4Nor * $bx4h2);
								$h1Sig = 1 / (1 + exp($h1 * -1));
								$h2Sig = 1 / (1 + exp($h2 * -1));

								//hitung nilai output
								$out = $bbiaso + ($h1Sig * $bh1) + ($h2Sig * $bh2);
								$outSig = 1 / (1 + exp($out * -1));
								$err = ($targetNor - $outSig);
								$error = pow($err, 2);
								$te = 0.3;
								global $dnf;
								$dn1 = ($maxIn - $minIn);
								$dn = $outSig * $dn1;
								$dnf = $dn + $minIn;
								if ($error > $te) {
									backpropagationCelana2($outSig, $targetNor, $h1Sig, $h2Sig, $bh1, $bh2, $x1Nor, $x2Nor, $x3Nor, $x4Nor, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bbiaso, $x1, $x2, $x3, $x4, $t);
								} else {
									// echo "Target =" . $targetNor . "<br>";
									// echo "Output =" . $outSig . "<br>";
									// $err = ($targetNor - $outSig);
									// $error = pow($err, 2);
									// echo "Error = " . $error . "<br><br>";
								}
							}
							function backpropagationCelana2($outSig, $targetNor, $h1Sig, $h2Sig, $bh1, $bh2, $x1Nor, $x2Nor, $x3Nor, $x4Nor, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bbiaso, $x1, $x2, $x3, $x4, $t)
							{
								$alpha = 0.1;

								//Persamaan lima
								$dk = ($targetNor - $outSig) * (1 - $outSig) * $outSig;
								// echo "<br>" . $dk;

								//Persamaan enam
								$deltawjk0 = $alpha * $dk;
								$deltawjk1 = $alpha * $dk * $h1Sig;
								$deltawjk2 = $alpha * $dk * $h2Sig;

								//Persamaan tujuh
								$din1 = $dk * $bh1;
								$din2 = $dk * $bh2;

								//Persamaan delapan
								$d1 = $din1 * $h1Sig * (1 - $h1Sig);
								$d2 = $din2 * $h2Sig * (1 - $h2Sig);

								//Persamaan sembilan VIJ Baru
								$x1h1n = $alpha * $d1 * $x1Nor;
								$x2h1n = $alpha * $d1 * $x2Nor;
								$x3h1n = $alpha * $d1 * $x3Nor;
								$x4h1n = $alpha * $d1 * $x4Nor;

								$x1h2n = $alpha * $d2 * $x1Nor;
								$x2h2n = $alpha * $d2 * $x2Nor;
								$x3h2n = $alpha * $d2 * $x3Nor;
								$x4h2n = $alpha * $d2 * $x4Nor;

								$deltav1 = $alpha * $d1;
								$deltav2 = $alpha * $d2;

								//Persamaan sepuluh
								$x1h1nn = $x1h1n +  $bx1h1;
								$x2h1nn = $x2h1n +  $bx2h1;
								$x3h1nn = $x3h1n +  $bx3h1;
								$x4h1nn = $x4h1n +  $bx4h1;

								$x1h2nn = $x1h2n +  $bx1h2;
								$x2h2nn = $x2h2n +  $bx2h2;
								$x3h2nn = $x3h2n +  $bx3h2;
								$x4h2nn = $x4h2n +  $bx4h2;

								//Persamaan sebelas
								$bbh1ko = $deltawjk1 + $bh1;
								$bbh2ko = $deltawjk2 + $bh2;

								$bibikh1 = $bbiash1 + $deltav1;
								$bibikh2 = $bbiash2 + $deltav2;

								$bibhki = $deltawjk0 + $bbiaso;

								feedForwardCelana2($x1, $x2, $x3, $x4, $t, $x1h1nn, $x2h1nn, $x3h1nn, $x4h1nn, $x1h2nn, $x2h2nn, $x3h2nn, $x4h2nn, $bibikh1, $bibikh2, $bbh1ko, $bbh2ko, $bibhki);
							}
							feedForwardCelana2(8, 50, 29,    70, 83, $bx1h1n, $bx2h1n, $bx3h1n, $bx4h1n, $bx1h2n, $bx2h2n, $bx3h2n, $bx4h2n, $bbiash1n, $bbiash2n, $bh1n, $bh2n, $bbiason);
							$dcelana2 = round($dnf);
							$arcelana = [$dcelana1, $dcelana2];







							// ($x1, $x2, $x3, $x4, $t, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bh1, $bh2, $bbiaso
							//Dompet1
							function feedForwardDompet1($x1, $x2, $x3, $x4, $t, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bh1, $bh2, $bbiaso)
							{
								$maxIn    = max($x1, $x2, $x3, $x4, $t);
								$minIn    = min($x1, $x2, $x3, $x4, $t);

								//normalisasi data input
								$x1Nor = 0.8 * ($x1 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x2Nor = 0.8 * ($x2 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x3Nor = 0.8 * ($x3 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x4Nor = 0.8 * ($x4 - $minIn) / ($maxIn - $minIn) + 0.1;
								$targetNor = 0.8 * ($t - $minIn) / ($maxIn - $minIn) + 0.1;

								//hitung nilai pada hidden layer
								$h1 = $bbiash1 + ($x1Nor * $bx1h1) + ($x2Nor * $bx2h1) + ($x3Nor * $bx3h1) + ($x4Nor * $bx4h1);
								$h2 = $bbiash2 + ($x1Nor * $bx1h2) + ($x2Nor * $bx2h2) + ($x3Nor * $bx3h2) + ($x4Nor * $bx4h2);
								$h1Sig = 1 / (1 + exp($h1 * -1));
								$h2Sig = 1 / (1 + exp($h2 * -1));

								//hitung nilai output
								$out = $bbiaso + ($h1Sig * $bh1) + ($h2Sig * $bh2);
								$outSig = 1 / (1 + exp($out * -1));
								$err = ($targetNor - $outSig);
								$error = pow($err, 2);
								$te = 0.3;
								global $dnf;
								$dn1 = ($maxIn - $minIn);
								$dn = $outSig * $dn1;
								$dnf = $dn + $minIn;
								if ($error > $te) {
									backpropagationDompet1($outSig, $targetNor, $h1Sig, $h2Sig, $bh1, $bh2, $x1Nor, $x2Nor, $x3Nor, $x4Nor, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bbiaso, $x1, $x2, $x3, $x4, $t);
								} else {
									// echo "Target =" . $targetNor . "<br>";
									// echo "Output =" . $outSig . "<br>";
									// $err = ($targetNor - $outSig);
									// $error = pow($err, 2);
									// echo "Error = " . $error . "<br><br>";
								}
							}
							function backpropagationDompet1($outSig, $targetNor, $h1Sig, $h2Sig, $bh1, $bh2, $x1Nor, $x2Nor, $x3Nor, $x4Nor, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bbiaso, $x1, $x2, $x3, $x4, $t)
							{
								$alpha = 0.1;

								//Persamaan lima
								$dk = ($targetNor - $outSig) * (1 - $outSig) * $outSig;
								// echo "<br>" . $dk;

								//Persamaan enam
								$deltawjk0 = $alpha * $dk;
								$deltawjk1 = $alpha * $dk * $h1Sig;
								$deltawjk2 = $alpha * $dk * $h2Sig;

								//Persamaan tujuh
								$din1 = $dk * $bh1;
								$din2 = $dk * $bh2;

								//Persamaan delapan
								$d1 = $din1 * $h1Sig * (1 - $h1Sig);
								$d2 = $din2 * $h2Sig * (1 - $h2Sig);

								//Persamaan sembilan VIJ Baru
								$x1h1n = $alpha * $d1 * $x1Nor;
								$x2h1n = $alpha * $d1 * $x2Nor;
								$x3h1n = $alpha * $d1 * $x3Nor;
								$x4h1n = $alpha * $d1 * $x4Nor;

								$x1h2n = $alpha * $d2 * $x1Nor;
								$x2h2n = $alpha * $d2 * $x2Nor;
								$x3h2n = $alpha * $d2 * $x3Nor;
								$x4h2n = $alpha * $d2 * $x4Nor;

								$deltav1 = $alpha * $d1;
								$deltav2 = $alpha * $d2;

								//Persamaan sepuluh
								$x1h1nn = $x1h1n +  $bx1h1;
								$x2h1nn = $x2h1n +  $bx2h1;
								$x3h1nn = $x3h1n +  $bx3h1;
								$x4h1nn = $x4h1n +  $bx4h1;

								$x1h2nn = $x1h2n +  $bx1h2;
								$x2h2nn = $x2h2n +  $bx2h2;
								$x3h2nn = $x3h2n +  $bx3h2;
								$x4h2nn = $x4h2n +  $bx4h2;

								//Persamaan sebelas
								$bbh1ko = $deltawjk1 + $bh1;
								$bbh2ko = $deltawjk2 + $bh2;

								$bibikh1 = $bbiash1 + $deltav1;
								$bibikh2 = $bbiash2 + $deltav2;

								$bibhki = $deltawjk0 + $bbiaso;

								feedForwardTrain($x1, $x2, $x3, $x4, $t, $x1h1nn, $x2h1nn, $x3h1nn, $x4h1nn, $x1h2nn, $x2h2nn, $x3h2nn, $x4h2nn, $bibikh1, $bibikh2, $bbh1ko, $bbh2ko, $bibhki);
							}
							feedForwardDompet1(74, 22,    20,    66,    69,    $bx1h1n, $bx2h1n, $bx3h1n, $bx4h1n, $bx1h2n, $bx2h2n, $bx3h2n, $bx4h2n, $bbiash1n, $bbiash2n, $bh1n, $bh2n, $bbiason);
							$ddompet1 = round($dnf);
							//Dompet2
							function feedForwardDompet2($x1, $x2, $x3, $x4, $t, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bh1, $bh2, $bbiaso)
							{
								$maxIn    = max($x1, $x2, $x3, $x4, $t);
								$minIn    = min($x1, $x2, $x3, $x4, $t);

								//normalisasi data input
								$x1Nor = 0.8 * ($x1 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x2Nor = 0.8 * ($x2 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x3Nor = 0.8 * ($x3 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x4Nor = 0.8 * ($x4 - $minIn) / ($maxIn - $minIn) + 0.1;
								$targetNor = 0.8 * ($t - $minIn) / ($maxIn - $minIn) + 0.1;

								//hitung nilai pada hidden layer
								$h1 = $bbiash1 + ($x1Nor * $bx1h1) + ($x2Nor * $bx2h1) + ($x3Nor * $bx3h1) + ($x4Nor * $bx4h1);
								$h2 = $bbiash2 + ($x1Nor * $bx1h2) + ($x2Nor * $bx2h2) + ($x3Nor * $bx3h2) + ($x4Nor * $bx4h2);
								$h1Sig = 1 / (1 + exp($h1 * -1));
								$h2Sig = 1 / (1 + exp($h2 * -1));

								//hitung nilai output
								$out = $bbiaso + ($h1Sig * $bh1) + ($h2Sig * $bh2);
								$outSig = 1 / (1 + exp($out * -1));
								$err = ($targetNor - $outSig);
								$error = pow($err, 2);
								$te = 0.3;
								global $dnf;
								$dn1 = ($maxIn - $minIn);
								$dn = $outSig * $dn1;
								$dnf = $dn + $minIn;
								if ($error > $te) {
									backpropagationDompet2($outSig, $targetNor, $h1Sig, $h2Sig, $bh1, $bh2, $x1Nor, $x2Nor, $x3Nor, $x4Nor, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bbiaso, $x1, $x2, $x3, $x4, $t);
								} else {
									// echo "Target =" . $targetNor . "<br>";
									// echo "Output =" . $outSig . "<br>";
									// $err = ($targetNor - $outSig);
									// $error = pow($err, 2);
									// echo "Error = " . $error . "<br><br>";
								}
							}
							function backpropagationDompet2($outSig, $targetNor, $h1Sig, $h2Sig, $bh1, $bh2, $x1Nor, $x2Nor, $x3Nor, $x4Nor, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bbiaso, $x1, $x2, $x3, $x4, $t)
							{
								$alpha = 0.1;

								//Persamaan lima
								$dk = ($targetNor - $outSig) * (1 - $outSig) * $outSig;
								// echo "<br>" . $dk;

								//Persamaan enam
								$deltawjk0 = $alpha * $dk;
								$deltawjk1 = $alpha * $dk * $h1Sig;
								$deltawjk2 = $alpha * $dk * $h2Sig;

								//Persamaan tujuh
								$din1 = $dk * $bh1;
								$din2 = $dk * $bh2;

								//Persamaan delapan
								$d1 = $din1 * $h1Sig * (1 - $h1Sig);
								$d2 = $din2 * $h2Sig * (1 - $h2Sig);

								//Persamaan sembilan VIJ Baru
								$x1h1n = $alpha * $d1 * $x1Nor;
								$x2h1n = $alpha * $d1 * $x2Nor;
								$x3h1n = $alpha * $d1 * $x3Nor;
								$x4h1n = $alpha * $d1 * $x4Nor;

								$x1h2n = $alpha * $d2 * $x1Nor;
								$x2h2n = $alpha * $d2 * $x2Nor;
								$x3h2n = $alpha * $d2 * $x3Nor;
								$x4h2n = $alpha * $d2 * $x4Nor;

								$deltav1 = $alpha * $d1;
								$deltav2 = $alpha * $d2;

								//Persamaan sepuluh
								$x1h1nn = $x1h1n +  $bx1h1;
								$x2h1nn = $x2h1n +  $bx2h1;
								$x3h1nn = $x3h1n +  $bx3h1;
								$x4h1nn = $x4h1n +  $bx4h1;

								$x1h2nn = $x1h2n +  $bx1h2;
								$x2h2nn = $x2h2n +  $bx2h2;
								$x3h2nn = $x3h2n +  $bx3h2;
								$x4h2nn = $x4h2n +  $bx4h2;

								//Persamaan sebelas
								$bbh1ko = $deltawjk1 + $bh1;
								$bbh2ko = $deltawjk2 + $bh2;

								$bibikh1 = $bbiash1 + $deltav1;
								$bibikh2 = $bbiash2 + $deltav2;

								$bibhki = $deltawjk0 + $bbiaso;

								feedForwardDompet2($x1, $x2, $x3, $x4, $t, $x1h1nn, $x2h1nn, $x3h1nn, $x4h1nn, $x1h2nn, $x2h2nn, $x3h2nn, $x4h2nn, $bibikh1, $bibikh2, $bbh1ko, $bbh2ko, $bibhki);
							}
							feedForwardDompet2(31, 65,    52, 13,    57, $bx1h1n, $bx2h1n, $bx3h1n, $bx4h1n, $bx1h2n, $bx2h2n, $bx3h2n, $bx4h2n, $bbiash1n, $bbiash2n, $bh1n, $bh2n, $bbiason);
							$ddompet2 = round($dnf);
							$ardompet = [$ddompet1, $ddompet2];






							// ($x1, $x2, $x3, $x4, $t, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bh1, $bh2, $bbiaso
							//Sepatu
							function feedForwardSepatu1($x1, $x2, $x3, $x4, $t, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bh1, $bh2, $bbiaso)
							{
								$maxIn    = max($x1, $x2, $x3, $x4, $t);
								$minIn    = min($x1, $x2, $x3, $x4, $t);

								//normalisasi data input
								$x1Nor = 0.8 * ($x1 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x2Nor = 0.8 * ($x2 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x3Nor = 0.8 * ($x3 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x4Nor = 0.8 * ($x4 - $minIn) / ($maxIn - $minIn) + 0.1;
								$targetNor = 0.8 * ($t - $minIn) / ($maxIn - $minIn) + 0.1;

								//hitung nilai pada hidden layer
								$h1 = $bbiash1 + ($x1Nor * $bx1h1) + ($x2Nor * $bx2h1) + ($x3Nor * $bx3h1) + ($x4Nor * $bx4h1);
								$h2 = $bbiash2 + ($x1Nor * $bx1h2) + ($x2Nor * $bx2h2) + ($x3Nor * $bx3h2) + ($x4Nor * $bx4h2);
								$h1Sig = 1 / (1 + exp($h1 * -1));
								$h2Sig = 1 / (1 + exp($h2 * -1));

								//hitung nilai output
								$out = $bbiaso + ($h1Sig * $bh1) + ($h2Sig * $bh2);
								$outSig = 1 / (1 + exp($out * -1));
								$err = ($targetNor - $outSig);
								$error = pow($err, 2);
								$te = 0.3;
								global $dnf;
								$dn1 = ($maxIn - $minIn);
								$dn = $outSig * $dn1;
								$dnf = $dn + $minIn;
								if ($error > $te) {
									backpropagationSepatu1($outSig, $targetNor, $h1Sig, $h2Sig, $bh1, $bh2, $x1Nor, $x2Nor, $x3Nor, $x4Nor, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bbiaso, $x1, $x2, $x3, $x4, $t);
								} else {
									// echo "Target =" . $targetNor . "<br>";
									// echo "Output =" . $outSig . "<br>";
									// $err = ($targetNor - $outSig);
									// $error = pow($err, 2);
									// echo "Error = " . $error . "<br><br>";
								}
							}
							function backpropagationSepatu1($outSig, $targetNor, $h1Sig, $h2Sig, $bh1, $bh2, $x1Nor, $x2Nor, $x3Nor, $x4Nor, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bbiaso, $x1, $x2, $x3, $x4, $t)
							{
								$alpha = 0.1;

								//Persamaan lima
								$dk = ($targetNor - $outSig) * (1 - $outSig) * $outSig;
								// echo "<br>" . $dk;

								//Persamaan enam
								$deltawjk0 = $alpha * $dk;
								$deltawjk1 = $alpha * $dk * $h1Sig;
								$deltawjk2 = $alpha * $dk * $h2Sig;

								//Persamaan tujuh
								$din1 = $dk * $bh1;
								$din2 = $dk * $bh2;

								//Persamaan delapan
								$d1 = $din1 * $h1Sig * (1 - $h1Sig);
								$d2 = $din2 * $h2Sig * (1 - $h2Sig);

								//Persamaan sembilan VIJ Baru
								$x1h1n = $alpha * $d1 * $x1Nor;
								$x2h1n = $alpha * $d1 * $x2Nor;
								$x3h1n = $alpha * $d1 * $x3Nor;
								$x4h1n = $alpha * $d1 * $x4Nor;

								$x1h2n = $alpha * $d2 * $x1Nor;
								$x2h2n = $alpha * $d2 * $x2Nor;
								$x3h2n = $alpha * $d2 * $x3Nor;
								$x4h2n = $alpha * $d2 * $x4Nor;

								$deltav1 = $alpha * $d1;
								$deltav2 = $alpha * $d2;

								//Persamaan sepuluh
								$x1h1nn = $x1h1n +  $bx1h1;
								$x2h1nn = $x2h1n +  $bx2h1;
								$x3h1nn = $x3h1n +  $bx3h1;
								$x4h1nn = $x4h1n +  $bx4h1;

								$x1h2nn = $x1h2n +  $bx1h2;
								$x2h2nn = $x2h2n +  $bx2h2;
								$x3h2nn = $x3h2n +  $bx3h2;
								$x4h2nn = $x4h2n +  $bx4h2;

								//Persamaan sebelas
								$bbh1ko = $deltawjk1 + $bh1;
								$bbh2ko = $deltawjk2 + $bh2;

								$bibikh1 = $bbiash1 + $deltav1;
								$bibikh2 = $bbiash2 + $deltav2;

								$bibhki = $deltawjk0 + $bbiaso;

								feedForwardTrain($x1, $x2, $x3, $x4, $t, $x1h1nn, $x2h1nn, $x3h1nn, $x4h1nn, $x1h2nn, $x2h2nn, $x3h2nn, $x4h2nn, $bibikh1, $bibikh2, $bbh1ko, $bbh2ko, $bibhki);
							}
							feedForwardSepatu1(70, 70,    38, 38,    62,    $bx1h1n, $bx2h1n, $bx3h1n, $bx4h1n, $bx1h2n, $bx2h2n, $bx3h2n, $bx4h2n, $bbiash1n, $bbiash2n, $bh1n, $bh2n, $bbiason);
							$dsepatu1 = round($dnf);
							//Sepatu2
							function feedForwardSepatu2($x1, $x2, $x3, $x4, $t, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bh1, $bh2, $bbiaso)
							{
								$maxIn    = max($x1, $x2, $x3, $x4, $t);
								$minIn    = min($x1, $x2, $x3, $x4, $t);

								//normalisasi data input
								$x1Nor = 0.8 * ($x1 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x2Nor = 0.8 * ($x2 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x3Nor = 0.8 * ($x3 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x4Nor = 0.8 * ($x4 - $minIn) / ($maxIn - $minIn) + 0.1;
								$targetNor = 0.8 * ($t - $minIn) / ($maxIn - $minIn) + 0.1;

								//hitung nilai pada hidden layer
								$h1 = $bbiash1 + ($x1Nor * $bx1h1) + ($x2Nor * $bx2h1) + ($x3Nor * $bx3h1) + ($x4Nor * $bx4h1);
								$h2 = $bbiash2 + ($x1Nor * $bx1h2) + ($x2Nor * $bx2h2) + ($x3Nor * $bx3h2) + ($x4Nor * $bx4h2);
								$h1Sig = 1 / (1 + exp($h1 * -1));
								$h2Sig = 1 / (1 + exp($h2 * -1));

								//hitung nilai output
								$out = $bbiaso + ($h1Sig * $bh1) + ($h2Sig * $bh2);
								$outSig = 1 / (1 + exp($out * -1));
								$err = ($targetNor - $outSig);
								$error = pow($err, 2);
								$te = 0.3;
								global $dnf;
								$dn1 = ($maxIn - $minIn);
								$dn = $outSig * $dn1;
								$dnf = $dn + $minIn;
								if ($error > $te) {
									backpropagationSepatu2($outSig, $targetNor, $h1Sig, $h2Sig, $bh1, $bh2, $x1Nor, $x2Nor, $x3Nor, $x4Nor, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bbiaso, $x1, $x2, $x3, $x4, $t);
								} else {
									// echo "Target =" . $targetNor . "<br>";
									// echo "Output =" . $outSig . "<br>";
									// $err = ($targetNor - $outSig);
									// $error = pow($err, 2);
									// echo "Error = " . $error . "<br><br>";
								}
							}
							function backpropagationSepatu2($outSig, $targetNor, $h1Sig, $h2Sig, $bh1, $bh2, $x1Nor, $x2Nor, $x3Nor, $x4Nor, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bbiaso, $x1, $x2, $x3, $x4, $t)
							{
								$alpha = 0.1;

								//Persamaan lima
								$dk = ($targetNor - $outSig) * (1 - $outSig) * $outSig;
								// echo "<br>" . $dk;

								//Persamaan enam
								$deltawjk0 = $alpha * $dk;
								$deltawjk1 = $alpha * $dk * $h1Sig;
								$deltawjk2 = $alpha * $dk * $h2Sig;

								//Persamaan tujuh
								$din1 = $dk * $bh1;
								$din2 = $dk * $bh2;

								//Persamaan delapan
								$d1 = $din1 * $h1Sig * (1 - $h1Sig);
								$d2 = $din2 * $h2Sig * (1 - $h2Sig);

								//Persamaan sembilan VIJ Baru
								$x1h1n = $alpha * $d1 * $x1Nor;
								$x2h1n = $alpha * $d1 * $x2Nor;
								$x3h1n = $alpha * $d1 * $x3Nor;
								$x4h1n = $alpha * $d1 * $x4Nor;

								$x1h2n = $alpha * $d2 * $x1Nor;
								$x2h2n = $alpha * $d2 * $x2Nor;
								$x3h2n = $alpha * $d2 * $x3Nor;
								$x4h2n = $alpha * $d2 * $x4Nor;

								$deltav1 = $alpha * $d1;
								$deltav2 = $alpha * $d2;

								//Persamaan sepuluh
								$x1h1nn = $x1h1n +  $bx1h1;
								$x2h1nn = $x2h1n +  $bx2h1;
								$x3h1nn = $x3h1n +  $bx3h1;
								$x4h1nn = $x4h1n +  $bx4h1;

								$x1h2nn = $x1h2n +  $bx1h2;
								$x2h2nn = $x2h2n +  $bx2h2;
								$x3h2nn = $x3h2n +  $bx3h2;
								$x4h2nn = $x4h2n +  $bx4h2;

								//Persamaan sebelas
								$bbh1ko = $deltawjk1 + $bh1;
								$bbh2ko = $deltawjk2 + $bh2;

								$bibikh1 = $bbiash1 + $deltav1;
								$bibikh2 = $bbiash2 + $deltav2;

								$bibhki = $deltawjk0 + $bbiaso;

								feedForwardSepatu2($x1, $x2, $x3, $x4, $t, $x1h1nn, $x2h1nn, $x3h1nn, $x4h1nn, $x1h2nn, $x2h2nn, $x3h2nn, $x4h2nn, $bibikh1, $bibikh2, $bbh1ko, $bbh2ko, $bibhki);
							}
							feedForwardSepatu2(53,    53,    54,    55,    50,    $bx1h1n, $bx2h1n, $bx3h1n, $bx4h1n, $bx1h2n, $bx2h2n, $bx3h2n, $bx4h2n, $bbiash1n, $bbiash2n, $bh1n, $bh2n, $bbiason);
							$dsepatu2 = round($dnf);
							$arsepatu = [$dsepatu1, $dsepatu2];






							// ($x1, $x2, $x3, $x4, $t, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bh1, $bh2, $bbiaso
							//Jaket1
							function feedForwardJaket1($x1, $x2, $x3, $x4, $t, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bh1, $bh2, $bbiaso)
							{
								$maxIn    = max($x1, $x2, $x3, $x4, $t);
								$minIn    = min($x1, $x2, $x3, $x4, $t);

								//normalisasi data input
								$x1Nor = 0.8 * ($x1 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x2Nor = 0.8 * ($x2 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x3Nor = 0.8 * ($x3 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x4Nor = 0.8 * ($x4 - $minIn) / ($maxIn - $minIn) + 0.1;
								$targetNor = 0.8 * ($t - $minIn) / ($maxIn - $minIn) + 0.1;

								//hitung nilai pada hidden layer
								$h1 = $bbiash1 + ($x1Nor * $bx1h1) + ($x2Nor * $bx2h1) + ($x3Nor * $bx3h1) + ($x4Nor * $bx4h1);
								$h2 = $bbiash2 + ($x1Nor * $bx1h2) + ($x2Nor * $bx2h2) + ($x3Nor * $bx3h2) + ($x4Nor * $bx4h2);
								$h1Sig = 1 / (1 + exp($h1 * -1));
								$h2Sig = 1 / (1 + exp($h2 * -1));

								//hitung nilai output
								$out = $bbiaso + ($h1Sig * $bh1) + ($h2Sig * $bh2);
								$outSig = 1 / (1 + exp($out * -1));
								$err = ($targetNor - $outSig);
								$error = pow($err, 2);
								$te = 0.3;
								global $dnf;
								$dn1 = ($maxIn - $minIn);
								$dn = $outSig * $dn1;
								$dnf = $dn + $minIn;
								if ($error > $te) {
									backpropagationJaket1($outSig, $targetNor, $h1Sig, $h2Sig, $bh1, $bh2, $x1Nor, $x2Nor, $x3Nor, $x4Nor, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bbiaso, $x1, $x2, $x3, $x4, $t);
								} else {
									// echo "Target =" . $targetNor . "<br>";
									// echo "Output =" . $outSig . "<br>";
									// $err = ($targetNor - $outSig);
									// $error = pow($err, 2);
									// echo "Error = " . $error . "<br><br>";
								}
							}
							function backpropagationJaket1($outSig, $targetNor, $h1Sig, $h2Sig, $bh1, $bh2, $x1Nor, $x2Nor, $x3Nor, $x4Nor, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bbiaso, $x1, $x2, $x3, $x4, $t)
							{
								$alpha = 0.1;

								//Persamaan lima
								$dk = ($targetNor - $outSig) * (1 - $outSig) * $outSig;
								// echo "<br>" . $dk;

								//Persamaan enam
								$deltawjk0 = $alpha * $dk;
								$deltawjk1 = $alpha * $dk * $h1Sig;
								$deltawjk2 = $alpha * $dk * $h2Sig;

								//Persamaan tujuh
								$din1 = $dk * $bh1;
								$din2 = $dk * $bh2;

								//Persamaan delapan
								$d1 = $din1 * $h1Sig * (1 - $h1Sig);
								$d2 = $din2 * $h2Sig * (1 - $h2Sig);

								//Persamaan sembilan VIJ Baru
								$x1h1n = $alpha * $d1 * $x1Nor;
								$x2h1n = $alpha * $d1 * $x2Nor;
								$x3h1n = $alpha * $d1 * $x3Nor;
								$x4h1n = $alpha * $d1 * $x4Nor;

								$x1h2n = $alpha * $d2 * $x1Nor;
								$x2h2n = $alpha * $d2 * $x2Nor;
								$x3h2n = $alpha * $d2 * $x3Nor;
								$x4h2n = $alpha * $d2 * $x4Nor;

								$deltav1 = $alpha * $d1;
								$deltav2 = $alpha * $d2;

								//Persamaan sepuluh
								$x1h1nn = $x1h1n +  $bx1h1;
								$x2h1nn = $x2h1n +  $bx2h1;
								$x3h1nn = $x3h1n +  $bx3h1;
								$x4h1nn = $x4h1n +  $bx4h1;

								$x1h2nn = $x1h2n +  $bx1h2;
								$x2h2nn = $x2h2n +  $bx2h2;
								$x3h2nn = $x3h2n +  $bx3h2;
								$x4h2nn = $x4h2n +  $bx4h2;

								//Persamaan sebelas
								$bbh1ko = $deltawjk1 + $bh1;
								$bbh2ko = $deltawjk2 + $bh2;

								$bibikh1 = $bbiash1 + $deltav1;
								$bibikh2 = $bbiash2 + $deltav2;

								$bibhki = $deltawjk0 + $bbiaso;

								feedForwardTrain($x1, $x2, $x3, $x4, $t, $x1h1nn, $x2h1nn, $x3h1nn, $x4h1nn, $x1h2nn, $x2h2nn, $x3h2nn, $x4h2nn, $bibikh1, $bibikh2, $bbh1ko, $bbh2ko, $bibhki);
							}
							feedForwardJaket1(60, 61,    46, 71,    75,    $bx1h1n, $bx2h1n, $bx3h1n, $bx4h1n, $bx1h2n, $bx2h2n, $bx3h2n, $bx4h2n, $bbiash1n, $bbiash2n, $bh1n, $bh2n, $bbiason);
							$djaket1 = round($dnf);
							//Dompet2
							function feedForwardJaket2($x1, $x2, $x3, $x4, $t, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bh1, $bh2, $bbiaso)
							{
								$maxIn    = max($x1, $x2, $x3, $x4, $t);
								$minIn    = min($x1, $x2, $x3, $x4, $t);

								//normalisasi data input
								$x1Nor = 0.8 * ($x1 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x2Nor = 0.8 * ($x2 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x3Nor = 0.8 * ($x3 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x4Nor = 0.8 * ($x4 - $minIn) / ($maxIn - $minIn) + 0.1;
								$targetNor = 0.8 * ($t - $minIn) / ($maxIn - $minIn) + 0.1;

								//hitung nilai pada hidden layer
								$h1 = $bbiash1 + ($x1Nor * $bx1h1) + ($x2Nor * $bx2h1) + ($x3Nor * $bx3h1) + ($x4Nor * $bx4h1);
								$h2 = $bbiash2 + ($x1Nor * $bx1h2) + ($x2Nor * $bx2h2) + ($x3Nor * $bx3h2) + ($x4Nor * $bx4h2);
								$h1Sig = 1 / (1 + exp($h1 * -1));
								$h2Sig = 1 / (1 + exp($h2 * -1));

								//hitung nilai output
								$out = $bbiaso + ($h1Sig * $bh1) + ($h2Sig * $bh2);
								$outSig = 1 / (1 + exp($out * -1));
								$err = ($targetNor - $outSig);
								$error = pow($err, 2);
								$te = 0.3;
								global $dnf;
								$dn1 = ($maxIn - $minIn);
								$dn = $outSig * $dn1;
								$dnf = $dn + $minIn;
								if ($error > $te) {
									backpropagationJaket2($outSig, $targetNor, $h1Sig, $h2Sig, $bh1, $bh2, $x1Nor, $x2Nor, $x3Nor, $x4Nor, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bbiaso, $x1, $x2, $x3, $x4, $t);
								} else {
									// echo "Target =" . $targetNor . "<br>";
									// echo "Output =" . $outSig . "<br>";
									// $err = ($targetNor - $outSig);
									// $error = pow($err, 2);
									// echo "Error = " . $error . "<br><br>";
								}
							}
							function backpropagationJaket2($outSig, $targetNor, $h1Sig, $h2Sig, $bh1, $bh2, $x1Nor, $x2Nor, $x3Nor, $x4Nor, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bbiaso, $x1, $x2, $x3, $x4, $t)
							{
								$alpha = 0.1;

								//Persamaan lima
								$dk = ($targetNor - $outSig) * (1 - $outSig) * $outSig;
								// echo "<br>" . $dk;

								//Persamaan enam
								$deltawjk0 = $alpha * $dk;
								$deltawjk1 = $alpha * $dk * $h1Sig;
								$deltawjk2 = $alpha * $dk * $h2Sig;

								//Persamaan tujuh
								$din1 = $dk * $bh1;
								$din2 = $dk * $bh2;

								//Persamaan delapan
								$d1 = $din1 * $h1Sig * (1 - $h1Sig);
								$d2 = $din2 * $h2Sig * (1 - $h2Sig);

								//Persamaan sembilan VIJ Baru
								$x1h1n = $alpha * $d1 * $x1Nor;
								$x2h1n = $alpha * $d1 * $x2Nor;
								$x3h1n = $alpha * $d1 * $x3Nor;
								$x4h1n = $alpha * $d1 * $x4Nor;

								$x1h2n = $alpha * $d2 * $x1Nor;
								$x2h2n = $alpha * $d2 * $x2Nor;
								$x3h2n = $alpha * $d2 * $x3Nor;
								$x4h2n = $alpha * $d2 * $x4Nor;

								$deltav1 = $alpha * $d1;
								$deltav2 = $alpha * $d2;

								//Persamaan sepuluh
								$x1h1nn = $x1h1n +  $bx1h1;
								$x2h1nn = $x2h1n +  $bx2h1;
								$x3h1nn = $x3h1n +  $bx3h1;
								$x4h1nn = $x4h1n +  $bx4h1;

								$x1h2nn = $x1h2n +  $bx1h2;
								$x2h2nn = $x2h2n +  $bx2h2;
								$x3h2nn = $x3h2n +  $bx3h2;
								$x4h2nn = $x4h2n +  $bx4h2;

								//Persamaan sebelas
								$bbh1ko = $deltawjk1 + $bh1;
								$bbh2ko = $deltawjk2 + $bh2;

								$bibikh1 = $bbiash1 + $deltav1;
								$bibikh2 = $bbiash2 + $deltav2;

								$bibhki = $deltawjk0 + $bbiaso;

								feedForwardJaket2($x1, $x2, $x3, $x4, $t, $x1h1nn, $x2h1nn, $x3h1nn, $x4h1nn, $x1h2nn, $x2h2nn, $x3h2nn, $x4h2nn, $bibikh1, $bibikh2, $bbh1ko, $bbh2ko, $bibhki);
							}
							feedForwardJaket2(95, 40, 51,    51,    27,    $bx1h1n, $bx2h1n, $bx3h1n, $bx4h1n, $bx1h2n, $bx2h2n, $bx3h2n, $bx4h2n, $bbiash1n, $bbiash2n, $bh1n, $bh2n, $bbiason);
							$djaket2 = round($dnf);
							$arjaket = [$djaket1, $djaket2];





							// ($x1, $x2, $x3, $x4, $t, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bh1, $bh2, $bbiaso
							//Tas
							function feedForwardTas1($x1, $x2, $x3, $x4, $t, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bh1, $bh2, $bbiaso)
							{
								$maxIn    = max($x1, $x2, $x3, $x4, $t);
								$minIn    = min($x1, $x2, $x3, $x4, $t);

								//normalisasi data input
								$x1Nor = 0.8 * ($x1 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x2Nor = 0.8 * ($x2 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x3Nor = 0.8 * ($x3 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x4Nor = 0.8 * ($x4 - $minIn) / ($maxIn - $minIn) + 0.1;
								$targetNor = 0.8 * ($t - $minIn) / ($maxIn - $minIn) + 0.1;

								//hitung nilai pada hidden layer
								$h1 = $bbiash1 + ($x1Nor * $bx1h1) + ($x2Nor * $bx2h1) + ($x3Nor * $bx3h1) + ($x4Nor * $bx4h1);
								$h2 = $bbiash2 + ($x1Nor * $bx1h2) + ($x2Nor * $bx2h2) + ($x3Nor * $bx3h2) + ($x4Nor * $bx4h2);
								$h1Sig = 1 / (1 + exp($h1 * -1));
								$h2Sig = 1 / (1 + exp($h2 * -1));

								//hitung nilai output
								$out = $bbiaso + ($h1Sig * $bh1) + ($h2Sig * $bh2);
								$outSig = 1 / (1 + exp($out * -1));
								$err = ($targetNor - $outSig);
								$error = pow($err, 2);
								$te = 0.3;
								global $dnf;
								$dn1 = ($maxIn - $minIn);
								$dn = $outSig * $dn1;
								$dnf = $dn + $minIn;
								if ($error > $te) {
									backpropagationTas1($outSig, $targetNor, $h1Sig, $h2Sig, $bh1, $bh2, $x1Nor, $x2Nor, $x3Nor, $x4Nor, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bbiaso, $x1, $x2, $x3, $x4, $t);
								} else {
									// echo "Target =" . $targetNor . "<br>";
									// echo "Output =" . $outSig . "<br>";
									// $err = ($targetNor - $outSig);
									// $error = pow($err, 2);
									// echo "Error = " . $error . "<br><br>";
								}
							}
							function backpropagationTas1($outSig, $targetNor, $h1Sig, $h2Sig, $bh1, $bh2, $x1Nor, $x2Nor, $x3Nor, $x4Nor, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bbiaso, $x1, $x2, $x3, $x4, $t)
							{
								$alpha = 0.1;

								//Persamaan lima
								$dk = ($targetNor - $outSig) * (1 - $outSig) * $outSig;
								// echo "<br>" . $dk;

								//Persamaan enam
								$deltawjk0 = $alpha * $dk;
								$deltawjk1 = $alpha * $dk * $h1Sig;
								$deltawjk2 = $alpha * $dk * $h2Sig;

								//Persamaan tujuh
								$din1 = $dk * $bh1;
								$din2 = $dk * $bh2;

								//Persamaan delapan
								$d1 = $din1 * $h1Sig * (1 - $h1Sig);
								$d2 = $din2 * $h2Sig * (1 - $h2Sig);

								//Persamaan sembilan VIJ Baru
								$x1h1n = $alpha * $d1 * $x1Nor;
								$x2h1n = $alpha * $d1 * $x2Nor;
								$x3h1n = $alpha * $d1 * $x3Nor;
								$x4h1n = $alpha * $d1 * $x4Nor;

								$x1h2n = $alpha * $d2 * $x1Nor;
								$x2h2n = $alpha * $d2 * $x2Nor;
								$x3h2n = $alpha * $d2 * $x3Nor;
								$x4h2n = $alpha * $d2 * $x4Nor;

								$deltav1 = $alpha * $d1;
								$deltav2 = $alpha * $d2;

								//Persamaan sepuluh
								$x1h1nn = $x1h1n +  $bx1h1;
								$x2h1nn = $x2h1n +  $bx2h1;
								$x3h1nn = $x3h1n +  $bx3h1;
								$x4h1nn = $x4h1n +  $bx4h1;

								$x1h2nn = $x1h2n +  $bx1h2;
								$x2h2nn = $x2h2n +  $bx2h2;
								$x3h2nn = $x3h2n +  $bx3h2;
								$x4h2nn = $x4h2n +  $bx4h2;

								//Persamaan sebelas
								$bbh1ko = $deltawjk1 + $bh1;
								$bbh2ko = $deltawjk2 + $bh2;

								$bibikh1 = $bbiash1 + $deltav1;
								$bibikh2 = $bbiash2 + $deltav2;

								$bibhki = $deltawjk0 + $bbiaso;

								feedForwardTrain($x1, $x2, $x3, $x4, $t, $x1h1nn, $x2h1nn, $x3h1nn, $x4h1nn, $x1h2nn, $x2h2nn, $x3h2nn, $x4h2nn, $bibikh1, $bibikh2, $bbh1ko, $bbh2ko, $bibhki);
							}
							feedForwardTas1(49, 51, 61, 2, 53,    $bx1h1n, $bx2h1n, $bx3h1n, $bx4h1n, $bx1h2n, $bx2h2n, $bx3h2n, $bx4h2n, $bbiash1n, $bbiash2n, $bh1n, $bh2n, $bbiason);
							$dtas1 = round($dnf);
							//Dompet2
							function feedForwardTas2($x1, $x2, $x3, $x4, $t, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bh1, $bh2, $bbiaso)
							{
								$maxIn    = max($x1, $x2, $x3, $x4, $t);
								$minIn    = min($x1, $x2, $x3, $x4, $t);

								//normalisasi data input
								$x1Nor = 0.8 * ($x1 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x2Nor = 0.8 * ($x2 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x3Nor = 0.8 * ($x3 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x4Nor = 0.8 * ($x4 - $minIn) / ($maxIn - $minIn) + 0.1;
								$targetNor = 0.8 * ($t - $minIn) / ($maxIn - $minIn) + 0.1;

								//hitung nilai pada hidden layer
								$h1 = $bbiash1 + ($x1Nor * $bx1h1) + ($x2Nor * $bx2h1) + ($x3Nor * $bx3h1) + ($x4Nor * $bx4h1);
								$h2 = $bbiash2 + ($x1Nor * $bx1h2) + ($x2Nor * $bx2h2) + ($x3Nor * $bx3h2) + ($x4Nor * $bx4h2);
								$h1Sig = 1 / (1 + exp($h1 * -1));
								$h2Sig = 1 / (1 + exp($h2 * -1));

								//hitung nilai output
								$out = $bbiaso + ($h1Sig * $bh1) + ($h2Sig * $bh2);
								$outSig = 1 / (1 + exp($out * -1));
								$err = ($targetNor - $outSig);
								$error = pow($err, 2);
								$te = 0.3;
								global $dnf;
								$dn1 = ($maxIn - $minIn);
								$dn = $outSig * $dn1;
								$dnf = $dn + $minIn;
								if ($error > $te) {
									backpropagationTas2($outSig, $targetNor, $h1Sig, $h2Sig, $bh1, $bh2, $x1Nor, $x2Nor, $x3Nor, $x4Nor, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bbiaso, $x1, $x2, $x3, $x4, $t);
								} else {
									// echo "Target =" . $targetNor . "<br>";
									// echo "Output =" . $outSig . "<br>";
									// $err = ($targetNor - $outSig);
									// $error = pow($err, 2);
									// echo "Error = " . $error . "<br><br>";
								}
							}
							function backpropagationTas2($outSig, $targetNor, $h1Sig, $h2Sig, $bh1, $bh2, $x1Nor, $x2Nor, $x3Nor, $x4Nor, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bbiaso, $x1, $x2, $x3, $x4, $t)
							{
								$alpha = 0.1;

								//Persamaan lima
								$dk = ($targetNor - $outSig) * (1 - $outSig) * $outSig;
								// echo "<br>" . $dk;

								//Persamaan enam
								$deltawjk0 = $alpha * $dk;
								$deltawjk1 = $alpha * $dk * $h1Sig;
								$deltawjk2 = $alpha * $dk * $h2Sig;

								//Persamaan tujuh
								$din1 = $dk * $bh1;
								$din2 = $dk * $bh2;

								//Persamaan delapan
								$d1 = $din1 * $h1Sig * (1 - $h1Sig);
								$d2 = $din2 * $h2Sig * (1 - $h2Sig);

								//Persamaan sembilan VIJ Baru
								$x1h1n = $alpha * $d1 * $x1Nor;
								$x2h1n = $alpha * $d1 * $x2Nor;
								$x3h1n = $alpha * $d1 * $x3Nor;
								$x4h1n = $alpha * $d1 * $x4Nor;

								$x1h2n = $alpha * $d2 * $x1Nor;
								$x2h2n = $alpha * $d2 * $x2Nor;
								$x3h2n = $alpha * $d2 * $x3Nor;
								$x4h2n = $alpha * $d2 * $x4Nor;

								$deltav1 = $alpha * $d1;
								$deltav2 = $alpha * $d2;

								//Persamaan sepuluh
								$x1h1nn = $x1h1n +  $bx1h1;
								$x2h1nn = $x2h1n +  $bx2h1;
								$x3h1nn = $x3h1n +  $bx3h1;
								$x4h1nn = $x4h1n +  $bx4h1;

								$x1h2nn = $x1h2n +  $bx1h2;
								$x2h2nn = $x2h2n +  $bx2h2;
								$x3h2nn = $x3h2n +  $bx3h2;
								$x4h2nn = $x4h2n +  $bx4h2;

								//Persamaan sebelas
								$bbh1ko = $deltawjk1 + $bh1;
								$bbh2ko = $deltawjk2 + $bh2;

								$bibikh1 = $bbiash1 + $deltav1;
								$bibikh2 = $bbiash2 + $deltav2;

								$bibhki = $deltawjk0 + $bbiaso;

								feedForwardTas2($x1, $x2, $x3, $x4, $t, $x1h1nn, $x2h1nn, $x3h1nn, $x4h1nn, $x1h2nn, $x2h2nn, $x3h2nn, $x4h2nn, $bibikh1, $bibikh2, $bbh1ko, $bbh2ko, $bibhki);
							}
							feedForwardTas2(65,    65, 2, 78,    84, $bx1h1n, $bx2h1n, $bx3h1n, $bx4h1n, $bx1h2n, $bx2h2n, $bx3h2n, $bx4h2n, $bbiash1n, $bbiash2n, $bh1n, $bh2n, $bbiason);
							$dtas2 = round($dnf);
							$artas = [$dtas1, $dtas2];





							// ($x1, $x2, $x3, $x4, $t, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bh1, $bh2, $bbiaso
							//Sandal
							function feedForwardSandal1($x1, $x2, $x3, $x4, $t, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bh1, $bh2, $bbiaso)
							{
								$maxIn    = max($x1, $x2, $x3, $x4, $t);
								$minIn    = min($x1, $x2, $x3, $x4, $t);

								//normalisasi data input
								$x1Nor = 0.8 * ($x1 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x2Nor = 0.8 * ($x2 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x3Nor = 0.8 * ($x3 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x4Nor = 0.8 * ($x4 - $minIn) / ($maxIn - $minIn) + 0.1;
								$targetNor = 0.8 * ($t - $minIn) / ($maxIn - $minIn) + 0.1;

								//hitung nilai pada hidden layer
								$h1 = $bbiash1 + ($x1Nor * $bx1h1) + ($x2Nor * $bx2h1) + ($x3Nor * $bx3h1) + ($x4Nor * $bx4h1);
								$h2 = $bbiash2 + ($x1Nor * $bx1h2) + ($x2Nor * $bx2h2) + ($x3Nor * $bx3h2) + ($x4Nor * $bx4h2);
								$h1Sig = 1 / (1 + exp($h1 * -1));
								$h2Sig = 1 / (1 + exp($h2 * -1));

								//hitung nilai output
								$out = $bbiaso + ($h1Sig * $bh1) + ($h2Sig * $bh2);
								$outSig = 1 / (1 + exp($out * -1));
								$err = ($targetNor - $outSig);
								$error = pow($err, 2);
								$te = 0.3;
								global $dnf;
								$dn1 = ($maxIn - $minIn);
								$dn = $outSig * $dn1;
								$dnf = $dn + $minIn;
								if ($error > $te) {
									backpropagationSandal1($outSig, $targetNor, $h1Sig, $h2Sig, $bh1, $bh2, $x1Nor, $x2Nor, $x3Nor, $x4Nor, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bbiaso, $x1, $x2, $x3, $x4, $t);
								} else {
									// echo "Target =" . $targetNor . "<br>";
									// echo "Output =" . $outSig . "<br>";
									// $err = ($targetNor - $outSig);
									// $error = pow($err, 2);
									// echo "Error = " . $error . "<br><br>";
								}
							}
							function backpropagationSandal1($outSig, $targetNor, $h1Sig, $h2Sig, $bh1, $bh2, $x1Nor, $x2Nor, $x3Nor, $x4Nor, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bbiaso, $x1, $x2, $x3, $x4, $t)
							{
								$alpha = 0.1;

								//Persamaan lima
								$dk = ($targetNor - $outSig) * (1 - $outSig) * $outSig;
								// echo "<br>" . $dk;

								//Persamaan enam
								$deltawjk0 = $alpha * $dk;
								$deltawjk1 = $alpha * $dk * $h1Sig;
								$deltawjk2 = $alpha * $dk * $h2Sig;

								//Persamaan tujuh
								$din1 = $dk * $bh1;
								$din2 = $dk * $bh2;

								//Persamaan delapan
								$d1 = $din1 * $h1Sig * (1 - $h1Sig);
								$d2 = $din2 * $h2Sig * (1 - $h2Sig);

								//Persamaan sembilan VIJ Baru
								$x1h1n = $alpha * $d1 * $x1Nor;
								$x2h1n = $alpha * $d1 * $x2Nor;
								$x3h1n = $alpha * $d1 * $x3Nor;
								$x4h1n = $alpha * $d1 * $x4Nor;

								$x1h2n = $alpha * $d2 * $x1Nor;
								$x2h2n = $alpha * $d2 * $x2Nor;
								$x3h2n = $alpha * $d2 * $x3Nor;
								$x4h2n = $alpha * $d2 * $x4Nor;

								$deltav1 = $alpha * $d1;
								$deltav2 = $alpha * $d2;

								//Persamaan sepuluh
								$x1h1nn = $x1h1n +  $bx1h1;
								$x2h1nn = $x2h1n +  $bx2h1;
								$x3h1nn = $x3h1n +  $bx3h1;
								$x4h1nn = $x4h1n +  $bx4h1;

								$x1h2nn = $x1h2n +  $bx1h2;
								$x2h2nn = $x2h2n +  $bx2h2;
								$x3h2nn = $x3h2n +  $bx3h2;
								$x4h2nn = $x4h2n +  $bx4h2;

								//Persamaan sebelas
								$bbh1ko = $deltawjk1 + $bh1;
								$bbh2ko = $deltawjk2 + $bh2;

								$bibikh1 = $bbiash1 + $deltav1;
								$bibikh2 = $bbiash2 + $deltav2;

								$bibhki = $deltawjk0 + $bbiaso;

								feedForwardTrain($x1, $x2, $x3, $x4, $t, $x1h1nn, $x2h1nn, $x3h1nn, $x4h1nn, $x1h2nn, $x2h2nn, $x3h2nn, $x4h2nn, $bibikh1, $bibikh2, $bbh1ko, $bbh2ko, $bibhki);
							}
							feedForwardSandal1(41, 30, 51,    27,    11,    $bx1h1n, $bx2h1n, $bx3h1n, $bx4h1n, $bx1h2n, $bx2h2n, $bx3h2n, $bx4h2n, $bbiash1n, $bbiash2n, $bh1n, $bh2n, $bbiason);
							$dsandal1 = round($dnf);
							//Dompet2
							function feedForwardSandal2($x1, $x2, $x3, $x4, $t, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bh1, $bh2, $bbiaso)
							{
								$maxIn    = max($x1, $x2, $x3, $x4, $t);
								$minIn    = min($x1, $x2, $x3, $x4, $t);

								//normalisasi data input
								$x1Nor = 0.8 * ($x1 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x2Nor = 0.8 * ($x2 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x3Nor = 0.8 * ($x3 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x4Nor = 0.8 * ($x4 - $minIn) / ($maxIn - $minIn) + 0.1;
								$targetNor = 0.8 * ($t - $minIn) / ($maxIn - $minIn) + 0.1;

								//hitung nilai pada hidden layer
								$h1 = $bbiash1 + ($x1Nor * $bx1h1) + ($x2Nor * $bx2h1) + ($x3Nor * $bx3h1) + ($x4Nor * $bx4h1);
								$h2 = $bbiash2 + ($x1Nor * $bx1h2) + ($x2Nor * $bx2h2) + ($x3Nor * $bx3h2) + ($x4Nor * $bx4h2);
								$h1Sig = 1 / (1 + exp($h1 * -1));
								$h2Sig = 1 / (1 + exp($h2 * -1));

								//hitung nilai output
								$out = $bbiaso + ($h1Sig * $bh1) + ($h2Sig * $bh2);
								$outSig = 1 / (1 + exp($out * -1));
								$err = ($targetNor - $outSig);
								$error = pow($err, 2);
								$te = 0.3;
								global $dnf;
								$dn1 = ($maxIn - $minIn);
								$dn = $outSig * $dn1;
								$dnf = $dn + $minIn;
								if ($error > $te) {
									backpropagationSandal2($outSig, $targetNor, $h1Sig, $h2Sig, $bh1, $bh2, $x1Nor, $x2Nor, $x3Nor, $x4Nor, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bbiaso, $x1, $x2, $x3, $x4, $t);
								} else {
									// echo "Target =" . $targetNor . "<br>";
									// echo "Output =" . $outSig . "<br>";
									// $err = ($targetNor - $outSig);
									// $error = pow($err, 2);
									// echo "Error = " . $error . "<br><br>";
								}
							}
							function backpropagationSandal2($outSig, $targetNor, $h1Sig, $h2Sig, $bh1, $bh2, $x1Nor, $x2Nor, $x3Nor, $x4Nor, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bbiaso, $x1, $x2, $x3, $x4, $t)
							{
								$alpha = 0.1;

								//Persamaan lima
								$dk = ($targetNor - $outSig) * (1 - $outSig) * $outSig;
								// echo "<br>" . $dk;

								//Persamaan enam
								$deltawjk0 = $alpha * $dk;
								$deltawjk1 = $alpha * $dk * $h1Sig;
								$deltawjk2 = $alpha * $dk * $h2Sig;

								//Persamaan tujuh
								$din1 = $dk * $bh1;
								$din2 = $dk * $bh2;

								//Persamaan delapan
								$d1 = $din1 * $h1Sig * (1 - $h1Sig);
								$d2 = $din2 * $h2Sig * (1 - $h2Sig);

								//Persamaan sembilan VIJ Baru
								$x1h1n = $alpha * $d1 * $x1Nor;
								$x2h1n = $alpha * $d1 * $x2Nor;
								$x3h1n = $alpha * $d1 * $x3Nor;
								$x4h1n = $alpha * $d1 * $x4Nor;

								$x1h2n = $alpha * $d2 * $x1Nor;
								$x2h2n = $alpha * $d2 * $x2Nor;
								$x3h2n = $alpha * $d2 * $x3Nor;
								$x4h2n = $alpha * $d2 * $x4Nor;

								$deltav1 = $alpha * $d1;
								$deltav2 = $alpha * $d2;

								//Persamaan sepuluh
								$x1h1nn = $x1h1n +  $bx1h1;
								$x2h1nn = $x2h1n +  $bx2h1;
								$x3h1nn = $x3h1n +  $bx3h1;
								$x4h1nn = $x4h1n +  $bx4h1;

								$x1h2nn = $x1h2n +  $bx1h2;
								$x2h2nn = $x2h2n +  $bx2h2;
								$x3h2nn = $x3h2n +  $bx3h2;
								$x4h2nn = $x4h2n +  $bx4h2;

								//Persamaan sebelas
								$bbh1ko = $deltawjk1 + $bh1;
								$bbh2ko = $deltawjk2 + $bh2;

								$bibikh1 = $bbiash1 + $deltav1;
								$bibikh2 = $bbiash2 + $deltav2;

								$bibhki = $deltawjk0 + $bbiaso;

								feedForwardSandal2($x1, $x2, $x3, $x4, $t, $x1h1nn, $x2h1nn, $x3h1nn, $x4h1nn, $x1h2nn, $x2h2nn, $x3h2nn, $x4h2nn, $bibikh1, $bibikh2, $bbh1ko, $bbh2ko, $bibhki);
							}
							feedForwardSandal2(50, 33,    47,    71, 56, $bx1h1n, $bx2h1n, $bx3h1n, $bx4h1n, $bx1h2n, $bx2h2n, $bx3h2n, $bx4h2n, $bbiash1n, $bbiash2n, $bh1n, $bh2n, $bbiason);
							$dsandal2 = round($dnf);
							$arsandal = [$dsandal1, $dsandal2];
						}
						if ($time > "$b3" && $time < "$a3") {
							function feedForwardTrain($x1, $x2, $x3, $x4, $t, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bh1, $bh2, $bbiaso)
							{
								$maxIn    = max($x1, $x2, $x3, $x4, $t);
								$minIn    = min($x1, $x2, $x3, $x4, $t);

								//normalisasi data input
								$x1Nor = 0.8 * ($x1 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x2Nor = 0.8 * ($x2 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x3Nor = 0.8 * ($x3 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x4Nor = 0.8 * ($x4 - $minIn) / ($maxIn - $minIn) + 0.1;
								$targetNor = 0.8 * ($t - $minIn) / ($maxIn - $minIn) + 0.1;

								//hitung nilai pada hidden layer
								$h1 = $bbiash1 + ($x1Nor * $bx1h1) + ($x2Nor * $bx2h1) + ($x3Nor * $bx3h1) + ($x4Nor * $bx4h1);
								$h2 = $bbiash2 + ($x1Nor * $bx1h2) + ($x2Nor * $bx2h2) + ($x3Nor * $bx3h2) + ($x4Nor * $bx4h2);
								$h1Sig = 1 / (1 + exp($h1 * -1));
								$h2Sig = 1 / (1 + exp($h2 * -1));

								//hitung nilai output
								$out = $bbiaso + ($h1Sig * $bh1) + ($h2Sig * $bh2);
								$outSig = 1 / (1 + exp($out * -1));
								$err = ($targetNor - $outSig);
								$error = pow($err, 2);
								$te = 0.01;
								if ($error > $te) {
									backpropagationTrain($outSig, $targetNor, $h1Sig, $h2Sig, $bh1, $bh2, $x1Nor, $x2Nor, $x3Nor, $x4Nor, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bbiaso, $x1, $x2, $x3, $x4, $t);
								} else {
									// echo "Target =" . $targetNor . "<br>";
									// echo "Output =" . $outSig . "<br>";
									// $err = ($targetNor - $outSig);
									// $error = pow($err, 2);
									// echo "Error = " . $error . "<br><br>";

									global $bx1h1n, $bx2h1n, $bx3h1n, $bx4h1n, $bx1h2n, $bx2h2n, $bx3h2n, $bx4h2n, $bbiash1n, $bbiash2n, $bh1n, $bh2n, $bbiason;
									$bx1h1n = $bx1h1;
									$bx2h1n = $bx2h1;
									$bx3h1n = $bx3h1;
									$bx4h1n = $bx1h1;
									$bx1h2n = $bx1h2;
									$bx2h2n = $bx2h2;
									$bx3h2n = $bx3h2;
									$bx4h2n = $bx1h2;

									$bbiash1n =  $bbiash1;
									$bbiash2n =  $bbiash2;
									$bh1n      = $bh1;
									$bh2n      = $bh2;
									$bbiason  = $bbiaso;
								}
							}
							function backpropagationTrain($outSig, $targetNor, $h1Sig, $h2Sig, $bh1, $bh2, $x1Nor, $x2Nor, $x3Nor, $x4Nor, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bbiaso, $x1, $x2, $x3, $x4, $t)
							{
								$alpha = 0.1;

								//Persamaan lima
								$dk = ($targetNor - $outSig) * (1 - $outSig) * $outSig;
								// echo "<br>" . $dk;

								//Persamaan enam
								$deltawjk0 = $alpha * $dk;
								$deltawjk1 = $alpha * $dk * $h1Sig;
								$deltawjk2 = $alpha * $dk * $h2Sig;

								//Persamaan tujuh
								$din1 = $dk * $bh1;
								$din2 = $dk * $bh2;

								//Persamaan delapan
								$d1 = $din1 * $h1Sig * (1 - $h1Sig);
								$d2 = $din2 * $h2Sig * (1 - $h2Sig);

								//Persamaan sembilan VIJ Baru
								$x1h1n = $alpha * $d1 * $x1Nor;
								$x2h1n = $alpha * $d1 * $x2Nor;
								$x3h1n = $alpha * $d1 * $x3Nor;
								$x4h1n = $alpha * $d1 * $x4Nor;

								$x1h2n = $alpha * $d2 * $x1Nor;
								$x2h2n = $alpha * $d2 * $x2Nor;
								$x3h2n = $alpha * $d2 * $x3Nor;
								$x4h2n = $alpha * $d2 * $x4Nor;

								$deltav1 = $alpha * $d1;
								$deltav2 = $alpha * $d2;

								//Persamaan sepuluh
								$x1h1nn = $x1h1n +  $bx1h1;
								$x2h1nn = $x2h1n +  $bx2h1;
								$x3h1nn = $x3h1n +  $bx3h1;
								$x4h1nn = $x4h1n +  $bx4h1;

								$x1h2nn = $x1h2n +  $bx1h2;
								$x2h2nn = $x2h2n +  $bx2h2;
								$x3h2nn = $x3h2n +  $bx3h2;
								$x4h2nn = $x4h2n +  $bx4h2;

								//Persamaan sebelas
								$bbh1ko = $deltawjk1 + $bh1;
								$bbh2ko = $deltawjk2 + $bh2;

								$bibikh1 = $bbiash1 + $deltav1;
								$bibikh2 = $bbiash2 + $deltav2;

								$bibhki = $deltawjk0 + $bbiaso;

								feedForwardTrain($x1, $x2, $x3, $x4, $t, $x1h1nn, $x2h1nn, $x3h1nn, $x4h1nn, $x1h2nn, $x2h2nn, $x3h2nn, $x4h2nn, $bibikh1, $bibikh2, $bbh1ko, $bbh2ko, $bibhki);
							}
							feedForwardTrain(30, 46, 53, 54, 52, 0.103, 0.6, 0.33, 0.45, 0.3006, 0.3060, 0.876, 0.1006, 0.106, 0.55, 0.1579, 0.6172, 0.396);



							// ($x1, $x2, $x3, $x4, $t, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bh1, $bh2, $bbiaso
							//Baju1
							function feedForwardBaju1($x1, $x2, $x3, $x4, $t, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bh1, $bh2, $bbiaso)
							{
								$maxIn    = max($x1, $x2, $x3, $x4, $t);
								$minIn    = min($x1, $x2, $x3, $x4, $t);

								//normalisasi data input
								$x1Nor = 0.8 * ($x1 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x2Nor = 0.8 * ($x2 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x3Nor = 0.8 * ($x3 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x4Nor = 0.8 * ($x4 - $minIn) / ($maxIn - $minIn) + 0.1;
								$targetNor = 0.8 * ($t - $minIn) / ($maxIn - $minIn) + 0.1;

								//hitung nilai pada hidden layer
								$h1 = $bbiash1 + ($x1Nor * $bx1h1) + ($x2Nor * $bx2h1) + ($x3Nor * $bx3h1) + ($x4Nor * $bx4h1);
								$h2 = $bbiash2 + ($x1Nor * $bx1h2) + ($x2Nor * $bx2h2) + ($x3Nor * $bx3h2) + ($x4Nor * $bx4h2);
								$h1Sig = 1 / (1 + exp($h1 * -1));
								$h2Sig = 1 / (1 + exp($h2 * -1));

								//hitung nilai output
								$out = $bbiaso + ($h1Sig * $bh1) + ($h2Sig * $bh2);
								$outSig = 1 / (1 + exp($out * -1));
								$err = ($targetNor - $outSig);
								$error = pow($err, 2);
								$te = 0.3;
								global $dnf;
								$dn1 = ($maxIn - $minIn);
								$dn = $outSig * $dn1;
								$dnf = $dn + $minIn;
								if ($error > $te) {
									backpropagationBaju1($outSig, $targetNor, $h1Sig, $h2Sig, $bh1, $bh2, $x1Nor, $x2Nor, $x3Nor, $x4Nor, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bbiaso, $x1, $x2, $x3, $x4, $t);
								} else {
									// echo "Target =" . $targetNor . "<br>";
									// echo "Output =" . $outSig . "<br>";
									// $err = ($targetNor - $outSig);
									// $error = pow($err, 2);
									// echo "Error = " . $error . "<br><br>";
								}
							}
							function backpropagationBaju1($outSig, $targetNor, $h1Sig, $h2Sig, $bh1, $bh2, $x1Nor, $x2Nor, $x3Nor, $x4Nor, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bbiaso, $x1, $x2, $x3, $x4, $t)
							{
								$alpha = 0.1;

								//Persamaan lima
								$dk = ($targetNor - $outSig) * (1 - $outSig) * $outSig;
								// echo "<br>" . $dk;

								//Persamaan enam
								$deltawjk0 = $alpha * $dk;
								$deltawjk1 = $alpha * $dk * $h1Sig;
								$deltawjk2 = $alpha * $dk * $h2Sig;

								//Persamaan tujuh
								$din1 = $dk * $bh1;
								$din2 = $dk * $bh2;

								//Persamaan delapan
								$d1 = $din1 * $h1Sig * (1 - $h1Sig);
								$d2 = $din2 * $h2Sig * (1 - $h2Sig);

								//Persamaan sembilan VIJ Baru
								$x1h1n = $alpha * $d1 * $x1Nor;
								$x2h1n = $alpha * $d1 * $x2Nor;
								$x3h1n = $alpha * $d1 * $x3Nor;
								$x4h1n = $alpha * $d1 * $x4Nor;

								$x1h2n = $alpha * $d2 * $x1Nor;
								$x2h2n = $alpha * $d2 * $x2Nor;
								$x3h2n = $alpha * $d2 * $x3Nor;
								$x4h2n = $alpha * $d2 * $x4Nor;

								$deltav1 = $alpha * $d1;
								$deltav2 = $alpha * $d2;

								//Persamaan sepuluh
								$x1h1nn = $x1h1n +  $bx1h1;
								$x2h1nn = $x2h1n +  $bx2h1;
								$x3h1nn = $x3h1n +  $bx3h1;
								$x4h1nn = $x4h1n +  $bx4h1;

								$x1h2nn = $x1h2n +  $bx1h2;
								$x2h2nn = $x2h2n +  $bx2h2;
								$x3h2nn = $x3h2n +  $bx3h2;
								$x4h2nn = $x4h2n +  $bx4h2;

								//Persamaan sebelas
								$bbh1ko = $deltawjk1 + $bh1;
								$bbh2ko = $deltawjk2 + $bh2;

								$bibikh1 = $bbiash1 + $deltav1;
								$bibikh2 = $bbiash2 + $deltav2;

								$bibhki = $deltawjk0 + $bbiaso;

								feedForwardTrain($x1, $x2, $x3, $x4, $t, $x1h1nn, $x2h1nn, $x3h1nn, $x4h1nn, $x1h2nn, $x2h2nn, $x3h2nn, $x4h2nn, $bibikh1, $bibikh2, $bbh1ko, $bbh2ko, $bibhki);
							}
							feedForwardBaju1(67, 49, 57,    74,    30, $bx1h1n, $bx2h1n, $bx3h1n, $bx4h1n, $bx1h2n, $bx2h2n, $bx3h2n, $bx4h2n, $bbiash1n, $bbiash2n, $bh1n, $bh2n, $bbiason);
							$dbaju1 = round($dnf);
							//Baju2
							function feedForwardBaju2($x1, $x2, $x3, $x4, $t, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bh1, $bh2, $bbiaso)
							{
								$maxIn    = max($x1, $x2, $x3, $x4, $t);
								$minIn    = min($x1, $x2, $x3, $x4, $t);

								//normalisasi data input
								$x1Nor = 0.8 * ($x1 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x2Nor = 0.8 * ($x2 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x3Nor = 0.8 * ($x3 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x4Nor = 0.8 * ($x4 - $minIn) / ($maxIn - $minIn) + 0.1;
								$targetNor = 0.8 * ($t - $minIn) / ($maxIn - $minIn) + 0.1;

								//hitung nilai pada hidden layer
								$h1 = $bbiash1 + ($x1Nor * $bx1h1) + ($x2Nor * $bx2h1) + ($x3Nor * $bx3h1) + ($x4Nor * $bx4h1);
								$h2 = $bbiash2 + ($x1Nor * $bx1h2) + ($x2Nor * $bx2h2) + ($x3Nor * $bx3h2) + ($x4Nor * $bx4h2);
								$h1Sig = 1 / (1 + exp($h1 * -1));
								$h2Sig = 1 / (1 + exp($h2 * -1));

								//hitung nilai output
								$out = $bbiaso + ($h1Sig * $bh1) + ($h2Sig * $bh2);
								$outSig = 1 / (1 + exp($out * -1));
								$err = ($targetNor - $outSig);
								$error = pow($err, 2);
								$te = 0.3;
								global $dnf;
								$dn1 = ($maxIn - $minIn);
								$dn = $outSig * $dn1;
								$dnf = $dn + $minIn;
								if ($error > $te) {
									backpropagationBaju2($outSig, $targetNor, $h1Sig, $h2Sig, $bh1, $bh2, $x1Nor, $x2Nor, $x3Nor, $x4Nor, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bbiaso, $x1, $x2, $x3, $x4, $t);
								} else {
									// echo "Target =" . $targetNor . "<br>";
									// echo "Output =" . $outSig . "<br>";
									// $err = ($targetNor - $outSig);
									// $error = pow($err, 2);
									// echo "Error = " . $error . "<br><br>";
								}
							}
							function backpropagationBaju2($outSig, $targetNor, $h1Sig, $h2Sig, $bh1, $bh2, $x1Nor, $x2Nor, $x3Nor, $x4Nor, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bbiaso, $x1, $x2, $x3, $x4, $t)
							{
								$alpha = 0.1;

								//Persamaan lima
								$dk = ($targetNor - $outSig) * (1 - $outSig) * $outSig;
								// echo "<br>" . $dk;

								//Persamaan enam
								$deltawjk0 = $alpha * $dk;
								$deltawjk1 = $alpha * $dk * $h1Sig;
								$deltawjk2 = $alpha * $dk * $h2Sig;

								//Persamaan tujuh
								$din1 = $dk * $bh1;
								$din2 = $dk * $bh2;

								//Persamaan delapan
								$d1 = $din1 * $h1Sig * (1 - $h1Sig);
								$d2 = $din2 * $h2Sig * (1 - $h2Sig);

								//Persamaan sembilan VIJ Baru
								$x1h1n = $alpha * $d1 * $x1Nor;
								$x2h1n = $alpha * $d1 * $x2Nor;
								$x3h1n = $alpha * $d1 * $x3Nor;
								$x4h1n = $alpha * $d1 * $x4Nor;

								$x1h2n = $alpha * $d2 * $x1Nor;
								$x2h2n = $alpha * $d2 * $x2Nor;
								$x3h2n = $alpha * $d2 * $x3Nor;
								$x4h2n = $alpha * $d2 * $x4Nor;

								$deltav1 = $alpha * $d1;
								$deltav2 = $alpha * $d2;

								//Persamaan sepuluh
								$x1h1nn = $x1h1n +  $bx1h1;
								$x2h1nn = $x2h1n +  $bx2h1;
								$x3h1nn = $x3h1n +  $bx3h1;
								$x4h1nn = $x4h1n +  $bx4h1;

								$x1h2nn = $x1h2n +  $bx1h2;
								$x2h2nn = $x2h2n +  $bx2h2;
								$x3h2nn = $x3h2n +  $bx3h2;
								$x4h2nn = $x4h2n +  $bx4h2;

								//Persamaan sebelas
								$bbh1ko = $deltawjk1 + $bh1;
								$bbh2ko = $deltawjk2 + $bh2;

								$bibikh1 = $bbiash1 + $deltav1;
								$bibikh2 = $bbiash2 + $deltav2;

								$bibhki = $deltawjk0 + $bbiaso;

								feedForwardBaju2($x1, $x2, $x3, $x4, $t, $x1h1nn, $x2h1nn, $x3h1nn, $x4h1nn, $x1h2nn, $x2h2nn, $x3h2nn, $x4h2nn, $bibikh1, $bibikh2, $bbh1ko, $bbh2ko, $bibhki);
							}
							feedForwardBaju2(61, 84, 38, 25, 60, $bx1h1n, $bx2h1n, $bx3h1n, $bx4h1n, $bx1h2n, $bx2h2n, $bx3h2n, $bx4h2n, $bbiash1n, $bbiash2n, $bh1n, $bh2n, $bbiason);
							$dbaju2 = round($dnf);
							$arbaju = [$dbaju1, $dbaju2];







							// ($x1, $x2, $x3, $x4, $t, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bh1, $bh2, $bbiaso
							//Celana1
							function feedForwardCelana1($x1, $x2, $x3, $x4, $t, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bh1, $bh2, $bbiaso)
							{
								$maxIn    = max($x1, $x2, $x3, $x4, $t);
								$minIn    = min($x1, $x2, $x3, $x4, $t);

								//normalisasi data input
								$x1Nor = 0.8 * ($x1 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x2Nor = 0.8 * ($x2 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x3Nor = 0.8 * ($x3 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x4Nor = 0.8 * ($x4 - $minIn) / ($maxIn - $minIn) + 0.1;
								$targetNor = 0.8 * ($t - $minIn) / ($maxIn - $minIn) + 0.1;

								//hitung nilai pada hidden layer
								$h1 = $bbiash1 + ($x1Nor * $bx1h1) + ($x2Nor * $bx2h1) + ($x3Nor * $bx3h1) + ($x4Nor * $bx4h1);
								$h2 = $bbiash2 + ($x1Nor * $bx1h2) + ($x2Nor * $bx2h2) + ($x3Nor * $bx3h2) + ($x4Nor * $bx4h2);
								$h1Sig = 1 / (1 + exp($h1 * -1));
								$h2Sig = 1 / (1 + exp($h2 * -1));

								//hitung nilai output
								$out = $bbiaso + ($h1Sig * $bh1) + ($h2Sig * $bh2);
								$outSig = 1 / (1 + exp($out * -1));
								$err = ($targetNor - $outSig);
								$error = pow($err, 2);
								$te = 0.3;
								global $dnf;
								$dn1 = ($maxIn - $minIn);
								$dn = $outSig * $dn1;
								$dnf = $dn + $minIn;
								if ($error > $te) {
									backpropagationCelana1($outSig, $targetNor, $h1Sig, $h2Sig, $bh1, $bh2, $x1Nor, $x2Nor, $x3Nor, $x4Nor, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bbiaso, $x1, $x2, $x3, $x4, $t);
								} else {
									// echo "Target =" . $targetNor . "<br>";
									// echo "Output =" . $outSig . "<br>";
									// $err = ($targetNor - $outSig);
									// $error = pow($err, 2);
									// echo "Error = " . $error . "<br><br>";
								}
							}
							function backpropagationCelana1($outSig, $targetNor, $h1Sig, $h2Sig, $bh1, $bh2, $x1Nor, $x2Nor, $x3Nor, $x4Nor, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bbiaso, $x1, $x2, $x3, $x4, $t)
							{
								$alpha = 0.1;

								//Persamaan lima
								$dk = ($targetNor - $outSig) * (1 - $outSig) * $outSig;
								// echo "<br>" . $dk;

								//Persamaan enam
								$deltawjk0 = $alpha * $dk;
								$deltawjk1 = $alpha * $dk * $h1Sig;
								$deltawjk2 = $alpha * $dk * $h2Sig;

								//Persamaan tujuh
								$din1 = $dk * $bh1;
								$din2 = $dk * $bh2;

								//Persamaan delapan
								$d1 = $din1 * $h1Sig * (1 - $h1Sig);
								$d2 = $din2 * $h2Sig * (1 - $h2Sig);

								//Persamaan sembilan VIJ Baru
								$x1h1n = $alpha * $d1 * $x1Nor;
								$x2h1n = $alpha * $d1 * $x2Nor;
								$x3h1n = $alpha * $d1 * $x3Nor;
								$x4h1n = $alpha * $d1 * $x4Nor;

								$x1h2n = $alpha * $d2 * $x1Nor;
								$x2h2n = $alpha * $d2 * $x2Nor;
								$x3h2n = $alpha * $d2 * $x3Nor;
								$x4h2n = $alpha * $d2 * $x4Nor;

								$deltav1 = $alpha * $d1;
								$deltav2 = $alpha * $d2;

								//Persamaan sepuluh
								$x1h1nn = $x1h1n +  $bx1h1;
								$x2h1nn = $x2h1n +  $bx2h1;
								$x3h1nn = $x3h1n +  $bx3h1;
								$x4h1nn = $x4h1n +  $bx4h1;

								$x1h2nn = $x1h2n +  $bx1h2;
								$x2h2nn = $x2h2n +  $bx2h2;
								$x3h2nn = $x3h2n +  $bx3h2;
								$x4h2nn = $x4h2n +  $bx4h2;

								//Persamaan sebelas
								$bbh1ko = $deltawjk1 + $bh1;
								$bbh2ko = $deltawjk2 + $bh2;

								$bibikh1 = $bbiash1 + $deltav1;
								$bibikh2 = $bbiash2 + $deltav2;

								$bibhki = $deltawjk0 + $bbiaso;

								feedForwardTrain($x1, $x2, $x3, $x4, $t, $x1h1nn, $x2h1nn, $x3h1nn, $x4h1nn, $x1h2nn, $x2h2nn, $x3h2nn, $x4h2nn, $bibikh1, $bibikh2, $bbh1ko, $bbh2ko, $bibhki);
							}
							feedForwardCelana1(62, 69,    62,    74, 33,    $bx1h1n, $bx2h1n, $bx3h1n, $bx4h1n, $bx1h2n, $bx2h2n, $bx3h2n, $bx4h2n, $bbiash1n, $bbiash2n, $bh1n, $bh2n, $bbiason);
							$dcelana1 = round($dnf);
							//Celana2
							function feedForwardCelana2($x1, $x2, $x3, $x4, $t, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bh1, $bh2, $bbiaso)
							{
								$maxIn    = max($x1, $x2, $x3, $x4, $t);
								$minIn    = min($x1, $x2, $x3, $x4, $t);

								//normalisasi data input
								$x1Nor = 0.8 * ($x1 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x2Nor = 0.8 * ($x2 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x3Nor = 0.8 * ($x3 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x4Nor = 0.8 * ($x4 - $minIn) / ($maxIn - $minIn) + 0.1;
								$targetNor = 0.8 * ($t - $minIn) / ($maxIn - $minIn) + 0.1;

								//hitung nilai pada hidden layer
								$h1 = $bbiash1 + ($x1Nor * $bx1h1) + ($x2Nor * $bx2h1) + ($x3Nor * $bx3h1) + ($x4Nor * $bx4h1);
								$h2 = $bbiash2 + ($x1Nor * $bx1h2) + ($x2Nor * $bx2h2) + ($x3Nor * $bx3h2) + ($x4Nor * $bx4h2);
								$h1Sig = 1 / (1 + exp($h1 * -1));
								$h2Sig = 1 / (1 + exp($h2 * -1));

								//hitung nilai output
								$out = $bbiaso + ($h1Sig * $bh1) + ($h2Sig * $bh2);
								$outSig = 1 / (1 + exp($out * -1));
								$err = ($targetNor - $outSig);
								$error = pow($err, 2);
								$te = 0.3;
								global $dnf;
								$dn1 = ($maxIn - $minIn);
								$dn = $outSig * $dn1;
								$dnf = $dn + $minIn;
								if ($error > $te) {
									backpropagationCelana2($outSig, $targetNor, $h1Sig, $h2Sig, $bh1, $bh2, $x1Nor, $x2Nor, $x3Nor, $x4Nor, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bbiaso, $x1, $x2, $x3, $x4, $t);
								} else {
									// echo "Target =" . $targetNor . "<br>";
									// echo "Output =" . $outSig . "<br>";
									// $err = ($targetNor - $outSig);
									// $error = pow($err, 2);
									// echo "Error = " . $error . "<br><br>";
								}
							}
							function backpropagationCelana2($outSig, $targetNor, $h1Sig, $h2Sig, $bh1, $bh2, $x1Nor, $x2Nor, $x3Nor, $x4Nor, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bbiaso, $x1, $x2, $x3, $x4, $t)
							{
								$alpha = 0.1;

								//Persamaan lima
								$dk = ($targetNor - $outSig) * (1 - $outSig) * $outSig;
								// echo "<br>" . $dk;

								//Persamaan enam
								$deltawjk0 = $alpha * $dk;
								$deltawjk1 = $alpha * $dk * $h1Sig;
								$deltawjk2 = $alpha * $dk * $h2Sig;

								//Persamaan tujuh
								$din1 = $dk * $bh1;
								$din2 = $dk * $bh2;

								//Persamaan delapan
								$d1 = $din1 * $h1Sig * (1 - $h1Sig);
								$d2 = $din2 * $h2Sig * (1 - $h2Sig);

								//Persamaan sembilan VIJ Baru
								$x1h1n = $alpha * $d1 * $x1Nor;
								$x2h1n = $alpha * $d1 * $x2Nor;
								$x3h1n = $alpha * $d1 * $x3Nor;
								$x4h1n = $alpha * $d1 * $x4Nor;

								$x1h2n = $alpha * $d2 * $x1Nor;
								$x2h2n = $alpha * $d2 * $x2Nor;
								$x3h2n = $alpha * $d2 * $x3Nor;
								$x4h2n = $alpha * $d2 * $x4Nor;

								$deltav1 = $alpha * $d1;
								$deltav2 = $alpha * $d2;

								//Persamaan sepuluh
								$x1h1nn = $x1h1n +  $bx1h1;
								$x2h1nn = $x2h1n +  $bx2h1;
								$x3h1nn = $x3h1n +  $bx3h1;
								$x4h1nn = $x4h1n +  $bx4h1;

								$x1h2nn = $x1h2n +  $bx1h2;
								$x2h2nn = $x2h2n +  $bx2h2;
								$x3h2nn = $x3h2n +  $bx3h2;
								$x4h2nn = $x4h2n +  $bx4h2;

								//Persamaan sebelas
								$bbh1ko = $deltawjk1 + $bh1;
								$bbh2ko = $deltawjk2 + $bh2;

								$bibikh1 = $bbiash1 + $deltav1;
								$bibikh2 = $bbiash2 + $deltav2;

								$bibhki = $deltawjk0 + $bbiaso;

								feedForwardCelana2($x1, $x2, $x3, $x4, $t, $x1h1nn, $x2h1nn, $x3h1nn, $x4h1nn, $x1h2nn, $x2h2nn, $x3h2nn, $x4h2nn, $bibikh1, $bibikh2, $bbh1ko, $bbh2ko, $bibhki);
							}
							feedForwardCelana2(56,    27,    56, 68, 68, $bx1h1n, $bx2h1n, $bx3h1n, $bx4h1n, $bx1h2n, $bx2h2n, $bx3h2n, $bx4h2n, $bbiash1n, $bbiash2n, $bh1n, $bh2n, $bbiason);
							$dcelana2 = round($dnf);
							$arcelana = [$dcelana1, $dcelana2];







							// ($x1, $x2, $x3, $x4, $t, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bh1, $bh2, $bbiaso
							//Dompet1
							function feedForwardDompet1($x1, $x2, $x3, $x4, $t, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bh1, $bh2, $bbiaso)
							{
								$maxIn    = max($x1, $x2, $x3, $x4, $t);
								$minIn    = min($x1, $x2, $x3, $x4, $t);

								//normalisasi data input
								$x1Nor = 0.8 * ($x1 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x2Nor = 0.8 * ($x2 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x3Nor = 0.8 * ($x3 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x4Nor = 0.8 * ($x4 - $minIn) / ($maxIn - $minIn) + 0.1;
								$targetNor = 0.8 * ($t - $minIn) / ($maxIn - $minIn) + 0.1;

								//hitung nilai pada hidden layer
								$h1 = $bbiash1 + ($x1Nor * $bx1h1) + ($x2Nor * $bx2h1) + ($x3Nor * $bx3h1) + ($x4Nor * $bx4h1);
								$h2 = $bbiash2 + ($x1Nor * $bx1h2) + ($x2Nor * $bx2h2) + ($x3Nor * $bx3h2) + ($x4Nor * $bx4h2);
								$h1Sig = 1 / (1 + exp($h1 * -1));
								$h2Sig = 1 / (1 + exp($h2 * -1));

								//hitung nilai output
								$out = $bbiaso + ($h1Sig * $bh1) + ($h2Sig * $bh2);
								$outSig = 1 / (1 + exp($out * -1));
								$err = ($targetNor - $outSig);
								$error = pow($err, 2);
								$te = 0.3;
								global $dnf;
								$dn1 = ($maxIn - $minIn);
								$dn = $outSig * $dn1;
								$dnf = $dn + $minIn;
								if ($error > $te) {
									backpropagationDompet1($outSig, $targetNor, $h1Sig, $h2Sig, $bh1, $bh2, $x1Nor, $x2Nor, $x3Nor, $x4Nor, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bbiaso, $x1, $x2, $x3, $x4, $t);
								} else {
									// echo "Target =" . $targetNor . "<br>";
									// echo "Output =" . $outSig . "<br>";
									// $err = ($targetNor - $outSig);
									// $error = pow($err, 2);
									// echo "Error = " . $error . "<br><br>";
								}
							}
							function backpropagationDompet1($outSig, $targetNor, $h1Sig, $h2Sig, $bh1, $bh2, $x1Nor, $x2Nor, $x3Nor, $x4Nor, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bbiaso, $x1, $x2, $x3, $x4, $t)
							{
								$alpha = 0.1;

								//Persamaan lima
								$dk = ($targetNor - $outSig) * (1 - $outSig) * $outSig;
								// echo "<br>" . $dk;

								//Persamaan enam
								$deltawjk0 = $alpha * $dk;
								$deltawjk1 = $alpha * $dk * $h1Sig;
								$deltawjk2 = $alpha * $dk * $h2Sig;

								//Persamaan tujuh
								$din1 = $dk * $bh1;
								$din2 = $dk * $bh2;

								//Persamaan delapan
								$d1 = $din1 * $h1Sig * (1 - $h1Sig);
								$d2 = $din2 * $h2Sig * (1 - $h2Sig);

								//Persamaan sembilan VIJ Baru
								$x1h1n = $alpha * $d1 * $x1Nor;
								$x2h1n = $alpha * $d1 * $x2Nor;
								$x3h1n = $alpha * $d1 * $x3Nor;
								$x4h1n = $alpha * $d1 * $x4Nor;

								$x1h2n = $alpha * $d2 * $x1Nor;
								$x2h2n = $alpha * $d2 * $x2Nor;
								$x3h2n = $alpha * $d2 * $x3Nor;
								$x4h2n = $alpha * $d2 * $x4Nor;

								$deltav1 = $alpha * $d1;
								$deltav2 = $alpha * $d2;

								//Persamaan sepuluh
								$x1h1nn = $x1h1n +  $bx1h1;
								$x2h1nn = $x2h1n +  $bx2h1;
								$x3h1nn = $x3h1n +  $bx3h1;
								$x4h1nn = $x4h1n +  $bx4h1;

								$x1h2nn = $x1h2n +  $bx1h2;
								$x2h2nn = $x2h2n +  $bx2h2;
								$x3h2nn = $x3h2n +  $bx3h2;
								$x4h2nn = $x4h2n +  $bx4h2;

								//Persamaan sebelas
								$bbh1ko = $deltawjk1 + $bh1;
								$bbh2ko = $deltawjk2 + $bh2;

								$bibikh1 = $bbiash1 + $deltav1;
								$bibikh2 = $bbiash2 + $deltav2;

								$bibhki = $deltawjk0 + $bbiaso;

								feedForwardTrain($x1, $x2, $x3, $x4, $t, $x1h1nn, $x2h1nn, $x3h1nn, $x4h1nn, $x1h2nn, $x2h2nn, $x3h2nn, $x4h2nn, $bibikh1, $bibikh2, $bbh1ko, $bbh2ko, $bibhki);
							}
							feedForwardDompet1(44,    44,    69,    33,    73,    $bx1h1n, $bx2h1n, $bx3h1n, $bx4h1n, $bx1h2n, $bx2h2n, $bx3h2n, $bx4h2n, $bbiash1n, $bbiash2n, $bh1n, $bh2n, $bbiason);
							$ddompet1 = round($dnf);
							//Dompet2
							function feedForwardDompet2($x1, $x2, $x3, $x4, $t, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bh1, $bh2, $bbiaso)
							{
								$maxIn    = max($x1, $x2, $x3, $x4, $t);
								$minIn    = min($x1, $x2, $x3, $x4, $t);

								//normalisasi data input
								$x1Nor = 0.8 * ($x1 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x2Nor = 0.8 * ($x2 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x3Nor = 0.8 * ($x3 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x4Nor = 0.8 * ($x4 - $minIn) / ($maxIn - $minIn) + 0.1;
								$targetNor = 0.8 * ($t - $minIn) / ($maxIn - $minIn) + 0.1;

								//hitung nilai pada hidden layer
								$h1 = $bbiash1 + ($x1Nor * $bx1h1) + ($x2Nor * $bx2h1) + ($x3Nor * $bx3h1) + ($x4Nor * $bx4h1);
								$h2 = $bbiash2 + ($x1Nor * $bx1h2) + ($x2Nor * $bx2h2) + ($x3Nor * $bx3h2) + ($x4Nor * $bx4h2);
								$h1Sig = 1 / (1 + exp($h1 * -1));
								$h2Sig = 1 / (1 + exp($h2 * -1));

								//hitung nilai output
								$out = $bbiaso + ($h1Sig * $bh1) + ($h2Sig * $bh2);
								$outSig = 1 / (1 + exp($out * -1));
								$err = ($targetNor - $outSig);
								$error = pow($err, 2);
								$te = 0.3;
								global $dnf;
								$dn1 = ($maxIn - $minIn);
								$dn = $outSig * $dn1;
								$dnf = $dn + $minIn;
								if ($error > $te) {
									backpropagationDompet2($outSig, $targetNor, $h1Sig, $h2Sig, $bh1, $bh2, $x1Nor, $x2Nor, $x3Nor, $x4Nor, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bbiaso, $x1, $x2, $x3, $x4, $t);
								} else {
									// echo "Target =" . $targetNor . "<br>";
									// echo "Output =" . $outSig . "<br>";
									// $err = ($targetNor - $outSig);
									// $error = pow($err, 2);
									// echo "Error = " . $error . "<br><br>";
								}
							}
							function backpropagationDompet2($outSig, $targetNor, $h1Sig, $h2Sig, $bh1, $bh2, $x1Nor, $x2Nor, $x3Nor, $x4Nor, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bbiaso, $x1, $x2, $x3, $x4, $t)
							{
								$alpha = 0.1;

								//Persamaan lima
								$dk = ($targetNor - $outSig) * (1 - $outSig) * $outSig;
								// echo "<br>" . $dk;

								//Persamaan enam
								$deltawjk0 = $alpha * $dk;
								$deltawjk1 = $alpha * $dk * $h1Sig;
								$deltawjk2 = $alpha * $dk * $h2Sig;

								//Persamaan tujuh
								$din1 = $dk * $bh1;
								$din2 = $dk * $bh2;

								//Persamaan delapan
								$d1 = $din1 * $h1Sig * (1 - $h1Sig);
								$d2 = $din2 * $h2Sig * (1 - $h2Sig);

								//Persamaan sembilan VIJ Baru
								$x1h1n = $alpha * $d1 * $x1Nor;
								$x2h1n = $alpha * $d1 * $x2Nor;
								$x3h1n = $alpha * $d1 * $x3Nor;
								$x4h1n = $alpha * $d1 * $x4Nor;

								$x1h2n = $alpha * $d2 * $x1Nor;
								$x2h2n = $alpha * $d2 * $x2Nor;
								$x3h2n = $alpha * $d2 * $x3Nor;
								$x4h2n = $alpha * $d2 * $x4Nor;

								$deltav1 = $alpha * $d1;
								$deltav2 = $alpha * $d2;

								//Persamaan sepuluh
								$x1h1nn = $x1h1n +  $bx1h1;
								$x2h1nn = $x2h1n +  $bx2h1;
								$x3h1nn = $x3h1n +  $bx3h1;
								$x4h1nn = $x4h1n +  $bx4h1;

								$x1h2nn = $x1h2n +  $bx1h2;
								$x2h2nn = $x2h2n +  $bx2h2;
								$x3h2nn = $x3h2n +  $bx3h2;
								$x4h2nn = $x4h2n +  $bx4h2;

								//Persamaan sebelas
								$bbh1ko = $deltawjk1 + $bh1;
								$bbh2ko = $deltawjk2 + $bh2;

								$bibikh1 = $bbiash1 + $deltav1;
								$bibikh2 = $bbiash2 + $deltav2;

								$bibhki = $deltawjk0 + $bbiaso;

								feedForwardDompet2($x1, $x2, $x3, $x4, $t, $x1h1nn, $x2h1nn, $x3h1nn, $x4h1nn, $x1h2nn, $x2h2nn, $x3h2nn, $x4h2nn, $bibikh1, $bibikh2, $bbh1ko, $bbh2ko, $bibhki);
							}
							feedForwardDompet2(64, 92,    50, 62,    31, $bx1h1n, $bx2h1n, $bx3h1n, $bx4h1n, $bx1h2n, $bx2h2n, $bx3h2n, $bx4h2n, $bbiash1n, $bbiash2n, $bh1n, $bh2n, $bbiason);
							$ddompet2 = round($dnf);
							$ardompet = [$ddompet1, $ddompet2];






							// ($x1, $x2, $x3, $x4, $t, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bh1, $bh2, $bbiaso
							//Sepatu
							function feedForwardSepatu1($x1, $x2, $x3, $x4, $t, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bh1, $bh2, $bbiaso)
							{
								$maxIn    = max($x1, $x2, $x3, $x4, $t);
								$minIn    = min($x1, $x2, $x3, $x4, $t);

								//normalisasi data input
								$x1Nor = 0.8 * ($x1 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x2Nor = 0.8 * ($x2 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x3Nor = 0.8 * ($x3 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x4Nor = 0.8 * ($x4 - $minIn) / ($maxIn - $minIn) + 0.1;
								$targetNor = 0.8 * ($t - $minIn) / ($maxIn - $minIn) + 0.1;

								//hitung nilai pada hidden layer
								$h1 = $bbiash1 + ($x1Nor * $bx1h1) + ($x2Nor * $bx2h1) + ($x3Nor * $bx3h1) + ($x4Nor * $bx4h1);
								$h2 = $bbiash2 + ($x1Nor * $bx1h2) + ($x2Nor * $bx2h2) + ($x3Nor * $bx3h2) + ($x4Nor * $bx4h2);
								$h1Sig = 1 / (1 + exp($h1 * -1));
								$h2Sig = 1 / (1 + exp($h2 * -1));

								//hitung nilai output
								$out = $bbiaso + ($h1Sig * $bh1) + ($h2Sig * $bh2);
								$outSig = 1 / (1 + exp($out * -1));
								$err = ($targetNor - $outSig);
								$error = pow($err, 2);
								$te = 0.3;
								global $dnf;
								$dn1 = ($maxIn - $minIn);
								$dn = $outSig * $dn1;
								$dnf = $dn + $minIn;
								if ($error > $te) {
									backpropagationSepatu1($outSig, $targetNor, $h1Sig, $h2Sig, $bh1, $bh2, $x1Nor, $x2Nor, $x3Nor, $x4Nor, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bbiaso, $x1, $x2, $x3, $x4, $t);
								} else {
									// echo "Target =" . $targetNor . "<br>";
									// echo "Output =" . $outSig . "<br>";
									// $err = ($targetNor - $outSig);
									// $error = pow($err, 2);
									// echo "Error = " . $error . "<br><br>";
								}
							}
							function backpropagationSepatu1($outSig, $targetNor, $h1Sig, $h2Sig, $bh1, $bh2, $x1Nor, $x2Nor, $x3Nor, $x4Nor, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bbiaso, $x1, $x2, $x3, $x4, $t)
							{
								$alpha = 0.1;

								//Persamaan lima
								$dk = ($targetNor - $outSig) * (1 - $outSig) * $outSig;
								// echo "<br>" . $dk;

								//Persamaan enam
								$deltawjk0 = $alpha * $dk;
								$deltawjk1 = $alpha * $dk * $h1Sig;
								$deltawjk2 = $alpha * $dk * $h2Sig;

								//Persamaan tujuh
								$din1 = $dk * $bh1;
								$din2 = $dk * $bh2;

								//Persamaan delapan
								$d1 = $din1 * $h1Sig * (1 - $h1Sig);
								$d2 = $din2 * $h2Sig * (1 - $h2Sig);

								//Persamaan sembilan VIJ Baru
								$x1h1n = $alpha * $d1 * $x1Nor;
								$x2h1n = $alpha * $d1 * $x2Nor;
								$x3h1n = $alpha * $d1 * $x3Nor;
								$x4h1n = $alpha * $d1 * $x4Nor;

								$x1h2n = $alpha * $d2 * $x1Nor;
								$x2h2n = $alpha * $d2 * $x2Nor;
								$x3h2n = $alpha * $d2 * $x3Nor;
								$x4h2n = $alpha * $d2 * $x4Nor;

								$deltav1 = $alpha * $d1;
								$deltav2 = $alpha * $d2;

								//Persamaan sepuluh
								$x1h1nn = $x1h1n +  $bx1h1;
								$x2h1nn = $x2h1n +  $bx2h1;
								$x3h1nn = $x3h1n +  $bx3h1;
								$x4h1nn = $x4h1n +  $bx4h1;

								$x1h2nn = $x1h2n +  $bx1h2;
								$x2h2nn = $x2h2n +  $bx2h2;
								$x3h2nn = $x3h2n +  $bx3h2;
								$x4h2nn = $x4h2n +  $bx4h2;

								//Persamaan sebelas
								$bbh1ko = $deltawjk1 + $bh1;
								$bbh2ko = $deltawjk2 + $bh2;

								$bibikh1 = $bbiash1 + $deltav1;
								$bibikh2 = $bbiash2 + $deltav2;

								$bibhki = $deltawjk0 + $bbiaso;

								feedForwardTrain($x1, $x2, $x3, $x4, $t, $x1h1nn, $x2h1nn, $x3h1nn, $x4h1nn, $x1h2nn, $x2h2nn, $x3h2nn, $x4h2nn, $bibikh1, $bibikh2, $bbh1ko, $bbh2ko, $bibhki);
							}
							feedForwardSepatu1(80, 82, 48, 33, 30,    $bx1h1n, $bx2h1n, $bx3h1n, $bx4h1n, $bx1h2n, $bx2h2n, $bx3h2n, $bx4h2n, $bbiash1n, $bbiash2n, $bh1n, $bh2n, $bbiason);
							$dsepatu1 = round($dnf);
							//Sepatu2
							function feedForwardSepatu2($x1, $x2, $x3, $x4, $t, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bh1, $bh2, $bbiaso)
							{
								$maxIn    = max($x1, $x2, $x3, $x4, $t);
								$minIn    = min($x1, $x2, $x3, $x4, $t);

								//normalisasi data input
								$x1Nor = 0.8 * ($x1 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x2Nor = 0.8 * ($x2 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x3Nor = 0.8 * ($x3 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x4Nor = 0.8 * ($x4 - $minIn) / ($maxIn - $minIn) + 0.1;
								$targetNor = 0.8 * ($t - $minIn) / ($maxIn - $minIn) + 0.1;

								//hitung nilai pada hidden layer
								$h1 = $bbiash1 + ($x1Nor * $bx1h1) + ($x2Nor * $bx2h1) + ($x3Nor * $bx3h1) + ($x4Nor * $bx4h1);
								$h2 = $bbiash2 + ($x1Nor * $bx1h2) + ($x2Nor * $bx2h2) + ($x3Nor * $bx3h2) + ($x4Nor * $bx4h2);
								$h1Sig = 1 / (1 + exp($h1 * -1));
								$h2Sig = 1 / (1 + exp($h2 * -1));

								//hitung nilai output
								$out = $bbiaso + ($h1Sig * $bh1) + ($h2Sig * $bh2);
								$outSig = 1 / (1 + exp($out * -1));
								$err = ($targetNor - $outSig);
								$error = pow($err, 2);
								$te = 0.3;
								global $dnf;
								$dn1 = ($maxIn - $minIn);
								$dn = $outSig * $dn1;
								$dnf = $dn + $minIn;
								if ($error > $te) {
									backpropagationSepatu2($outSig, $targetNor, $h1Sig, $h2Sig, $bh1, $bh2, $x1Nor, $x2Nor, $x3Nor, $x4Nor, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bbiaso, $x1, $x2, $x3, $x4, $t);
								} else {
									// echo "Target =" . $targetNor . "<br>";
									// echo "Output =" . $outSig . "<br>";
									// $err = ($targetNor - $outSig);
									// $error = pow($err, 2);
									// echo "Error = " . $error . "<br><br>";
								}
							}
							function backpropagationSepatu2($outSig, $targetNor, $h1Sig, $h2Sig, $bh1, $bh2, $x1Nor, $x2Nor, $x3Nor, $x4Nor, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bbiaso, $x1, $x2, $x3, $x4, $t)
							{
								$alpha = 0.1;

								//Persamaan lima
								$dk = ($targetNor - $outSig) * (1 - $outSig) * $outSig;
								// echo "<br>" . $dk;

								//Persamaan enam
								$deltawjk0 = $alpha * $dk;
								$deltawjk1 = $alpha * $dk * $h1Sig;
								$deltawjk2 = $alpha * $dk * $h2Sig;

								//Persamaan tujuh
								$din1 = $dk * $bh1;
								$din2 = $dk * $bh2;

								//Persamaan delapan
								$d1 = $din1 * $h1Sig * (1 - $h1Sig);
								$d2 = $din2 * $h2Sig * (1 - $h2Sig);

								//Persamaan sembilan VIJ Baru
								$x1h1n = $alpha * $d1 * $x1Nor;
								$x2h1n = $alpha * $d1 * $x2Nor;
								$x3h1n = $alpha * $d1 * $x3Nor;
								$x4h1n = $alpha * $d1 * $x4Nor;

								$x1h2n = $alpha * $d2 * $x1Nor;
								$x2h2n = $alpha * $d2 * $x2Nor;
								$x3h2n = $alpha * $d2 * $x3Nor;
								$x4h2n = $alpha * $d2 * $x4Nor;

								$deltav1 = $alpha * $d1;
								$deltav2 = $alpha * $d2;

								//Persamaan sepuluh
								$x1h1nn = $x1h1n +  $bx1h1;
								$x2h1nn = $x2h1n +  $bx2h1;
								$x3h1nn = $x3h1n +  $bx3h1;
								$x4h1nn = $x4h1n +  $bx4h1;

								$x1h2nn = $x1h2n +  $bx1h2;
								$x2h2nn = $x2h2n +  $bx2h2;
								$x3h2nn = $x3h2n +  $bx3h2;
								$x4h2nn = $x4h2n +  $bx4h2;

								//Persamaan sebelas
								$bbh1ko = $deltawjk1 + $bh1;
								$bbh2ko = $deltawjk2 + $bh2;

								$bibikh1 = $bbiash1 + $deltav1;
								$bibikh2 = $bbiash2 + $deltav2;

								$bibhki = $deltawjk0 + $bbiaso;

								feedForwardSepatu2($x1, $x2, $x3, $x4, $t, $x1h1nn, $x2h1nn, $x3h1nn, $x4h1nn, $x1h2nn, $x2h2nn, $x3h2nn, $x4h2nn, $bibikh1, $bibikh2, $bbh1ko, $bbh2ko, $bibhki);
							}
							feedForwardSepatu2(44, 49,    49,    40, 40,    $bx1h1n, $bx2h1n, $bx3h1n, $bx4h1n, $bx1h2n, $bx2h2n, $bx3h2n, $bx4h2n, $bbiash1n, $bbiash2n, $bh1n, $bh2n, $bbiason);
							$dsepatu2 = round($dnf);
							$arsepatu = [$dsepatu1, $dsepatu2];






							// ($x1, $x2, $x3, $x4, $t, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bh1, $bh2, $bbiaso
							//Jaket1
							function feedForwardJaket1($x1, $x2, $x3, $x4, $t, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bh1, $bh2, $bbiaso)
							{
								$maxIn    = max($x1, $x2, $x3, $x4, $t);
								$minIn    = min($x1, $x2, $x3, $x4, $t);

								//normalisasi data input
								$x1Nor = 0.8 * ($x1 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x2Nor = 0.8 * ($x2 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x3Nor = 0.8 * ($x3 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x4Nor = 0.8 * ($x4 - $minIn) / ($maxIn - $minIn) + 0.1;
								$targetNor = 0.8 * ($t - $minIn) / ($maxIn - $minIn) + 0.1;

								//hitung nilai pada hidden layer
								$h1 = $bbiash1 + ($x1Nor * $bx1h1) + ($x2Nor * $bx2h1) + ($x3Nor * $bx3h1) + ($x4Nor * $bx4h1);
								$h2 = $bbiash2 + ($x1Nor * $bx1h2) + ($x2Nor * $bx2h2) + ($x3Nor * $bx3h2) + ($x4Nor * $bx4h2);
								$h1Sig = 1 / (1 + exp($h1 * -1));
								$h2Sig = 1 / (1 + exp($h2 * -1));

								//hitung nilai output
								$out = $bbiaso + ($h1Sig * $bh1) + ($h2Sig * $bh2);
								$outSig = 1 / (1 + exp($out * -1));
								$err = ($targetNor - $outSig);
								$error = pow($err, 2);
								$te = 0.3;
								global $dnf;
								$dn1 = ($maxIn - $minIn);
								$dn = $outSig * $dn1;
								$dnf = $dn + $minIn;
								if ($error > $te) {
									backpropagationJaket1($outSig, $targetNor, $h1Sig, $h2Sig, $bh1, $bh2, $x1Nor, $x2Nor, $x3Nor, $x4Nor, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bbiaso, $x1, $x2, $x3, $x4, $t);
								} else {
									// echo "Target =" . $targetNor . "<br>";
									// echo "Output =" . $outSig . "<br>";
									// $err = ($targetNor - $outSig);
									// $error = pow($err, 2);
									// echo "Error = " . $error . "<br><br>";
								}
							}
							function backpropagationJaket1($outSig, $targetNor, $h1Sig, $h2Sig, $bh1, $bh2, $x1Nor, $x2Nor, $x3Nor, $x4Nor, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bbiaso, $x1, $x2, $x3, $x4, $t)
							{
								$alpha = 0.1;

								//Persamaan lima
								$dk = ($targetNor - $outSig) * (1 - $outSig) * $outSig;
								// echo "<br>" . $dk;

								//Persamaan enam
								$deltawjk0 = $alpha * $dk;
								$deltawjk1 = $alpha * $dk * $h1Sig;
								$deltawjk2 = $alpha * $dk * $h2Sig;

								//Persamaan tujuh
								$din1 = $dk * $bh1;
								$din2 = $dk * $bh2;

								//Persamaan delapan
								$d1 = $din1 * $h1Sig * (1 - $h1Sig);
								$d2 = $din2 * $h2Sig * (1 - $h2Sig);

								//Persamaan sembilan VIJ Baru
								$x1h1n = $alpha * $d1 * $x1Nor;
								$x2h1n = $alpha * $d1 * $x2Nor;
								$x3h1n = $alpha * $d1 * $x3Nor;
								$x4h1n = $alpha * $d1 * $x4Nor;

								$x1h2n = $alpha * $d2 * $x1Nor;
								$x2h2n = $alpha * $d2 * $x2Nor;
								$x3h2n = $alpha * $d2 * $x3Nor;
								$x4h2n = $alpha * $d2 * $x4Nor;

								$deltav1 = $alpha * $d1;
								$deltav2 = $alpha * $d2;

								//Persamaan sepuluh
								$x1h1nn = $x1h1n +  $bx1h1;
								$x2h1nn = $x2h1n +  $bx2h1;
								$x3h1nn = $x3h1n +  $bx3h1;
								$x4h1nn = $x4h1n +  $bx4h1;

								$x1h2nn = $x1h2n +  $bx1h2;
								$x2h2nn = $x2h2n +  $bx2h2;
								$x3h2nn = $x3h2n +  $bx3h2;
								$x4h2nn = $x4h2n +  $bx4h2;

								//Persamaan sebelas
								$bbh1ko = $deltawjk1 + $bh1;
								$bbh2ko = $deltawjk2 + $bh2;

								$bibikh1 = $bbiash1 + $deltav1;
								$bibikh2 = $bbiash2 + $deltav2;

								$bibhki = $deltawjk0 + $bbiaso;

								feedForwardTrain($x1, $x2, $x3, $x4, $t, $x1h1nn, $x2h1nn, $x3h1nn, $x4h1nn, $x1h2nn, $x2h2nn, $x3h2nn, $x4h2nn, $bibikh1, $bibikh2, $bbh1ko, $bbh2ko, $bibhki);
							}
							feedForwardJaket1(61,    18,    36,    31, 29,    $bx1h1n, $bx2h1n, $bx3h1n, $bx4h1n, $bx1h2n, $bx2h2n, $bx3h2n, $bx4h2n, $bbiash1n, $bbiash2n, $bh1n, $bh2n, $bbiason);
							$djaket1 = round($dnf);
							//Dompet2
							function feedForwardJaket2($x1, $x2, $x3, $x4, $t, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bh1, $bh2, $bbiaso)
							{
								$maxIn    = max($x1, $x2, $x3, $x4, $t);
								$minIn    = min($x1, $x2, $x3, $x4, $t);

								//normalisasi data input
								$x1Nor = 0.8 * ($x1 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x2Nor = 0.8 * ($x2 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x3Nor = 0.8 * ($x3 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x4Nor = 0.8 * ($x4 - $minIn) / ($maxIn - $minIn) + 0.1;
								$targetNor = 0.8 * ($t - $minIn) / ($maxIn - $minIn) + 0.1;

								//hitung nilai pada hidden layer
								$h1 = $bbiash1 + ($x1Nor * $bx1h1) + ($x2Nor * $bx2h1) + ($x3Nor * $bx3h1) + ($x4Nor * $bx4h1);
								$h2 = $bbiash2 + ($x1Nor * $bx1h2) + ($x2Nor * $bx2h2) + ($x3Nor * $bx3h2) + ($x4Nor * $bx4h2);
								$h1Sig = 1 / (1 + exp($h1 * -1));
								$h2Sig = 1 / (1 + exp($h2 * -1));

								//hitung nilai output
								$out = $bbiaso + ($h1Sig * $bh1) + ($h2Sig * $bh2);
								$outSig = 1 / (1 + exp($out * -1));
								$err = ($targetNor - $outSig);
								$error = pow($err, 2);
								$te = 0.3;
								global $dnf;
								$dn1 = ($maxIn - $minIn);
								$dn = $outSig * $dn1;
								$dnf = $dn + $minIn;
								if ($error > $te) {
									backpropagationJaket2($outSig, $targetNor, $h1Sig, $h2Sig, $bh1, $bh2, $x1Nor, $x2Nor, $x3Nor, $x4Nor, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bbiaso, $x1, $x2, $x3, $x4, $t);
								} else {
									// echo "Target =" . $targetNor . "<br>";
									// echo "Output =" . $outSig . "<br>";
									// $err = ($targetNor - $outSig);
									// $error = pow($err, 2);
									// echo "Error = " . $error . "<br><br>";
								}
							}
							function backpropagationJaket2($outSig, $targetNor, $h1Sig, $h2Sig, $bh1, $bh2, $x1Nor, $x2Nor, $x3Nor, $x4Nor, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bbiaso, $x1, $x2, $x3, $x4, $t)
							{
								$alpha = 0.1;

								//Persamaan lima
								$dk = ($targetNor - $outSig) * (1 - $outSig) * $outSig;
								// echo "<br>" . $dk;

								//Persamaan enam
								$deltawjk0 = $alpha * $dk;
								$deltawjk1 = $alpha * $dk * $h1Sig;
								$deltawjk2 = $alpha * $dk * $h2Sig;

								//Persamaan tujuh
								$din1 = $dk * $bh1;
								$din2 = $dk * $bh2;

								//Persamaan delapan
								$d1 = $din1 * $h1Sig * (1 - $h1Sig);
								$d2 = $din2 * $h2Sig * (1 - $h2Sig);

								//Persamaan sembilan VIJ Baru
								$x1h1n = $alpha * $d1 * $x1Nor;
								$x2h1n = $alpha * $d1 * $x2Nor;
								$x3h1n = $alpha * $d1 * $x3Nor;
								$x4h1n = $alpha * $d1 * $x4Nor;

								$x1h2n = $alpha * $d2 * $x1Nor;
								$x2h2n = $alpha * $d2 * $x2Nor;
								$x3h2n = $alpha * $d2 * $x3Nor;
								$x4h2n = $alpha * $d2 * $x4Nor;

								$deltav1 = $alpha * $d1;
								$deltav2 = $alpha * $d2;

								//Persamaan sepuluh
								$x1h1nn = $x1h1n +  $bx1h1;
								$x2h1nn = $x2h1n +  $bx2h1;
								$x3h1nn = $x3h1n +  $bx3h1;
								$x4h1nn = $x4h1n +  $bx4h1;

								$x1h2nn = $x1h2n +  $bx1h2;
								$x2h2nn = $x2h2n +  $bx2h2;
								$x3h2nn = $x3h2n +  $bx3h2;
								$x4h2nn = $x4h2n +  $bx4h2;

								//Persamaan sebelas
								$bbh1ko = $deltawjk1 + $bh1;
								$bbh2ko = $deltawjk2 + $bh2;

								$bibikh1 = $bbiash1 + $deltav1;
								$bibikh2 = $bbiash2 + $deltav2;

								$bibhki = $deltawjk0 + $bbiaso;

								feedForwardJaket2($x1, $x2, $x3, $x4, $t, $x1h1nn, $x2h1nn, $x3h1nn, $x4h1nn, $x1h2nn, $x2h2nn, $x3h2nn, $x4h2nn, $bibikh1, $bibikh2, $bbh1ko, $bbh2ko, $bibhki);
							}
							feedForwardJaket2(67, 47,    47, 76,    76,    $bx1h1n, $bx2h1n, $bx3h1n, $bx4h1n, $bx1h2n, $bx2h2n, $bx3h2n, $bx4h2n, $bbiash1n, $bbiash2n, $bh1n, $bh2n, $bbiason);
							$djaket2 = round($dnf);
							$arjaket = [$djaket1, $djaket2];





							// ($x1, $x2, $x3, $x4, $t, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bh1, $bh2, $bbiaso
							//Tas
							function feedForwardTas1($x1, $x2, $x3, $x4, $t, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bh1, $bh2, $bbiaso)
							{
								$maxIn    = max($x1, $x2, $x3, $x4, $t);
								$minIn    = min($x1, $x2, $x3, $x4, $t);

								//normalisasi data input
								$x1Nor = 0.8 * ($x1 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x2Nor = 0.8 * ($x2 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x3Nor = 0.8 * ($x3 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x4Nor = 0.8 * ($x4 - $minIn) / ($maxIn - $minIn) + 0.1;
								$targetNor = 0.8 * ($t - $minIn) / ($maxIn - $minIn) + 0.1;

								//hitung nilai pada hidden layer
								$h1 = $bbiash1 + ($x1Nor * $bx1h1) + ($x2Nor * $bx2h1) + ($x3Nor * $bx3h1) + ($x4Nor * $bx4h1);
								$h2 = $bbiash2 + ($x1Nor * $bx1h2) + ($x2Nor * $bx2h2) + ($x3Nor * $bx3h2) + ($x4Nor * $bx4h2);
								$h1Sig = 1 / (1 + exp($h1 * -1));
								$h2Sig = 1 / (1 + exp($h2 * -1));

								//hitung nilai output
								$out = $bbiaso + ($h1Sig * $bh1) + ($h2Sig * $bh2);
								$outSig = 1 / (1 + exp($out * -1));
								$err = ($targetNor - $outSig);
								$error = pow($err, 2);
								$te = 0.3;
								global $dnf;
								$dn1 = ($maxIn - $minIn);
								$dn = $outSig * $dn1;
								$dnf = $dn + $minIn;
								if ($error > $te) {
									backpropagationTas1($outSig, $targetNor, $h1Sig, $h2Sig, $bh1, $bh2, $x1Nor, $x2Nor, $x3Nor, $x4Nor, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bbiaso, $x1, $x2, $x3, $x4, $t);
								} else {
									// echo "Target =" . $targetNor . "<br>";
									// echo "Output =" . $outSig . "<br>";
									// $err = ($targetNor - $outSig);
									// $error = pow($err, 2);
									// echo "Error = " . $error . "<br><br>";
								}
							}
							function backpropagationTas1($outSig, $targetNor, $h1Sig, $h2Sig, $bh1, $bh2, $x1Nor, $x2Nor, $x3Nor, $x4Nor, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bbiaso, $x1, $x2, $x3, $x4, $t)
							{
								$alpha = 0.1;

								//Persamaan lima
								$dk = ($targetNor - $outSig) * (1 - $outSig) * $outSig;
								// echo "<br>" . $dk;

								//Persamaan enam
								$deltawjk0 = $alpha * $dk;
								$deltawjk1 = $alpha * $dk * $h1Sig;
								$deltawjk2 = $alpha * $dk * $h2Sig;

								//Persamaan tujuh
								$din1 = $dk * $bh1;
								$din2 = $dk * $bh2;

								//Persamaan delapan
								$d1 = $din1 * $h1Sig * (1 - $h1Sig);
								$d2 = $din2 * $h2Sig * (1 - $h2Sig);

								//Persamaan sembilan VIJ Baru
								$x1h1n = $alpha * $d1 * $x1Nor;
								$x2h1n = $alpha * $d1 * $x2Nor;
								$x3h1n = $alpha * $d1 * $x3Nor;
								$x4h1n = $alpha * $d1 * $x4Nor;

								$x1h2n = $alpha * $d2 * $x1Nor;
								$x2h2n = $alpha * $d2 * $x2Nor;
								$x3h2n = $alpha * $d2 * $x3Nor;
								$x4h2n = $alpha * $d2 * $x4Nor;

								$deltav1 = $alpha * $d1;
								$deltav2 = $alpha * $d2;

								//Persamaan sepuluh
								$x1h1nn = $x1h1n +  $bx1h1;
								$x2h1nn = $x2h1n +  $bx2h1;
								$x3h1nn = $x3h1n +  $bx3h1;
								$x4h1nn = $x4h1n +  $bx4h1;

								$x1h2nn = $x1h2n +  $bx1h2;
								$x2h2nn = $x2h2n +  $bx2h2;
								$x3h2nn = $x3h2n +  $bx3h2;
								$x4h2nn = $x4h2n +  $bx4h2;

								//Persamaan sebelas
								$bbh1ko = $deltawjk1 + $bh1;
								$bbh2ko = $deltawjk2 + $bh2;

								$bibikh1 = $bbiash1 + $deltav1;
								$bibikh2 = $bbiash2 + $deltav2;

								$bibhki = $deltawjk0 + $bbiaso;

								feedForwardTrain($x1, $x2, $x3, $x4, $t, $x1h1nn, $x2h1nn, $x3h1nn, $x4h1nn, $x1h2nn, $x2h2nn, $x3h2nn, $x4h2nn, $bibikh1, $bibikh2, $bbh1ko, $bbh2ko, $bibhki);
							}
							feedForwardTas1(53,    64, 31,    95,    38,    $bx1h1n, $bx2h1n, $bx3h1n, $bx4h1n, $bx1h2n, $bx2h2n, $bx3h2n, $bx4h2n, $bbiash1n, $bbiash2n, $bh1n, $bh2n, $bbiason);
							$dtas1 = round($dnf);
							//Dompet2
							function feedForwardTas2($x1, $x2, $x3, $x4, $t, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bh1, $bh2, $bbiaso)
							{
								$maxIn    = max($x1, $x2, $x3, $x4, $t);
								$minIn    = min($x1, $x2, $x3, $x4, $t);

								//normalisasi data input
								$x1Nor = 0.8 * ($x1 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x2Nor = 0.8 * ($x2 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x3Nor = 0.8 * ($x3 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x4Nor = 0.8 * ($x4 - $minIn) / ($maxIn - $minIn) + 0.1;
								$targetNor = 0.8 * ($t - $minIn) / ($maxIn - $minIn) + 0.1;

								//hitung nilai pada hidden layer
								$h1 = $bbiash1 + ($x1Nor * $bx1h1) + ($x2Nor * $bx2h1) + ($x3Nor * $bx3h1) + ($x4Nor * $bx4h1);
								$h2 = $bbiash2 + ($x1Nor * $bx1h2) + ($x2Nor * $bx2h2) + ($x3Nor * $bx3h2) + ($x4Nor * $bx4h2);
								$h1Sig = 1 / (1 + exp($h1 * -1));
								$h2Sig = 1 / (1 + exp($h2 * -1));

								//hitung nilai output
								$out = $bbiaso + ($h1Sig * $bh1) + ($h2Sig * $bh2);
								$outSig = 1 / (1 + exp($out * -1));
								$err = ($targetNor - $outSig);
								$error = pow($err, 2);
								$te = 0.3;
								global $dnf;
								$dn1 = ($maxIn - $minIn);
								$dn = $outSig * $dn1;
								$dnf = $dn + $minIn;
								if ($error > $te) {
									backpropagationTas2($outSig, $targetNor, $h1Sig, $h2Sig, $bh1, $bh2, $x1Nor, $x2Nor, $x3Nor, $x4Nor, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bbiaso, $x1, $x2, $x3, $x4, $t);
								} else {
									// echo "Target =" . $targetNor . "<br>";
									// echo "Output =" . $outSig . "<br>";
									// $err = ($targetNor - $outSig);
									// $error = pow($err, 2);
									// echo "Error = " . $error . "<br><br>";
								}
							}
							function backpropagationTas2($outSig, $targetNor, $h1Sig, $h2Sig, $bh1, $bh2, $x1Nor, $x2Nor, $x3Nor, $x4Nor, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bbiaso, $x1, $x2, $x3, $x4, $t)
							{
								$alpha = 0.1;

								//Persamaan lima
								$dk = ($targetNor - $outSig) * (1 - $outSig) * $outSig;
								// echo "<br>" . $dk;

								//Persamaan enam
								$deltawjk0 = $alpha * $dk;
								$deltawjk1 = $alpha * $dk * $h1Sig;
								$deltawjk2 = $alpha * $dk * $h2Sig;

								//Persamaan tujuh
								$din1 = $dk * $bh1;
								$din2 = $dk * $bh2;

								//Persamaan delapan
								$d1 = $din1 * $h1Sig * (1 - $h1Sig);
								$d2 = $din2 * $h2Sig * (1 - $h2Sig);

								//Persamaan sembilan VIJ Baru
								$x1h1n = $alpha * $d1 * $x1Nor;
								$x2h1n = $alpha * $d1 * $x2Nor;
								$x3h1n = $alpha * $d1 * $x3Nor;
								$x4h1n = $alpha * $d1 * $x4Nor;

								$x1h2n = $alpha * $d2 * $x1Nor;
								$x2h2n = $alpha * $d2 * $x2Nor;
								$x3h2n = $alpha * $d2 * $x3Nor;
								$x4h2n = $alpha * $d2 * $x4Nor;

								$deltav1 = $alpha * $d1;
								$deltav2 = $alpha * $d2;

								//Persamaan sepuluh
								$x1h1nn = $x1h1n +  $bx1h1;
								$x2h1nn = $x2h1n +  $bx2h1;
								$x3h1nn = $x3h1n +  $bx3h1;
								$x4h1nn = $x4h1n +  $bx4h1;

								$x1h2nn = $x1h2n +  $bx1h2;
								$x2h2nn = $x2h2n +  $bx2h2;
								$x3h2nn = $x3h2n +  $bx3h2;
								$x4h2nn = $x4h2n +  $bx4h2;

								//Persamaan sebelas
								$bbh1ko = $deltawjk1 + $bh1;
								$bbh2ko = $deltawjk2 + $bh2;

								$bibikh1 = $bbiash1 + $deltav1;
								$bibikh2 = $bbiash2 + $deltav2;

								$bibhki = $deltawjk0 + $bbiaso;

								feedForwardTas2($x1, $x2, $x3, $x4, $t, $x1h1nn, $x2h1nn, $x3h1nn, $x4h1nn, $x1h2nn, $x2h2nn, $x3h2nn, $x4h2nn, $bibikh1, $bibikh2, $bbh1ko, $bbh2ko, $bibhki);
							}
							feedForwardTas2(72,    40, 15, 67, 50, $bx1h1n, $bx2h1n, $bx3h1n, $bx4h1n, $bx1h2n, $bx2h2n, $bx3h2n, $bx4h2n, $bbiash1n, $bbiash2n, $bh1n, $bh2n, $bbiason);
							$dtas2 = round($dnf);
							$artas = [$dtas1, $dtas2];





							// ($x1, $x2, $x3, $x4, $t, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bh1, $bh2, $bbiaso
							//Sandal
							function feedForwardSandal1($x1, $x2, $x3, $x4, $t, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bh1, $bh2, $bbiaso)
							{
								$maxIn    = max($x1, $x2, $x3, $x4, $t);
								$minIn    = min($x1, $x2, $x3, $x4, $t);

								//normalisasi data input
								$x1Nor = 0.8 * ($x1 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x2Nor = 0.8 * ($x2 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x3Nor = 0.8 * ($x3 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x4Nor = 0.8 * ($x4 - $minIn) / ($maxIn - $minIn) + 0.1;
								$targetNor = 0.8 * ($t - $minIn) / ($maxIn - $minIn) + 0.1;

								//hitung nilai pada hidden layer
								$h1 = $bbiash1 + ($x1Nor * $bx1h1) + ($x2Nor * $bx2h1) + ($x3Nor * $bx3h1) + ($x4Nor * $bx4h1);
								$h2 = $bbiash2 + ($x1Nor * $bx1h2) + ($x2Nor * $bx2h2) + ($x3Nor * $bx3h2) + ($x4Nor * $bx4h2);
								$h1Sig = 1 / (1 + exp($h1 * -1));
								$h2Sig = 1 / (1 + exp($h2 * -1));

								//hitung nilai output
								$out = $bbiaso + ($h1Sig * $bh1) + ($h2Sig * $bh2);
								$outSig = 1 / (1 + exp($out * -1));
								$err = ($targetNor - $outSig);
								$error = pow($err, 2);
								$te = 0.3;
								global $dnf;
								$dn1 = ($maxIn - $minIn);
								$dn = $outSig * $dn1;
								$dnf = $dn + $minIn;
								if ($error > $te) {
									backpropagationSandal1($outSig, $targetNor, $h1Sig, $h2Sig, $bh1, $bh2, $x1Nor, $x2Nor, $x3Nor, $x4Nor, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bbiaso, $x1, $x2, $x3, $x4, $t);
								} else {
									// echo "Target =" . $targetNor . "<br>";
									// echo "Output =" . $outSig . "<br>";
									// $err = ($targetNor - $outSig);
									// $error = pow($err, 2);
									// echo "Error = " . $error . "<br><br>";
								}
							}
							function backpropagationSandal1($outSig, $targetNor, $h1Sig, $h2Sig, $bh1, $bh2, $x1Nor, $x2Nor, $x3Nor, $x4Nor, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bbiaso, $x1, $x2, $x3, $x4, $t)
							{
								$alpha = 0.1;

								//Persamaan lima
								$dk = ($targetNor - $outSig) * (1 - $outSig) * $outSig;
								// echo "<br>" . $dk;

								//Persamaan enam
								$deltawjk0 = $alpha * $dk;
								$deltawjk1 = $alpha * $dk * $h1Sig;
								$deltawjk2 = $alpha * $dk * $h2Sig;

								//Persamaan tujuh
								$din1 = $dk * $bh1;
								$din2 = $dk * $bh2;

								//Persamaan delapan
								$d1 = $din1 * $h1Sig * (1 - $h1Sig);
								$d2 = $din2 * $h2Sig * (1 - $h2Sig);

								//Persamaan sembilan VIJ Baru
								$x1h1n = $alpha * $d1 * $x1Nor;
								$x2h1n = $alpha * $d1 * $x2Nor;
								$x3h1n = $alpha * $d1 * $x3Nor;
								$x4h1n = $alpha * $d1 * $x4Nor;

								$x1h2n = $alpha * $d2 * $x1Nor;
								$x2h2n = $alpha * $d2 * $x2Nor;
								$x3h2n = $alpha * $d2 * $x3Nor;
								$x4h2n = $alpha * $d2 * $x4Nor;

								$deltav1 = $alpha * $d1;
								$deltav2 = $alpha * $d2;

								//Persamaan sepuluh
								$x1h1nn = $x1h1n +  $bx1h1;
								$x2h1nn = $x2h1n +  $bx2h1;
								$x3h1nn = $x3h1n +  $bx3h1;
								$x4h1nn = $x4h1n +  $bx4h1;

								$x1h2nn = $x1h2n +  $bx1h2;
								$x2h2nn = $x2h2n +  $bx2h2;
								$x3h2nn = $x3h2n +  $bx3h2;
								$x4h2nn = $x4h2n +  $bx4h2;

								//Persamaan sebelas
								$bbh1ko = $deltawjk1 + $bh1;
								$bbh2ko = $deltawjk2 + $bh2;

								$bibikh1 = $bbiash1 + $deltav1;
								$bibikh2 = $bbiash2 + $deltav2;

								$bibhki = $deltawjk0 + $bbiaso;

								feedForwardTrain($x1, $x2, $x3, $x4, $t, $x1h1nn, $x2h1nn, $x3h1nn, $x4h1nn, $x1h2nn, $x2h2nn, $x3h2nn, $x4h2nn, $bibikh1, $bibikh2, $bbh1ko, $bbh2ko, $bibhki);
							}
							feedForwardSandal1(27,    81,    65,    62, 71,    $bx1h1n, $bx2h1n, $bx3h1n, $bx4h1n, $bx1h2n, $bx2h2n, $bx3h2n, $bx4h2n, $bbiash1n, $bbiash2n, $bh1n, $bh2n, $bbiason);
							$dsandal1 = round($dnf);
							//Dompet2
							function feedForwardSandal2($x1, $x2, $x3, $x4, $t, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bh1, $bh2, $bbiaso)
							{
								$maxIn    = max($x1, $x2, $x3, $x4, $t);
								$minIn    = min($x1, $x2, $x3, $x4, $t);

								//normalisasi data input
								$x1Nor = 0.8 * ($x1 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x2Nor = 0.8 * ($x2 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x3Nor = 0.8 * ($x3 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x4Nor = 0.8 * ($x4 - $minIn) / ($maxIn - $minIn) + 0.1;
								$targetNor = 0.8 * ($t - $minIn) / ($maxIn - $minIn) + 0.1;

								//hitung nilai pada hidden layer
								$h1 = $bbiash1 + ($x1Nor * $bx1h1) + ($x2Nor * $bx2h1) + ($x3Nor * $bx3h1) + ($x4Nor * $bx4h1);
								$h2 = $bbiash2 + ($x1Nor * $bx1h2) + ($x2Nor * $bx2h2) + ($x3Nor * $bx3h2) + ($x4Nor * $bx4h2);
								$h1Sig = 1 / (1 + exp($h1 * -1));
								$h2Sig = 1 / (1 + exp($h2 * -1));

								//hitung nilai output
								$out = $bbiaso + ($h1Sig * $bh1) + ($h2Sig * $bh2);
								$outSig = 1 / (1 + exp($out * -1));
								$err = ($targetNor - $outSig);
								$error = pow($err, 2);
								$te = 0.3;
								global $dnf;
								$dn1 = ($maxIn - $minIn);
								$dn = $outSig * $dn1;
								$dnf = $dn + $minIn;
								if ($error > $te) {
									backpropagationSandal2($outSig, $targetNor, $h1Sig, $h2Sig, $bh1, $bh2, $x1Nor, $x2Nor, $x3Nor, $x4Nor, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bbiaso, $x1, $x2, $x3, $x4, $t);
								} else {
									// echo "Target =" . $targetNor . "<br>";
									// echo "Output =" . $outSig . "<br>";
									// $err = ($targetNor - $outSig);
									// $error = pow($err, 2);
									// echo "Error = " . $error . "<br><br>";
								}
							}
							function backpropagationSandal2($outSig, $targetNor, $h1Sig, $h2Sig, $bh1, $bh2, $x1Nor, $x2Nor, $x3Nor, $x4Nor, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bbiaso, $x1, $x2, $x3, $x4, $t)
							{
								$alpha = 0.1;

								//Persamaan lima
								$dk = ($targetNor - $outSig) * (1 - $outSig) * $outSig;
								// echo "<br>" . $dk;

								//Persamaan enam
								$deltawjk0 = $alpha * $dk;
								$deltawjk1 = $alpha * $dk * $h1Sig;
								$deltawjk2 = $alpha * $dk * $h2Sig;

								//Persamaan tujuh
								$din1 = $dk * $bh1;
								$din2 = $dk * $bh2;

								//Persamaan delapan
								$d1 = $din1 * $h1Sig * (1 - $h1Sig);
								$d2 = $din2 * $h2Sig * (1 - $h2Sig);

								//Persamaan sembilan VIJ Baru
								$x1h1n = $alpha * $d1 * $x1Nor;
								$x2h1n = $alpha * $d1 * $x2Nor;
								$x3h1n = $alpha * $d1 * $x3Nor;
								$x4h1n = $alpha * $d1 * $x4Nor;

								$x1h2n = $alpha * $d2 * $x1Nor;
								$x2h2n = $alpha * $d2 * $x2Nor;
								$x3h2n = $alpha * $d2 * $x3Nor;
								$x4h2n = $alpha * $d2 * $x4Nor;

								$deltav1 = $alpha * $d1;
								$deltav2 = $alpha * $d2;

								//Persamaan sepuluh
								$x1h1nn = $x1h1n +  $bx1h1;
								$x2h1nn = $x2h1n +  $bx2h1;
								$x3h1nn = $x3h1n +  $bx3h1;
								$x4h1nn = $x4h1n +  $bx4h1;

								$x1h2nn = $x1h2n +  $bx1h2;
								$x2h2nn = $x2h2n +  $bx2h2;
								$x3h2nn = $x3h2n +  $bx3h2;
								$x4h2nn = $x4h2n +  $bx4h2;

								//Persamaan sebelas
								$bbh1ko = $deltawjk1 + $bh1;
								$bbh2ko = $deltawjk2 + $bh2;

								$bibikh1 = $bbiash1 + $deltav1;
								$bibikh2 = $bbiash2 + $deltav2;

								$bibhki = $deltawjk0 + $bbiaso;

								feedForwardSandal2($x1, $x2, $x3, $x4, $t, $x1h1nn, $x2h1nn, $x3h1nn, $x4h1nn, $x1h2nn, $x2h2nn, $x3h2nn, $x4h2nn, $bibikh1, $bibikh2, $bbh1ko, $bbh2ko, $bibhki);
							}
							feedForwardSandal2(41, 53, 50, 13, 80, $bx1h1n, $bx2h1n, $bx3h1n, $bx4h1n, $bx1h2n, $bx2h2n, $bx3h2n, $bx4h2n, $bbiash1n, $bbiash2n, $bh1n, $bh2n, $bbiason);
							$dsandal2 = round($dnf);
							$arsandal = [$dsandal1, $dsandal2];
						}
						if ($time > "$b4" && $time < "$a4") {
							function feedForwardTrain($x1, $x2, $x3, $x4, $t, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bh1, $bh2, $bbiaso)
							{
								$maxIn    = max($x1, $x2, $x3, $x4, $t);
								$minIn    = min($x1, $x2, $x3, $x4, $t);

								//normalisasi data input
								$x1Nor = 0.8 * ($x1 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x2Nor = 0.8 * ($x2 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x3Nor = 0.8 * ($x3 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x4Nor = 0.8 * ($x4 - $minIn) / ($maxIn - $minIn) + 0.1;
								$targetNor = 0.8 * ($t - $minIn) / ($maxIn - $minIn) + 0.1;

								//hitung nilai pada hidden layer
								$h1 = $bbiash1 + ($x1Nor * $bx1h1) + ($x2Nor * $bx2h1) + ($x3Nor * $bx3h1) + ($x4Nor * $bx4h1);
								$h2 = $bbiash2 + ($x1Nor * $bx1h2) + ($x2Nor * $bx2h2) + ($x3Nor * $bx3h2) + ($x4Nor * $bx4h2);
								$h1Sig = 1 / (1 + exp($h1 * -1));
								$h2Sig = 1 / (1 + exp($h2 * -1));

								//hitung nilai output
								$out = $bbiaso + ($h1Sig * $bh1) + ($h2Sig * $bh2);
								$outSig = 1 / (1 + exp($out * -1));
								$err = ($targetNor - $outSig);
								$error = pow($err, 2);
								$te = 0.01;
								if ($error > $te) {
									backpropagationTrain($outSig, $targetNor, $h1Sig, $h2Sig, $bh1, $bh2, $x1Nor, $x2Nor, $x3Nor, $x4Nor, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bbiaso, $x1, $x2, $x3, $x4, $t);
								} else {
									// echo "Target =" . $targetNor . "<br>";
									// echo "Output =" . $outSig . "<br>";
									// $err = ($targetNor - $outSig);
									// $error = pow($err, 2);
									// echo "Error = " . $error . "<br><br>";

									global $bx1h1n, $bx2h1n, $bx3h1n, $bx4h1n, $bx1h2n, $bx2h2n, $bx3h2n, $bx4h2n, $bbiash1n, $bbiash2n, $bh1n, $bh2n, $bbiason;
									$bx1h1n = $bx1h1;
									$bx2h1n = $bx2h1;
									$bx3h1n = $bx3h1;
									$bx4h1n = $bx1h1;
									$bx1h2n = $bx1h2;
									$bx2h2n = $bx2h2;
									$bx3h2n = $bx3h2;
									$bx4h2n = $bx1h2;

									$bbiash1n =  $bbiash1;
									$bbiash2n =  $bbiash2;
									$bh1n      = $bh1;
									$bh2n      = $bh2;
									$bbiason  = $bbiaso;
								}
							}
							function backpropagationTrain($outSig, $targetNor, $h1Sig, $h2Sig, $bh1, $bh2, $x1Nor, $x2Nor, $x3Nor, $x4Nor, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bbiaso, $x1, $x2, $x3, $x4, $t)
							{
								$alpha = 0.1;

								//Persamaan lima
								$dk = ($targetNor - $outSig) * (1 - $outSig) * $outSig;
								// echo "<br>" . $dk;

								//Persamaan enam
								$deltawjk0 = $alpha * $dk;
								$deltawjk1 = $alpha * $dk * $h1Sig;
								$deltawjk2 = $alpha * $dk * $h2Sig;

								//Persamaan tujuh
								$din1 = $dk * $bh1;
								$din2 = $dk * $bh2;

								//Persamaan delapan
								$d1 = $din1 * $h1Sig * (1 - $h1Sig);
								$d2 = $din2 * $h2Sig * (1 - $h2Sig);

								//Persamaan sembilan VIJ Baru
								$x1h1n = $alpha * $d1 * $x1Nor;
								$x2h1n = $alpha * $d1 * $x2Nor;
								$x3h1n = $alpha * $d1 * $x3Nor;
								$x4h1n = $alpha * $d1 * $x4Nor;

								$x1h2n = $alpha * $d2 * $x1Nor;
								$x2h2n = $alpha * $d2 * $x2Nor;
								$x3h2n = $alpha * $d2 * $x3Nor;
								$x4h2n = $alpha * $d2 * $x4Nor;

								$deltav1 = $alpha * $d1;
								$deltav2 = $alpha * $d2;

								//Persamaan sepuluh
								$x1h1nn = $x1h1n +  $bx1h1;
								$x2h1nn = $x2h1n +  $bx2h1;
								$x3h1nn = $x3h1n +  $bx3h1;
								$x4h1nn = $x4h1n +  $bx4h1;

								$x1h2nn = $x1h2n +  $bx1h2;
								$x2h2nn = $x2h2n +  $bx2h2;
								$x3h2nn = $x3h2n +  $bx3h2;
								$x4h2nn = $x4h2n +  $bx4h2;

								//Persamaan sebelas
								$bbh1ko = $deltawjk1 + $bh1;
								$bbh2ko = $deltawjk2 + $bh2;

								$bibikh1 = $bbiash1 + $deltav1;
								$bibikh2 = $bbiash2 + $deltav2;

								$bibhki = $deltawjk0 + $bbiaso;

								feedForwardTrain($x1, $x2, $x3, $x4, $t, $x1h1nn, $x2h1nn, $x3h1nn, $x4h1nn, $x1h2nn, $x2h2nn, $x3h2nn, $x4h2nn, $bibikh1, $bibikh2, $bbh1ko, $bbh2ko, $bibhki);
							}
							feedForwardTrain(30, 46, 53, 54, 52, 0.103, 0.6, 0.33, 0.45, 0.3006, 0.3060, 0.876, 0.1006, 0.106, 0.55, 0.1579, 0.6172, 0.396);



							// ($x1, $x2, $x3, $x4, $t, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bh1, $bh2, $bbiaso
							//Baju1
							function feedForwardBaju1($x1, $x2, $x3, $x4, $t, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bh1, $bh2, $bbiaso)
							{
								$maxIn    = max($x1, $x2, $x3, $x4, $t);
								$minIn    = min($x1, $x2, $x3, $x4, $t);

								//normalisasi data input
								$x1Nor = 0.8 * ($x1 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x2Nor = 0.8 * ($x2 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x3Nor = 0.8 * ($x3 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x4Nor = 0.8 * ($x4 - $minIn) / ($maxIn - $minIn) + 0.1;
								$targetNor = 0.8 * ($t - $minIn) / ($maxIn - $minIn) + 0.1;

								//hitung nilai pada hidden layer
								$h1 = $bbiash1 + ($x1Nor * $bx1h1) + ($x2Nor * $bx2h1) + ($x3Nor * $bx3h1) + ($x4Nor * $bx4h1);
								$h2 = $bbiash2 + ($x1Nor * $bx1h2) + ($x2Nor * $bx2h2) + ($x3Nor * $bx3h2) + ($x4Nor * $bx4h2);
								$h1Sig = 1 / (1 + exp($h1 * -1));
								$h2Sig = 1 / (1 + exp($h2 * -1));

								//hitung nilai output
								$out = $bbiaso + ($h1Sig * $bh1) + ($h2Sig * $bh2);
								$outSig = 1 / (1 + exp($out * -1));
								$err = ($targetNor - $outSig);
								$error = pow($err, 2);
								$te = 0.3;
								global $dnf;
								$dn1 = ($maxIn - $minIn);
								$dn = $outSig * $dn1;
								$dnf = $dn + $minIn;
								if ($error > $te) {
									backpropagationBaju1($outSig, $targetNor, $h1Sig, $h2Sig, $bh1, $bh2, $x1Nor, $x2Nor, $x3Nor, $x4Nor, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bbiaso, $x1, $x2, $x3, $x4, $t);
								} else {
									// echo "Target =" . $targetNor . "<br>";
									// echo "Output =" . $outSig . "<br>";
									// $err = ($targetNor - $outSig);
									// $error = pow($err, 2);
									// echo "Error = " . $error . "<br><br>";
								}
							}
							function backpropagationBaju1($outSig, $targetNor, $h1Sig, $h2Sig, $bh1, $bh2, $x1Nor, $x2Nor, $x3Nor, $x4Nor, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bbiaso, $x1, $x2, $x3, $x4, $t)
							{
								$alpha = 0.1;

								//Persamaan lima
								$dk = ($targetNor - $outSig) * (1 - $outSig) * $outSig;
								// echo "<br>" . $dk;

								//Persamaan enam
								$deltawjk0 = $alpha * $dk;
								$deltawjk1 = $alpha * $dk * $h1Sig;
								$deltawjk2 = $alpha * $dk * $h2Sig;

								//Persamaan tujuh
								$din1 = $dk * $bh1;
								$din2 = $dk * $bh2;

								//Persamaan delapan
								$d1 = $din1 * $h1Sig * (1 - $h1Sig);
								$d2 = $din2 * $h2Sig * (1 - $h2Sig);

								//Persamaan sembilan VIJ Baru
								$x1h1n = $alpha * $d1 * $x1Nor;
								$x2h1n = $alpha * $d1 * $x2Nor;
								$x3h1n = $alpha * $d1 * $x3Nor;
								$x4h1n = $alpha * $d1 * $x4Nor;

								$x1h2n = $alpha * $d2 * $x1Nor;
								$x2h2n = $alpha * $d2 * $x2Nor;
								$x3h2n = $alpha * $d2 * $x3Nor;
								$x4h2n = $alpha * $d2 * $x4Nor;

								$deltav1 = $alpha * $d1;
								$deltav2 = $alpha * $d2;

								//Persamaan sepuluh
								$x1h1nn = $x1h1n +  $bx1h1;
								$x2h1nn = $x2h1n +  $bx2h1;
								$x3h1nn = $x3h1n +  $bx3h1;
								$x4h1nn = $x4h1n +  $bx4h1;

								$x1h2nn = $x1h2n +  $bx1h2;
								$x2h2nn = $x2h2n +  $bx2h2;
								$x3h2nn = $x3h2n +  $bx3h2;
								$x4h2nn = $x4h2n +  $bx4h2;

								//Persamaan sebelas
								$bbh1ko = $deltawjk1 + $bh1;
								$bbh2ko = $deltawjk2 + $bh2;

								$bibikh1 = $bbiash1 + $deltav1;
								$bibikh2 = $bbiash2 + $deltav2;

								$bibhki = $deltawjk0 + $bbiaso;

								feedForwardTrain($x1, $x2, $x3, $x4, $t, $x1h1nn, $x2h1nn, $x3h1nn, $x4h1nn, $x1h2nn, $x2h2nn, $x3h2nn, $x4h2nn, $bibikh1, $bibikh2, $bbh1ko, $bbh2ko, $bibhki);
							}
							feedForwardBaju1(76, 15,    59, 65,    64, $bx1h1n, $bx2h1n, $bx3h1n, $bx4h1n, $bx1h2n, $bx2h2n, $bx3h2n, $bx4h2n, $bbiash1n, $bbiash2n, $bh1n, $bh2n, $bbiason);
							$dbaju1 = round($dnf);
							//Baju2
							function feedForwardBaju2($x1, $x2, $x3, $x4, $t, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bh1, $bh2, $bbiaso)
							{
								$maxIn    = max($x1, $x2, $x3, $x4, $t);
								$minIn    = min($x1, $x2, $x3, $x4, $t);

								//normalisasi data input
								$x1Nor = 0.8 * ($x1 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x2Nor = 0.8 * ($x2 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x3Nor = 0.8 * ($x3 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x4Nor = 0.8 * ($x4 - $minIn) / ($maxIn - $minIn) + 0.1;
								$targetNor = 0.8 * ($t - $minIn) / ($maxIn - $minIn) + 0.1;

								//hitung nilai pada hidden layer
								$h1 = $bbiash1 + ($x1Nor * $bx1h1) + ($x2Nor * $bx2h1) + ($x3Nor * $bx3h1) + ($x4Nor * $bx4h1);
								$h2 = $bbiash2 + ($x1Nor * $bx1h2) + ($x2Nor * $bx2h2) + ($x3Nor * $bx3h2) + ($x4Nor * $bx4h2);
								$h1Sig = 1 / (1 + exp($h1 * -1));
								$h2Sig = 1 / (1 + exp($h2 * -1));

								//hitung nilai output
								$out = $bbiaso + ($h1Sig * $bh1) + ($h2Sig * $bh2);
								$outSig = 1 / (1 + exp($out * -1));
								$err = ($targetNor - $outSig);
								$error = pow($err, 2);
								$te = 0.3;
								global $dnf;
								$dn1 = ($maxIn - $minIn);
								$dn = $outSig * $dn1;
								$dnf = $dn + $minIn;
								if ($error > $te) {
									backpropagationBaju2($outSig, $targetNor, $h1Sig, $h2Sig, $bh1, $bh2, $x1Nor, $x2Nor, $x3Nor, $x4Nor, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bbiaso, $x1, $x2, $x3, $x4, $t);
								} else {
									// echo "Target =" . $targetNor . "<br>";
									// echo "Output =" . $outSig . "<br>";
									// $err = ($targetNor - $outSig);
									// $error = pow($err, 2);
									// echo "Error = " . $error . "<br><br>";
								}
							}
							function backpropagationBaju2($outSig, $targetNor, $h1Sig, $h2Sig, $bh1, $bh2, $x1Nor, $x2Nor, $x3Nor, $x4Nor, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bbiaso, $x1, $x2, $x3, $x4, $t)
							{
								$alpha = 0.1;

								//Persamaan lima
								$dk = ($targetNor - $outSig) * (1 - $outSig) * $outSig;
								// echo "<br>" . $dk;

								//Persamaan enam
								$deltawjk0 = $alpha * $dk;
								$deltawjk1 = $alpha * $dk * $h1Sig;
								$deltawjk2 = $alpha * $dk * $h2Sig;

								//Persamaan tujuh
								$din1 = $dk * $bh1;
								$din2 = $dk * $bh2;

								//Persamaan delapan
								$d1 = $din1 * $h1Sig * (1 - $h1Sig);
								$d2 = $din2 * $h2Sig * (1 - $h2Sig);

								//Persamaan sembilan VIJ Baru
								$x1h1n = $alpha * $d1 * $x1Nor;
								$x2h1n = $alpha * $d1 * $x2Nor;
								$x3h1n = $alpha * $d1 * $x3Nor;
								$x4h1n = $alpha * $d1 * $x4Nor;

								$x1h2n = $alpha * $d2 * $x1Nor;
								$x2h2n = $alpha * $d2 * $x2Nor;
								$x3h2n = $alpha * $d2 * $x3Nor;
								$x4h2n = $alpha * $d2 * $x4Nor;

								$deltav1 = $alpha * $d1;
								$deltav2 = $alpha * $d2;

								//Persamaan sepuluh
								$x1h1nn = $x1h1n +  $bx1h1;
								$x2h1nn = $x2h1n +  $bx2h1;
								$x3h1nn = $x3h1n +  $bx3h1;
								$x4h1nn = $x4h1n +  $bx4h1;

								$x1h2nn = $x1h2n +  $bx1h2;
								$x2h2nn = $x2h2n +  $bx2h2;
								$x3h2nn = $x3h2n +  $bx3h2;
								$x4h2nn = $x4h2n +  $bx4h2;

								//Persamaan sebelas
								$bbh1ko = $deltawjk1 + $bh1;
								$bbh2ko = $deltawjk2 + $bh2;

								$bibikh1 = $bbiash1 + $deltav1;
								$bibikh2 = $bbiash2 + $deltav2;

								$bibhki = $deltawjk0 + $bbiaso;

								feedForwardBaju2($x1, $x2, $x3, $x4, $t, $x1h1nn, $x2h1nn, $x3h1nn, $x4h1nn, $x1h2nn, $x2h2nn, $x3h2nn, $x4h2nn, $bibikh1, $bibikh2, $bbh1ko, $bbh2ko, $bibhki);
							}
							feedForwardBaju2(45, 59,    23,    23,    65, $bx1h1n, $bx2h1n, $bx3h1n, $bx4h1n, $bx1h2n, $bx2h2n, $bx3h2n, $bx4h2n, $bbiash1n, $bbiash2n, $bh1n, $bh2n, $bbiason);
							$dbaju2 = round($dnf);
							$arbaju = [$dbaju1, $dbaju2];







							// ($x1, $x2, $x3, $x4, $t, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bh1, $bh2, $bbiaso
							//Celana1
							function feedForwardCelana1($x1, $x2, $x3, $x4, $t, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bh1, $bh2, $bbiaso)
							{
								$maxIn    = max($x1, $x2, $x3, $x4, $t);
								$minIn    = min($x1, $x2, $x3, $x4, $t);

								//normalisasi data input
								$x1Nor = 0.8 * ($x1 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x2Nor = 0.8 * ($x2 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x3Nor = 0.8 * ($x3 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x4Nor = 0.8 * ($x4 - $minIn) / ($maxIn - $minIn) + 0.1;
								$targetNor = 0.8 * ($t - $minIn) / ($maxIn - $minIn) + 0.1;

								//hitung nilai pada hidden layer
								$h1 = $bbiash1 + ($x1Nor * $bx1h1) + ($x2Nor * $bx2h1) + ($x3Nor * $bx3h1) + ($x4Nor * $bx4h1);
								$h2 = $bbiash2 + ($x1Nor * $bx1h2) + ($x2Nor * $bx2h2) + ($x3Nor * $bx3h2) + ($x4Nor * $bx4h2);
								$h1Sig = 1 / (1 + exp($h1 * -1));
								$h2Sig = 1 / (1 + exp($h2 * -1));

								//hitung nilai output
								$out = $bbiaso + ($h1Sig * $bh1) + ($h2Sig * $bh2);
								$outSig = 1 / (1 + exp($out * -1));
								$err = ($targetNor - $outSig);
								$error = pow($err, 2);
								$te = 0.3;
								global $dnf;
								$dn1 = ($maxIn - $minIn);
								$dn = $outSig * $dn1;
								$dnf = $dn + $minIn;
								if ($error > $te) {
									backpropagationCelana1($outSig, $targetNor, $h1Sig, $h2Sig, $bh1, $bh2, $x1Nor, $x2Nor, $x3Nor, $x4Nor, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bbiaso, $x1, $x2, $x3, $x4, $t);
								} else {
									// echo "Target =" . $targetNor . "<br>";
									// echo "Output =" . $outSig . "<br>";
									// $err = ($targetNor - $outSig);
									// $error = pow($err, 2);
									// echo "Error = " . $error . "<br><br>";
								}
							}
							function backpropagationCelana1($outSig, $targetNor, $h1Sig, $h2Sig, $bh1, $bh2, $x1Nor, $x2Nor, $x3Nor, $x4Nor, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bbiaso, $x1, $x2, $x3, $x4, $t)
							{
								$alpha = 0.1;

								//Persamaan lima
								$dk = ($targetNor - $outSig) * (1 - $outSig) * $outSig;
								// echo "<br>" . $dk;

								//Persamaan enam
								$deltawjk0 = $alpha * $dk;
								$deltawjk1 = $alpha * $dk * $h1Sig;
								$deltawjk2 = $alpha * $dk * $h2Sig;

								//Persamaan tujuh
								$din1 = $dk * $bh1;
								$din2 = $dk * $bh2;

								//Persamaan delapan
								$d1 = $din1 * $h1Sig * (1 - $h1Sig);
								$d2 = $din2 * $h2Sig * (1 - $h2Sig);

								//Persamaan sembilan VIJ Baru
								$x1h1n = $alpha * $d1 * $x1Nor;
								$x2h1n = $alpha * $d1 * $x2Nor;
								$x3h1n = $alpha * $d1 * $x3Nor;
								$x4h1n = $alpha * $d1 * $x4Nor;

								$x1h2n = $alpha * $d2 * $x1Nor;
								$x2h2n = $alpha * $d2 * $x2Nor;
								$x3h2n = $alpha * $d2 * $x3Nor;
								$x4h2n = $alpha * $d2 * $x4Nor;

								$deltav1 = $alpha * $d1;
								$deltav2 = $alpha * $d2;

								//Persamaan sepuluh
								$x1h1nn = $x1h1n +  $bx1h1;
								$x2h1nn = $x2h1n +  $bx2h1;
								$x3h1nn = $x3h1n +  $bx3h1;
								$x4h1nn = $x4h1n +  $bx4h1;

								$x1h2nn = $x1h2n +  $bx1h2;
								$x2h2nn = $x2h2n +  $bx2h2;
								$x3h2nn = $x3h2n +  $bx3h2;
								$x4h2nn = $x4h2n +  $bx4h2;

								//Persamaan sebelas
								$bbh1ko = $deltawjk1 + $bh1;
								$bbh2ko = $deltawjk2 + $bh2;

								$bibikh1 = $bbiash1 + $deltav1;
								$bibikh2 = $bbiash2 + $deltav2;

								$bibhki = $deltawjk0 + $bbiaso;

								feedForwardTrain($x1, $x2, $x3, $x4, $t, $x1h1nn, $x2h1nn, $x3h1nn, $x4h1nn, $x1h2nn, $x2h2nn, $x3h2nn, $x4h2nn, $bibikh1, $bibikh2, $bbh1ko, $bbh2ko, $bibhki);
							}
							feedForwardCelana1(33, 64,    48, 74,    30,    $bx1h1n, $bx2h1n, $bx3h1n, $bx4h1n, $bx1h2n, $bx2h2n, $bx3h2n, $bx4h2n, $bbiash1n, $bbiash2n, $bh1n, $bh2n, $bbiason);
							$dcelana1 = round($dnf);
							//Celana2
							function feedForwardCelana2($x1, $x2, $x3, $x4, $t, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bh1, $bh2, $bbiaso)
							{
								$maxIn    = max($x1, $x2, $x3, $x4, $t);
								$minIn    = min($x1, $x2, $x3, $x4, $t);

								//normalisasi data input
								$x1Nor = 0.8 * ($x1 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x2Nor = 0.8 * ($x2 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x3Nor = 0.8 * ($x3 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x4Nor = 0.8 * ($x4 - $minIn) / ($maxIn - $minIn) + 0.1;
								$targetNor = 0.8 * ($t - $minIn) / ($maxIn - $minIn) + 0.1;

								//hitung nilai pada hidden layer
								$h1 = $bbiash1 + ($x1Nor * $bx1h1) + ($x2Nor * $bx2h1) + ($x3Nor * $bx3h1) + ($x4Nor * $bx4h1);
								$h2 = $bbiash2 + ($x1Nor * $bx1h2) + ($x2Nor * $bx2h2) + ($x3Nor * $bx3h2) + ($x4Nor * $bx4h2);
								$h1Sig = 1 / (1 + exp($h1 * -1));
								$h2Sig = 1 / (1 + exp($h2 * -1));

								//hitung nilai output
								$out = $bbiaso + ($h1Sig * $bh1) + ($h2Sig * $bh2);
								$outSig = 1 / (1 + exp($out * -1));
								$err = ($targetNor - $outSig);
								$error = pow($err, 2);
								$te = 0.3;
								global $dnf;
								$dn1 = ($maxIn - $minIn);
								$dn = $outSig * $dn1;
								$dnf = $dn + $minIn;
								if ($error > $te) {
									backpropagationCelana2($outSig, $targetNor, $h1Sig, $h2Sig, $bh1, $bh2, $x1Nor, $x2Nor, $x3Nor, $x4Nor, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bbiaso, $x1, $x2, $x3, $x4, $t);
								} else {
									// echo "Target =" . $targetNor . "<br>";
									// echo "Output =" . $outSig . "<br>";
									// $err = ($targetNor - $outSig);
									// $error = pow($err, 2);
									// echo "Error = " . $error . "<br><br>";
								}
							}
							function backpropagationCelana2($outSig, $targetNor, $h1Sig, $h2Sig, $bh1, $bh2, $x1Nor, $x2Nor, $x3Nor, $x4Nor, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bbiaso, $x1, $x2, $x3, $x4, $t)
							{
								$alpha = 0.1;

								//Persamaan lima
								$dk = ($targetNor - $outSig) * (1 - $outSig) * $outSig;
								// echo "<br>" . $dk;

								//Persamaan enam
								$deltawjk0 = $alpha * $dk;
								$deltawjk1 = $alpha * $dk * $h1Sig;
								$deltawjk2 = $alpha * $dk * $h2Sig;

								//Persamaan tujuh
								$din1 = $dk * $bh1;
								$din2 = $dk * $bh2;

								//Persamaan delapan
								$d1 = $din1 * $h1Sig * (1 - $h1Sig);
								$d2 = $din2 * $h2Sig * (1 - $h2Sig);

								//Persamaan sembilan VIJ Baru
								$x1h1n = $alpha * $d1 * $x1Nor;
								$x2h1n = $alpha * $d1 * $x2Nor;
								$x3h1n = $alpha * $d1 * $x3Nor;
								$x4h1n = $alpha * $d1 * $x4Nor;

								$x1h2n = $alpha * $d2 * $x1Nor;
								$x2h2n = $alpha * $d2 * $x2Nor;
								$x3h2n = $alpha * $d2 * $x3Nor;
								$x4h2n = $alpha * $d2 * $x4Nor;

								$deltav1 = $alpha * $d1;
								$deltav2 = $alpha * $d2;

								//Persamaan sepuluh
								$x1h1nn = $x1h1n +  $bx1h1;
								$x2h1nn = $x2h1n +  $bx2h1;
								$x3h1nn = $x3h1n +  $bx3h1;
								$x4h1nn = $x4h1n +  $bx4h1;

								$x1h2nn = $x1h2n +  $bx1h2;
								$x2h2nn = $x2h2n +  $bx2h2;
								$x3h2nn = $x3h2n +  $bx3h2;
								$x4h2nn = $x4h2n +  $bx4h2;

								//Persamaan sebelas
								$bbh1ko = $deltawjk1 + $bh1;
								$bbh2ko = $deltawjk2 + $bh2;

								$bibikh1 = $bbiash1 + $deltav1;
								$bibikh2 = $bbiash2 + $deltav2;

								$bibhki = $deltawjk0 + $bbiaso;

								feedForwardCelana2($x1, $x2, $x3, $x4, $t, $x1h1nn, $x2h1nn, $x3h1nn, $x4h1nn, $x1h2nn, $x2h2nn, $x3h2nn, $x4h2nn, $bibikh1, $bibikh2, $bbh1ko, $bbh2ko, $bibhki);
							}
							feedForwardCelana2(29, 48, 66,    66, 28, $bx1h1n, $bx2h1n, $bx3h1n, $bx4h1n, $bx1h2n, $bx2h2n, $bx3h2n, $bx4h2n, $bbiash1n, $bbiash2n, $bh1n, $bh2n, $bbiason);
							$dcelana2 = round($dnf);
							$arcelana = [$dcelana1, $dcelana2];







							// ($x1, $x2, $x3, $x4, $t, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bh1, $bh2, $bbiaso
							//Dompet1
							function feedForwardDompet1($x1, $x2, $x3, $x4, $t, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bh1, $bh2, $bbiaso)
							{
								$maxIn    = max($x1, $x2, $x3, $x4, $t);
								$minIn    = min($x1, $x2, $x3, $x4, $t);

								//normalisasi data input
								$x1Nor = 0.8 * ($x1 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x2Nor = 0.8 * ($x2 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x3Nor = 0.8 * ($x3 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x4Nor = 0.8 * ($x4 - $minIn) / ($maxIn - $minIn) + 0.1;
								$targetNor = 0.8 * ($t - $minIn) / ($maxIn - $minIn) + 0.1;

								//hitung nilai pada hidden layer
								$h1 = $bbiash1 + ($x1Nor * $bx1h1) + ($x2Nor * $bx2h1) + ($x3Nor * $bx3h1) + ($x4Nor * $bx4h1);
								$h2 = $bbiash2 + ($x1Nor * $bx1h2) + ($x2Nor * $bx2h2) + ($x3Nor * $bx3h2) + ($x4Nor * $bx4h2);
								$h1Sig = 1 / (1 + exp($h1 * -1));
								$h2Sig = 1 / (1 + exp($h2 * -1));

								//hitung nilai output
								$out = $bbiaso + ($h1Sig * $bh1) + ($h2Sig * $bh2);
								$outSig = 1 / (1 + exp($out * -1));
								$err = ($targetNor - $outSig);
								$error = pow($err, 2);
								$te = 0.3;
								global $dnf;
								$dn1 = ($maxIn - $minIn);
								$dn = $outSig * $dn1;
								$dnf = $dn + $minIn;
								if ($error > $te) {
									backpropagationDompet1($outSig, $targetNor, $h1Sig, $h2Sig, $bh1, $bh2, $x1Nor, $x2Nor, $x3Nor, $x4Nor, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bbiaso, $x1, $x2, $x3, $x4, $t);
								} else {
									// echo "Target =" . $targetNor . "<br>";
									// echo "Output =" . $outSig . "<br>";
									// $err = ($targetNor - $outSig);
									// $error = pow($err, 2);
									// echo "Error = " . $error . "<br><br>";
								}
							}
							function backpropagationDompet1($outSig, $targetNor, $h1Sig, $h2Sig, $bh1, $bh2, $x1Nor, $x2Nor, $x3Nor, $x4Nor, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bbiaso, $x1, $x2, $x3, $x4, $t)
							{
								$alpha = 0.1;

								//Persamaan lima
								$dk = ($targetNor - $outSig) * (1 - $outSig) * $outSig;
								// echo "<br>" . $dk;

								//Persamaan enam
								$deltawjk0 = $alpha * $dk;
								$deltawjk1 = $alpha * $dk * $h1Sig;
								$deltawjk2 = $alpha * $dk * $h2Sig;

								//Persamaan tujuh
								$din1 = $dk * $bh1;
								$din2 = $dk * $bh2;

								//Persamaan delapan
								$d1 = $din1 * $h1Sig * (1 - $h1Sig);
								$d2 = $din2 * $h2Sig * (1 - $h2Sig);

								//Persamaan sembilan VIJ Baru
								$x1h1n = $alpha * $d1 * $x1Nor;
								$x2h1n = $alpha * $d1 * $x2Nor;
								$x3h1n = $alpha * $d1 * $x3Nor;
								$x4h1n = $alpha * $d1 * $x4Nor;

								$x1h2n = $alpha * $d2 * $x1Nor;
								$x2h2n = $alpha * $d2 * $x2Nor;
								$x3h2n = $alpha * $d2 * $x3Nor;
								$x4h2n = $alpha * $d2 * $x4Nor;

								$deltav1 = $alpha * $d1;
								$deltav2 = $alpha * $d2;

								//Persamaan sepuluh
								$x1h1nn = $x1h1n +  $bx1h1;
								$x2h1nn = $x2h1n +  $bx2h1;
								$x3h1nn = $x3h1n +  $bx3h1;
								$x4h1nn = $x4h1n +  $bx4h1;

								$x1h2nn = $x1h2n +  $bx1h2;
								$x2h2nn = $x2h2n +  $bx2h2;
								$x3h2nn = $x3h2n +  $bx3h2;
								$x4h2nn = $x4h2n +  $bx4h2;

								//Persamaan sebelas
								$bbh1ko = $deltawjk1 + $bh1;
								$bbh2ko = $deltawjk2 + $bh2;

								$bibikh1 = $bbiash1 + $deltav1;
								$bibikh2 = $bbiash2 + $deltav2;

								$bibhki = $deltawjk0 + $bbiaso;

								feedForwardTrain($x1, $x2, $x3, $x4, $t, $x1h1nn, $x2h1nn, $x3h1nn, $x4h1nn, $x1h2nn, $x2h2nn, $x3h2nn, $x4h2nn, $bibikh1, $bibikh2, $bbh1ko, $bbh2ko, $bibhki);
							}
							feedForwardDompet1(8,    8, 14,    73,    10,    $bx1h1n, $bx2h1n, $bx3h1n, $bx4h1n, $bx1h2n, $bx2h2n, $bx3h2n, $bx4h2n, $bbiash1n, $bbiash2n, $bh1n, $bh2n, $bbiason);
							$ddompet1 = round($dnf);
							//Dompet2
							function feedForwardDompet2($x1, $x2, $x3, $x4, $t, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bh1, $bh2, $bbiaso)
							{
								$maxIn    = max($x1, $x2, $x3, $x4, $t);
								$minIn    = min($x1, $x2, $x3, $x4, $t);

								//normalisasi data input
								$x1Nor = 0.8 * ($x1 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x2Nor = 0.8 * ($x2 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x3Nor = 0.8 * ($x3 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x4Nor = 0.8 * ($x4 - $minIn) / ($maxIn - $minIn) + 0.1;
								$targetNor = 0.8 * ($t - $minIn) / ($maxIn - $minIn) + 0.1;

								//hitung nilai pada hidden layer
								$h1 = $bbiash1 + ($x1Nor * $bx1h1) + ($x2Nor * $bx2h1) + ($x3Nor * $bx3h1) + ($x4Nor * $bx4h1);
								$h2 = $bbiash2 + ($x1Nor * $bx1h2) + ($x2Nor * $bx2h2) + ($x3Nor * $bx3h2) + ($x4Nor * $bx4h2);
								$h1Sig = 1 / (1 + exp($h1 * -1));
								$h2Sig = 1 / (1 + exp($h2 * -1));

								//hitung nilai output
								$out = $bbiaso + ($h1Sig * $bh1) + ($h2Sig * $bh2);
								$outSig = 1 / (1 + exp($out * -1));
								$err = ($targetNor - $outSig);
								$error = pow($err, 2);
								$te = 0.3;
								global $dnf;
								$dn1 = ($maxIn - $minIn);
								$dn = $outSig * $dn1;
								$dnf = $dn + $minIn;
								if ($error > $te) {
									backpropagationDompet2($outSig, $targetNor, $h1Sig, $h2Sig, $bh1, $bh2, $x1Nor, $x2Nor, $x3Nor, $x4Nor, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bbiaso, $x1, $x2, $x3, $x4, $t);
								} else {
									// echo "Target =" . $targetNor . "<br>";
									// echo "Output =" . $outSig . "<br>";
									// $err = ($targetNor - $outSig);
									// $error = pow($err, 2);
									// echo "Error = " . $error . "<br><br>";
								}
							}
							function backpropagationDompet2($outSig, $targetNor, $h1Sig, $h2Sig, $bh1, $bh2, $x1Nor, $x2Nor, $x3Nor, $x4Nor, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bbiaso, $x1, $x2, $x3, $x4, $t)
							{
								$alpha = 0.1;

								//Persamaan lima
								$dk = ($targetNor - $outSig) * (1 - $outSig) * $outSig;
								// echo "<br>" . $dk;

								//Persamaan enam
								$deltawjk0 = $alpha * $dk;
								$deltawjk1 = $alpha * $dk * $h1Sig;
								$deltawjk2 = $alpha * $dk * $h2Sig;

								//Persamaan tujuh
								$din1 = $dk * $bh1;
								$din2 = $dk * $bh2;

								//Persamaan delapan
								$d1 = $din1 * $h1Sig * (1 - $h1Sig);
								$d2 = $din2 * $h2Sig * (1 - $h2Sig);

								//Persamaan sembilan VIJ Baru
								$x1h1n = $alpha * $d1 * $x1Nor;
								$x2h1n = $alpha * $d1 * $x2Nor;
								$x3h1n = $alpha * $d1 * $x3Nor;
								$x4h1n = $alpha * $d1 * $x4Nor;

								$x1h2n = $alpha * $d2 * $x1Nor;
								$x2h2n = $alpha * $d2 * $x2Nor;
								$x3h2n = $alpha * $d2 * $x3Nor;
								$x4h2n = $alpha * $d2 * $x4Nor;

								$deltav1 = $alpha * $d1;
								$deltav2 = $alpha * $d2;

								//Persamaan sepuluh
								$x1h1nn = $x1h1n +  $bx1h1;
								$x2h1nn = $x2h1n +  $bx2h1;
								$x3h1nn = $x3h1n +  $bx3h1;
								$x4h1nn = $x4h1n +  $bx4h1;

								$x1h2nn = $x1h2n +  $bx1h2;
								$x2h2nn = $x2h2n +  $bx2h2;
								$x3h2nn = $x3h2n +  $bx3h2;
								$x4h2nn = $x4h2n +  $bx4h2;

								//Persamaan sebelas
								$bbh1ko = $deltawjk1 + $bh1;
								$bbh2ko = $deltawjk2 + $bh2;

								$bibikh1 = $bbiash1 + $deltav1;
								$bibikh2 = $bbiash2 + $deltav2;

								$bibhki = $deltawjk0 + $bbiaso;

								feedForwardDompet2($x1, $x2, $x3, $x4, $t, $x1h1nn, $x2h1nn, $x3h1nn, $x4h1nn, $x1h2nn, $x2h2nn, $x3h2nn, $x4h2nn, $bibikh1, $bibikh2, $bbh1ko, $bbh2ko, $bibhki);
							}
							feedForwardDompet2(65, 8, 8, 29, 38, $bx1h1n, $bx2h1n, $bx3h1n, $bx4h1n, $bx1h2n, $bx2h2n, $bx3h2n, $bx4h2n, $bbiash1n, $bbiash2n, $bh1n, $bh2n, $bbiason);
							$ddompet2 = round($dnf);
							$ardompet = [$ddompet1, $ddompet2];






							// ($x1, $x2, $x3, $x4, $t, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bh1, $bh2, $bbiaso
							//Sepatu
							function feedForwardSepatu1($x1, $x2, $x3, $x4, $t, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bh1, $bh2, $bbiaso)
							{
								$maxIn    = max($x1, $x2, $x3, $x4, $t);
								$minIn    = min($x1, $x2, $x3, $x4, $t);

								//normalisasi data input
								$x1Nor = 0.8 * ($x1 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x2Nor = 0.8 * ($x2 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x3Nor = 0.8 * ($x3 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x4Nor = 0.8 * ($x4 - $minIn) / ($maxIn - $minIn) + 0.1;
								$targetNor = 0.8 * ($t - $minIn) / ($maxIn - $minIn) + 0.1;

								//hitung nilai pada hidden layer
								$h1 = $bbiash1 + ($x1Nor * $bx1h1) + ($x2Nor * $bx2h1) + ($x3Nor * $bx3h1) + ($x4Nor * $bx4h1);
								$h2 = $bbiash2 + ($x1Nor * $bx1h2) + ($x2Nor * $bx2h2) + ($x3Nor * $bx3h2) + ($x4Nor * $bx4h2);
								$h1Sig = 1 / (1 + exp($h1 * -1));
								$h2Sig = 1 / (1 + exp($h2 * -1));

								//hitung nilai output
								$out = $bbiaso + ($h1Sig * $bh1) + ($h2Sig * $bh2);
								$outSig = 1 / (1 + exp($out * -1));
								$err = ($targetNor - $outSig);
								$error = pow($err, 2);
								$te = 0.3;
								global $dnf;
								$dn1 = ($maxIn - $minIn);
								$dn = $outSig * $dn1;
								$dnf = $dn + $minIn;
								if ($error > $te) {
									backpropagationSepatu1($outSig, $targetNor, $h1Sig, $h2Sig, $bh1, $bh2, $x1Nor, $x2Nor, $x3Nor, $x4Nor, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bbiaso, $x1, $x2, $x3, $x4, $t);
								} else {
									// echo "Target =" . $targetNor . "<br>";
									// echo "Output =" . $outSig . "<br>";
									// $err = ($targetNor - $outSig);
									// $error = pow($err, 2);
									// echo "Error = " . $error . "<br><br>";
								}
							}
							function backpropagationSepatu1($outSig, $targetNor, $h1Sig, $h2Sig, $bh1, $bh2, $x1Nor, $x2Nor, $x3Nor, $x4Nor, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bbiaso, $x1, $x2, $x3, $x4, $t)
							{
								$alpha = 0.1;

								//Persamaan lima
								$dk = ($targetNor - $outSig) * (1 - $outSig) * $outSig;
								// echo "<br>" . $dk;

								//Persamaan enam
								$deltawjk0 = $alpha * $dk;
								$deltawjk1 = $alpha * $dk * $h1Sig;
								$deltawjk2 = $alpha * $dk * $h2Sig;

								//Persamaan tujuh
								$din1 = $dk * $bh1;
								$din2 = $dk * $bh2;

								//Persamaan delapan
								$d1 = $din1 * $h1Sig * (1 - $h1Sig);
								$d2 = $din2 * $h2Sig * (1 - $h2Sig);

								//Persamaan sembilan VIJ Baru
								$x1h1n = $alpha * $d1 * $x1Nor;
								$x2h1n = $alpha * $d1 * $x2Nor;
								$x3h1n = $alpha * $d1 * $x3Nor;
								$x4h1n = $alpha * $d1 * $x4Nor;

								$x1h2n = $alpha * $d2 * $x1Nor;
								$x2h2n = $alpha * $d2 * $x2Nor;
								$x3h2n = $alpha * $d2 * $x3Nor;
								$x4h2n = $alpha * $d2 * $x4Nor;

								$deltav1 = $alpha * $d1;
								$deltav2 = $alpha * $d2;

								//Persamaan sepuluh
								$x1h1nn = $x1h1n +  $bx1h1;
								$x2h1nn = $x2h1n +  $bx2h1;
								$x3h1nn = $x3h1n +  $bx3h1;
								$x4h1nn = $x4h1n +  $bx4h1;

								$x1h2nn = $x1h2n +  $bx1h2;
								$x2h2nn = $x2h2n +  $bx2h2;
								$x3h2nn = $x3h2n +  $bx3h2;
								$x4h2nn = $x4h2n +  $bx4h2;

								//Persamaan sebelas
								$bbh1ko = $deltawjk1 + $bh1;
								$bbh2ko = $deltawjk2 + $bh2;

								$bibikh1 = $bbiash1 + $deltav1;
								$bibikh2 = $bbiash2 + $deltav2;

								$bibhki = $deltawjk0 + $bbiaso;

								feedForwardTrain($x1, $x2, $x3, $x4, $t, $x1h1nn, $x2h1nn, $x3h1nn, $x4h1nn, $x1h2nn, $x2h2nn, $x3h2nn, $x4h2nn, $bibikh1, $bibikh2, $bbh1ko, $bbh2ko, $bibhki);
							}
							feedForwardSepatu1(71, 52,    58,    52,    17,    $bx1h1n, $bx2h1n, $bx3h1n, $bx4h1n, $bx1h2n, $bx2h2n, $bx3h2n, $bx4h2n, $bbiash1n, $bbiash2n, $bh1n, $bh2n, $bbiason);
							$dsepatu1 = round($dnf);
							//Sepatu2
							function feedForwardSepatu2($x1, $x2, $x3, $x4, $t, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bh1, $bh2, $bbiaso)
							{
								$maxIn    = max($x1, $x2, $x3, $x4, $t);
								$minIn    = min($x1, $x2, $x3, $x4, $t);

								//normalisasi data input
								$x1Nor = 0.8 * ($x1 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x2Nor = 0.8 * ($x2 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x3Nor = 0.8 * ($x3 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x4Nor = 0.8 * ($x4 - $minIn) / ($maxIn - $minIn) + 0.1;
								$targetNor = 0.8 * ($t - $minIn) / ($maxIn - $minIn) + 0.1;

								//hitung nilai pada hidden layer
								$h1 = $bbiash1 + ($x1Nor * $bx1h1) + ($x2Nor * $bx2h1) + ($x3Nor * $bx3h1) + ($x4Nor * $bx4h1);
								$h2 = $bbiash2 + ($x1Nor * $bx1h2) + ($x2Nor * $bx2h2) + ($x3Nor * $bx3h2) + ($x4Nor * $bx4h2);
								$h1Sig = 1 / (1 + exp($h1 * -1));
								$h2Sig = 1 / (1 + exp($h2 * -1));

								//hitung nilai output
								$out = $bbiaso + ($h1Sig * $bh1) + ($h2Sig * $bh2);
								$outSig = 1 / (1 + exp($out * -1));
								$err = ($targetNor - $outSig);
								$error = pow($err, 2);
								$te = 0.3;
								global $dnf;
								$dn1 = ($maxIn - $minIn);
								$dn = $outSig * $dn1;
								$dnf = $dn + $minIn;
								if ($error > $te) {
									backpropagationSepatu2($outSig, $targetNor, $h1Sig, $h2Sig, $bh1, $bh2, $x1Nor, $x2Nor, $x3Nor, $x4Nor, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bbiaso, $x1, $x2, $x3, $x4, $t);
								} else {
									// echo "Target =" . $targetNor . "<br>";
									// echo "Output =" . $outSig . "<br>";
									// $err = ($targetNor - $outSig);
									// $error = pow($err, 2);
									// echo "Error = " . $error . "<br><br>";
								}
							}
							function backpropagationSepatu2($outSig, $targetNor, $h1Sig, $h2Sig, $bh1, $bh2, $x1Nor, $x2Nor, $x3Nor, $x4Nor, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bbiaso, $x1, $x2, $x3, $x4, $t)
							{
								$alpha = 0.1;

								//Persamaan lima
								$dk = ($targetNor - $outSig) * (1 - $outSig) * $outSig;
								// echo "<br>" . $dk;

								//Persamaan enam
								$deltawjk0 = $alpha * $dk;
								$deltawjk1 = $alpha * $dk * $h1Sig;
								$deltawjk2 = $alpha * $dk * $h2Sig;

								//Persamaan tujuh
								$din1 = $dk * $bh1;
								$din2 = $dk * $bh2;

								//Persamaan delapan
								$d1 = $din1 * $h1Sig * (1 - $h1Sig);
								$d2 = $din2 * $h2Sig * (1 - $h2Sig);

								//Persamaan sembilan VIJ Baru
								$x1h1n = $alpha * $d1 * $x1Nor;
								$x2h1n = $alpha * $d1 * $x2Nor;
								$x3h1n = $alpha * $d1 * $x3Nor;
								$x4h1n = $alpha * $d1 * $x4Nor;

								$x1h2n = $alpha * $d2 * $x1Nor;
								$x2h2n = $alpha * $d2 * $x2Nor;
								$x3h2n = $alpha * $d2 * $x3Nor;
								$x4h2n = $alpha * $d2 * $x4Nor;

								$deltav1 = $alpha * $d1;
								$deltav2 = $alpha * $d2;

								//Persamaan sepuluh
								$x1h1nn = $x1h1n +  $bx1h1;
								$x2h1nn = $x2h1n +  $bx2h1;
								$x3h1nn = $x3h1n +  $bx3h1;
								$x4h1nn = $x4h1n +  $bx4h1;

								$x1h2nn = $x1h2n +  $bx1h2;
								$x2h2nn = $x2h2n +  $bx2h2;
								$x3h2nn = $x3h2n +  $bx3h2;
								$x4h2nn = $x4h2n +  $bx4h2;

								//Persamaan sebelas
								$bbh1ko = $deltawjk1 + $bh1;
								$bbh2ko = $deltawjk2 + $bh2;

								$bibikh1 = $bbiash1 + $deltav1;
								$bibikh2 = $bbiash2 + $deltav2;

								$bibhki = $deltawjk0 + $bbiaso;

								feedForwardSepatu2($x1, $x2, $x3, $x4, $t, $x1h1nn, $x2h1nn, $x3h1nn, $x4h1nn, $x1h2nn, $x2h2nn, $x3h2nn, $x4h2nn, $bibikh1, $bibikh2, $bbh1ko, $bbh2ko, $bibhki);
							}
							feedForwardSepatu2(55, 31,    65, 52,    70,    $bx1h1n, $bx2h1n, $bx3h1n, $bx4h1n, $bx1h2n, $bx2h2n, $bx3h2n, $bx4h2n, $bbiash1n, $bbiash2n, $bh1n, $bh2n, $bbiason);
							$dsepatu2 = round($dnf);
							$arsepatu = [$dsepatu1, $dsepatu2];






							// ($x1, $x2, $x3, $x4, $t, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bh1, $bh2, $bbiaso
							//Jaket1
							function feedForwardJaket1($x1, $x2, $x3, $x4, $t, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bh1, $bh2, $bbiaso)
							{
								$maxIn    = max($x1, $x2, $x3, $x4, $t);
								$minIn    = min($x1, $x2, $x3, $x4, $t);

								//normalisasi data input
								$x1Nor = 0.8 * ($x1 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x2Nor = 0.8 * ($x2 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x3Nor = 0.8 * ($x3 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x4Nor = 0.8 * ($x4 - $minIn) / ($maxIn - $minIn) + 0.1;
								$targetNor = 0.8 * ($t - $minIn) / ($maxIn - $minIn) + 0.1;

								//hitung nilai pada hidden layer
								$h1 = $bbiash1 + ($x1Nor * $bx1h1) + ($x2Nor * $bx2h1) + ($x3Nor * $bx3h1) + ($x4Nor * $bx4h1);
								$h2 = $bbiash2 + ($x1Nor * $bx1h2) + ($x2Nor * $bx2h2) + ($x3Nor * $bx3h2) + ($x4Nor * $bx4h2);
								$h1Sig = 1 / (1 + exp($h1 * -1));
								$h2Sig = 1 / (1 + exp($h2 * -1));

								//hitung nilai output
								$out = $bbiaso + ($h1Sig * $bh1) + ($h2Sig * $bh2);
								$outSig = 1 / (1 + exp($out * -1));
								$err = ($targetNor - $outSig);
								$error = pow($err, 2);
								$te = 0.3;
								global $dnf;
								$dn1 = ($maxIn - $minIn);
								$dn = $outSig * $dn1;
								$dnf = $dn + $minIn;
								if ($error > $te) {
									backpropagationJaket1($outSig, $targetNor, $h1Sig, $h2Sig, $bh1, $bh2, $x1Nor, $x2Nor, $x3Nor, $x4Nor, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bbiaso, $x1, $x2, $x3, $x4, $t);
								} else {
									// echo "Target =" . $targetNor . "<br>";
									// echo "Output =" . $outSig . "<br>";
									// $err = ($targetNor - $outSig);
									// $error = pow($err, 2);
									// echo "Error = " . $error . "<br><br>";
								}
							}
							function backpropagationJaket1($outSig, $targetNor, $h1Sig, $h2Sig, $bh1, $bh2, $x1Nor, $x2Nor, $x3Nor, $x4Nor, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bbiaso, $x1, $x2, $x3, $x4, $t)
							{
								$alpha = 0.1;

								//Persamaan lima
								$dk = ($targetNor - $outSig) * (1 - $outSig) * $outSig;
								// echo "<br>" . $dk;

								//Persamaan enam
								$deltawjk0 = $alpha * $dk;
								$deltawjk1 = $alpha * $dk * $h1Sig;
								$deltawjk2 = $alpha * $dk * $h2Sig;

								//Persamaan tujuh
								$din1 = $dk * $bh1;
								$din2 = $dk * $bh2;

								//Persamaan delapan
								$d1 = $din1 * $h1Sig * (1 - $h1Sig);
								$d2 = $din2 * $h2Sig * (1 - $h2Sig);

								//Persamaan sembilan VIJ Baru
								$x1h1n = $alpha * $d1 * $x1Nor;
								$x2h1n = $alpha * $d1 * $x2Nor;
								$x3h1n = $alpha * $d1 * $x3Nor;
								$x4h1n = $alpha * $d1 * $x4Nor;

								$x1h2n = $alpha * $d2 * $x1Nor;
								$x2h2n = $alpha * $d2 * $x2Nor;
								$x3h2n = $alpha * $d2 * $x3Nor;
								$x4h2n = $alpha * $d2 * $x4Nor;

								$deltav1 = $alpha * $d1;
								$deltav2 = $alpha * $d2;

								//Persamaan sepuluh
								$x1h1nn = $x1h1n +  $bx1h1;
								$x2h1nn = $x2h1n +  $bx2h1;
								$x3h1nn = $x3h1n +  $bx3h1;
								$x4h1nn = $x4h1n +  $bx4h1;

								$x1h2nn = $x1h2n +  $bx1h2;
								$x2h2nn = $x2h2n +  $bx2h2;
								$x3h2nn = $x3h2n +  $bx3h2;
								$x4h2nn = $x4h2n +  $bx4h2;

								//Persamaan sebelas
								$bbh1ko = $deltawjk1 + $bh1;
								$bbh2ko = $deltawjk2 + $bh2;

								$bibikh1 = $bbiash1 + $deltav1;
								$bibikh2 = $bbiash2 + $deltav2;

								$bibhki = $deltawjk0 + $bbiaso;

								feedForwardTrain($x1, $x2, $x3, $x4, $t, $x1h1nn, $x2h1nn, $x3h1nn, $x4h1nn, $x1h2nn, $x2h2nn, $x3h2nn, $x4h2nn, $bibikh1, $bibikh2, $bbh1ko, $bbh2ko, $bibhki);
							}
							feedForwardJaket1(26,    33,    17,    17, 56,    $bx1h1n, $bx2h1n, $bx3h1n, $bx4h1n, $bx1h2n, $bx2h2n, $bx3h2n, $bx4h2n, $bbiash1n, $bbiash2n, $bh1n, $bh2n, $bbiason);
							$djaket1 = round($dnf);
							//Dompet2
							function feedForwardJaket2($x1, $x2, $x3, $x4, $t, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bh1, $bh2, $bbiaso)
							{
								$maxIn    = max($x1, $x2, $x3, $x4, $t);
								$minIn    = min($x1, $x2, $x3, $x4, $t);

								//normalisasi data input
								$x1Nor = 0.8 * ($x1 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x2Nor = 0.8 * ($x2 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x3Nor = 0.8 * ($x3 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x4Nor = 0.8 * ($x4 - $minIn) / ($maxIn - $minIn) + 0.1;
								$targetNor = 0.8 * ($t - $minIn) / ($maxIn - $minIn) + 0.1;

								//hitung nilai pada hidden layer
								$h1 = $bbiash1 + ($x1Nor * $bx1h1) + ($x2Nor * $bx2h1) + ($x3Nor * $bx3h1) + ($x4Nor * $bx4h1);
								$h2 = $bbiash2 + ($x1Nor * $bx1h2) + ($x2Nor * $bx2h2) + ($x3Nor * $bx3h2) + ($x4Nor * $bx4h2);
								$h1Sig = 1 / (1 + exp($h1 * -1));
								$h2Sig = 1 / (1 + exp($h2 * -1));

								//hitung nilai output
								$out = $bbiaso + ($h1Sig * $bh1) + ($h2Sig * $bh2);
								$outSig = 1 / (1 + exp($out * -1));
								$err = ($targetNor - $outSig);
								$error = pow($err, 2);
								$te = 0.3;
								global $dnf;
								$dn1 = ($maxIn - $minIn);
								$dn = $outSig * $dn1;
								$dnf = $dn + $minIn;
								if ($error > $te) {
									backpropagationJaket2($outSig, $targetNor, $h1Sig, $h2Sig, $bh1, $bh2, $x1Nor, $x2Nor, $x3Nor, $x4Nor, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bbiaso, $x1, $x2, $x3, $x4, $t);
								} else {
									// echo "Target =" . $targetNor . "<br>";
									// echo "Output =" . $outSig . "<br>";
									// $err = ($targetNor - $outSig);
									// $error = pow($err, 2);
									// echo "Error = " . $error . "<br><br>";
								}
							}
							function backpropagationJaket2($outSig, $targetNor, $h1Sig, $h2Sig, $bh1, $bh2, $x1Nor, $x2Nor, $x3Nor, $x4Nor, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bbiaso, $x1, $x2, $x3, $x4, $t)
							{
								$alpha = 0.1;

								//Persamaan lima
								$dk = ($targetNor - $outSig) * (1 - $outSig) * $outSig;
								// echo "<br>" . $dk;

								//Persamaan enam
								$deltawjk0 = $alpha * $dk;
								$deltawjk1 = $alpha * $dk * $h1Sig;
								$deltawjk2 = $alpha * $dk * $h2Sig;

								//Persamaan tujuh
								$din1 = $dk * $bh1;
								$din2 = $dk * $bh2;

								//Persamaan delapan
								$d1 = $din1 * $h1Sig * (1 - $h1Sig);
								$d2 = $din2 * $h2Sig * (1 - $h2Sig);

								//Persamaan sembilan VIJ Baru
								$x1h1n = $alpha * $d1 * $x1Nor;
								$x2h1n = $alpha * $d1 * $x2Nor;
								$x3h1n = $alpha * $d1 * $x3Nor;
								$x4h1n = $alpha * $d1 * $x4Nor;

								$x1h2n = $alpha * $d2 * $x1Nor;
								$x2h2n = $alpha * $d2 * $x2Nor;
								$x3h2n = $alpha * $d2 * $x3Nor;
								$x4h2n = $alpha * $d2 * $x4Nor;

								$deltav1 = $alpha * $d1;
								$deltav2 = $alpha * $d2;

								//Persamaan sepuluh
								$x1h1nn = $x1h1n +  $bx1h1;
								$x2h1nn = $x2h1n +  $bx2h1;
								$x3h1nn = $x3h1n +  $bx3h1;
								$x4h1nn = $x4h1n +  $bx4h1;

								$x1h2nn = $x1h2n +  $bx1h2;
								$x2h2nn = $x2h2n +  $bx2h2;
								$x3h2nn = $x3h2n +  $bx3h2;
								$x4h2nn = $x4h2n +  $bx4h2;

								//Persamaan sebelas
								$bbh1ko = $deltawjk1 + $bh1;
								$bbh2ko = $deltawjk2 + $bh2;

								$bibikh1 = $bbiash1 + $deltav1;
								$bibikh2 = $bbiash2 + $deltav2;

								$bibhki = $deltawjk0 + $bbiaso;

								feedForwardJaket2($x1, $x2, $x3, $x4, $t, $x1h1nn, $x2h1nn, $x3h1nn, $x4h1nn, $x1h2nn, $x2h2nn, $x3h2nn, $x4h2nn, $bibikh1, $bibikh2, $bbh1ko, $bbh2ko, $bibhki);
							}
							feedForwardJaket2(93, 63,    46,    67, 89,    $bx1h1n, $bx2h1n, $bx3h1n, $bx4h1n, $bx1h2n, $bx2h2n, $bx3h2n, $bx4h2n, $bbiash1n, $bbiash2n, $bh1n, $bh2n, $bbiason);
							$djaket2 = round($dnf);
							$arjaket = [$djaket1, $djaket2];





							// ($x1, $x2, $x3, $x4, $t, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bh1, $bh2, $bbiaso
							//Tas
							function feedForwardTas1($x1, $x2, $x3, $x4, $t, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bh1, $bh2, $bbiaso)
							{
								$maxIn    = max($x1, $x2, $x3, $x4, $t);
								$minIn    = min($x1, $x2, $x3, $x4, $t);

								//normalisasi data input
								$x1Nor = 0.8 * ($x1 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x2Nor = 0.8 * ($x2 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x3Nor = 0.8 * ($x3 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x4Nor = 0.8 * ($x4 - $minIn) / ($maxIn - $minIn) + 0.1;
								$targetNor = 0.8 * ($t - $minIn) / ($maxIn - $minIn) + 0.1;

								//hitung nilai pada hidden layer
								$h1 = $bbiash1 + ($x1Nor * $bx1h1) + ($x2Nor * $bx2h1) + ($x3Nor * $bx3h1) + ($x4Nor * $bx4h1);
								$h2 = $bbiash2 + ($x1Nor * $bx1h2) + ($x2Nor * $bx2h2) + ($x3Nor * $bx3h2) + ($x4Nor * $bx4h2);
								$h1Sig = 1 / (1 + exp($h1 * -1));
								$h2Sig = 1 / (1 + exp($h2 * -1));

								//hitung nilai output
								$out = $bbiaso + ($h1Sig * $bh1) + ($h2Sig * $bh2);
								$outSig = 1 / (1 + exp($out * -1));
								$err = ($targetNor - $outSig);
								$error = pow($err, 2);
								$te = 0.3;
								global $dnf;
								$dn1 = ($maxIn - $minIn);
								$dn = $outSig * $dn1;
								$dnf = $dn + $minIn;
								if ($error > $te) {
									backpropagationTas1($outSig, $targetNor, $h1Sig, $h2Sig, $bh1, $bh2, $x1Nor, $x2Nor, $x3Nor, $x4Nor, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bbiaso, $x1, $x2, $x3, $x4, $t);
								} else {
									// echo "Target =" . $targetNor . "<br>";
									// echo "Output =" . $outSig . "<br>";
									// $err = ($targetNor - $outSig);
									// $error = pow($err, 2);
									// echo "Error = " . $error . "<br><br>";
								}
							}
							function backpropagationTas1($outSig, $targetNor, $h1Sig, $h2Sig, $bh1, $bh2, $x1Nor, $x2Nor, $x3Nor, $x4Nor, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bbiaso, $x1, $x2, $x3, $x4, $t)
							{
								$alpha = 0.1;

								//Persamaan lima
								$dk = ($targetNor - $outSig) * (1 - $outSig) * $outSig;
								// echo "<br>" . $dk;

								//Persamaan enam
								$deltawjk0 = $alpha * $dk;
								$deltawjk1 = $alpha * $dk * $h1Sig;
								$deltawjk2 = $alpha * $dk * $h2Sig;

								//Persamaan tujuh
								$din1 = $dk * $bh1;
								$din2 = $dk * $bh2;

								//Persamaan delapan
								$d1 = $din1 * $h1Sig * (1 - $h1Sig);
								$d2 = $din2 * $h2Sig * (1 - $h2Sig);

								//Persamaan sembilan VIJ Baru
								$x1h1n = $alpha * $d1 * $x1Nor;
								$x2h1n = $alpha * $d1 * $x2Nor;
								$x3h1n = $alpha * $d1 * $x3Nor;
								$x4h1n = $alpha * $d1 * $x4Nor;

								$x1h2n = $alpha * $d2 * $x1Nor;
								$x2h2n = $alpha * $d2 * $x2Nor;
								$x3h2n = $alpha * $d2 * $x3Nor;
								$x4h2n = $alpha * $d2 * $x4Nor;

								$deltav1 = $alpha * $d1;
								$deltav2 = $alpha * $d2;

								//Persamaan sepuluh
								$x1h1nn = $x1h1n +  $bx1h1;
								$x2h1nn = $x2h1n +  $bx2h1;
								$x3h1nn = $x3h1n +  $bx3h1;
								$x4h1nn = $x4h1n +  $bx4h1;

								$x1h2nn = $x1h2n +  $bx1h2;
								$x2h2nn = $x2h2n +  $bx2h2;
								$x3h2nn = $x3h2n +  $bx3h2;
								$x4h2nn = $x4h2n +  $bx4h2;

								//Persamaan sebelas
								$bbh1ko = $deltawjk1 + $bh1;
								$bbh2ko = $deltawjk2 + $bh2;

								$bibikh1 = $bbiash1 + $deltav1;
								$bibikh2 = $bbiash2 + $deltav2;

								$bibhki = $deltawjk0 + $bbiaso;

								feedForwardTrain($x1, $x2, $x3, $x4, $t, $x1h1nn, $x2h1nn, $x3h1nn, $x4h1nn, $x1h2nn, $x2h2nn, $x3h2nn, $x4h2nn, $bibikh1, $bibikh2, $bbh1ko, $bbh2ko, $bibhki);
							}
							feedForwardTas1(49,    45,    45,    51,    61,    $bx1h1n, $bx2h1n, $bx3h1n, $bx4h1n, $bx1h2n, $bx2h2n, $bx3h2n, $bx4h2n, $bbiash1n, $bbiash2n, $bh1n, $bh2n, $bbiason);
							$dtas1 = round($dnf);
							//Dompet2
							function feedForwardTas2($x1, $x2, $x3, $x4, $t, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bh1, $bh2, $bbiaso)
							{
								$maxIn    = max($x1, $x2, $x3, $x4, $t);
								$minIn    = min($x1, $x2, $x3, $x4, $t);

								//normalisasi data input
								$x1Nor = 0.8 * ($x1 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x2Nor = 0.8 * ($x2 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x3Nor = 0.8 * ($x3 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x4Nor = 0.8 * ($x4 - $minIn) / ($maxIn - $minIn) + 0.1;
								$targetNor = 0.8 * ($t - $minIn) / ($maxIn - $minIn) + 0.1;

								//hitung nilai pada hidden layer
								$h1 = $bbiash1 + ($x1Nor * $bx1h1) + ($x2Nor * $bx2h1) + ($x3Nor * $bx3h1) + ($x4Nor * $bx4h1);
								$h2 = $bbiash2 + ($x1Nor * $bx1h2) + ($x2Nor * $bx2h2) + ($x3Nor * $bx3h2) + ($x4Nor * $bx4h2);
								$h1Sig = 1 / (1 + exp($h1 * -1));
								$h2Sig = 1 / (1 + exp($h2 * -1));

								//hitung nilai output
								$out = $bbiaso + ($h1Sig * $bh1) + ($h2Sig * $bh2);
								$outSig = 1 / (1 + exp($out * -1));
								$err = ($targetNor - $outSig);
								$error = pow($err, 2);
								$te = 0.3;
								global $dnf;
								$dn1 = ($maxIn - $minIn);
								$dn = $outSig * $dn1;
								$dnf = $dn + $minIn;
								if ($error > $te) {
									backpropagationTas2($outSig, $targetNor, $h1Sig, $h2Sig, $bh1, $bh2, $x1Nor, $x2Nor, $x3Nor, $x4Nor, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bbiaso, $x1, $x2, $x3, $x4, $t);
								} else {
									// echo "Target =" . $targetNor . "<br>";
									// echo "Output =" . $outSig . "<br>";
									// $err = ($targetNor - $outSig);
									// $error = pow($err, 2);
									// echo "Error = " . $error . "<br><br>";
								}
							}
							function backpropagationTas2($outSig, $targetNor, $h1Sig, $h2Sig, $bh1, $bh2, $x1Nor, $x2Nor, $x3Nor, $x4Nor, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bbiaso, $x1, $x2, $x3, $x4, $t)
							{
								$alpha = 0.1;

								//Persamaan lima
								$dk = ($targetNor - $outSig) * (1 - $outSig) * $outSig;
								// echo "<br>" . $dk;

								//Persamaan enam
								$deltawjk0 = $alpha * $dk;
								$deltawjk1 = $alpha * $dk * $h1Sig;
								$deltawjk2 = $alpha * $dk * $h2Sig;

								//Persamaan tujuh
								$din1 = $dk * $bh1;
								$din2 = $dk * $bh2;

								//Persamaan delapan
								$d1 = $din1 * $h1Sig * (1 - $h1Sig);
								$d2 = $din2 * $h2Sig * (1 - $h2Sig);

								//Persamaan sembilan VIJ Baru
								$x1h1n = $alpha * $d1 * $x1Nor;
								$x2h1n = $alpha * $d1 * $x2Nor;
								$x3h1n = $alpha * $d1 * $x3Nor;
								$x4h1n = $alpha * $d1 * $x4Nor;

								$x1h2n = $alpha * $d2 * $x1Nor;
								$x2h2n = $alpha * $d2 * $x2Nor;
								$x3h2n = $alpha * $d2 * $x3Nor;
								$x4h2n = $alpha * $d2 * $x4Nor;

								$deltav1 = $alpha * $d1;
								$deltav2 = $alpha * $d2;

								//Persamaan sepuluh
								$x1h1nn = $x1h1n +  $bx1h1;
								$x2h1nn = $x2h1n +  $bx2h1;
								$x3h1nn = $x3h1n +  $bx3h1;
								$x4h1nn = $x4h1n +  $bx4h1;

								$x1h2nn = $x1h2n +  $bx1h2;
								$x2h2nn = $x2h2n +  $bx2h2;
								$x3h2nn = $x3h2n +  $bx3h2;
								$x4h2nn = $x4h2n +  $bx4h2;

								//Persamaan sebelas
								$bbh1ko = $deltawjk1 + $bh1;
								$bbh2ko = $deltawjk2 + $bh2;

								$bibikh1 = $bbiash1 + $deltav1;
								$bibikh2 = $bbiash2 + $deltav2;

								$bibhki = $deltawjk0 + $bbiaso;

								feedForwardTas2($x1, $x2, $x3, $x4, $t, $x1h1nn, $x2h1nn, $x3h1nn, $x4h1nn, $x1h2nn, $x2h2nn, $x3h2nn, $x4h2nn, $bibikh1, $bibikh2, $bbh1ko, $bbh2ko, $bibhki);
							}
							feedForwardTas2(50, 7,    67,    15,    64, $bx1h1n, $bx2h1n, $bx3h1n, $bx4h1n, $bx1h2n, $bx2h2n, $bx3h2n, $bx4h2n, $bbiash1n, $bbiash2n, $bh1n, $bh2n, $bbiason);
							$dtas2 = round($dnf);
							$artas = [$dtas1, $dtas2];





							// ($x1, $x2, $x3, $x4, $t, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bh1, $bh2, $bbiaso
							//Sandal
							function feedForwardSandal1($x1, $x2, $x3, $x4, $t, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bh1, $bh2, $bbiaso)
							{
								$maxIn    = max($x1, $x2, $x3, $x4, $t);
								$minIn    = min($x1, $x2, $x3, $x4, $t);

								//normalisasi data input
								$x1Nor = 0.8 * ($x1 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x2Nor = 0.8 * ($x2 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x3Nor = 0.8 * ($x3 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x4Nor = 0.8 * ($x4 - $minIn) / ($maxIn - $minIn) + 0.1;
								$targetNor = 0.8 * ($t - $minIn) / ($maxIn - $minIn) + 0.1;

								//hitung nilai pada hidden layer
								$h1 = $bbiash1 + ($x1Nor * $bx1h1) + ($x2Nor * $bx2h1) + ($x3Nor * $bx3h1) + ($x4Nor * $bx4h1);
								$h2 = $bbiash2 + ($x1Nor * $bx1h2) + ($x2Nor * $bx2h2) + ($x3Nor * $bx3h2) + ($x4Nor * $bx4h2);
								$h1Sig = 1 / (1 + exp($h1 * -1));
								$h2Sig = 1 / (1 + exp($h2 * -1));

								//hitung nilai output
								$out = $bbiaso + ($h1Sig * $bh1) + ($h2Sig * $bh2);
								$outSig = 1 / (1 + exp($out * -1));
								$err = ($targetNor - $outSig);
								$error = pow($err, 2);
								$te = 0.3;
								global $dnf;
								$dn1 = ($maxIn - $minIn);
								$dn = $outSig * $dn1;
								$dnf = $dn + $minIn;
								if ($error > $te) {
									backpropagationSandal1($outSig, $targetNor, $h1Sig, $h2Sig, $bh1, $bh2, $x1Nor, $x2Nor, $x3Nor, $x4Nor, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bbiaso, $x1, $x2, $x3, $x4, $t);
								} else {
									// echo "Target =" . $targetNor . "<br>";
									// echo "Output =" . $outSig . "<br>";
									// $err = ($targetNor - $outSig);
									// $error = pow($err, 2);
									// echo "Error = " . $error . "<br><br>";
								}
							}
							function backpropagationSandal1($outSig, $targetNor, $h1Sig, $h2Sig, $bh1, $bh2, $x1Nor, $x2Nor, $x3Nor, $x4Nor, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bbiaso, $x1, $x2, $x3, $x4, $t)
							{
								$alpha = 0.1;

								//Persamaan lima
								$dk = ($targetNor - $outSig) * (1 - $outSig) * $outSig;
								// echo "<br>" . $dk;

								//Persamaan enam
								$deltawjk0 = $alpha * $dk;
								$deltawjk1 = $alpha * $dk * $h1Sig;
								$deltawjk2 = $alpha * $dk * $h2Sig;

								//Persamaan tujuh
								$din1 = $dk * $bh1;
								$din2 = $dk * $bh2;

								//Persamaan delapan
								$d1 = $din1 * $h1Sig * (1 - $h1Sig);
								$d2 = $din2 * $h2Sig * (1 - $h2Sig);

								//Persamaan sembilan VIJ Baru
								$x1h1n = $alpha * $d1 * $x1Nor;
								$x2h1n = $alpha * $d1 * $x2Nor;
								$x3h1n = $alpha * $d1 * $x3Nor;
								$x4h1n = $alpha * $d1 * $x4Nor;

								$x1h2n = $alpha * $d2 * $x1Nor;
								$x2h2n = $alpha * $d2 * $x2Nor;
								$x3h2n = $alpha * $d2 * $x3Nor;
								$x4h2n = $alpha * $d2 * $x4Nor;

								$deltav1 = $alpha * $d1;
								$deltav2 = $alpha * $d2;

								//Persamaan sepuluh
								$x1h1nn = $x1h1n +  $bx1h1;
								$x2h1nn = $x2h1n +  $bx2h1;
								$x3h1nn = $x3h1n +  $bx3h1;
								$x4h1nn = $x4h1n +  $bx4h1;

								$x1h2nn = $x1h2n +  $bx1h2;
								$x2h2nn = $x2h2n +  $bx2h2;
								$x3h2nn = $x3h2n +  $bx3h2;
								$x4h2nn = $x4h2n +  $bx4h2;

								//Persamaan sebelas
								$bbh1ko = $deltawjk1 + $bh1;
								$bbh2ko = $deltawjk2 + $bh2;

								$bibikh1 = $bbiash1 + $deltav1;
								$bibikh2 = $bbiash2 + $deltav2;

								$bibhki = $deltawjk0 + $bbiaso;

								feedForwardTrain($x1, $x2, $x3, $x4, $t, $x1h1nn, $x2h1nn, $x3h1nn, $x4h1nn, $x1h2nn, $x2h2nn, $x3h2nn, $x4h2nn, $bibikh1, $bibikh2, $bbh1ko, $bbh2ko, $bibhki);
							}
							feedForwardSandal1(66,    31,    38,    31,    41,    $bx1h1n, $bx2h1n, $bx3h1n, $bx4h1n, $bx1h2n, $bx2h2n, $bx3h2n, $bx4h2n, $bbiash1n, $bbiash2n, $bh1n, $bh2n, $bbiason);
							$dsandal1 = round($dnf);
							//Dompet2
							function feedForwardSandal2($x1, $x2, $x3, $x4, $t, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bh1, $bh2, $bbiaso)
							{
								$maxIn    = max($x1, $x2, $x3, $x4, $t);
								$minIn    = min($x1, $x2, $x3, $x4, $t);

								//normalisasi data input
								$x1Nor = 0.8 * ($x1 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x2Nor = 0.8 * ($x2 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x3Nor = 0.8 * ($x3 - $minIn) / ($maxIn - $minIn) + 0.1;
								$x4Nor = 0.8 * ($x4 - $minIn) / ($maxIn - $minIn) + 0.1;
								$targetNor = 0.8 * ($t - $minIn) / ($maxIn - $minIn) + 0.1;

								//hitung nilai pada hidden layer
								$h1 = $bbiash1 + ($x1Nor * $bx1h1) + ($x2Nor * $bx2h1) + ($x3Nor * $bx3h1) + ($x4Nor * $bx4h1);
								$h2 = $bbiash2 + ($x1Nor * $bx1h2) + ($x2Nor * $bx2h2) + ($x3Nor * $bx3h2) + ($x4Nor * $bx4h2);
								$h1Sig = 1 / (1 + exp($h1 * -1));
								$h2Sig = 1 / (1 + exp($h2 * -1));

								//hitung nilai output
								$out = $bbiaso + ($h1Sig * $bh1) + ($h2Sig * $bh2);
								$outSig = 1 / (1 + exp($out * -1));
								$err = ($targetNor - $outSig);
								$error = pow($err, 2);
								$te = 0.3;
								global $dnf;
								$dn1 = ($maxIn - $minIn);
								$dn = $outSig * $dn1;
								$dnf = $dn + $minIn;
								if ($error > $te) {
									backpropagationSandal2($outSig, $targetNor, $h1Sig, $h2Sig, $bh1, $bh2, $x1Nor, $x2Nor, $x3Nor, $x4Nor, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bbiaso, $x1, $x2, $x3, $x4, $t);
								} else {
									// echo "Target =" . $targetNor . "<br>";
									// echo "Output =" . $outSig . "<br>";
									// $err = ($targetNor - $outSig);
									// $error = pow($err, 2);
									// echo "Error = " . $error . "<br><br>";
								}
							}
							function backpropagationSandal2($outSig, $targetNor, $h1Sig, $h2Sig, $bh1, $bh2, $x1Nor, $x2Nor, $x3Nor, $x4Nor, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bbiaso, $x1, $x2, $x3, $x4, $t)
							{
								$alpha = 0.1;

								//Persamaan lima
								$dk = ($targetNor - $outSig) * (1 - $outSig) * $outSig;
								// echo "<br>" . $dk;

								//Persamaan enam
								$deltawjk0 = $alpha * $dk;
								$deltawjk1 = $alpha * $dk * $h1Sig;
								$deltawjk2 = $alpha * $dk * $h2Sig;

								//Persamaan tujuh
								$din1 = $dk * $bh1;
								$din2 = $dk * $bh2;

								//Persamaan delapan
								$d1 = $din1 * $h1Sig * (1 - $h1Sig);
								$d2 = $din2 * $h2Sig * (1 - $h2Sig);

								//Persamaan sembilan VIJ Baru
								$x1h1n = $alpha * $d1 * $x1Nor;
								$x2h1n = $alpha * $d1 * $x2Nor;
								$x3h1n = $alpha * $d1 * $x3Nor;
								$x4h1n = $alpha * $d1 * $x4Nor;

								$x1h2n = $alpha * $d2 * $x1Nor;
								$x2h2n = $alpha * $d2 * $x2Nor;
								$x3h2n = $alpha * $d2 * $x3Nor;
								$x4h2n = $alpha * $d2 * $x4Nor;

								$deltav1 = $alpha * $d1;
								$deltav2 = $alpha * $d2;

								//Persamaan sepuluh
								$x1h1nn = $x1h1n +  $bx1h1;
								$x2h1nn = $x2h1n +  $bx2h1;
								$x3h1nn = $x3h1n +  $bx3h1;
								$x4h1nn = $x4h1n +  $bx4h1;

								$x1h2nn = $x1h2n +  $bx1h2;
								$x2h2nn = $x2h2n +  $bx2h2;
								$x3h2nn = $x3h2n +  $bx3h2;
								$x4h2nn = $x4h2n +  $bx4h2;

								//Persamaan sebelas
								$bbh1ko = $deltawjk1 + $bh1;
								$bbh2ko = $deltawjk2 + $bh2;

								$bibikh1 = $bbiash1 + $deltav1;
								$bibikh2 = $bbiash2 + $deltav2;

								$bibhki = $deltawjk0 + $bbiaso;

								feedForwardSandal2($x1, $x2, $x3, $x4, $t, $x1h1nn, $x2h1nn, $x3h1nn, $x4h1nn, $x1h2nn, $x2h2nn, $x3h2nn, $x4h2nn, $bibikh1, $bibikh2, $bbh1ko, $bbh2ko, $bibhki);
							}
							feedForwardSandal2(30, 38,    40,    58,    18, $bx1h1n, $bx2h1n, $bx3h1n, $bx4h1n, $bx1h2n, $bx2h2n, $bx3h2n, $bx4h2n, $bbiash1n, $bbiash2n, $bh1n, $bh2n, $bbiason);
							$dsandal2 = round($dnf);
							$arsandal = [$dsandal1, $dsandal2];
						}
						?>

						<section class="product">
							<div class="container">
								<div class="row">
									<?php
									if (date("d") == date("m")) {
										$sql = "UPDATE product SET product_discount = 1 s/d 100";
										$exe = mysqli_query($koneksi, $sql);
									} else {
										$sql = "UPDATE product SET product_discount = 1 s/d 100";
										$exe = mysqli_query($koneksi, $sql);
									}
									?>
									<?php
									$ret = "Baju";
									$sql = "SELECT * FROM product WHERE product_category = '$ret' ORDER BY RAND() LIMIT 2";
									$exe = mysqli_query($koneksi, $sql);
									$i = 0;
									$j = 0;
									while ($item = $exe->fetch_assoc()) {
									?>
										<div id="<?= $item['product_subcategory'] ?>" class="col-lg-3 produk1">
											<div id="tes1" class="product-item">
												<div class="product-item-img">
													<img src="assets/img/product/<?= $item['product_image'] ?>">
												</div>
												<div class="product-item-text">
													<div class="discount"><?= $arbaju[$i++]; ?> %</div>
													<h6 class="name"><?= $item['product_name'] ?></h6>
													<input hidden type="text" name="<?= $item['product_subcategory'] ?>" value="<?= $item['product_subcategory'] ?>">
													<s>Rp. <?= $item['product_price']; ?></s>
													<h5 class="price">
														<?php
														$harga = $item['product_price'];
														$harga_diskon = $item['product_price'] -  $arbaju[$j++] * $item['product_price'] / 100;
														?>
														Rp. <?= number_format($harga_diskon, 0, '.', '.') ?></h5>
													Available on Shopee
												</div>
											</div>
										</div>
									<?php
									}
									?>
									<?php
									$ret = "Celana";
									$sql = "SELECT * FROM product WHERE product_category = '$ret' ORDER BY RAND() LIMIT 2";
									$exe = mysqli_query($koneksi, $sql);
									$i = 0;
									$j = 0;
									while ($item = $exe->fetch_assoc()) {
									?>
										<div id="<?= $item['product_subcategory'] ?>" class="col-lg-3 produk2">
											<div class="product-item">
												<div class="product-item-img">
													<img src="assets/img/product/<?= $item['product_image'] ?>">
												</div>
												<div class="product-item-text">
													<div class="discount"><?= $arcelana[$i++]; ?> %</div>
													<h6 class="name"><?= $item['product_name'] ?></h6>
													<input hidden type="text" value="<?= $item['product_subcategory'] ?>" hidden>
													<s>Rp. <?= $item['product_price']; ?></s>
													<h5 class="price">
														<?php
														// $diskon =  $arcelana[$j++];
														$harga = $item['product_price'];
														$harga_diskon = $item['product_price'] -  $arcelana[$j++] * $item['product_price'] / 100;
														?>
														Rp. <?= number_format($harga_diskon, 0, '.', '.') ?></h5>
													Available on Shopee
												</div>
											</div>
										</div>
									<?php
									}
									?>
									<?php
									$ret = "Dompet";
									$sql = "SELECT * FROM product WHERE product_category = '$ret' ORDER BY RAND() LIMIT 2";
									$exe = mysqli_query($koneksi, $sql);
									$i = 0;
									$j = 0;
									while ($item = $exe->fetch_assoc()) {
									?>
										<div id="<?= $item['product_subcategory'] ?>" class="col-lg-3 produk3">
											<div class="product-item">
												<div class="product-item-img">
													<img src="assets/img/product/<?= $item['product_image'] ?>">
												</div>
												<div class="product-item-text">
													<div class="discount"><?= $arbaju[$i++]; ?> %</div>
													<h6 class="name"><?= $item['product_name'] ?></h6>
													<input hidden type="text" name="<?= $item['product_subcategory'] ?>" value="<?= $item['product_subcategory'] ?>">
													<s>Rp. <?= $item['product_price']; ?></s>
													<h5 class="price">
														<?php
														$harga = $item['product_price'];
														$harga_diskon = $item['product_price'] -  $arbaju[$j++] * $item['product_price'] / 100;
														?>
														Rp. <?= number_format($harga_diskon, 0, '.', '.') ?></h5>
													Available on Shopee
												</div>
											</div>
										</div>
									<?php
									}
									?>
									<?php
									$ret = "Aksesoris";
									$sql = "SELECT * FROM product WHERE product_category = '$ret' ORDER BY RAND() LIMIT 2";
									$exe = mysqli_query($koneksi, $sql);
									$i = 0;
									$j = 0;
									while ($item = $exe->fetch_assoc()) {
									?>
										<div id="<?= $item['product_subcategory'] ?>" class="col-lg-3 produk4">
											<div class="product-item">
												<div class="product-item-img">
													<img src="assets/img/product/<?= $item['product_image'] ?>">
												</div>
												<div class="product-item-text">
													<div class="discount"><?= $arbaju[$i++]; ?> %</div>
													<h6 class="name"><?= $item['product_name'] ?></h6>
													<input type="text" name="<?= $item['product_subcategory'] ?>" value="<?= $item['product_subcategory'] ?>">
													<s>Rp. <?= $item['product_price']; ?></s>
													<h5 class="price">
														<?php
														$harga = $item['product_price'];
														$harga_diskon = $item['product_price'] -  $arbaju[$j++] * $item['product_price'] / 100;
														?>
														Rp. <?= number_format($harga_diskon, 0, '.', '.') ?></h5>
													Available on Shopee
												</div>
											</div>
										</div>
									<?php
									}
									?>
									<?php
									$ret = "Sepatu";
									$sql = "SELECT * FROM product WHERE product_category = '$ret' ORDER BY RAND() LIMIT 2";
									$exe = mysqli_query($koneksi, $sql);
									$i = 0;
									$j = 0;
									while ($item = $exe->fetch_assoc()) {
									?>
										<div id="<?= $item['product_subcategory'] ?>" class="col-lg-3 produk5">
											<div class="product-item">
												<div class="product-item-img">
													<img src="assets/img/product/<?= $item['product_image'] ?>">
												</div>
												<div class="product-item-text">
													<div class="discount"><?= $arbaju[$i++]; ?> %</div>
													<h6 class="name"><?= $item['product_name'] ?></h6>
													<input hidden type="text" name="<?= $item['product_subcategory'] ?>" value="<?= $item['product_subcategory'] ?>">
													<s>Rp. <?= $item['product_price']; ?></s>
													<h5 class="price">
														<?php
														$harga = $item['product_price'];
														$harga_diskon = $item['product_price'] -  $arbaju[$j++] * $item['product_price'] / 100;
														?>
														Rp. <?= number_format($harga_diskon, 0, '.', '.') ?></h5>
													Available on Shopee
												</div>
											</div>
										</div>
									<?php
									}
									?>
									<?php
									$ret = "Jaket";
									$sql = "SELECT * FROM product WHERE product_category = '$ret' ORDER BY RAND() LIMIT 2";
									$exe = mysqli_query($koneksi, $sql);
									$i = 0;
									$j = 0;
									while ($item = $exe->fetch_assoc()) {
									?>
										<div id="<?= $item['product_subcategory'] ?>" class="col-lg-3 produk6">
											<div class="product-item">
												<div class="product-item-img">
													<img src="assets/img/product/<?= $item['product_image'] ?>">
												</div>
												<div class="product-item-text">
													<div class="discount"><?= $arbaju[$i++]; ?> %</div>
													<h6 class="name"><?= $item['product_name'] ?></h6>
													<input hidden type="text" name="<?= $item['product_subcategory'] ?>" value="<?= $item['product_subcategory'] ?>">
													<s>Rp. <?= $item['product_price']; ?></s>
													<h5 class="price">
														<?php
														$harga = $item['product_price'];
														$harga_diskon = $item['product_price'] -  $arbaju[$j++] * $item['product_price'] / 100;
														?>
														Rp. <?= number_format($harga_diskon, 0, '.', '.') ?></h5>
													Available on Shopee
												</div>
											</div>
										</div>
									<?php
									}
									?>
									<?php
									$ret = "Kaos Kaki";
									$sql = "SELECT * FROM product WHERE product_category = '$ret' ORDER BY RAND() LIMIT 2";
									$exe = mysqli_query($koneksi, $sql);
									$i = 0;
									$j = 0;
									while ($item = $exe->fetch_assoc()) {
									?>
										<div id="<?= $item['product_subcategory'] ?>" class="col-lg-3 produk7">
											<div class="product-item">
												<div class="product-item-img">
													<img src="assets/img/product/<?= $item['product_image'] ?>">
												</div>
												<div class="product-item-text">
													<div class="discount"><?= $arbaju[$i++]; ?> %</div>
													<h6 class="name"><?= $item['product_name'] ?></h6>
													<input hidden type="text" name="<?= $item['product_subcategory'] ?>" value="<?= $item['product_subcategory'] ?>">
													<s>Rp. <?= $item['product_price']; ?></s>
													<h5 class="price">
														<?php
														$harga = $item['product_price'];
														$harga_diskon = $item['product_price'] -  $arbaju[$j++] * $item['product_price'] / 100;
														?>
														Rp. <?= number_format($harga_diskon, 0, '.', '.') ?></h5>
													Available on Shopee
												</div>
											</div>
										</div>
									<?php
									}
									?>
									<?php
									$ret = "Tas";
									$sql = "SELECT * FROM product WHERE product_category = '$ret' ORDER BY RAND() LIMIT 2";
									$exe = mysqli_query($koneksi, $sql);
									$i = 0;
									$j = 0;
									while ($item = $exe->fetch_assoc()) {
									?>
										<div id="<?= $item['product_subcategory'] ?>" class="col-lg-3 produk8">
											<div class="product-item">
												<div class="product-item-img">
													<img src="assets/img/product/<?= $item['product_image'] ?>">
												</div>
												<div class="product-item-text">
													<div class="discount"><?= $arbaju[$i++]; ?> %</div>
													<h6 class="name"><?= $item['product_name'] ?></h6>
													<input hidden type="text" name="<?= $item['product_subcategory'] ?>" value="<?= $item['product_subcategory'] ?>">
													<s>Rp. <?= $item['product_price']; ?></s>
													<h5 class="price">
														<?php
														$harga = $item['product_price'];
														$harga_diskon = $item['product_price'] -  $arbaju[$j++] * $item['product_price'] / 100;
														?>
														Rp. <?= number_format($harga_diskon, 0, '.', '.') ?></h5>
													Available on Shopee
												</div>
											</div>
										</div>
									<?php
									}
									?>
									<?php
									$ret = "Sandal";
									$sql = "SELECT * FROM product WHERE product_category = '$ret' ORDER BY RAND() LIMIT 2";
									$exe = mysqli_query($koneksi, $sql);
									$i = 0;
									$j = 0;
									while ($item = $exe->fetch_assoc()) {
									?>
										<div id="<?= $item['product_subcategory'] ?>" class="col-lg-3 produk9">
											<div class="product-item">
												<div class="product-item-img">
													<img src="assets/img/product/<?= $item['product_image'] ?>">
												</div>
												<div class="product-item-text">
													<div class="discount"><?= $arbaju[$i++]; ?> %</div>
													<h6 class="name"><?= $item['product_name'] ?></h6>
													<input hidden type="text" name="<?= $item['product_subcategory'] ?>" value="<?= $item['product_subcategory'] ?>">
													<s>Rp. <?= $item['product_price']; ?></s>
													<h5 class="price">
														<?php
														$harga = $item['product_price'];
														$harga_diskon = $item['product_price'] -  $arbaju[$j++] * $item['product_price'] / 100;
														?>
														Rp. <?= number_format($harga_diskon, 0, '.', '.') ?></h5>
													Available on Shopee
												</div>
											</div>
										</div>
									<?php
									}
									?>
								</div>
							</div>
						</section>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<script>
	$('input[type="radio"]').click(function() {
		var inputValue = $(this).attr("value");
		if (inputValue == "12") {
			actv();
			$("div.produk2").hide();
			$("div.produk3").hide();
			$("div.produk4").hide();
			$("div.produk5").hide();
			$("div.produk6").hide();
			$("div.produk7").hide();
			$("div.produk8").hide();
			$("div.produk9").hide();
			// $("p.13").hide();
			// $("p.14").hide();
			// $("p.15").hide();
			// $("p.16").hide();
			// $("p.17").hide();
			// $("p.18").hide();
			// $("p.19").hide();
			// $("p.20").hide();
			// $("p.12").show();
		}
		if (inputValue == "13") {
			actv();
			$("div.produk1").hide();
			$("div.produk3").hide();
			$("div.produk4").hide();
			$("div.produk5").hide();
			$("div.produk6").hide();
			$("div.produk7").hide();
			$("div.produk8").hide();
			$("div.produk9").hide();
			// $("#tes2").hide();
			// $("p.12").hide();
			// $("p.14").hide();
			// $("p.15").hide();
			// $("p.16").hide();
			// $("p.17").hide();
			// $("p.18").hide();
			// $("p.19").hide();
			// $("p.20").hide();
			// $("p.13").show();
		}
		if (inputValue == "14") {
			actv();
			$("div.produk2").hide();
			$("div.produk1").hide();
			$("div.produk4").hide();
			$("div.produk5").hide();
			$("div.produk6").hide();
			$("div.produk7").hide();
			$("div.produk8").hide();
			$("div.produk9").hide();
			// $("#tes2").hide();
			// $("p.12").hide();
			// $("p.13").hide();
			// $("p.15").hide();
			// $("p.16").hide();
			// $("p.17").hide();
			// $("p.18").hide();
			// $("p.19").hide();
			// $("p.20").hide();
			// $("p.14").show();
		}
		if (inputValue == "15") {
			actv();
			$("div.produk2").hide();
			$("div.produk3").hide();
			$("div.produk1").hide();
			$("div.produk5").hide();
			$("div.produk6").hide();
			$("div.produk7").hide();
			$("div.produk8").hide();
			$("div.produk9").hide();
			// $("#tes2").hide();
			// $("p.12").hide();
			// $("p.13").hide();
			// $("p.14").hide();
			// $("p.16").hide();
			// $("p.17").hide();
			// $("p.18").hide();
			// $("p.19").hide();
			// $("p.20").hide();
			// $("p.15").show();
		}
		if (inputValue == "16") {
			actv();
			$("div.produk2").hide();
			$("div.produk3").hide();
			$("div.produk4").hide();
			$("div.produk1").hide();
			$("div.produk6").hide();
			$("div.produk7").hide();
			$("div.produk8").hide();
			$("div.produk9").hide();
			// $("#tes2").hide();
			// $("p.12").hide();
			// $("p.13").hide();
			// $("p.15").hide();
			// $("p.14").hide();
			// $("p.17").hide();
			// $("p.18").hide();
			// $("p.19").hide();
			// $("p.20").hide();
			// $("p.16").show();
		}
		if (inputValue == "17") {
			actv();
			$("div.produk2").hide();
			$("div.produk3").hide();
			$("div.produk4").hide();
			$("div.produk5").hide();
			$("div.produk1").hide();
			$("div.produk7").hide();
			$("div.produk8").hide();
			$("div.produk9").hide();
			// $("#tes2").hide();
			// $("p.12").hide();
			// $("p.13").hide();
			// $("p.15").hide();
			// $("p.16").hide();
			// $("p.14").hide();
			// $("p.18").hide();
			// $("p.19").hide();
			// $("p.20").hide();
			// $("p.17").show();
		}
		if (inputValue == "18") {
			actv();
			$("div.produk2").hide();
			$("div.produk3").hide();
			$("div.produk4").hide();
			$("div.produk5").hide();
			$("div.produk6").hide();
			$("div.produk1").hide();
			$("div.produk8").hide();
			$("div.produk9").hide();
			// $("#tes2").hide();
			// $("p.12").hide();
			// $("p.13").hide();
			// $("p.15").hide();
			// $("p.16").hide();
			// $("p.17").hide();
			// $("p.14").hide();
			// $("p.19").hide();
			// $("p.20").hide();
			// $("p.18").show();
		}
		if (inputValue == "19") {
			actv();
			$("div.produk2").hide();
			$("div.produk3").hide();
			$("div.produk4").hide();
			$("div.produk5").hide();
			$("div.produk6").hide();
			$("div.produk7").hide();
			$("div.produk1").hide();
			$("div.produk9").hide();
			// $("#tes2").hide();
			// $("p.12").hide();
			// $("p.13").hide();
			// $("p.15").hide();
			// $("p.16").hide();
			// $("p.17").hide();
			// $("p.18").hide();
			// $("p.14").hide();
			// $("p.20").hide();
			// $("p.19").show();
		}
		if (inputValue == "20") {
			actv();
			$("div.produk2").hide();
			$("div.produk3").hide();
			$("div.produk4").hide();
			$("div.produk5").hide();
			$("div.produk6").hide();
			$("div.produk7").hide();
			$("div.produk8").hide();
			$("div.produk1").hide();
			// $("#tes2").hide();
			// $("p.12").hide();
			// $("p.13").hide();
			// $("p.15").hide();
			// $("p.16").hide();
			// $("p.17").hide();
			// $("p.18").hide();
			// $("p.19").hide();
			// $("p.14").hide();
			// $("p.20").show();
		}
	});

	function actv() {
		$("div.produk2").show();
		$("div.produk3").show();
		$("div.produk4").show();
		$("div.produk5").show();
		$("div.produk6").show();
		$("div.produk7").show();
		$("div.produk8").show();
		$("div.produk1").show();
		$("div.produk9").show();
	}
	// function myFunction1() {
	// 	// Get the checkbox
	// 	var checkBox1 = document.getElementById("c1");
	// 	// Get the output text
	// 	var text = document.getElementById("Kaos-Lengan-Pendek");
	// 	// If the checkbox is checked, display the output text
	// 	if (checkBox1.checked == true) {
	// 		$("#Kaos-Lengan-Pendek").hide();
	// 	} else {
	// 		$("#Kaos-Lengan-Pendek").show();
	// 	}
	// }

	// function myFunction2() {
	// 	// Get the checkbox
	// 	var checkBox2 = document.getElementById("c2");
	// 	// Get the output text
	// 	var text = document.getElementById("Kemeja-Lengan-Panjang");
	// 	// If the checkbox is checked, display the output text
	// 	if (checkBox2.checked == true) {
	// 		$("#Kemeja-Lengan-Panjang").hide();
	// 	} else {
	// 		$("#Kemeja-Lengan-Panjang").show();
	// 	}
	// }

	// function myFunction3() {
	// 	// Get the checkbox
	// 	var checkBox3 = document.getElementById("c3");
	// 	// Get the output text
	// 	var text = document.getElementById("Kemeja-Lengan-Pendek");
	// 	// If the checkbox is checked, display the output text
	// 	if (checkBox3.checked == true) {
	// 		$("#Kemeja-Lengan-Pendek").hide();
	// 	} else {
	// 		$("#Kemeja-Lengan-Pendek").show();
	// 	}
	// }

	// function myFunction4() {
	// 	// Get the checkbox
	// 	var checkBox4 = document.getElementById("c4");
	// 	// Get the output text
	// 	var text = document.getElementById("Singlet");
	// 	// If the checkbox is checked, display the output text
	// 	if (checkBox4.checked == true) {
	// 		$("#Singlet").hide();
	// 	} else {
	// 		$("#Singlet").show();
	// 	}
	// }
</script>
<?php
include_once 'footer.php';
?>