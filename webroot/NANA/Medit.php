<?php 
include('restrict.php');
?>
<!DOCTYPE html>
 <html lang = "en">
  <head>
  	<meta charset = "UTF-8">
  	<meta charset = "viewport" content = "width-device-width,initial-scale=1.0">
  	<meta http-equiv="X-UA-Compatible" content = "ie-edge">
  	
  	<!-- Font Awesome -->
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/css/all.min.css"/>

    <!--  Google fonts -->
    
	<link href="https://fonts.googleapis.com/css2?family=Candal&family=Raleway&display=swap" rel="stylesheet">
	
	<!-- Custom Styling -->
      <link rel = "stylesheet" href = "../blog.css" type = "text/css">
      
    <!-- Custom Styling -->
  	<link rel = "stylesheet" href = "../admin.css" type = "text/css">
      
     <title>Admin Section - Add Post</title>
  </head>
  <body>
  	
      <?php include('../adminHeader.php'); ?>
      
	  <!-- Admin Page Wrapper -->
	  <div class = "admin-wrapper">
	
      <?php include('../adminSidebar.php'); ?>
            
            

            <!-- Admin Content -->
            <div class="admin-content">
                <div class="button-group">
                    <a href="create.php" class="btn btn-big">Add Month</a>
                    <a href="index.php" class = "btn btn-big">Manage Month</a>
                </div>            
            

            <div class = "content">

                <h2 class="page-title">Add Month</h2>

               <form action="create.php" method = "post">
                   <div>
                       <label>Month</label>
                       <input type="text" name = "title" class = "text-input">
                   </div>
                   <div>
                        <label>Description</label>
                        <textarea name = "body" class = "body"></textarea>
                    </div> 
                    <div>
                        <button type = "submit" class = "btn btn-big">Add Month</button>
                    </div>
               </form>
            </div>
      </div>

            <!-- End of Admin Content -->
		  
	</div>
	  <!-- End of page Wrapper -->
	  
	<!-- JQuery -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>  

	<!-- Custom Script -->
	<script src = "../scripts.js"></script>

  </body>
  </html>
