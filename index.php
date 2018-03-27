<!doctype html>
<html class="no-js" lang="">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title></title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="manifest" href="site.webmanifest">
	<link rel="apple-touch-icon" href="icon.png">
	<!-- Place favicon.ico in the root directory -->

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/custom.css">
</head>

<body>
<nav class="navbar navbar-default navbar-fixed-top">

	<div class="container">

		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNav">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#myPage">Home</a>
		</div>
		<div class="collapse navbar-collapse" id="myNav">

			<ul class="languagepicker roundborders">
				<li class="activeLang>
                            <a href="#ru onclick="langControl()">
					<img src="img/rus-icon.png" width="30" height="20"/>
					Krieviski
					</a>
				</li>
				<li>
					<a href="#en" onclick="langControl()">
						<img src="img/latvija.png" width="30" height="20"/>
						Latviski
					</a>
				</li>

			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#about">ABOUT</a></li>
				<li><a href="#services">SERVICES</a></li>
				<li><a href="#portfolio">PORTFOLIO</a></li>
				<li><a href="#pricing">PRICING</a></li>
				<li><a href="#contact">CONTACT</a></li>
			</ul>
		</div>
	</div>
</nav>

<div class="container-fluid main-info">
	<div class="col-sm-6 aac">
		<div class="row">
			<div class="col-sm-6">
			</div>
			<div class="col-sm-6">
				<?php
				$coks = $_COOKIE['lang'];
				switch ($coks)
				{
					case 'ru':
						echo "<h2 class=\"handled\"><strong>Ирина</strong> Кузменкова</h2>";
						break;
					case 'lv':
						echo "<h2 class=\"handled\"><strong>Irīna</strong> Kuzmenkova</h2>";
						break;
				}
				?>
				<p class="handled">Ведение уголовных дел (защита на стадии дознания, следствия, судебная защита)</p>
			</div>
		</div>
	</div>
</div>

<div class="container-fluid fact">
	<div class="col-sm-12">
		<div class="row">
			<div class="col-sm-4" >
				<div class="row centered">
					<div class="col-sm-6"></div>
					<div class="col-sm-6">
						<div class="row">
							<div class="col-sm-6">
								<h2>Darba</h2>
								<p>Sfēras</p>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-sm-8 bg_yel">
				<div class="row slideanim">
					<div class="col-sm-6">
						<div class="row itemList">
							<div class="col-sm-2 text-right">
								<div class="glyphicon glyphicon-tag"></div>
							</div>
							<div class="col-sm-10">
								<h5><strong>Hello</strong></h5>
							</div>
						</div>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
					</div>
					<div class="col-sm-6">
						<div class="row itemList">
							<div class="col-sm-2 text-right">
								<div class="glyphicon glyphicon-tag"></div>
							</div>
							<div class="col-sm-10">
								<h5>Hello</h5>
							</div>
						</div>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
					</div>
				</div>
				<div class="row slideanim">
					<div class="col-sm-6">
						<div class="row itemList">
							<div class="col-sm-2 text-right">
								<div class="glyphicon glyphicon-tag"></div>
							</div>
							<div class="col-sm-10">
								<h5>Hello</h5>
							</div>
						</div>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
					</div>
					<div class="col-sm-6">
						<div class="row itemList">
							<div class="col-sm-2 text-right">
								<div class="glyphicon glyphicon-tag"></div>
							</div>
							<div class="col-sm-10">
								<h5>Hello</h5>
							</div>
						</div>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
					</div>
				</div>
				<div class="row slideanim">
					<div class="col-sm-6">
						<div class="row itemList">
							<div class="col-sm-2 text-right">
								<div class="glyphicon glyphicon-tag"></div>
							</div>
							<div class="col-sm-10">
								<h5>Hello</h5>
							</div>
						</div>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
					</div>
					<div class="col-sm-6">
						<div class="row itemList">
							<div class="col-sm-2 text-right">
								<div class="glyphicon glyphicon-tag"></div>
							</div>
							<div class="col-sm-10">
								<h5>Hello</h5>
							</div>
						</div>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>

<div class="container-fluid blue">
	<div class="row info">
		<div class="col-sm-12">
			<h1>Par mūms</h1>
			<p>
				Вы можете переместить его в любое место на странице. Расскажите посетителям сайта о себе. Здесь будет удачно смотреться текст о вашей компании и услугах.​
			</p>
			<p>
				Расскажите интересную историю, например, как вам в голову пришла идея собственного дела, и объясните, в чем заключается ваше преимущество перед конкурентами. Приводите увлекательные факты и цифры — пусть вас запомнят. Не забудьте про ключевые слова, по которым ваш сайт найдут в поисковых системах.
			</p>
			<p>
				Наши шаблоны позволяют создавать отличные сайты. Мы благодарим вас за поддержку, отзывы и предложения, которые помогают делать конструктор сайтов Wix еще лучше. Заходите на наш форум, делитесь своим мнением и задавайте вопросы.
			</p>
		</div>
	</div>

</div>

<!-- Services -->

