<style type="text/css">

	/*Start Code Custom Fonts*/
	 @font-face {
           font-family: myFirstFont;
           src: url(Apercu Pro Light.ttf);
        }
	/*End Code Custom Fonts*/


		

		
		#content
        {
          border-left:12px solid white;
        }
		#para
        {
         
          padding-top: 80px;
        }



    /*Start Code Custom Input box css*/
        input{
            background-color:black;border-top:black;border-left:black;border-right:black;text-align:center;outline: none;
        }
    /*End Code Custom Input box css*/

</style>
<style type="text/css">
	
	/*Start Code media query for logo height and margin on mobile*/
	@media (min-width: 768px) {
          #logoImg {
            height: 110px;
          }          
          #headerLogo
          {
              margin-left: 10px;
          }
          #para
          {
              
              padding-top: 0px !important;
          }
          #content
          {              
              border-left:20px solid white;              
          }
        }
    /*End Code media query for logo height and margin on mobile*/

</style>




	<div class="row" id="headerLogo" style="margin-left:0px;">
        <a href="index.php">
        	<img src="logo.svg" id="logoImg" height=60px>       <!--Img size for mobile and tablet, see the mediquery for bigger screen than 768px-->
		</a>
        <hr style="margin:0px;width:75%">    
    </div>