<!-- <!DOCTYPE html> -->
<html>
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css font.css">
	<script src="node_modules/jquery/dist/jquery.min.js"></script>
</head>
<body>
<span onclick="document.getElementById('login').style.display='block'" class="loginspan">Login</span>
<div id="login" class="loginplace">
<form class="loginform">
	<div class="logincontainer">
	<h3 style="font-family: helvetica;
	background-color : #cc99ff;
	padding : 4px;
	font-size: 20px;
	margin-top:0px;
	position: relative;">USER LOGIN</h3>
	<span onclick="document.getElementById('login').style.display='none'" class="closespan" title="Close">x</span><br>
	<label for="user_name" style="font-size: 18px; font-style: helvetica;">Username</label><br>
	<input type="text" class="usernameinput" placeholder="Enter your username" name="user_name" style="
		margin-top: 10px;
		margin-bottom: 10px;
		padding: 5px;
		width: 250px;
		height: 17px;
	" required><br>

	<label for="pass_word" style="font-size: 18px; font-style: helvetica;">Password</label><br>
	<input type="text" class="passwordinput" placeholder="Enter your password" name="pass_word" style="margin-top: 10px;
		padding: 5px;
		width: 250px;
		height: 17px;
	" required><br>

	<button type="submit" class="loginbutton" style="margin-top: 10px; font-size: 14px; font-style: helvetica; padding: 4px;">Login</button>
	</div>	
</form>
</div>

<script>
var outsideform = document.getElementById('login');

window.onclick = function(event){
	if (event.target == outsideform){
		outsideform.style.display = "none";
	}
}
</script>
</body>
<!-- </html> -->