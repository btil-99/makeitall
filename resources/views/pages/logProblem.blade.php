<html>
<head>
<style type="text/css">
	body{
		background-color:#c4c4c4;
	}
	form {
		font-family:"Trebuchet MS", Helvetica, sans-serif;
	}
	h1 {
		font-family:"Arial Black", Gadget, sans-serif;
	}
	.container{
		width: 55%;
		height: auto;
		padding: 20px 30px;
		border-radius: 15px;
		background-color: #fff;
		box-shadow:0 0 10px 0 #000;
		margin: 100px auto;
		text-align: center;
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
	.Btns{
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
		font-family:"Trebuchet MS", Helvetica, sans-serif;
	}
	.Btns:hover{
		opacity: 0.3;
	}
	.buttonDiv {
		margin: 10px auto;
	}

    #lastname { margin-left: 10px; margin-right:50px;}
    #firstname { margin-left: 10px; margin-right:50px;}
	#time{ margin-left: 10px; margin-right:50px;}
	#date{ margin-left: 10px; margin-right:50px; margin-bottom:20px;}
	#serialNo{ margin-left: 10px; margin-right:50px;}
	#OS{ margin-left: 10px; margin-right:50px; margin-bottom:20px;}	
		
</style>
<script type = "text/javascript">
	function loginPage(){
		location="{{url('/login')}}";
	}
	function menuPage(){
		location="{{url('/menu2')}}";
	}

</script>
</head>
<body>
	<div class="topDiv">
		<a href="#" class="Btns" name="MenuBtn" onclick="menuPage();">Menu</a>
		<a href="#" class="LogOutBtn" name="LogOutBtn" onclick="loginPage();">Log Out</a>
	</div>
	<div class="container">
		<div class="title">
			<h1>Log Problem</h1>
		</div>

		<form action="">
			<h4 align="left">Problem ID: #239</h4>
			<div class="callDetails">
				<h3 class="center">Caller Details:</h3>
		
				<label for="firstname">First name:</label>
				<input type="text" id="firstname" value="">
				<label for = "lastname">Surname:</label>
				<input type="text" id="lastname" value="">
			</div>
			<h3 class="center">Problem Details:</h3>
			<label for = Date>Date:</label>
			<input id="date" type="date" name="date" value="2017-06-05">
			<label for = Time>Time:</label>
			<input id="time" type="time" name="time" value="12:38"><br>
			<label for="serialNo">Serial Number:</label>
			<input type="text" id="serialNo" value="">
			<label for = "OS"> OS:</label>
			<select id="OS">
				<option value="Select">Select</option>
				<option value="Windows">Windows</option>
				<option value="MacOS">MacOS</option>
				<option value="Linux">Linux</option>
			</select>
			<label for = "Problem Type"> Problem Type:</label>
			<select id="ProblemType">
				<option value="Select">Select</option>
				<option value="Hardware">Hardware</option>
				<option value="Software">Software</option>
				<option value="Network">Network</option>
				<option value="Other">Other</option>
			</select><br>
			<label for="reason">Problem Description:</label>
			<input type="text" id="reason" value=""><br>
			<label for="notes">Notes:</label><br>
			<textarea class="textarea-respons" rows="6" cols="80"></textarea><br>

			<div class="buttonDiv" align="center">
			<button style ="width: 100px ; height:30px"  id="Submit" value="Submit" font-size: 30px>Submit</button>
			</div>
		</form> 
	</div>
</body>

</html>