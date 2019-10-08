<body>
	<!-- main banner -->
	<div class="main-top" id="home">
		<!-- header -->
		<header>
			<div class="container-fluid">
				<div class="header d-md-flex justify-content-between align-items-center py-3 pl-2">
					<!-- logo -->
					<div id="logo">
						<h1><a href="/">Food Blog</a></h1>
					</div>
					<!-- //logo -->
					<!-- nav -->
					<div class="nav_w3ls">
						<nav>
							<label for="drop" class="toggle">Menu</label>
							<input type="checkbox" id="drop" />
							<ul class="menu">
								<li><a href="{{ route('home') }}" class="nav-style">Home</a></li>
								<li><a href="{{ route('blog') }}" class="nav-style">Blog</a></li>
                                <li><a href="{{ route('about') }}" class="nav-style">About Us</a></li>
								<li><a href="{{ route('contact') }}" class="nav-style">Contact Us</a></li>

							</ul>
						</nav>
					</div>
					<!-- //nav -->
				</div>
			</div>
		</header>
		<!-- //header -->

		<!-- banner -->
		<div class="banner_w3lspvt-2">
			<div class="container">
				<div class="d-flex style-w3layouts">
					<h4 class="inner-style-w3pvts mr-auto text-wh text-uppercase">About Us</h4>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="index.html">Home</a></li>
						<li class="breadcrumb-item" aria-current="page">About Page</li>
					</ol>
				</div>
			</div>
		</div>
		<!-- //banner -->
	</div>
