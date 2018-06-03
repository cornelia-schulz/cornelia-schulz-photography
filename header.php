<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title><?php echo $title; ?></title>
	<meta name="keywords" content="Cornelia Schulz, photography, portfolio, gallery, animals, landscapes, monochrome, black & white, landmarks, contact, about, new zealand, scotland, Vietnam, architecture, people">
	<meta name="description" content="Welcome to my photography site!">
	<meta name="author" content="Cornelia Schulz">
	<meta name="p:domain_verify" content="64862d43591b7fdadafc0f69807796b9"/>
	

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
  ================================================== -->
	<link rel="stylesheet" href="/stylesheets/base.css">
	<link rel="stylesheet" href="/stylesheets/skeleton.css">
	<link rel="stylesheet" href="/stylesheets/layout.css">
	<link rel="stylesheet" href="/superfish-master/dist/css/superfish.css" media="screen">
	<link rel="stylesheet" href="/stylesheets/style.css">
	<link href="http://fonts.googleapis.com/css?family=Arizonia" rel="stylesheet" type="text/css">

		<!-- jQuery
  ================================================== -->
    <script src="/superfish-master/dist/js/jquery.js"></script>
    <script src="../../js/flickrcontent.js"></script>
    <script src="../../js/script.js"></script>
	<script src="/superfish-master/dist/js/hoverIntent.js"></script>
	<script src="/superfish-master/dist/js/superfish.js"></script>
		<script>
		(function($){ //create closure so we can safely use $ as alias for jQuery

			$(document).ready(function(){

				// initialise plugin
				var example = $('#example').superfish({
					//add options here if required
				});

				// buttons to demonstrate Superfish's public methods
				$('.destroy').on('click', function(){
					example.superfish('destroy');
				});

				$('.init').on('click', function(){
					example.superfish();
				});

				$('.open').on('click', function(){
					example.children('li:first').superfish('show');
				});

				$('.close').on('click', function(){
					example.children('li:first').superfish('hide');
				});
			});

		})(jQuery);
		</script>
		
		    <!-- Google Analytics
    ================================================== -->
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-52162373-1', 'cornelia-schulz-photography.com');
          ga('send', 'pageview');

        </script>
		
			<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="/images/favicon.ico">
		
</head>
<body>
	<div class="header">
		<div class="logo">
			<img id="logoimg" src="/images/logo.png" alt="Logo"><span class="white logo1">Cornelia Schulz</span><span class="logo2"> Photography</span>
		</div>
		<div class="followus">
			<p>Follow me on <a class="white" href="https://instagram.com/corneliaschulzphotography/" target="_blank">Instagram</a>, <a class="white" href="http://twitter.com/Schulz_Images" target="_blank">Twitter</a>, <a class="white" href="https://www.facebook.com/pages/Cornelia-Schulz-Photography/117213031666328?ref=hl" target="_blank">Facebook</a> and <a class="white" href="https://www.flickr.com/photos/cornelia-schulz/" target="_blank">Flickr</a></p>
		</div>
		<a id="nav-menu" class="nav-menu">&#9776;</a>
		<div class="menu">
			<ul class="sf-menu" id="example">
				<li class="current white">
					<a href="/index.php">HOME</a>
				</li>
				<li>
					<a href="/about.php">ABOUT</a>
				</li>
				<li>
					<a href="/contact.php">CONTACT</a>
				</li>
				<li>
					<a href="/gallery.php">GALLERY</a>
					<ul>
					    <li>
                    		<a href="/recent.php">Recent Work</a>
                        </li>
						<li>
							<a href="/images/Night-Sky/night.php">Night Sky</a>
						</li>
						<li>
							<a href="/landscapes.php">Landscapes</a>
							<ul>
								<li><a href="/images/Landscapes-New-Zealand/newzealand.php">New Zealand South Island</a></li>
								<li><a href="/images/Landscapes-New-Zealand-North/newzealand-north.php">New Zealand North Island</a></li>
								<li><a href="/images/Landscapes-Scotland/scotland.php">Scotland</a></li>
								<li><a href="/images/Landscapes-Vietnam/vietnam.php">Vietnam</a></li>
							</ul>
						</li>
						<li>
                        	<a href="/images/Cityscapes/cityscapes.php">Cityscapes</a>
                        </li>
						<li>
							<a href="/images/Monochrome/monochrome.php">Monochrome</a>
						</li>
						<li>
							<a href="/images/Birds/birds.php">Birds</a>
						</li>
						<li>
							<a href="/images/Flora/flora.php">Flora</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="http://cornelia-schulz.blogspot.com/" target="_blank">BLOG</a>
				</li>
				<li>
					<a href="http://www.redbubble.com/people/firzhugh" target="_blank">SHOP</a>
				</li>
			</ul>
		</div>
	</div>