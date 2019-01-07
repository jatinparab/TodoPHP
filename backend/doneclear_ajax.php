<?php 

    include 'conn.php';
   
    $sql = "DELETE FROM todolist WHERE done='1'";
    $result = $conn->query($sql);
    if($result){
        echo 'success';
    }
    
?>
