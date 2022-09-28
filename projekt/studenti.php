<?php

function person_details ($name, $photo, $description, $email, $supervisor_MU, $supervisor_KI) {
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
		echo "<tr>";
			echo "<td colspan=\"2\">$supervisor_MU</td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td colspan=\"2\">$supervisor_KI</td>";
		echo "</tr>";
	echo "</table>";
	echo "<br />";
	
}

if($_SESSION['lang'] == "cz") {
	
person_details (
					"Mgr. Markéta Kaucká Ph.D.",
					"kaucka.jpg",
					"Markéta se zabývá studiemdráhy pro  planární buněčnou polaritu (PCP).  PCP je evolučně konzervovaná signální dráha, která byla poprvé identifikována u Drosophily a kde působí jako klíčový regulátor buněčného polarity a buněčné migrace. Chronická lymfocytární leukémie (CLL) je nejčastější formou leukémie v západních zemích u dospělých. CLL je charakterizována monoklonální expanzi a akumulací funkčně neschopných B lymfocytů. Hlavním cílem projektu KIMU je podrobné zkoumání molekulárních mechanizmů zodpovědných za zhoršenou migraci CLL lymfocytů migraci u buněk pacientů trpících CLL. Tento projekt vyžaduje porozumění novým metodám a jejich optimalizaci, a to především práci s mikrofluidní pipetou, konfokálním mikroskopem ZEISS LSM710 a Amaxa nukleofekcí vD systému, stejně jako rozsáhlé studium  odborné literatury. <br />
Markéta ukončila svou práci na projektu v dubnu 2013, kdy úspěšně obhájila svou disertační práci na toto téma.
",
					"marketa.kaucka@gmail.com",
					"<strong>školitel na MU:</strong> Dr. Vítězslav Bryja",
					"<strong>školitel na KI:</strong> Dr. Gunnar Schulte"
);
	
person_details (
					"Mgr. Kateřina Straková",
					"strakova.jpg",
					"Katka se ve svém projektu zabývá analýzou post-translačních modifikací receptorů třídy Frizzled a cílem její práce je analyzovat posttranslační modifikace receptorů třídy Frizzled pomocí hmotnostní spektrometrie a dalších biochemických a molekulárně-biologických metod.",
					"269355@mail.muni.cz",
					"<strong>školitel na MU:</strong> Dr. Vítězslav Bryja",
					"<strong>školitel na KI:</strong> Dr. Gunnar Schulte"
);	
	
	
person_details (
					"Mgr. Karol Kaiser",
					"kaiser.jpg",
					"Karolův projekt je zaměřen na analýzu způsobu distribuce morfogenů v centrální nervové soustavě (CNS). Tento projekt pak představuje mimořádně zajímavou oblast výzkumu, mapování úlohy morfogenů u embryonálního vývoje CNS, a má potenciální využití při zdokonalování diferenciačních protokolů, které se používají při léčbě širokého spektra neurodegenerativních onemocnění vč. Parkinsonovy choroby.",
					"dr.house@mail.muni.cz",
					"<strong>školitel na MU:</strong> Dr. Vítězslav Bryja",
					"<strong>školitel na KI:</strong> Dr. Carlos Villaescusa"
);		
	
person_details (
					"Mgr. Zuzana Šrámková",
					"",
					"",
					"262700@mail.muni.cz",
					"<strong>školitel na MU:</strong> Dr. Jiřina Medalová (Procházková)",
					"<strong>školitel na KI:</strong> Dr. Petra Sekyrová"
);			
	
	
person_details (
					"Mgr. Jan Kučera",
					"kucera.jpg",
					"Honzova práce na projektu spočívá ve studiu mechanismů hypoxie. Hypoxií indukovaný faktor (HIF) je klíčovým regulátorem buněčné odpovědi na 
sníženou hladinu kyslíku. Zajišťuje expresi genů, které jsou zodpovědné za udržení kyslíkové homeostázy. Zatímco podjednotky HIF1α a HIF2α jsou relativně dobře popsány, funkce HIF3α a mechanismy, kterými je regulována, zůstávají dosud neobjasněny. Hlavním cílem mého projektu je analyzovat expresi HIF3α v nádorových buněčných liniích, které byly vystaveny snížené 
hladině kyslíku. Ke zjištění exprese mRNA a detekci proteinů budou použity metody  qRT-PCR a western blot. Součástí detekce proteinů bude testování kvality HIF3α protilátek s cílem nalézt nejvhodnějšího kandidáta pro následné použití při chromatinové imunoprecipitaci.",
					"jenass@seznam.cz",
					"<strong>školitel na MU:</strong> Dr. Jiří Pacherník",
					"<strong>školitel na KI:</strong> Prof. Lorenz Poellinger"
);	


person_details (
					"Mgr. Simona Hankeová",
					"hankeova.jpg",
					"Simona se věnuje problematice interakce Wnt a Notch signálních drah, které jsou nezbytné např. pro vývoj organismů. ",
					"269618@mail.muni.cz",
					"<strong>školitel na MU:</strong> Dr. Vítězslav Bryja",
					"<strong>školitel na KI:</strong> Dr. Emma Andersson"
);		


person_details (
					"Mgr. Barbora Bujoková",
					"bujokova.jpg",
					"Barbora ve svém projektu zkoumá mechanismus buněčné smrti vyvoplaný 5-fluorouracilem u buněk rakoviny tlustého třeva. Výzkum je zaměřen na opravu poškozené DNA a význam proteinu p53 v těchto procesech.",
					"bujokova@ibp.cz",
					"<strong>školitel na MU:</strong> Dr. Alena Hyršlová",
					"<strong>školitel na KI:</strong> Prof. Boris Zhivotovski a Dr. Magnus Olsson"
);		


person_details (
					"Mgr. Iva Jelínková",
					"",
					"",
					"ivina@ibp.cz",
					"<strong>školitel na MU:</strong> Dr. Alena Hyršlová",
					"<strong>školitel na KI:</strong> Prof. Boris Zhivotovski a Dr. Magnus Olsson"
);		


person_details (
					"Dilshad Shaik Mohatad MSc.",
					"dilshad.jpg",
					"V rámci tohoto projektu Dilshad studuje molekulární mechanismy zodpovědné za interakce polycyklických aromatických uhlovodíků (PAU) v buňkách epitelu tlustého střeva, se zaměřením na deregulovanou kanonickou Wnt signalizaci.  PAU jsou významné karcinogenní látky znečišťující životní prostředí a potravinové kontaminanty, které pravděpodobně přispívají k rozvoji kolorektálního karcinomu. Výsledky navrhovaného projektu budou poskytovat klíčové informace o mechanismech vedoucích ke změnám v expresi /aktivitě enzymů podílejících se na bioaktivaci PAU a ajejich vliv na detoxikaci,  proliferaci, diferenciaci a přežívání epiteliálních a nádorových buněk tlustého střeva. ",
					"dilshad.sm@ibp.cz",
					"<strong>školitel na MU:</strong> Dr. Jan Vondráček",
					"<strong>školitel na KI:</strong> Prof. Lorenz Poellinger"
);		


person_details (
					"Mgr. Martin Běhal",
					"",
					"",
					"mates.behal@gmail.com",
					"<strong>školitel na MU:</strong> Dr. Vítězslav Bryja",
					"<strong>školitel na KI:</strong>"
);			

} else {
	
person_details (
					"Mgr. Markéta Kaucká Ph.D.",
					"kaucka.jpg",
					"Markéta deals with the study of Planar cell polarity (PCP) pathway. PCP pathway is evolutionary conserved signaling pathway that was first identified in Drosophila where it acts as a key regulator of cell polarity and cell migration. Chronic Lymphocytic Leukemia(CLL) is the most common form of leukemia in Western countries found in adults. CLL is characterized by a monoclonal expansion and accumulation of functionally incompetent B lymphocytes.<br /> The main goal of KIMU project was a detailed investigation of molecular
mechanisms underlying the impaired CLL lymphocyte migration from the patients suffering from CLL. This project required learning, adapting and optimalization of novel methods, mainly using the microfluidic pipette prototype (Avalance Technologies), confocal microscope ZEISS LSM710 and Amaxa nucleofection 4D systems (Lonza) as well as extensive study of specialized literature from the field of interest.<br /> Markéta finished her work on the project in April 2013, when she successfully defended her dissertation on this topic.",
					"marketa.kaucka@gmail.com",
					"<strong>Supervisor at MU:</strong> Dr. Vítězslav Bryja",
					"<strong>Supervisor at KI:</strong> Dr. Gunnar Schulte"
);
	
person_details (
					"Mgr. Kateřina Straková",
					"strakova.jpg",
					"Katka deals with the analysis of post-translational modifications of Frizzled receptors and her job is to analyze posttranslational modification of these receptors using mass spectrometry and other biochemical and molecular biological methods.",
					"269355@mail.muni.cz",
					"<strong>Supervisor at MU:</strong> Dr. Vítězslav Bryja",
					"<strong>Supervisor at KI:</strong> Dr. Gunnar Schulte"
);	
	
	
person_details (
					"Mgr. Karol Kaiser",
					"kaiser.jpg",
					"Main goal of Karol’s project is to analyze mechanisms of distribution of morphogenes in central nervous system. This project represents particularly interesting combination of opportunities to explore the role of morphogenes in the embryogenesis of central nervous system with potential application in the improvement of differentiation protocols used in the treatment of broad spectrum of neurodegenerative diseases including Parkinson disease.",
					"dr.house@mail.muni.cz",
					"<strong>Supervisor at MU:</strong> Dr. Vítězslav Bryja",
					"<strong>Supervisor at KI:</strong> Dr. Carlos Villaescusa"
);		
	
person_details (
					"Mgr. Zuzana Šrámková",
					"",
					"",
					"262700@mail.muni.cz",
					"<strong>Supervisor at MU:</strong> Dr. Jiřina Medalová (Procházková)",
					"<strong>Supervisor at KI:</strong> Dr. Petra Sekyrová"
);			
	
	
person_details (
					"Mgr. Jan Kučera",
					"kucera.jpg",
					"Honza’s work on the project is to study the molecular mechanism of hypoxia.  Hypoxia inducible factor (HIF) is master regulator of cellular response to low oxygen level, controlling the expression of many genes whose products are involved in maintenance of oxygen homeostasis. Whereas HIF1α and HIF2α are well described, little is known about regulation and function of HIF3α. Main aim of my project is to analyze expression of HIF3α in various cancer cell lines exposed to hypoxia (1% O2). Expression of mRNA and protein levels will be determined using qRT-PCR and western blot technique, followed by  screening for high-quality HIF3α antibody, which can be utilized for  chromatin immunoprecipitation assay.",
					"jenass@seznam.cz",
					"<strong>Supervisor at MU:</strong> Dr. Jiří Pacherník",
					"<strong>Supervisor at KI:</strong> Prof. Lorenz Poellinger"
);	


person_details (
					"Mgr. Simona Hankeová",
					"hankeova.jpg",
					"Simona is dedicated to the study of interaction of Wnt and Notch signaling pathways that are essential for the development of organisms.",
					"269618@mail.muni.cz",
					"<strong>Supervisor at MU:</strong> Dr. Vítězslav Bryja",
					"<strong>Supervisor at KI:</strong> Dr. Emma Andersson"
);		


person_details (
					"Mgr. Barbora Bujoková",
					"bujokova.jpg",
					"In this projekt we are interested in mechanisms of 5-fluorouracil-induced cell death in colon cancer cells. The main attention is focused on DNA damage repair and role of p53 in those processes.",
					"bujokova@ibp.cz",
					"<strong>Supervisor at MU:</strong> Dr. Alena Hyršlová",
					"<strong>Supervisor at KI:</strong> Prof. Boris Zhivotovski a Dr. Magnus Olsson"
);		


person_details (
					"Mgr. Iva Jelínková",
					"",
					"",
					"ivina@ibp.cz",
					"<strong>Supervisor at MU:</strong> Dr. Alena Hyršlová",
					"<strong>Supervisor at KI:</strong> Prof. Boris Zhivotovski a Dr. Magnus Olsson"
);		


person_details (
					"Dilshad Shaik Mohatad MSc.",
					"dilshad.jpg",
					"In this project Dilshad proposes to study the molecular mechanisms responsible for the interactions of Polycyclic aromatic hydrocarbons (PAHs) within colon epithelial cells, with a specific focus on deregulated canonical Wnt signaling.  (PAHs) are important carcinogenic environmental pollutants and dietary contaminants, which are suspected to contribute to colorectal carcinoma development. The results of the proposed project will provide key information about the mechanisms leading to alterations of expression/activities of enzymes contributing to PAH bioactivation and detoxification, proliferation, survival and differentiation of colon epithelial and tumor cells. ",
					"dilshad.sm@ibp.cz",
					"<strong>Supervisor at MU:</strong> Dr. Jan Vondráček",
					"<strong>Supervisor at KI:</strong> Prof. Lorenz Poellinger"
);		


person_details (
					"Mgr. Martin Běhal",
					"",
					"",
					"mates.behal@gmail.com",
					"<strong>Supervisor at MU:</strong> Dr. Vítězslav Bryja",
					"<strong>Supervisor at KI:</strong>"
);			
	
}

?>