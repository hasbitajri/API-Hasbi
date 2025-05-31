<?php 

// $mahasiswa = [
//     "nama" => "Tajri Hasbi Ilham",
//     "NIM"  => "2217020177",
//     "email" => "hasbitajri@gmail.com"
// ];

$dbh = new PDO('mysql:host=localhost;dbname=database_perusahaan', 'root', '');
$db = $dbh->prepare('SELECT * FROM masa_kerja');
$db->execute();
$users = $db->fetchAll(PDO::FETCH_ASSOC);

$data = json_encode($users);
echo $data;

?>