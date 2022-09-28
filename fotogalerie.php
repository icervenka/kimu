<?php
	include_once('fotogalerie/photogallery.php');
        

	echo "<div>";
	
        switch ($sub) {
            case "2012_kickoff_meeting":
                echo "<h1>2012 - Kickoff meeting - Hotel Myslivna, Brno</h1>";	
                photogallery('2012_kickoff_meeting');
                break;
			case "2013_kimu2":
                echo "<h1>2013 - KI-MU II Workshop - Hotel Mánes, Svratka</h1>";	
                photogallery('2013_kimu2');
                break;
            default :
                echo "<h1>2012 - Kickoff meeting - Hotel Myslivna, Brno</h1>";	
                photogallery('2012_kickoff_meeting');
                break;
        }
		
	echo "</div>";
?>


