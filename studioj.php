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
            <img src="images/studioj.png">
        </div>
        <div class="projecttext">
            <h5><b>Studio.J Website</b></h5>
            <p>This project was a two-team project we created as 
                our first practical exam in ITELEC 4100. Mostly, when creating websites, I'm more on the frontend
                but in this project, I also did a lot of the backend parts. This project i a movie reservation project that
                basically lets users reserve a movie with their choice of food, receive email confirmation, view blogs, and send message on contact.
                Administrator can add or remove movie, add, update, or delete blogs, and view users' messages.<br>
                <br>
                Click <a href="http://clsuqrcode.website/index.php" style="text-decoration:none; color: #153668;"><b>Studio.J</b></a> to visit website.
            </p>
        </div>
    </div>

    <div class="projectScreenshots">
        <h4>Project Screenshots</h4><br>
        <div class="projectsPics">
            <img src="projects/studioj1.png" class="projectPicsImg">
            <img src="projects/studioj2.png" class="projectPicsImg">
            <img src="projects/studioj3.png" class="projectPicsImg">
            <img src="projects/studioj4.png" class="projectPicsImg">
            <img src="projects/studioj5.png" class="projectPicsImg">
            <img src="projects/studioj6.png" class="projectPicsImg">
        </div>
    </div>


    </body>
</html>