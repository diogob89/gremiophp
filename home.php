<!doctype html>
<html>
<head>
<link href="favicon.ico" rel="shortcut icon" type="image/x-icon">
<meta charset="utf-8">
<meta name ="keyword" content="gremio, gremio usa, futebol, soccer, clube gremio, gremio estados unidos, escolinha">
<meta name ="description" content="Escolhinha de Futebol Oficial do Grêmio USA. Futebol do Grêmio agora em solo americano."> 
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Grêmio USA - Official Grêmio FBPA Soccer Training in USA </title>
<link href='https://fonts.googleapis.com/css?family=Fjalla+One' rel='stylesheet' type='text/css'>
<link href='gremio.css' rel='stylesheet' type='text/css'/>
<script type="text/javascript" src='https://cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js'></script>
<script type="text/javascript" src="https://cdn.rawgit.com/vinayakjadhav/jR3DCarousel/v1.0.4/dist/jR3DCarousel.min.js"></script>
<style>
/* Chrome, Safari, Opera*/ 
@-webkit-keyframes example {
    0%   {background: url(fotoheader1.jpg) 0px 0px no-repeat;}
    25%  {background: url(fotoheader2.jpg) 0px 0px no-repeat;}
    50%  {background: url(fotoheader3.jpg) 0px 0px no-repeat;}
    75%  {background: url(fotoheader4.jpg) 0px 0px no-repeat;}
	100% {background: url(fotoheader6.jpg) 0px 0px no-repeat;}
}

/* Standard syntax */ 
@keyframes example {
    0%   {background: url(fotoheader1.jpg) 0px 0px no-repeat;}
    25%  {background: url(fotoheader2.jpg) 0px 0px no-repeat;}
    50%  {background: url(fotoheader3.jpg) 0px 0px no-repeat;}
	75%  {background: url(fotoheader4.jpg) 0px 0px no-repeat;}
    100% {background: url(fotoheader6.jpg) 0px 0px no-repeat;}
}
@-webkit-keyframes example2 {
    0%   {background: url(banner1.jpg) 0px 0px no-repeat;}
    33%  {background: url(banner2.jpg) 0px 0px no-repeat;}
    66%  {background: url(banner3.jpg) 0px 0px no-repeat;}
    100%  {background: url(banner4.jpg) 0px 0px no-repeat;}
}

/* Standard syntax */ 
@keyframes example2 {
    0%   {background: url(banner1.jpg) 0px 0px no-repeat;}
    33%  {background: url(banner2.jpg) 0px 0px no-repeat;}
    66%  {background: url(banner3.jpg) 0px 0px no-repeat;}
    100%  {background: url(banner4.jpg) 0px 0px no-repeat;}
}
</style>
</head>
<body>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-85020168-1', 'auto');
  ga('send', 'pageview');

</script>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

	<div id = "container">
	
<?php include 'header.php'; ?>

	<!--apenas o location.html sem include nav-->
