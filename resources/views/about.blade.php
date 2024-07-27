@extends('layouts.app')

@section('title', 'About | ستار سبا')
@section('meta_description', 'Learn more about our ستار سبا application on the About page.')

@section('content')

<!-- /.main-header -->
<section class="page-header">
    <div class="page-header__bg"></div>
    <!-- /.page-header__bg -->
    <div class="container">
        <img src="{{ asset("/assets/images/shapes/page-header-s-1.png") }}" alt="About us" class="page-header__shape">
        <ul class="solox-breadcrumb list-unstyled">
            <li><a href="{{ url("index-2.html") }}">Home</a></li>
            <li><span>About</span></li>
        </ul><!-- /.thm-breadcrumb list-unstyled -->
        <h2 class="page-header__title">About us</h2>
    </div><!-- /.container -->
</section><!-- /.page-header -->

<section class="why-choose-two">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="why-choose-two__image">
					<img src="{{ asset("/assets/images/resources/why-choose-2-1.jpg") }}" alt="">
					<img src="{{ asset("/assets/images/resources/why-choose-2-2.jpg") }}" class="why-choose-two__image__two" alt="">
					<img src="{{ asset("/assets/images/shapes/why-choose-2-s-1.png") }}" class="why-choose-two__image__shape" alt="">
					<div class="why-choose-two__image__icon wow fadeInUp" data-wow-duration="1500ms">
						<img src="{{ asset("/assets/images/shapes/why-choose-2-s-2.png") }}" alt="">
					</div><!-- /.why-choose-two__icon -->
				</div><!-- /.why-choose-two__image -->
			</div><!-- /.col-lg-6 -->
			<div class="col-lg-6">
				<div class="why-choose-two__content">
					<div class="sec-title">
	
	<img src="{{ asset("/assets/images/shapes/sec-title-s-1.png") }}" alt="Get to know us" class="sec-title__img">
	
	
	<h6 class="sec-title__tagline">Get to know us</h6><!-- /.sec-title__tagline -->
	
	<h3 class="sec-title__title">best treatments for your mind</h3><!-- /.sec-title__title -->
</div><!-- /.sec-title -->
					<p class="why-choose-two__highlight">We offer a variety of facial services to suit your individual
						skin care needs.</p><!-- /.why-choose-two__highlight -->
					<p class="why-choose-two__text">There are many variations of passages of Lorem Ipsum available, but
						the majority have suffered alteration simply free text in some form, by injected humour.</p>
					<!-- /.why-choose-two__text -->
					<div class="why-choose-two__progress">
						<h4 class="why-choose-two__progress__title">Therapy</h4>
						<div class="why-choose-two__progress__bar">
							<div class="why-choose-two__progress__inner count-bar" data-percent="89%">
								<div class="why-choose-two__progress__number count-text">89%</div>
							</div>
						</div>
					</div><!-- /.skills-item -->
					<a href="{{ url("services.html") }}" class="solox-btn why-choose-two__link"><span>Discover more</span></a>
				</div><!-- /.why-choose-two__content -->
			</div><!-- /.col-lg-6 -->
		</div><!-- /.row -->
	</div><!-- /.container -->
</section><!-- /.why-choose-two -->

<section class="testimonials-one">
	<div class="container">
		<div class="sec-title">
	
	<img src="{{ asset("/assets/images/shapes/sec-title-s-1.png") }}" alt="Our testimonials" class="sec-title__img">
	
	
	<h6 class="sec-title__tagline">Our testimonials</h6><!-- /.sec-title__tagline -->
	
	<h3 class="sec-title__title">What they say?</h3><!-- /.sec-title__title -->
