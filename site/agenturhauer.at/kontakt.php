<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Versicherungsagentur - Gernot Hauer</title>
<link type="text/css" href="css/style.css" rel="stylesheet" media="screen" />	
<link rel="stylesheet" type="text/css" media="screen" href="css/ketchup.css" />
<link rel="shortcut icon" href="favicon.ico">
<link rel="icon" type="image/ico" href="favicon.ico">

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery-1.4.2.js"></script>
<script type="text/javascript" src="js/jquery.ketchup.js"></script>
<script type="text/javascript" src="js/jquery.ketchup.messages.js"></script>
<script type="text/javascript" src="js/jquery.ketchup.validations.basic.js"></script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-29487006-2']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>

<body>
<div id="hg"></div>
<div id="wrapper">
	<h1> Versicherungsagentur - Gernot Hauer</h1>
	
    <div id="logo">
    	<a href="index.html"><img src="img/logo.jpg" alt="Logo" /></a>
    </div> 
    <div id="navi">
    	<ul>
        		<li><a href="index.html" id="link1" >Home</a></li>
            <li><a href="news.html" id="link7">News</a></li>
                <li><a href="ueber-uns.php" id="link2">&Uuml;ber uns</a></li>
                <li><a href="leistungen.php" id="link3">Leistungen</a></li>
                <li><a href="download.php" id="link4">Downloads</a></li>
                <li><a href="partner.html" id="link5">Partner</a></li>
                <li><a href="kontakt.php" id="link6" class="active">Kontakt</a></li>
            </ul>
    </div>
   <div id="box1">
   		<img src="img/kontakt.jpg" alt="Kontakt" />
        <p class="abstand-oben">Wiener Stra&szlig;e 94/1/2 </p>
        <p class="abstand-unten">3500 Krems an der Donau</p>
        <table>
            <tr>
                <td>t:</td><td>050 222 2890</td>
            </tr>
            <tr>
                <td>f:</td><td>050 222 92890</td>        
            </tr>
            <!--<tr>
                <td>m:</td><td>0676 5630 593</td>        
            </tr>-->
            <tr>
                <td>mail: &nbsp;</td><td><a href="mailto:office@agenturhauer.at" class="text_box">office@agenturhauer.at</a></td>        
            </tr>
        </table>  
       <p class="abstand white abstand-unten">&Ouml;ffungszeiten B&uuml;ro:</p>
       <p>MO - FR: &nbsp;8 - 13 Uhr<br />
		<br />	
       </p>
       <p>Nachmittags nach telefonischer Terminvereinbarung.</p>
       
   </div>
  
   <div id="box2">
   <div id="kontakt_text">
   	<h3>
        F&uuml;r offene Fragen stehen wir gerne zur Verf&uuml;gung!<br />
        <span style="font-weight: normal; color: #a6aaad; text-transform: none;">Kontaktieren Sie uns...</span>
	</h3>
    </div>
           
		             <form id="contactform" action="kontakt.php" method="POST">
		                    	<fieldset>
									<label for="vorname">Vorname: </label>
									<input name="vorname" id="vorname"  size="50" type="text">
								<br />
									<label for="name">Name: </label>
		                        	<input name="name" id="name"  size="50" type="text">
								<br />
		                        	<label for="email_con">Email: </label>
		                        	<input name="email_con" id="email_con"  size="50" type="text">

		                            <br /><br />
		                           
		                            <textarea name="msg" id="msg" rows="4" cols="50" placeholder="Nachricht"></textarea>
                                
                                <img class="captcha" src="captcha/captcha.php" />
                                <input name="captcha" id="captcha" type="text"> <br />
		                            
                                <input name="submit" id="submit" value="senden" type="submit">
                                <input name="reset" id="reset" value="reset" type="reset">
                               
		                            <span class="error"></span>
		                        </fieldset>
		                    </form>
				
						 <span class='error'>Bitte die Zahlen eingeben! (Sicherheitsabfrage)</span>                        
    	
    
    </div>
   <div id="box3"></div>
   <div id="box4"></div>
   <div id="clear"></div>
    
	<div id="footer">
    	<p>	© 2011 | Versicherungsagentur - Gernot Hauer | <a href="impressum.php">Impressum</a></p>
    </div>
    
</div>
</body>
</html>
