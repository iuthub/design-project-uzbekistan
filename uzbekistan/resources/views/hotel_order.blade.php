@extends('layout.layout')
@section('content')
<div class="gold-line">
	</div>

  <div class="container">
	  <div class="row justify-content-between">
		  <div class="col-lg-6 col-md-6 col-sm-12 col-12 offset-lg-1 offset-md-1 headings">
			  <p class="headings-title">BOOKING<br><span>A HOTEL</span></p>
		  </div>
		  <div class="col-lg-2 col-md-4 col-sm-12 col-12 icons">
			  <a class="icons-style" href=""><i class="far fa-paper-plane" ></i></a>
			  <a class="icons-style" href=""><i class="fab fa-facebook-f"></i></a>
			  <a class="icons-style" href=""><i class="fab fa-twitter"></i></a>
			  <a class="icons-style" href=""><i class="fab fa-instagram"></i></a>
		  </div>
	  </div>
	  <div class="row">
		  <div class="col-lg-6 col-md-6 col-sm-12 col-12 left-content">
			  
			  <div class="taxi-block">
				  <div class="taxi-logo">
					  <img src="storage/img/services/hyaat.jpg">

				  </div>
				  <div class="taxi-content"> 
					<h5 class="taxi-title">My Taxi</h5>
					<p class="taxi-info">MyTaxi is a quick and easy way of ordering a taxi. Cars are normally dispatched within 5-10 minutes and you can track their location on the map in real time.You can download application by pressing order button</p>
					<a href="https://play.google.com/store/apps/details?id=com.uznewmax.mytaxi&hl=en" class="order-link">Order</a>
				  </div>
			  </div>

			   <div class="taxi-block">
				  <div class="taxi-logo">
					  <img src="storage/img/services/plaza.jpg">
				  </div>
				  <div class="taxi-content"> 
					<h5 class="taxi-title">Yandex Taxi</h5>
					<p class="taxi-info">Yandex Taxi is a quick and easy way of ordering a taxi. Cars are normally dispatched within 5-10 minutes and you can track their location on the map in real time.You can download application by pressing order button</p>
					<a href="https://play.google.com/store/apps/details?id=com.uznewmax.mytaxi&hl=en" class="order-link">Order</a>
				  </div>
			  </div>

			  <div class="taxi-block">
				  <div class="taxi-logo">
					  <img src="storage/img/services/perkrestok.png">
				  </div>
				  <div class="taxi-content"> 
					<h5 class="taxi-title">Yandex Taxi</h5>
					<p class="taxi-info">The MyTaxi is a quick and easy way of ordering a taxi. Cars are normally dispatched within 5-10 minutes and you can track their location on the map in real time.You can download application by pressing order button</p>
					<a href="https://play.google.com/store/apps/details?id=com.uznewmax.mytaxi&hl=en" class="order-link">Order</a>
				  </div>
			  </div>

		  </div>
		  <div class="col-lg-6 col-md-6 col-sm-12 col-12 right-content">
				<div class="taxi-block">
				  <div class="taxi-logo">
					  <img src="storage/img/services/allo.jfif">
				  </div>
				  <div class="taxi-content"> 
					<h5 class="taxi-title">Allo Taxi</h5>
					<p class="taxi-info">The MyTaxi is a quick and easy way of ordering a taxi. Cars are normally dispatched within 5-10 minutes and you can track their location on the map in real time.You can download application by pressing order button</p>
					<a href="https://play.google.com/store/apps/details?id=com.uznewmax.mytaxi&hl=en" class="order-link">Order</a>
				  </div>
			  </div>

			  <div class="taxi-block">
				  <div class="taxi-logo">
					  <img src="storage/img/services/city.png">
				  </div>
				  <div class="taxi-content"> 
					<h5 class="taxi-title">Yandex Taxi</h5>
					<p class="taxi-info">The MyTaxi is a quick and easy way of ordering a taxi. Cars are normally dispatched within 5-10 minutes and you can track their location on the map in real time.You can download application by pressing order button</p>
					<a href="https://play.google.com/store/apps/details?id=com.uznewmax.mytaxi&hl=en" class="order-link">Order</a>
				  </div>
			  </div>

			
		  </div>

	  </div>
	<script src="{{ URL::asset('js/scripts.min.js') }}"></script>
@endsection
