<!DOCTYPE html>
//Ligie Boeldak//
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="vuurwerk.css">
<title>CSS Template</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">


</head>
<body>
<style>
    body {
      background-image: url('VuurwerkPlaatje.jpg');
    }
    </style>
<div class="topnav">
  <a class="active" href="#home">Home</a>
  <a href="#about">About</a>
  <a href="#contact">Contact</a>
  <a href="Hoofdpagina.php">All</a>
  <a href="Siervuurwerk.php">Siervuurwerk</a>
  <a href="Knalvuurwerk.php">Knalvuurwerk</a>
  <input type="text" placeholder="Search..">
</div>
<header>
  <h2>FIREWORKS</h2>
</header>

<section>
 





  


<?php 

try { 

$servername = "localhost"; 
$username = "root"; 
$password = "";
$dbname = "vuurwerksite"; 

    $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username, $password);
    $result = $conn -> query("SELECT * from product"); 
    $result->setFetchMode(PDO::FETCH_ASSOC); 

    echo "Connected successfully<br>"; 
    }
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}


$result = $conn -> query("SELECT * from product WHERE catogorie = 'Siervuurwerk'");
while ($row = $result->fetch()) { 
	
		echo "<div class='filterDiv Knal'>";
		echo "<img src=".$row['url_afbeelding'] . ' width="200" height="150">';
        echo "<p>" . $row['naam'] . "</p>"; 
		echo "<p>" . $row['prijs'] . "</p>";
        //echo $row['url_afbeelding'] . "<br>"; 
        
		echo "</div>";
			

}

?>
</div>
  </div>
   </article>
</section>


<footer>
  <p>Vuurwerk voor iedereen!</p>
</footer>





<script>
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("filterDiv");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}

var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>

</body>
</html>