</div><!-- /.sec-title -->
		<div class="testimonials-one__carousel solox-owl__carousel solox-owl__carousel--with-shadow solox-owl__carousel--basic-nav owl-carousel"
			data-owl-options='{
			"items": 1,
			"margin": 0,
			"loop": false,
			"smartSpeed": 700,
			"nav": true,
			"navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
			"dots": false,
			"autoplay": false,
			"responsive": {
				"0": {
					"items": 1
				},
				"768": {
					"items": 2,
					"margin": 15
				},
				"992": {
					"items": 3,
					"margin": 15
				}
			}
		}'>
			<div class="item">
				<div class="testimonials-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='000ms'>
	<div class="testimonials-card__inner" style="background-image: url(assets/images/shapes/testi-card-bg-1-1.jpg);">
		<div class="testimonials-card__top">
			<div class="testimonials-card__image">
				<img src="{{ asset("/assets/images/resources/testi-1-1.jpg") }}" alt="Kevin martin">
			</div><!-- /.testimonials-card__image -->
			<div class="testimonials-card__top__left">
				<div class="testimonials-card__rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
				</div><!-- /.testimonials-card__rating -->
				<h3 class="testimonials-card__name">
					Kevin martin
				</h3><!-- /.testimonials-card__name -->
				<p class="testimonials-card__designation">Co Founder</p><!-- /.testimonials-card__designation -->
			</div><!-- /.testimonials-card__top__left -->
		</div><!-- /.testimonials-card__top -->
		<div class="testimonials-card__content">
			I have recently arrived at Pearl Continental Hotel and booked for a massage with Solox, it was by the best
			massage i ever had.
		</div><!-- /.testimonials-card__content -->
	</div><!-- /.testimonials-card__inner -->
</div><!-- /.testimonials-card -->
			</div><!-- /.item -->
			<div class="item">
				<div class="testimonials-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='100ms'>
	<div class="testimonials-card__inner" style="background-image: url(assets/images/shapes/testi-card-bg-1-1.jpg);">
		<div class="testimonials-card__top">
			<div class="testimonials-card__image">
				<img src="{{ asset("/assets/images/resources/testi-1-2.jpg") }}" alt="Sarah albert">
			</div><!-- /.testimonials-card__image -->
			<div class="testimonials-card__top__left">
				<div class="testimonials-card__rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
				</div><!-- /.testimonials-card__rating -->
				<h3 class="testimonials-card__name">
					Sarah albert
				</h3><!-- /.testimonials-card__name -->
				<p class="testimonials-card__designation">Co Founder</p><!-- /.testimonials-card__designation -->
			</div><!-- /.testimonials-card__top__left -->
		</div><!-- /.testimonials-card__top -->
		<div class="testimonials-card__content">
			I have recently arrived at Pearl Continental Hotel and booked for a massage with Solox, it was by the best
			massage i ever had.
		</div><!-- /.testimonials-card__content -->
	</div><!-- /.testimonials-card__inner -->
</div><!-- /.testimonials-card -->
			</div><!-- /.item -->
			<div class="item">
				<div class="testimonials-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='200ms'>
	<div class="testimonials-card__inner" style="background-image: url(assets/images/shapes/testi-card-bg-1-1.jpg);">
		<div class="testimonials-card__top">
			<div class="testimonials-card__image">
				<img src="{{ asset("/assets/images/resources/testi-1-3.jpg") }}" alt="david cooper">
			</div><!-- /.testimonials-card__image -->
			<div class="testimonials-card__top__left">
				<div class="testimonials-card__rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
				</div><!-- /.testimonials-card__rating -->
				<h3 class="testimonials-card__name">
					david cooper
				</h3><!-- /.testimonials-card__name -->
				<p class="testimonials-card__designation">Co Founder</p><!-- /.testimonials-card__designation -->
			</div><!-- /.testimonials-card__top__left -->
		</div><!-- /.testimonials-card__top -->
		<div class="testimonials-card__content">
			I have recently arrived at Pearl Continental Hotel and booked for a massage with Solox, it was by the best
			massage i ever had.
		</div><!-- /.testimonials-card__content -->
	</div><!-- /.testimonials-card__inner -->
</div><!-- /.testimonials-card -->
			</div><!-- /.item -->
		</div><!-- /.testimonials-one__carousel -->

	</div><!-- /.container -->
