<!DOCTYPE html>
<html lang="{{config('app.locale')}}">
<head>
	<title> menu </title>
	<style type="text/css">
	body{
		background-color: #c4c4c4;
		padding-top: 10px;
	}
	.container{
		width: 310px;
		height: 370px;
		padding: 20px 30px;
		border-radius: 15px;
		background-color: #fff;
		box-shadow:0 0 10px 0 #000;
		margin: 100px auto;
		text-align: center;
	}
	.bottomDiv{
		margin-top: 25px;
	}
	.menuButtons{
		width:150px;
		padding: 8px;
		margin-bottom: 10px;
		border-radius: 5px;
	}
	.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
	}
	.logo{
		width: 75%;
		height: 75%;
	}
	.topDiv{
	background-color: #111;
	height: 50px;
	top: 0;
	left: 0;
	right: 0;
	position: fixed;
}
.LogOutBtn{
	display: inline-block;
	font-size: 14px;
	line-height: 120%;
	color: #fff;
	background-color: transparent;
	border: 1px solid #fff;
	padding: 10px 12px;
	border-radius: 4px;
	text-decoration: none;
	cursor: pointer;
	transition: .5s ease;
	backface-visibility: hidden;
	margin-top:5px;
	margin-left: 10px;
	position: absolute;
	right: 0px;
	margin-right: 25px;
	font-family:"Trebuchet MS", Helvetica, sans-serif;
}
.LogOutBtn:hover{
	opacity: 0.3;
}

	</style>
</head>
<body>
	<div class="topDiv">
		<a href="#" class="LogOutBtn" name="LogOutBtn">Log Out</a>
	</div>
	<div class="container">
		<div class="imgcontainer">
			<img src="logo.png" alt="Logo" class="logo">
		</div>
		<div class="bottomDiv">
			<input type="button" name="logProblem" value="Log a problem" class="menuButtons">
			<br>
			<input type="button" name="eProblem" value="Existing problems" class="menuButtons">
			<br>
			<input type="button" name="sProblem" value="Solved Problems" class="menuButtons">
			<br>
			<input type="button" name="specialists" value="Specialists" class="menuButtons">
			<br>
			<input type="button" name="personnel" value="Personnel Database" class="menuButtons">
			<br>
			<input type="button" name="equip" value="Equipment/Software" class="menuButtons">
		</div>
	</div>
</body>
</html>