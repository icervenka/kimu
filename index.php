<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="style/style.css" />
<link rel="shortcut icon" href="http://example.com/favicon.ico" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="KI, MU, spolupráce, Karolinska, Institutet, Masarykova Univerzita, biochemie, medicína, biochemistry, life sciences" />
<title>KI-MU</title>
</head>

<body>
<?php
                    session_start();
                    
                 
                    if(!isset($_SESSION['lang'])) {
                        $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
					    $_SESSION['lang'] = strtolower($lang);
                    } else if(isset($_GET['lang'])){
						$_SESSION['lang'] = $_GET['lang'];
					}

			print "<div id=\"container\">
				<div id=\"background_picture\">&nbsp;</div>
					<div id=\"header\">
						<div id=\"header_left\">&nbsp;</div>
						<div id=\"header_center\"><img id=\"logo\" src=\"images/logo_source.png\" /><div id=\"title_box\">";
						if($_SESSION['lang'] == "cz") {
							echo "<span id=\"title\">Spolupráce mezi Masarykovou univerzitou<br /> a Karolinska Institutet na poli biomedicíny</span><img id=\"language\" src=\"images/language.png\" usemap=\"#flag\" />";
						} else {
							echo "<span id=\"title\">Cooperation between Masaryk University <br />and Karolinska Institutet in the field of biomedicine</span><img id=\"language\" src=\"images/language.png\" usemap=\"#flag\" />";
						}
							
					print "</div></div>
						<div id=\"header_right\">&nbsp;</div>
					</div>
				
				
				
					<div id=\"content\">
					<div id=\"menu\">";
                

                    if(!isset($_GET['page'])) {
                            $page = "aktuality";
                    } else {
                            $page = $_GET['page'];
                    }
					
					if(!isset($_GET['sub'])) {
						$sub = "uvod";
					} else {
						$sub = $_GET['sub'];
					}

echo "<map name=\"flag\">";
   echo "<area shape=\"rect\" coords=\"4,4,31,21\" href=\"index.php?lang=en&page=$page&sub=$sub\" alt=\"en\">";
   echo "<area shape=\"rect\" coords=\"4,25,31,42\" href=\"index.php?lang=cz&page=$page&sub=$sub\" alt=\"cz\">";
echo "</map>";


                    echo "<ul>";
                          echo "<li"; if($page=="aktuality") {echo " class=\"selected\"";} echo "><a href=\"index.php?page=aktuality\""; if($page=="aktuality") {echo " class=\"selected\"";} 
                          if($_SESSION['lang'] == "cz") {echo">Aktuality</a></li>";} else {echo">News</a></li>";}
                          
						  echo "<li"; if($page=="projekt") {echo " class=\"selected\"";} echo "><a href=\"\""; if($page=="projekt") {echo "class=\"selected\"";}
                          if($_SESSION['lang'] == "cz") {echo">O Projektu</a>";} else {echo">Project</a>";}
                          	 echo "<ul>";	
							 echo "<li><a href=\"index.php?page=projekt&sub=uvod\" ";
								if($_SESSION['lang'] == "cz") {echo">Úvod</a></li>";} else {echo">Introduction</a></li>";}
							 echo "<li><a href=\"index.php?page=projekt&sub=cile\" ";
								if($_SESSION['lang'] == "cz") {echo">Cíle</a></li>";} else {echo">Project Aims</a></li>";}
							 echo "<li><a href=\"index.php?page=projekt&sub=aktivity\" ";
								if($_SESSION['lang'] == "cz") {echo">Aktivity</a></li>";} else {echo"> Main Activities</a></li>";}
							 echo "<li><a href=\"index.php?page=projekt&sub=tym\" ";
								if($_SESSION['lang'] == "cz") {echo">Realizační tým</a></li>";} else {echo">Team</a></li>";}
							 echo "<li><a href=\"index.php?page=projekt&sub=studenti\" ";
								if($_SESSION['lang'] == "cz") {echo">Studenti</a></li>";} else {echo">Students</a></li>";}
						  	 echo "</ul>";	
						  
						  echo "</li>";
						  echo "<li"; if($page=="kurzy") {echo " class=\"selected\"";} echo "><a href=\"\""; if($page=="kurzy") {echo "class=\"selected\"";}
                          if($_SESSION['lang'] == "cz") {echo">Kurzy</a>";} else {echo">Courses</a>";}
							  echo "<ul>";	
								echo "<li><a href=\"index.php?page=kurzy&sub=kurz1\" ";
										if($_SESSION['lang'] == "cz") {echo">Praktický kurz 1</a></li>";} else {echo">Practical course 1</a></li>";}
								echo "</ul>";
							  echo "</li>";
						  
                         
						  echo "<li"; if($page=="workshopy") {echo " class=\"selected\"";} echo "><a href=\"\""; if($page=="workshopy") {echo "class=\"selected\"";}
                          if($_SESSION['lang'] == "cz") {echo">Workshopy</a>";} else {echo">Workshops</a>";}
						  	echo "<ul>";	
								echo "<li><a href=\"index.php?page=workshopy&sub=2012_kickoff_meeting\" ";
										if($_SESSION['lang'] == "cz") {echo">Kickoff meeting</a></li>";} else {echo">Kickoff meeting</a></li>";}
								echo "<li><a href=\"index.php?page=workshopy&sub=2013_kimu2\" ";
										if($_SESSION['lang'] == "cz") {echo">KI-MU workshop II</a></li>";} else {echo">KI-MU workshop II</a></li>";}
							echo "</ul>";
						  echo "</li>";
                          
						  echo "<li"; if($page=="fotogalerie") {echo " class=\"selected\"";} echo "><a href=\"\""; if($page=="fotogalerie") {echo "class=\"selected\"";}
                          if($_SESSION['lang'] == "cz") {echo">Fotogalerie</a>";} else {echo">Photogallery</a>";}
                   			echo "<ul>";	
								echo "<li><a href=\"index.php?page=fotogalerie&sub=2012_kickoff_meeting\" ";
										if($_SESSION['lang'] == "cz") {echo">Kickoff meeting</a></li>";} else {echo">Kickoff meeting</a></li>";}
								echo "<li><a href=\"index.php?page=fotogalerie&sub=2013_kimu2\" ";
										if($_SESSION['lang'] == "cz") {echo">KI-MU workshop II</a></li>";} else {echo">KI-MU workshop II</a></li>";}
							echo "</ul>";
						  echo "</li>";
				   
				   
				    echo "</ul>";

 
					echo "</div>";
            
          			echo "<div id=\"text\">";
        				include($page.'.php'); 
        			echo "</div>";
					
                ?>
          
            <div class="center"><img src="images/opvk_logo.jpg" /></div><br />
            
            <div id="footer" class="center">
            <a href="index.php?page=aktuality">Aktuality</a> :: <a href="index.php?page=projekt&sub=uvod">O projektu</a> ::  <a href="index.php?page=kurzy&sub=kurz1">Praktické kurzy</a> :: <a href="index.php?page=workshopy&sub=2012_kickoff_meeting">Workshopy</a> :: <a href="index.php?page=fotogalerie">Fotogalerie</a>
            </div>

		</div>
</div>
</div>

</body>
</html>