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
        		<li><a href="kraftfahrzeug.php" class="active">Kraftfahrzeug</a></li>
                <li><a href="haushalt-eigenheim.php" >Haushalt - Eigenheim</a></li>
                <li><a href="unfallversicherung.php">Unfallversicherung</a></li>
                <li><a href="rechtsschutz.php">Rechtsschutz</a></li>
                <!--<li><a href="#">allgem. Haftpflicht</a></li>-->
                <li><a href="schaden.php"><img src="img/icon_arrow.gif" /> &nbsp;zur&uuml;ck</a></li>
            </ul>
        </div>
   </div>
  
   <div id="box2_kfz">
   <h3 class="headline">Schadensmeldung KFZ-Haftpflicht, Kasko und KFZ-Rechtsschutz </h3>
   	<script type="text/javascript">
   		function pruefen(){
			 res = true;
			 a = document.kfzform;
			 
			 if(a.tel.value == ''){res = false; }
			 if(a.email.value == ''){res = false; }			 
			
			 if(res == false){
				 alert('Bitte alle Formularfelder mit * vollständig ausfüllen!')
			 }
			 return res;
		}
	</script>
    	   		 <form id="kfzform" name="kfzform" action="kraftfahrzeug.php" onsubmit="return pruefen()" enctype="multipart/form-data" method="POST">
		                   <fieldset>
								<label for="vers">Versicherungsgesellschaft: </label><br />
								<input name="vers" id="vers" rel="validate(required)" size="20" type="text"><br />
								
								<label for="polizze">Polizzennummer: </label><br />
		                        <input name="polizze" id="polizze" rel="validate(required)" size="20" type="text"><br />
							
                                <input class="check" type="checkbox" name="hpfl" value="ja" />
                                <p class="checktxt" for="check_hpf">Kfz-Haftpflicht </p><br />
                                                                
                                <input  class="check" type="checkbox" name="kasko" value="ja" />
                               <p class="checktxt" for="check_hpf">Kfz-Kasko </p><br />
                                
                                <input  class="check" type="checkbox" name="rsch" value="ja" />
                                <p class="checktxt" for="check_hpf">Kfz-Rechtsschutz </p><br /><br />
                                
		                        <label for="versnehmer">Versicherungsnehmer (Name, Adresse):</label><br />
		                        <textarea name="versnehmer" id="versnehmer" rows="4" cols="100" rel="validate(required)"></textarea><br />
								
                                <label for="tel">Telefon<strong>*</strong>: </label><br />
		                        <input name="tel" id="tel" rel="validate(required)" size="20" type="text"><br />
                                
                                <label for="email">Email<strong>*</strong>: </label><br />
		                        <input name="email" id="email"  size="20" type="text"><br />	
                                    
                                <label for="marke">Fahrzeug: Marke, Type, Fahrgestellnummer </label><br />
		                        <input name="marke" id="marke" rel="validate(required)" size="20" type="text"><br />
                                
                                <label for="kennzeichen">Kennzeichen: </label><br />
		                        <input name="kennzeichen" id="kennzeichen" rel="validate(required)" size="20" type="text">	<br />    
                                    
                                <label for="beschaedigt">Welche Teile des Fahrzeuges sind beschädigt?</label><br />
		                        <textarea name="beschaedigt" id="beschaedigt" rows="4" cols="100"></textarea><br />
                                
                                <label for="lenker">Fahrzeuglenker (Name, Adresse falls vom Versicherungsnehmer abweichend)</label><br />
		                        <textarea name="lenker" id="lenker" rows="4" cols="100"></textarea><br />    
                                
                                <input  class="check" type="checkbox" name="alk" value="ja" />
                                <p class="checktxt" for="check_alk">Der Lenker war alkoholisiert </p><br />
                                
                                <input  class="check" type="checkbox" name="alktest" value="ja" />
                                <p class="checktxt" for="check_alktest">Es wurde ein Alkotest oder eine Blutprobe vorgenommen </p><br />
                                
                                <input  class="check" type="checkbox" name="abnahme_fs" value="ja" />
                                <p class="checktxt" for="check_abnahme_fs">Es wurde der F&uuml;hrerschein abgenommen</p><br /><br />
                                
                                <label for="gegner">Geschädigter/Unfallgegner (Name, Adresse)</label><br />
		                        <textarea name="gegner" id="gegner" rows="4" cols="100" rel="validate(required)"></textarea><br />
                                
                                <label for="marke">Fahrzeug: Marke, Type</label><br />
		                        <textarea name="marke" id="marke" rows="4" cols="100" ></textarea><br />    
                                
                                <label for="kennzeichen_gegner">Kennzeichen gegnerisches Fahrzeug: </label><br />
		                        <input name="kennzeichen_gegner" id="kennzeichen_gegner" size="20" type="text"><br />
                                   
                                <label for="schaden_gegner">Schaden am gegnerischen Fahrzeug oder sonstige Personen- oder Sachschäden?</label><br />
		                        <textarea name="schaden_gegner" id="schaden_gegner" rows="4" cols="100" ></textarea><br /> 
                                
                                <label for="polizze_gegner">Versicherung und Polizzennummer (Unfallgegner)</label><br />
		                        <textarea name="polizze_gegner" id="polizze_gegner" rows="4" cols="100" ></textarea><br /> 
                                
                                <input  class="check" type="checkbox" name="kasko_gesch" value="ja" />
                                <p class="checktxt" for="check_kasko_gesch">Geschädigter hat eine Kaskoversicherung </p><br /><br />
                                
                                <label for="lenker_gesch">Fahrzeuglenker (Name, Adresse falls vom Geschädigten abweichend)</label><br />
		                        <textarea name="lenker_gesch" id="lenker_gesch" rows="4" cols="100"></textarea><br />
                                
                                <label for="zeitpkt">Unfallzeitpunkt (Datum, Uhrzeit): </label><br />
		                        <input name="zeitpkt" id="zeitpkt" rel="validate(required)" size="20" type="text">	<br /> 
                                
                                <label for="ort">Unfallort (Ort, Straße)</label><br />
		                        <textarea name="ort" id="ort" rows="4" cols="100" rel="validate(required)"></textarea><br />
                                
                                <label for="polstelle">Unfallaufnehmende Polizeidienststelle: <br />
                                <span style="font-weight: thin; color: #a6aaad; text-transform: none;">
                                unverzügliche polizeiliche Anzeigepflicht bei:Personenverletzungen, Parkschaden, Wildschaden, Vandalismusschaden
                                <span>
								</label><br />
		                        <input name="polstelle" id="polstelle" size="20" type="text">	<br /> 
                                
                                <label for="zeugen">Zeugen (Name, Adresse)</label><br />
		                        <textarea name="zeugen" id="zeugen" rows="4" cols="100" ></textarea><br />
                                
                                <label for="hergang">Bericht über den Unfallhergang</label><br />
		                        <textarea name="hergang" id="hergang" rows="4" cols="100" rel="validate(required)"></textarea><br />
                                
                             	<br />
                             	<label for="body">Bild uploaden:</label>
			           	 		<input type="file" name="bild" id="bild"/><br />
                             
                                   
                                    
                                   <input class="check" type="checkbox" name="cc" value="1" />
                                <p class="checktxt" for="cc">Eine Kopie des ausgef&uuml;llten Formulars an meine oben angegebene E-Mail-Adresse senden? </p>
		                         <br /><br /> 

								<img class="captcha" src="captcha/captcha.php" />
                                <input name="captcha" id="captcha" type="text" style="width:50px; position:relative; margin-top:-23px; margin-left:60px; display:block;"> <br />
								<span style="color:white;">Bitte diese Zahlen eingeben! (Sicherheitsabfrage)</span><br><br>
		                        <input name="submit" id="submit" value="senden" type="submit">
                                <input name="reset" id="reset" value="reset" type="reset">
                                    
		                            <span class="error"></span>
		                   </fieldset>
		                 </form>
                         
                  
    </div>
   
   <div id="clear"></div>
    
	<div id="footer">
    	<p>	© 2011 | Versicherungsagentur - Gernot Hauer | <a href="impressum.php">Impressum</a></p>
    </div>
    
</div>
</body>
</html>
