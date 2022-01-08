<?php
$eko = mysqli_connect("localhost", "root", "", "praktikum9") ;
if( isset($_POST["submit"]) ) {
    echo"
    <script>
    alert('data berhasil ditambahkan');
    document.location.href = 'index.php';
    </script>
    ";
$name = $_POST["name"];
$email = $_POST["email"];
$adress = $_POST["adress"];
$gender = $_POST["gender"];
$position = $_POST["position"];
$status = $_POST["status"];

$query = "INSERT INTO karyawan
VALUES
('', '$name', '$email', '$adress', '$gender', '$position', '$status')
";
mysqli_query($eko, $query);
}
 ?>
<!DOCTYPE html>
<html>
  <head>
    <title>tambah data karyawan</title>
  </head>
  <body>
   <h1>tambah data karyawan</h1>
   <form action="" method="post">
   <ul>
   <li>
   <label for="name">Nama :</label>
   <br><input type="text" name="name" id="name">
   </li>
    <li>
   <label for="email">Email :</label>
   <br><input type="text" name="email" id="email">
   </li>
    <li>
   <label for="adress">Adress :</label>
   <br><input type="text" name="adress" id="adress">
   </li>
    <li>
   <label for="gender">Gender :</label>
   <br><input type="text" name="gender" id="gender">
   </li>
    <li>
   <label for="position">Position :</label>
   <br><input type="text" name="position" id="position">
   </li>
       <li>
   <label for="status">Status :</label>
   <br><input type="text" name="status" id="status">
   </li>
   <li>
   <br><button type="submit" name="submit">tambahkan</button>
   </li>
    </ul>
   </form>
  </body>
</html>