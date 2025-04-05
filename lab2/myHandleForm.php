<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <title>Form result</title>
</head>
<body bgcolor="yellow">
<?php
$FirstName = $_POST["FirstName"];
$LastName = $_POST["LastName"];
$Email = $_POST["Email"];
$Comments = $_POST['Comments'];
print("Your name is $FirstName<br />");
print("Your last name is $LastName<br />");
print("Your email address is $Email<br />");
print("Your comments is $Comments<br />");
print("This is what you have to say: $Comments <br>");
print("Use mass POST <br>");
print("Your first name is: $_POST[FirstName]<br />");
print("Your last name is: $_POST[LastName]<br />");
print("Your email address is: $_POST[Email]<br />");
print("Your comments is: $_POST[Comments]<br />");
print("Click <a href='myhello.php?FirstName=$FirstName&LastName=$LastName'>here</a> to see your personal greetings!");
?>
</body>
</html>