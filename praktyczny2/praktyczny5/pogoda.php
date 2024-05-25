<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prognoza pogody Wrocławt</title>
    <link rel="stylesheet" href="styl2.css">
</head>
<body>
    <header>
        <div class="banerl">
            <img src="logo.png" alt="meteo" >
        </div>
        <div class="baners">
            <h1>Prognoza dla Wrocławia</h1>
        </div>
        <div class="banerp">
            <p>maj, 2019 r.</p>
        </div>
    </header>
    <div class="main">
        <table>
            <tr>
                <th>DATA</th>
                <th>TEMPERATURA W NOCY</th>
                <th>TEMPERATURA W DZIEŃ</th>
                <th>OPADY [mm/h</th>
                <th>CIŚNIENIE [hPa]</th>
            </tr>   
            <?php

                $conn = mysqli_connect('localhost','root','','prognoza');

                $sql = "SELECT * from pogoda where miasta_id =1 order by data_prognozy asc;";
                $result = mysqli_query($conn, $sql);
              
                if(mysqli_num_rows($result) > 0){
                    while( $row = mysqli_fetch_assoc($result)){

                        echo "<tr>". 
                            "<td>". $row["data_prognozy"] ."</td>".
                            "<td>". $row["temperatura_noc"] ."</td>".
                            "<td>". $row["temperatura_dzien"] ."</td>".
                            "<td>". $row["opady"] ."</td>".
                            "<td>". $row["cisnienie"] ."</td>"."</tr>";
                        }};


            ?>
           </table>
                    </div>
    <aside>
        <img src="obraz.jpg" alt="Polska, Wrocław">
    </aside>
    <nav>
        <a href="kwerendy.txt">Pobierz kwerendy</a>
    </nav>
    <footer>
        <p>Strone wykonał: szkrab</p>
    </footer>
</body>
</html>