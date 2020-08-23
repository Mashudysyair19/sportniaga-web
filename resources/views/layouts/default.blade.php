<!DOCTYPE html>
<html>
<head>
	@include('includes.head')
</head>
<body>
	<header class="header">
		@include('includes.header')
	</header>
	<div id="main" class="row-cols-3 container-fluid">
		@yield('preview')
		@yield('content')
	</div>
	<footer class="footer">
		@include('includes.footer')
	</footer>
</body>
</html>