@extends('layout.layout')
@section('content')
<div class="gold-line">

	</div>
 <div class="container-fluid" style="height: 50px; width: 100%; box-shadow: 10px 0 5px silver;position: fixed; top: 0; background-color: white; z-index: 3">
	 <div class="row">

	 </div>
 </div>

 <div class="container">
	 <div class="row justify-content-between">
 <div class="col-lg-6 col-md-6 col-sm-12 col-12 offset-lg-1 offset-md-1 headings">
			 <p class="headings-title">THE BEAUTINESS<br><span>OF CULTURE</span></p>
		 </div>
		 <div class="col-lg-2 col-md-4 col-sm-12 col-12 icons">
						 <i class="far fa-paper-plane icons-style" ></i>
						 <i class="fab fa-facebook-f icons-style"></i>
						 <i class="fab fa-twitter icons-style"></i>
						 <i class="fab fa-instagram icons-style"></i>
		 </div>

	 </div>
	 <div class="row">
		 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 carousel">

			 <div class="owl-carousel" >

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
				   <a class="carousel-link" href="#"><img src="storage/img/about/musical.jpg" alt="general"><p>Music</p></a>
			   </div>
			   <div class="image-block">
				   <a class="carousel-link" href="content"><img src="storage/img/about/general1.jpg" alt="general"><p>General</p></a>
			   </div>

			 </div>
		 </div>
	 </div>

		 <div class="row">

				 <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 info">
					 <h1 class="general">Sport</h1>

					 <p>
						 Kurash (translated as “attaining a goal by fair means”) is a kind of national waist belt fight, traditional among the Turkic peoples officially included in the world’s network of non-Olympic sports and supported by UNESCO. This kind of single combats originated in the territory of Uzbekistan presumably about 3,500 years ago. In the ancient legendary epos Alpomysh, kurash is mentioned as the most popular and favorite kinds of single combat. Whereas historian and philosopher Herodotus in his work “History”, described kurash in detail among other customs and traditions of ancient Uzbekistan.
						 Erik Peterson is a Canadian photographer living in Tashkent, Uzbekistan, where he’s been documenting Uzbek culture and traditions for the last few years. His photos capture unique moments of reunion and celebration, such as “Kopkari,” a national sport where the objective is for a rider to grab a beheaded goat and be the first of a large group of horsemen to throw it into a scoring circle .
						 <br><br>
						 Erik Peterson is a Canadian photographer living in Tashkent, Uzbekistan, where he’s been documenting Uzbek culture and traditions for the last few years. His photos capture unique moments of reunion and celebration, such as “Kopkari,” a national sport where the objective is for a rider to grab a beheaded goat and be the first of a large group of horsemen to throw it into a scoring circle .
					 </p>

				 </div>
				 <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 image-content">

					 <img src="storage/img/about/kurash.jpg" alt="general">
					 <img src="storage/img/about/kopkari.jpg" alt="general">

				 </div>

			 </div>
		 </div>
	 </div>
 <script src="{{ URL::asset('js/scripts.min.js') }}"></script>
@endsection