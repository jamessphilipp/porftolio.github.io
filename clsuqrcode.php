<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">	

    <!--Custom Styles-->
	<link rel="stylesheet" href="css/stylePrimary.css">

	<!-- FontAwesome -->
	<script src="https://kit.fontawesome.com/9f3c722a02.js" crossorigin="anonymous"></script>

<title>James' Portfolio</title>
</head>
<body>

    <!-- Navigation Bar -->
	<nav class="navbar navbar-expand-lg navbarprojects" >
		<div class="collapse navbar-collapse justify-content-center">
			<ul class="nav justify-content-center">
				<li class="nav-item navHover">
					<a class="nav-link" href="index.php" >Home<span class="sr-only">(current)</span></a>
				</li>

				<li class="nav-item active navHover">
					<a class="nav-link" href="myprojects.php"><b>My Projects</b></a>
				</li>

				<li class="nav-item navHover">
					<a class="nav-link" href="aboutme.php">About Me</a>
				</li>
                
			</ul>
		</div>
	</nav>

    <div class="divBtn">
        <button class="backbutton"><i class="fas fa-chevron-left"></i>&nbsp<a href="myprojects.php" style="text-decoration:none;color:black;">Back</a></button>    
    </div>
    <div class="logocontainer">
        <div class="containerimg">
            <img src="images/clsuqrcode.png">
        </div>
        <div class="projecttext">
            <h5><b>CLSU QR Code</b></h5>
            <p>This is our Capstone Project called <b>CLSU QR-Code Based Employee and Visitor Entry 
                Information System</b>. We are a team of three and I worked on the frontend of the system. We used VS Code for the coding envvironment, PHP for the programming language, mySQL for the database,
                and JavaScript. For the design, we used CSS and Bootstrap. PHPMailer is used for sending emails, FPDF for 
                converting reports into PDF format, and Semaphore API key for sending SMS to users. It also has a mobile app.
                We used Android Studio IDE with Java as the language and we used WebView.
            
            <p>Click <b><a href="https://clsuqrcode.com/login.php" style="text-decoration:none; color: #153668;">CLSU QR Code</b> to visit website.</p>
        </div>
    </div>

    <div class="projectScreenshots">
        <h4>Project Screenshots</h4><br>
        <div class="projectsPics">
            <img src="projects/clsuqrcode1.png" class="projectPicsImg">
            <img src="projects/clsuqrcode2.png" class="projectPicsImg">
            <img src="projects/clsuqrcode3.png" class="projectPicsImg">
            <img src="projects/clsuqrcode4.png" class="projectPicsImg">
            <img src="projects/clsuqrcode5.png" class="projectPicsImg">
            
        </div>
    </div>


    </body>
</html>