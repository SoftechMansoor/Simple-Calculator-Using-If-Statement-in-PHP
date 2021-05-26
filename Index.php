<!DOCTYPE html>
<html>
<head>
	<title>Calculator</title>
</head>
<body>
<form method="POST" attribute="POST"action="display.php">
<p>First Value:<br>
<input type="text" id="first" name="first">
</p>
<p>Second value:</br>
<input type="text" id="second" name="second">
</p>
<input type="radio" name="group1" id="add" value="add" checked="true"><p>+</p></br>
<input type="radio" name="group1" id="subtract" value="subtract" checked="true"><p>-</p></br>
<input type="radio" name="group1" id="times" value="times" checked="true"><p>*</p>x</br>
<input type="radio" name="group1" id="divide" value="divide" checked="true"><p>/</p></br>

<button type="submit" name="answer" id="answer" value="answer">Calulate</button>
		
	</form>

</body>
</html>