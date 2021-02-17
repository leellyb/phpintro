<?php include 'validate.php'?>


<!DOCTYPE html>
<html>
<head>
	<title>form validation</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../aardvark/bootsrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../aardvark/bootsrap/css/bootstrap-grid.css">
	<link rel="stylesheet" type="text/css" href="../aardvark/bootsrap/css/bootstrap-grid.min.css">
	<link rel="stylesheet" type="text/css" href="../aardvark/bootsrap/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
  <h2>Form validate</h2>
  <form action="filtervalidate.php" method="POST">
  	<div class="form-group">
  		<label for="username">Username:</label>
  		<input type="username" class="form-control" placeholder="Enter username" name="user" value=<?php echo "$username";?> >
  		
  	</div>
    <div class="form-group">
      <label for="email">Email:</label>

      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
      value=<?php echo "$email";?>
    
    </div>
    <div class="form-group">
      <label for="pwd">Integer:</label>
     <input type="integer" class="form-control" name="int" placeholder="integer"  id="int">
     value=<?php echo "$integer";?>
      
    </div>
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
</div>
<?php
echo "<h2>Your Input Is:</h2>";
echo "<br>";
echo $username;
echo "<br>";
echo $email;
echo "<br>";
echo $integer;

?>


</body>
</html>