</section><!-- /.testimonials-one -->

<section class="funfact-one">
	<div class="container">
		<ul class="list-unstyled funfact-one__list">
			<li class="funfact-one__item count-box">
				<i class="funfact-one__icon icon-massage"></i><!-- /.funfact-one__icon -->
				<div class="funfact-one__content">
					<h3 class="funfact-one__count count-text" data-stop="23" data-speed="1500"></h3>
					<!-- /.funfact-one__count -->
					<p class="funfact-one__text">Years of Experience</p><!-- /.funfact-one__text -->
				</div><!-- /.funfact-one__content -->
			</li><!-- /.funfact-one__item -->
			<li class="funfact-one__item count-box">
				<i class="funfact-one__icon icon-lotus"></i><!-- /.funfact-one__icon -->
				<div class="funfact-one__content">
					<h3 class="funfact-one__count count-text" data-stop="870" data-speed="1500"></h3>
					<!-- /.funfact-one__count -->
					<p class="funfact-one__text">Wellness & Spa</p><!-- /.funfact-one__text -->
				</div><!-- /.funfact-one__content -->
			</li><!-- /.funfact-one__item -->
			<li class="funfact-one__item count-box">
				<i class="funfact-one__icon icon-herbal"></i><!-- /.funfact-one__icon -->
				<div class="funfact-one__content">
					<h3 class="funfact-one__count count-text" data-stop="30" data-speed="1500"></h3>
					<!-- /.funfact-one__count -->
					<p class="funfact-one__text">Herbal Treatment</p><!-- /.funfact-one__text -->
				</div><!-- /.funfact-one__content -->
			</li><!-- /.funfact-one__item -->
			<li class="funfact-one__item count-box">
				<i class="funfact-one__icon icon-customer-service"></i><!-- /.funfact-one__icon -->
				<div class="funfact-one__content">
					<h3 class="funfact-one__count count-text" data-stop="980" data-speed="1500"></h3>
					<!-- /.funfact-one__count -->
					<p class="funfact-one__text">Happy Clients</p><!-- /.funfact-one__text -->
				</div><!-- /.funfact-one__content -->
			</li><!-- /.funfact-one__item -->
		</ul><!-- /.list-unstyled funfact-one__list -->
	</div><!-- /.container -->
</section><!-- /.funfact-one -->

<section class="video-one">
	<div class="video-one__bg jarallax" data-jarallax data-speed="0.3" data-imgPosition="50% -100%"
		style="background-image: url(assets/images/backgrounds/video-bg-1-1.jpg);"></div>
	<!-- /.video-one__bg -->
	<div class="container">
		<div class="video-one__btn">
			<a href="https://www.youtube.com/watch?v=h9MbznbxlLc" class="video-popup">
				<i class="fa fa-play"></i>
			</a>
			<div class="curved-circle">
				<!-- curved-circle start-->
				<div class="curved-circle--item" data-circle-text-options='{
					"radius": 92,
					"forceWidth": true,
					"forceHeight": true
				}'>
					Watch our masssages Video
				</div>
			</div><!-- curved-circle end-->
		</div><!-- /.video-one__btn -->
		<h2 class="video-one__title">book & feel our <br>
			Incredible Spa Experience</h2><!-- /.video-one__title -->
		<a href="{{ url("services.html") }}" class="solox-btn video-one__link"><span>Discover more</span></a>
	</div><!-- /.container -->
</section><!-- /.video-one -->

<section class="why-choose-one">
	<img src="{{ asset("/assets/images/shapes/why-choose-1-bg-s1.png") }}" class="why-choose-one__shape-1" alt="">
	<div class="container">
		<div class="why-choose-one__inner">
			<div class="row">
				<div class="col-xl-5">
					<div class="why-choose-one__content">
						<div class="sec-title">
	
	<img src="{{ asset("/assets/images/shapes/sec-title-s-1.png") }}" alt="Our benefits" class="sec-title__img">
	
	
	<h6 class="sec-title__tagline">Our benefits</h6><!-- /.sec-title__tagline -->
	
	<h3 class="sec-title__title">Why choose us?</h3><!-- /.sec-title__title -->
