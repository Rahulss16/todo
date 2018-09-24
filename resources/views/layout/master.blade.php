<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Todos</title>
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome/css/font-awesome.min.css')}}">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
	
	<style>
	    html, body {
	        background-color: #fff;
	        color: #636b6f;
	        font-family: 'Raleway', sans-serif;
	        font-weight: 100;
	        height: 100vh;
	        margin: 0;
	    }

	    .full-height {
	        height: 100vh;
	    }

	    .position-ref {
	        position: relative;
	    }

	    .top-right {
	        position: absolute;
	        right: 10px;
	        top: 18px;
	    }

	    .content {
	        text-align: center;
	        margin: 50px auto;
	        min-height: 450px;
	    }

	    .title {
	        font-size: 24px;
	    }

	    .links > a {
	        color: #636b6f;
	        padding: 0 25px;
	        font-size: 12px;
	        font-weight: 600;
	        letter-spacing: .1rem;
	        text-decoration: none;
	        text-transform: uppercase;
	    }

	    .m-b-md {
	        margin-bottom: 30px;
	    }
	</style>
</head>
<body>
	<div class="container">
		@if(Session::has('success'))

			<div class="alert alert-success" role="alert">
				{{Session::get('success')}}
			</div>

		@endif
		
		<div class="position-ref full-height">
		    
		    <div class="content">
		        
		            @yield('data');
		        
		        
		    </div>
		</div>

	</div>
			
	<script src="{{asset('js/jquery.min.js')}}"></script>
	<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
	
</body>
</html>