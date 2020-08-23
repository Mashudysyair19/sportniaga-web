<!DOCTYPE html>
<html>
<head>
	@include('includes.head')
</head>
<body>
	<header class="header">
		<nav class="navbar navbar-expand-sm navbar-dark justify-content-center bg-dark">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="#">Dashboard</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Transaksi</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Statistik</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Obrolan</a>
				</li>
			</ul>
		</nav>
	</header>
	<div id="main" class="row-cols-3 container">
		@yield('content')
	</div>
</body>
</html>