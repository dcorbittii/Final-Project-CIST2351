<?php
$Intstructions = "Enter Username", "Enter Password", "Click Submit";

?>
<?php 
$name = 'userid';
$value = '87';
$expire = new DateTime('+1 year');
$path = '/'
setcookie($name, $value, $expire, $path);
?>
<?php $userid = filter_input(INPUT_COOKIE, 'userid', FILTER_VALITDATE_INT); ?>
<?php $expire = new DateTime('-1 year'); 
      setcookie('userid', '', $expire, '/')                             ?>



<!DOCTYPE html>
<html>
<body>
 <header>    
 <?php  $Welcome = "Welcome"; ?>
     <h1>Sign In</h1>
<h4>Instructions<h4>

<?php echo $Intstructions[0]; ?>
<?php echo $Intstructions[1]; ?>
<?php echo $Intstructions[2]; ?>

</header>        
</body>
<form>
User Name: <input type="text" name="user_name" value="">
Password: <input type="password" name="password">
<input type="hidden" name="action" value="login">


</form>

<input type="submit" name="usersubmit" value="Submit">
<form action="Thankyou.php" method="post">

</body>
</html>