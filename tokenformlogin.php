<?php
session_start();

$token = uniqid(microtime(),true);
//This method is not Cryptographically secure !
//Instead this shoud be used:
//$token = bin2hex(random_bytes(16));
//random_bytes or random_int shoud be used !

$_SESSION['token'] = md5($token);

?>

<!DOCTYPE HTML>
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>

<form method="post" action="tokenform.php">
  Name: <input type="text" name="name" value="">
  <span class="error">* </span>
  <br><br>
  E-mail: <input type="text" name="email" value="">
  <span class="error">* </span>
  <br><br>
  <input type="hidden" name="token" value="<?php echo $token; ?>">
  <input type="submit" name="submit" value="Submit">
</form>

</body>
</html>
