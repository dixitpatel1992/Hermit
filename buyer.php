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

     @media (min-width: 768px) {
          #logoImg {
            height: 75px;
          }
        }


        @font-face {
           font-family: myFirstFont;
           src: url(Apercu Pro Light.ttf);
        }
        input{
            background-color:black;border-top:black;border-left:black;border-right:black;text-align:center;outline: none;
        }

        .container {min-height: 100%;}



        .wrapper-dropdown-5 {
            /* Size & position */
            position: relative;
            width: 90%;
            margin: 0 auto;
            padding: 12px 15px;

            /* Styles */
            background: black;
            /*border-radius: 5px;*/
            box-shadow: 0 1px 0 rgba(0,0,0,0.2);
            cursor: pointer;
            outline: none;
            border-bottom: 1px solid white;
            transition: all 0.3s ease-out;
        }

        

        .wrapper-dropdown-5 .dropdown {
            /* Size & position */
            position: absolute;
            top: 100%;
            left: 0;
            right: 0;

            /* Styles */
            background: black;
            border-radius: 0 0 5px 5px;
            border: 1px solid rgba(0,0,0,0.2);
            border-top: none;
            border-bottom: none;
            list-style: none;
            transition: all 0.3s ease-out;

            /* Hiding */
            max-height: 0;
            overflow: hidden;
        }

        .wrapper-dropdown-5 .dropdown li {
            /*padding: 0 10px ;*/
        }

        .wrapper-dropdown-5 .dropdown li input {            
            text-decoration: none;
            color: #333;
            padding: 10px 0;
            transition: all 0.3s ease-out;
            border-bottom: 0px solid #e6e8ea;
        }

        .wrapper-dropdown-5 .dropdown li:last-of-type a {
            border: none;
        }

        .wrapper-dropdown-5 .dropdown li i {
            margin-right: 5px;
            color: inherit;
            border-radius: 2px;
            vertical-align: middle;
        }

        /* Hover state */

        .wrapper-dropdown-5 .dropdown li:hover a {
            color: white;
        }

        .wrapper-dropdown-5.active {
            border-radius: 5px 5px 0 0;
            background: black;
            box-shadow: none;
            border-bottom: none;
            color: white;
        }

        .wrapper-dropdown-5.active:after {
            border-color: #82d1ff transparent;
        }

        .wrapper-dropdown-5.active .dropdown {
            border-bottom: 1px solid rgba(0,0,0,0.2);
            max-height: 400px;
        }


        
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
                    <div class="row">
                        <div class="col-md-12 col-xs-12"> 
                            <br>
                            <div id="dd1" class="wrapper-dropdown-5" tabindex="1"><span id="dd">what type of art you want</span>
                                <ul class="dropdown">
                                    <li><i><input type="checkbox"></i>asddsa</li>
                                    <li><i><input type="checkbox" value="sdaa"></i>sdadas</li>
                                    <li><i><input type="checkbox"></i>Log out</li>
                                </ul>
                            </div>


                            <!--input type="text" placeholder="what type of art you want" style="width:90%"-->
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

                <div class="col-md-12 col-xs-12">
                    future founders & chicago innovation exchange
                </div>
        </div>
                

                
                
    
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $(function() {

        var dd = new DropDown( $('#dd') );

        $(document).click(function() {
            // all dropdowns
            $('.wrapper-dropdown-1').removeClass('active');
        });

    });



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


    function DropDown(el) {
    this.dd = el;
    this.initEvents();
    }
    DropDown.prototype = {
        initEvents : function() {
            var obj = this;

            obj.dd.on('click', function(event){
                $("#dd1").toggleClass('active');
                //alert("");
                event.stopPropagation();
            }); 
        }
    }
    
    </script>

</body>

</html>
