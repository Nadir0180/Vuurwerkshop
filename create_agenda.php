 <?php

include "connect1.php";


function aanmaaktabel()
{
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql = "DROP Table informatie; CREATE TABLE `informatieinfo` (
  `Voornaam` varchar(50) NOT NULL,
  `Achternaam` varchar(50) NOT NULL,
  `Datum` varchar(50) NOT NULL,
  `Tijd` varchar(50) NOT NULL,
  `Locatie` varchar(50) NOT NULL,
  `Benodigdheden` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;";
	$result = $conn->query($sql);



	echo "Create table successfully";
}
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
}
?>