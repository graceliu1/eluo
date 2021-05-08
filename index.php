<!DOCTYPE html>
<html>

<head>
    <title>Eluo</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    
    <?php include 'head.php'; ?>
    
    <style>
        /**JUMBOTRON AND GENERAL STYLING**/
        .jumbotron-header {
            background-image: linear-gradient(
            rgba(0, 0, 0, 0),
            rgba(0, 0, 0, 0)
            ), url("Images/main_background.jpg");
        
            min-height: 800px;

            background-position: left;
           
            
        }
        .jumbotron-content {
            display: flex;
            justify-content: center;
            align-items: center;
            
            /*border: 3px solid black;*/
            
            
        }
        .j-title {
            padding: 0 30px 0 35px;
            text-transform:uppercase;
            font-family: 'Crimson Text', serif;
            position: absolute;

            top: 230px;
            left: 330px;

            height: 200px;
            width: 300px;

            font-size: 80px;
            z-index: 2;
            background-color: white;
            color: black;
        }
        .j-text {
            padding: 0 30px 0 90px;
            font-family: 'Homemade Apple', serif;
            position: absolute;

            top: 190px;
            left: 560px;

            width: 450px;
            height: 300px;

            font-size:50px;
            z-index: 1;
            background-color: black;
            color: white;
        }
        .jumbotron-content:hover {
            transition: 0.5s;
            background-color: black;
            color: white;
        }


        .image-card {
            border-radius: 30px;
            min-height: 600px;
            background-image: linear-gradient(
                    rgba(0, 0, 0, 0),
                    rgba(0, 0, 0, 0)
                    ), url("Images/blue-powder.jpg");
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
          
            background-size: cover;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }
        .overlay-content {
            background-color: #F4F2C9;
            color: black;
            
            max-width: 50%;
            padding: 0 25px 0 20px;
            
        }
        .down-arrow {
            position:relative;
            top: 300px;
        }
        /**For FAQ Section */
        button {
            all: unset;
        }

        /*****************/

        /**CARD STYLES CSS**/
            .card-dark-gold{ background-color: #CA9703; } 
            .card-light-gold { background-color: #D5AD36; color: white; } 
            .card-cream { background-color: #F4F2C9; color: white;} /*LIGHT GREEN */
            .card-light-blue { background-color: #4488BF; color: white; } /*ORANGE*/
            .card-dark-blue { background-color: #265999; color: white;} /*ORANGE*/

        
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
    <?php $filename = 'index.php'?>
    
    <div class = "jumbotron text-center jumbotron-header"style ="padding-top:20px;" > 
    <?php include 'header.php'?>

    <div class = "shadow-lg jumbotron-content j-text">reinventing self care</div>
        <div class = "shadow-lg jumbotron-content j-title">Eluo</div>
    	
        <img src = "Images/down-arrow.png" width = "30" class = "down-arrow img-fluid">
    
       
    </div>
    <br>
    <div class = "container">

    <!--INTRODUCTION-->
    <div  data-aos="fade-left" data-aos-duration="1000"  class = "card-deck">
        <div class = "card container card-light-gold" style = "color: white"> 

            <div class = "">
                <div class = "card-body">
                    <div class = "card-title">
                        Who We Are
                    </div>
                    <p class = "large-paragraph"> We are what we eat. </p>
                        <!--Enter your grade and the math courses you have taken so far. The planned courses section is 
                        optional. After you click submit, a possible course pathway will be generated for you based on your input. 
                        
                        You must click "Reset" if you want to change any options.--> 
                    <p class = "large-paragraph">But do you know the true impact of every bite?
                    </p>
                    <p class = "large-paragraph"> According to a report on the environmental impacts of food production, 
                        26% of global greenhouse gas emissions are caused by food. 
                    
                    </p>
                    <p class = "large-paragraph">At <em>Eluo</em>, we're committed to helping our users 
                        remain aware of what they're eating and the <b>environmental impact of every bite</b>. Our 
                        application allows users to instantly check the environmental cost of food items.
                        To read more about our mission and how we're increasing sustainability, scroll down below.
                    </p>
                    <br>
                    <a href="math_selection_action_page.php" class="btn btn-lg btn-outline-light">Learn More</a>
                </div>
            </div>
        </div>
        <div class = "col-md-6" style = "color: white">
            <img src ="Images/blue-makeup.jpg" class = "img-thumbnail">
        </div>
    </div>
    
    <br><br><br>
    <!--PURPOSE-->
    <div data-aos="fade-right" data-aos-duration="1000" class = "card container card-light-blue">
        
        <div class = "card-body">
            <div class = "card-title">
                Food sustainability
            </div>
            <p class = "large-paragraph"> 
            The global food system accounts for around 26% of all greenhouse gas
            emissions, according to Our World in Data.  This threatens the future 
            of our planet, and the rising population will only exacerbate this 
            issue. How can we fix this?
            </p>
            
        </div>
        <br>
        <br>
    </div>
    

    <br><br><br>
    <!--IMAGE CARD-->
    <div data-aos="fade-left" data-aos-duration="1000" class = "card container card-cream image-card"> 
        
        <div class = "card-body card-img-overlay overlay-content" style = "padding-left: 30px;"> 
            <br>
            <div class = "card-title">
            The solution
            </div>

            <p class = "large-paragraph">
            The origin of our name: separately, "In Victus" means "In Food" in Latin. 
            But put together, Eluo means Invincible. We believe our product will 
            revolutionize the way people eat. The first stage is to launch it as a 
            web application. 
            </p>
            <p class = "large-paragraph">
            Our approach is two-sided. First, we're actively raising awareness. Eluo
            allows users to instantly understand whether a food item is sustainable 
            for the environment based on a variety of factors.  Second, we're creating long-term habits.
            Through a simple but effective interface, users gain knowledge of the 
            impact of their food habits on the environment. This motivates them 
            to seek new, healthier alternatives that are more beneficial to everyone. 
            </p>
        </div> 
    </div>
    
    <br><br><br>
    <!--FAQ SECTION-->
    <div data-aos="fade-left" data-aos-duration="1000" class = "card-deck" >
        <div  class = "col-md-5" style = "color: white">
            <img src ="Images/blue-skincare.jpg" class = "img-thumbnail">
        </div>
        <div  class = "card container col-md- card-dark-blue"> 
            
            <div class = "card-body">
                <div class = "card-title">
                    common QUESTIONS
                </div>
                <div class="accordion" id="accordion-tab-1">
                    <div class="card bg-light">
                        <div class="card-header" id="accordion-tab-1-heading-1">
                            <button class="btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-1" aria-expanded="false" aria-controls="accordion-tab-1-content-1">
                                Q: What are the criteria for the food based on? </button>
                        </div>
                        <div class="collapse" id="accordion-tab-1-content-1" aria-labelledby="accordion-tab-1-heading-1" data-parent="#accordion-tab-1">
                            <div class="card-body">
                                <p>We've used multiple reports from organizations like the Barilla Center for Food and Education.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card bg-light">
                        <div class="card-header" id="accordion-tab-1-heading-2">
                            <button class="btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-2" aria-expanded="false" aria-controls="accordion-tab-1-content-2">
                            Q: What does Eluo mean? </button>
                        </div>
                        <div class="collapse" id="accordion-tab-1-content-2" aria-labelledby="accordion-tab-1-heading-2" data-parent="#accordion-tab-1">
                            <div class="card-body">
                            <p>Separately, "In Victus" means "In Food" in Latin. But put together, Eluo means Invincible. </p>
                            </div>
                        </div>
                    </div>
                    <div class="card bg-light">
                        <div class="card-header" id="accordion-tab-1-heading-3">
                            
                                <button class="btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-3" aria-expanded="false" aria-controls="accordion-tab-1-content-3">
                                    Q: How can I use the image processing aspect of Eluo? </button>
                            
                        </div>
                        <div class="collapse" id="accordion-tab-1-content-3" aria-labelledby="accordion-tab-1-heading-3" data-parent="#accordion-tab-1">
                            <div class="card-body">
                                <p>Feel free to download the source code at our Github repository. The READ.ME file has 
                                more information.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card bg-light">
                        <div class="card-header" id="accordion-tab-1-heading-4">
                            
                                <button class="btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-4" aria-expanded="false" aria-controls="accordion-tab-1-content-4">
                                    Q: I'm interested in learning more. How can I help?</button>
                           
                        </div>
                        <div class="collapse" id="accordion-tab-1-content-4" aria-labelledby="accordion-tab-1-heading-4" data-parent="#accordion-tab-1">
                            <div class="card-body">
                                <p> Contact either Grace or Ria. </p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="accordion-tab-1-heading-5">
                            
                                <button class="btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-5" aria-expanded="false" aria-controls="accordion-tab-1-content-5">
                                    Q: I want to leave a longer message. How can I do this? </button>
                           
                        </div>
                        <div class="collapse" id="accordion-tab-1-content-5" aria-labelledby="accordion-tab-1-heading-5" data-parent="#accordion-tab-1">
                            <div class="card-body">
                                <p>Feel free to fill out the contact form on our Contact page and we'll try to get 
                                back to you within 72 business hours.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
    </div>
    
    
    <br><br><br>
    
    
    <!--CONTACT FORM BELOW
    <div data-aos="fade-in" data-aos-duration="1000" class = "card card-style4" style = "color: white"> 
        <div class = "card-header">
            <br>
            <h2 class = "container">CONTACT US:</h2>
        </div>
        <div class = "card-body">
            <form class = "container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="first">First Name</label>
                        <input type="text" class="form-control" placeholder="" id="first">
                        </div>
                    </div>
                
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="last">Last Name</label>
                        <input type="text" class="form-control" placeholder="" id="last">
                        </div>
                    </div>
                </div>
                <div class = "row">
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="tel" class="form-control" id="phone" placeholder="Phone">
                        </div>
                    </div>
                    <div class="col-md-6">
                
                        <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" placeholder="Email">
                        </div>
                    </div>
                </div>
                <div class = "row"> 
                    <div class="form-group col-md-6">
                        <label for="form_message">Message </label>
                        <textarea id="form_message" name="message" class="form-control" placeholder="Message" rows="4" data-error="Please, leave us a message."></textarea>
                    </div>
                </div>
                <br>
                <button type="submit" class="button" id = "button-2">Submit</button>
            </form>
            <br>
        </div>
    </div>
    -->
    </div> <!--END OF THE CONTAINER-->
    
    <!----------- Footer ------------>
    <?php include 'footer.php'; ?>
    

    <!-- OLD FOOTER
        <footer class= "text-center">
            <div class = "jumbotron jumbotron-footer"> 
            <h5>Copyright 2020 @ Grace Liu </h5>
            </div>
        </footer>
    -->
</body>

</html>