<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link
			href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
			rel="stylesheet"
			integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6"
			crossorigin="anonymous"
		/>
		<link
			rel="stylesheet"
			href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
			integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
			crossorigin="anonymous"
		/>
		<link
			rel="stylesheet"
			href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
			integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
			crossorigin="anonymous"
		/>
		<link
			rel="stylesheet"
			href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
			integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
			crossorigin="anonymous"
		/>
		<link rel="stylesheet" href="style.css" />

        <title>Fingerstyle China</title>
       <?php
        //require mysql connection

        require('functions.php')
        ?>

	</head>
	<body>
		<header id="header">
			<div
				class="strip d-flex justify-content-between px-4 py-1 bg-light"
			>
				<p class="dm font-big text-black-50 m-0">typing somehting</p>
				<div class="mont font-small">
					<a href="#" class="px-3 border-right border-left text-dark"
						>Login</a
					>
					<a href="#" class="px-3 border-right border-left text-dark"
						>Wishlist</a
					>
				</div>
			</div>

			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<a class="navbar-brand" href="#">Fingerstyle China</a>
				<button
					class="navbar-toggler"
					type="button"
					data-toggle="collapse"
					data-target="#navbarNav"
					aria-controls="navbarNav"
					aria-expanded="false"
					aria-label="Toggle navigation"
				>
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav m-auto sand">
						<li class="nav-item active">
							<a class="nav-link" href="#"
								>Home <span class="sr-only">(current)</span></a
							>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#"
								>Features<i
									class="fas fa-chevron-down dark-font"
								></i>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Pricing</a>
						</li>
						<li class="nav-item">
							<a class="nav-link disabled" href="#">Disabled</a>
						</li>
					</ul>
					<form class="mont font-small">
						<a class="py-2 rounded-pill green-bg">
							<span class="font-big px-2 light-font">
								<i class="fas fa-shopping-cart dark-font"></i
							></span>
							<span
								class="px-3 py-2 rounded-pill dark-font light-bg"
								>0</span
							>
						</a>
					</form>
				</div>
			</nav>
        </header>
        		<main id="main-site">