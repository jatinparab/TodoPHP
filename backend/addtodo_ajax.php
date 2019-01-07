<?php 

    include 'conn.php';
    $data = $_POST;
    $content = $data['content'];
    $content = addslashes($content);
    $sql = "INSERT INTO todolist(content) VALUES ('$content')";
    $result = $conn->query($sql);
    if($result){
        echo 'success';
    }
    
?>
