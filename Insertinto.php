<?php
include "connect1.php";






//////////////////////////////
 // prepare sql and bind parameters
 /*
    $stmt = $conn->prepare("INSERT INTO informatie (`Voornaam`, `Achternaam`, `Datum`, `Tijd`, `Locatie`, `Benodigdheden`)
    VALUES ('Nadir', 'Jouhri', '19-11-2019', '16:00', 'Barendrecht', 'pen'),
('Ligie', 'Boeldak', '19-11-2019', '16:00', 'Zwijndrecht', 'potlood'),
('Nadir', 'Jouhri', '19-11-2019', '16:00', 'Barendrecht', 'pen'),
('Ligie', 'Boeldak', '19-11-2019', '16:00', 'Zwijndrecht', 'potlood'),
('Jhamille', 'Cumberbatch', '19-11-2019', '16:00', 'Ridderkerk', 'pen'),
('Tjoeky', 'Maria', '19-11-2019', '16:00', 'Rotterdam', 'gum'");
	*/
//function gegevenstoevoegen()
//{
	 // prepare sql and bind parameters
    $stmt = $conn->prepare("INSERT INTO informatie (voornaam, achternaam, datum, tijd, locatie, benodigdheden) 
    VALUES (:voornaam, :achternaam, :datum, :tijd, :locatie, :benodigdheden)");
	
    $stmt->bindParam(':voornaam', $voornaam);
    $stmt->bindParam(':achternaam', $achternaam);
    $stmt->bindParam(':datum', $datum);
	$stmt->bindParam(':tijd', $tijd);
	$stmt->bindParam(':locatie', $locatie);
	$stmt->bindParam(':benodigdheden', $benodigdheden);
	
  

    // insert a row
    //$voornaam = "John";
	$voornaam = $_POST['voornaam'];
	$achternaam = $_POST['achternaam'];
	$datum = $_POST['datum'];
	$tijd = $_POST['tijd'];
	$locatie = $_POST['locatie'];
	$benodigdheden = $_POST['benodigdheden'];
    //$achternaam = "Doelen";
    $stmt->execute();

//}	
	//echo "tjgsifgsj $voornaam";

/*

// Auteur : Nadir Jouhri

function connection($servername, $username, $password){
try {
$conn = new PDO("mysql:host=$servername", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
    // use exec() because no results are returned
   
    echo "Database succesvol aangemaakt!<br>";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
	}
	return $conn;
}

function create_database($conn, $createsql){
	$conn->exec($createsql);
}

function create_table($conn)

*/
?>