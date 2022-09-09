<html>
<head>

	<title>USER CREATION</title></a>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	</head>

<body>
	<div id="frm">
		<form action ="insert.php" method="POST">
			<div class ="form-group col-md-4">
				<label>USERNAME</label>
				<!-- <input type="text" name="user" placeholder="Email ID or Username" required autofocus /> -->
				<input type ="text" id="user" name ="user" class="form-control"placeholder="Email ID or Username" required autofocus/>
			</div>
			<div class ="form-group col-md-4">
			<label>PASSWORD</label>
			
			<!-- <input type="password" name="pass" placeholder="Password" required />  -->
			<input type="password" id ="pass" name ="pass"class ="form-control"placeholder="Password" required/>
				<!-- <input type="submit" value="SignUP" /> -->

			<input type="submit" class ="btn btn-primary" value ="SignUp"/>
		</form>
	</div>
</body>
</html>



	
