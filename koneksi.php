<?php
function db_connect () {
    $con = mysqli_connect('localhost', 'root', '', 'dbsmart');
    if (!$con){
        die("Tidak dapat membuat koneksi dengan database!");
    }
    return $con;
}
function db_disconnect($con) {
    mysqli_close($con);
}
?>


