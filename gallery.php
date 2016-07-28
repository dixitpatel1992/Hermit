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
       

        
        .container {min-height: 100%;}
    </style>
</head>

<body style="background-color:black;color:white;font-family: myFirstFont;font-size:16px;letter-spacing: 2px;">

        <div class="container">
            <?php include 'header.php';?>

            <form method="post" action="sendMail.php">
            <div class="row" id="Content">
                <div class="col-md-2 col-xs-2">
                    
                </div>
                <div class="col-md-8 col-xs-8" id="content" style="margin-top:2px;padding-top:18%;float:left;text-align:center;border-right:20px solid black;"> 
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
                        <button type="submit" style="color:white;width:100%;display:block;background-color:black;">Submit</button>
                    </div>
                </div>
            </div>


            </form>

            
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
