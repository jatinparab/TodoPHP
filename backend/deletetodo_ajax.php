<?php 

    include 'conn.php';
    $data = $_POST;
    $id = $data['id'];
    $sql = "DELETE FROM todolist WHERE id='$id'";
    $result = $conn->query($sql);
    if($result){
        echo 'success';
    }
    
?>
