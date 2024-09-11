<?php
//fungsi menghitung kuadrat dari sebuah bilangan
function hitungKuadrat($angka){
    return $angka * $angka;
}

//perulangan kuaddrat dari angka 1-10
for($i = 1; $i <= 10; $i++){
    $kuadrat = hitungKuadrat($i);
    echo "Kuadrat dari $i adalah: $kuadrat <br>";
}
?>