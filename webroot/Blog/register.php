<?php include('users.php');


?>
<!DOCTYPE html>
 <html lang = "en">
  <head>
  	<meta charset = "UTF-8">
  	<meta charset = "viewport" content = "width-device-width,initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content = "ie-edge">
      
  	<!-- Font Awespme -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/css/all.min.css"/>
      
    <!--  Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Candal|Lora&display=swap" rel="stylesheet">

            <!-- Custom Styling   -->
    <link rel = "stylesheet" href = "blog.css" type = "text/css">
      
      <!-- Reset Styling -->
      <link rel="stylesheet" type="text/css" href="reset.css">
      
  	<title>Register</title>
  </head>
  <body>
  <?php include('header.php'); ?>  <!-- code for including navbar -->

      <div class="author-content">

          <form action="register.php" method="post">
          <h2 class = "form-title">Register</h2>

            <?php if(count($errors) > 0):?>            
                <div class="msg error">
                 <?php foreach ($errors as $error): ?>
                      <li><?php echo $error; ?></li>
                <?php endforeach; ?>
            </div>    
            <?php endif; ?>         
            
            
          <div>
              <label>Username</label>
              <input type = "text" name = "username" value = "<?php echo $username; ?>" class = "text-input">
          </div>
          <div>
              <label>Email</label>
              <input type = "email" name = "email"  value = "<?php echo $email; ?>" class = "text-input">
          </div>
          <div>
              <label>Password</label>
              <input type = "password" name = "password" value = "<?php echo $password; ?>" class = "text-input">
          </div>
          <div>
              <label>Confirm Password</label>
              <input type = "password" name = "passwordConfirmation" value = "<?php echo $passwordConfirmation; ?>" class = "text-input">              
          </div>
          <div>
              <button type = "submit" name = "register-btn" class = "btn btn-big">Register</button>
          </div>
          <p>or<a href = "login.php"> Sign In</a></p>
          </form>
	
	

	<!-- Custom Script -->
	<script src = "scripts.js"></script>

  </body>
  </html>
