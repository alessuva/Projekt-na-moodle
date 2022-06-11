<!DOCTYPE HTML>  
<html>
<head>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="Zkouska.css">
</head>


<?php
// define variables and set to empty values
$Druhecislo = "";
$Prvnicislo = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $Prvnicislo = test_input($_POST["x"]);
  $Druhecislo = test_input($_POST["y"]);

}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>

<h2>Zkouska - nasobeni</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
Prvnicislo: <input type="int" name="x"><br>
Druhecislo: <input type="int" name="y"><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
echo "<h2>Vysledek:</h2>";
echo "Prvnicislo = ";
echo $Prvnicislo;
echo "<br>";
echo "<br>";
echo "Druhecislo = ";
echo $Druhecislo;
echo "<br>";
echo "<br>";
echo "Vysledek = ";
echo $Druhecislo * $Prvnicislo;
echo "<br>";
echo "<br>";
}

?>
 
</body>
</html>