<?php include 'nav.php'; ?>
	
	<section class = "centro">
	
	<!--<img src="fotohome.jpg" class="imghome"> -->
	
	<div class="jR3DCarouselGalleryCustom">
			<div class="jR3DCarouselCustomSlide">
				<img src="foto1.jpg" />
				
			</div>
			<div class="jR3DCarouselCustomSlide">
				
					<img src="foto 2.jpg" />
					
								
			</div>
			<div class="jR3DCarouselCustomSlide">
				<img src="foto 3.jpg" />
				
			</div>
			<div class="jR3DCarouselCustomSlide">
				<img src="foto 4.jpg" />
				
			</div>
			<div class="jR3DCarouselCustomSlide">
				<img src="foto 5.jpg" />
				
			</div>
		</div>
		
		<script>
	$(document).ready(function() {
  // with minimal configuration and default setting
  var slideImages = [];
  for (var i = 0; i < 7; i++) {
    slideImages.push({
      src: 'https://unsplash.it/' + (1366 + i) + '/' + (768 + i)
    })
  }
  $('.jR3DCarouselGalleryDefault').jR3DCarousel({
  	width:470,
  	height: 272,
    slides: slideImages
  });

  // Or with options
  $('.jR3DCarouselGalleryCustom').jR3DCarousel({
    width: 650,
    /* largest allowed width */
    height: 300,
    /* largest allowed height */
    slideLayout: 'fill',
    /* "contain" (fit according to aspect ratio), "fill" (stretches object to fill) and "cover" (overflows box but maintains ratio) */
    animation: 'slide3D',
    /* slide | scroll | fade | zoomInSlide | zoomInScroll */
    animationCurve: 'ease',
    animationDuration: 1700,
    animationInterval: 2000,
    rotationDirection: 'rtl',
    slideClass: 'jR3DCarouselCustomSlide',
    autoplay: true,
    onSlideShow: slideShownCallback,
    /* callback when Slide show event occurs */
    navigation: 'circles' /* circles | squares */ ,
    perspective: 3200
  });
  function slideShownCallback($slide) {
    console.log("Slide shown: "+$slide.find('img').attr('src'));
  }
});
	</script>
	
	<a href="flyer.php"><div class="bannerOrlando animacao2"></div></a>


	<!-- <article>
	<h3>Introduction</h3>
	<p>The soccer in the United States was the sport more evolved in the country over the last 10 years, both the male and the female. The women soccer have more than 10 million practitioners, in addition to accumulate titles. Olympic champions and world champions. Is surely the greatest international markets of the present time and the right moment to implant the official Schools GREMIO FBPA.</p> 
	</article> -->
	
	<article>
	<h3>The Grêmio USA</h3>
	<p style="padding-bottom:3px;">We are very excited about the opportunity to bring Gremio FBPA Youth Soccer School to the US, and give boys and girls access to an outstanding learning soccer experience. We  started in Massachusetts, and will expand to many states, within six months. In the near future, we will be represented in every single state in the US. Gremio/USA  Youth Soccer School is also one of the first youth soccer schools, in Massachusetts, that belongs to a First Division Brazilian Soccer Club. Gremio/USA Youth Soccer School will also run Summer Soccer Camps, Tournaments, and an Exchange Program to bring the best players to Brazil to play against Brazilian youth soccer teams. During the trips to Brazil, our young players will also have a chance to visit ARENA DO GREMIO, the multi-purpose Gremio's Soccer Stadium and one of the most modern venues in the world. It holds over 55,000 fans, and was specially built to host the 2014 World Cup's matches. We also plan on bringing youth soccer teams from Brazil and from other countries to the US. In order to assure Gremio FBPA's high standards of soccer instruction, we count on a team of highly qualified coaches who hold Soccer Coach Certifications, and College BS and/or Master's Degrees in Physical Education, Health & Fitness, and Exercise Science.. </p>
	
	<img src ="instagram fonte.jpg">
	<!-- LightWidget WIDGET --><script src="//lightwidget.com/widgets/lightwidget.js"></script><iframe src="//lightwidget.com/widgets/c36f88d37d545046a731c1f75b0346ee.html" id="lightwidget_c36f88d37d" name="lightwidget_c36f88d37d"  scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width: 450px; border: 0; overflow: hidden;"></iframe></a> 

	</article>
	
	<article>
	<h3>About Grêmio FBPA</h3>
	<p>Gremio Foot-Ball Porto Alegrense (http://www.gremio.net/) is a professional Brazilian soccer club based in Porto Alegre, RS, Brazil, and has millions of fans in Brazil and worldwide. It takes part in the Rio Grande do Sul State Premier League, as well as the Brazil's National First Division League, a top tier of the Brazilian soccer league system. Gremio has won 36 state titles, two South America's Champions League titles, four Brazil's Cup titles, two National First Division League titles, and one World Championship title. We are glad to inform you that Gremio FBPA Youth Soccer School has come to USA, and it is the first youth soccer school in Massachsets  that belongs to a 1st. Division Brazilian Soccer Club.</p>	
	
	
	<div class="fb-page" data-href="https://www.facebook.com/gremiousa" data-width="450px" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/gremiousa"><a href="https://www.facebook.com/gremiousa">Gremio USA</a></blockquote></div></div>
	
	
	<a class="twitter-timeline" width="450px" href="https://twitter.com/gremio_usa" data-widget-id="663931382079574016">Tweets de @gremio_usa</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
	
	</article>
	
	<!-- <article style="height:150px">
	<h3>Schedules and Values</h3>
	<p><strong>Schedules of July:</strong><br>
	Mon, Wed & Fri - 6pm to 8pm<br>
	Women Soccer Class (kids)- Friday 6pm<br>
	<strong>PRICES:</strong><br>
	Once per week - U$60,00 per month.<br>
	Twice per week - U$100,00 per month.</p>
	</article> -->
	

	</main>       
	
	
	</section>
	
<?php include 'footer.php'; ?>
	
	</div>
</body>
</html>