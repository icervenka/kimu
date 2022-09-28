<?php

function person_details ($name, $photo, $description, $email, $telephone, $web) {
	echo "<table cellspacing=\"0\" class=\"team\">";
		echo "<tr>";
			echo "<th colspan=\"2\"><strong>$name</strong></th>";
		echo "</tr>";
		if(strlen($photo) > 0) {
			echo "<tr>";
				echo "<td><img src=\"images/photos/$photo\"</td><td>$description</td>";
			echo "</tr>";
		}
		echo "<tr>";
			echo "<td colspan=\"2\"><strong>e-mail:</strong> $email</td>";
		echo "</tr>";
		if(strlen($telephone) > 0) {
		echo "<tr>";
			echo "<td colspan=\"2\"><strong>tel.:</strong> $telephone</td>";
		echo "</tr>";
		}
		if(strlen($web) > 0) {
		echo "<tr>";
			echo "<td colspan=\"2\"><a href=\"$web\">webpage</a></td>";
		echo "</tr>";
		}
	echo "</table>";
	echo "<br />";
	
}

if($_SESSION['lang'] == "cz") {
	
echo "<h1>Hlavní manažer a garant projektu</h1>";

person_details (
					"Mgr. Vítězslav Bryja Ph.D.",
					"bryja.jpg",
					"Je vedoucím laboratoře na Ústavu fyziologie a imunologie živočichů. Dr. Bryja z pozice hlavního řešitele a garanta projektu zodpovídá za hladký průběh projektu, vede a řídí projektový tým a koordinuje realizaci jednotlivých klíčových aktivit a je zodpovědný za jejich vědeckou náplň.",
					"bryja@sci.muni.cz",
					"+420 549 49 3291",
					""
);


echo "<h1>Vědecký garant za MU</h1>";

person_details (
					"prof. RNDr. Alois Kozubík, CSc.",
					"kozubik.jpg",
					"Je vedoucím odddělení cytokinetiky na  Biofyzikálním ústavu AV ČR. Jakožto vědecký garant projektu se prof. Kozubík podílí na odborné náplni, realizaci a koordinaci klíčových aktivit.",
					"kozubik@ibp.cz",
					"+420 541 517 182",
					""
);


echo "<h1>Vědecký garant za KI</h1>";

person_details (
					"prof. Ernest Arenas",
					"arenas.jpg",
					"Prof. Ernest Arenas působí jako přednosta ústavu (Department of medical Biochemistry and Biophysics, Karolinska Institutet). Jeho úkolem v projektu je koordinace průběhu projektu na KI a plnění  odborné části klíčových aktivit.",
					"Ernest.Arenas@ki.se",
					"+46-08-524 876 63",
					"http://ki.se/ki/jsp/polopoly.jsp?d=18173&l=en"
);

echo "<h1>Vědečtí pracovníci</h1>";

person_details (
					"assoc. prof. Gunnar Schulte",
					"schulte.jpg",
					"Assoc. prof. Gunnar Schulte působí na KI na Oddělení  fyziologie a farmakologie(Department of Physiology and Pharmacology).",
					"Gunnar.Schulte@ki.se",
					"+46-08-524 879 33",
					""
);

person_details (
					"Dr. Carlos Villaescusa",
					"villaescusa.jpg",
					"Dr. Carlos Villaescusa  působí na KI na Oddělení  lékařské biochemie a biofyziky (Department of Medical Biochemistry and Biophysics)",
					"carlos.villaescusa@ki.se",
					"+46-08-524 879 33",
					""
);

person_details (
					"Doc. RNDr. Jan Vondráček Ph.D.",
					"vondracek.jpg",
					"",
					"vondracek@ibp.cz",
					"+420 541 517 168",
					""
);

person_details (
					"Mgr. Jiřina Procházková Ph.D.",
					"",
					"",
					"jipro@sci.muni.cz",
					"+420 549 49 6090",
					""
);

person_details (
					"Mgr. Jiří Pacherník Ph.D.",
					"",
					"",
					"jipa@sci.muni.cz",
					"+420 549 49 5578",
					""
);


echo "<h1>Manažer a administrátor projektu</h1>";

person_details (
					"Mgr. Barbora Valnohová",
					"",
					"",
					"bar.va@sci.muni.cz",
					"+420 549 49 3200",
					""
);


echo "<h1>Ekonomka projektu</h1>";

person_details (
					"Ing. Nikola Vašíčková",
					"",
					"",
					"nikolav@sci.muni.cz",
					"+420 549 49 3689",
					""
);

echo "<h1>Personalistka</h1>";

person_details (
					"Ing. Eva Žufanová",
					"",
					"",
					"evazufan@sci.muni.cz",
					"+420 549 49 3437",
					""
);

echo "<h1>Externí školitelé</h1>";

person_details (
					"RNDr. Alena Hyršlová Vaculová, Ph.D.",
					"",
					"",
					"vaculova@ibp.cz",
					"+420 541517169",
					""
);

person_details (
					"Dr. Emma Andersonn",
					"",
					"",
					"Emma.Andersson@ki.se",
					"",
					""
);

person_details (
					"Dr. Petra Sekyrová",
					"",
					"",
					"Petra.Sekyrova@ki.se",
					"",
					""
);

person_details (
					"Prof. Boris Zhivotovsky",
					"",
					"",
					"Boris.Zhivotovsky@ki.se",
					"",
					"http://ki.se/ki/jsp/polopoly.jsp?d=28948&l=en"
);

person_details (
					"Dr. Magnus Olsson",
					"",
					"",
					"Magnus.Olsson@ki.se",
					"",
					"http://ki.se/ki/jsp/polopoly.jsp?a=149029&d=28948&l=en"
);

person_details (
					"Prof. Lorenz Poellinger",
					"",
					"",
					"Lorenz.Poellinger@ki.se ",
					"",
					"http://ki.se/ki/jsp/polopoly.jsp?l=en&d=1875"
);


} else {
	
echo "<h1>The main manager and guarantee of the project</h1>";

person_details (
					"Mgr. Vítězslav Bryja Ph.D.",
					"bryja.jpg",
					"Is head of the laboratory at the Institute of Animal Physiology and Immunology. Dr. Bryja position of principal investigator and project supervisor is responsible for the smooth running of the project and manages the project team and coordinates the implementation of key activities and is responsible for the scientific content.",
					"bryja@sci.muni.cz",
					"+420 549 49 3291",
					""
);


echo "<h1>Scientific guarantee for MU</h1>";

person_details (
					"prof. RNDr. Alois Kozubík, CSc.",
					"kozubik.jpg",
					"Prof. Kozubík is head of the Department of Cytokinetics at the Institute of Biophysics AS CR. As a scientific project guarantee prof. Kozubík involved in professional content, implementation and coordination of key activities.",
					"kozubik@ibp.cz",
					"+420 541 517 182",
					""
);


echo "<h1>Scientific guarantee for KI</h1>";

person_details (
					"prof. Ernest Arenas",
					"arenas.jpg",
					"Prof. Ernest Arenas works as head of Department of Medical Biochemistry and Biophysics, at Karolinska Institutet. His role in the project is to coordinate the project at KI and to perform the key activities.",
					"Ernest.Arenas@ki.se",
					"+46-08-524 876 63",
					"http://ki.se/ki/jsp/polopoly.jsp?d=18173&l=en"
);

echo "<h1>Researchers</h1>";

person_details (
					"assoc. prof. Gunnar Schulte",
					"schulte.jpg",
					"Assoc. prof. Gunnar Schulte works  at the Department of Physiology and Pharmacology at KI. ",
					"Gunnar.Schulte@ki.se",
					"+46-08-524 879 33",
					""
);

person_details (
					"Dr. Carlos Villaescusa",
					"villaescusa.jpg",
					"Dr. Carlos Villaescusa works at the Department of Medical Biochemistry and Biophysics at KI.",
					"carlos.villaescusa@ki.se",
					"+46-08-524 879 33",
					""
);

person_details (
					"Doc. RNDr. Jan Vondráček Ph.D.",
					"vondracek.jpg",
					"",
					"vondracek@ibp.cz",
					"+420 541 517 168",
					""
);

person_details (
					"Mgr. Jiřina Procházková Ph.D.",
					"",
					"",
					"jipro@sci.muni.cz",
					"+420 549 49 6090",
					""
);

person_details (
					"Mgr. Jiří Pacherník Ph.D.",
					"",
					"",
					"jipa@sci.muni.cz",
					"+420 549 49 5578",
					""
);


echo "<h1>Manager and project administrator</h1>";

person_details (
					"Mgr. Barbora Valnohová",
					"",
					"",
					"bar.va@sci.muni.cz",
					"+420 549 49 3200",
					""
);


echo "<h1>Economist of the project</h1>";

person_details (
					"Ing. Nikola Vašíčková",
					"",
					"",
					"nikolav@sci.muni.cz",
					"+420 549 49 3689",
					""
);

echo "<h1>Personnel manager</h1>";

person_details (
					"Ing. Eva Žufanová",
					"",
					"",
					"evazufan@sci.muni.cz",
					"+420 549 49 3437",
					""
);

echo "<h1>External supervisors</h1>";

person_details (
					"RNDr. Alena Hyršlová Vaculová, Ph.D.",
					"",
					"",
					"vaculova@ibp.cz",
					"+420 541517169",
					""
);

person_details (
					"Dr. Emma Andersonn",
					"",
					"",
					"Emma.Andersson@ki.se",
					"",
					""
);

person_details (
					"Dr. Petra Sekyrová",
					"",
					"",
					"Petra.Sekyrova@ki.se",
					"",
					""
);

person_details (
					"Prof. Boris Zhivotovsky",
					"",
					"",
					"Boris.Zhivotovsky@ki.se",
					"",
					"http://ki.se/ki/jsp/polopoly.jsp?d=28948&l=en"
);

person_details (
					"Dr. Magnus Olsson",
					"",
					"",
					"Magnus.Olsson@ki.se",
					"",
					"http://ki.se/ki/jsp/polopoly.jsp?a=149029&d=28948&l=en"
);

person_details (
					"Prof. Lorenz Poellinger",
					"",
					"",
					"Lorenz.Poellinger@ki.se ",
					"",
					"http://ki.se/ki/jsp/polopoly.jsp?l=en&d=1875"
);
	
	
	
}

?>