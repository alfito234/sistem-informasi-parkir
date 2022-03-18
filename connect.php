<?php
$connect = mysqli_connect("localhost", "root", "", "cpr-parkir");

// Check connection
if (mysqli_connect_errno()) {
    echo "Koneksi database gagal : " . mysqli_connect_error();
}
