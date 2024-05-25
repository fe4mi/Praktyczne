<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

      $conn = mysqli_connect('localhost','root','','praktyczny');

      // Check connection
      if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }
      echo "Connected successfully"; 
    

      $sql = "Select * FROM lowisko;";

      $query = mysqli_query($conn, $sql);
      $border = '1px solid black';
      if ($query->num_rows > 0) {
        // output data of each row

        echo "<table>";
        echo "<tr><th>ID</th><th>hashtag</th></tr>";
        while($row = $query->fetch_assoc()) {
          echo 
          
         "<th>" .
          "<tr>" . $row["akwen"]."</tr>" .
          "<tr>" . $row["id"]."</tr>".
          "</th>"    ;
          
        
        }
       echo "</table>";
      } else {
        echo "0 results";
      }


  







    $conn->close();
    ?>
</body>
</html>