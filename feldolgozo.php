<!DOCTYPE html>
<html lang="hu">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Develery</title>
</head>
<body>

<div class="hatter">
    <div id="visszaGomb">
        <a href="index.php">
            <button type="button" class="btn btn-primary">Vissza</button>
        </a>
    </div>
</div>
    
</body>
</html>


<?php
    $dataB = new dataBase("develery");
    
    if (isset($_POST["submitGomb"])) {
        echo $dataB->InsertMessage();
    }

    class dataBase {
        private $name;

        function __construct($name)
        {
            $this->name=$name;
        }

        function GetDbName()
        {
            return $this->name;
        }

        function DbConnectOpen()
        {
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = $this->GetDbName();
    
            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            }
            return $conn;
        }
        function DbConnectClose($conn)
        {
            $conn->close();
        }
    
        function InsertMessage()
        {
            if ($_POST["nevMezo"]!="" && $_POST["emailMezo"]!="" && $_POST["uzenetMezo"]!="") {

                $conn=$this->DbConnectOpen();
                $sql = "INSERT INTO `uzenetek`(`nev`, `email`, `leiras`) VALUES ('".$_POST["nevMezo"]."','".$_POST["emailMezo"]."','".$_POST["uzenetMezo"]."');";
                
                if ($conn->query($sql) === TRUE) {
                  return '<script>alert("Köszönjük szépen a kérdésedet. Válaszunkkal hamarosan keresünk a megadott e-mail címen.")</script>';
                } else {
                  return '<script>alert("Hiba! Kérjük töltsd ki az összes mezőt!")</script>';
                }
                $this->DbConnectClose($conn);

            } else {
                return '<script>alert("Hiba! Kérjük töltsd ki az összes mezőt!")</script>';
            }
        }
    }
?>