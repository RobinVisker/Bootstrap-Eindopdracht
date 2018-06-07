<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="http://localhost/Bootrstrap/Bootstrap-Eindopdracht/CSS/stylesheet.css"> 

  <script>


function formCheck(formobj,email){
	// Enter name of mandatory fields
	var fieldRequired = Array("FirstName", "LastName","myemail");
	// Enter field description to appear in the dialog box
	var fieldDescription = Array("Voornaam", "Achternaam","Email");
	// dialog message
	var alertMsg = "Vul de volgende velden in:\n";

	var l_Msg = alertMsg.length;

	for (var i = 0; i < fieldRequired.length; i++){
		var obj = formobj.elements[fieldRequired[i]];
		if (obj){
			switch(obj.type){
			case "select-one":
				if (obj.selectedIndex == -1 || obj.options[obj.selectedIndex].text == ""){
					alertMsg += " - " + fieldDescription[i] + "\n";
				}
				break;
			case "select-multiple":
				if (obj.selectedIndex == -1){
					alertMsg += " - " + fieldDescription[i] + "\n";
				}
				break;
			case "text":
			case "textarea":
				if (obj.value == "" || obj.value == null){
					alertMsg += " - " + fieldDescription[i] + "\n";
				}
				break;
			default:
			}
			if (obj.type == undefined){
				var blnchecked = false;
				for (var j = 0; j < obj.length; j++){
					if (obj[j].checked){
						blnchecked = true;
					}
				}
				if (!blnchecked){
					alertMsg += " - " + fieldDescription[i] + "\n";
				}
			}
		}
	}
    var emailfilter=/^\w+[\+\.\w-]*@([\w-]+\.)*\w+[\w-]*\.([a-z]{2,4}|\d+)$/i;
    if (formobj[email]&&!emailfilter.test(formobj[email].value)){
	  alertMsg += " - " + 'Voer een geldig email adres in' + "\n";
    }
	if (alertMsg.length == l_Msg){
		return true;
	}else{
		alert(alertMsg);
		return false;
	}
}
</script>

</head>

<body>
<?php include '../head.php'?>
<?php include '../navbar.php'?>

<form name="formcheck" onsubmit="return formCheck(this,'myemail');">
Voornaam: <input type=text name="FirstName" size="25"><br>
Achternaam: <input type=text name="LastName" size="25"><br>
Straatnaam: <input name="myemail" type="text" style="width: 270px"><br />
<input type=submit value="Submit Form">
</form>



    
<?php include '../footer.php'?>
</body>

</html>