<!DOCTYPE html>
<html lang="en">

<head>
<link rel="stylesheet" type="text/css" href="http://localhost/Bootstrap/Bootstrap-Eindopdracht/CSS/stylesheet.css?ver=<?php echo rand(111,999)?>">
 <script type="text/javascript" src="../js.js"></script>

</head>

<body>
<?php include '../head.php'?>
<?php include '../navbar.php'?>

<form name="formcheck" onsubmit="return formCheck(this,'myadres');">
Voornaam: <input type=text name="FirstName" size="25"><br>
Achternaam: <input type=text name="LastName" size="25"><br>
Straatnaam: <input name="myadres" type="text" style="width: 270px"><br />
<input type=submit value="Submit Form">
</form>



    
<?php include '../footer.php'?>
</body>

</html>