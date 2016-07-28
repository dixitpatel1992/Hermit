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
    <style>
       
        a:hover{
            text-decoration: none;
        }

        .container {min-height: 100%;}
        


        #para
        {
          font-size: 12px;
          padding-top: 80px;
        }
        #Footer
        {
          font-size: 12px;
        }
        

        @media (min-width: 768px) {
          
          #para
          {
              font-size: 16px;
              text-align: center;
              padding-top: 0px !important;
          }
           #Footer
          {
              font-size: 16px;
              text-align: center;
          }
          #content
          {              
              border-left:20px solid white;              
          }
          
        }              
    </style>
</head>

<body style="background-color:black;color:white;font-size:16px;letter-spacing: 2px;font-weight:350;">

        <div class="container">

            <?php include 'header.php';?>

            <div class="row" id="Content">

                <!--Making some space on mobile/desktop-->
                <div class="col-md-2 col-xs-2">
                    
                </div>
                <!--Making some space on mobile/desktop-->



                <!--Main content, vertical bar is a border in here-->
                <div class="col-md-8 col-xs-8" id="content" style="margin-top:2px;padding-top:18%;float:left;text-align:center;border-right:20px solid black;">  
                    <p style="text-align:left" id="para">                 
                        “We seek to close the gap between artists and customers by making it simple to commission personalized artwork. Our algorithms help you find the perfect artist, without having to look through countless portfolios. We provide a space and means for the artists to create, which gives you a safer, easier and faster way to get the artwork you always dreamed of. “
                    </p>
                </div>
                <!--Main content, vertical bar is a border in here-->


                <!--Menu on desktop-->
                <div class="col-md-2 hidden-xs">
                    <div style="border-bottom:2px solid white;border-left:2px solid white;padding-left:5px;margin-bottom:100%;margin-top:100px;"> 
                        <a href="gallery.php" style="color:white;width:100%;margin-top:10%;display:block;">art galleries</a>
                    </div>

                    <div style="border-bottom:2px solid white;border-left:2px solid white;padding-left:5px;margin-bottom:100%;"> 
                        <a href="artist.php" style="color:white;width:100%;display:block;">artist</a>
                    </div>

                    <div style="border-bottom:2px solid white;border-left:2px solid white;padding-left:5px"> 
                        <a href="buyer.php" style="color:white;width:100%;display:block;">buyer</a>
                    </div>
                </div>
                <!--Menu on desktop-->


                <!--creating some gap on mobile-->
                <div class="col-xs-2 hidden-md">&nbsp;
                </div>
                <!--creating some gap on mobile-->

            </div>


            
        </div>


        <!-- Footer for our affiliates-->
        <div class="row" id="Footer" style="text-align:center">
                <div class="col-md-4 col-xs-3"> 
                        <hr style="margin-top:10px;margin-bottom:0px;">
                </div>
                <div class="col-md-4 col-xs-6"> Our Affiliates</div>
                <div class="col-md-4 col-xs-3"> 
                        <hr style="margin-top:10px;margin-bottom:0px;">
                </div>

                <div class="col-md-12 col-xs-12">
                    future founders & polsky exchange north
                </div>
        </div>
        <!-- Footer for our affiliates-->
        
        <!--Nav Menu on mobile-->
        <nav style="margin-top:63px;">
          <ul class="list-unstyled main-menu" >
         
            <!--Include your navigation here-->
            
            <li style="text-align:center"><a href="gallery.php">art galleries</a></li>
            <li style="text-align:center"><a href="artist.php">artist</a></li>
            <li style="text-align:center"><a href="buyer.php">buyer</a></li>
            <!--li><a href="#">Dropdown</a>
              <ul class="list-unstyled">
                  <li class="sub-nav"><a href="#">Sub Menu One <span class="icon"></span></a></li>
                  <li class="sub-nav"><a href="#">Sub Menu Two <span class="icon"></span></a></li>
                  <li class="sub-nav"><a href="#">Sub Menu Three <span class="icon"></span></a></li>
                  <li class="sub-nav"><a href="#">Sub Menu Four <span class="icon"></span></a></li>
                  <li class="sub-nav"><a href="#">Sub Menu Five <span class="icon"></span></a></li>
              </ul>
            </li-->
            <!--li><a href="#">Menu Four <span class="icon"></span></a></li>
            <li><a href="#">Menu Five <span class="icon"></span></a></li-->
          </ul>
        </nav>
        <!--Nav Menu on mobile-->
         


        <!--mobile nav "Menu" div -->
        <div class="hidden-lg">
            <div class="navbar navbar-fixed-top ">             
                <div class="navbar-header pull-right">
                  
                      
                      <a id="nav-toggle" href="#"><span></span></a>
                  
                </div>
            </div>
        </div>  
        <!--mobile nav "Menu" div -->    

                
                
    
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    
    

    $(document).ready(function(){                                               
 
       //Navigation Menu Slider
        $('#nav-toggle').on('click',function(e){
            e.preventDefault();
            $('body').toggleClass('nav-expanded');
        });
        


        $('#nav-close').on('click',function(e){
            e.preventDefault();
            $('body').removeClass('nav-expanded');
        });
 
        // Initialize navgoco with default options
        
 
      });



    //Main container div to equals to the page height
    $(function(){
      $('.container').css({ height: $(window).innerHeight() });
      $(window).resize(function(){
        $('.container').css({ height: $(window).innerHeight() });
      });
    });
    //Main container div to equals to the page height




    
    </script>




    <!--CSS only related to mobile menu-->
    <style type="text/css">
            
    a.nav-expander {
      background: none repeat scroll 0 0 #000000;
      color: #FFFFFF;
      display: block;
      font-size: 15px;
      font-weight: 400;
      height: 50px;
      margin-right: 0;
      padding: 1em 1.6em 2em;
      position: absolute;
      right: 0;
      text-decoration: none;
      text-transform: uppercase;
      top: 0;
      transition: right 0.3s ease-in-out 0s;
      width: 130px;
      z-index: 12;
     
      transition: right 0.3s ease-in-out 0s;
      -webkit-transition: right 0.3s ease-in-out 0s;
      -moz-transition: right 0.3s ease-in-out 0s;
      -o-transition: right 0.3s ease-in-out 0s;
 
    }
     
    a.nav-expander:hover {
      cursor: pointer;
    }
     
    a.nav-expander.fixed {
      position: fixed;
    }
     
    .nav-expanded a.nav-expander.fixed {
        right: 20em;
    }

    nav {
      background: black;
      display: block;
      height: 100%;
      overflow: auto;
      position: fixed;
      right: -20em;
      font-size: 15px;
      top: 0;
      width: 20em;
      z-index: 2000;
     
      transition: right 0.3s ease-in-out 0s;
      -webkit-transition: right 0.3s ease-in-out 0s;
      -moz-transition: right 0.3s ease-in-out 0s;
      -o-transition: right 0.3s ease-in-out 0s;
 
    }
    .nav-expanded nav {
      right: 0;
    }
     
    body.nav-expanded {
      margin-left: 0em;
      transition: right 0.4s ease-in-out 0s;
      -webkit-transition: right 0.4s ease-in-out 0s;
      -moz-transition: right 0.4s ease-in-out 0s;
      -o-transition: right 0.4s ease-in-out 0s;
    }
     
    #nav-close {
      font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
      font-weight: 300;
      font-size: 16px;
      padding-right: 10px;
    }
    .main-menu {
      /*padding-top: 12px;*/
    }
     
    .main-menu li {
      border-bottom: 3px solid white;
      border-left: 5px solid white;
      margin-left: 20px;
      margin-top:80px;
      font-size: 18px;
      padding: 12px;
    }
     
    .main-menu li a {
      color: white;
      text-decoration: none;
    }
     
    .main-menu li a:hover {
      color: #FFFFFF;
      text-decoration: none;
    }
     
    .main-menu li .sub-nav {
      border-bottom: 0px;
      padding: 4px;
    }
     
    .main-menu a .caret {
        width: 0;
        height: 0;
        display: inline-block;
        vertical-align: top;
        border-top: 4px solid #4f5963;
        border-right: 4px solid transparent;
        border-left: 4px solid transparent;
        content: "";
        margin-top: 8px;
    }
     
    .main-menu a:hover .caret {
        border-top-color: #4f5963;
    }
     
    .main-menu li.open > a > .caret {
        border-top: none;
        border-bottom: 4px solid #4f5963;
        border-right: 4px solid transparent;
        border-left: 4px solid transparent;
    }
     
    .main-menu li.open > a:hover > .caret {
        border-bottom-color: #4f5963;
    }
     
    .icon:before {
      font-family: 'FontAwesome';
      font-style: normal;
      font-variant: normal;
      font-weight: normal;
      line-height: 1;
      text-transform: none;
      content: '\f105';
    }
     
    .main-menu li > a > span.icon {
      float: right;
      margin: 0.1em 1.7em -0.1em 0;
      opacity: 0;
      -webkit-transition: all 0.2s ease-in-out;
      -moz-transition: all 0.2s ease-in-out;
      -o-transition: all 0.2s ease-in-out;
      transition: all 0.2s ease-in-out;
     
    }
     
    .main-menu li > a:hover > span.icon {
      float: right;
      margin: 0.1em 0.8em -0.1em 0;
      opacity: 1;
    }
        </style>

        <!--CSS only related to mobile menu-->




        <!--CSS/js only related to hamburger-->
        <style type="text/css">
          #nav-toggle { position: absolute; left: 80%; top: 50%; }

          #nav-toggle { cursor: pointer; padding: 10px 35px 16px 0px; }
          #nav-toggle span, #nav-toggle span:before, #nav-toggle span:after {
            cursor: pointer;
            border-radius: 1px;
            height: 5px;
            width: 35px;
            background: white;
            position: absolute;
            display: block;
            content: '';
          }
          #nav-toggle span:before {
            top: -10px; 
          }
          #nav-toggle span:after {
            bottom: -10px;
          }

          #nav-toggle span, #nav-toggle span:before, #nav-toggle span:after {
            transition: all 500ms ease-in-out;
          }
          #nav-toggle.active span {
            background-color: transparent;
          }
          #nav-toggle.active span:before, #nav-toggle.active span:after {
            top: 0;
          }
          #nav-toggle.active span:before {
            transform: rotate(45deg);
          }
          #nav-toggle.active span:after {
            transform: rotate(-45deg);
          }
        </style>
        <script type="text/javascript">
          document.querySelector( "#nav-toggle" )
          .addEventListener( "click", function() {
            this.classList.toggle( "active" );
          });
        </script>
        <!--CSS/js only related to hamburger-->

</body>

</html>
