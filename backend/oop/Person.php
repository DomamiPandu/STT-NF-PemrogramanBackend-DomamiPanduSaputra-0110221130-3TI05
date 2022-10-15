<?php
class Person
{
    # membuat property
    public $nama;
    public $alamat;
    public $jurusan;

    # membuat constructor
    public function __construct($nama, $alamat, $jurusan)
    {
        $this->nama = $nama;
        $this->alamat = $alamat;
        $this->jurusan = $jurusan;
    }

    # membuat method (function)
    public function setNama($data)
    {
        $this->nama = $data;
    }

    public function getNama()
    {
        $this->nama;
        return $this->alamat;
    }

    # buat method set dan get alamat
    # buat method set dan get jurusan
}

$add = new Person('Domami Pandu Saputra', 'Lampung', 'Informatika');
$al = new Person('Adnan', 'Depok', 'Bisnis Digital');

echo $add->getNama();
echo '<br>';
echo $al->getNama();

// $mahasiswa = [
//     [
//         'nama' => 'Domami Pandu Saputra',
//         'jurusan' => 'Informatika',
//     ],
//     [
//         'nama' => 'Adnan',
//         'jurusan' => 'Sistem Informasi',
//     ],
// ];
// foreach ($mahasiswa as $mhs) {
//     $person = new Person();
//     $person->setNama($mhs['nama']);
//     echo $person->getNama();
//     echo '<br>';
// }

// $add = new Person();
// $add->setNama('Domami Pandu Saputra');
// echo $add->getNama();
// echo '<br>';

// $al = new Person();
// $al->setNama('Adnan');
// echo $al->getNama();
?>