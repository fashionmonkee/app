<!DOCTYPE HTML>
<html>
	<head>
		<title>Fashion Monkee | Home </title>
		<link href="landing_page/css/bootstrap.css" rel='stylesheet' type='text/css' />
		<link rel="shortcut icon" href="landing_page/images/fav.png" />	
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="landing_page/js/jquery.min.js"></script>
		 
		<script type="text/javascript" src="landing_page/js/move-top.js"></script>
		<script type="text/javascript" src="landing_page/js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
		 <!-- Custom Theme files -->
		<link href="landing_page/css/style.css" rel='stylesheet' type='text/css' />
   		 <!-- Custom Theme files -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		</script>
		<!----webfonts---->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,800,700' rel='stylesheet' type='text/css'>
		<!----//webfonts---->
		<!----start-top-nav-script---->
		<script>
			$(function() {
				var pull 		= $('#pull');
					menu 		= $('nav ul');
					menuHeight	= menu.height();
				$(pull).on('click', function(e) {
					e.preventDefault();
					menu.slideToggle();
				});
				$(window).resize(function(){
	        		var w = $(window).width();
	        		if(w > 320 && menu.is(':hidden')) {
	        			menu.removeAttr('style');
	        		}
	    		});
			});
		</script>
		
</head>
	<body>
		
		<div class="header-section">
			
			<div id="home" class="header">
				<div class="container">
					<div class="top-header">
						<div class="logo">
							<a href="#"><img src="landing_page/images/logo.png" title="logo" /></a>
						</div>
					
						 <nav class="top-nav">
							<ul class="top-nav">
								<li class="active"><a href="#home" class="scroll">Home </a></li>
								<li class="page-scroll"><a href="#fea" class="scroll">FEATURES</a></li>
								<li class="page-scroll"><a href="#gallery" class="scroll">Gallery</a></li>						
								<li class="contatct-active" class="page-scroll"><a href="#contact" class="scroll">Contact</a></li>
							</ul>
							<a href="#" id="pull"><img src="landing_page/images/nav-icon.png" title="menu" /></a>
						</nav>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
			
			<script src="landing_page/js/responsiveslides.min.js"></script>
			 <script>
			  
			    $(function () {
			      
			      $("#slider4").responsiveSlides({
			        auto: true,
			        pager: true,
			        nav: true,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
			      });
			
			    });
			  </script>
			
			    <div  id="top" class="callbacks_container">
			      <ul class="rslides" id="slider4">
			        <li>
			          <img src="landing_page/images/slide.jpg" alt="">
			          <div class="caption text-center">
			          	<div class="slide-text-info">
			          		<h1>Introducing <span>Umbrella.</span></h1>
			          		<h2>Made to modify and use anywhere</h2>
			          		<div class="slide-text">
			          			<ul>
			          				<li><span> </span>Sed ut perspiciatis unde omnis </li>
			          				<li><span> </span>Iste natus error sit voluptatem accusantium </li>
			          				<li><span> </span>doloremque laudantium</li>
			          			</ul>
			          		</div>
			          		<div class="clearfix"> </div>
			          		<div class="big-btns">
			          			<a class="download" href="#"><label> </label>Download</a>			          			
			          		</div>
			          	</div>
			          </div>
			        </li>
			        <li>
			          <img src="landing_page/images/slide.jpg" alt="">
			          <div class="caption text-center">
			          	<div class="slide-text-info">
			          		<h1>Introducing <span>Amazing app.</span></h1>
			          		<h2>Made to modify and use anywhere</h2>
			          		<div class="slide-text">
			          			<ul>
			          				<li><span> </span>Sed ut perspiciatis unde omnis </li>
			          				<li><span> </span>Iste natus error sit voluptatem accusantium </li>
			          				<li><span> </span>doloremque laudantium</li>
			          			</ul>
			          		</div>
			          		<div class="clearfix"> </div>
			          		<div class="big-btns">
			          			<a class="download" href="#"><label> </label>Download</a>
			          			<a class="view" href="#"><label> </label>Vew Gallery</a>
			          		</div>
			          	</div>
			          </div>
			        </li>
			        <li>
			          <img src="landing_page/images/slide.jpg" alt="">
			          <div class="caption text-center">
			          	<div class="slide-text-info">
			          		<h1>Introducing <span>Best app.</span></h1>
			          		<h2>Made to modify and use anywhere</h2>
			          		<div class="slide-text">
			          			<ul>
			          				<li><span> </span>Sed ut perspiciatis unde omnis </li>
			          				<li><span> </span>Iste natus error sit voluptatem accusantium </li>
			          				<li><span> </span>doloremque laudantium</li>
			          			</ul>
			          		</div>
			          		<div class="clearfix"> </div>
			          		<div class="big-btns">
			          			<a class="download" href="#"><label> </label>Download</a>
			          			<a class="view" href="#"><label> </label>Vew Gallery</a>
			          		</div>
			          	</div>
			          </div>
			        </li>
			        <li>
			          <img src="landing_page/images/slide.jpg" alt="">
			           <div class="caption text-center">
			           <div class="slide-text-info">
			          		<h1>Introducing <span>Amazing app.</span></h1>
			          		<h2>Made to modify and use anywhere</h2>
			          		<div class="slide-text">
			          			<ul>
			          				<li><span> </span>Sed ut perspiciatis unde omnis </li>
			          				<li><span> </span>Iste natus error sit voluptatem accusantium </li>
			          				<li><span> </span>doloremque laudantium</li>
			          			</ul>
			          		</div>
			          		<div class="clearfix"> </div>
			          		<div class="big-btns">
			          				<a class="download" href="#"><label> </label>Download</a>
			          				<a class="view" href="#"><label> </label>Vew Gallery</a>
			          		</div>
			          	</div>
			          </div>
			        </li>
			      </ul>
			    </div>
			    <div class="clearfix"> </div>
			    
			    	<div class="divice-demo">
			    		<img src="landing_page/images/divice-in-hand.png" title="demo" />
			    	</div>
			</div>
			
			
			<div id="fea" class="features">
				<div class="container">
					<div class="section-head text-center">
						<h3><span class="frist"> </span>AMAZING FEATURES<span class="second"> </span></h3>
						<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta.</p>
					</div>
					<div class="features-grids">
						<div class="col-md-4 features-grid">
							<div class="features-grid-info">
								<div class="col-md-2 features-icon">
									<span class="f-icon0"> </span>
								</div>
								<div class="col-md-10 features-info">
									<h4>Accusan timar</h4>
									<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="features-grid-info">
								<div class="col-md-2 features-icon">
									<span class="f-icon1"> </span>
								</div>
								<div class="col-md-10 features-info">
									<h4>Accusan timar</h4>
									<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="features-grid-info">
								<div class="col-md-2 features-icon">
									<span class="f-icon2"> </span>
								</div>
								<div class="col-md-10 features-info">
									<h4>Accusan timar</h4>
									<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
								</div>
								<div class="clearfix"> </div>
							</div>
							
						</div>
						<div class="col-md-4 features-grid">
							<div class="big-divice">
								<img src="landing_page/images/divice.png" title="features-demo" />
							</div>
						</div>
						<div class="col-md-4 features-grid">
							<div class="features-grid-info">
								<div class="col-md-2 features-icon1">
									<span class="f-icon3"> </span>
								</div>
								<div class="col-md-10 features-info">
									<h4>Accusan timar</h4>
									<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="features-grid-info">
								<div class="col-md-2 features-icon1">
									<span class="f-icon4"> </span>
								</div>
								<div class="col-md-10 features-info">
									<h4>Accusan timar</h4>
									<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="features-grid-info">
								<div class="col-md-2 features-icon1">
									<span class="f-icon5"> </span>
								</div>
								<div class="col-md-10 features-info">
									<h4>Accusan timar</h4>
									<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
								</div>
								<div class="clearfix"> </div>
							</div>
							
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
					
					
					<div id="gallery" class="screen-shot-gallery">
						<div class="container">
							<div class="section-head text-center">
								<h3><span class="frist"> </span>SCREENSHOTS GALLERY<span class="second"> </span></h3>
								<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta.</p>
							</div>
						</div>
						
						<div class="sreen-gallery-cursual">
							
							<link href="landing_page/css/owl.carousel.css" rel="stylesheet">
							    <script src="landing_page/js/owl.carousel.js"></script>
							        <script>
							    $(document).ready(function() {
							      $("#owl-demo").owlCarousel({
							        items : 3,
							        lazyLoad : true,
							        autoPlay : true,
							      });
							    });
							    </script>
							
							 <div class="container">
						       <div id="owl-demo" class="owl-carousel">
					                <div class="item">
					                	<img class="lazyOwl" data-src="landing_page/images/screen.jpg" alt="screen-name">
					                </div>
					                <div class="item">
					                	<img class="lazyOwl" data-src="landing_page/images/screen.jpg" alt="screen-name">
					                </div>
					                <div class="item">
					                	<img class="lazyOwl" data-src="landing_page/images/screen.jpg" alt="screen-name">
					                </div>
					                <div class="item">
					                	<img class="lazyOwl" data-src="landing_page/images/screen.jpg" alt="screen-name">
					                </div>
					                <div class="item">
					                	<img class="lazyOwl" data-src="landing_page/images/screen.jpg" alt="screen-name">
					                </div>
					                <div class="item">
					                	<img class="lazyOwl" data-src="landing_page/images/screen.jpg" alt="screen-name">
					                </div>
					                <div class="item">
					                	<img class="lazyOwl" data-src="landing_page/images/screen.jpg" alt="screen-name">
					                </div>
					                <div class="item">
					                	<img class="lazyOwl" data-src="landing_page/images/screen.jpg" alt="screen-name">
					                </div>
				              </div>
						</div>
						
					</div>
				</div>
				
		
				<div class="clearfix"> </div>
				
					<div class="test-monials text-center">
						<div class="container">
							<span><img src="landing_page/images/icon1.png" title="quit"/></span>
						<script>
							    $(document).ready(function() {
							      $("#owl-demo1").owlCarousel({
							        items : 1,
							        lazyLoad : true,
							        autoPlay : true,
							        itemsDesktop : 2,
							      });
							    });
						 </script>
						<div id="owl-demo1" class="owl-carousel">
					       <div class="item">
					          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
					     		<div class="quit-people">
					     			<img src="landing_page/images/quit-people.jpg" title="name" />
					     			<h4><a href="#"> Robert Leonaro</a></h4>
					     			<span>CEO at CUBEDES</span>
					     		</div>
					       </div>
					        <div class="item">
					          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
					     		<div class="quit-people">
					     			<img src="landing_page/images/quit-people.jpg" title="name" />
					     			<h4><a href="#"> Robert Leonaro</a></h4>
					     			<span>CEO at CUBEDES</span>
					     		</div>
					       </div>
					        <div class="item">
					          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
					     		<div class="quit-people">
					     			<img src="landing_page/images/quit-people.jpg" title="name" />
					     			<h4><a href="#"> Robert Leonaro</a></h4>
					     			<span>CEO at CUBEDES</span>
					     		</div>
					       </div>
				         </div>
				         </div>
					</div>
				
			
			<div id="contact" class="getintouch">
				<div class="container">
					<div class="section-head text-center">
						<h3><span class="frist"> </span>GET IN TOUCH<span class="second"> </span></h3>
						<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta.</p>
					</div>
					
					<div class="col-md-9 getintouch-left">
						<div class="contact-form col-md-10">
							<h3>Say hello!</h3>
							<form>
								<input type="text" placeholder="Name" required />
								<input type="text"  placeholder="Email" required />
								<textarea placeholder="Message" required /> </textarea>
								<input type="submit" value="Send message" />
							</form>
						</div>
						<!-- <ul class="footer-social-icons col-md-2 text-center">
							<li><a class="f-be" href="#"><span> </span></a></li>
							<li><a class="f-tw" href="#"><span> </span></a></li>
							<li><a class="f-db" href="#"><span> </span></a></li>
							<li><a class="f-ti" href="#"><span> </span></a></li>
							<li><a class="f-go" href="#"><span> </span></a></li>
							<div class="clearfix"> </div>
						</ul> -->
					</div>
					<div class="col-md-2 getintouch-left">
						<div class="footer-divice">
							<img src="landing_page/images/divice-half.png" title="getintouch" />
						</div>
					</div>	
				</div>
			</div>



			<div class="footer">
				<div class="container">
					<div class="footer-grids">
						<div class="col-md-3 footer-grid about-info">
							<a href="#"><img src="landing_page/images/logo.png" title="Umbrella" /></a>
							<p>eusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
						</div>
						<div class="col-md-3 footer-grid subscribe">
							<h3>Subscribe </h3>
							<form>
								<input type="text" placeholder="" required />
								<input type="submit" value="" />
							</form>
							<p>eusmod tempor incididunt ut labore et dolore magna aliqua. </p>
						</div>						
						<div class="clearfix"> </div>
						<script type="text/javascript">
							$(document).ready(function() {
							$().UItoTop({ easingType: 'easeOutQuart' });								
							});
						</script>
							<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
					</div>
				</div>
			</div>
		
			
	</body>
</html>

