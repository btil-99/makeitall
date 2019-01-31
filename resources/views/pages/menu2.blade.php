<!DOCTYPE html>
<html lang="{{config('app.locale')}}">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <title>Helpdesk Menu</title>
	<style type="text/css">
	body{
		background-color: #c4c4c4;
		padding-top: 10px;
	}
	.container{
		width: auto;
		height: auto;
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
    .card{
        height: 100%;
    }

	</style>
    </head>
    <body>
        <div class="topDiv">
            <button href="#" class="LogOutBtn" name="LogOutBtn" onclick="loginPage();">Log Out</button>
        </div>
        <div class="container">
            <div class="nameDiv">
                <h1>Welcome Name!</h1>
            </div>
            <div class="bottomDiv">
                    <div class="row">
                        <div class="col-md-4 my-4">
                            <div class="card">
                                <div class="card-block text-center my-5">
                                <a class="btn mainmenu-button bg-typo" href="{{url('/logProblem')}}"><h4 class="card-title">Log a problem</h4></a>
                                    <p class="card-text">Log a new problem</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 my-4">
                            <div class="card">
                                <div class="card-block text-center my-5">
                                    <a class="btn mainmenu-button bg-typo"><h4 class="card-title">Log a Call</h4></a>
                                    <p class="card-text">View logged calls or log a new one</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 my-4">
                            <div class="card">
                                <div class="card-block text-center my-5">
                                    <a class="btn mainmenu-button bg-typo" href="{{url('/searchProblems')}}"><h4 class="card-title">Search Problems</h4></a>
                                    <p class="card-text">View and updated solved and unsolved problems</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 my-4">
                            <div class="card">
                                <div class="card-block text-center my-5">
                                    <a class="btn mainmenu-button bg-typo" href="{{url('/specialists')}}"><h4 class="card-title">Specialists</h4></a>
                                    <p class="card-text">View all specialists</p>          
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 my-4">
                            <div class="card">
                                <div class="card-block text-center my-5">
                                    <a class="btn mainmenu-button bg-typo" href="{{url('/personnel')}}"><h4 class="card-title">Personnel Database</h4></a>
                                    <p class="card-text">View and update personnel database</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 my-4">
                            <div class="card">
                                <div class="card-block text-center my-5">
                                    <a class="btn mainmenu-button bg-typo" href="{{url('/equip')}}"><h4 class="card-title">Equipment/Software</h4></a>
                                    <p >View and update equipment or software </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </body>
</html>