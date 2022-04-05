@extends('layout/master')
@Section('content')
<!------ Include the above in your HEAD tag ---------->
 <!DOCTYPE html>
<html>
<head>
	<title>Gestion de scolarit</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

	<img class="wave" src="assets/img/wave.png">
	<div class="container">
		<div class="img">
			<img src="assets/img/bg.svg">
		</div>
		<div class="login-content">
			<form action="index.html">
				<img src="assets/img/avatar.svg">
				<h2 class="title">Welcome</h2>
				<form>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="form_input">
           		   		<input type="text" name="username" placeholder="entre username"/>
           		   </div>
           		    <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		<div class="form_input">
           		   		<input type="password" name="password" placeholder="entre password"/>
           		   </div>

            <div class="i">
           		   		<i class=""></i>
           		   </div>
            	<input type="submit" class="btn" value="Login">
            
            </div>
            
            </form>
        </div>
    </div>
    <script type="text/javascript" src="assets/js/main.js"></script>
</body>
</html>


@endsection('content')