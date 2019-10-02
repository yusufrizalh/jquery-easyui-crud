<?php
    $page = isset($_POST['page']) ? intval($_POST['page']) : 1;
    $rows = isset($_POST['rows']) ? intval($_POST['rows']) : 10;
    $offset = ($page-1)*$rows;
    $result = array();

    include './connection/connection.php';
    $res = mysqli_query($conn, "SELECT COUNT(*) FROM subscriber");
    $row = mysqli_fetch_row($res);
    $result["total"] = $row[0];
    $res = mysqli_query($conn, "SELECT * FROM subscriber LIMIT $offset, $rows");

    $items = array();
    while($row = mysqli_fetch_object($res)) {
        array_push($items, $row);
    }
    $result["rows"] = $items;
    echo json_encode($result);
?>