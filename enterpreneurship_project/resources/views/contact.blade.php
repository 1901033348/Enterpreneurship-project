	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="fav.png">
		<!-- Author Meta -->
		<meta name="author" content="codepixer">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Sleep store</title>

		
			<!--
			CSS
			============================================= -->
			
			<link rel="stylesheet" href="linearicons.css">
			<link rel="stylesheet" href="font-awesome.min.css">
			<link rel="stylesheet" href="bootstrap.css">
			<link rel="stylesheet" href="magnific-popup.css">
			<link rel="stylesheet" href="nice-select.css">							
			<link rel="stylesheet" href="animate.min.css">
			<link rel="stylesheet" href="owl.carousel.css">
			<link rel="stylesheet" href="main.css">
		</head>
		<body>	
			<header id="header" id="home">
			    <div class="container main-menu">
			    	<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
				        <a href="index">
							<!--<img src="img/logo.png" alt="" title="" />-->
							
						</a>
				      </div>
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
				          <li class="menu-active"><a href="index">Главная</a></li>
				          <li><a href="about">О нас</a></li>
				          <li><a href="furniture">Мебель</a></li>
				          <li><a href="text">Текстиль</a></li>
						  <li><a href="contact">Контакты</a></li>	
						  <!--<li><a href="contact.html">Корзина</a></li>	    -->          
				        </ul>
				      </nav><!-- #nav-menu-container -->		    		
			    	</div>
			    </div>
			  </header><!-- #header -->
			


			<!-- start banner Area -->
			<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Контакты			
							</h1>	
							<p class="text-white link-nav"><a href="index">Главная </a>  <span class="lnr lnr-arrow-right"></span>  <a href="contacttml"> Контакты</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->	
			  <!--Map-->
			
			  <style type="text/css">
				  /* Set the size of the div element that contains the map */
				  #map {
					height: 400px;
					/* The height is 400 pixels */
					width: 100%;
					/* The width is the width of the web page */
					text-align: center;
				  }
				</style>
				<script>
				  // Initialize and add the map
				  function initMap() {
					var options= {
						center :{   lat: 43.244085,  lng: 76.892910  },
						zoom:16
					}
					var map = new google.maps.Map(document.getElementById("map"), options);
					var icon = {
						 url:"icon.png",
						 scaledSize: new google.maps.Size(50,50),
						 origin :new google.maps.Point(0,0),
						 anchor:new google.maps.Point(0,0)

					 };
					  var marker =  new google.maps.Marker({
						  position : {  lat: 43.244085,  lng: 76.892910 },
						  map: map,
						  icon : icon,
						
					  });
					  var infowindow = new google.maps.InfoWindow({
						  content:"PetSHELTER"
						});
						infowindow.open(map,marker);
				  }
				</script>
			  
		  
				  

			<!-- Start contact-page Area -->
			<section class="contact-page-area section-gap">
				<div class="container">
					<div class="row">  
						<div id="map" class="map-wrap"></div>
						<!--<div id="map" class="map-wrap"style="height:400px ; width: 100%"></div>-->
						<!--<div  style="width:100%; height: 445px;" id="map"></div>-->
						<div class="col-lg-4 d-flex flex-column address-wrap">
							<div class="single-contact-address d-flex flex-row">
								<div class="icon">
									<span class="lnr lnr-home"></span>
								</div>
								<div class="contact-details">
									<h5>Алматы</h5>
									<p>Абылайхан </p>
								</div>
							</div>
							<div class="single-contact-address d-flex flex-row">
								<div class="icon">
									<span class="lnr lnr-phone-handset"></span>
								</div>
								<div class="contact-details">
									<h5>+7 700 666 10 83</h5>
									
								</div>
							</div>
							<div class="single-contact-address d-flex flex-row">
								<div class="icon">
									<span class="lnr lnr-envelope"></span>
								</div>
								<div class="contact-details">
									<h5>1901032642@stu.sdu.edu.kz</h5>
									<p>Присылайте нам свой запрос в любое время!</p>
								</div>
							</div>														
						</div>
						<div class="col-lg-8">
							<form class="form-area " id="myForm" action="mail.php" method="post" class="contact-form text-right">
								<div class="row">	
									<div class="col-lg-6 form-group">
										<input name="name" placeholder="Имя" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="common-input mb-20 form-control" required="" type="text">
									
										<input name="email" placeholder="Почта" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control" required="" type="email">

										<input name="subject" placeholder="Введите свою тему" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your subject'" class="common-input mb-20 form-control" required="" type="text">
									</div>
									<div class="col-lg-6 form-group">
										<textarea class="common-textarea form-control" name="message" placeholder="..." onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>						
									</div>
									<div class="col-lg-12 d-flex justify-content-between">
										<div class="alert-msg" style="text-align: left;"></div>
										<button class="genric-btn primary circle" style="float: right;">Отправить</button>		
									</div>
								</div>
							</form>	
						</div>
					</div>
				</div>	
			</section>
			<!-- End contact-page Area -->

			<!-- start footer Area -->		
			<footer class="footer-area">
				<div class="container">
					<div class="row pt-120 pb-80">
						<div class="col-lg-4 col-md-6">
							<div class="single-footer-widget">
								<h6> О нас</h6>
								<p>Долго ищите подходящую мебель в разных мебельных салонах, но так ни чего и не присмотрели?

									Загляните в салон мебели ЕвроМебель. Наша компания станет Вам хорошим другом, добросовестным партнером и предложит качественную, недорогую мебель.
								   
									Уют и комфорт самое главное в каждом доме. Компания ЕвроМебель, заботится о каждом пожелании клиента, и с удовольствием помогает осуществить долгожданную покупку мебели, для создания уникального интерьера в Вашем доме.</p>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-footer-widget">
								<h6></h6>
								<div class="row">
									<ul class="col footer-nav">
										<li><a href="index">Главная</a></li>
										
										<li><a href="about">О нас </a></li>
										<li><a href="furniture">Мебель</a></li>
									</ul>
									<ul class="col footer-nav">
										<li><a href="text">Текстиль</a></li>
										<li><a href="contact">Конакты</a></li>
										<li><a href="contact">Корзина</a></li>
									</ul>									
								</div>
							</div>
						</div>						
						<div class="col-lg-4  col-md-6">
							<div class="single-footer-widget mail-chimp">
								<h6 class="mb-20">Контакты</h6>
								<ul class="list-contact">
									<li class="flex-row d-flex">
										<div class="icon">
											<span class="lnr lnr-home"></span>
										</div>
										<div class="detail">
											<h4>Алматы</h4>
											<p>
												Абылайхан 1 
												
											</p>
										</div>	
									</li>
									<li class="flex-row d-flex">
										<div class="icon">
											<span class="lnr lnr-phone-handset"></span>
										</div>
										<div class="detail">
											<h4>+7700 666 10 83</h4>
											<p>
												
											</p>
										</div>	
									</li>
									<li class="flex-row d-flex">
										<div class="icon">
											<span class="lnr lnr-envelope"></span>
										</div>
										<div class="detail">
											<h4>190103264@stu.sdu.edu.kz</h4>
											<p>
												
											</p>
										</div>	
									</li>																		
								</ul>
							</div>
						</div>						
					</div>
				</div>
			</footer>	

			<script src="vendor/jquery-2.2.4.min.js"></script>
			<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>-->
			<script src="vendor/bootstrap.min.js"></script>			
			<!--<script src="https://api-maps.yandex.ru/2.1/?lang=en_RU&amp;apikey=ff1b2e88-6a63-4289-82bb-309014889930" type="text/javascript"></script>-->
			<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCnMj8Xc5_jA0tqVHCoFHCk-2sHt4imItA&callback=initMap"></script>
 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCnMj8Xc5_jA0tqVHCoFHCk-2sHt4imItA&libraries=drawing"></script>
  			<script src="easing.min.js"></script>			
			<script src="hoverIntent.js"></script>
			<script src="superfish.min.js"></script>	
			<script src="jquery.ajaxchimp.min.js"></script>
			<!--<script src="js/jquery.magnific-popup.min.js"></script>	-->
			<script src="owl.carousel.min.js"></script>						
			<script src="jquery.nice-select.min.js"></script>							
			<script src="mail-script.js"></script>	
			<script src="main.js"></script>	
			<!--<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>-->
		</body>
	</html>