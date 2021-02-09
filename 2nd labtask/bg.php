
<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$bloodgroupErr =  "";
$bloodgroup =  "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["bloodgroup"])) {
    $bloodgroupErr = "blood group is required";
  } else {
    $name = test_input($_POST["bloodgroup"]);
    // check if name only contains letters and whitespace
    
  }
  
  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>bloodgroup</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Blood Group: 
<select name="bloodgroup" <?php  echo($data['user_bloodgroup']==$bloodgp)?'checked':'' ?>>
    <option value="A+">A+</option
    <option value="B+">B+</option>
    <option value="AB+">AB+</option>
    <option value="O+">O+</option>
    <option value="A-">A-</option>
    <option value="B-">B-</option>
    <option value="AB-">AB-</option>
    <option value="O-">O-</option>
</select>
  <input type="submit" name="submit" value="Submit">  
</form>



</body>
</html>
