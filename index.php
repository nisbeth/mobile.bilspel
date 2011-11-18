<!DOCTYPE html> 
<html> 
	<head> 
	<title>Page Title</title> 
	
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
        <link rel="stylesheet" href="style.min.css"/>
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.0rc3/jquery.mobile-1.0rc3.min.css" />
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
	<script type="text/javascript" src="http://code.jquery.com/mobile/1.0rc3/jquery.mobile-1.0rc3.min.js"></script>
        <script type="text/javascript" src="init.js"></script>
        
</head> 

<body> 

     <div id="fb-root"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) {return;}
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
    <div data-role="page" id="foo">

	<div data-role="header">
		<img style="margin-left: 8px;"src="img/m2.png"/>
	</div><!-- /header -->

	<div data-role="content">	
                <iframe src="http://player.vimeo.com/video/30689939?title=0&amp;byline=0&amp;portrait=0&amp;autoplay=1"
                width="290" height="150" frameborder="0" webkitAllowFullScreen allowFullScreen></iframe>

                <p>Welcome to our cutdown mobile site, here you can catch the latest 
                highscores, watch trailers or just contact
                us if there is something on your mind that we can help you with.
                If you are new to the game, start by watching the trailer above.</p>          	
                
                <div id="share">
                  <ul class="shar" style="list-style: none; margin-left: -40px;">
                      <li style="margin-bottom: 10px;"><div class="fb-like" 
                               data-href="http://mobile.ettjavlabilspel.com" 
                               data-send="false" data-layout="button_count" 
                               data-width="280" data-show-faces="false" 
                               data-action="recommend" data-font="lucida grande">                                
                          </div>
                      </li>

                      <li><a href="https://twitter.com/ettjavlabilspel" class="twitter-follow-button">Follow @ettjavlabilspel</a>
                        <script src="//platform.twitter.com/widgets.js" type="text/javascript"></script></li>
                  </ul>
                </div>
               
	</div><!-- /content -->

	<div data-role="footer" data-position="fixed">
            <div data-role="navbar">
                <ul>  
                <li> <a href="#foo" data-transition="pop">HOME</a> </li>
                <li> <a href="#bar" data-transition="fade">ABOUT</a> </li>
                <li> <a href="#contact" data-transition="flip">CONTACT</a> </li>
                </ul>
            </div>
        </div><!-- /footer -->
</div><!-- /page -->


<!-- Start of second page -->
<div data-role="page" id="bar">

	<div data-role="header">
		<img style="margin-left: 8px;" src="img/m2.png"/>
	</div><!-- /header -->

	<div data-role="content">	
            
            <img style="width: 280px;" src="img/logo_new.png"/>
            <h2>watch teaser</h2>
            <hr>
             <p>Welcome to the official site of ”Ett jävla bilspel”, translated to english it goes something like ”A fucking cargame”.
                Born out of the minds of four university students, “Ett jävla bilspel” is a racing game for Android and iOS.
                The game mixes the elements of graphics and gameplay of older, classic racing games with the modern technology of the smartphones.
                It consequently makes the game fun and interesting for a wide audience.
             </p>	
	<p><a href="#foo" type="button">HOME</a></p>
                
                
              
                
                
	</div><!-- /content -->

	<div data-role="footer" data-position="fixed">
            <div data-role="navbar">
                <ul>  
                <li> <a href="#foo" data-transition="pop">HOME</a> </li>
                <li> <a href="#bar" data-transition="fade">ABOUT</a> </li>
                <li> <a href="#contact" data-transition="flip">CONTACT</a> </li>
                </ul>
            </div>
        </div><!-- /footer -->
</div><!-- /page -->

<!-- Start of second page -->
<div data-role="page" id="contact">

	<div data-role="header">
		<img style="margin-left: 8px;"src="img/m2.png"/>
	</div><!-- /header -->

	<div data-role="content">	
		<p>CONTACT</p>		
		
                <ul data-role="listview" data-theme="c">
                    <li><a href="#simon" data-transition="pop">android</a></li>
                    <li><a href="#jonas" data-transition="pop">graphics</a></li>
                    <li><a href="#andreas" data-transition="pop">iPhone</a></li>
                    <li><a href="#emil" data-transition="pop">web</a></li>
                </ul>
                
                
                
                
                
	</div><!-- /content -->

	<div data-role="footer" data-position="fixed">
            <div data-role="navbar">
                <ul>  
                <li> <a href="#foo" data-transition="pop">HOME</a> </li>
                <li> <a href="#bar" data-transition="fade">ABOUT</a> </li>
                <li> <a href="#contact" data-transition="flip">CONTACT</a> </li>
                </ul>
            </div>
        </div><!-- /footer -->
</div><!-- /page -->


<div data-role="page" id="simon">

	<div data-role="header">
		<img style="margin-left: 8px;" src="img/m2.png"/>
	</div><!-- /header -->
	<div data-role="content">	
		
              
                <p>Android</p>
                
                
                
                
	</div><!-- /content -->

	<div data-role="footer" data-position="fixed">
            <div data-role="navbar">
                <ul>  
                <li> <a href="#foo" data-transition="pop">HOME</a> </li>
                <li> <a href="#bar" data-transition="fade">ABOUT</a> </li>
                <li> <a href="#contact" data-transition="flip">CONTACT</a> </li>
                </ul>
            </div>
        </div><!-- /footer -->
</div><!-- /page -->
<div data-role="page" id="jonas">

	<div data-role="header">
		<img style="margin-left: 8px;" src="img/m2.png"/>
	</div><!-- /header -->
	<div data-role="content">	
		
              
            <p>Managment</p>
                
                
                
                
	</div><!-- /content -->

	<div data-role="footer" data-position="fixed">
            <div data-role="navbar">
                <ul>  
                <li> <a href="#foo" data-transition="pop">HOME</a> </li>
                <li> <a href="#bar" data-transition="fade">ABOUT</a> </li>
                <li> <a href="#contact" data-transition="flip">CONTACT</a> </li>
                </ul>
            </div>
        </div><!-- /footer -->
</div><!-- /page -->
<div data-role="page" id="andreas">

	<div data-role="header">
		<img style="margin-left: 8px;" src="img/m2.png"/>
	</div><!-- /header -->
	<div data-role="content">			             
                
            <p>iPhone</p>
                
                
                
	</div><!-- /content -->

	<div data-role="footer" data-position="fixed">
            <div data-role="navbar">
                <ul>  
                <li> <a href="#foo" data-transition="pop">HOME</a> </li>
                <li> <a href="#bar" data-transition="fade">ABOUT</a> </li>
                <li> <a href="#contact" data-transition="flip">CONTACT</a> </li>
                </ul>
            </div>
        </div><!-- /footer -->
</div><!-- /page -->
<div data-role="page" id="emil">

	<div data-role="header">
		<img style="margin-left: 8px;" src="img/m2.png"/>
	</div><!-- /header -->
	<div data-role="content">	
		
            <p>web</p>    
                
                
                
                
                
	</div><!-- /content -->

	<div data-role="footer" data-position="fixed">
            <div data-role="navbar">
                <ul>  
                <li> <a href="#foo" data-transition="pop">HOME</a> </li>
                <li> <a href="#bar" data-transition="fade">ABOUT</a> </li>
                <li> <a href="#contact" data-transition="flip">CONTACT</a> </li>
                </ul>
            </div>
        </div><!-- /footer -->
</div><!-- /page -->
</body>
</html>