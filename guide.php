<!DOCTYPE html>
<html>

<head>
    <title>Guide</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <?php include 'head.php'; ?>

    <style>
       
       .jumbotron-header {
			color: white;
            background-image: linear-gradient(
            rgba(0, 0, 0, 0.1),
            rgba(0, 0, 0, 0.1)
            ), url("Images/guide_background.jpg");
            
            min-height: 450px;

			background-position: top;
        }
		.jumbotron-content {
			background-color: black;
			color: white;
			font-family: 'Crimson Text', serif;
			border: 3px solid black;
			padding: 0 25px 0 20px;
            font-size: 70px;
            text-transform: uppercase;
		}
		.jumbotron-content:hover {
			background-color: white;
            color: black;
            transition: 0.5s;
		}
        .card-style1 {
            background-color: #F2D0A7; /*CREAM*/
            color: black;
        }
        .card-style2 {
            background-color: #8C634A; /*DARK BROWN*/
            color: white;
        }
        .card-style3 {
            background-color: #F28705; /*EGG YOLK*/
        }
        .card-style4 {
            background-color: #5A7302; /*GREEN*/
        }
        button {
            all: unset;
        }
        
    </style> 
</head>  

<body>
    <script>
        AOS.init();
      </script>
    <!--THE BELOW IS OPTIONAL JAVASCRIPT CODE-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <?php $filename = 'guide.php'?>
    
    <?php include 'header.php'; ?>

    <div class = "jumbotron text-center jumbotron-header" > 
        <br><br><br><br>
    	<span class = "jumbotron-content">User Guide</span>
		<br><br>
		<a href="index.php" class="btn btn-lg btn-outline-light">Home</a>
    </div>

    <!--HOW TO USE-->
    <div class = "container">
        <div data-aos="fade-in" data-aos-duration="1500" class = "row" > 
            <div data-aos="fade-in" data-aos-duration="1500" class = "col-md-6" style = "color:lightpink">
                <img src ="Images/guide_1.jpg" class = "img-thumbnail">
            </div>
            <div class = "card card-style1 col-md-6" >
            
                
                <div class = "card-body">
                    <div class = "card-title">
                        More information
                    </div>

                    <ol>
                        <li>Take an image of a food that you are eating. This can be a meal, or a specific food .</li>
                        <li>Our image recognition software will then detect the foods that are seen in your picture.</li>
                        <li>Then, we check those ingredients against a large database of foods that classify each a great choice, a poor choice, or
				one that may require more research.</li>
                        <li>In a simple way, from uploading a picture of your food and the click of a button, you'll know how to do your part to contribute
				to agricultural sustainability.</li>
                        <li>In the long term, be sure to keep these habits going! It's important that we start moving in the right direction to ensure
				that we are doing everything we can to keep our planet green. </li>
                    </ol>
                    <div class = "text-center">
                        <br>
                    <a href="index.php" class="btn btn-light" >Start</a>
                    </div> 
                </div>
            </div>
            
        </div>
    
    <br>
    <div data-aos="fade-in" data-aos-duration="1500" class = "card container card-style2" > 
        
        <div class = "card-body">
            <div class = "card-title">
              platforms used
            </div>
            <p>
            Our product works by using pre-trained models for object detection
             to recognize foods from images. The ingredients and foods that 
             were detected in the user's meals are then checked across a 
             database of foods. Ultimately, the site provides feedback 
             on what foods are sustainable, which ones are not, and which
              ones might require some more research. The programming languages and 
              platforms used include: HTML, CSS, PHP, Bootstrap, Heroku, Python, and 
              Clarifai API.
            </p>
        </div>
    </div>
    <br>
    </div>
    <br>
    <?php include 'footer.php'; ?>
    <!--
    <footer class= "jumbotron text-center">
        
        <div class="container">
            <div class = "fa-3x">
                <i class="fab fa-facebook-square"></i>
                <i class="fas fa-envelope-square"></i>
                <i class="fas fa-phone-square-alt"></i>
                <i class="fas fa-camera"></i>

        
            </div>
        </div>
        <br>
        <h6>Copyright 2020 @ Grace Liu </h6>
    </footer>
    -->
</body>

</html>
