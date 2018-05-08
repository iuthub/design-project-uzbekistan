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
				   <a class="carousel-link" href="#"><img src="storage/img/about/postgraduates.jpg" alt="general"><p>Education</p></a>
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
					 <h1 class="general">Music</h1>

					 <p>
						 The music of what is now Uzbekistan has a very long and rich history.[3] Shashmaqam, a Central Asian classical music style, is believed to have arisen in the cities of Bukhara and Samarqand in the late 16th century. The term "shashmaqam" translates as six maqams and refers to the structure of music with six sections in different musical modes, similar to classical Persian traditional music. Interludes of spoken Sufi poetry interrupt the music, typically beginning at a low register and gradually ascending to a climax before calming back down to the beginning tone.

After Turkestan became part of tsarist Russia in the 19th century, first attempts were taken to record national melodies of Turkestan. Russian musicians helped preserve these melodies by introducing musical notation in the region.

In the 1950s, Uzbek folk music became less popular, and the genre was barred from radio stations by the Soviets. They did not completely dispel the music. Although banned, folk musical groups continued to play their music in their own ways and spread it individually.[4] After Uzbekistan gained independence from the USSR in the early 1990s, public interest revived in traditional Uzbek music. Nowadays Uzbek television and radio stations regularly play traditional music.

The people's Artist of Uzbekistan Turgun Alimatov is an Uzbek classical and folklore composer, and tanbur, dutar, and sato player. His compositions include "Segah", "Chorgoh", "Buzruk", "Navo", and "Tanovar". His image is associated with national pride and has been presented as the symbol of Uzbek classical music to the world.[5]
					 </p>

				 </div>
				 <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 image-content">
					 <img src="storage/img/about/uzbek-music3.jpg" alt="general">


				 </div>

			 </div>
		 </div>
	 </div>




 <script src="{{ URL::asset('js/scripts.min.js') }}"></script>
@endsection