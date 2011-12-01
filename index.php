<!DOCTYPE html> 
<html> 
	<head> 
	<title>Page Title</title> 
	
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="viewport" content="user-scalable=no, width=device-width" />
	
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

	
		<img style="margin-left: 8px; margin-top: 6px;"src="img/mblk.png"/>       
                
                <div style="height: 45px; width: 100%; border-bottom: 1px solid #000; background-color: rgba(0,0,0, 0.7);
                     position: absolute; top: 50px;">
                   
                    <table style="margin: 4px auto 0 auto;">
                        <tr>
                            <td><a href="https://market.android.com/details?id=se.ettjavlabilspel"><img src="img/market_m.png"></a></td>
                            <td><a href="#"><img src="img/app_store_m.png"></a></td>
                        </tr>
                    </table>
                        
                    
                    
                
                </div>


	<div data-role="content" style="background-image: url('img/light_tunnel.png');">	
            
            <div id="index" style="margin-top: 45px;">
                <iframe width="290" height="150" src="http://www.youtube.com/embed/nuwGo6ZGVv0" frameborder="0" allowfullscreen></iframe>

                <p style="color: #000; font-size: 18px;">Welcome to our cutdown mobile site, here you can catch the latest 
                highscores, watch trailers or just contact
                us if there is something on your mind that we can help you with.
                If you are new to the game, start by watching the trailer above. Enjoy!</p>          	
                
                
                <div id="share" data-position="fixed" style="background-color: rgba(0,0,0, 0.5); width: 480px; height: 80px; margin-left: -15px; margin-bottom: -15px;">
                  <ul class="shar" style="list-style: none; padding: 10px; margin-left: 5px;">
                      <li style="margin-bottom: 10px;"><div class="fb-like" 
                               data-href="http://mobile.ettjavlabilspel.com" 
                               data-send="false" data-layout="button_count" 
                               data-width="280" data-show-faces="false" 
                               data-action="recommend" data-font="lucida grande">                                
                          </div>
                      </li>

                      <li><a href="https://twitter.com/ettjavlabilspel" class="twitter-follow-button" data-button="grey" data-text-color="#FFFFFF" data-link-color="#00AEFF" data-show-count="false">Follow @ettjavlabilspel</a>
                    <script src="//platform.twitter.com/widgets.js" type="text/javascript"></script></li>
                  </ul>
                </div>
            </div>
	</div><!-- /content -->

	<div data-role="footer" data-position="fixed">
            <div data-role="navbar">
                <ul>  
                <li> <a href="#foo" data-transition="pop">HOME</a> </li>
                <li> <a href="#bar" data-transition="pop">ABOUT</a> </li>
                <li> <a href="#contact" data-transition="pop">CONTACT</a> </li>
                </ul>
            </div>
        </div><!-- /footer -->
</div><!-- /page -->


<!-- ABOUTPAGE -->
<div data-role="page" id="bar">

		<img style="margin-left: 8px; margin-top: 6px;" src="img/mblk.png"/>       
                
                <div style="height: 45px; width: 100%; border-bottom: 1px solid #000; background-color: rgba(0,0,0, 0.8);
                     position: absolute; top: 50px;">
                   
                    <table style="margin: 4px auto 0 auto;">
                        <tr>
                            <td><a href="https://market.android.com/details?id=se.ettjavlabilspel"><img src="img/market_m.png"></a></td>
                            <td><a href="#"><img src="img/app_store_m.png"></a></td>
                        </tr>
                    </table>
                        
                    
                    
                
                </div>


	<div data-role="content" style="background-image: url('img/light_tunnel.png'); height: 100%;">
            <div style="margin-top: 45px;">  
            <h3>ABOUT</h3>
            
            <h4>- ettjavlabilspel</h4>
  
             <p style="color: #000;">'Ett javla bilspel', translated to english it goes something like 'A fucking cargame'.
                Born out of the minds of four university students, 'Ett javla bilspel' is a racing game for Android and iOS.
                The game mixes the elements of graphics and gameplay of older, classic racing games with the modern technology of the smartphones.
                It consequently makes the game fun and interesting for a wide audience.
             </p>	
             
             
             <p id="more" style="color: #000">Continue reading..</p>
	<!--<p><a href="#foo" type="button">Back</a></p>-->
             
             <div class="info" style="display: none;">
                 <p style="color: #000;">In game you steer your car on the never ending highway running through different kinds of exotic locations.
                But beware, everything isn't fun and games. Every now and then obstacles in form of suicidal animals or constructions pop up and you will have to avoid them, or else you crash. You snooze, you lose.
                But If you're a good enough a driver to avoid them, you'll be rewarded with points increasing the further you drive.
                But the further you drive, the faster it'll go, and the difficulty will increase.
                Since the road never ends, the one who can survive the hard life on the road the longest gets the most points.
                Top scores from all over the world are shown on this site. Try getting there.
                On your way to the highest score around, don't forget to pick up powerups along the dangerous highway. Why not run over a speedboost to go faster? Or pick up a spraycan to swap your vehicles colors?</p>
                 
                 <p style="color: #000;">
                The game is played only with the gyro of your smarthphone and demands good responsiveness and concentration from the player.
                All you have to do is to let your car gas and tilt the phone to avoid or pick up what you like.
             </p>

             

             <p style="color: #000;">
                So head over to Android Market or App Store to pick up your copy and take advantage of the games awesome features:
             </p>

             

             <ul style="color: #000; margin-left: -15px;">
                 <li>Retro style gameplay and graphics</li>
                 <li>Never ending track</li>
                 <li>Roaring cars</li>
                 <li>Fearsome powerups</li>
                 <li>Deadly obstacles</li>
                 <li>Score sharing</li>
             </ul>
             
             </div>
                
                
              
            </div>      
                
	</div><!-- /content -->

	<div data-role="footer" data-position="fixed">
            <div data-role="navbar">
                <ul>  
                <li> <a href="#foo" data-transition="pop">HOME</a> </li>
                <li> <a href="#bar" data-transition="pop">ABOUT</a> </li>
                <li> <a href="#contact" data-transition="pop">CONTACT</a> </li>
                </ul>
            </div>
        </div><!-- /footer -->
