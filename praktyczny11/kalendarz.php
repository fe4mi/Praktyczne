<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadania na lipiec</title>
    <link rel="stylesheet" href="styl6.css">
</head>
<body>
    <header>
        <section class="lewy">
                <img src="logo1.png" alt="lipiec">
        </section>
        <section class="prawy">
                <h1>TERMINARZ</h1>
                <p>najbliższe zadania: </p>
                <?php 

                $conn = mysqli_connect("localhost", "root", "", "terminarz");
               

                $query = "SELECT DISTINCT wpis from zadania where wpis !='' AND ID<=7 AND ID>=1";

                $result = mysqli_query($conn, $query);
                while ($row = mysqli_fetch_array  ($result))
                {
                    
                    echo $row[0].", ";
                }




                ?>
        </section>
    </header>
    <main>
    <?php 

        $conn = mysqli_connect("localhost", "root", "", "terminarz");


       
        $q = "SELECT dataZadania, wpis FROM zadania WHERE MONTH(dataZadania) = 7;";
        $res = mysqli_query($conn, $q);
        while ($row = mysqli_fetch_array($res)) {
            echo "<section class='kal'>
                <h6>$row[0]</h6>
                <p>$row[1]</p>
                </section>";
        }
   
       



mysqli_close($conn);
?>
    </main>
    <footer>
            <a href="sierpien.html">Terminarz na sierpień</a>
            <p>Strone wykonał:</p>
    </footer>
</body>
</html>