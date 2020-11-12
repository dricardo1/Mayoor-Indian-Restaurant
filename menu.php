<? ob_start("ob_gzhandler");?><!DOCTYPE html><?php include('header.php');?><div class="navbar navbar-default navbar-fixed-top" role="navigation"><div class="container"><div class="navbar-header"><button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="sr-only"> Toggle navigation </span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a class="navbar-brand" href="index.php"> Mayoor Indian Restaurant </a></div><div class="navbar-collapse collapse"><ul class="nav navbar-nav"><li ><a href="index.php"> Home </a></li><li><a href="hours.php"> Hours and location </a></li><li class="active"><a href="menu.php"> Menu </a></li><li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> Reservations <b class="caret"></b></a><ul class="dropdown-menu"><li><a href="contact.php"> Make Reservation </a></li><li><a href="contact.php"> Catering </a></li><li class="divider"></li><li class="dropdown-header"><strong> Questions? </strong></li><li><a href="contact.php"> Contact US </a></li></ul></li></ul></div></div></div><div class="container-fluid"><div class="container-fluid"><div class="jumbotron3"><h1> Mayoor Indian Restaurant </h1><p><i><strong> Fine Indian Cuisine&nbsp;&nbsp;&nbsp;&bull;&nbsp;&nbsp;&nbsp;5727 6th St Zephyrhills FL 33542&nbsp;&nbsp;&bull;&nbsp;&nbsp;813&bull;355&bull;4850 </strong></i></p><a href="tel:+18133554850" class="btn btn-primary btn-success"> Make a Reservation </a></div></div></div><div class="container"><div class="row"><div class="col-md-12"> &nbsp;&nbsp;&nbsp;<br>&nbsp;&nbsp;&nbsp;</div></div><div class="row"><div class="col-md-12"> &nbsp;&nbsp;&nbsp;<br>&nbsp;&nbsp;&nbsp;</div></div><div class="row"><div class="col-md-12"><h1> Our Menu </h1><h2> &nbsp;&nbsp;We serve a selection of traditional Indian dishes as well as several of our creations. The ingredients we use compliment each other nutritionally and please the palate. <br><br>&nbsp;&nbsp;All dishes are made with freshly ground herbs and contain NO MSG. Each dish is spiced to enhance its particular aroma and flavor. The spices do not make the dishes hot. <br><br>&nbsp;&nbsp;Our skilled Chefs make each dish individually and we will be happy to make your dishes the way you prefer them, from mild to extra-hot. </h2><h3> Please bear in mind that Indian food is not "fast food" and that our dishes take time to prepare, Your patience will be rewarded. ENJOY! </h3></div></div><div class="row"><div class="col-md-12"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>&nbsp;&nbsp;&nbsp;</div></div>

