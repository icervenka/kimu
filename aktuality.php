<?php
function news($day, $month, $message) {
	print "<div class=\"news\">
			<div class=\"date center\"><div>$day</div><div>$month</div></div>
			<div class=\"event\">$message</div>
		</div>
		<div id=\"block\"></div>";
}

if($_SESSION['lang'] == "cz") {

	
	echo "<h2>2013</h2>";
	
	news(7, "Říj", "Pozvánka na kurz <a href=\"files/kurz_imunoprecipitace.pdf\">imunoprecipitace</a>");
	
	news(5, "Čvc", "Úprava a doplnění obsahu stránek");
	
	echo "<br />";
	
	echo "<h2>2012</h2>";
	
	news(13, "Zář", "Program zahajujícího střetnutí ke stažení <a href=\"files/kimu_kickoff_meeting_programme.doc\">zde</a>");
	
	news(13, "Zář", "Přihláška na zahajující střetnutí programu KI-MU, které se uskuteční 25-27 října ke stažení <a href=\"files/application_form_kimu.doc\">zde</a>. Termín na odeslání přihlášky je stanoven na 30. září");
	
	news(12, "Zář", "Byli oficiálně spuštěny web stránky projektu KI-MU");

} else {

	echo "<h2>2013</h2>";
	
	news(7, "Oct", "<a href=\"files/kurz_imunoprecipitace.pdf\">Co-immunoprecipitation</a> course invitation");
	
	news(5, "Jul", "Major webpage update");
	
	echo "<br />";
	
	echo "<h2>2012</h2>";
	
	news(13, "Sep", "Kickoff meeting programme is available for download <a href=\"files/kimu_kickoff_meeting_programme.doc\">here</a>");
	
	news(13, "Sep", "Application for KI-MU kickoff meeting, which will be held on 25<sup>th</sup> - 27<sup>th</sup> october is available for download <a href=\"files/application_form_kimu.doc\">here</a>. Deadline for submission is september 30<sup>th</sup>.");
	
	news(12, "Sep", "KI-MU project web pages have been launched");
	
}
?>