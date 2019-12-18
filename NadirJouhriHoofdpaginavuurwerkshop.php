<!DOCTYPE html>
<html lang="en">
<head>
<style>
    body {
      background-image: url('achergrond9.jpg');
    }
    </style>
<title>CSS Template</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

</style>
</head>
<body>

<div class="topnav">
  <a class="active" href="#home">Home</a>
  <a href="#about">About</a>
  <a href="#contact">Contact</a>
  <input type="text" placeholder="Search..">
</div>
<header>
  <h2>FIREWORK</h2>
</header>

<section>
  <nav>
    <ul>
      <li><a href="#">Assortiment</a></li>
      <li><a href="#">Knalvuurwerk</a></li>
      <li><a href="#">Siervuurwerk</a></li>
    </ul>
  </nav>
  
   
  </article>
</section>




<footer>
  <p>Aanbiedingen !!!!</p>
</footer>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>

	
<title>Vuurwerkshop</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="vuurwerkshop.css"> 
</head>
<body>
<p>Connected succesfully</p>
<div class="topnav">
  <a class="active" href="#home">Home</a>
  <a href="#about">About</a>
  <a href="#contact">Contact</a>
  <input type="text" placeholder="Search..">
</div>

<header>
  <h2>FIREWORK</h2>
</header>
<!-- Control buttons -->
<div id="myBtnContainer">
  <button class="btn active" onclick="filterSelection('all')"> Alles</button>
  <button class="btn" onclick="filterSelection('Knal')"> Knalvuurwerk</button>
  <button class="btn" onclick="filterSelection('sier')"> Siervuurwerk</button>

</div>

<!-- The filterable elements. Note that some have multiple class names (this can be used if they belong to multiple categories) -->

<div class="container">
  <div class="filterDiv Knal"><div class="card">
  <img src="Nitraat.png" alt="Denim Jeans" style="width:100%">
  <h3>Nitraat</h3>
  <p class="price">€17,50</p>
  <p><button>Bestel Nu</button></p>
</div></div>
  <div class="filterDiv sier"><div class="card">
  <img src="sierpot.png" alt="Denim Jeans" style="width:100%">
  <h3>Sierpot</h3>
  <p class="price">€50,00</p>
  <p><button>Bestel Nu</button></p>
</div></div>
  <div class="filterDiv Knal"><div class="card">
  <img src="cobra66.jpg" alt="Denim Jeans" style="width:100%">
  <h3>Cobra 6</h3>
  <p class="price">€19.99</p>
  <p><button>Bestel Nu</button></p>
</div></div>
  <div class="filterDiv sier"><div class="card">
  <img src="grondbloem.jfif" alt="Denim Jeans" style="width:100%">
  <h3>Grondbloemen</h3>
  <p class="price">€7,50</p>
  <p><button>Bestel Nu</button></p>
</div></div>
  <div class="filterDiv Knal"><div class="card">
  <img src="thunderking.jpg" alt="Denim Jeans" style="width:100%">
  <h3>Thunderking</h3>
  <p class="price">€15,00</p>
  <p><button>Bestel Nu</button></p>
</div></div>
  <div class="filterDiv sier"><div class="card">
  <img src="pijlensier.jfif" alt="Denim Jeans" style="width:100%">
  <h3>Sierpijlen</h3>
  <p class="price">€25,00</p>
  <p><button>Bestel Nu</button></p>
</div></div>
</div>
<br>





<?php
/*
try  {
$servername = "localhost";
$username = "root";
$password = "";
$dbname= "vuurwerk";
		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
		$result = $conn -> query("SELECT * from product");
		$result->setFetchMode(PDO::FETCH_ASSOC);
		
		echo "Connected succesfully<br>";
	}	
catch(PDOExeption $e)		
{		
echo "Connection failed: " . $e->getMessage();
}

while ($row = $result->fetch()) {
	echo '<div class="filterDiv Knal">';
	echo '<div class="card">';
	echo "<img class='afbeelding' src=".$row['URL_Afbeelding'] . " >";
	echo $row['Naam'] . "<br>";
	echo $row['Prijs'] . "<br>";
	echo $row['Voorraad'] . "<br>";
	echo '</div>';
	echo '</div>';
}	
while ($row = $result->fetch()) {
	echo '<div class="filterDiv sier">';
	echo '<div class="card">';
	echo "<img class='afbeelding' src=".$row['URL_Afbeelding'] . " >";
	echo $row['Naam'] . "<br>";
	echo $row['Prijs'] . "<br>";
	echo $row['Voorraad'] . "<br>";
	echo '</div>';
	echo '</div>';
}	
		

		
		
		
		
		
*/		
?>


  





<footer>
  <p>www.Vuurwerkshop.nl</p>
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

// Add active class to the current button (highlight it)
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