</div><!-- /.sec-title -->
						<p class="why-choose-one__highlighted">Book and enjoy our special treatments</p>
						<!-- /.why-choose-one__highlighted -->

						<p class="why-choose-one__text">Lorem ipsum simply free text available in the market. At vero
							eos et
							accusamus et iusto odio dig
							ducimus qui blan.</p><!-- /.why-choose-one__text -->
						<ul class="list-unstyled why-choose-one__list">
							<li class="why-choose-one__list__item">
								<div class="why-choose-one__list__icon">
									<i class="icon-tick"></i>
								</div><!-- /.why-choose-one__list__icon -->
								<h4 class="why-choose-one__list__title"><a href="{{ url("team.html") }}">Expert <br>
										staff</a></h4><!-- /.why-choose-one__list__title -->
								<p class="why-choose-one__list__text">There are many variations of the passages of
									available.</p><!-- /.why-choose-one__list__text -->
							</li><!-- /.why-choose-one__list__item -->
							<li class="why-choose-one__list__item">
								<div class="why-choose-one__list__icon">
									<i class="icon-tick"></i>
								</div><!-- /.why-choose-one__list__icon -->
								<h4 class="why-choose-one__list__title"><a href="{{ url("services.html") }}">Brilliant
										<br>Services</a></h4><!-- /.why-choose-one__list__title -->
								<p class="why-choose-one__list__text">There are many variations of the passages of
									available.</p><!-- /.why-choose-one__list__text -->
							</li><!-- /.why-choose-one__list__item -->
						</ul><!-- /.list-unstyled why-choose-one__list -->
					</div><!-- /.why-choose-one__content -->
				</div><!-- /.col-xl-5 -->
				<div class="col-xl-7">
					<div class="solox-stretch-element-inside-column">
						<div class="why-choose-one__image wow fadeInUp">
							<img src="{{ asset("/assets/images/resources/why-choose-1-1.jpg") }}" alt="">
						</div><!-- /.why-choose-one__image -->
					</div><!-- /.ogency-stretch-element-inside-column -->
				</div><!-- /.col-xl-7 -->
			</div><!-- /.row -->
		</div><!-- /.why-choose-one__inner -->
	</div><!-- /.container -->
</section><!-- /.why-choose-one -->

<section class="team-one">
	<div class="container">
		<div class="sec-title">
	
	<img src="{{ asset("/assets/images/shapes/sec-title-s-1.png") }}" alt="Our professionals" class="sec-title__img">
	
	
	<h6 class="sec-title__tagline">Our professionals</h6><!-- /.sec-title__tagline -->
	
	<h3 class="sec-title__title">meet our experts</h3><!-- /.sec-title__title -->
</div><!-- /.sec-title -->
		<div class="team-one__carousel solox-owl__carousel solox-owl__carousel--with-shadow solox-owl__carousel--basic-nav owl-carousel"
			data-owl-options='{
			"items": 1,
			"margin": 0,
			"loop": false,
			"smartSpeed": 700,
			"nav": true,
			"navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
			"dots": false,
			"autoplay": false,
			"responsive": {
				"0": {
					"items": 1
				},
				"768": {
					"items": 2,
					"margin": 30
				},
				"992": {
					"items": 3,
					"margin": 30
				}
			}
		}'>
			<div class="item">
				<div class="team-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='000ms'>
	<div class="team-card__image">
		<div class="team-card__image__bg"></div><!-- /.team-card__image__bg -->
		<img src="{{ asset("/assets/images/team/team-1-1.jpg") }}" alt="Mike Hardson">
		<div class="team-card__hover">
			<div class="team-card__social">
				<i class="fa fa-share-alt"></i>
				<div class="team-card__social__list">
					<a href="https://twitter.com/">
	<i class="fab fa-twitter" aria-hidden="true"></i>
	<span class="sr-only">Twitter</span>
