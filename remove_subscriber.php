<?php
    $id = intval($_REQUEST['id']);

    include './connection/connection.php';

    $sql = "DELETE FROM subscriber WHERE id='$id'";
    $result = mysqli_query($conn, $sql);
    if($result) {
        echo json_encode(array('success' => true));
    } else {
        echo json_encode(array('errorMsg' => 'Terjadi kesalahan!'));
    }
?>