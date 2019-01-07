<?php 

    include 'conn.php';
    $data = $_POST;
    $id = $data['id'];
    $content = $data['content'];
    $sql = "UPDATE todolist SET content='$content' WHERE id='$id'";
    $result = $conn->query($sql);
    if($result){
        echo 'success';
    }
    
?>
