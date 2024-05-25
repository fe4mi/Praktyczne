<?php
$conn = mysqli_connect('localhost','root','','ee09');
$rat1 = $_POST['r1'];
$rat2 = $_POST['r2'];
$rat3 = $_POST['r3'];
$kar = $_POST['numer'];
$sql = "INSERT INTO ratownicy(nrKaretki, ratownik1, ratownik2, ratownik3) VALUES ('$kar', '$rat1','$rat2','$rat3');";
$result = mysqli_query($conn, $sql);

if($result){
    echo"dodano";
}else{
    echo"niedodano";
}

mysqli_close($conn);


?>