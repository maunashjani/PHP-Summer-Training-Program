<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  

<?php
$name = $email = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    if (empty($_POST["name"])) 
    {
        $name = "Name is required";
    } 
    else 
    {
        $name = test_input($_POST["name"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[0-9]*$/",$name)) {
          $name = "Only letters and white space allowed"; 
        }
    }

    if (empty($_POST["email"])) 
    {
        $email = "Email is required";
    } 
    else 
    {
        $email = test_input($_POST["email"]);
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $email = "Invalid email format"; 
        }
    }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="number" name="name">
  <br><br>
  E-mail: <input type="text" name="email">
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
?>

</body>
</html>