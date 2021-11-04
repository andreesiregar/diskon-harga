<?php
include_once 'header.php';
?>
<section class="hero">
    <div class="hero-slider owl-carousel">
        <div class="hero-items set-bg" data-setbg="assets/img/hero/hero-1.jpg" style="background-image: url('assets/img/hero/hero-1.jpg');">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-7 col-md-8">
                        <div class="hero-text">
                            <h1>Fall - Winter Collections 2030</h1>
                            <p>A specialist label creating luxury essentials. Ethically crafted with an unwavering</p>
                            <button class="btn">Shop Now <i class="ion ios-arrow-forward"></i></button>
                        </div>
                        <div class="hero-social">
                            <a href=""><i class="ion ion-logo-facebook"></i></a>
                            <a href=""><i class="ion ion-logo-whatsapp"></i></a>
                            <a href=""><i class="ion ion-logo-instagram"></i></a>
                            <a href=""><i class="ion ion-logo-twitter"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-items set-bg" data-setbg="assets/img/hero/hero-2.jpg" style="background-image	: url('assets/img/hero/hero-2.jpg');">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-7 col-md-8">
                        <div class="hero-text">
                            <h6>Summer Collection</h6>
                            <h1>Fall - Winter Collections 2030</h1>
                            <p>A specialist label creating luxury essentials. Ethically crafted with an unwavering</p>
                            <button class="btn">Shop Now <i class="ion ios-arrow-forward"></i></button>
                        </div>
                        <div class="hero-social">
                            <a href=""><i class="ion ion-logo-facebook"></i></a>
                            <a href=""><i class="ion ion-logo-whatsapp"></i></a>
                            <a href=""><i class="ion ion-logo-instagram"></i></a>
                            <a href=""><i class="ion ion-logo-twitter"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<?php

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
feedForwardBaju1(90,    78, 79,    80, 80, $bx1h1n, $bx2h1n, $bx3h1n, $bx4h1n, $bx1h2n, $bx2h2n, $bx3h2n, $bx4h2n, $bbiash1n, $bbiash2n, $bh1n, $bh2n, $bbiason);
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
feedForwardBaju2(78,   90,   87,  87, 80, $bx1h1n, $bx2h1n, $bx3h1n, $bx4h1n, $bx1h2n, $bx2h2n, $bx3h2n, $bx4h2n, $bbiash1n, $bbiash2n, $bh1n, $bh2n, $bbiason);
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
feedForwardCelana1(90, 87, 78,    81,    80,    $bx1h1n, $bx2h1n, $bx3h1n, $bx4h1n, $bx1h2n, $bx2h2n, $bx3h2n, $bx4h2n, $bbiash1n, $bbiash2n, $bh1n, $bh2n, $bbiason);
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
feedForwardCelana2(78,   87, 80,  80, 79, $bx1h1n, $bx2h1n, $bx3h1n, $bx4h1n, $bx1h2n, $bx2h2n, $bx3h2n, $bx4h2n, $bbiash1n, $bbiash2n, $bh1n, $bh2n, $bbiason);
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
feedForwardDompet1(78, 90, 85, 86,   85,    $bx1h1n, $bx2h1n, $bx3h1n, $bx4h1n, $bx1h2n, $bx2h2n, $bx3h2n, $bx4h2n, $bbiash1n, $bbiash2n, $bh1n, $bh2n, $bbiason);
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
feedForwardDompet2(80, 90, 78, 80,    87, $bx1h1n, $bx2h1n, $bx3h1n, $bx4h1n, $bx1h2n, $bx2h2n, $bx3h2n, $bx4h2n, $bbiash1n, $bbiash2n, $bh1n, $bh2n, $bbiason);
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
feedForwardSepatu1(90, 90,    78, 80,    79,    $bx1h1n, $bx2h1n, $bx3h1n, $bx4h1n, $bx1h2n, $bx2h2n, $bx3h2n, $bx4h2n, $bbiash1n, $bbiash2n, $bh1n, $bh2n, $bbiason);
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
feedForwardSepatu2(82, 78,    78,   80,    88,    $bx1h1n, $bx2h1n, $bx3h1n, $bx4h1n, $bx1h2n, $bx2h2n, $bx3h2n, $bx4h2n, $bbiash1n, $bbiash2n, $bh1n, $bh2n, $bbiason);
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
feedForwardJaket1(87,   78, 88, 83,    80,    $bx1h1n, $bx2h1n, $bx3h1n, $bx4h1n, $bx1h2n, $bx2h2n, $bx3h2n, $bx4h2n, $bbiash1n, $bbiash2n, $bh1n, $bh2n, $bbiason);
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
feedForwardJaket2(80, 78, 90,    82,    93,    $bx1h1n, $bx2h1n, $bx3h1n, $bx4h1n, $bx1h2n, $bx2h2n, $bx3h2n, $bx4h2n, $bbiash1n, $bbiash2n, $bh1n, $bh2n, $bbiason);
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
feedForwardTas1(80,    78, 90,    79,    90,    $bx1h1n, $bx2h1n, $bx3h1n, $bx4h1n, $bx1h2n, $bx2h2n, $bx3h2n, $bx4h2n, $bbiash1n, $bbiash2n, $bh1n, $bh2n, $bbiason);
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
feedForwardTas2(98,    78, 90, 99,    84, $bx1h1n, $bx2h1n, $bx3h1n, $bx4h1n, $bx1h2n, $bx2h2n, $bx3h2n, $bx4h2n, $bbiash1n, $bbiash2n, $bh1n, $bh2n, $bbiason);
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
feedForwardSandal1(81, 78, 76,    89,    89,    $bx1h1n, $bx2h1n, $bx3h1n, $bx4h1n, $bx1h2n, $bx2h2n, $bx3h2n, $bx4h2n, $bbiash1n, $bbiash2n, $bh1n, $bh2n, $bbiason);
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
feedForwardSandal2(78,    87,   98,    79,    80, $bx1h1n, $bx2h1n, $bx3h1n, $bx4h1n, $bx1h2n, $bx2h2n, $bx3h2n, $bx4h2n, $bbiash1n, $bbiash2n, $bh1n, $bh2n, $bbiason);
$dsandal2 = round($dnf);
$arsandal = [$dsandal1, $dsandal2];
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
            $ret = "Baju";
            $sql = "SELECT * FROM product WHERE product_category = '$ret' ORDER BY RAND() LIMIT 2";
            $exe = mysqli_query($koneksi, $sql);
            $i = 0;
            $j = 0;
            while ($item = $exe->fetch_assoc()) {
            ?>
                <div class="col-lg-3">
                    <div class="product-item">
                        <div class="product-item-img">
                            <img src="assets/img/product/<?= $item['product_image'] ?>">
                        </div>
                        <div class="product-item-text">
                            <div class="discount"><?= $arbaju[$i++]; ?> %</div>
                            <h6 class="name"><?= $item['product_name'] ?></h6>
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
                <div class="col-lg-3">
                    <div class="product-item">
                        <div class="product-item-img">
                            <img src="assets/img/product/<?= $item['product_image'] ?>">
                        </div>
                        <div class="product-item-text">
                            <div class="discount"><?= $arcelana[$i++]; ?> %</div>
                            <h6 class="name"><?= $item['product_name'] ?></h6>
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
                <div class="col-lg-3">
                    <div class="product-item">
                        <div class="product-item-img">
                            <img src="assets/img/product/<?= $item['product_image'] ?>">
                        </div>
                        <div class="product-item-text">
                            <div class="discount"><?= $ardompet[$i++]; ?> %</div>
                            <h6 class="name"><?= $item['product_name'] ?></h6>
                            <s>Rp. <?= $item['product_price']; ?></s>
                            <h5 class="price">
                                <?php
                                // $diskon =  $ardompet[$j++];
                                $harga = $item['product_price'];
                                $harga_diskon = $item['product_price'] -  $ardompet[$j++] * $item['product_price'] / 100;
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
                <div class="col-lg-3">
                    <div class="product-item">
                        <div class="product-item-img">
                            <img src="assets/img/product/<?= $item['product_image'] ?>">
                        </div>
                        <div class="product-item-text">
                            <div class="discount"><?= $arsepatu[$i++]; ?> %</div>
                            <h6 class="name"><?= $item['product_name'] ?></h6>
                            <s>Rp. <?= $item['product_price']; ?></s>
                            <h5 class="price">
                                <?php
                                // $diskon =  $arsepatu[$j++];
                                $harga = $item['product_price'];
                                $harga_diskon = $item['product_price'] -  $arsepatu[$j++] * $item['product_price'] / 100;
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
                <div class="col-lg-3">
                    <div class="product-item">
                        <div class="product-item-img">
                            <img src="assets/img/product/<?= $item['product_image'] ?>">
                        </div>
                        <div class="product-item-text">
                            <div class="discount"><?= $arjaket[$i++]; ?> %</div>
                            <h6 class="name"><?= $item['product_name'] ?></h6>
                            <s>Rp. <?= $item['product_price']; ?></s>
                            <h5 class="price">
                                <?php
                                // $diskon =  $arjaket[$j++];
                                $harga = $item['product_price'];
                                $harga_diskon = $item['product_price'] -  $arjaket[$j++] * $item['product_price'] / 100;
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
                <div class="col-lg-3">
                    <div class="product-item">
                        <div class="product-item-img">
                            <img src="assets/img/product/<?= $item['product_image'] ?>">
                        </div>
                        <div class="product-item-text">
                            <div class="discount"><?= $artas[$i++]; ?> %</div>
                            <h6 class="name"><?= $item['product_name'] ?></h6>
                            <s>Rp. <?= $item['product_price']; ?></s>
                            <h5 class="price">
                                <?php
                                // $diskon =  $artas[$j++];
                                $harga = $item['product_price'];
                                $harga_diskon = $item['product_price'] -  $artas[$j++] * $item['product_price'] / 100;
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
                <div class="col-lg-3">
                    <div class="product-item">
                        <div class="product-item-img">
                            <img src="assets/img/product/<?= $item['product_image'] ?>">
                        </div>
                        <div class="product-item-text">
                            <div class="discount"><?= $arsandal[$i++]; ?> %</div>
                            <h6 class="name"><?= $item['product_name'] ?></h6>
                            <s>Rp. <?= $item['product_price']; ?></s>
                            <h5 class="price">
                                <?php
                                // $diskon =  $arsandal[$j++];
                                $harga = $item['product_price'];
                                $harga_diskon = $item['product_price'] -  $arsandal[$j++] * $item['product_price'] / 100;
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
<?php
include_once 'footer.php';
?>