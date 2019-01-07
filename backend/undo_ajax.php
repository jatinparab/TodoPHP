<?php 

    include 'conn.php';
    $data = $_POST;
    $id = $data['id'];
    $sql = "UPDATE todolist SET done='0' WHERE id='$id'";
    $result = $conn->query($sql);
    if($result){
        echo 'success';
    }
    
?>
