<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Homepage</title>
		<meta name="description" content="A simple slideshow component with individual slide layouts and effects" />
		<meta name="keywords" content="slideshow, images, layout, asymmetric, css, html, javascript, template" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="favicon.ico">
		<link href="https://fonts.googleapis.com/css?family=Gochi+Hand" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/slideshow.css" />
		<link rel="stylesheet" type="text/css" href="css/slideshow_layouts.css" />
		<link href="https://fonts.googleapis.com/css?family=Caveat+Brush|Indie+Flower" rel="stylesheet">
		<!--[if IE]>
  		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  		<style>
			.ie-message { display: inline-block; }
  		</style>
		<![endif]-->
		<script>document.documentElement.className = 'js';</script>
	</head>
	<body>
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
					<a class="dummy-links__link dummy-links__link--current port_nav" href="#">Home</a>
					<a class="dummy-links__link port_nav" href="">About Me</a>
					<a class="dummy-links__link port_nav" href="#">Portfolio</a>
					<a class="dummy-links__link port_nav" href="#">Gallery</a>
					<a class="dummy-links__link port_nav" href="#">Contact</a>
				</nav>
			</header>
			<div class="slideshow" tabindex="0">
				<div class="slide slide--layout-1" data-layout="layout1">
					<div class="slide-imgwrap">
						<div class="slide__img"><div class="slide__img-inner" style="background-image: url(img/1.jpg);"></div></div>
						<div class="slide__img"><div class="slide__img-inner" style="background-image: url(img/2.jpg);"></div></div>
						<div class="slide__img"><div class="slide__img-inner" style="background-image: url(img/3.jpg);"></div></div>
					</div>
					<div class="slide__title">
						<h3 class="slide__title-main">Now or Never</h3>
						<p class="slide__title-sub">Our battered suitcases were piled on the sidewalk again; we had longer ways to go. But no matter, the road is life. <a href="#">Read more</a></p>
					</div>
				</div><!-- /slide -->
				<div class="slide slide--layout-2" data-layout="layout2">
					<div class="slide-imgwrap">
						<div class="slide__img"><div class="slide__img-inner" style="background-image: url(img/6.jpg);"></div></div>
						<div class="slide__img"><div class="slide__img-inner" style="background-image: url(img/5.jpg);"></div></div>
						<div class="slide__img"><div class="slide__img-inner" style="background-image: url(img/6.jpg);"></div></div>
						<div class="slide__img"><div class="slide__img-inner" style="background-image: url(img/7.jpg);"></div></div>
						<div class="slide__img"><div class="slide__img-inner" style="background-image: url(img/9.jpg);"><h4 class="slide__img-caption">Today is someday</h4></div></div>
					</div>
					<div class="slide__title">
						<h3 class="slide__title-main">Crazy Breed</h3>
						<p class="slide__title-sub">There's those thinking more or less less is more. But if less is more how you're keeping score?</p>
					</div>
				</div><!-- /slide -->
				<div class="slide slide--layout-3" data-layout="layout3">
					<div class="slide-imgwrap">
						<div class="slide__img"><div class="slide__img-inner" style="background-image: url(img/9.jpg);"></div></div>
						<div class="slide__img"><div class="slide__img-inner" style="background-image: url(img/10.jpg);"></div></div>
						<div class="slide__img"><div class="slide__img-inner" style="background-image: url(img/11.jpg);"></div></div>
						<div class="slide__img"><div class="slide__img-inner" style="background-image: url(img/15.jpg);"></div></div>
						<div class="slide__img"><div class="slide__img-inner" style="background-image: url(img/13.jpg);"></div></div>
						<div class="slide__img"><div class="slide__img-inner" style="background-image: url(img/14.jpg);"></div></div>
						<div class="slide__img"><div class="slide__img-inner" style="background-image: url(img/12.jpg);"></div></div>
					</div>
					<div class="slide__title">
						<h3 class="slide__title-main">Safe Harbor</h3>
						<p class="slide__title-sub">Twenty years from now you will be more disappointed by the things you didn’t do than by the ones you did do.</p>
					</div>
				</div><!-- /slide -->
				<div class="slide slide--layout-4" data-layout="layout4">
					<div class="slide-imgwrap">
						<div class="slide__img"><div class="slide__img-inner" style="background-image: url(img/10.jpg);"></div></div>
						<div class="slide__img"><div class="slide__img-inner" style="background-image: url(img/8.jpg);"></div></div>
						<div class="slide__img"><div class="slide__img-inner" style="background-image: url(img/11.jpg);"></div></div>
						<div class="slide__img"><div class="slide__img-inner" style="background-image: url(img/13.jpg);"></div></div>
					</div>
					<div class="slide__title">
						<h3 class="slide__title-main">Our Freedom</h3>
						<p class="slide__title-sub">For to be free is not merely to cast off one's chains, but to live in a way that respects and enhances the freedom of others.</p>
					</div>
				</div><!-- /slide -->
				<div class="slide slide--layout-5" data-layout="layout5">
					<div class="slide-imgwrap">
						<div class="slide__img"><div class="slide__img-inner" style="background-image: url(img/small/1.jpg);"></div></div>
						<div class="slide__img"><div class="slide__img-inner" style="background-image: url(img/small/2.jpg);"></div></div>
						<div class="slide__img"><div class="slide__img-inner" style="background-image: url(img/small/3.jpg);"></div></div>
						<div class="slide__img"><div class="slide__img-inner" style="background-image: url(img/small/4.jpg);"></div></div>
						<div class="slide__img"><div class="slide__img-inner" style="background-image: url(img/small/5.jpg);"></div></div>
						<div class="slide__img"><div class="slide__img-inner" style="background-image: url(img/small/6.jpg);"></div></div>
						<div class="slide__img"><div class="slide__img-inner" style="background-image: url(img/small/7.jpg);"></div></div>
						<div class="slide__img"><div class="slide__img-inner" style="background-image: url(img/small/8.jpg);"></div></div>
						<div class="slide__img"><div class="slide__img-inner" style="background-image: url(img/small/9.jpg);"></div></div>
						<div class="slide__img"><div class="slide__img-inner" style="background-image: url(img/small/10.jpg);"></div></div>
						<div class="slide__img"><div class="slide__img-inner" style="background-image: url(img/small/11.jpg);"></div></div>
						<div class="slide__img"><div class="slide__img-inner" style="background-image: url(img/small/12.jpg);"></div></div>
						<div class="slide__img"><div class="slide__img-inner" style="background-image: url(img/small/13.jpg);"></div></div>
						<div class="slide__img"><div class="slide__img-inner" style="background-image: url(img/small/14.jpg);"></div></div>
						<div class="slide__img"><div class="slide__img-inner" style="background-image: url(img/small/15.jpg);"></div></div>
						<div class="slide__img"><div class="slide__img-inner" style="background-image: url(img/small/16.jpg);"></div></div>
						<div class="slide__img"><div class="slide__img-inner" style="background-image: url(img/small/17.jpg);"></div></div>
						<div class="slide__img"><div class="slide__img-inner" style="background-image: url(img/small/18.jpg);"></div></div>
					</div>
					<div class="slide__title">
						<h3 class="slide__title-main">Stopping Time</h3>
						<p class="slide__title-sub">Emancipate yourselves from mental slavery, none but ourselves can free our minds.</p>
					</div>
				</div><!-- /slide -->
				<div class="slide slide--layout-6" data-layout="layout6">
					<div class="slide-imgwrap">
						<div class="slide__img"><div class="slide__img-inner" style="background-image: url(img/14.jpg);"></div></div>
						<div class="slide__img"><div class="slide__img-inner" style="background-image: url(img/11.jpg);"></div></div>
						<div class="slide__img"><div class="slide__img-inner" style="background-image: url(img/3.jpg);"></div></div>
					</div>
					<div class="slide__title">
						<h3 class="slide__title-main">Walk the Walk</h3>
						<p class="slide__title-sub">The trouble with being in the rat race is that even if you win, you're still a rat.</p>
					</div>
				</div><!-- /slide -->
				<div class="slide slide--layout-7" data-layout="layout7">
					<div class="slide-imgwrap">
						<div class="slide__img"><div class="slide__img-inner" style="background-image: url(img/16.jpg);"></div></div>
						<div class="slide__img"><div class="slide__img-inner" style="background-image: url(img/1.jpg);"></div></div>
						<div class="slide__img"><div class="slide__img-inner" style="background-image: url(img/4.jpg);"></div></div>
					</div>
					<div class="slide__title">
						<h3 class="slide__title-main">Caged Birds</h3>
						<p class="slide__title-sub">They told me to grow roots, instead I grew wings. Birds born in a cage think flying is an illness. </p>
					</div>
				</div><!-- /slide -->
				<nav class="slideshow__nav slideshow__nav--arrows">
					<button id="prev-slide" class="btn btn--arrow" aria-label="Previous slide"><svg class="icon icon--prev"><use xlink:href="#icon-prev"></use></svg></button>
					<button id="next-slide" class="btn btn--arrow" aria-label="Next slide"><svg class="icon icon--next"><use xlink:href="#icon-next"></use></svg></button>
				</nav>
			</div><!-- /slideshow -->
			<div class="content content--text">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
			<!-- Related demos -->
			<section class="content content--related">
				<p>If you enjoyed this demo you might also like:</p>
				<a class="media-item" href="http://tympanus.net/Development/ImageGridEffects/">
					<img class="media-item__img" src="img/related/ImageGridEffects.jpg">
					<h3 class="media-item__title">Image Grid Effects</h3>
				</a>
				<a class="media-item" href="http://tympanus.net/Tutorials/PolaroidStackGrid/">
					<img class="media-item__img" src="img/related/PolaroidGrid.jpg">
					<h3 class="media-item__title">Polaroid Grid Animation</h3>
				</a>
			</section>
		</main>
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
