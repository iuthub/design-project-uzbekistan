@extends('layout.layout')
@section('content')
    <div class="gold-line">
        </div>

    <div class="container">
        <div class="row justify-content-between">
    <div class="col-lg-6 col-md-6 col-sm-12 col-12 offset-lg-1 offset-md-1 headings">
                <p class="headings-title">THE GREAT<br><span>HISTORY OF UZBEKISTAN</span></p>
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
                <a class="carousel-link" href="#"><img class="image" src="img/about/samarkand.jpg" alt="general"><p>Samarkand</p></a>

                </div>
                <div class="image-block">
                    <a class="carousel-link" href="#"><img src="img/about/Bukhara.jpg" alt="general"><p>Bukhara</p></a>
                </div>
                <div class="image-block">
                    <a class="carousel-link" href="#"><img src="img/about/khiva.jpg" alt="general"><p>Khorazm</p></a>
                </div>
                <div class="image-block">
                    <a class="carousel-link" href="#"><img src="img/about/tashkent1.jpg" alt="general"><p>Tashkent</p></a>
                </div>
                <div class="image-block">
                    <a class="carousel-link" href="#"><img src="img/about/navoiy.jpg" alt="general"><p>Navoiy</p></a>
                </div>

                <div class="image-block">
                    <a class="carousel-link" href="#"><img src="img/about/Fargona.jpg" alt="general"><p>Fargona</p></a>
                </div>

                </div>
            </div>
        </div>

            <div class="row">

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 info">
                        <h1 class="general">Uzbekistan</h1>

                        <p>The first people known to have inhabited Central Asia were Scythians who came from the northern grasslands of what is now Uzbekistan, sometime in the first millennium BC when these nomads settled in the region they built an extensive irrigation system along the rivers At this time, cities such as Bukhoro (Bukhara) and Samarqand (Samarkand) emerged as centres of government and high culture. By the fifth century BC, the Bactrian, Soghdian, and Tokharian states dominated the region. As China began to develop its silk trade with the West, Iranian cities took advantage of this commerce by becoming centres of trade. Using an extensive network of cities and rural settlements in the province of Transoxiana, and further east in what is today China's Xinjiang Uygur Autonomous Region, the Sogdian intermediaries became the wealthiest of these Iranian merchants. As a result of this trade on what became known as the Silk Route, Bukhara and Samarkand eventually became extremely wealthy cities, and at times Transoxiana (Mawarannahr) was one of the most influential and powerful Persian provinces of antiquity<br>
                        </p>

                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 image-content">
                        <img src="img/about/uzbekistan.jpg" alt="general">
                    <!--   <img src="img/about/kelin-salom.jpg" alt="general"> -->
                    </div>

                </div>
            </div>
        </div>
        <script src="{{ URL::asset('js/scripts.min.js') }}"></script>
@endsection