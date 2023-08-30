<?php include('../datalayer/server.php') ?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta property="og:title" content="Mandna" />
    <meta property="og:description" content="Making Healthcare Readily Available" />
    <meta property="og:image" content="https://Mandna.netlify.app/images/Mandna-logos_transparent.png" />
    <meta property="og:image:secure_url" content="https://Mandna.netlify.app/images/logo-white.png" />
    <meta property="og:url" content="https://Mandna.netlify.app" />
    <meta property="og:type" content="website" />
    <meta property="og:image:type" content="images/Mandna-logos_transparent.png" />
    <meta property="og:image:width" content="400" />
    <meta property="og:image:height" content="300" />
    <meta property="og:image:alt" content="Mandna" />

    <link rel="shortcut icon" href="images/Mandna-logos_transparent.png">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Signika:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	<title>Doctor Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<header>
      <div class="logo">
        <a href="#"><img src="images/Mandna-logos_transparent.png" alt="Mandna"></a>
      </div>
      <div class="nav-links">
                
                    <ul class="nav-link">
                        <a href="./index.php">Home</a>
                    </ul>

                    
                
</header>
<section id="consult" class="virtual-consultation mobile-mode">
        <div class="consult-container">
            <div class="consult-header">
                <h2> Doctor Schedule Consultation </h2>
            </div>
           
        </div>
    </section>
  
	<div class="header1">
	<h2>Doctor Login</h2>
    </div>
	<form method="post" action="login2.php">
    <?php include ('../datalayer/errors.php')?>
    <div class="input-group">
		<label>Doctor ID</label>
		<input type="text" name="doctorID">
    </div>
    <div class="input-group">
		<label>Password</label>
		<input type="Password" name="doctorpassword">
    <div class="input-group">
		<button type="submit" name="Login2" class="btn"> Login</button>
	</div>
</form>

</body>
</html>