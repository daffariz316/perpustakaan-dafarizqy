<?php
if (isset($_GET['delete'])) {
    $id=$_GET['id'];
    $query_delete= mysqli_query($konek,"DELETE FROM petugas where id_petugas='$id'");

    if ($query_delete) {
        ?>
        <script>
        alert("data berhasil di delete");
        </script>
        <?php
        header('location:http://localhost/05_PASGANJIL2021_XIIRPL1_DAFFARIZQY/dashboard.php?page=petugas');
    }
}