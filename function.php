$eko = mysqli_connect ("localhost", "root", "", "praktikum9");

function query ($query){
    global $eko;
    $result = mysqli_query($eko, $query);
    $rows = [];
    while ( $row = mysqli_fetch_assoc($result) ){
        $rows[] = $row;
    }
    return $rows;
}
    function tambah($data){
        global $eko;
$name = $_data["name"];
$email = $_data["email"];
$adress = $_data["adress"];
$gender = $_data["gender"];
$position = $_data["position"];
$status = $_data["status"];

$query = "INSERT INTO karyawan
VALUES
('', '$name', '$email', '$adress', '$gender', '$position', '$status')
";
mysqli_query($eko, $query);
return mysqli_affected_rows($eko);
    }

    function hapus ($id){
        global $eko;
        mysqli_query($eko, "DELETE FROM karyawan WHERE id = $id");
    }
