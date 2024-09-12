<?php
class PerangkatDesa {
    // Properti private, hanya bisa diakses dari dalam class
    private $nama;
    private $jabatan;

    // Constructor untuk inisialisasi nilai properti
    public function __construct($nama, $jabatan) {
        $this->setNama($nama);
        $this->setJabatan($jabatan);
    }

    // Setter untuk properti nama
    public function setNama($nama) {
        $this->nama = $nama;
    }

    // Getter untuk properti nama
    public function getNama() {
        return $this->nama;
    }

    // Setter untuk properti jabatan
    public function setJabatan($jabatan) {
        $this->jabatan = $jabatan;
    }

    // Getter untuk properti jabatan
    public function getJabatan() {
        return $this->jabatan;
    }

    // Method public untuk menampilkan informasi perangkat desa
    public function infoPerangkatDesa() {
        return "Nama: " . $this->getNama() . ", Jabatan: " . $this->getJabatan();
    }
}

// Membuat objek PerangkatDesa
$perangkat1 = new PerangkatDesa("Pak Doni", "Kepala Desa");

// Mengakses data melalui getter dan menampilkan informasi
echo $perangkat1->infoPerangkatDesa();
?>
