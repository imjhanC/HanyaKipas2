<!DOCTYPE html>
<html>
	<div id="contentWrapper" class="content">
	<head>
		<title>
			123 PAN Island Expressway Berhad
		</title>
	</head>
	<body>
		<form action="Post message.php" method="post">
		<label for='Sal'> Salutation: </label>
		<input type="checkbox"> Mr
		<input type="checkbox"> Ms
		<input type="checkbox"> Mrs
		<input type="checkbox"> Mdm <br>
		
		<label for="name"> Name: </label>
		<input type="text" id = "name" name= "name"><br>
		
		<label for="email"> Email: </label>
		<input type="text" id = "email" name= "email"><br>
		
		<label for="phone"> Phone: </label>
		<input type="text" id = "phone" name= "phone"><br>
		
		Type of Enquirey:
		<input type = "checkbox"> General Enquirey
		<input type = "checkbox"> Compains
		<input type = "checkbox"> Suggestions <br>
		
		Subject: <br>
		<textarea name="message" rows="10" cols="50"> </textarea> <br>
		<input type="submit">
	
	</body>
</html>