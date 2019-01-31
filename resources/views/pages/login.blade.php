<!DOCTYPE html>
<html <html lang="{{config('app.locale')}}"> >
<head>
	<title> login </title>
	<style type="text/css">
	body{
		background-color: #c4c4c4;
		padding-top: 10px;
	}
	.form-container{
		width: 300px;
		height: 300px;
		padding: 20px 30px;
		border-radius: 15px;
		background-color: #fff;
		box-shadow:0 0 10px 0 #000;
		margin: 100px auto;
	}
	.loginForm{
		text-align: center;
	}
	#login{
		width:150px;
		padding: 8px;
		margin-bottom: 10px;
		border-radius: 5px;
	}
	.inputTxt{
		width:250px;
		padding: 10px;
		border: none;
		background-color:#d3d3d3;
		margin-bottom: 20px;
		border-radius: 5px;
	}
	.top{
		height: 80px;
	}
	.imgcontainer {
		text-align: center;
		margin: 24px 0 12px 0;
	}
	.logo{
		width: 75%;
		height: 75%;
	}
	#username{
		margin-top: 25px;
	}
	</style>
	<script type='text/javascript'>
		//checks whether correct username and password are entered
		function usernamePassword(form){
			if(form.idNumber.value=="123456" && form.password.value=="password"){
				location="{{url('/menu2')}}";
			}
			else{
				alert("Invalid Login Details");
					
			}
		}
	</script>
</head>
<body>
<form>
	<div class="form-container">
		<div class="loginForm">
			<div class="imgcontainer"><img src="logo.png" alt="Logo" class="logo"></div>
			<form name="login">
				<div><input class="inputTxt" type="text" name="idNumber" placeholder="ID Number" required></div>
				<div><input class="inputTxt" type="password" name="password" placeholder="Password" required></div>
				<div><input type="button" name="Submit" value="Login" id="login" onclick="usernamePassword(this.form)"></div>
				<div><span><a href="#">Forgot Password?</a></div>
			</form>
		</div>
	</div>
</form>
</body>
</html>