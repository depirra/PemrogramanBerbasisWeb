<form method = "post" action= "">
    Nama: <input type="text" name="nama"><br>
    Nilai: <input type="number" name="nilai"><br>
    <input type = "submit" value="Proses">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $nilai = $_POST['nilai'];
    $predikat = "";
    $status = "";

if ($nilai >= 85){
    $predikat = "A";
}elseif ($nilai >= 75){
    $predikat = "B";
}elseif ($nilai >= 65){
    $predikat = "C";
}elseif ($nilai >= 50){
    $predikat = "D";
}elseif ($nilai >= 0){
    $predikat = "E";
}else{
    $predikat = "Tidak Valid";
}

if ($predikat == "A" || $predikat == "B" ) {
    $status = "Lulus";
} elseif ($predikat == "C"|| $predikat == "D" || $predikat == "E") {
    $status = "Tidak Lulus";
} else {
    $status = "Tidak valid";
}

echo "HASIL"."<br>";
    echo "Nama : " . htmlspecialchars($nama) . "<br>";
    echo "Nilai : " . $nilai . "<br>";
    echo "Predikat : " . $predikat . "<br>";
    echo "Status : " . $status . "<br>";
}
?>