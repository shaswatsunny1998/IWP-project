<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<script src="js/test.js" type="text/javascript"></script>
	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
</head>
<body>
	<script>

	function openMenu() {
		$('.js-menu-container').addClass('is-open');
	}


	function closeMenu() {
		$('.js-menu-container').removeClass('is-open'); 
	}



	jQuery(document).ready(function($){

		$('.js-menu-button').click(function(){ 
			openMenu(); 
		});

		$('.js-menu-close').click(function(){ 
			closeMenu(); 
		});

	});

	jQuery(document).keyup(function(e) { 

		if (e.keyCode === 27) {

			if ($('.js-menu-container').hasClass('is-open')) { 
				closeMenu(); 
			}

		}

	});
	</script>
<div class="fullscreen-menu-container js-menu-container">

    		<a class="menu-button js-menu-close">
				<div class="menu-icon is-active">
					<span></span>
					<span></span>
					<span></span>
				</div>
			</a>

			<div class="fullscreen-menu">

				<div class="fullscreen-menu__image-container"></div>

				<h1 class="fullscreen-menu__title">Our Hotel</h1>

				<nav class="fullscreen-menu__nav">
					<ul>

						<li>
							<a href="#">Home</a>
						</li>
						<li>
							<a href="selection.php">Book Room</a>
						<li>
              				<a href="comment.php">See Feedbacks</a>
            			</li>
						<li>
							<a href="signup.php">Sign up</a>
						</li>
						<li>
							<a href="login.php">Sign in</a>
						</li>
						<li>
							<a href="payment.php"> Payment </a>
						</li>

					</ul>
				</nav>

			</div>

    	</div>

		<article class="card">

			<aside class="card__image-container">

				<a class="menu-button js-menu-button">
					<div class="menu-icon">
						<span></span>
						<span></span>
						<span></span>
					</div>
				</a>

				<img class="card__image" src="css/image/hotel.jpg">

			</aside>

			<section class="card__contents">

				<header class="card__header">
					<h1 class="card__title">Our Hotel</h1>
				</header>

				<section class="card__body">
					<p>A hotel is an establishment that provides paid lodging on a short-term basis. Facilities provided may range from a modest-quality mattress in a small room to large suites with bigger, higher-quality beds, a dresser, a refrigerator and other kitchen facilities, upholstered chairs, a flat screen television, and en-suite bathrooms. Small, lower-priced hotels may offer only the most basic guest services and facilities. Larger, higher-priced hotels may provide additional guest facilities such as a swimming pool, business centre (with computers, printers, and other office equipment), childcare, conference and event facilities, tennis or basketball courts, gymnasium, restaurants, day spa, and social function services. Hotel rooms are usually numbered (or named in some smaller hotels and B&Bs) to allow guests to identify their room. Some boutique, high-end hotels have custom decorated rooms. Some hotels offer meals as part of a room and board arrangement.</p>

					<p>Most hotel establishments are run by a General Manager who serves as the head executive (often referred to as the "Hotel Manager"), department heads who oversee various departments within a hotel (e.g., food service), middle managers, administrative staff, and line-level supervisors. The organizational chart and volume of job positions and hierarchy varies by hotel size, function and class, and is often determined by hotel ownership and managing companies.</p>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.996631881488!2d79.15737857917055!3d12.97206699090033!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bad479f0ccbe067%3A0xfef222e5f36ecdeb!2sVellore%20Institute%20of%20Technology!5e0!3m2!1sen!2sin!4v1573159081108!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
				</section>

			</section>

		</article>
		<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>

</body>
</html>