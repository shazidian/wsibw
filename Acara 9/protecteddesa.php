
<?php
class PerangkatDesa {
    // Properti protected, hanya bisa diakses oleh kelas ini dan turunannya
    protected $nama;
    protected $jabatan;

    // Constructor untuk inisialisasi nilai properti
    public function __construct($nama, $jabatan) {
        $this->setNama($nama);
        $this->setJabatan($jabatan);
    }

    // Setter untuk properti $nama
    public function setNama($nama) {
        $this->nama = $nama;
    }

    // Getter untuk properti $nama
    public function getNama() {
        return $this->nama;
    }

    // Setter untuk properti $jabatan
    public function setJabatan($jabatan) {
        $this->jabatan = $jabatan;
    }

    // Getter untuk properti $jabatan
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

// Mengakses dan menampilkan informasi melalui metode getter
echo $perangkat1->infoPerangkatDesa();
?>