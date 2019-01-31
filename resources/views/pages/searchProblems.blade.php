<html>
<head>
<style type="text/css">
h2.hidden {
    display: none;
}
body{
		background-color:#c4c4c4;
	}
.container{
	border-radius: 5px;
	box-shadow:0 0 10px 0 #000;
	background-color:#fff;
	bottom: 15;
	height: 85%;
	right: 15;
	left: 15;
	width: 100%
}
table, td, th {
    border: 1px solid black;
	font-family:"Trebuchet MS", Helvetica, sans-serif;
	background-color:#c4c4c4;
}

table {
    border-collapse: collapse;
    width: 90%;
    text-align:center;
	margin: auto;
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
#existingProblems{
	display: none;
}

#solvedProblems{
	display: none;
}
.problemStatus{
	color: white;
	position: absolute;
	font-size: 14px;
	font-family:"Trebuchet MS", Helvetica, sans-serif;
	left: 10%;
	top: 25%;
}
.search{
	position: absolute;
	right: 20%;
	top: 13%;
}
</style>
<title>Query Page</title>
<script type = "text/javascript">
	function loginPage(){
		location="login.html";
	}
	function menuPage(){
		location="menu.html";
	}
	function refreshPage(){
	    location="trackProblem.html";
	    
	}

	function showProblems(selected){
		switch(selected){
			case 'solved':
				existingProblems.style.display="none";
				solvedProblems.style.display="block";
				allProblems.style.display="none";
				break;
			case 'unsolved':
				existingProblems.style.display="block";
				solvedProblems.style.display="none";
				allProblems.style.display="none";
				break;
			case 'all':
				allProblems.style.display="block";
				solvedProblems.style.display="none";
				existingProblems.style.display="none";
				break;
		}
	}

</script>
</head>
<body>
<div class="topDiv">
	<a href="#" class="Btns" name="MenuBtn" onclick="menuPage();">Menu</a>
	<div class="problemStatus">
		<label for="status"> Problem Status </label>
		<select id="status" style="height: 25px" onchange="showProblems(this.options[this.selectedIndex].value)">
			<option selected="selected" value="all">All</option>
			<option value="solved">Solved</option>
			<option value="unsolved">Existing</option>
		</select>
	</div>
	<a href="#" class="LogOutBtn" name="LogOutBtn" onclick="loginPage();">Log Out</a>
</div>
<h1 align="center" style="font-family:verdana;">Search and Track Queries</h1>
	<div class="container">
		<div class="search">
			<input type="text" style="height: 25px"id="search" placeholder="Search by problem ID">
			<button style ="width: 80px ; height:25px" id="searchBtn" value="Search" font-size: 30px>Search</button>
		</div>
		<br><br>
<div id="existingProblems">
<h2 align="center"  style="font-family:Trebuchet MS;">Existing Problems</h2>
<table class="table">
	<tr>
		<th>Problem Number</th>
		<th>Problem Type</th>
		<th>Specialist Assigned</th>
		<th>Date Logged</th>
		<th>Details</th>
		<th>Completed?</th>
	</tr>
	<tr>
		<td>0003</td>
		<td>Printing</td>
		<td>Bert</td>
		<td>07/08/2018</td>
		<td><button>View</button></td>
		<td><input type="checkbox" name="Completed"></td>
	</tr>
	<tr>
		<td>0004</td>
		<td>Software Installation</td>
		<td>Clara</td>
		<td>09/08/2018</td>
		<td><button>View</button></td>
		<td><input type="checkbox" name="Completed"></td>
	</tr>
</table>
</div>
<div id="solvedProblems">
<h2 align="center" style="font-family:Trebuchet MS;">Solved Problems</h2>
<table class="table">
	<tr>
		<th>Problem Number</th>
		<th>Problem Type</th>
		<th>Specialist Assigned</th>
		<th>Date Logged</th>
		<th>Date Completed</th>
		<th>Details</th>
		<th>Completed?</th>
	</tr>
	<tr>
		<td>0001</td>
		<td>Power Failure</td>
		<td>Bert</td>
		<td>12/06/2018</td>
		<td>27/06/2018</td>
		<td><button>View</button></td>
		<td><input type="checkbox" name="Completed" checked></td>
		
	</tr>
	<tr>
		<td>0002</td>
		<td>Frozen Monitor</td>
		<td>Bert</td>
		<td>14/06/2018</td>
		<td>28/06/2018</td>
		<td><button>View</button></td>
		<td><input type="checkbox" name="Completed" checked></td>
	</tr>
</table>
</div>
<br />
<div id="allProblems">
	<h2 align="center" style="font-family:Trebuchet MS;">All Problems</h2>
<table class="table">
	<tr>
		<th>Problem Number</th>
		<th>Problem Type</th>
		<th>Specialist Assigned</th>
		<th>Date Logged</th>
		<th>Date Completed</th>
		<th>Details</th>
		<th>Completed?</th>
	</tr>
	<tr>
		<td>0001</td>
		<td>Power Failure</td>
		<td>Bert</td>
		<td>12/06/2018</td>
		<td>27/06/2018</td>
		<td><button>View</button></td>
		<td><input type="checkbox" name="Completed" checked></td>
		
	</tr>
	<tr>
		<td>0002</td>
		<td>Frozen Monitor</td>
		<td>Bert</td>
		<td>14/06/2018</td>
		<td>28/06/2018</td>
		<td><button>View</button></td>
		<td><input type="checkbox" name="Completed" checked></td>
	</tr>
	<tr>
		<td>0003</td>
		<td>Printing</td>
		<td>Bert</td>
		<td>07/08/2018</td>
		<td></td>
		<td><button>View</button></td>
		<td><input type="checkbox" name="Completed"></td>
	</tr>
	<tr>
		<td>0004</td>
		<td>Software Installation</td>
		<td>Clara</td>
		<td>09/08/2018</td>
		<td></td>
		<td><button>View</button></td>
		<td><input type="checkbox" name="Completed"></td>
	</tr>
</table>
</div>
</div>


</body>
</html>