</a>
<a href="https://facebook.com/">
	<i class="fab fa-facebook" aria-hidden="true"></i>
	<span class="sr-only">Facebook</span>
</a>
<a href="https://pinterest.com/">
	<i class="fab fa-pinterest-p" aria-hidden="true"></i>
	<span class="sr-only">Pinterest</span>
</a>
<a href="https://instagram.com/">
	<i class="fab fa-instagram" aria-hidden="true"></i>
	<span class="sr-only">Instagram</span>
</a>
				</div><!-- /.team-card__social__list -->
			</div><!-- /.team-card__social -->
			<div class="team-card__email">
				<a href="{{ url("mailto:support@solox.envato") }}">
					<i class="fa fa-envelope"></i>
				</a>
			</div><!-- /.team-card__email -->
		</div><!-- /.team-card__hover -->
	</div><!-- /.team-card__image -->
	<div class="team-card__content">
		<h6 class="team-card__designation">therapist</h6><!-- /.team-card__designation -->
		<h3 class="team-card__title">
			<a href="{{ url("team-details.html") }}">Mike Hardson</a>
		</h3><!-- /.team-card__title -->
	</div><!-- /.team-card__content -->
</div><!-- /.team-card -->
			</div><!-- /.item -->
			<div class="item">
				<div class="team-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='100ms'>
	<div class="team-card__image">
		<div class="team-card__image__bg"></div><!-- /.team-card__image__bg -->
		<img src="{{ asset("/assets/images/team/team-1-2.jpg") }}" alt="aleesha brown">
		<div class="team-card__hover">
			<div class="team-card__social">
				<i class="fa fa-share-alt"></i>
				<div class="team-card__social__list">
					<a href="https://twitter.com/">
	<i class="fab fa-twitter" aria-hidden="true"></i>
	<span class="sr-only">Twitter</span>
</a>
<a href="https://facebook.com/">
	<i class="fab fa-facebook" aria-hidden="true"></i>
	<span class="sr-only">Facebook</span>
</a>
<a href="https://pinterest.com/">
	<i class="fab fa-pinterest-p" aria-hidden="true"></i>
	<span class="sr-only">Pinterest</span>
</a>
<a href="https://instagram.com/">
	<i class="fab fa-instagram" aria-hidden="true"></i>
	<span class="sr-only">Instagram</span>
</a>
				</div><!-- /.team-card__social__list -->
			</div><!-- /.team-card__social -->
			<div class="team-card__email">
				<a href="{{ url("mailto:support@solox.envato") }}">
					<i class="fa fa-envelope"></i>
				</a>
			</div><!-- /.team-card__email -->
		</div><!-- /.team-card__hover -->
	</div><!-- /.team-card__image -->
	<div class="team-card__content">
		<h6 class="team-card__designation">therapist</h6><!-- /.team-card__designation -->
		<h3 class="team-card__title">
			<a href="{{ url("team-details.html") }}">aleesha brown</a>
		</h3><!-- /.team-card__title -->
	</div><!-- /.team-card__content -->
</div><!-- /.team-card -->
			</div><!-- /.item -->
			<div class="item">
				<div class="team-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='200ms'>
	<div class="team-card__image">
		<div class="team-card__image__bg"></div><!-- /.team-card__image__bg -->
		<img src="{{ asset("/assets/images/team/team-1-3.jpg") }}" alt="david cooper">
		<div class="team-card__hover">
			<div class="team-card__social">
				<i class="fa fa-share-alt"></i>
				<div class="team-card__social__list">
					<a href="https://twitter.com/">
	<i class="fab fa-twitter" aria-hidden="true"></i>
	<span class="sr-only">Twitter</span>
</a>
<a href="https://facebook.com/">
	<i class="fab fa-facebook" aria-hidden="true"></i>
	<span class="sr-only">Facebook</span>
