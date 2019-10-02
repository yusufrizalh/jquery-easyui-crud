<?php
    // variable apa saja yg akan disimpan 
    $firstname = htmlspecialchars($_REQUEST['firstname']);
    $lastname = htmlspecialchars($_REQUEST['lastname']);
    $email = htmlspecialchars($_REQUEST['email']);
    $phone = htmlspecialchars($_REQUEST['phone']);

    include './connection/connection.php';
    $sql = "INSERT INTO subscriber(firstname, lastname, email, phone) 
        VALUES('$firstname', '$lastname', '$email', '$phone')";
        $result = mysqli_query($conn, $sql);
        if($result) {
            echo json_encode(array(
                'id' => mysqli_insert_id($conn),
                'firstname' => $firstname, 
                'lastname' => $lastname, 
                'email' => $email, 
                'phone' => $phone
            ));
        } else {
            echo json_encode(array('errorMsg' => 'Terjadi kesalahan!'));
        }
?>