</div><!-- /page -->

<!-- CONTACT PAGE -->
<div data-role="page" id="contact">

		<img style="margin-left: 8px; margin-top: 8px;"src="img/mblk.png"/>       
                
                <div style="height: 45px; width: 100%; border-bottom: 1px solid #000; background-color: rgba(0,0,0, 0.5);
                     position: absolute; top: 50px;">
                    
                    <table style="margin: 4px auto 0 auto;">
                        <tr>
                            <td><a href="https://market.android.com/details?id=se.ettjavlabilspel"><img src="img/market_m.png"></a></td>
                            <td><a href="#"><img src="img/app_store_m.png"></a></td>
                        </tr>
                    </table>
                    
                    
                </div>

	<div data-role="content" style="background-image: url('img/light_tunnel.png'); background-position: fixed; top: -10px; height: 320px;">		
		
            <div style="margin-top: 45px;">
                    <a href="#simon" data-transition="pop" type="button">android</a>
                    <a href="#jonas" data-transition="pop" type="button">management</a>
                    <a href="#andreas" data-transition="pop" type="button">iPhone</a>
                    <a href="#emil" data-transition="pop" type="button">web</a>
                
            </div>
                
                
                
                
	</div><!-- /content -->

	<div data-role="footer" data-position="fixed">
            <div data-role="navbar">
                <ul>  
                <li> <a href="#foo" data-transition="pop">HOME</a> </li>
                <li> <a href="#bar" data-transition="pop">ABOUT</a> </li>
                <li> <a href="#contact" data-transition="pop">CONTACT</a> </li>
                </ul>
            </div>
        </div><!-- /footer -->
</div><!-- /page -->


<div data-role="page" id="simon">

		<img style="margin-left: 8px; margin-top: 8px;"src="img/mblk.png"/>       
                
                <div style="height: 45px; width: 100%; border-bottom: 1px solid #000; background-color: rgba(0,0,0, 0.5);
                     position: absolute; top: 50px;">
                    
                    <table style="margin: 4px auto 0 auto;">
                        <tr>
                            <td><a href="https://market.android.com/details?id=se.ettjavlabilspel"><img src="img/market_m.png"></a></td>
                            <td><a href="#"><img src="img/app_store_m.png"></a></td>
                        </tr>
                    </table>
                    
                    
                </div>
	<div data-role="content" style="background-image: url('img/light_tunnel.png'); height: 320px;">	
		
            <h3 style="margin-top: 50px;">Simon Zetterwall</h3>    
            
            <hr>
                
                
            <ul style="list-style: none; margin-left: -40px;">
                <li>Android development</li>
                <li><a href="mailto: simon.zettervall@gmail.com">simon.zettervall@gmail.com</a></li>
                  
            </ul>
                
                <a href="#contact" data-transition="pop" type="button" data-icon="back">Back</a>
                
	</div><!-- /content -->

	<div data-role="footer" data-position="fixed">
            <div data-role="navbar">
                <ul>  
                <li> <a href="#foo" data-transition="pop">HOME</a> </li>
                <li> <a href="#bar" data-transition="pop">ABOUT</a> </li>
                <li> <a href="#contact" data-transition="pop">CONTACT</a> </li>
                </ul>
            </div>
        </div><!-- /footer -->
