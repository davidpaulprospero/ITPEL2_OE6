<?php
    require_once('connect.php');

    $data = array();
    $id = $_GET['id'];

    $q = mysqli_query($con, "SELECT * FROM students WHERE id = '$id' LIMIT 1");

    while($row = mysqli_fetch_object($q)){
        $data[] = $row;
    }

    echo json_encode($data);
    echo mysqli_error($con);
?>