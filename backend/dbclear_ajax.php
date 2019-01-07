<?php 
    include 'conn.php';
    $sql = "DELETE FROM todolist";
    $result = $conn->query($sql);
    if($result){
        echo 'success';
    }
    
?>
