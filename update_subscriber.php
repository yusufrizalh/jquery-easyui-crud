<?php
    // variable apa yang ingin di update
    $id = intval($_REQUEST['id']);
    $firstname = htmlspecialchars($_REQUEST['firstname']);
    $lastname = htmlspecialchars($_REQUEST['lastname']);
    $email = htmlspecialchars($_REQUEST['email']);
    $phone = htmlspecialchars($_REQUEST['phone']);

    include './connection/connection.php';

    $sql = "UPDATE subscriber SET firstname='$firstname', lastname='$lastname', 
        email='$email', phone='$phone' WHERE id='$id'";
    $result = mysqli_query($conn, $sql);
    if($result) {
        echo json_encode(array(
            'id' => $id, 
            'firstname' => $firstname, 
            'lastname' => $lastname, 
            'email' => $email, 
            'phone' => $phone
        ));
    } else {
        echo json_encode(array('errorMsg' => 'Terjadi kesalahan!'));
    }
?>