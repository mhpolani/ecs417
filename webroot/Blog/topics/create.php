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
      
     <title>Admin Section - Add Month</title>
  </head>
  <body>
  	<header>
  		<div class = "logo">
  			<h1 class = "logo-text"><span>Hamza</span>Productions</h1>
  		</div>
  		<i class = "fa fa-bars menu-toggle"></i>
  		<ul class = "nav">
  				<li>
				<a href = "#">
					<i class="fas fa-user-tie"></i>
					Hamza Polani
					<i class="fas fa-angle-double-down" style = "font-size:.8em"></i>
				</a>
				<ul>
				<li><a href = "#" class = "logout">Logout</a></li>
			 </ul>
  		</li>
  		</ul>
      </header>
      
	  <!-- Admin Page Wrapper -->
	  <div class = "admin-wrapper">
	
            <!-- Left Sidebar -->
            <div class="left-sidebar">
                <ul>
                    <li><a href="../posts/index.html">Manage Posts</a></li>
                    <li><a href="../users/index.html">Manage Users</a></li>
                    <li><a href="index.html">Manage Topics</a></li>
                </ul>
            </div>
            <!-- End of left sidebar -->

            <!-- Admin Content -->
            <div class="admin-content">
                <div class="button-group">
                    <a href="create.html" class="btn btn-big">Add Month</a>
                    <a href="index.html" class = "btn btn-big">Manage Month</a>
                </div>            
            

            <div class = "content">

                <h2 class="page-title">Add Month</h2>

               <form action="create.html" method = "post">
                   <div>
                       <label>Month</label>
                       <input type="text" name = "title" class = "text-input">
                   </div>
                   <div>
                        <label>Description</label>
                        <textarea name = "body" class = "body"></textarea>
                    </div> 
                    <div>
                        <button type = "submit" class = "btn btn-big">Add Topic</button>
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
