<!-- This is an admin only file to which the admin is redirected to once they login-->

<?php include('posts.php'); 
   
?>
<!DOCTYPE html>
 <html lang = "en">
  <head>
  	<meta charset = "UTF-8">
  	
  	<!-- Font Awesome -->
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/css/all.min.css"/>

    <!--  Google fonts -->
    
	<link href="https://fonts.googleapis.com/css2?family=Candal&family=Raleway&display=swap" rel="stylesheet">
	
	<!-- Custom Styling -->
      <link rel = "stylesheet" href = "blog.css" type = "text/css">
      
    <!-- Custom Styling -->
    <link rel = "stylesheet" href = "admin.css" type = "text/css">
    
    <!-- Reset Styling -->
	  <link rel="stylesheet" type="text/css" href="reset.css">
      
     <title>Admin Section - Dashboard</title>
  </head>
  <body>
  	
      <?php include('header.php'); ?>  <!-- code for including navbar -->
      
	  <!-- Admin Page Wrapper -->
	  <div class = "admin-wrapper">

    <div class="left-sidebar">
                <ul>
                    <li><a href="postsindex.php">Manage Posts</a></li>  
                </ul>
            </div>
	                       
            <!-- Admin Content -->
            <div class="admin-content">
                      
            

            <div class = "content">

                <h2 class="page-title">Dashboard</h2>

                <?php include('messages.php'); ?>

                 <?php if(count($errors) > 0):?>            
                <div class="msg error">
                 <?php foreach ($errors as $error): ?>
                      <li><?php echo $error; ?></li>
                <?php endforeach; ?>
            </div>    
            <?php endif; ?>       

             
            </div>
      </div>
            <!-- End of Admin Content -->
		  
	</div>
	  <!-- End of page Wrapper -->
	  
	<!-- JQuery -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>  

	<!-- Custom Script -->
	<script src = "scripts.js"></script>

  </body>
  </html>