</div><!-- /page -->
<div data-role="page" id="jonas">

		<img style="margin-left: 8px; margin-top: 8px;"src="img/mblk.png"/>       
                
                <div style="height: 45px; width: 100%; border-bottom: 1px solid #000; background-color: rgba(0,0,0, 0.5);
                     position: absolute; top: 50px;">
                    
                    <table style="margin: 4px auto 0 auto;">
                        <tr>
                            <td><a href="https://market.android.com/details?id=se.ettjavlabilspel"><img src="img/market_m.png"></a></td>
                            <td><a href="#"><img src="img/app_store_m.png"></a></td>
                        </tr>
                    </table>
                    
                    
                </div>
	<div data-role="content" style="background-image: url('img/light_tunnel.png'); height: 320px;">	
		
            <h3 style="margin-top: 50px;">Jonas Ryberg</h3>    
            
            <hr>
                
                
            <ul style="list-style: none; margin-left: -40px;">
                  <li style="font-weight: bold;">Managment</li><br />
                  <li><a href="mailto: jorgox@hotmail.com">jorgox@hotmail.com</a></li>
                  <li>+46 70 330 85 82 - Phone</li>
                  <li><a href="http://facebook.com/kjryberg">facebook.com/kjryberg</a></li>
                  <li><a href="https://twitter.com/MrJonasRyberg" class="twitter-follow-button" data-show-count="false">Follow @MrJonasRydberg</a>
                  <script src="//platform.twitter.com/widgets.js" type="text/javascript"></script></li>
            </ul>
                
                <a href="#contact" data-transition="pop" type="button" data-icon="back">Back</a>
                
	</div><!-- /content -->

	<div data-role="footer" data-position="fixed">
            <div data-role="navbar">
                <ul>  
                <li> <a href="#foo" data-transition="pop">HOME</a> </li>
                <li> <a href="#bar" data-transition="pop">ABOUT</a> </li>
                <li> <a href="#contact" data-transition="pop">CONTACT</a> </li>
                </ul>
            </div>
        </div><!-- /footer -->
</div><!-- /page -->
<div data-role="page" id="andreas">

		<img style="margin-left: 8px; margin-top: 8px;"src="img/mblk.png"/>       
                
                <div style="height: 45px; width: 100%; border-bottom: 1px solid #000; background-color: rgba(0,0,0, 0.5);
                     position: absolute; top: 50px;">
                    
                    <table style="margin: 4px auto 0 auto;">
                        <tr>
                            <td><a href="https://market.android.com/details?id=se.ettjavlabilspel"><img src="img/market_m.png"></a></td>
                            <td><a href="#"><img src="img/app_store_m.png"></a></td>
                        </tr>
                    </table>
                    
                    
                </div>
	<div data-role="content" style="background-image: url('img/light_tunnel.png'); height: 320px;" >	
		
            <h3 style="margin-top: 50px;">Andreas Areschoug</h3>    
            
            <hr>
                
                
            <ul style="list-style: none; margin-left: -40px;">
                 <li style="font-weight: bold;">iPhone development</li><br />
                 <li><a href="mailto: andreas.areschoug@gmail.com">andreas.areschoug@gmail.com</a></li>
                 <li><a href="https://twitter.com/blondinbosse" class="twitter-follow-button" data-show-count="false">Follow @blondinbosse</a>
                 <script src="//platform.twitter.com/widgets.js" type="text/javascript"></script></li>
            </ul>
                
                <a href="#contact" data-transition="pop" type="button" data-icon="back">Back</a>
                
	</div><!-- /content -->

	<div data-role="footer" data-position="fixed">
            <div data-role="navbar">
                <ul>  
                <li> <a href="#foo" data-transition="pop">HOME</a> </li>
                <li> <a href="#bar" data-transition="pop">ABOUT</a> </li>
                <li> <a href="#contact" data-transition="pop">CONTACT</a> </li>
                </ul>
            </div>
        </div><!-- /footer -->
</div><!-- /page -->
<div data-role="page" id="emil">
	<img style="margin-left: 8px; margin-top: 8px;"src="img/mblk.png"/>       
                
                <div style="height: 45px; width: 100%; border-bottom: 1px solid #000; background-color: rgba(0,0,0, 0.5);
                     position: absolute; top: 50px;">
                    
                    <table style="margin: 4px auto 0 auto;">
                        <tr>
                            <td><a href="https://market.android.com/details?id=se.ettjavlabilspel"><img src="img/market_m.png"></a></td>
                            <td><a href="#"><img src="img/app_store_m.png"></a></td>
                        </tr>
                    </table>
                    
                    
                </div>
	<div data-role="content" style="background-image: url('img/light_tunnel.png'); height: 320px;" >	
		
            
            <h3 style="margin-top: 50px;">Emil Larsen</h3>    
            
            <hr>
                
                
            <ul style="list-style: none; margin-left: -40px;">
                <li style="font-weight: bold;">web development</li><p></p>
                 <li><a href="mailto: info@emilo.se">info@emilo.se</a></li>
                 <li>+46763-174923 - phone </li>
                 <li><a href="http://emilo.se/">http://emilo.se</a></li>
                 <li><a href="https://twitter.com/nisbethh" class="twitter-follow-button" data-show-count="false">Follow @nisbethh</a>
                 <script src="//platform.twitter.com/widgets.js" type="text/javascript"></script></li>
            </ul>
               
            
            <a href="#contact" data-transition="pop" type="button" data-icon="back">Back</a> 
            
	</div><!-- /content -->

	<div data-role="footer" data-position="fixed">
            <div data-role="navbar">
                <ul>  
                <li> <a href="#foo" data-transition="pop">HOME</a> </li>
                <li> <a href="#bar" data-transition="pop">ABOUT</a> </li>
                <li> <a href="#contact" data-transition="pop">CONTACT</a> </li>
                </ul>
            </div>
        </div><!-- /footer -->
</div><!-- /page -->
</body>
</html>