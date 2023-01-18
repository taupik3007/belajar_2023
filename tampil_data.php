<?php

include 'koneksi.php';

$data = mysqli_query($koneksi,"SELECT * FROM `data`");
foreach($data as $data){
    echo $data['nama']."&nbsp";
    echo $data['nim']."&nbsp";
    echo $data['kelas']."&nbsp";
    ?>
    <a href="edit.php?id=<?php echo $data['id'];  ?>">edit</a> &nbsp
    <a href="delete.php?id=<?php echo $data['id'];  ?>">delete</a> <br>
    <?php

}

