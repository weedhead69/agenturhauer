
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
                <li><a href="haushalt-eigenheim.php" class="active">Haushalt - Eigenheim</a></li>
                <li><a href="unfallversicherung.php">Unfallversicherung</a></li>
                <li><a href="rechtsschutz.php">Rechtsschutz</a></li>
                <!--<li><a href="#">allgem. Haftpflicht</a></li>-->
                <li><a href="schaden.php"><img src="img/icon_arrow.gif" /> &nbsp;zur&uuml;ck</a></li>
            </ul>
        </div>
   </div>
  
   <div id="box2_kfz">
   <h3 class="headline">Schadensmeldung Haushalt - Eigenheim</h3>
   	<script type="text/javascript">
   		function pruefen(){
			 res = true;
			 a = document.kfzform;
			 
			 if(a.vers.value == ''){res = false; }
			 if(a.polizze.value == ''){res = false;}
			 if(a.versnehmer.value == ''){res = false; }
			 if(a.tel.value == ''){res = false; }
			 if(a.schadenzeit.value == ''){res = false; }
			 if(a.schadenort.value == ''){res = false; }
			 if(a.hergang.value == ''){res = false; }
			
			 if(res == false){
				 alert('Bitte alle Formularfelder mit * vollständig ausfüllen!')
			 }
			 return res;
		}
	</script>
    	   		 <form id="kfzform" name="kfzform" action="haushalt-eigenheim.php" onsubmit="return pruefen()" enctype="multipart/form-data" method="POST">
		                   <fieldset>
								<label for="vers">Versicherungsgesellschaft*: </label><br />
								<input name="vers" id="vers" rel="validate(required)" size="20" type="text"><br />
								
								<label for="polizze">Polizzennummer*: </label><br />
		                        <input name="polizze" id="polizze" rel="validate(required)" size="20" type="text"><br />
							
                                <input class="check" type="checkbox" name="feuer" value="ja" />
                                <p class="checktxt" for="check_feuer">Feuer </p><br />
                                                                
                                <input  class="check" type="checkbox" name="blitz" value="ja" />
                                <p class="checktxt" for="check_blitz">Blitzschlag/Indirekter Blitz </p><br />
                                
                                <input  class="check" type="checkbox" name="glas" value="ja" />
                                <p class="checktxt" for="check_glas">Glasbruch</p><br />
                                
                                <input  class="check" type="checkbox" name="sturm" value="ja" />
                                <p class="checktxt" for="check_sturm">Sturmschaden/Elementarereignis</p><br />
                                
                                <input  class="check" type="checkbox" name="wasser" value="ja" />
                                <p class="checktxt" for="check_wasser">Leitungswasser</p><br />
                                
                                <input  class="check" type="checkbox" name="einbr" value="ja" />
                                <p class="checktxt" for="check_einbr">Einbruchdiebstahl/Vandalismus</p><br /><br />
                                
		                        <label for="versnehmer">Versicherungsnehmer* (Name, Adresse):</label><br />
		                        <textarea name="versnehmer" id="versnehmer" rows="4" cols="100" rel="validate(required)"></textarea><br />
								
                                <label for="tel">Telefon*: </label><br />
		                        <input name="tel" id="tel" rel="validate(required)" size="20" type="text"><br />
                                
                                <label for="email">Email: </label><br />
		                        <input name="email" id="email"  size="20" type="text"><br />	
                                    
                                <label for="schadenzeit">Schadenzeitpunkt* (Datum, Uhrzeit) </label><br />
		                        <input name="schadenzeit" id="schadenzeit" rel="validate(required)" size="20" type="text"><br />
                                
                               
                                <label for="schadenort">Schadenort* (Ort, Straße)</label><br />
		                        <textarea name="schadenort" id="schadenort" rows="4" cols="100"></textarea><br />
                                
                                <label for="hergang">Genaue Schilderung des Schadenherganges*</label><br />
		                        <textarea name="hergang" id="hergang" rows="4" cols="100"></textarea><br />    
                                
                                <label for="verursacher">Bei Fremdverschulden: Wer verursachte den Schaden (Name, Adresse)</label><br />
		                        <textarea name="verursacher" id="verursacher" rows="4" cols="100"></textarea><br /> 
                                
                                 <label for="andere_vers">Besteht für die vom Schaden betroffenen Sachen noch andere Versicherungen? (Wenn ja, Versicherung, Polizzennr.) </label><br />
		                        <input name="andere_vers" id="andere_vers" size="20" type="text"><br />
                                
                                 <label for="geb_vers">Besteht bei Feuer-, Glas, Sturm- oder Leitungswasserschäden auch eine Gebäudeversicherung? (wenn ja, Versicherung, Polizzennr.) </label><br />
		                        <input name="geb_vers" id="geb_vers" size="20" type="text"><br />
                                
                                 <label for="anzeige_polizei">Polizeiliche Anzeige bei Einbruchdiebstahl, Vandalismus und Feuer (Polizeidienststelle, Aktenzahl) </label><br />
		                        <input name="anzeige_polizei" id="anzeige_polizei" size="20" type="text"><br />
                                
                                 <label for="besichtigung">Bei Blitzschäden: Wo kann das/die Gerät(e) besichtigt werden? </label><br />
		                        <input name="besichtigung" id="besichtigung" size="20" type="text"><br />
                                
                                <label for="schaden">Vom Schaden betroffen (bei E-Geräte Marke, Type, SerienNr., Baujahr, Kaufpreis)</label><br />
		                        <textarea name="schaden" id="schaden" rows="4" cols="100" ></textarea><br />
                                
                                 <label for="konto">Entschädigung wäre zu überweisen an (Bank, BLZ, Kontonummer, Kontoinhaber)</label><br />
		                        <input name="konto" id="konto" size="20" type="text"><br />
                                
                              
                                
                                <label for="vorsteuer">Vorsteuerabzugsberechtigt:</label><br /><br />
                                <input type="radio" name="vorsteuer" value="ja"> JA<br />
							    <input type="radio" name="vorsteuer" value="nein"> NEIN<br />
                              
                             	<br />
                             	<label for="body">Bild uploaden:</label>
			           	 		<input type="file" name="bild" id="bild"/><br />
                             
                                <input  class="check" type="checkbox" name="angaben_passt" rel="validate(required)" value="1" />
                               <p class="checktxt" for="check_angaben_passt">Meine Angaben sind vollständig und wahrheitsgetreu.*</p><br />
                                                                    <input class="check" type="checkbox" name="cc" value="1" />
                                <p class="checktxt" for="cc">Eine Kopie des ausgef&uuml;llten Formulars an meine oben angegebene E-Mail-Adresse senden? </p>
		                         <br /><br /> 

								 <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response" />
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
