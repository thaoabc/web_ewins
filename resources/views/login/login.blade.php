<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>

<head>
<title> Master login Form Responsive Widget Template  :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content=" Master  Login Form Widget Tab Form,Login Forms,Sign up Forms,Registration Forms,News letter Forms,Elements"/>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<base href="{{ asset('') }}">
<link href="css/styles.css" rel="stylesheet" type="text/css" media="all" />
<link href="//fonts.googleapis.com/css?family=Cormorant+SC:300,400,500,600,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
</head>

<body>
	<div class="padding-all">
		<div class="header">
			<h1>Master  Login Form</h1>
		</div>

		<div class="design-w3l">
			<div class="mail-form-agile">
				<form method="post">
					@csrf
						@if (session('thongbao'))
						 {{-- <div class="alert alert-danger" role="alert">
							 <strong>{{ session('thongbao') }}</strong>
						 </div> --}}
								<script>
									alert('{{ session('thongbao') }}');
								</script>
						@endif
					<input type="text" name="name" placeholder="User Name  or  email..." value="{{ old('name') }}" />
						@if ($errors->has('name'))
							<script>
								alert('{{ $errors->first('name') }}');
							</script>
						@endif
					<input type="password"  name="password" class="padding" placeholder="Password"/>
						@if ($errors->has('password'))
							<script>
									alert('{{ $errors->first('password') }}');
							</script>
						@endif
					{{-- <button type="submit">Login</button> --}}
					<input type="submit" value="login">
				</form>
			</div>
		  <div class="clear"> </div>
		</div>
		
		<div class="footer">
		<p>© 2019 Master  Login form. All Rights Reserved | Design by  <a href="https://w3layouts.com/" >  w3layouts </a></p>
		</div>
	</div>
</body>
</html>