<!DOCTYPE html>
<html lange="en">
    <head>
        <meta charset="UTF-8">
        <title>Mencari Volume Kubus :D </title>
    </head>
<body>
    <h1>Mencari Volume Kubus :D </h1>

<?php
 function hitungVolumeKubus($Sisi1, $Sisi2, $Sisi3 ) {
    return ($Sisi1 * $Sisi2 * $Sisi3);
 }

$Sisi1 = 100;
$Sisi2 = 20;
$Sisi3 = 40;

$Volume = hitungVolumeKubus($Sisi1, $Sisi2, $Sisi3);

echo "Volume kubus dengan sisi pertama $Sisi1 , sisi kedua $Sisi2 , dan $Sisi3 adalah $Volume";
?>
</body>
</html>