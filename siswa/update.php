<?php
if (isset($_POST['update'])) {
    include_once('config.php');
    $id = $_POST['id'];
    $nis = $_POST['nis'];
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $pob = $_POST['pob'];
    $dob = $_POST['dob'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $grade_id = $_POST['grade_id'];

    $sql = "UPDATE students SET nis='$nis', name='$name', gender='$gender', pob='$pob', dob='$dob', phone='$phone', email='$email', grade_id='$grade_id' WHERE id='$id'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("Location: ?m=siswa&sm=view");
    } else {
        echo "<script>alert('Data gagal disimpan'); window.location='?m=siswa&s=edit';</script>";
    }
} else {
    echo "Jangan langsung buka file ini. Tambah Data <a href='?m=siswa&s=edit'>Klik disini</a>";
}