<style type="text/css">

			#container ul
			{
			}
				#container li
				{
					display: inline-block;
					margin: 0.625em; /* 10 */
				}
					#container img
					{
						width: 8.75em; /* 140 */
						height: 8.75em; /* 140 */
						border-color: #eee;
						border: 0.625em solid rgba( 255, 255, 255, .5 ); /* 10 */

						-webkit-box-shadow: 0 0 0.313em rgba( 0, 0, 0, .05 ); /* 5 */
						-moz-box-shadow: 0 0 0.313em rgba( 0, 0, 0, .05 ); /* 5 */
						box-shadow: 0 0 0.313em rgba( 0, 0, 0, .05 ); /* 5 */

						-webkit-transition: -webkit-box-shadow .3s ease, border-color .3s ease;
						-moz-transition: -moz-box-shadow .3s ease, border-color .3s ease;
						-ms-transition: -ms-box-shadow .3s ease, border-color .3s ease;
						-o-transition: -o-box-shadow .3s ease, border-color .3s ease;
						transition: box-shadow .3s ease, border-color .3s ease;
					}
						#container img:hover
						{
							border-color: #fff;

							-webkit-box-shadow: 0 0 0.938em rgba( 0, 0, 0, .25 ); /* 15 */
							-moz-box-shadow: 0 0 0.938em rgba( 0, 0, 0, .25 ); /* 15 */
							box-shadow: 0 0 0.938em rgba( 0, 0, 0, .25 ); /* 15 */
						}

		/* IMAGE LIGHTBOX SELECTOR */

		#imagelightbox
		{
			cursor: pointer;
			position: fixed;
			z-index: 10000;

			-ms-touch-action: none;
			touch-action: none;

			-webkit-box-shadow: 0 0 3.125em rgba( 0, 0, 0, .75 ); /* 50 */
			-moz-box-shadow: 0 0 3.125em rgba( 0, 0, 0, .75 ); /* 50 */
			box-shadow: 0 0 3.125em rgba( 0, 0, 0, .75 ); /* 50 */
		}


		/* WITH ACTIVITY INDICATION */

		#imagelightbox-loading,
		#imagelightbox-loading div
		{
			-webkit-border-radius: 50%;
			-moz-border-radius: 50%;
			border-radius: 50%;
		}
		#imagelightbox-loading
		{
			width: 2.5em; /* 40 */
			height: 2.5em; /* 40 */
			background-color: #444;
			background-color: rgba( 0, 0, 0, .5 );
			position: fixed;
			z-index: 10003;
			top: 50%;
			left: 50%;
			padding: 0.625em; /* 10 */
			margin: -1.25em 0 0 -1.25em; /* 20 */

			-webkit-box-shadow: 0 0 2.5em rgba( 0, 0, 0, .75 ); /* 40 */
			-moz-box-shadow: 0 0 2.5em rgba( 0, 0, 0, .75 ); /* 40 */
			box-shadow: 0 0 2.5em rgba( 0, 0, 0, .75 ); /* 40 */
		}
			#imagelightbox-loading div
			{
				width: 1.25em; /* 20 */
				height: 1.25em; /* 20 */
				background-color: #fff;

				-webkit-animation: imagelightbox-loading .5s ease infinite;
				-moz-animation: imagelightbox-loading .5s ease infinite;
				-o-animation: imagelightbox-loading .5s ease infinite;
				animation: imagelightbox-loading .5s ease infinite;
			}

			@-webkit-keyframes imagelightbox-loading
			{
				from { opacity: .5;	-webkit-transform: scale( .75 ); }
				50%	 { opacity: 1;	-webkit-transform: scale( 1 ); }
				to	 { opacity: .5;	-webkit-transform: scale( .75 ); }
			}
			@-moz-keyframes imagelightbox-loading
			{
				from { opacity: .5;	-moz-transform: scale( .75 ); }
				50%	 { opacity: 1;	-moz-transform: scale( 1 ); }
				to	 { opacity: .5;	-moz-transform: scale( .75 ); }
			}
			@-o-keyframes imagelightbox-loading
			{
				from { opacity: .5;	-o-transform: scale( .75 ); }
				50%	 { opacity: 1;	-o-transform: scale( 1 ); }
				to	 { opacity: .5;	-o-transform: scale( .75 ); }
			}
			@keyframes imagelightbox-loading
			{
				from { opacity: .5;	transform: scale( .75 ); }
				50%	 { opacity: 1;	transform: scale( 1 ); }
				to	 { opacity: .5;	transform: scale( .75 ); }
			}



		/* WITH OVERLAY */

		#imagelightbox-overlay
		{
			background-color: #fff;
			background-color: rgba( 255, 255, 255, .9 );
			position: fixed;
			z-index: 9998;
			top: 0;
			right: 0;
			bottom: 0;
			left: 0;
		}


		/* WITH "CLOSE" BUTTON */

		#imagelightbox-close
		{
			width: 2.5em; /* 40 */
			height: 2.5em; /* 40 */
			text-align: left;
			text-indent: -9999px;
			background-color: #666;
			position: fixed;
			z-index: 10002;
			top: 2.5em; /* 40 */
			right: 2.5em; /* 40 */

			-webkit-border-radius: 50%;
			-moz-border-radius: 50%;
			border-radius: 50%;

			-webkit-transition: color .3s ease;
			-moz-transition: color .3s ease;
			-ms-transition: color .3s ease;
			-o-transition: color .3s ease;
			transition: color .3s ease;
		}
			#imagelightbox-close:hover
			{
				background-color: #111;
			}
			#imagelightbox-close:before,
			#imagelightbox-close:after
			{
				width: 2px;
				background-color: #fff;
				content: '';
				position: absolute;
				top: 20%;
				bottom: 20%;
				left: 50%;
				margin-left: -1px;
			}
			#imagelightbox-close:before
			{
				-webkit-transform: rotate( 45deg );
				-moz-transform: rotate( 45deg );
				-ms-transform: rotate( 45deg );
				-o-transform: rotate( 45deg );
				transform: rotate( 45deg );
			}
			#imagelightbox-close:after
			{
				-webkit-transform: rotate( -45deg );
				-moz-transform: rotate( -45deg );
				-ms-transform: rotate( -45deg );
				-o-transform: rotate( -45deg );
				transform: rotate( -45deg );
			}


		/* WITH CAPTION */

		#imagelightbox-caption
		{
			text-align: center;
			color: #fff;
			background-color: #666;
			position: fixed;
			z-index: 10001;
			left: 0;
			right: 0;
			bottom: 0;
			padding: 0.625em; /* 10 */
		}


		/* WITH NAVIGATION */

		#imagelightbox-nav
		{
			background-color: #444;
			background-color: rgba( 0, 0, 0, .5 );
			position: fixed;
			z-index: 10001;
			left: 50%;
			bottom: 3.75em; /* 60 */
			padding: 0.313em; /* 5 */

			-webkit-transform: translateX( -50% );
			-moz-transform: translateX( -50% );
			-ms-transform: translateX( -50% );
			-o-transform: translateX( -50% );
			transform: translateX( -50% );

			-webkit-border-radius: 20px;
			-moz-border-radius: 20px;
			border-radius: 20px;
		}
			#imagelightbox-nav a
			{
				width: 1em; /* 20 */
				height: 1em; /* 20 */
				border: 1px solid #fff;
				display: inline-block;
				margin: 0 0.313em; /* 5 */

				-webkit-border-radius: 50%;
				-moz-border-radius: 50%;
				border-radius: 50%;
			}
			#imagelightbox-nav a.active
			{
				background-color: #fff;
			}

	#imagelightbox-loading,
	#imagelightbox-overlay,
	#imagelightbox-close,
	#imagelightbox-caption,
	#imagelightbox-nav
	{
		-webkit-animation: fade-in .25s linear;
		-moz-animation: fade-in .25s linear;
		-o-animation: fade-in .25s linear;
		animation: fade-in .25s linear;
	}
		@-webkit-keyframes fade-in
		{
			from	{ opacity: 0; }
			to		{ opacity: 1; }
		}
		@-moz-keyframes fade-in
		{
			from	{ opacity: 0; }
			to		{ opacity: 1; }
		}
		@-o-keyframes fade-in
		{
			from	{ opacity: 0; }
			to		{ opacity: 1; }
		}
		@keyframes fade-in
		{
			from	{ opacity: 0; }
			to		{ opacity: 1; }
		}

	@media only screen and (max-width: 41.250em) /* 660 */
	{
		#container
		{
			width: 100%;
		}
		#imagelightbox-close
		{
			top: 1.25em; /* 20 */
			right: 1.25em; /* 20 */
		}
		#imagelightbox-nav
		{
			bottom: 1.25em; /* 20 */
		}
	}
	



