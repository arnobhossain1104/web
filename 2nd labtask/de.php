
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
$degreeErr =  "";
$degree =  "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["degree"])) {
  count($_POST["degree"]}
	 if($countDegree<2){
    $degreeErr = "At least two of them must be selected";
  } else {
    $degree = test_input($_POST["degree"]
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

degree:

 <input type="checkbox">SSC</label>
	   <input type="checkbox"> HSC </label>
	   <input type="checkbox"> BSc</label>
	   <input type="checkbox"> MSc</label>
  <input type="submit" name="submit" value="Submit">  
</form>



</body>
</html>
