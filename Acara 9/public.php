<?php
class PerangkatDesa {
    // Properti public, bisa diakses langsung dari luar class
    public $nama;
    public $jabatan;

    // Constructor untuk inisialisasi nilai properti
    public function __construct($nama, $jabatan) {
        $this->nama = $nama;
        $this->jabatan = $jabatan;
    }

    // Method public untuk menampilkan informasi perangkat desa
    public function infoPerangkatDesa() {
        return "Nama: $this->nama, Jabatan: $this->jabatan";
    }
}

// Membuat objek PerangkatDesa
$perangkat1 = new PerangkatDesa("Pak Doni", "Kepala Desa");

// Mengakses data secara langsung dan menampilkan informasi
echo $perangkat1->infoPerangkatDesa();
?>
