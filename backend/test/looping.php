<?php
for ($i = 0; $i <= 10; $i++) {
    echo "looping ke $i<br>";
}

$animals = ["cat", "dog", "fish", "Turtle"];
foreach ($animals as $animal) {
    echo $animal . '<br>';
}

# membuat array asosiatif
$data_user = [
    'Nama' => "Domami Pandu Saputra",
    'Jurusan' => "Informatika",
    'Ipk' => 3.96,
];

foreach ($data_user as $key => $value) {
    echo $key . ': ' . $value . '<br>';
}
?>