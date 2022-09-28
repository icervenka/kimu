<?php
	
	function photogallery($alb) {
		$album = $alb;
		
		$thumbsPath = "fotogalerie/".$album."/thumbs/";
		$imagesPath = "fotogalerie/".$album;
		
		$thumbs = array();
		$images = array();
	
		if ($handle = opendir($thumbsPath)) {
	
			while (false != ($file = readdir($handle))) {
			   // just skip the reference to current and parent directory 
			   if ($file != "." && $file != "..") {
					$thumbs[] = $file;
			   }
			}
		}
		
		if ($handle = opendir($imagesPath)) {
	
			while (false != ($file = readdir($handle))) {
			   // just skip the reference to current and parent directory 
			   if ($file != "." && $file != "..") {
					$images[] = $file;
			   }
			}
		}
		
		$total = count($thumbs);
		
		sort($thumbs);
		
		echo "<table>";
		for($i = 0; $i < $total; ) {
			echo "<tr>";
			for($j = 0; $j < 5 && $i < $total; $j++) {
				$curr = $i + 1;
				print "<td><a href=\"fotogalerie/photo_app.php?album=$album&current=$curr\" target=\"_blank\"><img src=\"fotogalerie/$album/thumbs/$thumbs[$i]\" /></td>";
				$i++;
			}
			echo "</tr>";
		}
		echo "</table>";	
	}
	
	
?>