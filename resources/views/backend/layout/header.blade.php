<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="{{asset('adminhub/style.css')}}">

	<link rel="icon" href="{{asset('images/icon/smea.ico')}}">



	<title>AdminHub</title>
</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bxs-smile'></i>
			<span class="text">AdminHub</span>
		</a>
		<ul class="side-menu top">
				
			
			<li class="{{request()->is('administrator') ? 'active' : ''}}">
				<a href="administrator">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="navbar">
					<i class='bx bxs-navigation' ></i>
					<span class="text">Navbar</span>
				</a>
			</li>
			<li>
				<a href="head">
					<i class='bx bx-heading'></i>
					<span class="text">Heading</span>
				</a>
			</li>
			<li>
				<a href="about">
					{{-- <i class='bx bxs-doughnut-chart' ></i> --}}
					<i class='bx bxs-user-voice'></i>
					<span class="text">About Me</span>
				</a>
			</li>
			<li>
				<a href="mail">
					<i class='bx bxs-chat' ></i>
					<span class="text">Mail</span>
				</a>
			</li>
			<li>
				<a href="graduate">
					<i class='bx bxs-graduation' ></i>
					<span class="text">Graduate</span>
				</a>
			</li>
			<li>
				<a href="article">
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="text">Article</span>
				</a>
			</li>
			<li>
				<a href="footer">
					<i class='bx bxs-graduation' ></i>
					<span class="text">Footer</span>
				</a>
			</li>
		</ul>


		<ul class="side-menu top">
			<li>
				<a href="setting">
					<i class='bx bxs-cog' ></i>
					<span class="text">Settings</span>
				</a>
			</li>
			<li>
				<a href="#" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>

	</section>
	
	
	<!-- SIDEBAR -->

  @yield('content')

	
	

	<script src="{{asset('adminhub/script.js')}}"></script>
</body>
</html>