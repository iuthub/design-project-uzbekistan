@extends('layout.layout')
@section('content')

<section class="container-fluid home-background">
	<div class="row">

	<div class="container">



		<div class="row">
			<div class="container">
				<p class="welcome">WELCOME</p>
				<p class="uzbekistan gold">to Uzbekistan</p>
				<p class="motto gold">the place whith sightseeng view </p>
			</div>
		</div>

		<div class="row">
			<div class="container">
				<div class="form-search mx-auto">
					<form action="">
						<input type="text" class="search-input" placeholder="Search among the country">
						<button class="submit"><i class="fas fa-search"></i></button>
					</form>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="container">
				<p class="center"><a href="#" class="discover">Discover</a></p>
			</div>
		</div>
	</div>

</div>
</section>
<!-- /HOME-BG -->

<section class="container-fluid home-second">
	<div class="row">
		<div class="gold-line">
		</div>
	</div>

		<div class="container">
				<div class="row">

					<div class="col-lg-6 col-md-6 col-sm-12 col-12 offset-lg-1 offset-md-1">
						<p class="page-title">THE GREAT <br> <span class="gold">HISTORY OF UZBEKISTAN</span></p>
					</div>

				</div>
				<div class="row article">
					<article class="col-lg-6 col-md-6 col-sm-12 col-12">
						<p class="article-text text-justify" >
							The first people known to have inhabited Central Asia were Scythians who came from the northern grasslands of what is now Uzbekistan, sometime in the first millennium BC when these nomads settled in the region they built an extensive irrigation system along the rivers At this time, cities such as Bukhoro (Bukhara) and Samarqand (Samarkand) emerged as centres of government and high culture. By the fifth century BC, the Bactrian, Soghdian, and Tokharian states dominated the region. As China began to develop its silk trade with the West, Iranian cities took advantage of this commerce by becoming centres of trade. Using an extensive network of cities and rural settlements in the province of Transoxiana, and further east in what is today China's Xinjiang Uygur Autonomous Region, the Sogdian intermediaries became the wealthiest of these Iranian merchants. As a result of this trade on what became known as the Silk Route, Bukhara and Samarkand eventually became extremely wealthy cities, and at times Transoxiana (Mawarannahr) was one of the most influential and powerful Persian provinces of antiquity
						</p>
					</article>

					<article class="col-lg-6 col-md-6 col-sm-12 col-12">
						<p class="article-text text-justify">
							In 327 BC Macedonian ruler Alexander the Great conquered the Persian Empire provinces of Sogdiana and Bactria, which contained the territories of modern Uzbekistan. A conquest was supposedly of little help to Alexander as popular resistance was fierce, causing Alexander's army to be bogged down in the region that became the northern part of the Macedonian Greco-Bactrian Kingdom. The kingdom was replaced with the Yuezhi dominated Kushan Empire in the 1st century BC. For many centuries the region of Uzbekistan was ruled by the Persian empires, including the Parthian and Sassanid Empires, as well as by other empires, for example those formed by the Turko-Persian Hephthalite and Turkic Gokturk peoples.
						</p>
						<div class="quotation">
							<p class="quotation-p">
								"Strength in justice"
							</p>
							<p class="quotation-author">Amir Temur</p>
					</div>
					</article>
				</div>


</section>

<div class="container read">
	<div class="row">
		<div class="read-more ml-auto">
			<a href="" class="ml-auto"><i class="fas fa-ellipsis-h"></i> Read More</a>
		</div>
	</div>
</div> <!-- READ MORE -->

