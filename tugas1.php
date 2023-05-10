
<!DOCTYPE html>
<html>
<head>
    <title>Sekolah Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .card {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
        }
        h1, h2 {
            color: #333;
            font-size: 24px;
            margin-bottom: 20px;
            text-align: center;
        }
        p {
            font-size: 18px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Sekolah Form</h1>
    <div class="card">
    <?php
class Sekolah {
    public $nama;
    protected $alamat;
    protected $jumlah_siswa;
    protected $jumlah_guru;
    protected $jumlah_kelas;

    public function setNama($nama) {
        $this->nama = $nama;
    }
    public function setAlamat($alamat) {
        $this->alamat = $alamat;
    }
    public function setSiswa($jumlah_siswa) {
        $this->jumlah_siswa = $jumlah_siswa;
    }
    public function setGuru($jumlah_guru) {
        $this->jumlah_guru = $jumlah_guru;
    }
    public function setKelas($jumlah_kelas) {
        $this->jumlah_kelas = $jumlah_kelas;
    }
    public function getNama() {
        return $this->nama;
    }
    public function getAlamat() {
        return $this->alamat;
    }
    public function getSiswa() {
        return $this->jumlah_siswa;
    }
    public function getGuru() {
        return $this->jumlah_guru;
    }
    public function getKelas() {
        return $this->jumlah_kelas;
    }
    public function getInfo() {
        echo "Nama Sekolah: " . $this->getNama() . "<br>";
        echo "Alamat Sekolah: " . $this->getAlamat() . "<br>";
        echo "Jumlah Siswa: " . $this->getSiswa() . "<br>";
        echo "Jumlah Guru: " . $this->getGuru() . "<br>";
        echo "Jumlah Kelas: " . $this->getKelas() . "<br>";
    }
}

class Wikrama extends Sekolah {
    public function __construct() {
        $this->setNama("Wikrama");
        $this->setAlamat("Jl.Wangun");
        $this->setSiswa(1800);
        $this->setGuru(110);
        $this->setKelas(60);
    }
}

$wikrama = new Wikrama();

echo "<h2>Sekolah Information:</h2>";
$wikrama->getInfo();
?>
</div>
</div>

