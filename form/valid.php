<?php
    date_default_timezone_set('Asia/Jakarta');
    $name = $_POST['name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $school = $_POST['sekolah'];
    $kons = $_POST['kons'];
    $time = date("Y:m:d h:i:sa");
    $fileName = $_FILES['fupload']['name'];
    $tmpName = $_FILES['fupload']['tmp_name'];
    $filesize = $_FILES['fupload']['size'];
    $dirLocation = "images/";
    $upload = copy($tmpName, $dirLocation.$fileName);
    if(file_exists($upload)){
        echo "file sudah ada";
    }
    
    if($upload){
        echo "Upload Sukses";
    } else{
        echo "Upload Gagal";
    }
    echo "Now is "."<br>".$time;

    echo "<pre>";
    print_r($_FILES);
    echo "</pre>"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h4 class="text-center">Data Anda</h4>
    <table class="table table-striped">
        <tr>
            <th scope="row">Nama</th>
            <td><?php echo $name;?></td>
        </tr>
        <tr>
            <th scope="row">Email</th>
            <td><?php echo $email;?></td>
        </tr>
        <tr>
            <th scope="row">Gender</th>
            <td><?php echo $gender;?></td>
        </tr>
        <tr>
            <th scope="row">Prodi</th>
            <td><?php echo $school;?></td>
        </tr>
        <tr>
            <th scope="row">Konstentrasi</th>
            <td><?php foreach($kons as $d){?>
                <p><?php echo $d;}?></p>
            </td>
        </tr>
    </table>
</body>
</html>