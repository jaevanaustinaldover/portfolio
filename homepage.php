<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Homepage</title>
		<meta name="author" content="Jae Van Austin Aldover" />
		<link href="https://fonts.googleapis.com/css?family=Gochi+Hand" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/slideshow.css" />
		<link rel="stylesheet" type="text/css" href="css/slideshow_layouts.css" />
		<link href="https://fonts.googleapis.com/css?family=Caveat+Brush|Gloria+Hallelujah|Indie+Flower" rel="stylesheet">
		

		<!--[if IE]>
  		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  		<style>
			.ie-message { display: inline-block; }
  		</style>
		<![endif]-->
		<script>document.documentElement.className = 'js';</script>
	</head>
	<body>

		<div id="loader-wrapper">
			<div id="loader"></div>

			<div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>

		</div>
		<svg class="hidden">
			<defs>
				<symbol id="icon-prev" viewBox="0 0 100 50">
					<title>prev</title>
					<polygon points="5.4,25 18.7,38.2 22.6,34.2 16.2,27.8 94.6,27.8 94.6,22.2 16.2,22.2 22.6,15.8 18.7,11.8"/>
				</symbol>
				<symbol id="icon-next" viewBox="0 0 100 50">
					<title>next</title>
					<polygon points="81.3,11.8 77.4,15.8 83.8,22.2 5.4,22.2 5.4,27.8 83.8,27.8 77.4,34.2 81.3,38.2 94.6,25 "/>
				</symbol>
				<!-- From Karen Menezes: https://www.smashingmagazine.com/2015/05/creating-responsive-shapes-with-clip-path/ -->
				<clipPath id="polygon-clip-rhomboid" clipPathUnits="objectBoundingBox">
					<polygon points="0 1, 0.3 0, 1 0, 0.7 1" />
				</clipPath>
			</defs>
		</svg>
		<main>
			<header class="codrops-header">
				<h1 class="codrops-header__title" id="port_header">Jae Van Austin Aldover</h1>
				<p class="codrops-header__tagline" id="port_tagline">A Personal Web Portfolio</p>
				<nav class="dummy-links">
					<a class="dummy-links__link port_nav" href="about/index.php">About Me</a>
					<a class="dummy-links__link port_nav" href="portfolio/index.php">Portfolio</a>
					<a class="dummy-links__link port_nav" href="gallery/index.php">Gallery</a>
					<a class="dummy-links__link port_nav" href="contact/index.php">Contact</a>
				</nav>
			</header>
			<div class="slideshow" tabindex="0">
				<div class="slide slide--layout-1" data-layout="layout1">
					<div class="slide-imgwrap">
						<div class="slide__img"><div class="slide__img-inner" style="background-image: url(imgs/mypic3.jpg);"></div></div>
						<div class="slide__img"><div class="slide__img-inner" style="background-image: url(imgs/jansport2.png);"></div></div>
						<div class="slide__img"><div class="slide__img-inner" style="background-image: url(imgs/schoolpic1.jpg);"></div></div>
					</div>
					<div class="slide__title">
						<h3 class="slide__title-main" id="port_slide">Who am I?</h3>
						<p class="slide__title-su" id="port_subslide">You can understand me better first hand by checking things about me. 
							<a href="about/index.php">Read more</a>
						</p>
					</div>
				</div><!-- /slide -->
				<div class="slide slide--layout-2" data-layout="layout2">
					<div class="slide-imgwrap">
						<div class="slide__img"><div class="slide__img-inner" style="background-image: url(imgs/audsbday2.jpg);"></div></div>
						<div class="slide__img"><div class="slide__img-inner" style="background-image: url(imgs/mikeebday.jpg);"></div></div>
						<div class="slide__img"><div class="slide__img-inner" style="background-image: url(imgs/audsbday2.jpg);"></div></div>
						<div class="slide__img"><div class="slide__img-inner" style="background-image: url(imgs/mikeebday.jpg);"></div></div>
						<div class="slide__img"><div class="slide__img-inner" style="background-image: url(imgs/audsbday.jpg);"><h4 class="slide__img-caption">Today is someday</h4></div></div>
					</div>
					<div class="slide__title">
						<h3 class="slide__title-main" id="port_slide">Crazy Bunch</h3>
						<p class="slide__title-sub" id="port_subslide">Though I prefer to be alone at times. When I'm available and not quite busy, I spend my time mostly with my friends</given>
					</div>
				</div><!-- /slide -->
				<div class="slide slide--layout-3" data-layout="layout3">
					<div class="slide-imgwrap">
						<div class="slide__img"><div class="slide__img-inner" style="background-image: url(imgs/familypic1.jpg);"></div></div>
						<div class="slide__img"><div class="slide__img-inner" style="background-image: url(imgs/familypic2.jpg);"></div></div>
						<div class="slide__img"><div class="slide__img-inner" style="background-image: url(imgs/familypic3.jpg);"></div></div>
						<div class="slide__img"><div class="slide__img-inner" style="background-image: url(imgs/familypic4.jpg);"></div></div>
						<div class="slide__img"><div class="slide__img-inner" style="background-image: url(imgs/familypic5	.jpg);"></div></div>
						<div class="slide__img"><div class="slide__img-inner" style="background-image: url(imgs/jansport2.png);"></div></div>
						<div class="slide__img"><div class="slide__img-inner" style="background-image: url();"></div></div>
					</div>
					<div class="slide__title">
						<h3 class="slide__title-main" id="port_slide">What I do is what I like</h3>
						<p class="slide__title-sub" id="port_subslide">Twenty years from now you will be more disappointed by the things you didn’t do than by the ones you did do.
							<a href="about/index.php#mylikes">Likes</a> & <a href="about/index.php#mydislikes">Dislikes</a>
						</p>
					</div>
				</div><!-- /slide -->
				<div class="slide slide--layout-4" data-layout="layout4">
					<div class="slide-imgwrap">
						<div class="slide__img"><div class="slide__img-inner" style="background-image: url(imgs/mypic8.jpg);"></div></div>
						<div class="slide__img"><div class="slide__img-inner" style="background-image: url(imgs/mypic10.jpg);"></div></div>
						<div class="slide__img"><div class="slide__img-inner" style="background-image: url(imgs/mypic8.jpg);"></div></div>
						<div class="slide__img"><div class="slide__img-inner" style="background-image: url(imgs/mypic9.jpg);"></div></div>
					</div>
					<div class="slide__title">
						<h3 class="slide__title-main" id="port_slide">Goals and Dreams</h3>
						<p class="slide__title-sub" id="port_subslide">Remember that nothing worthwhile is easy. Experiencing hardship is part of the journey.
							<a href="about/index.php#mygoals" style="font-style: normal;">Read More . . . </a></p>
					</div>
				</div><!-- /slide -->
				<div class="slide slide--layout-5" data-layout="layout5">
					<div class="slide-imgwrap">
						<div class="slide__img"><div class="slide__img-inner" style="background-image: url(imgs/mypic1.jpg);"></div></div>
						<div class="slide__img"><div class="slide__img-inner" style="background-image: url(imgs/mypic2.jpg);"></div></div>
						<div class="slide__img"><div class="slide__img-inner" style="background-image: url(imgs/mypic3.jpg);"></div></div>
						<div class="slide__img"><div class="slide__img-inner" style="background-image: url(imgs/mypic4.jpg);"></div></div>
						<div class="slide__img"><div class="slide__img-inner" style="background-image: url(imgs/mypic5.jpg);"></div></div>
						<div class="slide__img"><div class="slide__img-inner" style="background-image: url(imgs/mypic6.jpg);"></div></div>
						<div class="slide__img"><div class="slide__img-inner" style="background-image: url(imgs/mypic7.jpg);"></div></div>
						<div class="slide__img"><div class="slide__img-inner" style="background-image: url(imgs/mypic8.jpg);"></div></div>
						<div class="slide__img"><div class="slide__img-inner" style="background-image: url(imgs/mypic9.jpg);"></div></div>
						<div class="slide__img"><div class="slide__img-inner" style="background-image: url(imgs/mypic10.jpg);"></div></div>
						<div class="slide__img"><div class="slide__img-inner" style="background-image: url(imgs/familypic1.jpg);"></div></div>
						<div class="slide__img"><div class="slide__img-inner" style="background-image: url(imgs/familypic2.jpg);"></div></div>
						<div class="slide__img"><div class="slide__img-inner" style="background-image: url(imgs/familypic3.jpg);"></div></div>
						<div class="slide__img"><div class="slide__img-inner" style="background-image: url(imgs/familypic4.jpg);"></div></div>
						<div class="slide__img"><div class="slide__img-inner" style="background-image: url(imgs/familypic5.jpg);"></div></div>
						<div class="slide__img"><div class="slide__img-inner" style="background-image: url(imgs/familypic6.jpg);"></div></div>
						<div class="slide__img"><div class="slide__img-inner" style="background-image: url(imgs/familypic7.jpg);"></div></div>
						<div class="slide__img"><div class="slide__img-inner" style="background-image: url(imgs/familypic8.jpg);"></div></div>
					</div>
					<div class="slide__title">
						<h3 class="slide__title-main" id="port_slide">Life Gallery</h3>
						<p class="slide__title-sub" id="port_subslide">I know I'm still growing more and more as I experience life. But my main goal is to leave a mark.
						<a href="gallery/index.php">View Gallery</a>
						</p>
					</div>
				</div><!-- /slide -->
				<div class="slide slide--layout-6" data-layout="layout6">
					<div class="slide-imgwrap">
						<div class="slide__img"><div class="slide__img-inner" style="background-image: url(imgs/familypic8.jpg);"></div></div>
						<div class="slide__img"><div class="slide__img-inner" style="background-image: url(imgs/jansport1.png);"></div></div>
						<div class="slide__img"><div class="slide__img-inner" style="background-image: url(imgs/mypic13.jpg);"></div></div>
					</div>
					<div class="slide__title">
						<h3 class="slide__title-main" id="port_slide">Plans for the Future</h3>
						<p class="slide__title-sub" id="port_subslide">So the future has always been uncertain, unpredictable, unknown. But making plans will steer me to a better one
							<a href="portfolio/index.php">View Portfolio.</a>
						</p>
						</p>
					</div>
				</div><!-- /slide -->
				<div class="slide slide--layout-7" data-layout="layout7">
					<div class="slide-imgwrap">
						<div class="slide__img"><div class="slide__img-inner" style="background-image: url(imgs/mypic4.jpg);"></div></div>
						<div class="slide__img"><div class="slide__img-inner" style="background-image: url(imgs/mypic1.jpg);"></div></div>
						<div class="slide__img"><div class="slide__img-inner" style="background-image: url(imgs/mypic2.jpg);"></div></div>
					</div>
					<div class="slide__title">
						<h3 class="slide__title-main" id="port_slide">You can talk to me</h3>
						<p class="slide__title-sub" id="port_subslide">Im currently studying, but I'm usually available online. Email me or message me through facebook
							<a href="contact/index.php">Contact me.</a>
						</p>
						</p>
					</div>
				</div><!-- /slide -->
				<nav class="slideshow__nav slideshow__nav--arrows">
					<button id="prev-slide" class="btn btn--arrow" aria-label="Previous slide"><svg class="icon icon--prev"><use xlink:href="#icon-prev"></use></svg></button>
					<button id="next-slide" class="btn btn--arrow" aria-label="Next slide"><svg class="icon icon--next"><use xlink:href="#icon-next"></use></svg></button>
				</nav>
			</div><!-- /slideshow
			<div class="content content--text">
				<div class="col-lg-12">
					<div class="col-lg-4">
						<iframe src="https://www.facebook.com/plugins/follow.php?href=https%3A%2F%2Fwww.facebook.com%2Fjaevanaldover&width=250&height=80&layout=standard&size=large&show_faces=true&appId"
					 	 width="250" height="80" style="border:none;overflow:hidden" 
				 	 	 scrolling="no" frameborder="0" allowTransparency="true"></iframe>
				 	</div class="col-lg-4">
				 	<div>
						<a href="https://twitter.com/intent/tweet?screen_name=JVAldover" class="twitter-mention-button" data-show-count="false">Tweet to @JVAldover</a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
				 	</div>
				</div>
			</div>-->
		</main>
		 <!-- FOOTER -->

		<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
  			var js, fjs = d.getElementsByTagName(s)[0];
  			if (d.getElementById(id)) return;
  				js = d.createElement(s); js.id = id;
  				js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8";
  				fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));
		</script>
		<script src="js/imagesloaded.pkgd.min.js"></script>
		<script src="js/anime.min.js"></script>
		<script src="js/main.js"></script>
		<script>
		(function() {
			var slideshow = new MLSlideshow(document.querySelector('.slideshow'));

			document.querySelector('#next-slide').addEventListener('click', function() {
				slideshow.next();
			});

			document.querySelector('#prev-slide').addEventListener('click', function() {
				slideshow.prev();
			});
		})();
		</script>
	</body>
</html>
