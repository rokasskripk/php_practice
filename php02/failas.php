<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Pirmoji uzduotis"
    <title></title>


</head>

<body>
    <h3>10 uzduotis</h3>
    <?php 
    function staciakamp_area($a, $b) {
    $area = $a * $b;
    return $area;
    }

    $result = staciakamp_area(5, 10);
    echo "Staciakampio plotas yra: " . $result;
    ?>
    
    <h3>11 uzdutois</h3>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="length">Ilgis:</label>
    <input type="text" id="length" name="length"><br><br>

    <label for="width">Plotis:</label>
    <input type="text" id="width" name="width"><br><br>

    <input type="submit" value="Pateikti" name="submit">
    </form>

    <?php
    function rectangle_area($length, $width) {
    $area = $length * $width;
    return $area;
    }

    if(isset($_POST['submit'])) {
    $length = $_POST['length'];
    $width = $_POST['width'];

    if(empty($length) || empty($width)) {
        echo "Please fill in all the fields.";
    } else {
        $result = rectangle_area($length, $width);
        echo "Staciakampio plotas yra: " . $result;
    }
    }
    ?>

    <h3>12uzduotis</h3>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name"><br><br>

    <label for="last_name">Last Name:</label>
    <input type="text" id="last_name" name="last_name"><br><br>

    <input type="submit" value="Submit" name="submit">
    </form>

    <?php
    if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $last_name = $_POST['last_name'];

    if(empty($name) || empty($last_name)) {
        echo "Please fill in all the fields.";
    } else {
        echo "Hello " . $name . " " . $last_name;
    }
    }
    ?>

    <h3>13uzduotis</h3>
    <form action="result.php" method="post">
  <label for="name">Name:</label>
  <input type="text" id="name" name="name"><br>
  <label for="surname">Last Name:</label>
  <input type="text" id="surname" name="surname"><br>
  <input type="submit" value="Submit">
</form>
<?php
if(isset($_POST["name"]) && isset($_POST["surname"]) && !empty($_POST["name"]) && !empty($_POST["surname"])) {
  $name = $_POST["name"];
  $surname = $_POST["surname"];
  echo "Your name is: $name $surname";
} else {
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    echo "Please fill in all fields";
  }
}
?>
<h3>13uzduotis</h3>
    <?php
    class Person {
    public $firstName;
    public $lastName;

    public function greet() {
    return "Sveiki, mano vardas " . $this->firstName . " " . $this->lastName . ".";
    }
    }

    $person1 = new Person();
    $person1->firstName = "Jonas";
    $person1->lastName = "Jonaitis";

    $person2 = new Person();
    $person2->firstName = "Mantas";
    $person2->lastName = "Mantaitis";

    echo $person1->greet();
    echo $person2->greet();
    ?>
    <h3>14uzduotis</h3>
    
    <?php
function displayCopyright($creationYear) {
  $currentYear = date("Y"); // Use date function to find current year
  if ($creationYear == $currentYear) {
    echo "Copyright &copy; " . $currentYear;
  } else {
    echo "Copyright &copy; " . $creationYear . "-" . $currentYear;
  }
}

displayCopyright(2015);
?>
</body>
</html>
