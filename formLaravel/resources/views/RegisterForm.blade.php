<!DOCTYPE html>
 <html lang="en">

 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
 	<title>Bootstrap Sign up Form with Icons</title>
 	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
 	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
 	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
 	<script src="https://kit.fontawesome.com/79f82cf2f7.js" crossorigin="anonymous"></script>
 	<style>
 		body {
 			color: #fff;
 			background: #19aa8d;
 			font-family: 'Roboto', sans-serif;
 		}

 		.form-control {
 			font-size: 15px;
 		}

 		.form-control,
 		.form-control:focus,
 		.input-group-text {
 			border-color: #e1e1e1;
 		}

 		.form-control,
 		.btn {
 			border-radius: 3px;
 		}

 		.signup-form {
 			width: 400px;
 			margin: 0 auto;
 			padding: 30px 0;
 		}

 		.signup-form form {
 			color: #999;
 			border-radius: 3px;
 			margin-bottom: 15px;
 			background: #fff;
 			box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
 			padding: 30px;
 		}

 		.signup-form h2 {
 			color: #333;
 			font-weight: bold;
 			margin-top: 0;
 		}

 		.signup-form hr {
 			margin: 0 -30px 20px;
 		}

 		.signup-form .form-group {
 			margin-bottom: 20px;
 		}

 		.signup-form label {
 			font-weight: normal;
 			font-size: 15px;
 		}

 		.signup-form .form-control {
 			min-height: 38px;
 			box-shadow: none !important;
 		}

 		.signup-form .input-group-addon {
 			max-width: 42px;
 			text-align: center;
 		}

 		.signup-form .btn,
 		.signup-form .btn:active {
 			font-size: 16px;
 			font-weight: bold;
 			background: #19aa8d !important;
 			border: none;
 			min-width: 140px;
 		}

 		.signup-form .btn:hover,
 		.signup-form .btn:focus {
 			background: #179b81 !important;
 		}

 		.signup-form a {
 			color: #fff;
 			text-decoration: underline;
 		}

 		.signup-form a:hover {
 			text-decoration: none;
 		}

 		.signup-form form a {
 			color: #19aa8d;
 			text-decoration: none;
 		}

 		.signup-form form a:hover {
 			text-decoration: underline;
 		}

 		.signup-form .fa {
 			font-size: 19px;
 		}

 		.signup-form .fa-paper-plane {
 			font-size: 18px;
 		}

 		.signup-form .fa-mobile {
 			font-size: 24.5px;
 		}

 		.signup-form .fa-check {
 			color: #fff;
 			left: 17px;
 			top: 18px;
 			font-size: 7px;
 			position: absolute;
 		}
 	</style>
 </head>

 <body>
 	<!--header start-->
 	<nav class="navbar navbar-expand-lg navbar-light bg-light">
 		<div class="container-fluid">
 			<a class="navbar-brand" href="#">OCA</a>
 			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
 				<span class="navbar-toggler-icon"></span>
 			</button>
 			<div class="collapse navbar-collapse" id="navbarSupportedContent">
 				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
 					<li class="nav-item">
 						<a class="nav-link active" aria-current="page" href="#">Home</a>
 					</li>
 					<li class="nav-item">
 						<a class="nav-link" href="#">About Us</a>
 					</li>
 					<li class="nav-item">
 						<a class="nav-link" href="#">Register</a>
 					</li>
 					<li class="nav-item">
 						<a class="nav-link" href="#">Our Project</a>
 					</li>
 					<li class="nav-item">
 						<a class="nav-link" href="#">Contact Us</a>
 					</li>

 				</ul>

 			</div>
 		</div>
 	</nav>
 	<!--header end -->
 	<!--main start-->
 	<div class="signup-form mt-5">
 		<form action="/register" method="post">
 			@csrf
 			<h2>Register</h2>
 			<p>Please fill in this form to create an account!</p>
 			<hr>
 			<!-- <div class="form-group">
 				<div class="input-group">
 					<div class="input-group-prepend">
 						<span class="input-group-text">
 							<span class="fa fa-user"></span>
 						</span>
 					</div>
 					<input type="text" class="form-control" name="username" placeholder="Username" value="{{old('username')}}">
 				</div>

 			</div>
 			@error('username')
 			<div>
 				<p style="color: red;font-size:0.7rem">{{$message}}</p>
 			</div>
 			@enderror -->
 			<div class="form-group">
 				<div class="input-group">
 					<div class="input-group-prepend">
 						<span class="input-group-text">
 							<span class="fa fa-user"></span>
 						</span>
 					</div>
 					<input type="text" class="form-control" name="fullname" placeholder="Fullname" value="{{old('fullname')}}">
 				</div>
 			</div>
			 @error('fullname')
 			<p style="color: red;font-size:0.7rem">{{$message}}</p>
 			@enderror
 			<div class="form-group">
 				<div class="input-group">
 					<div class="input-group-prepend">
 						<span class="input-group-text">
 							<i class="fa fa-paper-plane"></i>
 						</span>
 					</div>
 					<input type="email" class="form-control" name="email" placeholder="Email Address" value="{{old('email')}}">
 				</div>
 			</div>
 			@error('email')
 			<p style="color: red;font-size:0.7rem">{{$message}}</p>
 			@enderror
 			<div class="form-group">
 				<div class="input-group">
 					<div class="input-group-prepend">
 						<span class="input-group-text">
 							<i class="fas fa-mobile "></i>
 						</span>
 					</div>
 					<input type="text" class="form-control" name="mobile" placeholder="Mobile Phone" value="{{old('mobile')}}">
 				</div>
 			</div>
 			@error('mobile')
 			<p style="color: red;font-size:0.7rem">{{$message}}</p>
 			@enderror
 			<div class="form-group">
 				<div class="input-group">
 					<div class="input-group-prepend">
 						<span class="input-group-text">
 							<i class="fa fa-lock"></i>
 						</span>
 					</div>
 					<input type="password" class="form-control" name="password" placeholder="Password" value="{{old('password')}}">
 				</div>
 			</div>
 			@error('password')
 			<p style="color: red;font-size:0.7rem">{{$message}}</p>
 			@enderror
 			<div class="form-group">
 				<div class="input-group">
 					<div class="input-group-prepend">
 						<span class="input-group-text">
 							<i class="fa fa-lock"></i>
 							<i class="fa fa-check"></i>
 						</span>
 					</div>
 					<input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" value="{{old('password_confirmation')}}">
 				</div>
 			</div>
 			@error('password_confirmation')
 			<p style="color: red;font-size:0.7rem">{{$message}}</p>
 			@enderror
 			<div class="form-group">
 				<label class="form-check-label"><input type="checkbox"> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
 			</div>
 			<div class="form-group">
 				<button type="submit" class="btn btn-primary btn-lg">Sign Up</button>
 			</div>
 		</form>
 		<div class="text-center">Already have an account? <a href="#">Login here</a></div>

 	</div>


 
 	 
 
	
  
     @if(isset($input))
 	<div class="container">
 		<table class="table ">
 			<thead>
 				<tr class="table-secondary">
 					
 					<th scope="col">Full Name</th>
 					<th scope="col">Email</th>
 					<th scope="col">Mobile</th>
					 
 					
 				</tr>
 			</thead>
 			<tbody>
			
 				<tr class="table-light">
 					<th scope="row">{{$input['fullname']}}</th>
 					<td>{{$input['email']}}</td>
 					<td>{{$input['mobile']}}</td>
 					
 				</tr>
				
 			</tbody>
 		</table>
         @endif	
		 
		 
 		<!--main end-->
 	</div>
 </body>

 </html>