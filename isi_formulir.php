<?php
$conn=mysqli_connect('localhost','root','','formulis_cpns');
/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
$NIK = $_POST['NIK'];
$Nama = $_POST['Nama'];
$Email = $_POST['Email'];
$Tempat_Lahir = $_POST['Tempat_Lahir'];
$Tanggal_Lahir = $_POST['Tanggal_Lahir'];
$Instansi = $_POST['Instansi'];
$Password = $_POST['Password'];

echo "$NIK<br>$Nama<br>$Email<br>$Password<br>
$Tempat_Lahir<br>$Tanggal_Lahir<br>$Instansi<br>$Password";

$insert=mysqli_query($conn, "INSERT INTO `id_user` (`NIK`, `Nama`, `Email`,
`Tempat_Lahir`, `Tanggal_Lahir`, `Instansi`,`Password`) VALUES ('$NIK','$Nama','$Email',
'$Tempat_Lahir','$Tanggal_Lahir','$Instansi','$Password'); ")
?>