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
<script src='https://www.google.com/recaptcha/api.js?render=6LfCu84aAAAAAEX4RkeLKmirZtqqpdYotVNSX1IX'></script>
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
                <li><a href="download.php" id="link4" class="active">Downloads</a></li>
                <li><a href="partner.html" id="link5">Partner</a></li>
                <li><a href="kontakt.php" id="link6">Kontakt</a></li>
            </ul>
    </div>
   <div id="box1">
   		<img src="img/downloads.jpg" alt="Leistungen" />
        
        <div id="darkbox">
        	<ul>
	           
        		<li><a href="download-kfz.php" class="active">Kraftfahrzeug</a></li>
                <li><a href="download-finanz.php" >Finanzamtbest&auml;tigung</a></li>
                <li><a href="download-info.php">Wichtige Informationen</a></li>

                <!--<li><a href="#">allgem. Haftpflicht</a></li>
                <li><a href="download.php"><img src="img/icon_arrow.gif" /> &nbsp;zur&uuml;ck</a></li>-->
            </ul>
        </div>
   </div>
  
  <div id="box_partner">               
		<ul class="sitelist_unten">
        	<li><a class="head" href="#">PDF-Formulare downloaden</a></li>
            <li><a class="main" href="#">&nbsp;</a></li>
        	<li><img src="img/pdf.gif" alt="pdf"/>&nbsp;<a class="main" href="data/internationaler_unfallbericht.pdf">Internationaler Unfallbericht</a></li>
            <li><img src="img/pdf.gif" alt="pdf"/>&nbsp;<a class="main" href="data/europ_unfallbericht.pdf">Europ&auml;ischer-Unfallbericht</a></li>
            <li><img src="img/pdf.gif" alt="pdf"/>&nbsp;<a class="main" href="pdfs/grobe_fahrlaessigkeit.pdf">grobe Fahrl&auml;ssigkeit KFZ</a></li>
            <li>&nbsp;</li>  
        </ul>
    </div>
    <div id="linie"><img src="img/linie.png" alt="Tennlinie" /></div>
    <div id="greencard">
    	     <h3 class="headline_greencard">Gr&uuml;ne Versicherungskarte anfordern:</h3>
		             <form id="form_greencard" action="download-kfz.php" method="POST">
		                    	<fieldset>
									<label for="versnehmer">Versicherungsnehmer: </label>
									<textarea name="versnehmer" id="versnehmer" rows="3" cols="50" rel="validate(required)"></textarea>
								<br />
								
		                        	<label for="email_con">Email: </label><br />
		                        	<input name="email_con" id="email_con" rel="validate(required, email)" size="50" type="text">

		                            <br />
		                            <label for="kennzeichen">Kfz-Kennzeichen:</label>
		                          <input name="kennzeichen" id="kennzeichen" rel="validate(required)" size="50" type="text">
                                  <br />
                                   <input class="check" type="checkbox" name="helvetia" value="ja" />
                                <p class="checktxt" for="basler">Helvetia / ehem. Basler versichert</p>
                                                                
                                <input  class="check" type="checkbox" name="hdi" value="ja" />
                               <p class="checktxt" for="hdi">HDI versichert</p>
                                
                                <input  class="check" type="checkbox" name="wuestenrot" value="ja" />
                                <p class="checktxt" for="wuestenrot">W&uuml;stenrot versichert</p><br />

		                            <input name="submit" id="submit" value="senden" type="submit">
                                    <input name="reset" id="reset" value="reset" type="reset">
                                    
		                            <span class="error"></span>
		                        </fieldset>
		                    </form>
							<script>
		grecaptcha.ready(function() {
		grecaptcha.execute('6LfCu84aAAAAAEX4RkeLKmirZtqqpdYotVNSX1IX', {action: 'homepage'})
		.then(function(token) {
			//console.log(token);
			document.getElementById('g-recaptcha-response').value=token;
		});
		});
	</script>
				<script type="text/javascript">
					$(document).ready(function() {
					  $('#form_greencard').ketchup({
					  validationAttribute: 'rel'
					  });
					  $('#closeresponse').click(function(){
						$('#responsemsg').fadeOut("fast");
					  });
					  });
				</script>
						     </div>
   
   <div id="clear"></div>
    
	<div id="footer">
    	<p>	© 2011 | Versicherungsagentur - Gernot Hauer | <a href="impressum.php">Impressum</a></p>
    </div>
    
</div>
</body>
</html>
