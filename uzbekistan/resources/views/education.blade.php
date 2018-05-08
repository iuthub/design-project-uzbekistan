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
					 <h1 class="general">Education</h1>

					 <p>
						 In Uzbekistan, twelve years of primary and secondary education are obligatory, starting at age six. This requirement includes four years of primary school and two cycles of secondary school, lasting five and three years, respectively. The rate of attendance in those grades is high, although the figure is significantly lower in rural areas than in urban centers. Preschool registration has decreased significantly since 1991.[1]

						 The official literacy rate is 99 percent. However, in the post-Soviet era educational standards have fallen. Funding and training have not been sufficient to effectively educate the expanding younger cohorts of the population. Between 1992 and 2004, government spending on education dropped from 12 percent to 6.3 percent of gross domestic product.[1] In 2006 education’s share of the budget increased to 8.1 percent. Lack of budgetary support has been more noticeable at the primary and secondary levels, as the government has continued to subsidize university students. [1]

						 Between 1992 and 2001, university attendance dropped from 19 percent of the college-age population to 6.4 percent. The three largest of Uzbekistan’s 63 institutions of higher learning are in Nukus, Samarkand, and Tashkent. All are state-funded. Private schools have been forbidden since the establishment of Islamic fundamentalist (Wahhabi) schools in the early 1990s brought a government crackdown. However, in 1999 the government-supported Taskhent Islamic University was founded for the teaching of Islam.[1]

						 Among higher educational institutions, the highest rated at domestic level are Tashkent Financial Institute and Westminster International University in Tashkent. The first one was established by the initiative of the first president of Uzbekistan in 1991. Later in 2002, in collaboration with the University of Westminster (UK) and “UMID” Foundation of the President of the Republic of Uzbekistan, Westminster International University in Tashkent was established. Currently these universities are regarded as the best in its sphere of education both in Uzbekistan and Central Asian countries.
					 </p>

				 </div>
				 <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 image-content">
					 <img src="storage/img/about/educationdoctors.jpg" alt="general">
					 <img src="storage/img/about/educationsystem.jpg" alt="general">
				 </div>

			 </div>
		 </div>
	 </div>
 <script src="{{ URL::asset('js/scripts.min.js') }}"></script>
@endsection