<!DOCTYPE HTML>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="../style/style.css" />

<?php
	$album = $_GET['album'];
	$current = $_GET['current'];
	$cap;
	
	if(file_exists($album."_captions.php")) {
		include_once($album."_captions.php");
		$cap = TRUE;
	} else {
		$cap = FALSE;
	}
	
	$next = $current + 1;
	$prev = $current - 1;
	$dirPath = "../fotogalerie/".$album."/";
	$files = array();
	
	if ($handle = opendir($dirPath)) {

		while (false != ($file = readdir($handle))) {
		   // just skip the reference to current and parent directory 
		   if ($file != "." && $file != ".." && $file != "thumbs") {
				$files[] = $file;
		   }
		}
	}

	
	$total = count($files);
	
	
	
	print "<html><head><title>$album - $current</title></head><body class=\"dark\">";
	print "<div id=\"photo\"><div class=\"centering\">";
	
	
	
	print "<div id=\"arrow_left\">";
	if($current > 1) {
		print "<a href=\"photo_app.php?album=$album&current=$prev\" ><img src=\"../style/back_ar.png\"/></a>";
	} else {
		print "<img class=\"hidden\" src=\"../style/back_ar.png\"/>";
	}
	print "</div>";
	
	print "<div id=\"picture\">";
	if($cap) {
		if(array_key_exists(($current-1), $captions)) {
			print "<h1><b>".$current." - ".$captions[$current-1]."</b></h1>";
		} else {
			print "<h1><b>$current</b></h1>";
		}
	}
	print "<img class=\"border\" src=\"".$dirPath.$album;
	if ($current < 10) {
		echo "0";
	}
	echo $current.".jpg\" />";
	print "</div>";
	

	print "<div id=\"arrow_right\">";
	if($current < $total) {
		print"<a href=\"photo_app.php?album=$album&current=$next\" ><img src=\"../style/next_ar.png\"/></a>";
	} else {
		print "<img class=\"hidden\" src=\"../style/next_ar.png\"/>";
	}
	print "</div>";
	
	print "</div>";
	
	$thumbsPath = $album."/thumbs/";
	$thumbs = array();
	
	if ($handle = opendir($thumbsPath)) {

		while (false != ($file = readdir($handle))) {
		   // just skip the reference to current and parent directory 
		   if ($file != "." && $file != ".." && $file != "thumbs") {
				$thumbs[] = $file;
		   }
		}
	}
	
	sort($thumbs);
	
	print "<div id=\"block\" class=\"center\"><br />";
	for($i = ($current-6); $i <= ($current + 4); $i++) {
		if($i >= 0 && $i <= $total-1) {
			$thumb = $thumbs[$i];
			$j = $i + 1;
			print "<a href=\"photo_app.php?album=$album&current=$j\"><img class=\"photogallery\" ";
			if($current == ($j)) {echo "id=\"photo_sel\" ";}
			print "src=\"".$thumbsPath.$thumb."\" /></a>";
		} else {
			print "<img class=\"photogallery\" src=\"placeholder.png\">";
		}
	}
	
	print "</p></div></div></body></html>";
	
?>
