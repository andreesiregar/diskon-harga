<?php
// TRAINING DATA
function feedForward($x1, $x2, $x3, $x4, $t, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bh1, $bh2, $bbiaso)
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
    if ($outSig > $targetNor) {
        backpropagation($outSig, $targetNor, $h1Sig, $h2Sig, $bh1, $bh2, $x1Nor, $x2Nor, $x3Nor, $x4Nor, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bbiaso, $x1, $x2, $x3, $x4, $t);
    } else {
        echo "Target =" . $targetNor . "<br>";
        echo "Output =" . $outSig . "<br>";
        $err = ($targetNor - $outSig);
        $error = pow($err, 2);
        echo "Error = " . $error . "<br><br>";
    }
}

feedForward(30, 46, 53, 54, 52, 0.103, 0.6, 0.33, 0.45, 0.3006, 0.3060, 0.876, 0.1006, 0.106, 0.55, 0.1579, 0.6172, 0.396);

function backpropagation($outSig, $targetNor, $h1Sig, $h2Sig, $bh1, $bh2, $x1Nor, $x2Nor, $x3Nor, $x4Nor, $bx1h1, $bx2h1, $bx3h1, $bx4h1, $bx1h2, $bx2h2, $bx3h2, $bx4h2, $bbiash1, $bbiash2, $bbiaso, $x1, $x2, $x3, $x4, $t)
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

    // echo "<br>" . $deltawjk0;
    // echo "<br>" . $deltawjk1;
    // echo "<br>" . $deltawjk2;
    // echo "<br>" . $din1;
    // echo "<br>" . $din2;
    // echo "<br>" . $d1;
    // echo "<br>" . $d2;

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

    feedForward($x1, $x2, $x3, $x4, $t, $x1h1nn, $x2h1nn, $x3h1nn, $x4h1nn, $x1h2nn, $x2h2nn, $x3h2nn, $x4h2nn, $bibikh1, $bibikh2, $bbh1ko, $bbh2ko, $bibhki);
}
