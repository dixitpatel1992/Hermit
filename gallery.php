<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>hermit - Art buying and selling made easy</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        @font-face {
           font-family: myFirstFont;
           src: url(Apercu Pro Light.ttf);
        }
        input{
            background-color:black;border-top:black;border-left:black;border-right:black;text-align:center;outline: none;
        }

        @media (min-width: 768px) {
          #logoImg {
            height: 75px;
          }
        }

        .container {min-height: 100%;}
    </style>
</head>

<body style="background-color:black;color:white;font-family: myFirstFont;font-size:16px;letter-spacing: 2px;">

        <div class="container">
            <div class="row" id="headerLogo">
                <img src="logo.svg" id="logoImg" height=50px>       <!--Img size for mobile and tablet, see the media query for bigger screen than 768px-->
                <hr style="margin:0px;width:75%">
            </div>
            <div class="row" id="Content">
                <div class="col-md-2 col-xs-2">
                    
                </div>
                <div class="col-md-8 col-xs-8" style="margin-top:2px;padding-top:18%;float:left;text-align:center;border-left:20px solid white;border-right:20px solid black;"> 
                    <div class="row">
                        <div class="col-md-6 col-xs-6"> 
                            <input type="text" placeholder="first name" style="width:80%">
                        </div>   
                        <div class="col-md-6 col-xs-6"> 
                            <input type="text" placeholder="last name" style="width:80%">
                        </div>
                    </div>



                    <div class="row">
                        <br>
                        <div class="col-md-6 col-xs-6"> 
                            <input type="text" placeholder="email" style="width:80%">
                        </div>   
                        <div class="col-md-6 col-xs-6"> 
                            <input type="text" placeholder="phone" style="width:80%">
                        </div>
                    </div>


                    <div class="row">
                        <br>
                        <div class="col-md-12 col-xs-12"> 
                            <input type="text" placeholder="website" style="width:90%">
                        </div> 
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-xs-12"> 
                            <br>
                            <input type="text" placeholder="how did you hear about us" style="width:90%">
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-xs-2">

                    <!--div style="border-bottom:2px solid white;border-left:2px solid white;padding-left:5px;margin-bottom:100%;"> 
                        <a href="#" style="color:white;width:100%;display:block;">gallery</a>
                    </div>

                    <div style="border-bottom:2px solid white;border-left:2px solid white;padding-left:5px;margin-bottom:100%;"> 
                        <a href="#" style="color:white;width:100%;display:block;">artist</a>
                    </div>

                    <div style="border-bottom:2px solid white;border-left:2px solid white;padding-left:5px"> 
                        <a href="#" style="color:white;width:100%;display:block;">buyer</a>
                    </div-->



                </div>

            </div>
            <div class="row">
                <div class="col-md-10 col-xs-6">
                    <br>
                </div>
                <div class="col-md-2 col-xs-6">
                    <br><br>
                    <div style="border-bottom:2px solid white;border-left:2px solid white;padding-left:5px;margin-bottom:100%;"> 
                        <a href="#" style="color:white;width:100%;display:block;">Submit</a>
                    </div>
                </div>
            </div>

            
        </div>
        <div class="row" id="Footer" style="text-align:center">
                
                <!--div style="width:100%;text-align:center;">
                    <span style="width:40%;float:left;"> 
                        <hr style="margin-top:10px;margin-bottom:0px;">
                    </span>
                    <span>Our Affiliates</span>
                     <span style="width:40%;float:right;"> 
                        <hr style="margin-top:10px;margin-bottom:0px;">
                    </span>
                </div-->
                
                <div class="col-md-4 col-xs-3"> 
                        <hr style="margin-top:10px;margin-bottom:0px;">
                </div>
                <div class="col-md-4 col-xs-6"> Our Affiliates</div>
                <div class="col-md-4 col-xs-3"> 
                        <hr style="margin-top:10px;margin-bottom:0px;">
                </div>

                <br>
                future founders & chicago innovation exchange
        </div>
                

                
                
    
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });


    $(function(){
      $('.container').css({ height: $(window).innerHeight() });
      $(window).resize(function(){
        $('.container').css({ height: $(window).innerHeight() });
      });
    });
    
    </script>

</body>

</html>
