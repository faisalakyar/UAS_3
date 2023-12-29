<?php
class Pengguna
{
    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function createPengaduan(PengaduanInterface $pengaduanObj, $data)
    {
        $pengaduanObj->insertData($data);
        echo "<script>alert('Berhasil Membuat Pengaduan')</script>";
    }

    public function createKejadian(PengaduanInterface $kejadianObj, $data)
    {
        $kejadianObj->insertData($data);
        echo "<script>alert('Berhasil Membuat Kejadian')</script>";
    }

    public function createLaporan(PengaduanInterface $laporanObj, $data)
    {
        $laporanObj->insertData($data);
        echo "<script>alert('Berhasil Membuat Laporan')</script>";
    }
}
////
// Membuat objek untuk Pengguna
$pengguna = new Pengguna($conn);

// Membuat objek untuk Pengadu
$pengadu = new Pengadu($conn);
$pengguna->createPengaduan($pengadu, $pengaduData);

// Membuat objek untuk Kejadian
$kejadian = new Kejadian($conn);
$pengguna->createKejadian($kejadian, $kejadianData);

// Membuat objek untuk Laporan
$laporan = new Laporan($conn);
$pengguna->createLaporan($laporan, $laporanData);


?>