</style>
 <div class="row" >
 <div class="container">
 	 <h1>
          View Our Menu
     </h1>
 <div class="col-md-4">         
        <ul >
            <li>
            <a href="img/menu2.jpg"  data-imagelightbox="e">
              <img src="img/menu2.jpg" class="center-block " width="200" height="450" alt="Our Menu" />
            </a>          
            </li> 
        </ul>
        </div>
<div class="col-md-4"> 
		<ul>
            <li> 
            <a href="img/menu3.jpg"  data-imagelightbox="e">
              <img src="img/menu3.jpg" class="center-block "  width="200" height="450" alt="Our Menu" />
            </a>            
            </li>
            </ul>
            </div>

<div class="col-md-4"> 
		<ul>
            <li> 
              <a href="img/menu4.jpg"  data-imagelightbox="e">
              <img src="img/menu4.jpg"  class="center-block "  width="200" height="450" alt="Our Menu" />
            </a>
            </li>
        </ul>
        </div>
    </div>    
  </div>
</div>

<div class="row">

 <div class="col-md-4"> <div class="text-center"><a href="appetizers.php"><img class="img-responsive img-circle center-block" src="img/naan01.jpg"></a><h3 class="text-center"> Appetizers</h3><p> Begin your fine dining experience at Mayoor with one of our delicious appetizers. Try our wonderful Samosa or Papri Chat! </p> <div class="text-center"><a href="appetizers.php" class="btn btn-success text-center"> Appetizers </a></div></div></div> 

 <div class="col-md-4"><div class="text-center"><a href="entrees.php"><img class="img-responsive img-circle center-block" src="img/dish01.jpg"></a><h3 class="text-center"> Main Entrees</h3><p> Mayoor serves the finest in Northern and Southern Indian cuisines. Choose from a hand-picked selection of traditional entrees. Or, experience one of our chef's original creations. You are sure to find a dish that will soon become your favorite! </p><div class="text-center"><a href="entrees.php" class="btn btn-success text-center"> Main Entrees </a></div></div></div>

 <div class="col-md-4"><div class="text-center"><a href="desserts.php"><img class="img-responsive img-circle center-block" src="img/lassi.jpg"></a><h3 class="text-center"> Sides and Desserts </h3><p> Enhance your dining experience at Mayoor with one of our delicious sides. Finish with a choice of succulent desserts that will entice you! </p> <div class="text-center"><a href="desserts.php" class="btn btn-success text-center"> Desserts </a></div></div></div>