<section class="container-fluid home-third">
	<div class="row">
		<div class="gold-line ml-auto">
		</div>
	</div>

	<div class="container">
		<div class="row">

			<div class="col-lg-6 col-md-6 col-sm-12 ml-auto">
				<p class="page-title">THE BEAUTINESS <br> <span class="gold">OF CULTURE</span></p>
			</div>

		</div>
		<div class="row article">
			<article class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
				<p class="article-text text-justify" >
					Uzbekistan has a wide mix of ethnic groups and cultures, with the Uzbek being the majority group. In 1995 about 71% of Uzbekistan's population was Uzbek. The chief minority groups were Russians (8%), Tajiks (5–30%), Kazakhs (4%), Tatars (2.5%) and Karakalpaks (2%). It is said, however, that the number of non-Uzbek people living in Uzbekistan is decreasing as Russians and other minority groups slowly leave and Uzbeks return from other parts of the former Soviet Union.
					<br>
					When Uzbekistan gained independence in 1991, there was concern that Muslim fundamentalism would spread across the region. The expectation was that a country long denied freedom of religious practice would undergo a very rapid increase in the expression of its dominant faith. As of 1994, over half of Uzbekistan's population was said to be Muslim, though in an official survey few of that number had any real knowledge of the religion or knew how to practice it. However, Islamic observance is increasing in the region.
				</p>
			</article>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">

				<div class="image-block" style="background-image: url(storage/img/suzani.jpg);">
				</div>

			</div>
		</div>

		<div class="row">

			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
				<div class="sub-navigation">
					<ul class="sub-nav">
						<li class="active"><button id="music">Music</button></li>
						<li><button id="education">Education</button></li>
						<li><button id="holidays">Holidays</button></li>
						<li><button id="cuisine">Cuisine</button></li>
						<li><button id="sport">Sport</button></li>
					</ul>
				</div>
				<div class="sub-content music">
					<p class="sub-content-text text-justify">
						Central Asian classical music is called Shashmaqam, which arose in Bukhara in the late 16th century when that city was a regional capital. Shashmaqam is closely related to Azerbaijani Mugam and Uyghur muqam. The name, which translates as six maqams refers to the structure of the music, which contains six sections in six different Musical modes, similar to classical Persian traditional music. Interludes of spoken Sufi poetry interrupt the music, typically beginning at a lower register and gradually ascending to a climax before calming back down to the beginning tone.
					</p>
					<div class="controls-player">

						<button class="play">
							<i class="fas fa-play"></i>
							Play Glyukoza
						</button>
						<button class="pause" style="display: none">
							<i class="fas fa-pause"></i>
							Pause Glyukoza
						</button>

					</div>
					<audio controls src="storage/tune/gljukoza_-_ja_nenavizhu_tebja_(zf.fm).mp3" id="player" class="player"></audio>

				</div>
			</div>

			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
				<div class="image-block" style="margin-top: 40px; height: 300px; background-image: url(storage/img/1579.jpg); background-size: contain; background-repeat: no-repeat">
				</div>
			</div>

		</div>
	</div>
</section>

<div class="container read">
		<div class="row">
			<div class="read-more ml-auto">
				<a href="music" class="ml-auto"><i class="fas fa-ellipsis-h"></i> Read More</a>
			</div>
		</div>
	</div> <!-- READ MORE -->

<section class="container-fluid home-fourth" id="services">
	<div class="row">
		<div class="container">
			<p class="home-fourth-heading text-center">
				<img src="storage/img/logo_uzb_grey.svg" alt="">
				<span> / <i class="fas fa-ticket-alt"></i> Services</span>
			</p>
	</div>
	</div>
	<div class="row justify-content-center">

			<div class="col-xs-3 col-lg-3 col-md-3 col-sm-12 col-12 serv">
				<div class="serv">
					<div class="serv-logo mx-auto">
						<img src="storage/img/icons/taxi.svg" alt="">
					</div>
					<p class="serv-description text-justify">
						Book your taxi in a flash. How about a 5-Star Taxi? Or one with a regular driver? Book now – or in advance. And watch it arrive in real time – on your phone
					</p>
					<div class="serv-order">
						<a href="" class="serv-order-btn text-center">
							ORDER
						</a>
					</div>
				</div>
			</div>

			<div class="col-xs-3 col-lg-3 col-md-3 col-sm-12 col-12 serv">
				<div class="serv">
					<div class="serv-logo mx-auto">
						<img src="storage/img/icons/hotel.svg" alt="">
					</div>
					<p class="serv-description text-justify">
						European cuisine and local specialities are served in the elegant restaurant with grand piano. The Vena café-bar offers a range of hot and cold drinks, and there is also a snack bar on site.
					</p>
					<div class="serv-order">
						<a href="" class="serv-order-btn text-center">
							ORDER
						</a>
					</div>
				</div>
			</div>

			<div class="col-xs-3 col-lg-3 col-md-3 col-sm-12 col-12 serv">
				<div class="serv">
					<div class="serv-logo mx-auto">
						<img src="storage/img/icons/restaurant.svg" alt="">
					</div>
					<p class="serv-description text-justify">
						Make online reservations, read restaurant reviews from diners, and earn points towards free meals. OpenTable is a real-time online reservation network for fine dining restaurants.
					</p>
					<div class="serv-order">
						<a href="" class="serv-order-btn text-center">
							ORDER
						</a>
					</div>
				</div>
			</div>

		<!-- </div> -->
	</div>
