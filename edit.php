<?php
include 'koneksi.php';

 $id= $_GET['id'];


$data = mysqli_query($koneksi,"SELECT * FROM `data` WHERE `id` = $id");
$data1= mysqli_fetch_array($data);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="update.php" method="POST">
        <input type="text" hidden="" value="<?php echo $data1['id']?>" name="id">
        <input type="text" name="nama" value="<?php echo $data1['nama'] ?>" ><br>
        <input type="text" name="nim" value="<?php echo $data1['nim']  ?>"><br>
        <input type="text" name="kelas" value="<?php echo $data1['kelas']  ?>"><br>
        <input type="submit" value="edit">


    </form>    




</body>
</html>






