@extends('layout.layout')
@section('content')
<div class="gold-line">
	</div>

 <div class="container">
	 <div class="row justify-content-between">
 <div class="col-lg-6 col-md-6 col-sm-12 col-12 offset-lg-1 offset-md-1 headings">
			 <p class="headings-title">THE BEAUTINESS<br><span>OF CULTURE</span></p>
		 </div>
		 <div class="col-lg-2 col-md-4 col-sm-12 col-12 icons">
			 <a class="icons-style" href=""><i class="far fa-paper-plane" ></i></a>
			 <a class="icons-style" href=""><i class="fab fa-facebook-f"></i></a>
			 <a class="icons-style" href=""><i class="fab fa-twitter"></i></a>
			 <a class="icons-style" href=""><i class="fab fa-instagram"></i></a>
		 </div>

	 </div>
	 <div class="row">
		 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 carousel">

			 <div class="owl-one owl-carousel" >

			   <div class="image-block">
			   <a class="carousel-link" href="sport"><img class="image" src="storage/img/about/sport2.jpg" alt="general"><p>Sport</p></a>

			   </div>
			   <div class="image-block">
				   <a class="carousel-link" href="education"><img src="storage/img/about/postgraduates.jpg" alt="general"><p>Education</p></a>
			   </div>
			   <div class="image-block">
				<a class="carousel-link" href="cuisine"><img src="storage/img/about/cuisine.jpg" alt="general"><p>Cuisine</p></a>
			   </div>
			   <div class="image-block">
				   <a class="carousel-link" href="holidays"><img src="storage/img/about/holiday2.jpg" alt="general"><p>Holidays</p></a>
			   </div>
			   <div class="image-block">
				   <a class="carousel-link" href="music"><img src="storage/img/about/musical.jpg" alt="general"><p>Music</p></a>
			   </div>
			   <div class="image-block">
				   <a class="carousel-link" href="content"><img src="storage/img/about/general1.jpg" alt="general"><p>General</p></a>
			   </div>

			 </div>
		 </div>
	 </div>

		 <div class="row">

				 <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 info">
					 <h1 class="general">General</h1>

					 <p>Uzbekistan has a wide mix of ethnic groups and cultures, with the Uzbek being the majority group. In 1995 about 71% of Uzbekistan's population was Uzbek. The chief minority groups were Russians (8%), Tajiks (5–30%), Kazakhs (4%), Tatars (2.5%) and Karakalpaks (2%). It is said, however, that the number of non-Uzbek people living in Uzbekistan is decreasing as Russians and other minority groups slowly leave and Uzbeks return from other parts of the former Soviet Union.<br>When Uzbekistan gained independence in 1991, there was concern that Muslim fundamentalism would spread across the region. The expectation was that a country long denied freedom of religious practice would undergo a very rapid increase in the expression of its dominant faith. As of 1994, over half of Uzbekistan's population was said to be Muslim, though in an official survey few of that number had any real knowledge of the religion or knew how to practice it. However, Islamic observance is increasing in the region.<br>The main contribution to the development was made by ancient Iranians, nomad Turkic tribes, Arabs, Chinese, Russians. Traditions of multinational Uzbekistan reflected in the music, dances, fine art, applied arts, language, cuisine and clothing. Population of the republic, especially rural population revere traditions deeply rooted in the history of the country.
					 The Great Silk Road played a great role in the development of Uzbekistan culture. Being the trade route, it ran from China to two destinations: first one was to Ferghana Valley and Kazakh steppes and second route led to Bactria, and then to Parthia, India and Middle East up to Mediterranean Sea. The Silk Road favored to exchange not only goods, but also technologies, languages, ideas, religions. Thereby the Great Silk Road led to the spread of Buddhism on the territory of Central Asia, where you still may find traces of Buddhist culture: Adjina-tepe in Tadjikistan, Buddhist temple in Kuva, Ferghana valley, Fayaz-Tepa near Termez in Uzbekistan and etc.<br>
					 </p>

				 </div>
				 <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 image-content">
					 <img src="storage/img/about/general.jpg" alt="general">
					 <img src="storage/img/about/kelin-salom.jpg" alt="general">
				 </div>

			 </div>
		 </div>
	 </div>
	<script src="{{ URL::asset('js/scripts.min.js') }}"></script>
@endsection