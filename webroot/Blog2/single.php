<?php include('posts.php'); //included to get functionality of db.php for reuable functions

if (isset($_GET['ID']))
{
	$post = selectOne('POSTS',['ID' => $_GET['ID']]); //fetch post clicked from index and display fetched post on single.php
}

$posts = selectAll('POSTS', ['published' => 1]);


?>
<!DOCTYPE html>
 <html lang = "en">
  <head>
  	<meta charset = "UTF-8">
  	<meta charset = "viewport" content = "width-device-width,initial-scale=1.0">
  	<meta http-equiv="X-UA-Compatible" content = "ie-edge">
  	<!-- Font Awespme -->
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/css/all.min.css"/>
    <!-- 5- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Candal|Lora&display=swap" rel="stylesheet">
  	<link rel = "stylesheet" href = "blog.css" type = "text/css">
  	<title><?php echo $post['title']; ?> | HamzaMan</title>
  </head>
  <body>
  <?php include('header.php'); ?>
	  <!-- Page Wrapper -->
	  <div class = "page-wrapper">
				  
		  <!-- Content -->
		  <div class="content clearfloats">

				<!-- Main Content -->
			  <div class="main-content single">
			<h1 class="post-title">
			<?php echo $post['title']; ?>
			</h1>
			<div class="class post-content">
					<p>
					<?php echo ($post['body']) ?>
					</p>
			</div>

			  </div>			  
			  <!-- End of Main COntent -->
			  <!-- SideBar -->
			  <div class = "sidebar single">

				  <div class="section trending">
					  <h2 class="section-title">Popular</h2>	

						<?php foreach($posts as $p): ?>
					  <div class="post clearfloats">

						  <img src="Images/wooh.png" alt="">
						  <a href = "" class = "title">
						  <h4><?php echo $p['title'] ?></h4>
						  </a>
					  </div>			
					  <?php endforeach;?>
					

				  </div>

				  <div class = "section topics">
					  <h2 class = "section-title">Topics</h2>
					  <ul>
						  <li><a href = "#">About Me</a></li>
						  <li><a href = "#">Skills and Achievements</a></li>
						  <li><a href = "#">Education and Qualifications</a></li>
						  <li><a href = "#">Experience</a></li>
						  <li><a href = "#">Portfolio</a></li>
						  <li><a href = "#">Contact</a></li>
						  <li><a href = "#">Blog</a></li>
					  </ul>
				  </div>
			  </div>
			  	<!-- End of SideBar -->
		  </div>
		  <!-- End of Content -->
       </div>
	  <!-- End of page Wrapper -->

	  <!-- Footer -->
		   <div class = "footer">  <!--x -->

			<div class = "footer-content">  <!-- y -->

				<div class = "footer-section about">
					<h1 class = "logo-text"><span>Hamza</span>Productions</h1>
					<p>HamzaProductions is a fictional blog chahahahahahahahahahahahahahahaha</p>
					<div class = "contact">
						<span><i class ="fas fa-phone"></i></span> &nbsp; 123-456-789</span>
						<span><i class = "fas fa-envelope"></i> &nbsp; info@Mhpolanto.com</span>
					</div>
					<div class = "socials">
						<a href = "#"><i class = "fab fa-facebook"></i></a>
						<a href = "#"><i class = "fab fa-youtube"></i></a>
						<a href = "#"><i class = "fab fa-instagram"></i></a>
						<a href = "#"><i class = "fab fa-twitter"></i></a>						
					</div>
				
				</div>
				
				<div class = "footer-section links">
					<h2>Quick Links</h2>
					<br>
					<ul>
						<a href = "#"><li>Events</li></a>
						<a href = "#"><li>Events</li></a>
						<a href = "#"><li>Events</li></a>
						<a href = "#"><li>Events</li></a>
						<a href = "#"><li>Events</li></a>
						<a href = "#"><li>Events</li></a>
						<a href = "#"><li>Events</li></a>
					
				</div>
				<div class = "footer-section contact-form">
					<h2>Contact us</h2>
					<br>
					<form action = "dummyIndex.html" method = "post">
						<input type = "email" name = "email" class = "text-input contact-input" placeholder = "Your email address...">
						<textarea rows = "4" name = "message" class = "text-input contact-input" placeholder = "Your message...."></textarea>
						<button type="submit" class="btn btn-big contact-btn">
							<i class="fas fa-envelope"></i>
							Send
						</button>

						</form>

					</form>
				</div>
			
			</div>			 <!-- y -->

			  <div class = "footer-bottom">
				&copy; PolaniTex.com | Designed by Hamza Polani	
			  </div>

		  </div>  <!--x -->
	  <!-- End of footer -->
	<!-- JQuery -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>  

	<!-- SLICK Carousel -->
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

	<!-- Custom Script -->
	<script src = "scripts.js"></script>

  </body>
  </html>