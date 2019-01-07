<?php 
function gettodos(){
    include 'conn.php';
    $data = array();
    $sql = "SELECT * FROM todolist WHERE done=0";
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()){
        array_push($data,$row);
    }
    return $data;
}
function getdone(){
    include 'conn.php';
    $data = array();
    $sql = "SELECT * FROM todolist WHERE done=1";
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()){
        array_push($data,$row);
    }
    return $data;
}
?>
