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
<div id="wrapper_form">
	<h1> Versicherungsagentur - Gernot Hauer</h1>
	
    <div id="logo">
    	<a href="index.html"><img src="img/logo.jpg" alt="Logo" /></a>
    </div> 
    <div id="navi">
    	<ul>
        		<li><a href="index.html" id="link1" >Home</a></li>
        		<li><a href="news.html" id="link7">News</a></li>
                <li><a href="ueber-uns.php" id="link2">&Uuml;ber uns</a></li>
                <li><a href="leistungen.php" id="link3" class="active">Leistungen</a></li>
                <li><a href="download.php" id="link4">Downloads</a></li>
                <li><a href="partner.html" id="link5">Partner</a></li>
                <li><a href="kontakt.php" id="link6">Kontakt</a></li>
            </ul>
    </div>
   <div id="box1">
   		<img src="img/leistungen.jpg" alt="Leistungen" />
        
        <div id="darkbox">
        	<ul>
	            <!--<li><a href="schaden.php">Schaden</a></li>-->
        		<li><a href="kraftfahrzeug.php">Kraftfahrzeug</a></li>
                <li><a href="haushalt-eigenheim.php">Haushalt - Eigenheim</a></li>
                <li><a href="unfallversicherung.php" class="active">Unfallversicherung</a></li>
                <li><a href="rechtsschutz.php">Rechtsschutz</a></li>
                <!--<li><a href="#">allgem. Haftpflicht</a></li>-->
                <li><a href="schaden.php"><img src="img/icon_arrow.gif" /> &nbsp;zur&uuml;ck</a></li>
            </ul>
        </div>
   </div>
  
   <div id="box2_kfz">
   <h3 class="headline">Unfall - Schadenanzeige</h3>
   	<script type="text/javascript">
   		function pruefen(){
			 res = true;
			 a = document.kfzform;
			 
			 if(a.vers.value == ''){res = false; }
			 if(a.polizze.value == ''){res = false;}
			 if(a.versnehmer.value == ''){res = false; }
			 if(a.tel.value == ''){res = false; }
			 if(a.zeitpunkt.value == ''){res = false; }
			 if(a.ort.value == ''){res = false; }
			 if(a.hergang.value == ''){res = false; }
			
			 if(res == false){
				 alert('Bitte alle Formularfelder mit * vollständig ausfüllen!')
			 }
			 return res;
		}
	</script>
    	
   		 <form id="kfzform" name="kfzform" action="unfallversicherung.php" onsubmit="return pruefen()" enctype="multipart/form-data" method="POST">
		                   <fieldset>
								<label for="vers">Versicherungsgesellschaft*: </label><br />
								<input name="vers" id="vers" rel="validate(required)" size="20" type="text"><br />
								
								<label for="polizze">Polizzennummer*: </label><br />
		                        <input name="polizze" id="polizze" rel="validate(required)" size="20" type="text"><br />
                                
		                        <label for="versnehmer">Versicherungsnehmer* (Name, Adresse):</label><br />
		                        <textarea name="versnehmer" id="versnehmer" rows="4" cols="100" rel="validate(required)"></textarea><br />
								
                                <label for="tel">Telefon*: </label><br />
		                        <input name="tel" id="tel" rel="validate(required)" size="20" type="text"><br />
                                
                                <label for="email">Email: </label><br />
		                        <input name="email" id="email"  size="20" type="text"><br />	                             
                                
                                <label for="vers_person">Versicherte Person falls vom Vers.nehmer abweichend (Name, Adresse, Geb.Datum)</label><br />
		                        <textarea name="vers_person" id="vers_person" rows="4" cols="100"></textarea><br />                                   
                                                               
                                 <label for="zeitpunkt">Unfallzeitpunkt* (Datum, Uhrzeit)</label><br />
		                        <input name="zeitpunkt" id="zeitpunkt" size="20" type="text"><br />
                                
                                 <label for="ort">Unfallort* </label><br />
		                        <textarea name="ort" id="ort" rows="4" cols="100"></textarea><br /> 
                                
                                 <label for="wobei">Bei welcher Tätigkeit ereignete sich der Unfall?</label><br />
		                        <textarea name="wobei" id="wobei" rows="4" cols="100"></textarea><br /> 
                                
                                 <label for="aufnahme">Wurde der Unfall behördlich aufgenommen? (Wenn ja, Polizeidienststelle, Aktenzahl)</label><br />
		                        <input name="aufnahme" id="aufnahme" size="20" type="text"><br />
                                                        
								<label for="zeugen">Zeugen</label><br />
		                        <textarea name="zeugen" id="zeugen" rows="4" cols="100" ></textarea><br />
                                
                                <label for="art_kfz">Wenn Verletzter KFZ-Lenker war, Art des benützten Kraftfahrzeuges</label><br />
		                        <input name="art_kfz" id="art_kfz" size="20" type="text"><br />
                                
                                 <input class="check" type="checkbox" name="alk" value="ja" />
                                <p class="checktxt" for="alk">Der/die Versicherte alkoholisiert?</p><br />
                                                                
                                <input  class="check" type="checkbox" name="alktest" value="ja" />
                                <p class="checktxt" for="alktest">Es wurde ein Alkotest vornommen</p><br />
                                
                                <label for="hergang">Bericht über den Unfallhergang*</label><br />
		                        <textarea name="hergang" id="hergang" rows="4" cols="100" ></textarea><br />
                                
                                 <label for="verletzung">Genaue Bezeichnung der Verletzungen und Unfallfolgen</label><br />
		                        <textarea name="verletzung" id="verletzung" rows="4" cols="100" ></textarea><br />
                                
                                 <label for="hilfe">Wann und bei wem erfolgte erstmals ärztliche Hilfe?</label><br />
		                        <textarea name="hilfe" id="hilfe" rows="4" cols="100" ></textarea><br />
                                           
                                <label for="spital">Stationäre Spitalsbehandlung (von, bis)</label><br />
		                        <input name="spital" id="spital" size="20" type="text"><br />
                                
                                <label for="ambulant">Ambulate Behandlung (von, bis)</label><br />
		                        <input name="ambulant" id="ambulant" size="20" type="text"><br />
                                
                                <label for="arzt">Behandelnder Arzt (Name, Adresse)</label><br />
		                         <textarea name="arzt" id="arzt" rows="4" cols="100" ></textarea><br />
                                                                                   
                             	<br />
                             	
                                <input  class="check" type="checkbox" name="angaben_passt" rel="validate(required)" value="1" />
                               <p class="checktxt" for="check_angaben_passt">Meine Angaben sind vollständig und wahrheitsgetreu.*</p><br />
                                                                  
                                 <input class="check" type="checkbox" name="cc" value="1" />
                                <p class="checktxt" for="cc">Eine Kopie des ausgef&uuml;llten Formulars an meine oben angegebene E-Mail-Adresse senden? </p>
		                         <br /><br /> 
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
                         
                  
    </div>
   
   <div id="clear"></div>
    
	<div id="footer">
    	<p>	© 2011 | Versicherungsagentur - Gernot Hauer | <a href="impressum.php">Impressum</a></p>
    </div>
    
</div>
</body>
</html>