</a>
<a href="https://pinterest.com/">
	<i class="fab fa-pinterest-p" aria-hidden="true"></i>
	<span class="sr-only">Pinterest</span>
</a>
<a href="https://instagram.com/">
	<i class="fab fa-instagram" aria-hidden="true"></i>
	<span class="sr-only">Instagram</span>
</a>
				</div><!-- /.team-card__social__list -->
			</div><!-- /.team-card__social -->
			<div class="team-card__email">
				<a href="{{ url("mailto:support@solox.envato") }}">
					<i class="fa fa-envelope"></i>
				</a>
			</div><!-- /.team-card__email -->
		</div><!-- /.team-card__hover -->
	</div><!-- /.team-card__image -->
	<div class="team-card__content">
		<h6 class="team-card__designation">therapist</h6><!-- /.team-card__designation -->
		<h3 class="team-card__title">
			<a href="{{ url("team-details.html") }}">david cooper</a>
		</h3><!-- /.team-card__title -->
	</div><!-- /.team-card__content -->
</div><!-- /.team-card -->
			</div><!-- /.item -->
		</div><!-- /.row -->
	</div><!-- /.container -->
</section><!-- /.team-one -->
<div class="client-carousel ">
    <div class="container">
        <div class="client-carousel__one solox-owl__carousel owl-theme owl-carousel" data-owl-options='{
            "items": 5,
            "margin": 65,
            "smartSpeed": 700,
            "loop":true,
            "autoplay": 6000,
            "nav":false,
            "dots":false,
            "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
            "responsive":{
                "0":{
                    "items":1,
                    "margin": 0
                },
                "360":{
                    "items":2,
                    "margin": 30
                },
                "575":{
                    "items":3,
                    "margin": 30
                },
                "768":{
                    "items":3,
                    "margin": 40
                },
                "992":{
                    "items": 4,
                    "margin": 40
                },
                "1200":{
                    "items": 5,
                    "margin": 140
                }
            }
            }'>
            <div class="client-carousel__one__item">
                <img src="{{ asset("/assets/images/resources/brand-1-1.png") }}" alt="solox">
            </div><!-- /.owl-slide-item-->
            <div class="client-carousel__one__item">
                <img src="{{ asset("/assets/images/resources/brand-1-1.png") }}" alt="solox">
            </div><!-- /.owl-slide-item-->
            <div class="client-carousel__one__item">
                <img src="{{ asset("/assets/images/resources/brand-1-1.png") }}" alt="solox">
            </div><!-- /.owl-slide-item-->
            <div class="client-carousel__one__item">
                <img src="{{ asset("/assets/images/resources/brand-1-1.png") }}" alt="solox">
            </div><!-- /.owl-slide-item-->
            <div class="client-carousel__one__item">
                <img src="{{ asset("/assets/images/resources/brand-1-1.png") }}" alt="solox">
            </div><!-- /.owl-slide-item-->
            <div class="client-carousel__one__item">
                <img src="{{ asset("/assets/images/resources/brand-1-1.png") }}" alt="solox">
            </div><!-- /.owl-slide-item-->
            <div class="client-carousel__one__item">
                <img src="{{ asset("/assets/images/resources/brand-1-1.png") }}" alt="solox">
            </div><!-- /.owl-slide-item-->
            <div class="client-carousel__one__item">
                <img src="{{ asset("/assets/images/resources/brand-1-1.png") }}" alt="solox">
            </div><!-- /.owl-slide-item-->
            <div class="client-carousel__one__item">
                <img src="{{ asset("/assets/images/resources/brand-1-1.png") }}" alt="solox">
            </div><!-- /.owl-slide-item-->
            <div class="client-carousel__one__item">
                <img src="{{ asset("/assets/images/resources/brand-1-1.png") }}" alt="solox">
            </div><!-- /.owl-slide-item-->
        </div><!-- /.thm-owl__slider -->
    </div><!-- /.container -->
</div><!-- /.client-carousel -->
@endsection