</section>
<section class="container-fluid home-fourth" id="guide" style="height: 100vh">
	<div class="row">
		<div class="container">
			<p class="home-fourth-heading text-center">
				<img src="storage/img/logo_uzb_grey.svg" alt="">
				<span> / <i class="fas fa-compass"></i> Guide</span>
			</p>
		</div>
	</div>

	<div class="row category">
		<div class="container">
			<div class="category-block">
				<form action="">
					<select name="" id="">
						<option value="" selected disabled>Region/City</option>
						<option value="">Tashkent City</option>
						<option value="">Tashkent Reg</option>
						<option value="">Samarkand</option>
						<option value="">Bukhara</option>
						<option value="">Khiva</option>
						<option value="">Fergana</option>
						<option value="">Andijon</option>
					</select>
					<select name="" id="">
						<option value="" selected disabled>District</option>
						<option value="">Mirzo Ulugbek</option>
						<option value="">Uchtepa</option>
						<option value="">Mirabad</option>
						<option value="">Sergeli</option>
						<option value="">Chilonzor</option>
						<option value="">Yashnabod</option>
						<option value="">Shaykhantaur</option>
					</select>
					</select>
					<select name="" id="">
						<option value="" selected disabled>Type</option>
						<option value="">Entertainment</option>
						<option value="">Exhibition</option>
						<option value="">Concert</option>
						<option value="">Theater</option>
						<option value="">Cinema</option>
						<option value="">Museum</option>
						<option value="">Bazaars</option>
						<option value="">Shopping Halls</option>
					</select>
					</select>
					<select name="" id="">
						<option value="" selected disabled>Purpose</option>
						<option value="">All kind</option>
						<option value="">For Youngs</option>
						<option value="">Dress Code</option>
						<option value="">Open Air</option>
						<option value="">Live Music</option>
						<option value="">Noisy</option>
						<option value="">For Walk</option>
					</select>
				</form>
			</div>
		</div>
		<div class="container" style="min-height: 100vh">
			<div class="category-guide">
				<div class="owl-two owl-carousel owl-theme">
					<div class="owl-carousel-item" style="background-image: url('storage/img/0233654_b.jpg');">
						<!-- <img src="img/0233654_b.jpg" alt=""> -->
						<div class="title">
							<p class="title-name">"Retro Fusion House"</p>
							<p class="title-description">
								The Retro Fusion House restaurant is a restaurant with a fusion kitchen that looks like an illustrated book - whimsical ceiling patterns, different chandeliers, completely different from each other, colored velvet sofas, high, royal, armchairs.
							</p>
							<a href="" class="title-link">VIEW</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="container-fluid home-fourth" id="register" style="min-height: 100vh">

	<div class="row">
		<div class="container">
			<p class="home-fourth-heading text-center">
				<img src="storage/img/logo_uzb_grey.svg" alt="">
				<span> / <i class="fas fa-user-circle"></i> Log In</span>
			</p>
		</div>
	</div>
	<div class="container">
	<div class="row">
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 login-left">
				<p class="login-left-text">
				One way to control your trip is to be authorized in our service. We provide you Personal Cabinet where you can manage your journey in our country.
				<br><br>
				Also we will happy to organize for you <span class="gold">Guide</span> and other services such as:
				<br>
			</p>
			<ul class="login-left-list gold">
				<li>Ordering Taxi</li>
				<li>Booking Hotel</li>
				<li>Reserving Restaurants</li>
			</ul>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
					<div class="login-right">
						<p class="login-right-heading text-center">
							SIGN IN
						</p>
						<form action="">
							<input type="text" class="input" placeholder="e-Mail or Login">
							<input type="password" class="input" placeholder="Password">
							<p><a href="">forgot password </a><input type="submit" class="submit" value="Sign in"></p>
						</form>
					</div>
					<br><hr>
					<div class="login-right">
						<p class="login-right-heading text-center">
							REGISTRATION
						</p>
						<form action="">
							<input type="text" class="input" placeholder="e-Mail or Login">
							<input type="password" class="input" placeholder="Password">
							<input type="password" class="input" placeholder="Confirm Password">
							<p><input type="submit" class="submit" value="Sign Up"></p>
						</form>
					</div>
			</div>
		</div>
	</div>
</section>
<script src="{{ URL::asset('js/scripts.min.js') }}">

</script>
<script>
	$('.owl-two').owlCarousel({
		 loop:true,
		 responsiveClass:true,
		 mouseDrag: true,
		 touchDrag: true,
		 margin: 10,
		 responsive:{
				 0:{
						 items:1,
						 nav: true
				 },
				 600:{
						 items:1,
						 nav: true
				 },
				 1000:{
						 items:1,
						 nav: true
				 }
		 }
 });
</script>

@endsection