<div class="row"><div class="col-md-12"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>&nbsp;&nbsp;&nbsp;</div></div>

<div class="co-md-12"></div>

<div class="co-md-12"></div>

<div class="panel panel-success"><div class="panel-heading"><h4> Testimonials: </h4></div><div class="panel-body"><p> "Highly recommended. Great, attentive service. Jacob was a wonderful host. My two kids and I enjoyed the papri chat and samosa appetizers, followed by the delicious butter chicken and fresh garlic naan..." </p> <a href="http://www.yelp.com/biz/mayoor-indian-restaurant-zephyrhills-2" class="btn btn-success text-center"> Read more... </a><br></div></div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js" type="text/javascript"></script>
<script src="js/imagelightbox.min.js"></script>

<script>
    $( function()
    {
        $( 'a' ).imageLightbox();
    });
</script>

<footer class="foot" ><div class="container "><div class="row"><div class="col-md-12"> &nbsp;&nbsp;&nbsp;<br>&nbsp;&nbsp;&nbsp;</div></div><div class="row"><div class="col-md-12"><img src="img/mayoor_logo.jpg" class="center-block"></div></div><div class="row"><div class="col-md-12"><a class="center-block" href="mailto:mayoorindiancuisin@gmail.com"> mayoorindiancuisin@gmail.com</a></div></div><div class="row"><div class="col-md-12 center-block "><small> Content copyright &copy;<?php echo date('Y');?> Mayoor Indian Restaurant, inc. Web Development provided by <a href="http://behance.net/DRicardoDesigns" title="DRicardo Designs"> Don Ricardo JR @ DRicardoDesigns&trade;</a> All rights reserved. </small><a href="https://www.facebook.com/MayoorIndia" class="btn btn-lg"><img src="img/fb.png" alt="facebook"/></a>
</div></div></div></footer><script src="js/bootstrap.min.js"></script><script>(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o), m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','//www.google-analytics.com/analytics.js','ga');ga('create', 'UA-39681643-2', 'mayoorrestaurant.com');ga('send', 'pageview');</script></body></html>