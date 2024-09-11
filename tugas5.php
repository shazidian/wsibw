<?php 
echo "Tugas nomor 1 <br>";
function bilanganTerbesar($bilangan1, $bilangan2){
    if($bilangan1 > $bilangan2){
        return $bilangan1;
    } else {
        return $bilangan2;
    }
}
//contoh penggunaan fungsi 
$bilangan1 = 90;
$bilangan2 = 150;
echo "Bilangan terbesar dari $bilangan1 dan $bilangan2 adalah: " . bilanganTerbesar($bilangan1, $bilangan2) . "<br> <br>";

echo "Tugas nomor 2 <br> ";

$dateInfo = getdate();
echo $dateInfo['mday'] . "-" . $dateInfo['mon'] . "-" . $dateInfo['year'] . "<br> <br>";

echo "Tugas nomor 3 <br>";
echo date('d-F-Y');





?>