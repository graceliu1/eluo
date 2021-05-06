<!DOCTYPE html>
<html>

<head>
    <title>Contact Us</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <?php include 'head.php'; ?>

    <style>
       
        .jumbotron-header {
            color: white;
            background-image: linear-gradient(
            rgba(0, 0, 0, 0.3),
            rgba(0, 0, 0, 0.3)
            ), url("Images/grey_wallpaper.jpg");
            
            min-height: 450px;
            
            background-position: left;
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
            background-color: #E74762;
        }
        .card-style2 {
            background-color: #FBD7D3;
        }
        .card-style3 {
            background-color: #fffbf7;
        }
        .card-style4 {
            background-color: #FBAFBC;
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
    
    
    <?php $filename = 'contact.php'?>
    
    <?php include 'header.php'; ?>

    <div class = "jumbotron text-center jumbotron-header" > 
        <br><br><br><br>
        
        <span class = "jumbotron-content">Contact Us</span>
		<br><br>
		<a href="index.php" class="btn btn-lg btn-outline-light">Home</a>
    </div>

    <!--HOW TO USE-->
    <div class = "container text-center">
    <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSfzprm1gtCL91R0EqlnHtYFxpk3GNrIjE0IM-ItlZXjt8B-2g/viewform?embedded=true" width="640" height="769" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
    
    <br>
    </div>
    <br>
    <?php include 'footer.php'; ?>
    
</body>

</html>