@extends('layout.layout')
@section('content')
<div class="container-fluid" style="height: 50px; width: 100%; box-shadow: 10px 0 5px silver;position: fixed; top: 0; background-color: white; z-index: 3">
		<div class="row">

		</div>
	</div>

	 <div class="gold-line">

   	</div>

    <div class="container">
    	<div class="row justify-content-between">
            <div class="col-lg-6 col-md-6 col-sm-6 offset-lg-1 offset-md-1 headings">
    			<p class="headings-title">THE BEAUTINESS<br><span>OF CULTURE</span></p>
    		</div>
    		<div class="col-lg-2 col-md-4 col-sm-4 icons">

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
						<h1 class="general">Holidays</h1>

				 <p>Navruz (New day) is celebrated on March 21, the day of vernal equinox. This day Uzbek families cook national dishes such as sumalyak, pilaf, samsa and others. This holiday symbolizes friendship, unity and brotherhood of all peoples. That is why, this day people must forgive each other, not quarrel, as well as help the poor men. According to tradition, all this brings home good luck, prosperity and well-being. People visit their relatives and friends, sing songs, as well as wish the New Year to be prosperous. The Uzbeks who live in villages arrange traditional competitions and games.<br><br>
 				Ramazan Hait is celebrated on the 9 month Hijri on Muslim calendar. It is a celebration of moral and spiritual purification. After fasting-day – Uraza, which lasts 30 days, is celebrated Ramazan Hait. During Uraza it is not allowed to eat, drink and take pleasure. But after sunset and before sunrise it is allowed to eat and drink. All believers must respect each other and avoid bad thoughts. After this people celebrate Ramazan Hait. The holiday lasts for three days.
				The greatest holiday, celebrated by Muslims, is Kurban Hait holiday. There is a legend, once one of the ancestors of the peoples of northern Arabia Ibrahim saw Allah in his dream, who told him to bring to sacrifice his son Ishmael. When he was ready to kill the boy, Allah was sure in his devotion and told him to bring him a lamb. So, this day every faithful Muslim sacrifices a sheep or lamb. This day Uzbek families cook different dishes visit their relatives and friends.<br><br>
				There are also other holidays in Uzbekistan: New Year is celebrated on January 1, Day of Defenders of Motherland - January 14, International Women's Day - March 8, Memorial Day - May 9, Independence Day of the Republic of Uzbekistan - September 1, Teacher's Day - October 1, Constitution Day - December 8.
						</p>

					</div>
	                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 image-content">
		                <img src="storage/img/about/navruz.jpg" alt="general">
		                <img src="storage/img/about/ramadan.jpg" alt="general">
		                <img src="storage/img/about/hotira.jpg" alt="general">
	                </div>

				</div>
			</div>
		</div>
	<script src="{{ URL::asset('js/scripts.min.js') }}"></script>
@endsection