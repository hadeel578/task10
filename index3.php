<?php
include 'config.php';
$query='SELECT*FROM users';
$result=$conn->query($query);
$rows=[];
while($row=$result->fetch_assoc()){
    array_push($rows,$row);
}
header('Content-Type');
echo json_encode($rows);



?>