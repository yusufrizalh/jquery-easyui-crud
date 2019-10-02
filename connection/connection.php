<?php
    // membuat koneksi dari EasyUI ke database
    $conn = mysqli_connect('localhost', 'root', '');
    if(!$conn) {
        die('Koneksi Error: ' . mysqli_error($conn));
    }
    mysqli_select_db($conn, 'ajaxcrud_demos');
?>