<div class="container text-center contact" id="services">
	<h2>Es garāntēju</h2>
	<div class="row adv-row">
		<div class="col-sm-4">
			<span class="glyphicon glyphicon-certificate logo-small award"></span>
			<h4>Sertificets specialists</h4>
			<p>Sertificeto palidzību</p>
		</div>
		<div class="col-sm-4">
			<span class="glyphicon glyphicon glyphicon-lock logo-small"></span>
			<h4>Sertificets specialists</h4>
			<p>Sertificeto palidzību</p>
		</div>
		<div class="col-sm-4">
			<span class="glyphicon glyphicon-off logo-small"></span>
			<h4>Sertificets specialists</h4>
			<p>Sertificeto palidzību</p>
		</div>
	</div>
	<div class="row adv-row">
		<div class="col-sm-4">
			<span class="glyphicon glyphicon glyphicon-hourglass logo-small"></span>
			<h4>Sertificets specialists</h4>
			<p>Sertificeto palidzību</p>
		</div>
		<div class="col-sm-4">
			<span class="glyphicon glyphicon-certificate logo-small"></span>
			<h4>Sertificets specialists</h4>
			<p>Sertificeto palidzību</p>
		</div>
		<div class="col-sm-4">
			<span class="glyphicon glyphicon-certificate logo-small"></span>
			<h4>Sertificets specialists</h4>
			<p>Sertificeto palidzību</p>
		</div>
	</div>
</div>

<!-- Gallery/Gallery -->
<div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
	<!-- Indicators -->
	<ol class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="1"></li>
		<li data-target="#myCarousel" data-slide-to="2"></li>
	</ol>

	<!-- Wrapper for slides -->
	<div class="carousel-inner" role="listbox">
		<div class="item active">
			<h4 class="ats"><strong>"This company is the best. I am so happy with the result!(atsauksme)"</strong><br><span>Michael Roe, Vice President, Comment Box</span></h4>
		</div>
		<div class="item">
			<h4 class="ats"><strong>"One word... WOW!!(atsauksme)"</strong><br><span>John Doe, Salesman, Rep Inc</span></h4>
		</div>
		<div class="item">
			<h4 class="ats"><strong>"Could I... BE any more happy with this company?(atsauksme)"</strong><br><span>Chandler Bing, Actor, FriendsAlot</span></h4>
		</div>
	</div>

	<!--
	 <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left myl" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right myr" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>

	 -->

</div>

<!-- Contact -->
<div class="container-fluid contact2" id="contact">
	<div class="row c-info">
		<div class="col-sm-5">
			<div class="row">
				<div class="col-sm-12">
					<div class="row cnt">
						<div class="col-sm-12">
							<h1><strong>СВЯЖИТЕСЬ</strong> С НАМИ</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-7 right-col">
			<div class="row">
				<div class="col-sm-6">
					<div class="row controlled">
						<h3 class="text-center">Mūsu adrese</h3>
						<div class="col-sm-12">
							<ul>
								<li><h5>ул. Арбат, 1а, Москва, 119019, Россия</h5></li>
								<li><h5>Email: info@mysite.ru</h5></li>
								<li><h5>Телефон:  +7 (495) 000-00-00</h5></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<input type="text" class="form-control" placeholder="Name">
					<input type="email" class="form-control" placeholder="Name">
					<input type="text" class="form-control" placeholder="Name">
					<textarea class="form-control" name="comment" id="comment" cols="30" rows="10" placeholder="Teksts"></textarea>
				</div>
			</div>
		</div>
	</div>

</div>


<!-- Footer -->
<div class="container-fluid footer">
	<div class="row">
		<div class="col-sm-6">
			<br><script type="text/javascript"> document.write(new Date().getFullYear()); </script>
		</div>
		<div class="col-sm-3">
		</div>
	</div>
</div>


<script src="js/vendor/modernizr-3.5.0.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-3.2.1.min.js"><\/script>')</script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>
<script src="js/bootstrap.min.js"></script>


<script>
    window.ga=function(){ga.q.push(arguments)};ga.q=[];ga.l=+new Date;
    ga('create','UA-XXXXX-Y','auto');ga('send','pageview')
</script>
<script src="https://www.google-analytics.com/analytics.js" async defer></script>

<script>

    $(document).ready(function(){
        $(".handled").each(function () {
            $(this).addClass("show");
        });
        // Add smooth scrolling to all links in navbar + footer link
        $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
            // Make sure this.hash has a value before overriding default behavior
            if (this.hash !== "") {
                // Prevent default anchor click behavior
                event.preventDefault();

                // Store hash
                var hash = this.hash;

                // Using jQuery's animate() method to add smooth page scroll
                // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 900, function(){

                    // Add hash (#) to URL when done scrolling (default click behavior)
                    window.location.hash = hash;
                });
            } // End if
        });

        $(window).scroll(function() {
            $(".slideanim").each(function(){
                var pos = $(this).offset().top;

                var winTop = $(window).scrollTop();
                if (pos < winTop + 600) {
                    $(this).addClass("slide");
                }
            });
        });
    })




</script>

<script>

    function langControl() {
        var lang = getCookie('lang');
        if(lang == ''){
            alert("Cookie is empty, setting ru lang");
            document.cookie = "lang=ru";
        }else{
            switch (getCookie('lang')){
                case 'lv':
                    document.cookie = "lang=ru";
                    location.reload();
                    break;
                case 'ru':
                    document.cookie = "lang=lv";
                    location.reload();
                    break;
            }
        }
    }

    function getCookie(cname) {
        var name = cname + "=";
        var decodedCookie = decodeURIComponent(document.cookie);
        var ca = decodedCookie.split(';');
        for(var i = 0; i <ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
                return c.substring(name.length, c.length);
            }
        }
        return "";
    }

</script>

</body>
</html>
